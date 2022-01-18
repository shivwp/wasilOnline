<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\ProductVariants;
use App\Models\ProductAttribute;
use DB;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::orderBy('id', 'DESC')->where('parent_id','=',0)->get();

        if(count($product) > 0){

            foreach($product as $key => $val){
                $data = [];
                $gallery = json_decode($val->gallery_image);
                if(!empty($gallery)){
                    foreach ($gallery as $key1 => $value) {
                        $value1 = url('products/gallery/' . $value);
                        $data[] = $value1;
                    }
                $product[$key]['gallery_image'] = $data;
                }
                if(!empty($val->featured_image)){
                $product[$key]['featured_image'] = url('products/feature/'. $val->featured_image);
                }
                $productAttributes = ProductAttribute::where('product_id',$val->id)->first();
                $attrData = [];
                if(!empty($productAttributes)){
                    $attrtitle = Attribute::where('id', $productAttributes->attr_id)->first();
                    $attrval = AttributeValue::where('id', $productAttributes->attr_value_id)->first();
                    $attrData['key'] = $attrtitle->name;
                    $attrData['val'] = $attrval->attr_value_name;

                    $product[$key]['attributes'] = $attrData;

                }

                $productVariants = ProductVariants::select('parent_id','p_id','variant_value','variant_sku','variant_price','variant_stock','variant_images')->where('parent_id',$val->id)->get();
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
                    $product[$key]['variants'] = $productVariants;
                }

                

            }

            return response()->json(['status' => true, 'message' => "All product list", 'user' => $product], 200);

        }
        else{
            return response()->json(['status' => false, 'message' => "Product Not Found", 'data' => []], 200);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function singleproduct(Request $request){
        $product=Product::where('id','=',$request->id)->first();
        if(!empty($product)){
            $product->featured_image = url('products/feature/'. $product->featured_image);
            $gallery_data = [];
            if(!empty($product->gallery_image)){
                foreach(json_decode($product->gallery_image) as $gall_val){
                    $value1 = url('products/gallery/' . $gall_val);
                    $gallery_data[] = $value1;
                }
                $product->gallery_image = $gallery_data;
            }
            $productAttributes = ProductAttribute::where('product_id',$product->id)->first();
            $attrData = [];
            if(!empty($productAttributes)){
                $attrtitle = Attribute::where('id', $productAttributes->attr_id)->first();
                $attrval = AttributeValue::where('id', $productAttributes->attr_value_id)->first();
                $attrData['key'] = $attrtitle->name;
                $attrData['val'] = $attrval->attr_value_name;

                $product['attributes'] = $attrData;

            }
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
                $product['variants'] = $productVariants;
                    
                }
               
            }
            return response()->json(['status' => true, 'message' => "singleproduct", 'product' => $product], 200);

        }
        else{
            return response()->json(['status' => false, 'message' => "singleproduct", 'product' => []], 200);

        }

        
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

    public function allFilters(Request $request)
    {
        $data = [];
        $category = Category::all();
        if(count($category) > 0 ){
            $data['categories'] = $category;
        }
        $attr = Attribute::all();
        if(count($attr) > 0 ){
            foreach($attr as $key => $val){
                $attrVal = AttributeValue::where('attr_id',$val->id)->get();
                if(count($attrVal) > 0 ){
                    $attr[$key]['attribute_value'] = $attrVal;
                }
            }
            $data['attributes'] = $attr;
        }
        return response()->json(['status' => true, 'message' => "success", 'data' => $data], 200);
    }

    public function filterProduct(Request $request){
        DB::enableQueryLog();

        $product =Product::select('products.*')
                            ->where('parent_id','=',0);
        if(!empty($request->sorting)){
            $product->orderBy('id', $request->sorting);
        }
        if(!empty($request->category_id)){
            $product->where('cat_id',$request->category_id);
        }
        if(!empty($request->filter_data[0]) && $request->filter_data[0]['type']=="attribute" && !empty($request->filter_data[0]['attributes_id'])){
            $imp=$request->filter_data[0]['attributes_id'];
            $proattr = [];
            $proAttr = DB::table('product_attributes')->whereIn('attr_id', $imp)->get();
            foreach($proAttr as $key => $val){
               $proattr[] = $val->product_id; 
            }
            $product->whereIn('id',$proattr);
        }
        if(!empty($request->filter_data[0]) && $request->filter_data[0]['type']=="attribute_value" && !empty($request->filter_data[0]['attributes_value_id'])){
            $imp1   =   $request->filter_data[0]['attributes_value_id'];   
            $proattr1 = [];
            $proAttr1 = DB::table('product_attributes')->whereIn('attribute_value', $imp1)->get();
            foreach($proAttr1 as $key1 => $val1){
               $proattr1[] = $val->product_id; 
            }
            $product->whereIn('id',$proattr1);
        }
        if($request->filter_data[2]['min_price']){
            $product->where('s_price','>=',$request->filter_data[2]['min_price'])
                    ->where('s_price','<=',$request->filter_data[2]['max_price']);
           
        }

        $data = $product->get();

        //dd(DB::getQueryLog());

        return response()->json(['status' => true, 'message' => "success", 'data' => $data], 200);
      
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
