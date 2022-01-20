<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Validator;
use Auth;
class CartApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $userid = Auth::user()->token()->user_id;

        if(empty($userid)){
         
            return response()->json(['status' => true, 'message' => "user not found", 'data' => []], 200); 
        }

        $cart=Cart::where('user_id','=',$userid)->get();

        if(count($cart) > 0 ){

            return response()->json(['status' => true, 'message' => "Success",  'data' => $cart], 200);

        }
        else{

            return response()->json(['status' => false, 'message' => "data not found",  'data' => []], 200);

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $userid = Auth::user()->token()->user_id;

        if(empty($userid)){
            return response()->json(['status' => true, 'message' => "user not found", 'data' => []], 200); 
        }

        $validator = Validator::make($request->all(), [
            'user_id'                   => 'required',
            'card_id'                   => 'required',
            'gift_card_code'            => 'required',
            'gift_card_amount'           => 'required',
        ]);

          $cart = Cart::updateOrCreate(['id' => $request->id],
            [
                'user_id'                   => $userid,
                'product_id'                   => $request->product_id,
                // 'gift_card_code'            => $request->quantity,
                //'gift_card_amount'            => $request->quantity,
                'quantity'            => $request->quantity,
            
          ]);
        return response()->json(['status' => true, 'cart' => $cart], 200);
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
