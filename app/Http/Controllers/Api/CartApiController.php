<?php



namespace App\Http\Controllers\Api;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Cart;

use App\Models\Product;

use App\Models\Coupon;

use App\Models\Category;

use App\Models\Attribute;

use App\Models\AttributeValue;

use App\Models\ProductAttribute;

use App\Models\ProductVariants;

use App\Models\User;

use App\Http\Traits\CurrencyTrait;

use App\Models\CustomAttributes;
use App\Models\CouponUser;

use Validator;

use Auth;

use DB;
use Carbon;

class CartApiController extends Controller

{

    use CurrencyTrait;

    public function index(Request $request)

    {
        $userid = Auth::user()->token()->user_id;
        if(empty($userid)){
            return response()->json(['status' => true, 'message' => "user not found", 'data' => []], 200); 
        }
        $cart=Cart::select('id','user_id','product_id','quantity','price','card_amount')->where('user_id','=',$userid)->get();

        $sum=Cart::where('user_id','=',$userid)->sum('price');
        if(count($cart) > 0 ){
            $productids = [];
            foreach($cart as $c_key => $c_value){
                $productids[] = $c_value->product_id;

                $product = Product::where('id',$c_value->product_id)->first();

                if(!empty($product)){

                    $data = [];

                    $gallery = json_decode($product->gallery_image);

                    if(!empty($gallery)){

                        foreach ($gallery as $key1 => $value) {

                            $value1 = url('products/gallery/' . $value);

                            $data[] = $value1;

                        }

                    $product['gallery_image'] = $data;

                    }

                    if(!empty($product->featured_image)){

                    $product['featured_image'] = url('products/feature/'. $product->featured_image);

                    }
                    // currency 
                    if(!empty($request->currency_code)){
                        $currency = $this->currencyFetch($request->currency_code);
                        $product['currency_sign'] = $currency['sign'];
                        $product['currency_code'] = $currency['code'];
                    }
                    //discount
                    // if($product->offer_discount > 0){
                    //     $product['s_price'] = $product->offer_discount;

                    // }

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

                    elseif($product->product_type == "giftcard"){

                        $CustomAttributes = CustomAttributes::select('price','custom_attributes')->where('product_id',$product->id)->where('user_id',$userid)->first();

                        if(!empty($CustomAttributes)){

                            $CustomAttributes->custom_attributes = json_decode($CustomAttributes->custom_attributes);

                            $product['attributes'] = $CustomAttributes->custom_attributes;
                            
                            $product['s_price'] = $CustomAttributes->price;
                        }

                        else{

                            $product['attributes'] = [];      

                        }

                    }
                    elseif($product->product_type == "card"){

                        $product['s_price'] = $c_value->card_amount;  

                    }

                    else{

                        $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$product->id)->get();

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

                            

                            $product['variants'] = $productVariants;

                        }

                    }

                }



                $cart[$c_key]['product'] = !empty($product) ? $product : '' ;

               

            }
            //appaly coupon
            if($request->coupon_code){
                $currentDate =  Carbon\Carbon::now()->toDateString();
                $coupoon = Coupon::where('code',$request->coupon_code)->first();
                if(empty($coupoon)){

                    return response()->json(['status' => false, 'message' => "invalid coupon code",'subtotal'=>$sum, 'total'=>$sum, 'discount' => 0,'cart' => $cart], 200);
                }
                $couponproduct = DB::table('coupon_product')->where('coupon_id',$coupoon->id)->whereIn('product_id',$productids)->first();
                if(!empty($coupoon)){
                    if(!empty($coupoon->minimum_spend) && $coupoon->minimum_spend >=$sum ){
                        return response()->json(['status' => false, 'message' => "Coupon is not applicable", 'subtotal'=>$sum, 'total'=>$sum, 'discount' => 0,'cart' => $cart], 200);
                    }
                    if(!empty($coupoon->maximum_spend) && $coupoon->maximum_spend <=$sum){
                        return response()->json(['status' => false, 'message' => "Coupon is not applicable", 'subtotal'=>$sum, 'total'=>$sum, 'discount' => 0,'cart' => $cart],  200);
                    }
                    //User coupon limit
                    $CouponUser = CouponUser::where('user_id',$userid)->first();
                    if(!empty($coupoon->limit_per_user)){
                        if(isset($CouponUser->total_use_time) && ($coupoon->limit_per_user ==$CouponUser->total_use_time)){
                            return response()->json(['status' => false, 'message' => "Coupon is not applicable", 'subtotal'=>$sum, 'total'=>$sum, 'discount' => 0,'cart' => $cart],  200);
                        }
                    }
                    //coupon expiry
                    $coupoonexpir = Coupon::where('code',$request->coupon_code)->whereDate('expiry_date','<=',$currentDate)->first();
                    if(!empty($coupoonexpir)){
                        return response()->json(['status' => false, 'message' => "Coupon expired"],  200);
                    }
                    //apply coupon
                    if(!empty($CouponUser)){
                        $userlimit = $CouponUser->total_use_time;
                        $updateLimit = (int)$CouponUser->total_use_time + 1;
                        $CouponUser = CouponUser::where('id',$CouponUser->id)->update([
                            'coupon_id' => $coupoon->id,
                            'user_id' => $userid,
                            'total_use_time' => $updateLimit,
                        ]);
                    } 
                    else{

                        $CouponUser = CouponUser::create([
                            'coupon_id' => $coupoon->id,
                            'user_id' => $userid,
                            'total_use_time' => 1,
                        ]);

                    }
                   
                    if($coupoon->discount_type == "flat_rate"){
                        $couponAmount = $coupoon->coupon_amount;
                    }
                    else{
                        $couponAmount = ($coupoon->coupon_amount * $sum) / 100;

                    }

                    $totalAmount = $sum - $couponAmount;
                    return response()->json(['status' => true, 'message' => "Success", 'subtotal'=>$sum, 'total'=>$totalAmount, 'discount' => $couponAmount,'cart' => $cart], 200);
                    
                }

            }
            return response()->json(['status' => true, 'message' => "Success", 'subtotal'=>$sum, 'total'=>$sum, 'discount' => 0,'cart' => $cart], 200);

        }

        else{

            return response()->json(['status' => false, 'message' => "data not found",'subtotal'=>0,  'cart' => []], 200);
        }

    }

    public function dabitaddtocart(Request $request){

        if (Auth::guard('api')->check()) {
            $user = Auth::guard('api')->user();
        } 
        $user_id = $user->id;

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'card_amount' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);
        }
        $already = Cart::where('user_id',$user_id)->where('product_id',404)->first();
        if(!empty($already)){
            return response()->json(['status' => false, 'message' => 'already exist in cart'], 200);   
        }
        $cart = Cart::create([

            "user_id" => $user_id,
            "card_amount" => $request->card_amount,
            "product_id" => $request->product_id,
            "quantity" => 1,
            "price" =>  $request->card_amount

        ]);


        return response()->json(['status' => false, 'message' => "Success",], 200);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'quantity' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false,'code'=>$succcessCode, 'message' => implode("", $validator->errors()->all())], 200);
        }

        $userid = Auth::user()->token()->user_id;



        $cart = Cart::where('product_id', $request->product_id)->where('user_id', $userid)->first(); 

        $product = Product::where('id',$request->product_id)->first();

        if(empty($product)){
            return response()->json(['status' => false, 'message' => "product not found",'subtotal'=>0,  'cart' => []], 200);
        }
        if($product->in_stock <=0){
            return response()->json(['status' => false, 'message' => "product is out of stock",'subtotal'=>0,  'cart' => []], 200);
        }


        $variations = $request->variation;

        $id = $request->product_id;



        if(!empty($cart)) {

             //if cart not empty then check if this product exist then increment quantity

            $q=(int)$cart->quantity;

            $quant = $q + $request->quantity;

            $price = $quant * $product->s_price;

            $cart_added = Cart::where('id',$cart->id)->update([

                "quantity" => $quant,

                "price" => $price

            ]);

            

        }

        else{

             // if cart is empty then this is the first product   

             $quantity = $request->quantity;

             $price = $quantity * $product->s_price;

            $cart_added = Cart::create([

                'user_id'             => $userid,

                'product_id'          => $request->product_id,

                'quantity'            => $request->quantity,

                'variation'           => json_encode($variations), 

                "price"                => $price

            ]);



        }



        $userCart = Cart::where('user_id', $userid)->get();

        $sum = Cart::where('user_id', $userid)->sum('price');



        foreach($userCart as $key => $value){



            $userCart[$key]['variation'] =  json_decode($value->variation);



        }



        return response()->json(['status' => true, 'message' =>'success','subtotal'=>$sum,'cart'=>$userCart,]); 

        

    }



    public function qtyupdate(Request $request){

        $userid = Auth::user()->token()->user_id;
        if(!isset($userid)){
            return response()->json(['status' => true, 'message' => "user not found", 'data' => []], 200); 
        }

        $sum=Cart::where('user_id','=',$userid)->sum('price');

        if(!empty($request->data)){

            foreach($request->data as $val){

                $cart = Cart::findorfail($val['id']);

                $product = Product::where('id',$cart->product_id)->first();

               if($product->product_type == 'giftcard'){

                $giftcardprice = CustomAttributes::where('cart_id',$cart->id)->first();

                $price = $val['qty'] * $giftcardprice->price;

                $cartupdate = Cart::where('id',$val['id'])->update([

                    'quantity' =>  $val['qty'],

                    'price' => $price,

                ]);
               }
            //    elseif($product->product_type == 'card'){
            //         $price = $val['qty'] * $product->s_price;

            //         $cartupdate = Cart::where('id',$val['id'])->update([

            //         'quantity' =>  $val['qty'],

            //         'price' => $price,

            //     ]);

            //    }
               else{

                $price = $val['qty'] * $product->s_price;

                $cartupdate = Cart::where('id',$val['id'])->update([

                    'quantity' =>  $val['qty'],

                    'price' => $price,

                ]);

               }

            }

            $usercart = Cart::where('user_id',$userid)->get();

            foreach($usercart as $key => $val){

                $val->variation = json_decode($val->variation);

            }

            return response()->json(['status' => true, 'message' =>'success','subtotal'=>$sum, 'cart'=>$usercart]); 



        }

        else{



            return response()->json(['status' => false, 'message' =>'Request is empty','cart'=>[]]); 

        }



    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

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

    public function destroy(Request $request)

    {

        $validator = Validator::make($request->all(), [

            'id' => 'required'

        ]);

       $cart = Cart::findorfail($request->id);

        $cart->delete();

        return response()->json(['status' => true,'message' => "success"], 200);

    }

}

