<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderNote;
use App\Models\Address;
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
        $d['title'] = "ORDER";
        $d['buton_name'] = "ADD NEW";
        $req=$request->status;

        if(Auth::user()->roles->first()->title == 'Admin'){
            if(isset($_GET['status'])){
                
                $d['order']=Order::where('status', '=' , $req);
            }else{
                $d['order']=Order::orderBy('id', 'DESC');
            }
        }



        elseif(Auth::user()->roles->first()->title == 'Vendor'){
            if(isset($_GET['status'])){
                
                 $d['order']=Order::join('ordered_products', 'ordered_products.order_id', '=', 'orders.id' )->join('products','products.id','=','ordered_products.product_id')->where('products.vendor_id','=','Auth::user()->id')->where('status', '=' , $req);
            }else{
                  $d['order']=Order::join('ordered_products', 'ordered_products.order_id', '=', 'orders.id' )->join('products','products.id','=','ordered_products.product_id')->where('products.vendor_id','=','Auth::user()->id')->where('orders.status', '<>' , 'delivered')->orderBy('id', 'DESC');
            }
      
           
        }
        else{
          $d['order'] = [];
        }
       
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $d['order'] =$d['order']->paginate($pagination)->withQueryString();
        return view('admin/order/index',$d);
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
