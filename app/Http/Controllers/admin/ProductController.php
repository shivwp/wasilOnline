<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\ProductAttribute;
use App\Models\ProductVariants;
use App\Models\User;
use App\Models\Tax;
use App\Helper\Helper;
use Auth;
use DB;

class ProductController extends Controller
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
        if(Auth::user()->roles->first()->title == 'Admin'){
          // $d['product']=Product::orderBy('id')->get();
          $d['product'] = Product::leftjoin('categories', 'categories.id', '=', 'products.cat_id')->select('products.*', 'categories.title')->where('products.parent_id','=',0)->get();

          
        }
        elseif(Auth::user()->roles->first()->title == 'Vendor'){

          $d['product']=Product::orderBy('id')->where('products.parent_id','=',0)->where('vendor_id','=',Auth::user()->id)->get();

        }
        else{
          $d['product'] = [];
        }
        //$d['product']=Product::orderBy('id')->get();
         $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $d['product'] =Product::where('parent_id','=',0)->paginate($pagination)->withQueryString();
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
        $d['tax']=Tax::all();
        $d['all_vendors']=User::join('role_user', 'role_user.user_id', '=', 'users.id')->where('role_user.role_id', '=', '3')->get();

        $attributes = [];
        $attribute=Attribute::all();
        $d['attrdata']=Attribute::all();
        if(count($attribute)>0){
            foreach($attribute as $key => $attr){

                $temp = [

                        'id'    => $attr->id,
                        'name' => $attr->name,
                        'slug' => $attr->slug,

                        ];

                $attributeval=AttributeValue::where('attr_id','=',$attr->id)->get();

                if(count($attributeval)>0){

                    $temp['terms'] = $attributeval;

                }

                array_push($attributes,$temp);

            }
        }
        
        $d['attributes']=$attributes;
        //dd($attributes);

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

        $product = Product::updateOrCreate(['id' => $request->id],
          [
            'vendor_id'         => !empty($request->vendorid) ? $request->vendorid :  Auth::user()->id,
            'pname'             => $request->input('productname'),
            'product_type'      => $request->pro_type,
            'cat_id'            => $request->input('catid'),
            'cat_id_2'          => $request->input('catid_2'),
            'cat_id_3'          => $request->input('catid_3'),
            'sku_id'            => $request->input('sku'),
            'p_price'           => $request->input("purchase"),
            's_price'           => $request->input("selling"),
            'commission'        => $request->input("commission"),
            'tax_apply'         => $request->input('tax_apply'),
            ' tax_type'         => $request->input('tax'),
            'short_description' => $request->input('example-textarea-input'),
            'long_description'  => $request->input('content'),
            // 'discount_type'     => $request->input("discount_type"),
            // 'discount'          => $request->input('discount'),
            'in_stock'          => $request->input('stock'),
            'best_saller'               => !empty($request->input('check2')) && ($request->input('check1') == 'on') ? '1' : '0',
            'new'               => !empty($request->input('check2')) && ($request->input('check2') == 'on') ? '1' : '0',
            'featured'               => !empty($request->input('check2')) && ($request->input('check3') == 'on') ? '1' : '0',
            'shipping_type'     => $request->input("shipping_type"),
            'shipping_charge'   => $request->input("shipping_price"),
            'meta_title'        => $request->input('meta_title'),
            'meta_keyword'      => $request->input('meta_keyword'),
            'meta_description'  => $request->input('meta_description'),

          ]);

     

         if($request->hasfile('featured_image'))
          {
            $file = $request->file('featured_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('products/feature', $filename);
            Product::where('id',$product->id)->update([
                'featured_image' => $filename
            ]);
          }

          if($request->hasfile('gallery_image'))
          {
            $file1 = $request->file('gallery_image');
            foreach($file1 as $image)
            {
              $name =$image->getClientOriginalName();
              $destinationPath = 'products/gallery';
              $image->move($destinationPath, $name);
              $gallery_image_name[] =  $name;
                  
            }
          }
    
            $result = [];
            $varimg = json_decode($request->gallery_image1);
           
            if(!empty($gallery_image_name) && !empty($varimg)){
                
              $result = array_merge($gallery_image_name, $varimg);
            }
            else if(!empty($gallery_image_name)) {
             
              $result = $gallery_image_name;
                
            } else {
              $result = $varimg;
            }
             
              Product::where('id','=',$product->id)->update([
                'gallery_image' => json_encode($result)
              ]);

         // dd($result);
        if($request->pro_type == 'single') {
          if($request->input('attrvalid')) { 
            $attributes = $request->input('attrvalid');
           // dd($attributes);
           if(isset($request->id)){
              $already = ProductAttribute::where('product_id',$request->id)->get();
              if(count($already) > 0){
                ProductAttribute::where('product_id',$request->id)->delete();
              }
           }
            foreach ($attributes as $key => $value) {
                foreach($value as $key1 =>  $val_1){
                  $pa = ProductAttribute::create([
                    
                    'product_id'=>$product->id,
                    'attr_id' => $key,
                    'attr_value_id'=>$val_1,
                  ]);
                }
              
            }
          }
        } else {
          // 
          $this->saveVarient($request, $product->id);
        
        }
          
          // $childProducts = Product::where('parent_id', '=', $product->id)->get();
          // if(count($childProducts) > 0) {
          //   foreach ($childProducts as $cp_k => $cp_v) {
          //     # code...
          //     $childProduct = Product::find($cp_v->id);
          //     $childProduct->vendor_id = Auth::user()->id;
          //     $childProduct->pname = $request->input('productname');
          //     $childProduct->product_type = $request->input('pro_type');
          //     $childProduct->cat_id = $request->input('catid');
          //     $childProduct->cat_id_2  = $request->input('catid_2');
          //     $childProduct->cat_id_3     = $request->input('catid_3');
          //     // $childProduct->sku_id=$request->input('sku');
          //     $childProduct->p_price=$request->input("purchase");
          //     $childProduct->commission=$request->input("commission");
          //     $childProduct->tax_apply= $request->input('tax_apply');
          //     $childProduct->tax_type= $request->input('tax');
          //     $childProduct->short_description=$request->input('example-textarea-input');
          //     // $childProduct->discount_type=$request->input("discount_type");
          //     // $childProduct->discount=$request->input('discount');
          //     $childProduct->in_stock=$request->input('stock');
          //     $childProduct->shipping_type= $request->input("shipping_type");
          //     $childProduct->shipping_charge=$request->input("shipping_price");
          //     $childProduct->meta_title= $request->input('meta_title');
          //     $childProduct->meta_keyword=$request->input('meta_keyword');
          //     $childProduct->meta_description=$request->input('meta_description');
          //     $childProduct->save();
          //   }
            // $meta_data = [
            //   'meta_title'         => $request->input('meta_title'),
            //   'meta_keyword'          => $request->input('meta_keyword'),
            //   'meta_description'      => $request->input('meta_description'),
            // ];
  
            // foreach($meta_data as $metakey => $meatval){
            //     DB::table('product_meta')->insert([
            //       'product_id' => $product->id,
            //       'key' => $metakey,
            //       'value' => $meatval,
            //     ]);
  
            // }
            
            // if($request->hasfile('featured_image'))
            // {
            //     $img = $request->file('featured_image');
                
            //     $extention = $img->getClientOriginalExtension();
            //     $filename = time().'.'.$extention;
            //     try {
            //       $img->move('/products/feature', $filename);
            //     } catch(Exception $e) {
            //       echo 'Message: ' .$e->getMessage();
            //       exit;
            //     }
               
            //     // 
            //     $childProduct->featured_image = $filename;
            //     // Product::where('id',$childProduct->id)->update([
            //     //     'featured_image' => $filename
            //     // ]);
            // }

            

          // $temp=[];
          // if($request->hasfile('gallery_image'))
          //   {
          //       $files = $request->file('gallery_image');
          //       foreach($files as $img){
          //         $extentions = $img->getClientOriginalExtension();
          //         $filenames = time().'.'.$extentions;
          //         $img->move('products/gallery', $filenames);
          //         $temp[]=$filenames;

          //       }
               
          //       // Product::where('id',$childProduct->id)->update([
          //       //     'gallery_image' => json_encode($temp)
          //       // ]);
          //       $childProduct->gallery_image = json_encode($temp);
          //   }
            // die('success');
            


  
          // }
        
      return redirect('/dashboard/product')->with('status', 'your data is updated');
    }

    public function createVarient(Request $request)
    {
      # code...
      //$data = $request->except('_token');
      $pid = $request->pid;
      $data = $request->except('pid','_token');

      $variants = array();
      foreach ($data as $key => $value) {
        # code... 
        if($value[0]){
          $variants[$key] = explode(',', $value[0]);
        }
      }
      
      $combinations = $this->get_combinations( $variants );
       //array('Color' => array('A', 'B', 'Z'), 'Size' => array('C', 'D'), 'Shape' => array('E', 'F'),)

      /*
      $variants = $data->all();
      $request->session()->put('variants', $variants);
      */

      $html = '';
      foreach ($combinations as $key => $value) {
        # code...
        $html.='<tr id="variant_row_'.($key+1).'">
                  <!-- <td>'.($key+1).'</td> -->
                  <td>';
        //$nm = '[';
        foreach ($value as $k => $v) {
          # code...
          $variant = DB::table('attributes_value')->where('id', $v)->first(); 
          $html.= '<strong>'.$k.'</strong>:'.$variant->attr_value_name  .',<br>';  
          //$nm .= $v.'][';
        }
        //$nm .= ']';
          $html.='</td>
                  <td><input type="text" class="form-control" required name="variant_sku['.$key.'][]"></td>
                  <td><input type="text" class="form-control" required name="variant_price['.$key.'][]"></td>
                  <td><input type="text" class="form-control" required name="variant_stock['.$key.'][]"></td>
                  <td><input type="file" class="form-control" required name="variant_images['.$key.'][]">
                  <input type="hidden" name="variant_value['.$key.'][]" value=\''.json_encode($value).'\'></td>
                  <td><button class="delete_variant fa fa-trash btn btn-danger btn-sm" data-row="'.($key+1).'"></button></td>';
        $html.='</tr>';
      }
      return response()->json(["success"=>"created.",'variants'=>$variants, 'html' => $html], 201);

    }

    public function get_combinations($arrays) {
        $result = array(array());
        foreach ($arrays as $property => $property_values) {
          $tmp = array();
          foreach ($result as $result_item) {
            foreach ($property_values as $property_value) {
              $tmp[] = array_merge($result_item, array($property => $property_value));
            }
          }
          $result = $tmp;
        }
        return $result;
      }

       // Save Varients
    public function saveVarient($request, $pid)
    { 
      
      $pid = $pid;
      $products = Product::where('parent_id', '=', $pid)->get();
      foreach ($products as $pk => $pv) {
        if ($pv->id != null) {
          //
          DB::table('products_variants')->where('p_id', '=', $pv->id)->delete();
          Product::destroy($pv->id);
        }
      }

      $parent_product = Product::where('id', '=', $pid)->first();

      $variant_sku = $request->variant_sku;
      $variant_price = $request->variant_price;
      $variant_stock = $request->variant_stock;
      $variant = $request->variant_value;
     // DB::enableQueryLog();
      foreach ($variant_sku as $k => $v) {

        // echo $variant_sku[$k][0];
        // echo '<br>';
        // echo $variant_price[$k][0];
       
       
          $product = Product::create([
            'vendor_id'         => $parent_product->vendor_id,
            'product_type'    => $parent_product->product_type,
            'pname'             => $parent_product->pname,
            'cat_id'             => $parent_product->cat_id,
            'cat_id_2'             => $parent_product->cat_id_2,
            'cat_id_3'             => $parent_product->cat_id_3,
            'sku_id'            =>  $variant_sku[$k][0],
            'commission'        => $parent_product->commission,
            'p_price'           => $parent_product->p_price,
            's_price'           => $variant_price[$k][0],
            'tax_apply'       => $parent_product->tax_apply,
            ' tax_type'       => $parent_product->tax,
            'short_description' => $parent_product->short_description,
            'long_description' => $parent_product->content,
            // 'discount_type'    => $parent_product->discount_type,
            // 'discount'          => $parent_product->discount,
            'in_stock'          => $variant_stock[$k][0],
            'shipping_type'    =>$parent_product->shipping_type,
            'shipping_charge'    => $parent_product->shipping_price,
            'meta_title'         => $parent_product->meta_title,
            'meta_keyword'          => $parent_product->meta_keyword,
            'meta_description'      => $parent_product->meta_description,
            'parent_id'             =>$parent_product->id,
          ]);

          // $meta_data = [
          //   'meta_title'         => $parent_product->meta_title,
          //   'meta_keyword'          => $parent_product->meta_keyword,
          //   'meta_description'      => $parent_product->meta_description,
          // ];

          // foreach($meta_data as $metakey => $meatval){
          //   DB::table('product_meta')->insert([
          //     'product_id' => $product->id,
          //     'key' => $metakey,
          //     'value' => $meatval,
          //   ]);

          // }
         

          $thumb=[];
          $i=0;
          if($request->has('variant_images')) {
            //
            $files=$request->file('variant_images')[$k];
              if($files) {
                foreach($files as $file){
                  $name=uniqid().$file->getClientOriginalName();
                  $file->move('products/gallery', $name);
                  $thumb[$i++]=$name;
                }
                $product->gallery_image=$thumb;
                $product->update();
              }
          }

          $variant_values = json_decode($variant[$k][0]);
          $variant_value = [];
          
          $products_variants_id = DB::table('products_variants')->insertGetId([
            'parent_id' => $pid,
            'p_id' => $product->id,
            'variant_id' => $variant[$k][0], //$variant->variant_id,
            'variant_value' => $variant[$k][0], //$variant->id,
            'variant_sku' => $variant_sku[$k][0],
            'variant_price' => $variant_price[$k][0],
            'variant_stock' => $variant_stock[$k][0],
            'variant_images' => '["'.implode(",",$thumb).'"]', //$thumb,
          ]);

          foreach ($variant_values as $key => $value) {
            # code...
            $variant_values = DB::table('attributes_value')->where('id', '=', $value)->first();
            $variant_value[$key] = $variant_values->attr_value_name;

            $pa = ProductAttribute::firstOrNew(
              array(
                'product_id' => $pid, 
                'attr_value_id' => $value,
              )
            );
            $pa->attr_id = $variant_values->attr_id;
            $pa->save();

            // create variations
            DB::table('variations')->insert([
              'product_id' => $product->id,
               'parent_id' => $pid,
              'variant_id' => $products_variants_id,
              'attribute_id' => $variant_values->attr_id, //$variant->variant_id,
              'attribute_term_id' => $value, //$variant->id,
            ]);

          }

        //}
      }
     // dd(DB::getQueryLog());
      // return redirect('adminset-varient/'.$pid)->with('msg',"Product added successfully");
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
        $product = Product::findOrFail($id);
        $d['product'] = $product;
        $d['all_vendors']=User::join('role_user', 'role_user.user_id', '=', 'users.id')->where('role_user.role_id', '=', '3')->get();
        $d['child_product'] = Product::where('parent_id',$id)->get();
        $product_attr = [];
        // dd($product->product_attr);
        foreach($product->product_attr as $val){
          $product_attr[$val->attr_id][] = $val->attr_value_id;
        }
        // dd($product_attr);
        $d['product_attr'] = $product_attr;
        $d['category']=Category::where("parent_id",0)->get();
        $d['subcats']=Category::where('parent_id',$product->cat_id)->get();
        $d['sub_sub_category']=Category::where('parent_id',$product->cat_id_2)->get();
        $d['tax']=Tax::all();
        $d['attrdata']=Attribute::all();

        $prodductVariants = ProductVariants::where('parent_id',$id)->get();

        foreach($prodductVariants as $key => $pval){
        // foreach($prodductVariants as $key => $val){
          $arra = [];
          foreach(json_decode($pval->variant_value) as $key_var => $val_var) {
            // 
            $attrval = AttributeValue::where('id', $val_var)->first();
            $arra[$key_var] = $attrval->attr_value_name;
          }
          $pval['variants'] = $arra;
        }
        
        $d['prodductVariants'] = $prodductVariants;
        // dd( $d['prodductVariants']);

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

    public function getCategory($id)
    {
        if(request()->ajax()){
          $cat=Category::where('parent_id',$id)->get();
          $html = '<option value="0">Select Category</option>';
          if(count($cat) > 0) {
            foreach ($cat as $ck => $cv) {
              # code...
              $html .= '<option value="'.$cv->id.'">'.$cv->title.'</option>';
            }
            $status = true;
          } else {
            $html = '<option value="0">Category not found</option>';
            $status = false;
          }
          
          return response()->json(['d'=>$cat, 'status' => $status, 'html'=>$html]);
        }      
    }

    public function getAtrValue(Request $request){

        $attrval = AttributeValue::where('attr_id','=',$request->attrid)->get();

         return response()->json($attrval);

    }

    public function getAtrValueSelect(Request $request){
      $resultHtml = '';
      foreach($request->attrid as $val ){
        $attr = Attribute::where('id','=',$val)->first();
        $attrval = AttributeValue::where('attr_id','=',$attr->id)->get();
        $html = '<div class="col-md-6">
        <div class="form-group attrs">
          <label class="form-label">'.$attr["name"].'</label>
          <select name="'.$attr['slug'].'[]" class="form-control select2" id="selectattr" multiple="">';
          if(count($attrval) > 0){
            foreach($attrval as $key => $attrv) {
              $html .=  '<option value="'.$attrv->id.'">'.$attrv->attr_value_name.'</option>';
            }
          }
       $html .=  '</select>
        </div>
        </div>';
        $resultHtml .= $html;
      }
      return response()->json($resultHtml);
    }

    public function getAtrValueSingleSelect(Request $request){
      $resultHtml = '';
      foreach($request->attrid as $val ){
          $attr = Attribute::where('id','=',$val)->first();
          $attrval = AttributeValue::where('attr_id','=',$attr->id)->get();
          $html = '<div class="col-md-6">
          <div class="form-group attrs">
            <label class="form-label">'.$attr["name"].'</label>
            <select name="attrvalid['.$attr["id"].'][]" class="form-control select2" id="selectattr" multiple="">';
            if(count($attrval) > 0){
              foreach($attrval as $key => $attrv) {
                $html .=  '<option value="'.$attrv->id.'">'.$attrv->attr_value_name.'</option>';
              }
            }
          $html .=  '</select>
            </div>
          </div>';
          $resultHtml .= $html;

      }
      return response()->json($resultHtml);
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
