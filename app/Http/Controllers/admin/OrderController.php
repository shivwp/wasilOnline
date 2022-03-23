<?php



namespace App\Http\Controllers\admin;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Order;

use App\Models\OrderNote;

use App\Models\Address;
use App\Models\OrderMeta;
use App\Models\OrderProductNote;
use App\Models\OrderedProducts;
use App\Models\OrderPayment;
use DB;

use Auth;

class OrderController extends Controller

{

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
        $d['order'] = $order;

        return view('admin/order/show',$d);
    }

    public function changestatus(Request $request){
        OrderedProducts::where('id',$request->id)->update([
            'status' => $request->status
        ]);
        $order = Order::where('id',$request->orderid)->firstOrFail();
        $orderpayment = OrderPayment::where('order_id',$request->orderid)->firstOrFail();
        $amount =OrderedProducts::where('order_id',$request->orderid)->where('product_id',$request->productid)->first();
        if($request->status == "cancelled"){
            //Stripe Refund Amount  

            try{
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

            $stripe->refunds->create(
                ['payment_intent' => $orderpayment->trans_id, 'amount' => $amount->total_price*100]
              );

              //return stripe;
            }catch(\Stripe\Exception\InvalidRequestException $e){
                
                return response()->json(['status' => false, 'message' => $e->getError()->message], 200);
            }

            $OrderProductNote = OrderProductNote::create([
                'order_id' => $request->orderid,
                'product_id' => $request->productid,
                'status' => "cancelled",
                'note' => "Order cancelled",
            ]);

            

            return redirect('/dashboard/order/'.$request->orderid)->with('status', 'order status is updated');
        }
        $orderstatus =  ["new","in process","packed","ready to ship","shipped","out for delivery","delivered","cancel requested","cancelled","return","refunded","out for reach"];
        $prevStatus = OrderProductNote::where('order_id',$request->orderid)->where('product_id',$request->productid)->orderBy('id', 'DESC')->first();
        $arryaseachpostionnow = array_search($request->status, $orderstatus);
        $arryaseachpostionPrev = array_search($prevStatus->status, $orderstatus);
        if($arryaseachpostionnow <  $arryaseachpostionPrev){

            $deleteprivious =  OrderProductNote::where('order_id',$request->orderid)->where('product_id',$request->productid)->delete();

        }
        $note = count(OrderProductNote::where('order_id',$request->orderid)->where('product_id',$request->productid)->get());
        $statusnote = array_slice($orderstatus,$note);
       // dd($statusnote);
       $i =1;
       foreach($statusnote as $val){
            if($val == $request->status){
                $OrderProductNote = OrderProductNote::create([
                    'order_id' => $request->orderid,
                    'product_id' => $request->productid,
                    'status' => $val,
                    'note' => $request->comment,
                ]);

            break;

        }
        $OrderProductNote = OrderProductNote::create([
            'order_id' => $request->orderid,
            'product_id' => $request->productid,
            'status' => $val,
            'note' => $request->comment,
        ]);
        $i++;
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

        $data->status = $request->order_status;

        $data->shipping_type = $request->shipping_type;

        $data->shipping_method = $request->shipping_method;

        $data->save();

       

        $notedata = new OrderNote();

        $notedata->order_id = $id;

        $notedata->order_status = $request->order_status;

        $notedata->order_note = $request->status_note;

        $notedata->save();



        $order_id = $request->order_id;

       

        $addressdata = Address::where('order_id',$order_id)->first();

        $addressdata->address = $request->address;

        $addressdata->save();

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

