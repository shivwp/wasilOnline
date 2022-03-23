<?php



namespace App\Http\Controllers\Api;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

use App\Models\VendorShipping;

use App\Models\ShippingMethod;

use App\Models\ShippingProduct;
use App\Models\Cart;
use Auth;

use App\Models\PaymentMethod;
use App\Models\User;

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
        $ship = [];
        if (Auth::guard('api')->check()) {
            $user = Auth::guard('api')->user();
        } 

        $user_id = $user->id;
        
        $usercart = Cart::where('user_id',$user_id)->get();

        $proid = [];

        foreach($usercart as $key => $val){
            $proid[] = $val->product_id;
        }
        foreach($proid as $k => $v){
            $product = Product::where('id',$v)->first();
            $vendor[] = $product->vendor_id;
        }
        $Vendor = User::select('id','name')->whereIn('id',array_unique($vendor))->get();
        $shippingdata = [];
        foreach($Vendor as $key => $val){
           $VendorShipping = VendorShipping::where('vendor_id',$val->id)->get();
           foreach($VendorShipping as $k => $v){
                $shipmeth= ShippingMethod::select('title')->where('id',$v->shipping_method_id)->first();
                $shippingdata[$k]['title'] = $shipmeth->title;
                $shippingdata[$k]['min_order_free'] = $v->min_order_free;
                $shippingdata[$k]['ship_price'] = $v->ship_price;
          
            }
           $ship[$key]['store_id'] = $val->id;
           $ship[$key]['store_name'] = $val->name;
           $ship[$key]['shipping'] = $shippingdata;
            
        }

        return response()->json(['status' => true, 'message' => "success", 'shipping' => $ship], 200);

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

