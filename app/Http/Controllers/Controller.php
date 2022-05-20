<?php







namespace App\Http\Controllers;







use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



use Illuminate\Foundation\Bus\DispatchesJobs;



use Illuminate\Foundation\Validation\ValidatesRequests;



use Illuminate\Routing\Controller as BaseController;



use App\Models\VendorSetting;

use App\Models\Order;

use App\Models\OrderPayment;

use App\Models\OrderedProducts;

use App\Models\OrderProductNote;

use App\Models\OrderProductMeta;

use App\Models\OrderMeta;

use App\Models\VendorEarnings;

use App\Models\Mails;

use App\Mail\OrderMail;

use Mail;



use App\Models\PageMeta;



use App\Models\Country;

use App\Models\UserWalletTransection;



use App\Models\City;



use App\Models\State;



use App\Models\ProductBid;

use App\Models\Product;



use App\Models\UserBids;

use App\Models\User;

use App\Models\Address;

use App\Models\OrderShipping;

use App\Models\OrderNote;



use Carbon;











class Controller extends BaseController



{



    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;





    //  public function __construct()

    // {



    //     die('sdfs');



        

    // }



    public function getVendorMeta($id, $name="", $status = false)



    {



        if (empty($name)) {



            // 



            $vendor_data = VendorSetting::where('vendor_id', $id)->select('name', 'value')



                ->pluck('value', 'name')



                ->toArray();



            return $vendor_data;



        }



        else {



            //



            if ($status) {



                // 



                $vendor_data = VendorSetting::where('vendor_id', $id)->where('name', $name)->first();



                if (!empty($vendor_data))



                    return $vendor_data->value;



                else



                    return "";



            }



            else {



                $vendor_data = VendorSetting::where('vendor_id', $id)->where('name', $name)->select('name', 'value')



                    ->pluck('value', 'name')



                    ->toArray();



                return $vendor_data;



            }



        }



    }



    public function getPageMeta($id, $key="")



    {



        if (empty($key)) {



            // 



            $PageMeta = PageMeta::where('page_id', $id)->select('key', 'value')



                ->pluck('value', 'key')



                ->toArray();



            return $PageMeta;



        }



        else {



            //



            if ($status) {



                // 



                $PageMeta = PageMeta::where('page_id', $id)->where('key', $key)->first();



                if (!empty($PageMeta))



                    return $PageMeta->value;



                else



                    return "";



            }



            else {



                $PageMeta = PageMeta::where('page_id', $id)->where('key', $key)->select('key', 'value')



                    ->pluck('value', 'key')



                    ->toArray();



                return $PageMeta;



            }



        }



    }



    public function get_country($id)



    {



        $country_name= Country::where($id,'=','id')->first();



        return  $country_name->name;



    }



    public function get_state($id)



    {



        $state_name= Country::where($id,'=','id')->first();



    }



    public function get_city($id)



    {



        $city_name= Country::where($id,'=','id')->first();



    }





     







      public function chronfn(){


          $productBid = Product::where('for_auction','on')->get();

           if(count($productBid) > 0){

                foreach($productBid as $val){

                    $productAuto  = ProductBid::where([['product_id',$val->id],['auto_allot',1]])->first(); 

                    if(!empty($productAuto)){

                            $currentDate = Carbon\Carbon::now()->format('Y-m-d');
                            $currenttime =  Carbon\Carbon::now()->format('H:i:m');

                            //$currentDateTime->setTimezone('Asia/Kolkata');

                            if(($currentDate == $productAuto->end_date) && ($productAuto->end_time >= $currenttime)){



                                  $userBid = UserBids::where('product_id',$val->id)->orderBy('bid_price', 'desc')->first();



                                  $user = User::where('id',$userBid->user_id)->first();



                                  if(empty($user->default_card)){



                                    echo 'payment not found';

                                    die;

                                  }



                                //order create



                                $order =  Order::create([

                                        'parent_id'             => 0,

                                        'user_id'               => $userBid->user_id,

                                        'status'                => 'order incomplete',

                                        'status_note'           =>  'new order',

                                        'shipping_method'       =>   'stripe',

                                        'payment_status'        => 'success',

                                        'currency_code'        => '$'

                                ]);



                                 $product = Product::where('id',$val->id)->first();



                                 //order product create



                                $orderedProduct = OrderedProducts::create([



                                    'order_id' =>$order->id,

                                    'product_id' => $product->id,

                                    'product_name' => $product->pname,

                                    'category' => $product->cat_id,

                                    'product_type' => $product->product_type,

                                    'quantity' => 1,

                                    'product_price' => $product->s_price,

                                    'total_price' => $product->s_price,

                                    'tax' => 0,

                                    'status' => "order incomplete",

                                    'vendor_id' => $product->vendor_id



                                ]);



                                 $vendorearning = $product->s_price;



                                  $productmeta = [

                                        'product_image' => $product->featured_image,

                                  ];



                                  //order product note



                                   OrderProductNote::create([

                                        'order_id'      => $order->id,

                                        'product_id'    => $product->id,

                                        'status' => "order incomplete",

                                        'note' => "delivery incomplete",

                                    ]);



                                    //order product meta

                                    foreach($productmeta as $metakey => $metaval){

                                        OrderProductMeta::create([

                                            'order_id' => $order->id,

                                            'product_id' => $product->id,

                                            'meta_key' => $metakey,

                                            'meta_value' => $metaval

                                        ]);

                                    }



                                    //Vendor Earning



                                    $vendorEarning =    VendorEarnings::create([

                                        'order_id'              =>$order->id,

                                        'vendor_id'             =>$product->vendor_id,

                                        'product_id'            =>$product->id,

                                        'amount'                =>$vendorearning,

                                        'payment_status'        =>"pending"

                                    ]);



                                    //order payment



                                    $stripeAccount = new \Stripe\StripeClient(env('STRIPE_SECRET'));



                                    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));



                                    $paymentIntent = \Stripe\PaymentIntent::create([

                                        'customer' => $user->customer_id,

                                        'amount' => $userBid->bid_price * 100,

                                        'currency' => 'usd',

                                        'payment_method_types' => ['card'],

                                        'payment_method' => $user->default_card,

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



                                         $updateAmount = $user->user_wallet + $userBid->bid_price;



                                         $user->update(['user_wallet'=>$updateAmount]);





                                            UserWalletTransection::create([

                                                'user_id' => $user->id,

                                                'amount' =>  $product->s_price,

                                                'amount_type' => 'CARD',

                                                'description' => 'Dabit / Cradit Card',

                                                'title' => 'Received from',

                                                'status' => 'received',



                                            ]);

                                    }





                                    OrderNote::create([

                                        'order_id' => $order->id,

                                        'order_status' => 'order placed',

                                        'order_note' => 'order incomplete',

                                        'status' => 'new',

                                    ]);





                                     OrderPayment::create([

                                        'order_id'  =>$order->id,

                                        'status'    =>'succeeded',

                                        'trans_id' =>$paymentIntent->id,

                                        'charges_id' =>$paymentIntent->charges->data[0]->id,

                                        'balance_transaction' =>$paymentIntent->charges->data[0]->balance_transaction,

                                        'message' => $paymentIntent->status



                                    ]);



                                    $userBid->update([
                                        'status' => 'winner'
                                    ]);

                                    $userBid->save();


                                    //auction close

                                    $proupdate = Product::where('id',$val->id)->update([

                                        'for_auction' => 'off'

                                    ]);





                                //email



                                $basicinfo = [



                                    '{orderid}' =>  $order->id,



                                ];



                                $mail_data = Mails::where('msg_category', 'order complete')->first();



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



                                    Mail::to('gunjanmanghnani5@gmail.com')->send(new OrderMail($config));



                            }

                    }


                }

           }


           return 0;



      }





     



     



}



