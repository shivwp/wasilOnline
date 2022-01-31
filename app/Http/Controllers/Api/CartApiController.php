<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\ProductAttribute;
use App\Models\ProductVariants;
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

        $cart=Cart::select('id','user_id','product_id','quantity')->where('user_id','=',$userid)->get();

        if(count($cart) > 0 ){
            foreach($cart as $c_key => $c_value){
                $product = Product::where('id',$c_value->product_id)->first();
                if(!empty($product)){
                    $data = [];
                    $gallery = json_decode($product->gallery_image);
                    if(!empty($gallery)){
                        foreach ($gallery as $key1 => $value) {
                            $value1 = url('products/gallery/' . $value);
                            $data[] = $value1;
                        }
                    $product['gallery_image'] = $data;
                    }
                    if(!empty($product->featured_image)){
                    $product['featured_image'] = url('products/feature/'. $product->featured_image);
                    }
                    if($product->product_type == "single"){
                        $productAttributes = ProductAttribute::where('product_id',$product->id)->groupBy('attr_id')->get();
                        if(count($productAttributes)>0){
                            foreach($productAttributes as $attr_key => $attr_val){
                                $attr = Attribute::select('id','slug')->where('id',$attr_val->attr_id)->first();
                                $attrdata[] = $attr;
                            }
                            if(!empty($attrdata)){
                                foreach($attrdata as $d => $dv){
                                    $proattragain = ProductAttribute::where('attr_id',$dv->id)->get();
                                    $attrval = [];
                                    foreach($proattragain as $ag => $proagain){
                                    $attrval[] = $proagain->attr_value_id;
                    
                                    }
                                    $attr_value = AttributeValue::select('id','attr_id','slug')->whereIn('id',$attrval)->get();
                                    
                                $attrdata[$d]['attribute_value'] = $attr_value;
                                }
                            }
                            $product['attributes'] = $attrdata;
                        }
                    }
                    else{
                        $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$product->id)->get();
                        if(count($productVariants) > 0){
                            $arr_attr = [];
                            $variants_img = [];
                            foreach($productVariants as $v_k => $v_val){
                                foreach(json_decode($v_val->variant_value) as $key_var =>   $val_var) {
                                    $attrval = AttributeValue::where('id', $val_var)->first();
                                    $arr_attr[$key_var]['key'] = $attrval->attr_value_name;
                                    $arr_attr[$key_var]['value'] = $val_var; 
                                    $productVariants[$v_k]['variant_value'] = $arr_attr;
                                }
                                if(!empty($v_val->variant_images)){
                                    foreach(json_decode($v_val->variant_images) as $key_var_img =>   $val_var_img) {
                                        $variants_img[] = url('products/gallery/' . $val_var_img);
                                        $productVariants[$v_k]['variant_images'] = $variants_img;
                                    }
                                }
                                
                            }
                            
                            $product['variants'] = $productVariants;
                        }
                    }
                }

                $cart[$c_key]['product'] = !empty($product) ? $product : '' ;
               
            }

            return response()->json(['status' => true, 'message' => "Success",  'cart' => $cart], 200);

        }
        else{

            return response()->json(['status' => false, 'message' => "data not found",  'cart' => []], 200);

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
            // 'gift_card_code'            => 'required',
            // 'gift_card_amount'           => 'required',
        ]);

        $product = Product::where('id',$request->product_id)->first();

        if(!empty($product)){

            // $already = Cart::where('product_id',$product->id)->where('user_id',$userid)->first();
            // if(!empty($already)){
            //     return response()->json(['status' => false,'message'=>'product already exist in cart'], 200);        
            // }

            $cart = Cart::updateOrCreate(['id' => $request->id],
                [
                'user_id'                   => $userid,
                'product_id'                   => $product->id,
                'quantity'            => $request->quantity,
                // 'attr_id'            => $request->attr_id,
                // 'attr_val_id'            => $request->attr_val_id,

                ]);
            return response()->json(['status' => true,'message'=>'success'], 200);  
        }

       

     
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
