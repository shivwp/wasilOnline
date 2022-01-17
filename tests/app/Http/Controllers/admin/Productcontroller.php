<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\ProductAttribute;
use Auth;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $d['title'] = "PRODUCT";
        $d['buton_name'] = "ADD NEW";
        $d['product']=Product::all();
        return view('admin/product/index',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $d['title'] = "Product Add";
        $d['category']=Category::where('parent_id','=',0)->get();

        $attributes = [];
        $attribute=Attribute::all();
        if(count($attribute)>0){
            foreach($attribute as $key => $attr){

                $temp = [

                        'id'    => $attr->id,
                        'name' => $attr->name

                        ];

                $attributeval=AttributeValue::where('attr_id','=',$attr->id)->get();

                if(count($attributeval)>0){

                    $temp['terms'] = $attributeval;

                }

                array_push($attributes,$temp);

            }
        }
        
        $d['attributes']=$attributes;

        return view('admin/product/add',$d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->attrvalid);
        // $validateData = $request->validate([
           
        //     'name' => 'required|min:10|max:10',
        // ]);
        $product = Product::updateOrCreate(['id' => $request->id],
                                        [
                                        'vendor_id'         => Auth::user()->id,
                                        'pname'             => $request->input('productname'),
                                        'cat_id'             => $request->input('catid'),
                                        'attr_id'           => $request->input('attrid'),
                                        'sku_id'            => $request->input('sku'),
                                        'p_price'           => $request->input("purchase"),
                                        's_price'           => $request->input("selling"),
                                        'tax_ammount'       => $request->input('tax'),
                                        'short_description' => $request->input('example-textarea-input'),
                                         'discount_type'    => $request->input("discount_type"),
                                        'discount'          => $request->input('discount'),
                                        'in_stock'          => $request->input('stock'),
                                         'shipping_type'    => $request->input("shipping_type"),
                                        'shipping_charge'    => $request->input("shipping_price"),
                                           'meta_title'         => $request->input('meta_title'),
                                        'meta_keyword'          => $request->input('meta_keyword'),
                                        'meta_description'      => $request->input('meta_description'),
                                     
                                        
                                        ]);

        if($request->hasfile('featured_image'))
        {
            $file = $request->file('featured_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('products/', $filename);
            $product->featured_image = $filename;
        }
        
        $product->update();

        if(!empty($request->attrvalid)){
            foreach ($request->attrvalid as $key => $value) {

                $productAttr = ProductAttribute::updateOrCreate(['product_id'=>$product->id, 'attr_id' => $key], [
                                                                'attr_value_id'=>$value[0],
                                                                ]);
            }


        }


        
    return redirect('/dashboard/product')->with('status', 'your data is updated');
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
        $d['title'] = "Product Edit";
        $d['category']=Category::where('parent_id','=',0)->get();

        $attributes = [];
        $attribute=Attribute::all();
        if(count($attribute)>0){
            foreach($attribute as $key => $attr){

                $temp = [

                    'id'    => $attr->id,
                    'name' => $attr->name

                ];

                $attributeval=AttributeValue::where('attr_id','=',$attr->id)->get();

                if(count($attributeval)>0){

                    $temp['terms'] = $attributeval;

                }

                array_push($attributes,$temp);

            }
        }

        $d['attributes']=$attributes;
        $product=Product::findorfail($id);

        $product_attributes=ProductAttribute::where('product_id',$id)->get();
        if(count($attribute) > 0 ) {
            $product_terms = [];
            foreach ($product_attributes as $key => $vl) {
                $temp = array(
                    'product_id' => $vl->product_id,
                    'attr_id' => $vl->attr_id,
                    'attr_value_id' => $vl->attr_value_id,
                ); 
             //array_push($product_terms, $temp);
                $product_terms[$vl->attr_id] = $temp;
            }

            $d['product_terms'] = $product_terms;
        }

        //dd($d['product_terms']);
      

        //dd($product->product_attr);

        $d['product'] = $product;

        return view('admin/product/add',$d);
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
        
    }

    public function getAtrValue(Request $request){

        $attrval = AttributeValue::where('attr_id','=',$request->attrid)->get();

         return response()->json($attrval);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =Product::where('id',$id)->first();
        if ($product != null) {
            $product->delete();
            return redirect('dashboard/product')->with('success', 'Student deleted successfully');
        }
    
      
   
    }
}
