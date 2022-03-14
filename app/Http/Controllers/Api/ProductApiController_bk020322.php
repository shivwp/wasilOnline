<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\ProductVariants;
use App\Models\ProductAttribute;
use App\Models\PageMeta;
use App\Models\Coupon;
use App\Models\Cart;
use App\Models\Setting;
use App\Models\Wishlist;
use App\Models\VendorSetting;
use App\Models\Feedback;
use App\Http\Traits\CurrencyTrait;
use Auth;
use Carbon;
use Validator;
use DB;

class ProductApiController extends Controller
{
   use CurrencyTrait;
   
    public function index(Request $request)
    {

        $prod=Product::orderBy('id', 'DESC')->where('product_type','!=','giftcard')->where('product_type','!=','card')->where('parent_id','=',0);

        if(!empty($request->location)){
            $prod->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
            $prod->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
        }
        
        if($request->category_id){
            $prod->where('cat_id',$request->category_id); 
        }
        if($request->price_range){
            $exp = explode("-",$request->price_range); 
                $min_price = $exp[0];
                $max_price = $exp[1];
                $prod->whereBetween('s_price', [$min_price, $max_price]);

            }
        if($request->in_stock){
         if($request->in_stock == true){
            $prod->where('in_stock','>',0);     
         }
        }
        if($request->attr_value_id){

            $ProductAttribute = ProductAttribute::select('product_id')->whereIn('attr_value_id',$request->attr_value_id)->groupBy('product_id')->get();
            $proidmatch = [];
            if(count($ProductAttribute)>0){
                foreach($ProductAttribute as $pro_attr => $pro_value){
                    $proidmatch[] = $pro_value->product_id;        
                }
            }
            if(!empty($proidmatch)){
                $prod->whereIn('id', $proidmatch);      

            }
        }
        if(!empty($request->page) && !empty($request->limit)){
            $page = $request->page;
            $limit = $request->limit;
            $product = $prod->limit($limit)->offset(($page - 1) * $limit)->get();

        }
        else{
        $product = $prod->get();
        }
        if(count($product) > 0){
            foreach($product as $key => $val){
                $data = [];
                $gallery = json_decode($val->gallery_image);
                if(!empty($gallery)){
                    foreach ($gallery as $key1 => $value) {
                        $value1 = url('products/gallery/' . $value);
                        $data[] = $value1;
                    }
                $product[$key]['gallery_image'] = $data;
                }
                if(!empty($val->featured_image)){
                $product[$key]['featured_image'] = url('products/feature/'. $val->featured_image);
                }
                //cart & wishlist
                    if (Auth::guard('api')->check()) {
                        $user = Auth::guard('api')->user();
                        $user_id = $user->id;
                    } 
                    if(isset($user_id)){
                        $Cart =    Cart::where('user_id',$user_id)->where('product_id',$val->id)->first();
                        if(!empty($Cart)){
                            $product[$key]['in_cart'] = true;
                        }
                        else{
                            $product[$key]['in_cart'] = false;     
                        }
                        $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$val->id)->first();
                        if(!empty($wishlist)){
                            $product[$key]['in_wishlist'] = true;
                        }
                        else{
                            $product[$key]['in_wishlist'] = false;    

                        }
                    }
                    else{
                        $product[$key]['in_cart'] = false;
                        $product[$key]['in_wishlist'] = false;

                    }
                // currency 
                if(!empty($request->currency_code)){
                    $currency = $this->currencyFetch($request->currency_code);
                    $product[$key]['currency_sign'] = $currency['sign'];
                    $product[$key]['currency_code'] = $currency['code'];
                }
                if($val->product_type == "single"){
                    $productAttributes = ProductAttribute::where('product_id',$val->id)->groupBy('attr_id')->get();
                    if(count($productAttributes)>0){
                        foreach($productAttributes as $attr_key => $attr_val){
                            $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                            $attrdata[] = $attr;
                        }
                        if(!empty($attrdata)){
                            foreach($attrdata as $d => $dv){
                                $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                                $attrval = [];
                                foreach($proattragain as $ag => $proagain){
                                    $attrval[] = $proagain->attr_value_id;
                
                                }
                                $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                                
                                $attrdata[$d]['attribute_value'] = $attr_value;
                            }
                        }
                        //cart 

                        $product[$key]['attributes'] = $attrdata;
                    }
                }
                else{
                    $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$val->id)->get();
                    if(count($productVariants) > 0){
                        $arr_attr = [];
                        $variants_img = [];
                        foreach($productVariants as $v_k => $v_val){
                            foreach(json_decode($v_val->variant_value) as $key_var =>   $val_var) {
                                $attrval = AttributeValue::where('id', $val_var)->first();
                                $arr_attr[$key_var]['key'] = $attrval->attr_value_name;
                                $arr_attr[$key_var]['value'] = $val_var; 
                                $productVariants[$v_k]['variant_value'] = $arr_attr;
                            }
                            if(!empty($v_val->variant_images)){
                                foreach(json_decode($v_val->variant_images) as $key_var_img =>   $val_var_img) {
                                    $variants_img[] = url('products/gallery/' . $val_var_img);
                                    $productVariants[$v_k]['variant_images'] = $variants_img;
                                }
                            }
                            
                        }
                        $product[$key]['variants'] = $productVariants;
                    }
                }
                 

            }
            return response()->json(['status' => true, 'message' => "All product list", 'product' => $product], 200);
        }
        else{
            return response()->json(['status' => false, 'message' => "Product Not Found", 'product' => []], 200);
        }
       
    }
   
    public function create()
    {
        //
    }
     public function relatedproduct(Request $request)
    {
        $pro=Product::orderBY('id','DESC')->where('parent_id','=',0)->where('cat_id','=',$request->cat_id)->limit('5')->where('product_type','!=','giftcard')->where('product_type','!=','card');
        if(!empty($request->location)){
            $pro->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
            $pro->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
        }
        $product = $pro->get();
        $banner = Setting::where('name','=','arrival_banner')->first('value');
        $products = [];
        $url = PageMeta::where('key','new_product_url')->first();
        if(count($product)>0){
        foreach($product as $key => $val){
            $data = [];
            $gallery = json_decode($val->gallery_image);
            if(!empty($gallery)){
                foreach ($gallery as $key1 => $value) {
                    $value1 = url('products/gallery/' . $value);
                    $data[] = $value1;
                }
            $product[$key]['gallery_image'] = $data;
            }
            if(!empty($val->featured_image)){
            $product[$key]['featured_image'] = url('products/feature/'. $val->featured_image);
            }
             //cart & wishlist
             if (Auth::guard('api')->check()) {
                $user = Auth::guard('api')->user();
                $user_id = $user->id;
            } 
            if(isset($user_id)){
                $Cart =    Cart::where('user_id',$user_id)->where('product_id',$val->id)->first();
                if(!empty($Cart)){
                    $product[$key]['in_cart'] = true;
                }
                else{
                    $product[$key]['in_cart'] = false;     
                }
                $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$val->id)->first();
                if(!empty($wishlist)){
                    $product[$key]['in_wishlist'] = true;
                }
                else{
                    $product[$key]['in_wishlist'] = false;    

                }
            }
            else{
                $product[$key]['in_cart'] = false;
                $product[$key]['in_wishlist'] = false;

            }
             // currency 
             if(!empty($request->currency_code)){
                $currency = $this->currencyFetch($request->currency_code);
                $product[$key]['currency_sign'] = $currency['sign'];
                $product[$key]['currency_code'] = $currency['code'];
            }

            if($val->product_type == "single"){
                $productAttributes = ProductAttribute::where('product_id',$val->id)->groupBy('attr_id')->get();
                if(count($productAttributes)>0){
                    foreach($productAttributes as $attr_key => $attr_val){
                        $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                        $attrdata[] = $attr;
                    }
                    if(!empty($attrdata)){
                        foreach($attrdata as $d => $dv){
                            $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                            $attrval = [];
                            foreach($proattragain as $ag => $proagain){
                                $attrval[] = $proagain->attr_value_id;
            
                            }
                            $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                            
                            $attrdata[$d]['attribute_value'] = $attr_value;
                        }
                    }
                    $product[$key]['attributes'] = $attrdata;
                }
            }
            else{
                $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$val->id)->get();
                if(count($productVariants) > 0){
                    $arr_attr = [];
                    $variants_img = [];
                    foreach($productVariants as $v_k => $v_val){
                        foreach(json_decode($v_val->variant_value) as $key_var =>   $val_var) {
                            $attrval = AttributeValue::where('id', $val_var)->first();
                            $arr_attr[$key_var]['key'] = $attrval->attr_value_name;
                            $arr_attr[$key_var]['value'] = $val_var; 
                            $productVariants[$v_k]['variant_value'] = $arr_attr;
                        }
                        if(!empty($v_val->variant_images)){
                            foreach(json_decode($v_val->variant_images) as $key_var_img =>   $val_var_img) {
                                $variants_img[] = url('products/gallery/' . $val_var_img);
                                $productVariants[$v_k]['variant_images'] = $variants_img;
                            }
                        }
                        
                    }
                    $product[$key]['variants'] = $productVariants;
                }
            }

        }
         $products['product'] = $product;
         $banner['image']  = url('images/'. $banner->value);
         return response()->json(['status' => true, 'message' => "success",'banner'=>$banner['image'], 'product' => $products], 200);        
        }
        else{
            return response()->json(['status' => false, 'message' => "unsuccess", 'product' => []], 200);            
        }
    }

    public function productAttributes(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required'
        ]);
        $resultattrdata = [];
        $product=Product::where('id','=',$request->product_id)->first();
        if(!empty($product)){
            if($product->product_type == "single"){
                $productAttributes = ProductAttribute::where('product_id',$product->id)->groupBy('attr_id')->get();
                if(count($productAttributes)>0){
                    foreach($productAttributes as $attr_key => $attr_val){
                        $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                        $attrdata[] = $attr;
                    }
                    if(!empty($attrdata)){
                        foreach($attrdata as $d => $dv){
                            $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                            $attrval = [];
                            foreach($proattragain as $ag => $proagain){
                            $attrval[] = $proagain->attr_value_id;
            
                            }
                            $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                            
                        $attrdata[$d]['attribute_value'] = $attr_value;
                        }
                    }
                    $resultattrdata[] = $attrdata;
                }
            }
            else{
                $variants = [];
                $variations = DB::table('variations')->where('parent_id',$request->product_id)->where('attribute_id',$request->attribute_id)->where('attribute_term_id',$request->attr_value_id)->get();
                foreach($variations as $key => $vAL){
                   $variants[] = $vAL->variant_id;
                }
                $resultattrdata = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->whereIn('id',$variants)->get();
                $arr_attr = [];
                foreach($resultattrdata as $v_key => $v_val){
                    foreach(json_decode($v_val->variant_value) as $key1 =>  $val1){
                        $attrval = AttributeValue::where('id', $val1)->first();
                        $arr_attr[$key1]['key'] = $attrval->attr_value_name;
                        $arr_attr[$key1]['value'] = $val1; 
                        $resultattrdata[$v_key]['variant_value'] = $arr_attr;
                    }

                }
            }


        return response()->json(['status' => true, 'message' => "success", 'attributes' => $resultattrdata], 200); 

        }
        else{
            return response()->json(['status' => false, 'message' => "not found", 'attributes' => []], 200);       
        }

       
    }

    
    public function newproduct(Request $request)
    {
        // $product=Product::orderBY('id','DESC')->where('parent_id','=',0)->where('product_type','!=','giftcard')->where('product_type','!=','card')->limit('8'); 
        $pro = Product::orderBY('products.id','DESC')->where('parent_id','=',0)->where('product_type','!=','giftcard')->where('product_type','!=','card')->limit('8');
        if(!empty($request->location)){
            $pro->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
            $pro->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
        }
        $product = $pro->get();
        $banner = Setting::where('name','=','arrival_banner')->first('value');
        $products = [];
        $url = PageMeta::where('key','new_product_url')->first();
        if(count($product)>0){
        foreach($product as $key => $val){
            $data = [];
            $gallery = json_decode($val->gallery_image);
            if(!empty($gallery)){
                foreach ($gallery as $key1 => $value) {
                    $value1 = url('products/gallery/' . $value);
                    $data[] = $value1;
                }
            $product[$key]['gallery_image'] = $data;
            }
            if(!empty($val->featured_image)){
            $product[$key]['featured_image'] = url('products/feature/'. $val->featured_image);
            }
             //cart & wishlist
             if (Auth::guard('api')->check()) {
                $user = Auth::guard('api')->user();
                $user_id = $user->id;
            } 
            if(isset($user_id)){
                $Cart =    Cart::where('user_id',$user_id)->where('product_id',$val->id)->first();
                if(!empty($Cart)){
                    $product[$key]['in_cart'] = true;
                }
                else{
                    $product[$key]['in_cart'] = false;     
                }
                $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$val->id)->first();
                if(!empty($wishlist)){
                    $product[$key]['in_wishlist'] = true;
                }
                else{
                    $product[$key]['in_wishlist'] = false;    

                }
            }
            else{
                $product[$key]['in_cart'] = false;
                $product[$key]['in_wishlist'] = false;

            }
             // currency 
             if(!empty($request->currency_code)){
                $currency = $this->currencyFetch($request->currency_code);
                $product[$key]['currency_sign'] = $currency['sign'];
                $product[$key]['currency_code'] = $currency['code'];
            }
            if($val->product_type == "single"){
                $productAttributes = ProductAttribute::where('product_id',$val->id)->groupBy('attr_id')->get();
                if(count($productAttributes)>0){
                    foreach($productAttributes as $attr_key => $attr_val){
                        $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                        $attrdata[] = $attr;
                    }
                    if(!empty($attrdata)){
                        foreach($attrdata as $d => $dv){
                            $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                            $attrval = [];
                            foreach($proattragain as $ag => $proagain){
                                $attrval[] = $proagain->attr_value_id;
            
                            }
                            $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                            
                            $attrdata[$d]['attribute_value'] = $attr_value;
                        }
                    }
                    $product[$key]['attributes'] = $attrdata;
                }
            }
            else{
                $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$val->id)->get();
                if(count($productVariants) > 0){
                    $arr_attr = [];
                    $variants_img = [];
                    foreach($productVariants as $v_k => $v_val){
                        foreach(json_decode($v_val->variant_value) as $key_var =>   $val_var) {
                            $attrval = AttributeValue::where('id', $val_var)->first();
                            $arr_attr[$key_var]['key'] = $attrval->attr_value_name;
                            $arr_attr[$key_var]['value'] = $val_var; 
                            $productVariants[$v_k]['variant_value'] = $arr_attr;
                        }
                        if(!empty($v_val->variant_images)){
                            foreach(json_decode($v_val->variant_images) as $key_var_img =>   $val_var_img) {
                                $variants_img[] = url('products/gallery/' . $val_var_img);
                                $productVariants[$v_k]['variant_images'] = $variants_img;
                            }
                        }
                        
                    }
                    $product[$key]['variants'] = $productVariants;
                }
            }

        }
         $products['product'] = $product;
         $banner['image']  = url('images/'. $banner->value);
         return response()->json(['status' => true, 'message' => "success",'banner'=>$banner['image'], 'product' => $products], 200);        
        }
        else{
            return response()->json(['status' => false, 'message' => "unsuccess", 'product' => []], 200);            
        }
        
    }
    public function bestseller(Request $request){
        $prod=Product::where('best_saller',1)->where('parent_id','=',0)->where('product_type','!=','giftcard')->where('product_type','!=','card')->limit('5'); 
        if(!empty($request->location)){
            $prod->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
            $prod->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
        }
        $product = $prod->get();
        $products = [];
        if(count($product)>0){
         $products['url'] = 'sfcsd';
        foreach($product as $key => $val){
            $data = [];
            $gallery = json_decode($val->gallery_image);
            if(!empty($gallery)){
                foreach ($gallery as $key1 => $value) {
                    $value1 = url('products/gallery/' . $value);
                    $data[] = $value1;
                }
            $product[$key]['gallery_image'] = $data;
            }
            if(!empty($val->featured_image)){
            $product[$key]['featured_image'] = url('products/feature/'. $val->featured_image);
            }
             //cart & wishlist
             if (Auth::guard('api')->check()) {
                $user = Auth::guard('api')->user();
                $user_id = $user->id;
            } 
            if(isset($user_id)){
                $Cart =    Cart::where('user_id',$user_id)->where('product_id',$val->id)->first();
                if(!empty($Cart)){
                    $product[$key]['in_cart'] = true;
                }
                else{
                    $product[$key]['in_cart'] = false;     
                }
                $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$val->id)->first();
                if(!empty($wishlist)){
                    $product[$key]['in_wishlist'] = true;
                }
                else{
                    $product[$key]['in_wishlist'] = false;    

                }
            }
            else{
                $product[$key]['in_cart'] = false;
                $product[$key]['in_wishlist'] = false;

            }
            // currency 
            if(!empty($request->currency_code)){
                $currency = $this->currencyFetch($request->currency_code);
                $product[$key]['currency_sign'] = $currency['sign'];
                $product[$key]['currency_code'] = $currency['code'];
            }
            if($val->product_type == "single"){
                $productAttributes = ProductAttribute::where('product_id',$val->id)->groupBy('attr_id')->get();
                if(count($productAttributes)>0){
                    foreach($productAttributes as $attr_key => $attr_val){
                        $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                        $attrdata[] = $attr;
                    }
                    if(!empty($attrdata)){
                        foreach($attrdata as $d => $dv){
                            $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                            $attrval = [];
                            foreach($proattragain as $ag => $proagain){
                                $attrval[] = $proagain->attr_value_id;
            
                            }
                            $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                            
                            $attrdata[$d]['attribute_value'] = $attr_value;
                        }
                    }
                    $product[$key]['attributes'] = $attrdata;
                }
            }
            else{
                $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$val->id)->get();
                if(count($productVariants) > 0){
                    $arr_attr = [];
                    $variants_img = [];
                    foreach($productVariants as $v_k => $v_val){
                        foreach(json_decode($v_val->variant_value) as $key_var =>   $val_var) {
                            $attrval = AttributeValue::where('id', $val_var)->first();
                            $arr_attr[$key_var]['key'] = $attrval->attr_value_name;
                            $arr_attr[$key_var]['value'] = $val_var; 
                            $productVariants[$v_k]['variant_value'] = $arr_attr;
                        }
                        if(!empty($v_val->variant_images)){
                            foreach(json_decode($v_val->variant_images) as $key_var_img =>   $val_var_img) {
                                $variants_img[] = url('products/gallery/' . $val_var_img);
                                $productVariants[$v_k]['variant_images'] = $variants_img;
                            }
                        }
                        
                    }
                    $product[$key]['variants'] = $productVariants;
                }
            }

            

        }  
        $products['product'] = $product;
            return response()->json(['status' => true, 'message' => "success", 'product' => $products], 200);        
        }
        else{
            return response()->json(['status' => false, 'message' => "unsuccess", 'product' => []], 200);            
        }
    }

    public function trendingProduct(Request $request){

        $pro=Product::orderBY('avg_rating','DESC')->where('parent_id','=',0)->where('product_type','!=','giftcard')->where('product_type','!=','card')->limit('7'); 
        if(!empty($request->location)){
            $pro->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
            $pro->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
        }
        $product = $pro->get();
        $products = [];
        if(count($product)>0){
         $products['url'] = 'sfcsd';
        foreach($product as $key => $val){
            $data = [];
            $gallery = json_decode($val->gallery_image);
            if(!empty($gallery)){
                foreach ($gallery as $key1 => $value) {
                    $value1 = url('products/gallery/' . $value);
                    $data[] = $value1;
                }
            $product[$key]['gallery_image'] = $data;
            }
            if(!empty($val->featured_image)){
            $product[$key]['featured_image'] = url('products/feature/'. $val->featured_image);
            }
             //cart & wishlist
             if (Auth::guard('api')->check()) {
                $user = Auth::guard('api')->user();
                $user_id = $user->id;
            } 
            if(isset($user_id)){
                $Cart =    Cart::where('user_id',$user_id)->where('product_id',$val->id)->first();
                if(!empty($Cart)){
                    $product[$key]['in_cart'] = true;
                }
                else{
                    $product[$key]['in_cart'] = false;     
                }
                $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$val->id)->first();
                if(!empty($wishlist)){
                    $product[$key]['in_wishlist'] = true;
                }
                else{
                    $product[$key]['in_wishlist'] = false;    

                }
            }
            else{
                $product[$key]['in_cart'] = false;
                $product[$key]['in_wishlist'] = false;

            }
            // currency 
            if(!empty($request->currency_code)){
                $currency = $this->currencyFetch($request->currency_code);
                $product[$key]['currency_sign'] = $currency['sign'];
                $product[$key]['currency_code'] = $currency['code'];
            }
            if($val->product_type == "single"){
                $productAttributes = ProductAttribute::where('product_id',$val->id)->groupBy('attr_id')->get();
                if(count($productAttributes)>0){
                    foreach($productAttributes as $attr_key => $attr_val){
                        $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                        $attrdata[] = $attr;
                    }
                    if(!empty($attrdata)){
                        foreach($attrdata as $d => $dv){
                            $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                            $attrval = [];
                            foreach($proattragain as $ag => $proagain){
                                $attrval[] = $proagain->attr_value_id;
            
                            }
                            $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                            
                            $attrdata[$d]['attribute_value'] = $attr_value;
                        }
                    }
                    $product[$key]['attributes'] = $attrdata;
                }
            }
            else{
                $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$val->id)->get();
                if(count($productVariants) > 0){
                    $arr_attr = [];
                    $variants_img = [];
                    foreach($productVariants as $v_k => $v_val){
                        foreach(json_decode($v_val->variant_value) as $key_var =>   $val_var) {
                            $attrval = AttributeValue::where('id', $val_var)->first();
                            $arr_attr[$key_var]['key'] = $attrval->attr_value_name;
                            $arr_attr[$key_var]['value'] = $val_var; 
                            $productVariants[$v_k]['variant_value'] = $arr_attr;
                        }
                        if(!empty($v_val->variant_images)){
                            foreach(json_decode($v_val->variant_images) as $key_var_img =>   $val_var_img) {
                                $variants_img[] = url('products/gallery/' . $val_var_img);
                                $productVariants[$v_k]['variant_images'] = $variants_img;
                            }
                        }
                        
                    }
                    $product[$key]['variants'] = $productVariants;
                }
            }

            

        }  
        $products['product'] = $product;
            return response()->json(['status' => true, 'message' => "success", 'product' => $products], 200);        
        }
        else{
            return response()->json(['status' => false, 'message' => "unsuccess", 'product' => []], 200);            
        }


    }


    
    public function Featureproduct(Request $request){
        $pro=Product::where('featured',1)->where('parent_id','=',0)->where('product_type','!=','giftcard')->where('product_type','!=','card')->limit('8'); 
        if(!empty($request->location)){
            $pro->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
            $pro->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
        }
        $product = $pro->get();
        $products = [];
        if(count($product)>0){
         $products['url'] = 'sfcsd';
        foreach($product as $key => $val){
            $data = [];
            $gallery = json_decode($val->gallery_image);
            if(!empty($gallery)){
                foreach ($gallery as $key1 => $value) {
                    $value1 = url('products/gallery/' . $value);
                    $data[] = $value1;
                }
            $product[$key]['gallery_image'] = $data;
            }
            if(!empty($val->featured_image)){
            $product[$key]['featured_image'] = url('products/feature/'. $val->featured_image);
            }
             //cart & wishlist
             if (Auth::guard('api')->check()) {
                $user = Auth::guard('api')->user();
                $user_id = $user->id;
            } 
            if(isset($user_id)){
                $Cart =    Cart::where('user_id',$user_id)->where('product_id',$val->id)->first();
                if(!empty($Cart)){
                    $product[$key]['in_cart'] = true;
                }
                else{
                    $product[$key]['in_cart'] = false;     
                }
                $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$val->id)->first();
                if(!empty($wishlist)){
                    $product[$key]['in_wishlist'] = true;
                }
                else{
                    $product[$key]['in_wishlist'] = false;    

                }
            }
            else{
                $product[$key]['in_cart'] = false;
                $product[$key]['in_wishlist'] = false;

            }
            // currency 
            if(!empty($request->currency_code)){
                $currency = $this->currencyFetch($request->currency_code);
                $product[$key]['currency_sign'] = $currency['sign'];
                $product[$key]['currency_code'] = $currency['code'];
            }

            if($val->product_type == "single"){
                $productAttributes = ProductAttribute::where('product_id',$val->id)->groupBy('attr_id')->get();
                if(count($productAttributes)>0){
                    foreach($productAttributes as $attr_key => $attr_val){
                        $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                        $attrdata[] = $attr;
                    }
                    if(!empty($attrdata)){
                        foreach($attrdata as $d => $dv){
                            $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                            $attrval = [];
                            foreach($proattragain as $ag => $proagain){
                                $attrval[] = $proagain->attr_value_id;
            
                            }
                            $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                            
                            $attrdata[$d]['attribute_value'] = $attr_value;
                        }
                    }
                    $product[$key]['attributes'] = $attrdata;
                }
            }
            else{
                $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$val->id)->get();
                if(count($productVariants) > 0){
                    $arr_attr = [];
                    $variants_img = [];
                    foreach($productVariants as $v_k => $v_val){
                        foreach(json_decode($v_val->variant_value) as $key_var =>   $val_var) {
                            $attrval = AttributeValue::where('id', $val_var)->first();
                            $arr_attr[$key_var]['key'] = $attrval->attr_value_name;
                            $arr_attr[$key_var]['value'] = $val_var; 
                            $productVariants[$v_k]['variant_value'] = $arr_attr;
                        }
                        if(!empty($v_val->variant_images)){
                            foreach(json_decode($v_val->variant_images) as $key_var_img =>   $val_var_img) {
                                $variants_img[] = url('products/gallery/' . $val_var_img);
                                $productVariants[$v_k]['variant_images'] = $variants_img;
                            }
                        }
                        
                    }
                    $product[$key]['variants'] = $productVariants;
                }
            }

            

        }  
        $products['product'] = $product;
            return response()->json(['status' => true, 'message' => "success", 'product' => $products], 200);        
        }
        else{
            return response()->json(['status' => false, 'message' => "unsuccess", 'product' => []], 200);            
        }
    }
    
    public function singleproduct(Request $request){
        $product=Product::where('id','=',$request->id)->first();
        if(!empty($product)){
            $product->featured_image = url('products/feature/'. $product->featured_image);
            $gallery_data = [];
           // dd($product->gallery_image);
                if($product->gallery_image != "null"){
                    foreach(json_decode($product->gallery_image) as $gall_val){
                        $value1 = url('products/gallery/' . $gall_val);
                        $gallery_data[] = $value1;
                    }
                    $product->gallery_image = $gallery_data;
                }
                 //cart & wishlist
                 if (Auth::guard('api')->check()) {
                    $user = Auth::guard('api')->user();
                    $user_id = $user->id;
                } 
                if(isset($user_id)){
                    $Cart =    Cart::where('user_id',$user_id)->where('product_id',$product->id)->first();
                    if(!empty($Cart)){
                        $product['in_cart'] = true;
                    }
                    else{
                        $product['in_cart'] = false;     
                    }
                    $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$product->id)->first();
                    if(!empty($wishlist)){
                        $product['in_wishlist'] = true;
                    }
                    else{
                        $product['in_wishlist'] = false;    

                    }
                }
                else{
                    $product['in_cart'] = false;
                    $product['in_wishlist'] = false;

                }
                // currency 
                if(!empty($request->currency_code)){
                    $currency = $this->currencyFetch($request->currency_code);
                    $product['currency_sign'] = $currency['sign'];
                    $product['currency_code'] = $currency['code'];
                }
                if($product->product_type == "single"){
                    $productAttributes = ProductAttribute::where('product_id',$product->id)->groupBy('attr_id')->get();
                    if(count($productAttributes)>0){
                        foreach($productAttributes as $attr_key => $attr_val){
                            $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                            $attrdata[] = $attr;
                        }
                        if(!empty($attrdata)){
                            foreach($attrdata as $d => $dv){
                                $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                                $attrval = [];
                                foreach($proattragain as $ag => $proagain){
                                    $attrval[] = $proagain->attr_value_id;
                
                                }
                                $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                                
                                $attrdata[$d]['attribute_value'] = $attr_value;
                            }
                        }
                        $product['attributes'] = $attrdata;
                    }
                }
                else{
                    $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$product->id)->get();
                    if(count($productVariants) > 0){
                        $arr_attr = [];
                        $variants_img = [];
                        foreach($productVariants as $v_k => $v_val){
                            foreach(json_decode($v_val->variant_value) as $key_var =>   $val_var) {
                                $attrdataa = Attribute::where('slug', $key_var)->first();
                                $attrval = AttributeValue::where('id', $val_var)->first();
                                $arr_attr[$key_var]['attr_id'] = $attrdataa->id;
                                $arr_attr[$key_var]['attr_value'] = $attrval->attr_value_name;
                                $arr_attr[$key_var]['attr_value_id'] = $val_var; 
                                $productVariants[$v_k]['variant_value'] = $arr_attr;
                            }
                            if(!empty($v_val->variant_images)){
                                foreach(json_decode($v_val->variant_images) as $key_var_img =>   $val_var_img) {
                                    $variants_img[] = url('products/gallery/' . $val_var_img);
                                    $productVariants[$v_k]['variant_images'] = $variants_img;
                                }
                            }
                        $product['variants'] = $productVariants;
                            
                        }
                    
                    }
                }
          
            return response()->json(['status' => true, 'message' => "singleproduct", 'product' => $product], 200);

        }
        else{
            return response()->json(['status' => false, 'message' => "singleproduct", 'product' => []], 200);

        }

        
    }
    
   

    public function allFilters(Request $request)
    {
        if($request->category_id){
            $product = Product::where('cat_id',$request->category_id)->where('parent_id',0)->get();
            $pro_id = [];
            $attrdata = [];
            if(count($product) > 0){
                foreach($product as $key => $value){
                    $pro_id[] = $value->id;
                }
                if(!empty($pro_id)){
                    $proattr = ProductAttribute::whereIn('product_id',$pro_id)->groupBy('attr_id')->get();
                    if(count($proattr)>0){
                        foreach($proattr as $attr_key => $attr_val){
                            $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                            $attrdata[] = $attr;
                        }
                        if(!empty($attrdata)){
                            foreach($attrdata as $d => $dv){
                                $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                                $attrval = [];
                                foreach($proattragain as $ag => $proagain){
                                   $attrval[] = $proagain->attr_value_id;
                
                                }
                                $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                                
                              $attrdata[$d]['attribute_value'] = $attr_value;
                            }
                        }
                      
                       return response()->json(['status' => true, 'message' => "success", 'attributes' => $attrdata], 200);
                    }
                    else{
                        return response()->json(['status' => false, 'message' => "unsuccess", 'attributes' => []], 200);        
                    }
                }
                else{
                    return response()->json(['status' => false, 'message' => "unsuccess", 'attributes' => []], 200);
                }

            }
            else{
                return response()->json(['status' => false, 'message' => "unsuccess", 'attributes' => []], 200);
            }
        }
        else{

            $attributes = Attribute::select('id','slug')->get();
            if(count($attributes)>0){
                foreach($attributes as $key => $value){
                    $attributesValue = AttributeValue::select('id','attr_id','slug')->where('attr_id',$value->id)->get();
                    $attributes[$key]['attributes_value'] = $attributesValue;
                }
                return response()->json(['status' => true, 'message' => "success", 'attributes' => $attributes], 200);
            }
            else{

                return response()->json(['status' => false, 'message' => "unsuccess", 'attributes' => []], 200);

            }
           
        }
        

        
        
    }

    public function filterProduct(Request $request){
        DB::enableQueryLog();

        $product =Product::select('products.*')
                            ->where('parent_id','=',0);
        if(!empty($request->sorting)){
            $product->orderBy('id', $request->sorting);
        }
        if(!empty($request->category_id)){
            $product->where('cat_id',$request->category_id);
        }
        if(!empty($request->filter_data[0]) && $request->filter_data[0]['type']=="attribute" && !empty($request->filter_data[0]['attributes_id'])){
            $imp=$request->filter_data[0]['attributes_id'];
            $proattr = [];
            $proAttr = DB::table('product_attributes')->whereIn('attr_id', $imp)->get();
            foreach($proAttr as $key => $val){
               $proattr[] = $val->product_id; 
            }
            $product->whereIn('id',$proattr);
        }
        if(!empty($request->filter_data[0]) && $request->filter_data[0]['type']=="attribute_value" && !empty($request->filter_data[0]['attributes_value_id'])){
            $imp1   =   $request->filter_data[0]['attributes_value_id'];   
            $proattr1 = [];
            $proAttr1 = DB::table('product_attributes')->whereIn('attribute_value', $imp1)->get();
            foreach($proAttr1 as $key1 => $val1){
               $proattr1[] = $val->product_id; 
            }
            $product->whereIn('id',$proattr1);
        }
        if($request->filter_data[2]['min_price']){
            $product->where('s_price','>=',$request->filter_data[2]['min_price'])
                    ->where('s_price','<=',$request->filter_data[2]['max_price']);
           
        }

        $data = $product->get();

        //dd(DB::getQueryLog());

        return response()->json(['status' => true, 'message' => "success", 'data' => $data], 200);
      
    }


    public function searchProduct(Request $request){
        
        $category = Category::where('title', 'like', "%{$request->search}%")->get();

        if(count($category) > 0){

            $catId =  [];

            foreach($category as $key => $value){

                $catId[] = $value->id;

            }
        }

        if(!empty($catId)){

            if(!empty($request->page) && !empty($request->limit)){
                $page = $request->page;
                $limit = $request->limit;
                $pro=Product::where('parent_id',0)->whereIn('cat_id',$catId)
                ->orWhereIn('cat_id_2', $catId)
                ->orWhereIn('cat_id_3', $catId)
                ->limit($limit)
                ->offset(($page - 1) * $limit);
                if(!empty($request->location)){
                    $pro->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
                    $pro->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
                }
                $product = $pro->get();

            }
            else{

                $pro=Product::where('parent_id',0)->whereIn('cat_id',$catId)
                ->orWhereIn('cat_id_2', $catId)
                ->orWhereIn('cat_id_3', $catId);
                if(!empty($request->location)){
                    $pro->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
                    $pro->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
                }
                $product = $pro->get();
            }
        }
        else{
            if(!empty($request->page) && !empty($request->limit)){
            
                $pro=Product::where('parent_id',0)->where('pname', 'like', "%{$request->search}%")->limit($limit)
                ->offset(($page - 1) * $limit);  
                if(!empty($request->location)){
                    $pro->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
                    $pro->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
                }
                $product = $pro->get();

            }
            else{
                $pro=Product::where('parent_id',0)->where('pname', 'like', "%{$request->search}%"); 
                if(!empty($request->location)){
                    $pro->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
                    $pro->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
                }
                $product = $pro->get(); 
            }
        }
        if(count($product)>0){
            foreach($product as $key => $val){
                $data = [];
                $gallery = json_decode($val->gallery_image);
                if(!empty($gallery)){
                    foreach ($gallery as $key1 => $value) {
                        $value1 = url('products/gallery/' . $value);
                        $data[] = $value1;
                    }
                $product[$key]['gallery_image'] = $data;
                }
                if(!empty($val->featured_image)){
                $product[$key]['featured_image'] = url('products/feature/'. $val->featured_image);
                }
                //cart & wishlist
                if (Auth::guard('api')->check()) {
                    $user = Auth::guard('api')->user();
                    $user_id = $user->id;
                } 
                if(isset($user_id)){
                    $Cart =    Cart::where('user_id',$user_id)->where('product_id',$val->id)->first();
                    if(!empty($Cart)){
                        $product[$key]['in_cart'] = true;
                    }
                    else{
                        $product[$key]['in_cart'] = false;     
                    }
                    $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$val->id)->first();
                    if(!empty($wishlist)){
                        $product[$key]['in_wishlist'] = true;
                    }
                    else{
                        $product[$key]['in_wishlist'] = false;    

                    }
                }
                else{
                    $product[$key]['in_cart'] = false;
                    $product[$key]['in_wishlist'] = false;

                }
                 // currency 
                 if(!empty($request->currency_code)){
                    $currency = $this->currencyFetch($request->currency_code);
                    $product[$key]['currency_sign'] = $currency['sign'];
                    $product[$key]['currency_code'] = $currency['code'];
                }
                if($val->product_type == "single"){
                    $productAttributes = ProductAttribute::where('product_id',$val->id)->groupBy('attr_id')->get();
                    if(count($productAttributes)>0){
                        foreach($productAttributes as $attr_key => $attr_val){
                            $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                            $attrdata[] = $attr;
                        }
                        if(!empty($attrdata)){
                            foreach($attrdata as $d => $dv){
                                $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                                $attrval = [];
                                foreach($proattragain as $ag => $proagain){
                                    $attrval[] = $proagain->attr_value_id;
                
                                }
                                $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                                
                                $attrdata[$d]['attribute_value'] = $attr_value;
                            }
                        }
                        $product[$key]['attributes'] = $attrdata;
                    }
                }
                else{
                    $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$val->id)->get();
                    if(count($productVariants) > 0){
                        $arr_attr = [];
                        $variants_img = [];
                        foreach($productVariants as $v_k => $v_val){
                            foreach(json_decode($v_val->variant_value) as $key_var =>   $val_var) {
                                $attrval = AttributeValue::where('id', $val_var)->first();
                                $arr_attr[$key_var]['key'] = $attrval->attr_value_name;
                                $arr_attr[$key_var]['value'] = $val_var; 
                                $productVariants[$v_k]['variant_value'] = $arr_attr;
                            }
                            if(!empty($v_val->variant_images)){
                                foreach(json_decode($v_val->variant_images) as $key_var_img =>   $val_var_img) {
                                    $variants_img[] = url('products/gallery/' . $val_var_img);
                                    $productVariants[$v_k]['variant_images'] = $variants_img;
                                }
                            }
                            
                        }
                        $product[$key]['variants'] = $productVariants;
                    }
                }
    
                
    
            } 
            return response()->json(['status' => true, 'message' => "products", 'product' => $product], 200);
        }
        else{
            return response()->json(['status' => false, 'message' => "products", 'product' => []], 200);
        }

    }

    public function valueOfTheDay(Request $request){

        $currentDate  = Carbon\Carbon::now()->toDateString();

       $pro = Product::where('parent_id',0)->where('product_type','!=','giftcard')->where('product_type','!=','card')->whereDate('offer_end_date','>=',$currentDate); 
       if(!empty($request->location)){
            $pro->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
            $pro->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
        }
        $products = $pro->get();

       $banner = Setting::where('name','=','value_banner')->first('value');

       if(count($products)>0){

            foreach($products as $key => $val){
                $data = [];
                $gallery = json_decode($val->gallery_image);
                if(!empty($gallery)){
                    foreach ($gallery as $key1 => $value) {
                        $value1 = url('products/gallery/' . $value);
                        $data[] = $value1;
                    }
                $products[$key]['gallery_image'] = $data;
                }
                if(!empty($val->featured_image)){
                $products[$key]['featured_image'] = url('products/feature/'. $val->featured_image);
                }
                 //cart & wishlist
                 if (Auth::guard('api')->check()) {
                    $user = Auth::guard('api')->user();
                    $user_id = $user->id;
                } 
                if(isset($user_id)){
                    $Cart =    Cart::where('user_id',$user_id)->where('product_id',$val->id)->first();
                    if(!empty($Cart)){
                        $products[$key]['in_cart'] = true;
                    }
                    else{
                        $products[$key]['in_cart'] = false;     
                    }
                    $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$val->id)->first();
                    if(!empty($wishlist)){
                        $products[$key]['in_wishlist'] = true;
                    }
                    else{
                        $products[$key]['in_wishlist'] = false;    

                    }
                }
                else{
                    $products[$key]['in_cart'] = false;
                    $products[$key]['in_wishlist'] = false;

                }
                // currency 
                if(!empty($request->currency_code)){
                    $currency = $this->currencyFetch($request->currency_code);
                    $products[$key]['currency_sign'] = $currency['sign'];
                    $products[$key]['currency_code'] = $currency['code'];
                }
                
                if($val->product_type == "single"){
                    $productAttributes = ProductAttribute::where('product_id',$val->id)->groupBy('attr_id')->get();
                    if(count($productAttributes)>0){
                        foreach($productAttributes as $attr_key => $attr_val){
                            $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                            $attrdata[] = $attr;
                        }
                        if(!empty($attrdata)){
                            foreach($attrdata as $d => $dv){
                                $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                                $attrval = [];
                                foreach($proattragain as $ag => $proagain){
                                    $attrval[] = $proagain->attr_value_id;
                
                                }
                                $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                                
                                $attrdata[$d]['attribute_value'] = $attr_value;
                            }
                        }
                        $product[$key]['attributes'] = $attrdata;
                    }
                }
                else{
                    $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$val->id)->get();
                    if(count($productVariants) > 0){
                        $arr_attr = [];
                        $variants_img = [];
                        foreach($productVariants as $v_k => $v_val){
                            foreach(json_decode($v_val->variant_value) as $key_var =>   $val_var) {
                                $attrval = AttributeValue::where('id', $val_var)->first();
                                $arr_attr[$key_var]['key'] = $attrval->attr_value_name;
                                $arr_attr[$key_var]['value'] = $val_var; 
                                $productVariants[$v_k]['variant_value'] = $arr_attr;
                            }
                            if(!empty($v_val->variant_images)){
                                foreach(json_decode($v_val->variant_images) as $key_var_img =>   $val_var_img) {
                                    $variants_img[] = url('products/gallery/' . $val_var_img);
                                    $productVariants[$v_k]['variant_images'] = $variants_img;
                                }
                            }
                            
                        }
                        $product[$key]['variants'] = $productVariants;
                    }
                }

                
                $banner['image']  = url('images/'. $banner->value);
            } 

            return response()->json(['status' => true, 'message' => "success", 'banner'=>  $banner['image'] , 'product' => $products], 200);

       }
       else{

        return response()->json(['status' => false, 'message' => "no products", 'product' => []], 200);   
       }



    }

    public function topHunderd(Request $request){

        $pro = Product::where('parent_id',0)->where('product_type','!=','giftcard')->where('product_type','!=','card')->where('top_hunderd',1);
        if(!empty($request->location)){
            $pro->leftJoin('vendorsettings', 'vendorsettings.vendor_id', '=', 'products.vendor_id');
            $pro->where('vendorsettings.value', '=', $request->location)->select('products.*','vendorsettings.name');
        }
        $products = $pro->get(); 
        $banner = Setting::where('name','=','top_banner')->first('value'); 

        if(count($products)>0){
 
             foreach($products as $key => $val){
                 $data = [];
                 $gallery = json_decode($val->gallery_image);
                 if(!empty($gallery)){
                     foreach ($gallery as $key1 => $value) {
                         $value1 = url('products/gallery/' . $value);
                         $data[] = $value1;
                     }
                 $products[$key]['gallery_image'] = $data;
                 }
                 if(!empty($val->featured_image)){
                 $products[$key]['featured_image'] = url('products/feature/'. $val->featured_image);
                 }
                  //cart & wishlist
                 if (Auth::guard('api')->check()) {
                    $user = Auth::guard('api')->user();
                    $user_id = $user->id;
                } 
                if(isset($user_id)){
                    $Cart =    Cart::where('user_id',$user_id)->where('product_id',$val->id)->first();
                    if(!empty($Cart)){
                        $products[$key]['in_cart'] = true;
                    }
                    else{
                        $products[$key]['in_cart'] = false;     
                    }
                    $wishlist = Wishlist::where('user_id',$user_id)->where('product_id',$val->id)->first();
                    if(!empty($wishlist)){
                        $products[$key]['in_wishlist'] = true;
                    }
                    else{
                        $products[$key]['in_wishlist'] = false;    

                    }
                }
                else{
                    $products[$key]['in_cart'] = false;
                    $products[$key]['in_wishlist'] = false;

                }
                // currency 
                if(!empty($request->currency_code)){
                    $currency = $this->currencyFetch($request->currency_code);
                    $products[$key]['currency_sign'] = $currency['sign'];
                    $products[$key]['currency_code'] = $currency['code'];
                }
                 if($val->product_type == "single"){
                     $productAttributes = ProductAttribute::where('product_id',$val->id)->groupBy('attr_id')->get();
                     if(count($productAttributes)>0){
                         foreach($productAttributes as $attr_key => $attr_val){
                             $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                             $attrdata[] = $attr;
                         }
                         if(!empty($attrdata)){
                             foreach($attrdata as $d => $dv){
                                 $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                                 $attrval = [];
                                 foreach($proattragain as $ag => $proagain){
                                     $attrval[] = $proagain->attr_value_id;
                 
                                 }
                                 $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                                 
                                 $attrdata[$d]['attribute_value'] = $attr_value;
                             }
                         }
                         $products[$key]['attributes'] = $attrdata;
                     }
                 }
                 else{
                     $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$val->id)->get();
                     if(count($productVariants) > 0){
                         $arr_attr = [];
                         $variants_img = [];
                         foreach($productVariants as $v_k => $v_val){
                             foreach(json_decode($v_val->variant_value) as $key_var =>   $val_var) {
                                 $attrval = AttributeValue::where('id', $val_var)->first();
                                 $arr_attr[$key_var]['key'] = $attrval->attr_value_name;
                                 $arr_attr[$key_var]['value'] = $val_var; 
                                 $productVariants[$v_k]['variant_value'] = $arr_attr;
                             }
                             if(!empty($v_val->variant_images)){
                                 foreach(json_decode($v_val->variant_images) as $key_var_img =>   $val_var_img) {
                                     $variants_img[] = url('products/gallery/' . $val_var_img);
                                     $productVariants[$v_k]['variant_images'] = $variants_img;
                                 }
                             }
                             
                         }
                         $products[$key]['variants'] = $productVariants;
                     }
                 }
 
                 
                 $banner['image']  = url('images/'. $banner->value);
             } 
 
             return response()->json(['status' => true, 'message' => "success", 'banner'=>  $banner['image'] , 'product' => $products], 200);  
 
        }
        // return response()->json(['status' => true, 'message' => "success", 'banner'=>  $banner['image'] , 'product' => $products], 200);  
        else{
 
         return response()->json(['status' => false, 'message' => "no products", 'product' => []], 200);   
        }

    }

    public function feedback()
    {
        //

    }
    public function feedbacksave( Request $request)
    {

        $validator = Validator::make($request->all(), [
            'rating' => 'required',
            'discription' => 'required',
            'follow_up' => 'required',
            'order_id' => 'required'

        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);
        }

       $feedback = Feedback::create([
            'rating'      => $request->rating,
            'discription'     => $request->discription,
            'follow_up'     => $request->follow_up,
            'order_id'     => $request->order_id,
          
        ]);

        return response()->json(['status' => true,'message' => "success" ,"data"=>$feedback], 200);

    }

    public function feedbacklist(Request $request)
    {   
            $Feedback=Feedback::orderBY('id','DESC')->where('product_id','=',$request->product_id)->get(); 
            $validator = Validator::make($request->all(), [
                'product_id' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);
            }
            if(count($Feedback)>0){

        $Feedback=Feedback::orderBY('id','DESC')->where('product_id','=',$request->product_id)->get(); 

            return response()->json(['status' => true,'message' => "success" ,"data"=>$Feedback], 200);
        }else{
            return response()->json(['status' => false,'message' => "no Feedback" ], 200);
        }
    }


    public function show($id)
    {
         //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
