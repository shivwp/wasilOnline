<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\VendorShipping;
use App\Models\ShippingMethod;
use App\Models\ShippingProduct;
use App\Models\PaymentMethod;
use Validator;

class ShippingApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $shipdats = [];
        $productShipping = ShippingProduct::whereIn('product_id',$request->product_id)->get();
       if(count($productShipping)>0){
           foreach($productShipping as $k => $v){
           $ship= ShippingMethod::select('title')->where('id',$v->shipping_method_id)->first();
           $shipdats[$k]['title'] = $ship->title;
           $shipdats[$k]['min_order_free'] = $v->min_order_free;
           $shipdats[$k]['ship_price'] = $v->ship_price;
           }
        return response()->json(['status' => true, 'message' => "shiiping methods", 'shipping' => $shipdats], 200);
       }
       else{
        $productShipping = [[
            "title" =>  "Free shipping",
            "min_order_free" => 800,
            "ship_price" =>  0
          ],
          [
            "title" =>  "Fixed shipping",
            "min_order_free" =>  0,
            "ship_price" => 50
          ]]; 

        return response()->json(['status' => true, 'message' => "shiiping methods", 'shipping' =>$productShipping ], 200);
       }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function paymentMethod()
    {
        $PaymentMethod = PaymentMethod::where('is_available',1)->get();
        if(count($PaymentMethod) > 0){
            return response()->json(['status' => true, 'message' => "all payment method", 'payment' => $PaymentMethod], 200);
        }else{
            return response()->json(['status' => false, 'message' => "all payment method", 'payment' => []], 200);

        }
      
    }


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
