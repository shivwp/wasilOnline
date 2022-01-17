<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Auth;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $d['title'] = "ORDER";
        $d['buton_name'] = "ADD NEW";
        if(Auth::user()->roles->first()->title == 'Admin'){
         $d['order']=Order::where('status', '=' ,'new')->orWhere('status', '=', 'in process')->orWhere('status', '=', 'shipped')->orWhere('status', '=', 'packed')->orWhere('status', '=', 'refunded')->orWhere('status', '=', 'cancelled')->orWhere('status', '=', 'out for delivery')->orWhere('status', '=', 'return')->orWhere('status', '=', 'out for reach')->orWhere('status', '=', 'ready to ship')->get();
          
        }
        elseif(Auth::user()->roles->first()->title == 'Vendor'){

          //$d['product']=Product::->get();
          $d['order']=Order::join('ordered_products', 'ordered_products.order_id', '=', 'orders.id' )->join('products','products.id','=','ordered_products.product_id')->where('products.vendor_id','=','Auth::user()->id')->orwhere('status', '=' ,'new')->orWhere('status', '=', 'in process')->orWhere('status', '=', 'shipped')->orWhere('status', '=', 'packed')->orWhere('status', '=', 'refunded')->orWhere('status', '=', 'cancelled')->orWhere('status', '=', 'out for delivery')->orWhere('status', '=', 'return')->orWhere('status', '=', 'out for reach')->orWhere('status', '=', 'ready to ship')->get();
        }
        else{
          $d['order'] = [];
        }
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $d['order'] =Order::paginate($pagination)->withQueryString();
        return view('admin/order/index',$d);
    }

    public function deliveredorders()
    {                           
        $d['title'] = "ORDER";
        $d['buton_name'] = "ADD NEW";
        $d['order']=Order::where('status', '=' ,'delivered')->get();
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
        $d['order']=Order::findorfail($id);
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
        $order = Order::findOrFail($id);
        $order->delete();
        return back();
    }
}
