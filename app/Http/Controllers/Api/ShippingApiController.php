<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

use App\Models\VendorShipping;
use App\Models\VendorSetting;

use App\Models\ShippingMethod;

use App\Models\CityPrice;

use App\Models\ShippingProduct;
use App\Models\Cart;
use App\Models\Setting;
use Auth;

use App\Models\PaymentMethod;
use App\Models\CityPriceVendor;
use App\Models\User;

use Validator;



class ShippingApiController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index_bk(Request $request)
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
            $VendorSetting = VendorSetting::where('vendor_id',$val->id)->pluck('value', 'name');
            if(isset($VendorSetting['free_shipping_is_applied']) && !empty($VendorSetting['free_shipping_is_applied']) && ($VendorSetting['free_shipping_is_applied'] == 1)){
                $product = Product::where('vendor_id',$val->id)->whereIn('id',$proid)->get();
                $productOrderAmount = 0;
                foreach($product as $p_k => $p_v){
                    $usercart = Cart::where('user_id',$user_id)->where('product_id',$p_v->id)->sum('price');
                    $productOrderAmount+=$usercart;
                }
                if(!empty($productOrderAmount) && $productOrderAmount >= $VendorSetting['free_shipping_over']){
                    $shippingdata[$k]['title'] = "Free Shipping";
                    $shippingdata[$k]['ship_price'] = 0;
                }
            }
            if(isset($VendorSetting['normal_shipping_is_applied']) && !empty($VendorSetting['normal_shipping_is_applied']) && ($VendorSetting['normal_shipping_is_applied'] == 1)){
                $shippingdata[$k]['title'] = "Normal Shipping";
                $shippingdata[$k]['ship_price'] = $VendorSetting['normal_price'];
            }
            // if(isset($VendorSetting['shipping_by_city_is_applied']) && !empty($VendorSetting['shipping_by_city_is_applied']) && ($VendorSetting['shipping_by_city_is_applied'] == 1)){

            // }


            $ship[$key]['store_id'] = $val->id;
            $ship[$key]['store_name'] = $val->name;
            $ship[$key]['shipping'] = $shippingdata;

        }
       

        return response()->json(['status' => true, 'message' => "success", 'shipping' => $ship], 200);

    }

    public function index(Request $request)
    {
      
        if (Auth::guard('api')->check()) {
            $user = Auth::guard('api')->user();
        } 
        $user_id = $user->id;

        $validator = Validator::make($request->all(), [
            'city' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);
        }
        
        $usercart = Cart::select('cart.*','products.id as product_id','products.vendor_id','products.pname')->where('cart.user_id',$user_id)->leftJoin('products', 'cart.product_id', '=', 'products.id')->groupBy('products.vendor_id')->get();
        $shipping = [];
        $vendorship = [];
        foreach($usercart as $val){
            $vendor = User::where('id',$val->vendor_id)->first();
            $vndorsetting = VendorSetting::where('vendor_id',$val->vendor_id)->pluck('value','name');
            $adminsetting = Setting::pluck('value','name');
            $vendorProductCount = Cart::where('vendor_id',$val->vendor_id)->where('user_id',$user_id)->sum('price');
            $vendorship['store_id'] = $vendor->id;
            $vendorship['store_name'] = $vendor->name;
            $data = [];
            if(isset($vndorsetting['free_shipping_is_applied']) && ($vndorsetting['free_shipping_is_applied'] == "on")){
                if(isset($vndorsetting['free_shipping_over']) && ($vendorProductCount >= $vndorsetting['free_shipping_over'])){
                    $shipdata = [];
                    $shipdata['title'] = "Free Shipping";
                    $shipdata['amount'] = 0;
                    $data[] = $shipdata;
                    $vendorship['shipping_method'] = $data;
                }
            }
            if(isset($vndorsetting['normal_shipping_is_applied']) && ($vndorsetting['normal_shipping_is_applied'] == "on")){
                $shipdata = [];
                $shipdata['title'] = "Normal Shipping";
                $shipdata['amount'] = $vndorsetting['normal_price'];
                $data[] = $shipdata;
                $vendorship['shipping_method'] = $data;
            }
            else{
                $shipdata = [];
                $shipdata['title'] = "Normal Shipping";
                $shipdata['amount'] = $adminsetting['normal_price'];
                $data[] = $shipdata;
                $vendorship['shipping_method'] = $data;   
            }
            if(isset($vndorsetting['shipping_by_city_is_applied']) && ($vndorsetting['shipping_by_city_is_applied'] == "on")){

                $CityPriceVendor = CityPriceVendor::where('vendor_id',$vendor->id)->where('city_id',$request->city)->first();
                $shipdata = [];
                $shipdata['title'] = "City Shipping";
              //  $shipdata['amount'] = $vndorsetting['normal_price'];
                $shipdata['priority_price'] = $CityPriceVendor->normal_price;
                $shipdata['normal_price'] = $CityPriceVendor->priority_price;
                $data[] = $shipdata;
                $vendorship['shipping_method'] = $data;
            }
            else{
                $CityPriceAdmin = CityPrice::where('city_id',$request->city)->first();  
                $shipdata['title'] = "City Shipping";
                //  $shipdata['amount'] = $vndorsetting['normal_price'];
                  $shipdata['priority_price'] = !empty($CityPriceAdmin->normal_price) ? $CityPriceAdmin->normal_price : 0;
                  $shipdata['normal_price'] = !empty($CityPriceAdmin->priority_price) ? $CityPriceAdmin->priority_price : 0;
                  $data[] = $shipdata;
                  $vendorship['shipping_method'] = $data;
            }
            
            $shipping[] = $vendorship;

           // $vendorship['shipping'] = $vendor->name;

        }
        if(!empty($shipping) && (count($shipping) > 0)){
            return response()->json(['status' => true, 'message' => "success", 'shipping' => $shipping], 200);

        }
        else{
            return response()->json(['status' => false, 'message' => "no shipping available", 'shipping' => []], 200);  
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

