<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\Order;

use App\Models\OrderNote;
use App\Models\OrderShipping;
use App\Models\Mails;
use App\Mail\OrderMail;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Http\Traits\CurrencyTrait;
use Mail;

use App\Models\Address;
use App\Models\OrderMeta;
use App\Models\OrderProductNote;
use App\Models\OrderedProducts;
use App\Models\OrderPayment;
use App\Models\User;
use DB;

use Auth;

class OrderController extends Controller

{
    use CurrencyTrait;

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)
    {   

        $d['title']         = "ORDER";
        $d['buton_name']    = "ADD NEW";
        $req                =$request->status;

        if(Auth::user()->roles->first()->title == 'Admin'){

            $orders = Order::with('user','orderItem')->where('parent_id',0)->orderBy('id', 'DESC');
           
        }
        elseif(Auth::user()->roles->first()->title == 'Vendor'){

            $OrderedProducts = OrderedProducts::where('vendor_id',Auth::user()->id)->get();
            $proid = [];
            foreach($OrderedProducts as $val1){
               $proid[] =  $val1->order_id;
            }
            $orders = Order::where('parent_id',0)->orderBy('id', 'DESC')->whereIn('id',$proid);

        }
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        if(Auth::user()->roles->first()->title == 'Admin'){
            $orders = $orders->paginate($pagination)->withQueryString();

        }
        elseif(Auth::user()->roles->first()->title == 'Vendor'){
            $orders = $orders->paginate($pagination)->withQueryString();

        }
        foreach($orders as $key => $val){
            $amount = $this->ordermeta($val->id,'total_price');
            $billingaddress = $this->ordermeta($val->id,'billing_address');
            $shipaddress = $this->ordermeta($val->id,'shipping_address');
            $shipcharge = $this->ordermeta($val->id,'shipping_price');
            $orders[$key]['amount']    = !empty($amount)?$amount:'';
            $orders[$key]['billing']    = $billingaddress;
            $orders[$key]['ship']    = $shipaddress;
            $orders[$key]['ship_price']    = !empty($shipcharge) ? $shipcharge : 0;
            $shippingdata = OrderShipping::where('order_id',$val->id)->where('vendor_id',Auth::user()->id)->first();
            $orders[$key]['ship_pr']    = !empty($shippingdata->shipping_price) ? $shippingdata->shipping_price : 0;
           
           
        }
       
        $d['order'] = $orders;
        //dd($d['order']);

        return view('admin/order/index',$d);
    }

    public function ordermeta($orderid,$metakey){

        $metadata =OrderMeta::where('meta_key',$metakey)->where('order_id',$orderid)->first();
        if(!empty($metadata) && $metadata != null){
            return $metadata->meta_value;
        }
        else{
            return "";
        }
      //  dd($metadata);
       
    }

 



    public function deliveredorders()

    {                           

        $d['title'] = "ORDER";

        $d['buton_name'] = "ADD NEW";

        $d['order']=Order::where('status', '=' ,'delivered');



        $pagination=10;

        if(isset($_GET['paginate'])){

            $pagination=$_GET['paginate'];

        }

        $d['order'] = $d['order']->paginate($pagination)->withQueryString();

        return view('admin/order/index',$d);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {      $d['title'] = "ORDER";

        return view('admin/order/add',$d);

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        //

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)
    {
      
        $d['title'] = "ORDER";
        if(Auth::user()->roles->first()->title == 'Admin'){
        $order=Order::with('orderItem')->findOrFail($id);
        }
        else{
            $order=Order::findOrFail($id);
        }
        //billing 
        $billing_first_name = $this->ordermeta($order->id,'billing_first_name');
        $billing_last_name = $this->ordermeta($order->id,'billing_last_name');
        $billing_phone = $this->ordermeta($order->id,'billing_phone');
        $billing_address2 = $this->ordermeta($order->id,'billing_address2');
        $billing_city = $this->ordermeta($order->id,'billing_city');
        $billing_state = $this->ordermeta($order->id,'billing_state');
        $billing_zip_code = $this->ordermeta($order->id,'billing_zip_code');
        $billing_country = $this->ordermeta($order->id,'billing_country');
        $order['billing_first_name']    = !empty($billing_first_name)?$billing_first_name : '';
        $order['billing_last_name']    = !empty($billing_last_name)?$billing_last_name : '';
        $order['billing_phone']    = !empty($billing_phone)?$billing_phone : '';
        $order['billing_address2']    = $billing_address2;
        $order['billing_city']    = $billing_city;
        $order['billing_state']    = $billing_state;
        $order['billing_zip_code']    = $billing_zip_code;
        $order['billing_country']    = $billing_country;
        //shipping
        $shipping_first_name = $this->ordermeta($order->id,'shipping_first_name');
        $shipping_last_name = $this->ordermeta($order->id,'shipping_last_name');
        $shipping_phone = $this->ordermeta($order->id,'shipping_phone');
        $shipping_address2 = $this->ordermeta($order->id,'shipping_address2');
        $shipping_city = $this->ordermeta($order->id,'shipping_city');
        $shipping_country = $this->ordermeta($order->id,'shipping_country');
        $shipping_zip_code = $this->ordermeta($order->id,'shipping_zip_code');
        $shipping_state = $this->ordermeta($order->id,'shipping_state');
        $shipping_price = $this->ordermeta($order->id,'shipping_price');
        $order['shipping_first_name']    = $shipping_first_name;
        $order['shipping_last_name']    = $shipping_last_name;
        $order['shipping_phone']    = $shipping_phone;
        $order['shipping_address2']    = $shipping_address2;
        $order['shipping_city']    = $shipping_city;
        $order['shipping_country']    = $shipping_country;
        $order['shipping_zip_code']    = $shipping_zip_code;
        $order['shipping_state']    = $shipping_state;
        $order['shipping_price']    = $shipping_price;
        if(Auth::user()->roles->first()->title == 'Vendor'){
            $orderproductvendor =OrderedProducts::where('order_id',$order->id)->where('vendor_id',Auth::user()->id)->get();
            $order['orderItem']    = $orderproductvendor;
        }
        $shippingdata = OrderShipping::where('order_id',$order->id)->where('vendor_id',Auth::user()->id)->first();
        $order['ship_pr']    = !empty($shippingdata->shipping_price) ? $shippingdata->shipping_price : 0;
        $order['ship_title']    = !empty($shippingdata->shipping_title) ? $shippingdata->shipping_title : 0;
        $d['countries'] = Country::get(["name", "id"]); 
        $d['state'] = State::all(); 
        $d['city'] = City::all(); 
        $d['ordernotedata'] = OrderNote::where('order_id',$id)->orderBy('id','desc')->first(); 

        //shipping 


        //billing
        if(!empty($shipping_country)){
            $d['billingcountry'] = Country::where('id',$order['billing_country'])->first();
        }
        if(!empty($shipping_state)){
            $d['billingstate'] = State::where('state_id',$order['billing_state'])->first();
        }
        if(!empty($shipping_city)){
            $d['billingcity'] = City::where('city_id', $order['billing_city'])->first();
        }

        //shipping
        if(!empty($shipping_country)){
            $d['shippingcountry'] = Country::where('id',$order['shipping_country'])->first();
        }
        if(!empty($shipping_state)){
            $d['shippingstate'] = State::where('state_id',$order['shipping_state'])->first();
        }
        if(!empty($shipping_city)){
            $d['shippingcity'] = City::where('city_id', $order['shipping_city'])->first();
        }
       // dd($order['billing_country']);
        $d['order'] = $order;

        return view('admin/order/show',$d);
    }

    public function orderQtyUpdate(Request $request){

        $item = OrderedProducts::where('id',$request->itemid)->first();
        $price = $item->product_price;
        $updatePrice = $request->qty * $price;
        $item->update([
            'quantity' => $request->qty,
            'total_price' => $updatePrice
        ]);
        $item->save();
        $data['success'] = 'success';
        return response()->json($data);

    }

    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)->get(["state_name", "state_id"]);
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->get(["city_name", "city_id"]);
        return response()->json($data);
    }

    public function changestatus(Request $request){
        OrderedProducts::where('id',$request->id)->update([
            'status' => $request->status
        ]);
        $ordercurrentSatus = OrderProductNote::where('order_id',$request->orderid)->where('product_id',$request->productid)->orderBy('id', 'DESC')->first();

        if($request->status == "cancelled"){
            $orderstatus =  ["order placed","in process","packed","ready to ship","shipped","out for delivery","delivered","return","refunded","out for reach"];
          
            $addorderStatus_1 = "cancelled";
            $addorderStatus_2 = "cancel requested";
            $prevStatus = OrderProductNote::where('order_id',$request->orderid)->where('product_id',$request->productid)->where('status',"!=","cancel requested")->orderBy('id', 'DESC')->first();
            $arryaseachpostionPrev = array_search($prevStatus->status, $orderstatus);
            $orderstatusNew = array_merge(array_slice($orderstatus, 0, $arryaseachpostionPrev+1), array($addorderStatus_1), array_slice($orderstatus, $arryaseachpostionPrev+1));
            $orderstatusNew_1 = array_merge(array_slice($orderstatusNew, 0, $arryaseachpostionPrev+1), array($addorderStatus_2), array_slice($orderstatusNew, $arryaseachpostionPrev+1));

            //Cancel Refund
            $order = Order::where('id',$request->orderid)->firstOrFail();
            $ordermeta = OrderMeta::where('order_id',$request->orderid)->pluck('meta_value','meta_key');
            $orderpayment = OrderPayment::where('order_id',$request->orderid)->firstOrFail();
            $OrderedProducts =OrderedProducts::where('order_id',$request->orderid)->where('product_id',$request->productid)->firstOrFail();
            if(isset($ordermeta['refund_amount_in']) &&  $ordermeta['refund_amount_in'] == "bank"){

                try{
                    $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        
                    $stripe->refunds->create(
                        ['payment_intent' => $orderpayment->trans_id, 'amount' => $OrderedProducts->total_price*100]
                      );
        
                      //return stripe;
                }
                catch(\Stripe\Exception\InvalidRequestException $e)
                {
    
                        return redirect('/dashboard/order/'.$request->orderid)->with('status', $e->getError()->message);
                       
                }

            }
            elseif(isset($ordermeta['refund_amount_in']) && $ordermeta['refund_amount_in'] == "wallet"){
                $user =User::where('id',$order->user_id)->first();
                $updatewalletAmount = $user->user_wallet + $OrderedProducts->total_price;
                User::where('id',$order->user_id)->update([
                    'user_wallet' =>  $updatewalletAmount
                ]);
            }

        }
        else{
            $orderstatusNew_1 =  ["order placed","in process","packed","ready to ship","shipped","out for delivery","delivered","return","refunded","out for reach"];
        }
        //delete and insert again
        $arryaseachpostionnow = array_search($request->status, $orderstatusNew_1);
        $arryaseachpostionPrev_1 = array_search($ordercurrentSatus->status, $orderstatusNew_1);
        if($arryaseachpostionnow <  $arryaseachpostionPrev_1){

            $deleteprivious =  OrderProductNote::where('order_id',$request->orderid)->where('product_id',$request->productid)->delete();

        }

        $note = count(OrderProductNote::where('order_id',$request->orderid)->where('product_id',$request->productid)->get());
        $statusnote = array_slice($orderstatusNew_1,$note);
       $i =1;
       foreach($statusnote as $value){
            if($value == $request->status){
                $OrderProductNote = OrderProductNote::create([
                    'order_id' => $request->orderid,
                    'product_id' => $request->productid,
                    'status' => $value,
                    'note' => $request->comment,
                ]);
            break;
        }
        $OrderProductNote = OrderProductNote::create([
            'order_id' => $request->orderid,
            'product_id' => $request->productid,
            'status' => $value,
            'note' =>  $request->comment,
        ]);
        $i++;
       }
        return redirect('/dashboard/order/'.$request->orderid)->with('status', 'order status is updated');
    
    }

    public function orderInvoice($id){
        $d['title'] = "ORDER";
        $d['order'] = Order::where('id',$id)->first();
        $d['user'] = User::where('id',$d['order']->user_id)->first();
        $d['orderMeta'] = OrderMeta::where('order_id',$id)->pluck('meta_value','meta_key');
        $d['country'] = $this->getCountry($d['orderMeta']['shipping_country']);
        $d['state'] = $this->getstate($d['orderMeta']['shipping_state']);
        $d['city'] = $this->getCity($d['orderMeta']['shipping_city']);
        $d['orderProduct'] = OrderedProducts::where('order_id',$id)->get();
        $d['totalprice'] = OrderedProducts::where('order_id',$id)->sum('total_price');
        return view('admin/order/invoice',$d);

    }

    public function refundAmount(Request $request){
        $order = Order::where('id',$request->orderid)->first();
        $orderpayment = OrderPayment::where('order_id',$order->id)->first();
        try{
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

            $stripe->refunds->create(
                ['payment_intent' => $orderpayment->trans_id, 'amount' => $request->refund_amount*100]
              );

              //return stripe;
        }
        catch(\Stripe\Exception\InvalidRequestException $e)
        {

                return redirect('/dashboard/order/'.$request->orderid)->with('status', $e->getError()->message);
               
        }
        return redirect('/dashboard/order/'.$request->orderid)->with('status', 'order status is updated');

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $d['title'] = "ORDER";

        // $d['order']=Order::join('ordered_products','ordered_products.order_id','=','orders.id')->

        //                    join('address','address.order_id','=','orders.id')->

        //                    join('users','users.id','=','orders.user_id')->

        //                    select('orders.*','ordered_products.*','address.*','users.*','orders.order_id as order_generated_id','orders.id as main_id')

        //                    ->where('orders.id',$id)->first();

    

        $d['order']=Order::join('address','address.order_id','=','orders.id')->

                           join('users','users.id','=','orders.user_id')->

                           select('orders.*','address.*','users.*','orders.order_id as order_generated_id','orders.id as main_id')

                           ->where('orders.id',$id)->first();

        $d['allorder'] = Order::join('ordered_products','ordered_products.order_id','=','orders.id')

                         ->where('orders.id',$id)->get();

        

       

        return view('admin/order/add',$d);

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

        request()->validate([

            'order_status' => 'required',

        ]); 

        $data = Order::find($id);
        if(!empty($request->order_status)){
            $data->status = $request->order_status;
            $data->save();
        }
        dd($request->status_note);

        $notedata = new OrderNote();

        $notedata->order_id = $id;

        $notedata->order_status = $request->order_status;

        $notedata->order_note = $request->status_note;

        $notedata->save();

        $order_id = $request->order_id;

       $metadata =  [];
       $metadata['billing_first_name'] = $request->billing_first_name;
       $metadata['billing_last_name'] = $request->billing_last_name;
       $metadata['billing_phone'] = $request->billing_phone;
       $metadata['billing_country'] = $request->country;
       $metadata['billing_state'] = $request->state;
       $metadata['billing_city'] = $request->city;
       $metadata['billing_address2'] = $request->billing_address2;
       $metadata['shipping_first_name'] = $request->shipping_first_name;
       $metadata['shipping_last_name'] = $request->shipping_last_name;
       $metadata['shipping_address2'] = $request->shipping_address2;
       $metadata['shipping_zip_code'] = $request->shipping_zip;
       $metadata['shipping_phone'] = $request->shipping_phone;
       $metadata['shipping_country'] = $request->shipping_country;
       $metadata['shipping_state'] = $request->shipping_state;
       $metadata['shipping_city'] = $request->shipping_city;
       $metadata['order_id'] = $request->order_id;

       foreach($metadata as $m_k => $mv){
            if(!empty($mv)){
                OrderMeta::updateOrCreate([
                    'order_id'=>$request->order_id,
                    'meta_key'=>$m_k
                    ], [
                        'meta_key'=>$m_k,
                        'meta_value'=>$mv,
                ]); 
            }
        }
        

        if(Auth::user()->roles->first()->title == 'Vendor'){

        $type='Order';

       \Helper::addToLog('Order create or update', $type);

       }

        return redirect('/dashboard/order');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $order = Order::findOrFail($id);

        $order->delete();

         if(Auth::user()->roles->first()->title == 'Vendor'){

        $type='Order';

       \Helper::addToLog('Order Deleted', $type);

       }

        return back();

    }

}

