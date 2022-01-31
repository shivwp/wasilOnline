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
use Validator;
use DB;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $prod=Product::orderBy('id', 'DESC')->where('parent_id','=',0);
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
        $product = $prod->get();
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
        $product=Product::orderBY('id','DESC')->limit('8')->get(); 
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
    public function bestseller(Request $request){
        $product=Product::where('best_saller',1)->limit('4')->get(); 
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
        $product=Product::where('featured',1)->limit('8')->get(); 
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
                if(!empty($product->gallery_image)){
                    foreach(json_decode($product->gallery_image) as $gall_val){
                        $value1 = url('products/gallery/' . $gall_val);
                        $gallery_data[] = $value1;
                    }
                    $product->gallery_image = $gallery_data;
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
