<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use DB;

class CouponApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $cart = Cart::whereIn('id',$request->cartids)->get();
       $couponid = []; 
       if(count($cart) > 0){
        foreach($cart as $key => $val){
            $product = Product::where('id',$val->product_id)->first();
            $productid = $product->id;
            $category = $product->cat_id;
            $vendor = User::where('id',$product->vendor_id)->first();
            $vendorid = $vendor->id;
            if(!empty($productid)){
                $coupon = DB::table('coupon_product')->where('product_id',$productid)->get();
                foreach($coupon as $val){
                    $couponid[] = $val->coupon_id;
                }
            }
            elseif(!empty($category)){
                $coupon = DB::table('category_coupon')->where('category_id',$category)->get();
                foreach($coupon as $val){
                    $couponid[] = $val->coupon_id;
                }
            }
            else{
                $coupon = DB::table('coupon_user')->where('user_id',$vendorid)->get();
                foreach($coupon as $val){
                    $couponid[] = $val->coupon_id;
                }
            }
        }
       // dd($couponid);
        $coupon = Coupon::select('id','code')->whereIn('id',$couponid)->get();
        if(count($coupon)>0){
            return response()->json(['status' =>true, 'message' => 'success','coupon' => $coupon], 200);
        }
        else{
            return response()->json(['status' => false, 'message' => 'no coupons','coupon' => $coupon], 200);
        }
       }
       else{
        return response()->json(['status' => false, 'message' => 'cart not found','coupon' => []], 200);  
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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

  
    public function show()
    {
        //
    }

  
    public function edit()
    {
       
    }

 
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
         $coupon = Coupon::findOrFail($id);
        $coupon->delete();
        return back();
    }
}
