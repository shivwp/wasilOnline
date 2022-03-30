<?php



namespace App\Http\Controllers\Api;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Order;

use App\Models\Address;

use App\Models\Product;

use App\Models\OrderShipping;

use App\Models\OrderedProducts;
use App\Models\OrderProductMeta;

use App\Models\GiftCard;

use App\Models\GiftCardUser;

use App\Models\GiftCardLog;

use App\Models\User;

use App\Models\Coupon;

use App\Models\Cart;
use App\Models\VendorSetting;
use App\Models\Category;

use App\Models\OrderMeta;

use App\Models\OrderNote;

use App\Models\OrderPayment;
use App\Models\CustomAttributes;

use App\Models\VendorEarnings;

use App\Models\UserWalletTransection;
use App\Models\OrderProductNote;

use AmrShawky\LaravelCurrency\Facade\Currency as CurrencyConvert;

use Illuminate\Support\Carbon;
use App\Http\Traits\CurrencyTrait;

use Illuminate\Support\Str;
use App\Models\Mails;
use App\Mail\GiftCardEmail;
use App\Mail\OrderMail;
use Mail;

use Validator;

use Auth;

class OrderApiController extends Controller

{

    use CurrencyTrait;

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

    public function create()
    {

        //

    }

    public function return( Request $request)
    {

         $validator = Validator::make($request->all(), [

            'orderid' => 'required'

        ]);



        if ($validator->fails()) {

            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);

        }

         

       

        Order::where('id', $request->orderid)->update(['status' => 'return', 'status_note' => 'return']);

        $order=Order::where('id', $request->orderid)->first();

        return response()->json([ 'status'=> true , 'message' => "success", 'order' => $order], 200);

       

        

    }

    public function store(Request $request)
    {
        
        // $convertedCurrency = $this->currencyConvert($request->currency_code,$request->totPrice);
        // dd($convertedCurrency);

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

                if(empty($cart)){

                    return response()->json(['status' => false, 'message' => "no data found"], 200);

                }

                $product = Product::where('id',$cart->product_id)->first();

                if(empty($product)){

                    return response()->json(['status' => false, 'message' => "no products found"], 200);

                }

                $vendorid[] = $product->vendor_id;

            }

            //Coupon 

            $coupon = Coupon::where('code',$request->coupon_code)->first();



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

                        'shipping_method'          => $request->input('shipping_method'),

                        'payment_status'        => 'pending',
                        'currency_code'        => $request->input('currency_code')

                ]);

           

        }

        else{



                $order = Order::updateOrCreate(['id' => $request->id],

                    [

                        'parent_id'             => 0,

                        'user_id'               => $user_id,

                        'status'                => 'new',

                        'status_note'           =>  'new order',

                       'shipping_method'          => $request->input('shipping_method'),

                        'payment_status'        => 'pending',
                        'currency_code'        => $request->input('currency_code')

                ]);



                $vendor = array_unique($vendorid);



                foreach($vendor as $val){

                     Order::updateOrCreate(['id' => $request->pid],

                        [

                            'parent_id'             => $order->id,

                            'user_id'               => $user_id,

                            'status'                => 'new',

                            'status_note'           =>  'new order',

                            'shipping_method'          => $request->input('shipping_method'),

                            'payment_status'        => 'pending',

                        ]);

                }

            }



            $getCartData = Cart::whereIn('id',$getVendor)->get();

           
                $products_list = ''; 
                foreach($getCartData as $k => $cartdata){

                    $product = Product::where('id',$cartdata->product_id)->first();
                    $vendor = VendorSetting::where('vendor_id',$product->vendor_id)->where('name','commision')->first();
                    $category =Category::where('id',$product->cat_id)->first();

                    //Vendor Earning
                    $vendorearning = $product->s_price;
                    if($product->commission > 0){
                        $commission = $product->s_price * ($product->commission / 100);
                        $vendorearning = $product->s_price - $commission;
                    }
                    elseif(!empty($vendor) && $vendor->value >0){
                        $commission = $product->s_price * ($vendor->value / 100);
                        $vendorearning = $product->s_price - $commission;
                    }
                    elseif(!empty($category) && $category->commision > 0){
                        $commission = $product->s_price * ($category->commision / 100);
                        $vendorearning = $product->s_price - $commission;
                    }

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
                            'status' => "new",
                            'vendor_id' => $product->vendor_id

                        ]);

                        $products_list .= '<tr style="border-collapse: collapse;border-bottom: 1px solid #eaedf1; ">
                        <td><h6 style="font-size: 15px; font-family: \'Raleway\', sans-serif; font-weight: 400; color:#4c4c53; margin: 10px 0px;">'.$product->pname.' </h6></td>
                        <td><h6 align="center" style="font-size: 15px; font-family: \'Raleway\', sans-serif; font-weight: 400; color:#4c4c53; margin: 10px 0px; align: center;">'.$cart->quantity.' </h6></td>
                        <td>
                            <h6 align="right" style="font-size: 15px; font-family: \'Raleway\', sans-serif; font-weight: 400; color:#4c4c53;  align: right; margin: 10px 0px;">$'.$cart->price.'</h6>
                        </td>
                        </tr>';
                        if(count($getCartData) == ($k + 1)) {
                            // 
                            $products_list .= '
                                        <tr style="border-collapse: collapse;border-bottom: 1px solid #eaedf1;">
                                            <td colspan="3">
                                                <h6 style="font-size: 15px;margin: 10px 0px;font-family: \'Raleway\', sans-serif; font-weight: 400; color:#4c4c53;  "><br></h6>
                                            </td>
                                        </tr>';
                        }

                        $productmeta = [
                            'product_image' => $product->featured_image,
                          
                        ];
                        OrderProductNote::create([
                            'order_id'      => $order->id,
                            'product_id'    => $product->id,
                            'status' => "new",
                            'note' => "new order",
                        ]);


                        foreach($productmeta as $metakey => $metaval){

                            OrderProductMeta::create([
                                'order_id' => $order->id,
                                'product_id' => $product->id,
                                'meta_key' => $metakey,
                                'meta_value' => $metaval
                            ]);

                        }

                        $vendorEarning =    VendorEarnings::create([
                            'order_id'              =>$order->id,
                            'vendor_id'             =>$product->vendor_id,
                            'product_id'            =>$product->id,
                            'amount'                =>$vendorearning,
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
                //cuurency convert
                $convertedCurrency = $this->currencyConvert($request->currency_code,$total_price);

                $billing['total_price'] =     $total_price;

                $billing['currency_sign'] =   $request->input('currency_sign');

                $billing['giftcard_used_amount'] =   $giftcard_used_amount;

                $billing['shipping_price'] =   $request->input("shipping_price");

                $billing_address = '<h6 align="left" style="font-size: 15px; font-family: \'Raleway\', sans-serif; font-weight: 400; color:#4c4c53; margin:10px 0px;  ">'.$billing['billing_address'].' '.$billing['billing_address2'].'</h6>
                    
                <h6 align="left" style="font-size: 15px; font-family: \'Raleway\', sans-serif; font-weight: 400; color:#4c4c53; margin:10px 0px; ">'.$billing['billing_city'].', '.$billing['billing_state'].'</h6>
        
                <h6 align="left" style="font-size: 15px; font-family: \'Raleway\', sans-serif; font-weight: 400; color:#4c4c53; margin:10px 0px; ">'.$billing['billing_state'].'</h6>
                <h6 align="left" style="font-size: 15px; font-family: \'Raleway\', sans-serif; font-weight: 400; color:#4c4c53; margin:10px 0px; ">'.$billing['billing_country'].' '.$billing['billing_zip_code'].'</h6>';



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
                foreach($request->shipping as $valship){
                    OrderShipping::create([
                        'order_id' => $order->id,
                        'vendor_id' => $valship['store_id'],
                        'shipping_title' => $valship['title'],
                        'shipping_price' => $valship['ship_price'],
                    ]);
                }
                 //order Stripe payment
                 $shippingprice =  $this->currencyConvert($request->currency_code,$request->shipping_price);

                 if($request->shipping_method == "stripe"){
                    try{

                       $stripeAccount = new \Stripe\StripeClient(env('STRIPE_SECRET'));

                       \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

                       $paymentIntent = \Stripe\PaymentIntent::create([

                            'customer' => $user->customer_id,

                           'amount' => round($convertedCurrency + $shippingprice) * 100,

                           'currency' => $request->currency_code,

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



                        //if product is card or gift card

                        $getCartData = Cart::whereIn('id',$getVendor)->get();

                        foreach($getCartData as $gc_key => $gc_val){

                         $producttype = Product::where('id',$gc_val->product_id)->first();

                           //stock update

                           $orderstock = $gc_val->quantity;

                           $updatestock = $producttype->in_stock - $orderstock;

                           Product::where('id',$producttype->id)->update([

                               'in_stock' => $updatestock

                           ]);
                         
                             if($producttype->product_type == "giftcard"){

                                $giftcard = GiftCard::where('id',$gc_val->card_id)->first();
                               $CustomAttributes = CustomAttributes::where('cart_id',$gc_val->id)->first();
                               $attr = json_decode($CustomAttributes->custom_attributes);
                              $to = $attr->to;
                              $from = $attr->from;

                                 if($gc_val->quantity >  1){

                                     for($i=1;$i<=$gc_val->quantity;$i++){

     

                                         $code=Str::random(16);

                                         $code=substr_replace($code, '-', 4, 0);

                                         $code=substr_replace($code, '-', 9, 0); 

                                         $code=substr_replace($code, '-', 14, 0);

                                         $gift_expiry_date=Carbon::now()->addDays($giftcard->valid_days);

                         

                                         $userGiftCard = GiftCardUser::create([

                                             'user_id' => $user_id,

                                             'card_id' => $gc_val->card_id,

                                             'gift_card_code' => $code,

                                             'gift_card_amount' => $gc_val->card_amount,

                                             'gift_expiry_date' => $gift_expiry_date

                                 

                                         ]);

                                         //custom_attributes::where()

                                         $this->sendGift($userGiftCard,$to,$from);

                         

                                     }

 

                                 }

                                 else{

                                     

                                     $code=Str::random(16);

                                     $code=substr_replace($code, '-', 4, 0);

                                     $code=substr_replace($code, '-', 9, 0); 

                                     $code=substr_replace($code, '-', 14, 0);

                                     $gift_expiry_date=Carbon::now()->addDays($giftcard->valid_days);

                         

                                     $userGiftCard = GiftCardUser::create([

                         

                                         'user_id' => $user_id,

                                         'card_id' => $gc_val->card_id,

                                         'gift_card_code' => $code,

                                         'gift_card_amount' => $gc_val->card_amount,

                                         'gift_expiry_date' => $gift_expiry_date

                             

                                     ]);

                                     $this->sendGift($userGiftCard,$to,$from);

                                 }

                             }

                             elseif($producttype->product_type == "card"){



                                $getuserwalletamount = User::where('id',$user_id)->first();

                                $userwalletamount = $getuserwalletamount->user_wallet;

                                $updateamount = $userwalletamount+$gc_val->card_amount;

                                //update wallet

                                $getuserwalletamount->user_wallet = $updateamount;

                                $getuserwalletamount->save();

                                 

                                UserWalletTransection::create([



                                    'user_id' => $user_id,

                                    'amount' => $gc_val->card_amount,

                                    'amount_type' => 'CARD',

                                    'description' => 'Dabit / Cradit Card',
                                    'title' => 'Received from',
                                    'status' => 'received',



                                ]);



                                 

                             }

 

                        }

                   }catch(\Stripe\Exception\InvalidRequestException $e){



                       return response()->json(['status' => false, 'message' => $e->getError()->message], 200);

                   }

                        $this->ordernote($order->id,$status,$msg,"new");
                 }
                 elseif($request->shipping_method == "wallet"){

                    $userwalletamount = User::where('id',$user_id,)->first();
                    $price = $request->totPrice + $request->shipping_price;
                    $updateAmount = $userwalletamount->user_wallet - $price;

                    if($price > $userwalletamount->user_wallet ){

                        return response()->json(['status' => false, 'message' => "Wallet Amount is not sufficient for this order"], 200);
                    }

                    User::where('id',$user_id,)->update([
                        'user_wallet' =>  $updateAmount
                    ]);
                    $msg = "deducted ".$request->totPrice." amount from user wallet";
                    UserWalletTransection::create([
                        'user_id' => $user_id,
                        'amount' => $request->totPrice,
                        'amount_type' => 'Wallet',
                        'description' => 'User Wallet',
                        'title' => 'Paid from',
                        'status' => 'paid'  
                    ]);

                    $this->ordernote($order->id,'wallet transection success',$msg,"new");

                 }
                 //Remove from cart
             Cart::whereIn('id',$request->cart_id)->delete();

               //Order Mail
             
               $basicinfo = [
                '{email}' =>  $user->email,
                '{phone}' => $billing['billing_phone'],
                '{billing_address}' => $billing_address,
                '{total}' => $total_price + $request->shipping_price,
                '{sub_total}' => isset($order->shipping_price)?($total_price - $request->shipping_price) : $total_price,
                '{products_list}' => $products_list,
                '{order_date}' => Carbon::parse($order->created_at)->format('M d Y'),
                '{order_number}' => $order->id,
                '{shipping}' => $request->shipping_price,
                '{currency}' => $request->currency_sign,
            ];
            $mail_data = Mails::where('msg_category', 'placed')->first();
            $msg = $mail_data->message;
            foreach($basicinfo as $key=> $info){
                $msg = str_replace($key,$info,$msg);
            }

            $config = ['from_email' => $mail_data->mail_from,
            "reply_email" => $mail_data->reply_email,
            'subject' => $mail_data->subject, 
            'name' => $mail_data->name,
            'message' => $msg,
            ];

            Mail::to($user->email)->send(new OrderMail($config));


        return response()->json(['status' => true, 'message' => "Success"], 200);

       

    }


    public function orderTracking(Request $request){

        $validator = Validator::make($request->all(), [
            'orderid' => 'required',
            'productid' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);
        }
        $OrderedProducts = OrderedProducts::where('order_id',$request->orderid)->where('product_id',$request->productid)->first();
        if(empty($OrderedProducts)){
            return response()->json(['status' => false, 'message' => "order not found"], 200);
        }
        if($OrderedProducts->status == "cancelled"){
            return response()->json(['status' => false, 'message' => "order cancelled"], 200);
        }
       
        $ordernote = OrderProductNote::where('order_id',$request->orderid)->where('product_id',$request->productid)->get();
        $status = [];
        $date = [];
        foreach($ordernote as $key1 => $val1){
            $status[] = $val1->status;
            $date[] = Carbon::createFromFormat('Y-m-d H:i:s', $val1->created_at)->format('Y-m-d');
        }

        $orderstatus =  [
            [
            "title" => "order placed",
            "completed"=>"",
            "date"=>""
            ],
            [
                "title" => "in process",
                "completed"=>"",
                "date"=>""
                ],
                [
                    "title" => "packed",
                    "completed"=>"",
                    "date"=>""
                ],
                    [
                        "title" => "ready to ship",
                        "completed"=>"",
                        "date"=>""
                    ],
                        [
                            "title" => "shipped",
                            "completed"=>"",
                            "date"=>""
                            ],
                            [
                                "title" => "out for delivery",
                                "completed"=>"",
                                "date"=>""
                                ],
                                [
                                    "title" => "delivered",
                                    "completed"=>"",
                                    "date"=>""
                                ],
                                // [
                                //     "title" => "return",
                                //     "completed"=>"",
                                //     "date"=>""
                                // ],
                                // [
                                //     "title" => "refunded",
                                //     "completed"=>"",
                                //     "date"=>""
                                //     ]
                                          
        ];

        if(in_array("cancel requested",$status)){
            $cancelRequestarrayposition = array_search("cancel requested", $status);
            $value =  [
                "title" => "cancel requested",
                "completed"=>"",
                "date"=>""
            ];
            $orderstatus = array_merge(array_slice($orderstatus, 0, $cancelRequestarrayposition), array($value), array_slice($orderstatus, $cancelRequestarrayposition));
        }
        if(in_array("cancelled",$status)){
            $cancelRequestarrayposition = array_search("cancelled", $status);
            $value =  [
                "title" => "cancelled",
                "completed"=>"",
                "date"=>""
            ];
            $orderstatus = array_merge(array_slice($orderstatus, 0, $cancelRequestarrayposition), array($value), array_slice($orderstatus, $cancelRequestarrayposition));
        }
        
           $i = 0;
        foreach($orderstatus as $key => $val){
            if(in_array($val['title'], $status)){
                $orderstatus[$key]['completed'] =true;
                $orderstatus[$key]['date'] =isset($date[$i]) ? $date[$i] : "";
            }
            $i++;
        }

        return response()->json([ 'status'=> true , 'message' => "success", 'order' => $orderstatus], 200);

    }

    public function show($id)
    {

        //

    }



    public function ordernote($orderid,$status,$msg,$orderstatus){



        OrderNote::create([

            'order_id' => $orderid,

            'order_status' => $status,

            'order_note' => $msg,

            'status' => $orderstatus,

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

    public function sendGift($userGiftCard,$to,$from)
    {
        $userEmail = User::where('id',$userGiftCard->user_id)->first();
        //$setting=Setting::first(); 
        $basicinfo=['{code}'=>$userGiftCard->gift_card_code,
       //'{recipient_name}'=>$giftuser->recipient_name,
        ];
        $msgData=Mails::where('msg_category','giftcard')->first();
        $replMsg=Mails::where('msg_category','giftcard')->pluck('message')->first();
        foreach($basicinfo as $key=> $info){
        $replMsg=str_replace($key,$info,$replMsg);
        }
        $config=['fromemail'=>$msgData->from_email,"replyemail"=>$msgData->reply_email,'message'=>$replMsg,'subject'=>$msgData->subject,'name'=>$msgData->name];
        Mail::to($to)->send(new GiftCardEmail($config)); 

    }



    public function orderHistoryDetail(Request $request){



         $userid = Auth::user()->token()->user_id;

        

            //  dd($userid);

        // $order=order::join('ordered_products', 'ordered_products.order_id', '=', 'orders.id' )->join('products','products.id','=','ordered_products.product_id')->join('users', 'users.id', '=', 'products.vendor_id' )->join('categories', 'categories.id', '=', 'products.cat_id' )->where('user_id','=',$userid)->get();

        $orders = Order::with('orderItem')->where('user_id','=',$userid)->orderBy('orders.created_at','DESC')->where('parent_id','=',0)->get();

      

        if(count($orders) >0 ){

            foreach($orders as $key => $val){ 

                $delvery_date = Carbon::createFromFormat('Y-m-d H:i:s', $val->created_at);
                $expected_date = $delvery_date->addDays(7);
                $exp_date = $expected_date->toDateString();
                $meta1 = OrderMeta::select('meta_value')->where('order_id',$val->id)->where('meta_key','billing_address')->first();

                $meta2 = OrderMeta::select('meta_value')->where('order_id',$val->id)->where('meta_key','shipping_address')->first();

                $total_price = OrderMeta::select('meta_value')->where('order_id',$val->id)->where('meta_key','total_price')->first();

                $currency_sign = OrderMeta::select('meta_value')->where('order_id',$val->id)->where('meta_key','currency_sign')->first();

                $shipping_price = OrderMeta::select('meta_value')->where('order_id',$val->id)->where('meta_key','shipping_price')->first();

               $orders[$key]['billing'] = (!empty($meta1->meta_value) ? json_decode($meta1->meta_value) : '');

               $orders[$key]['shipping'] = (!empty($meta2->meta_value) ? json_decode($meta2->meta_value) : '' );

            //    if($val->currency_code != "KWD"){

            //         $convertedCurrency =    CurrencyConvert::convert()
            //         ->from($val->currency_code)
            //         ->to("KWD")
            //         ->amount($total_price->meta_value)
            //         ->get();
            //         $covertedprice = round($convertedCurrency);
            //        // var_dump($covertedprice);
            //         $orders[$key]['total_price'] = !empty($covertedprice) ? $covertedprice :'';
            //     }
            //     else{
            //         $orders[$key]['total_price'] = !empty($total_price->meta_value) ? $total_price->meta_value :'';
            //     }

               $orders[$key]['total_price'] = !empty($total_price->meta_value) ? $total_price->meta_value :'';

               $orders[$key]['currency_sign'] = !empty($currency_sign->meta_value) ? $currency_sign->meta_value :'';

               $orders[$key]['shipping_price'] = !empty($shipping_price->meta_value) ? $shipping_price->meta_value : '';

               foreach($val->orderItem as $orderitemkey => $ordereditem){
                $orderproductmeta = OrderProductMeta::where('order_id',$val->id)->where('product_id',$ordereditem->product_id)->where('meta_key','product_image')->first();
                $val->orderItem[$orderitemkey]['featured_image'] = url('products/feature/'. $orderproductmeta->meta_value);

               }

               $orders[$key]['expected_date'] = $exp_date;

            }

             return response()->json([ 'status'=> true , 'message' => "Order History Detail", 'order' => $orders], 200);

        }else{

             return response()->json([ 'status'=> false ,'message' => "Order not found", 'order' => []], 200);

        }



       

    }

    public function stripeDemo(Request $request){



        $stripeAccount = new \Stripe\StripeClient(env('STRIPE_SECRET'));



        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));



        // $method = \Stripe\PaymentMethod::create([

        //     'type' => 'card',

        //     'card' => [

        //         'number' => '4242424242424242',

        //         'exp_month' => 12,

        //         'exp_year' => 2022,

        //         'cvc' => '314',

        //     ],

        // ]);

        $method = $stripeAccount->tokens->create([

            'card' => [

              'number' => '4242424242424242',

              'exp_month' => 2,

              'exp_year' => 2023,

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

    public function cancelOrder(Request $request){
        $validator = Validator::make($request->all(), [
            'itemid' => 'required',
            'order_id' => 'required',
            'reason' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);
        }
        foreach($request->itemid as $val){
            $orderstatus =  ["order placed","in process","packed","ready to ship","shipped","out for delivery","delivered","return","refunded","out for reach"];

            $addorderStatus = "cancel requested";
            $prevStatus = OrderProductNote::where('order_id',$request->order_id)->where('product_id',$val)->orderBy('id', 'DESC')->first();

            $arryaseachpostionPrev = array_search($prevStatus->status, $orderstatus);

            $OrderedProducts = OrderedProducts::where('order_id',$request->order_id)->where('product_id',$val)->firstOrFail();
            if($OrderedProducts->status == "delivered" || $OrderedProducts->status == "return" || $OrderedProducts->status == "refunded" && $OrderedProducts->status == "out for reach"){
                return response()->json([ 'status'=> false , 'message' => "order is not cancelable"], 200);
            }
            
            $orderstatusNew = array_merge(array_slice($orderstatus, 0, $arryaseachpostionPrev+1), array($addorderStatus), array_slice($orderstatus, $arryaseachpostionPrev+1));
            $OrderedProducts->update([
                'status' => "cancel requested"
            ]);
            $note = count(OrderProductNote::where('order_id',$request->order_id)->where('product_id',$val)->get());
            $statusnote = array_slice($orderstatusNew,$note);
           $i =1;
           foreach($statusnote as $value){
                if($value == "cancel requested"){
                    $OrderProductNote = OrderProductNote::create([
                        'order_id' => $request->order_id,
                        'product_id' => $val,
                        'status' => $value,
                        'note' => "order cancel requested",
                    ]);
                break;
            }
            $OrderProductNote = OrderProductNote::create([
                'order_id' => $request->order_id,
                'product_id' => $val,
                'status' => $value,
                'note' => "order cancel requested",
            ]);
            $i++;
           }

           
        }

        return response()->json([ 'status'=> true , 'message' => "success"], 200);


    }

    

}