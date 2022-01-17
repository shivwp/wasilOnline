<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return response()->json(['status' => true, 'message' => "All product list", 'user' => $product], 200);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function singleproduct(Request $request){
        $product=Product::where('id','=',$request->id)->first();

        return response()->json(['status' => true, 'message' => "singleproduct", 'product' => $product], 200);
    }
    
    public function filter(Request $request)
    {
        $products = Product::get();
                if ($request->shipping_type) {
                    $products = $products->whereIn('shipping_type', $request->shipping_type);
                }
                if ($request->cat_id) {
                    $products = $products->whereIn('cat_id', $request->cat_id);
                }
                if ($request->vendor_id) {
                    $products = $products->whereIn('vendor_id', $request->vendor_id);
                }
            return response()->json(['status' => true, 'message' => "All product filter list", 'product' => $products], 200);
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
