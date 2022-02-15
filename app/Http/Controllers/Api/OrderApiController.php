<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Address;
use App\Models\Product;
use App\Models\OrderedProducts;
use App\Models\GiftCardUser;
use App\Models\GiftCardLog;
use App\Models\User;
use App\Models\Coupon;
use App\Models\Cart;
use App\Models\OrderMeta;
use App\Models\OrderNote;
use App\Models\OrderPayment;
use App\Models\VendorEarnings;
use Validator;
use Auth;
class OrderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guard('api')->check()) {
            $user = Auth::guard('api')->user();
        } 
        $user_id = $user->id;
      
        $orders= Order::join('ordered_products', 'ordered_products.order_id', '=', 'orders.id' )->orderBy('orders.created_at','DESC')->limit('4')->where('orders.user_id','=',$user_id)->get(); 

        foreach ($orders as $key => $value) {

            $ordered_product=Product::where('id','=',$value->id)->get();
            foreach ($ordered_product as $key => $value) {
                // code...

                 $value['featured_image'] = url('products/feature/'. $value->featured_image);
                 $value['gallery_image'] = json_decode($value->gallery_image);
           
                 
            }
            $orders[$key]['products']= $ordered_product;
        }


        if(!empty($orders)){
             return response()->json([ 'status'=> true , 'message' => "my orders", 'order' => $orders], 200);
        }else{
             return response()->json([ 'status'=> false ,'message' => "fail", 'order' => []], 200);
        }
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

  
    public function store(Request $request)
    {
            if (Auth::guard('api')->check()) {
                $user = Auth::guard('api')->user();
            } 
            $user_id = $user->id;
            $user = User::where('id',$user_id)->first();
            if(empty($request->shipping_address)){
                return response()->json(['shipping address required'],200); 
            }
            if(empty($request->billing_address)){
            return response()->json(['billing address required'],200); 
            }
            $getVendor = $request->cart_id;
            $vendorid = [];
            foreach($getVendor as $val){
                $cart = Cart::where('id',$val)->first();
                $product = Product::where('id',$cart->product_id)->first();
                $vendorid[] = $product->vendor_id;
            }
            //Coupon 
            $coupon = Coupon::where('code',$request->coupon_code)->first();
            // if(){

            // }


            //Gift Card
            $giftcard = GiftCardUser::where('gift_card_code',$request->giftcard_code)->where('gift_card_amount','!=',0)->first();

            if(!empty($giftcard)){
                $giftcard_used_amount = $giftcard->gift_card_amount;
                $total_price = $request->input("totPrice") - $giftcard_used_amount;
                $cardid= $giftcard->card_id;
                $giftcard->update([
                    'gift_card_amount' => 0
                ]);
                GiftCardLog::where('gift_card_code',$request->giftcard_code)->create([
                    'user_id'           => $user_id,
                    'card_id'           => $cardid,
                    'gift_card_code'    => $request->giftcard_code,
                    'gift_card_amount'  =>  $giftcard->gift_card_amount,
                    'note'              =>  "gift card code used in order",
                ]);

            }
            else{
                $giftcard_used_amount = "0";
                $total_price = $request->totPrice;
            }
        if (count(array_unique($vendorid)) === 1) {

                $order = Order::updateOrCreate(['id' => $request->pid],
                    [
                        'parent_id'             => 0,
                        'user_id'               => $user_id,
                        'status'                => 'new',
                        'status_note'           =>  'new order',
                       // 'total_price'           => $total_price,
                      //  'currency_sign'         => $request->input('currency_sign'),
                      //  'giftcard_used_amount'  => $giftcard_used_amount,
                    // 'shipping_type'          => $request->input('shipping_type'),
                        'shipping_method'          => $request->input('shipping_method'),
                       // 'shipping_price'     => $request->input("shipping_price"),
                    // 'payment_mode'   => $request->input("payment_mode"),
                        'payment_status'        => 'pending',
                ]);
           
        }
        else{

                $order = Order::updateOrCreate(['id' => $request->id],
                    [
                        'parent_id'             => 0,
                        'user_id'               => $user_id,
                        'status'                => 'new',
                        'status_note'           =>  'new order',
                       // 'total_price'           => $total_price,
                      //  'currency_sign'         => $request->input('currency_sign'),
                      //  'giftcard_used_amount'  => $giftcard_used_amount,
                    // 'shipping_type'          => $request->input('shipping_type'),
                       'shipping_method'          => $request->input('shipping_method'),
                   //     'shipping_price'     => $request->input("shipping_price"),
                    // 'payment_mode'   => $request->input("payment_mode"),
                        'payment_status'        => 'pending',
                ]);

                $vendor = array_unique($vendorid);

                foreach($vendor as $val){
                     Order::updateOrCreate(['id' => $request->pid],
                        [
                            'parent_id'             => $order->id,
                            'user_id'               => $user_id,
                            'status'                => 'new',
                            'status_note'           =>  'new order',
                           // 'total_price'           => $total_price,
                           // 'currency_sign'         => $request->input('currency_sign'),
                           // 'giftcard_used_amount'  => $giftcard_used_amount,
                        // 'shipping_type'          => $request->input('shipping_type'),
                            'shipping_method'          => $request->input('shipping_method'),
                        //   'shipping_price'     => $request->input("shipping_price"),
                        // 'payment_mode'   => $request->input("payment_mode"),
                            'payment_status'        => 'pending',
                        ]);
                }
            }

            $getCartData = Cart::whereIn('id',$getVendor)->get();
           
                foreach($getCartData as $cartdata){
                    $product = Product::where('id',$cartdata->product_id)->first();

                    $orderedProduct = OrderedProducts::updateOrCreate([
                        'id' => $request->pro_id
                        ],
                        [
                            'order_id' =>$order->id,
                            'product_id' => $product->id,
                            'product_name' => $product->pname,
                            'category' => $product->cat_id,
                            'product_type' => $product->product_type,
                            'quantity' => $cartdata->quantity,
                            'product_price' => $product->s_price,
                            'total_price' => $cartdata->price,
                            'tax' => 0,
                        ]);

                    $vendorEarning =    VendorEarnings::create([

                        'order_id'              =>$order->id,
                        'vendor_id'             =>$product->vendor_id,
                        'product_id'            =>$product->id,
                        'amount'                =>$product->s_price,
                        'payment_status'        =>"pending"

                      ]);
                }
          

                $shipping['shipping_first_name'] = $request->shipping_address['first_name'];
                $shipping['shipping_last_name'] = $request->shipping_address['last_name'];
                $shipping['shipping_phone']    = $request->shipping_address['phone'];
                $shipping['shipping_alternate_phone']    = $request->shipping_address['alternate_phone'];
                $shipping['shipping_address']    = $request->shipping_address['address'];
                $shipping['shipping_address2']    = $request->shipping_address['address2'];
                $shipping['shipping_address_type']    = $request->shipping_address['address_type'];
                $shipping['shipping_city']    = $request->shipping_address['city'];
                $shipping['shipping_country']    = $request->shipping_address['country'];
                $shipping['shipping_state']    = $request->shipping_address['state'];
                $shipping['shipping_zip_code']    = $request->shipping_address['zip_code'];
                $shipping['shipping_landmark']    = $request->shipping_address['landmark'];

                $billing['billing_first_name'] = $request->billing_address['first_name'];
                $billing['billing_last_name'] = $request->billing_address['last_name'];
                $billing['billing_phone']    = $request->billing_address['phone'];
                $billing['billing_alternate_phone']    = $request->billing_address['alternate_phone'];
                $billing['billing_address']    = $request->billing_address['address'];
                $billing['billing_address2']    = $request->billing_address['address2'];
                $billing['billing_address_type']    = $request->billing_address['address_type'];
                $billing['billing_city']    = $request->billing_address['city'];
                $billing['billing_country']    = $request->billing_address['country'];
                $billing['billing_state']    = $request->billing_address['state'];
                $billing['billing_zip_code']    = $request->billing_address['zip_code'];
                $billing['billing_landmark']    = $request->billing_address['landmark'];

                $billing['total_price'] =     $total_price;
                $billing['currency_sign'] =   $request->input('currency_sign');
                $billing['giftcard_used_amount'] =   $giftcard_used_amount;
                $billing['shipping_price'] =   $request->input("shipping_price");

               // dd($billing['giftcard_used_amount']);

                $order_address = array_merge($billing, $shipping);

                foreach($order_address as $key => $value){
                    if($value == '') {
                        $value = null;
                    }
                    OrderMeta::updateOrCreate(
                        ['meta_key' => $key, 'order_id' => $order->id],
                        ['meta_value' => $value]
                    );

                }

                OrderMeta::updateOrCreate(
                    ['meta_key' => 'billing_address', 'order_id' => $order->id],
                    ['meta_value' => json_encode($billing)]
                );
                OrderMeta::updateOrCreate(
                    ['meta_key' => 'shipping_address', 'order_id' => $order->id],
                    ['meta_value' => json_encode($shipping)]
                );

                //order Stripe payment
                if($request->shipping_method == "stripe"){
                     try{
                        $stripeAccount = new \Stripe\StripeClient(env('STRIPE_SECRET'));
                        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                        $paymentIntent = \Stripe\PaymentIntent::create([
                            'amount' => $total_price * 100,
                            'currency' => 'gbp',
                            'payment_method_types' => ['card'],
                            'payment_method' => $request->stripe_token,
                            'transfer_group' => $order->id,
                            'confirm'=>'true',
                            'shipping' => [
                                'name' => 'shipping name',
                                'phone' => '9090909090',
                                'address' => [
                                    'city' => 'city',
                                    'country' => 'country',
                                    'line1' => 'line1',
                                    'line2' => 'line2',
                                    'postal_code' => 'postal_code',
                                    'state' => 'state',
                                ]
                            ]
                        ]);

                        if($paymentIntent->status == 'succeeded'){

                            $status = $paymentIntent->status;
                            $msg = "Order Success";

                          $order->update([
                              'payment_status' => 'success'
                          ]);

                          Order::where('parent_id',$order->id)->update([
                                'payment_status' => 'success'
                            ]);

                        }
                        else{

                            $status = $paymentIntent->status;
                            $msg = "Order Pending";

                            $order->update([
                                'payment_status' => 'failed'
                            ]);

                        }

                        OrderPayment::create([

                            'order_id'  =>$order->id,
                            'status'    =>$status,
                            'trans_id' =>$paymentIntent->id,
                            'charges_id' =>$paymentIntent->charges->data[0]->id,
                            'balance_transaction' =>$paymentIntent->charges->data[0]->balance_transaction,
                            'message' => $paymentIntent->status

                          ]);

                        $vendorEarning->update([
                                'payment_status' => 'success'
                        ]);
                        $vendorEarning->save();

                    }catch(\Stripe\Exception\InvalidRequestException $e){

                        return response()->json(['status' => false, 'message' => $e->getError()->message], 200);
                    }

                    $this->ordernote($order->id,$status,$msg);
                  
                    
                }
              

        return response()->json(['status' => true, 'message' => "Success"], 200);
       
    }


    public function orderTracking(Request $request){
        $validator = Validator::make($request->all(), [
            'orderid' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);
        }

        $order = Order::findOrFail($request->orderid)->first();

        return response()->json([ 'status'=> true , 'message' => "success", 'order' => $order->status], 200);
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

    public function ordernote($orderid,$status,$msg){

        OrderNote::create([
            'order_id' => $orderid,
            'order_status' => $status,
            'order_note' => $msg,
        ]);

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

    public function orderHistoryDetail(Request $request){

         $userid = Auth::user()->token()->user_id;
            //  dd($userid);
        // $order=order::join('ordered_products', 'ordered_products.order_id', '=', 'orders.id' )->join('products','products.id','=','ordered_products.product_id')->join('users', 'users.id', '=', 'products.vendor_id' )->join('categories', 'categories.id', '=', 'products.cat_id' )->where('user_id','=',$userid)->get();
        $orders = Order::with('orderItem')->where('user_id','=',$userid)->where('parent_id','=',0)->get();

        if(!empty($orders)){
            foreach($orders as $key => $val){
                $meta1 = OrderMeta::select('meta_value')->where('order_id',$val->id)->where('meta_key','billing_address')->first();
                $meta2 = OrderMeta::select('meta_value')->where('order_id',$val->id)->where('meta_key','shipping_address')->first();
                $total_price = OrderMeta::select('meta_value')->where('order_id',$val->id)->where('meta_key','total_price')->first();
                $currency_sign = OrderMeta::select('meta_value')->where('order_id',$val->id)->where('meta_key','currency_sign')->first();
                $shipping_price = OrderMeta::select('meta_value')->where('order_id',$val->id)->where('meta_key','shipping_price')->first();
               $orders[$key]['billing'] = json_decode($meta1->meta_value);
               $orders[$key]['shipping'] = json_decode($meta2->meta_value);
               $orders[$key]['total_price'] = $total_price->meta_value;
               $orders[$key]['currency_sign'] = $currency_sign->meta_value;
               $orders[$key]['shipping_price'] = $shipping_price->meta_value;
            //    $orders[$key]['meta'] = $data;
            //    $orders[$key]['meta'] = $data;

            }
             return response()->json([ 'status'=> true , 'message' => "Order History Detail", 'order' => $orders], 200);
        }else{
             return response()->json([ 'status'=> false ,'message' => "Order not found", 'order' => []], 200);
        }

       
    }

    public function stripeDemo(Request $request){

        

        $stripeAccount = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $method = \Stripe\PaymentMethod::create([
            'type' => 'card',
            'card' => [
                'number' => '4242424242424242',
                'exp_month' => 12,
                'exp_year' => 2022,
                'cvc' => '314',
            ],
        ]);
        return $method;
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => 20 * 100,
            'currency' => 'gbp',
            'payment_method_types' => ['card'],
            'payment_method' => $method->id,
            'transfer_group' => $request->pro_id,
            'confirm'=>'true',
            'shipping' => [
                'name' => 'shipping name',
                'phone' => '9090909090',
                'address' => [
                    'city' => 'city',
                    'country' => 'country',
                    'line1' => 'line1',
                    'line2' => 'line2',
                    'postal_code' => 'postal_code',
                    'state' => 'state',
                ]
            ]
        ]);

        return $paymentIntent;






    }
    
}