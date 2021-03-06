<?php
namespace App\Http\Controllers\admin;
use Image;
use App\Http\Controllers\Controller;
use Intervention\Image\Exception\NotReadableException;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\ProductAttribute;
use App\Models\ProductVariants;
use App\Models\User;
use App\Models\Brand;
use App\Models\VendorSetting;
use App\Models\ShippingMethod;
use App\Models\ShippingProduct;
use App\Models\VendorShipping;
use App\Models\Tax;
use App\Helper\Helper;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportProduct;
use App\Exports\ExportProduct;
use App\Models\ProductBid;
use App\Models\UserBids;
use Auth;
use DB;
class ProductController extends Controller
{
  
  public function index(Request $request)
  { 

      $d['title'] = "PRODUCT";
      $d['buton_name'] = "ADD NEW";
      if(Auth::user()->roles->first()->title == 'Admin'){
        $product = Product::orderBy('id','DESC')->leftjoin('categories', 'categories.id', '=', 'products.cat_id')->select('products.*', 'categories.title')->where('products.parent_id','=',0);
      }
      elseif(Auth::user()->roles->first()->title == 'Vendor'){
        $product=Product::orderBy('id','DESC')->leftjoin('categories', 'categories.id', '=', 'products.cat_id')->select('products.*', 'categories.title')->where('products.parent_id','=',0)->where('vendor_id','=',Auth::user()->id);
      }
      else{
        $product = [];
      }
      $pagination=10;
      if(isset($_GET['paginate'])){
          $pagination=$_GET['paginate'];
      }
        //$q=Product::select('*');
        if($request->search){
            $product->where('pname', 'like', "%$request->search%");  
        }
         $d['product']=$product->paginate($pagination)->withQueryString();

      return view('admin/product/index',$d);

  }

    public function create()
    { 
      
        $d['title'] = "Product Add";
        $d['category']=Category::where('parent_id','=',0)->get();
        $d['tax']=Tax::all();
        $d['brand']=Brand::all();
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
        $d['shipping_method'] =  ShippingMethod::all();

        //shipping avalibality admin

        $d['ship_meth_1'] = ShippingMethod::where('id',1)->first();
        $d['ship_meth_2'] = ShippingMethod::where('id',2)->first();
        $d['ship_meth_3'] = ShippingMethod::where('id',3)->first();


          //shipping vendor
          $vender_id = Auth::user()->id;
          $d['checkvendorshiipingmethod1'] = VendorShipping::where('shipping_method_id',1)->where('vendor_id',$vender_id)->first();
          $d['checkvendorshiipingmethod2'] = VendorShipping::where('shipping_method_id',2)->where('vendor_id',$vender_id)->first();
          $d['checkvendorshiipingmethod3'] = VendorShipping::where('shipping_method_id',3)->where('vendor_id',$vender_id)->first();

     
        return view('admin/product/add',$d);
    }

    public function store(Request $request)
    {
      //product Aprroval
      // dd($request->auction);
      $publish = 0;
      $Setting = Setting::where('id', 100)->first();
      if(!empty($Setting) && $Setting->value == "on"){
      $publish = 1;
      }
      else{
        //Auth::user()->roles->first()->title == 'Admin'
        $vendor = User::where('id',$request->vendor_id)->first();
        if(!empty($vendor) && ($vendor->is_approved == 1)){
          $vendorsettings = VendorSetting::where('name','product_publish')->where('vendor_id',$request->vendor_id)->first();
          if(!empty($vendorsettings) && $vendorsettings->value == 1){
            $publish = 1;
          }
        }
       
      }

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

            'tax_type'         => $request->input('tax'),

            'return_days'         => $request->input('return_days'),

            'short_description' => $request->input('example-textarea-input'),

            'long_description'  => $request->input('content'),

            'offer_start_date'    => $request->discount_start,

            'offer_end_date'          => $request->discount_end,

            'offer_discount'          => $request->offer_discount,

            'in_stock'          => $request->input('stock'),

            'best_saller'               => !empty($request->input('check2')) && ($request->input('check1') == 'on') ? '1' : '0',

            'new'               => !empty($request->input('check2')) && ($request->input('check2') == 'on') ? '1' : '0',

            'featured'               => !empty($request->input('check2')) && ($request->input('check3') == 'on') ? '1' : '0',

            'top_hunderd'               => !empty($request->input('top_hundred')) && ($request->input('top_hundred') == 'on') ? '1' : '0',

            'shipping_type'     => $request->input("shipping_type"),

            'shipping_charge'   => $request->input("shipping_price"),

            'meta_title'        => $request->input('meta_title'),

            'meta_keyword'      => $request->input('meta_keyword'),

            'meta_description'  => $request->input('meta_description'),

             'best_saller'       => !empty($request->input('best_saller')) && ($request->input('best_saller') == 'on') ? '1' : '0',



            'new'               => !empty($request->input('new')) && ($request->input('new') == 'on') ? '1' : '0',



            'featured'          => !empty($request->input('featured')) && ($request->input('featured') == 'on') ? '1' : '0',

            'arab_pname'          => $request->input('arab_pname'),
            'arab_short_description'          => $request->input('arab_short_description'),
            'arab_long_description'          => $request->input('arab_long_description'),
            'is_publish'          => $publish,
            'brand_slug'          => $request->brand,
            'in_offer'            => !empty($request->input('offer_product')) && ($request->input('offer_product') == 'on') ? '1' : '0',     
            'for_auction'            => !empty($request->input('auction')) && ($request->input('auction') == "on") ? "on" : "off" 
          ]);

        if($request->input('auction') == 'on'){

          $ProductBid = ProductBid::updateOrCreate(['id' => $request->bidId],[
            'product_id'    => $product->id,
            'start_date'    => $request->bid_start_date,
            'end_date'      => $request->bid_end_date,
            'start_time'      => $request->bid_start_time,
            'end_time'      => $request->bid_end_time,
            'min_bid_price' =>$request->min_price,
            'step_price'    =>$request->step_price,
            'auto_allot'    =>!empty($request->input('auto_allot')) && ($request->input('auto_allot') == "on") ? "1" : "0"

          ]);

        }

         if($request->hasfile('featured_image'))

          {

            $file = $request->file('featured_image');

            $file = $request->file('featured_image');

            $input['imagename'] = time().'.'.$file->getClientOriginalExtension();

            $destinationPath = 'products/feature';

            $img = Image::make($file->getRealPath());

            $img->resize(600, 540, function ($constraint) {

                $constraint->aspectRatio();

            })->save($destinationPath.'/'.$input['imagename']);

            Product::where('id',$product->id)->update([

                'featured_image' => $input['imagename']

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



        if($request->pro_type == 'single') {

          if($request->input('attrvalid')) { 

            $attributes = $request->input('attrvalid');

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

        } 

        elseif($request->pro_type == 'variants'){

          $this->saveVarient($request, $product->id);

        }

        // logs

        if(Auth::user()->roles->first()->title == 'Vendor'){

          $type='Product';

          \Helper::addToLog('Product Created or Updated', $type);

        }  

          //Product side shipping method availability

          if(isset($request->free) && $request->free="on"){

            ShippingProduct::updateOrCreate(['product_id' => $product->id,'shipping_method_id'=>1],[

                'shipping_method_id' => 1,

                'product_id' => $product->id,

                'min_order_free' => !empty($request->order_limit) ? $request->order_limit : 0,

                'ship_price'=> 0,

                'is_available' => 1

            ]);

        }

        else{

          ShippingProduct::where('product_id',$product->id)->where('shipping_method_id',1)->delete();  

        }

        if(isset($request->fixed) && $request->fixed="on"){

          ShippingProduct::updateOrCreate(['product_id' => $product->id,'shipping_method_id'=>2],[

                'shipping_method_id' => 2,

                'product_id' => $product->id,

                'min_order_free' => 0,

                'ship_price'=> !empty($request->shipping_price) ? $request->shipping_price : 0,

                'is_available' => 1

            ]);

        }

        else{

          ShippingProduct::where('product_id',$product->id)->where('shipping_method_id',2)->delete();   

        }

        if(isset($request->wasil) && $request->wasil="on"){

          ShippingProduct::updateOrCreate(['product_id' => $product->id,'shipping_method_id'=>3],[

                'shipping_method_id' => 3,

                'product_id' => $product->id,

                'min_order_free' => 0,

                'ship_price'=> 0,

                'is_available' => 1

            ]);

        }

        else{

          ShippingProduct::where('product_id',$product->id)->where('shipping_method_id',3)->delete();  

        }

      return redirect('/dashboard/product')->with('status', 'your data is updated');



    }

    public function createVarient(Request $request)
    {
      $pid = $request->pid;
      $data = $request->except('pid','_token');
      $variants = array();
      foreach ($data as $key => $value) {
        if($value[0]){
          $variants[$key] = explode(',', $value[0]);
        }
      }
      $combinations = $this->get_combinations( $variants );
      $html = '';

      foreach ($combinations as $key => $value) {
        $html.='<tr id="variant_row_'.($key+1).'">
                  <!-- <td>'.($key+1).'</td> -->
                  <td>';

        foreach ($value as $k => $v) {

          $variant = DB::table('attributes_value')->where('id', $v)->first(); 
          $html.= '<strong>'.$k.'</strong>:'.$variant->attr_value_name  .',<br>'; 
        }
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

    public function saveVarient($request, $pid)
    { 

      $pid = $pid;
      $products = Product::where('parent_id', '=', $pid)->get();
      foreach ($products as $pk => $pv) {
        if ($pv->id != null) {
          DB::table('products_variants')->where('p_id', '=', $pv->id)->delete();
          Product::destroy($pv->id);
        }
      }
      $parent_product = Product::where('id', '=', $pid)->first();
      $variant_sku = $request->variant_sku;
      $variant_price = $request->variant_price;
      $variant_stock = $request->variant_stock;
      $variant = $request->variant_value;
      foreach ($variant_sku as $k => $v) {
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
            'tax_type'       => $parent_product->tax,
            'short_description' => $parent_product->short_description,
            'long_description' => $parent_product->content,
            'offer_start_date'    => $parent_product->discount_start,
            'offer_end_date'          => $parent_product->discount_end,
            'offer_discount'          => $parent_product->offer_discount,
            'in_stock'          => $variant_stock[$k][0],
            'shipping_type'    =>$parent_product->shipping_type,
            'shipping_charge'    => $parent_product->shipping_price,
            'meta_title'         => $parent_product->meta_title,
            'meta_keyword'          => $parent_product->meta_keyword,
            'meta_description'      => $parent_product->meta_description,
            'parent_id'             =>$parent_product->id,
            'arab_pname'          => $parent_product->arab_pname,
            'arab_short_description'          => $parent_product->arab_short_description, 
            'arab_long_description'          => $parent_product->arab_long_description

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



          $updateVariants = [



            'parent_id' => $pid,



            'p_id' => $product->id,



            'variant_id' => $variant[$k][0], //$variant->variant_id,



            'variant_value' => $variant[$k][0], //$variant->id,



            'variant_sku' => $variant_sku[$k][0],



            'variant_price' => $variant_price[$k][0],



            'variant_stock' => $variant_stock[$k][0],



            //'variant_images' => '["'.implode(",",$thumb).'"]', //$thumb,



          ];



          // dd($request->file('variant_images')[0]);







          if(isset($request->file('variant_images')[$k]) && $request->file('variant_images')[$k]) {



            //



            $files = $request->file('variant_images')[$k];



              if(isset($files)) {



                foreach($files as $file){



                  $name=uniqid().$file->getClientOriginalName();



                  $file->move('products/gallery', $name);



                  $thumb[$i++]=$name;



                }



                $product->gallery_image=$thumb;



                $product->update();







                $updateVariants['variant_images'] = '["'.implode(",",$thumb).'"]';



              }



              



          }



          else{







            $prv_img = $request->prv_img[$k];







            $updateVariants['variant_images'] = implode(',', $prv_img);







          }



          // dd($updateVariants);







          $variant_values = json_decode($variant[$k][0]);



          $variant_value = [];



          



          $products_variants_id = DB::table('products_variants')->insertGetId($updateVariants);







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
    } 

    public function show($id)
    {
    }


    public function edit($id)
    {
        $d['title'] = "Product Edit";
        $product = Product::findOrFail($id);
        $d['brand']=Brand::all();
        $d['product'] = $product;
        $d['all_vendors']=User::join('role_user', 'role_user.user_id', '=', 'users.id')->where('role_user.role_id', '=', '3')->get();
        $d['child_product'] = Product::where('parent_id',$id)->get();
        $d['product_bid'] = ProductBid::where('product_id',$id)->first();
        $product_attr = [];

        foreach($product->product_attr as $val){
          $product_attr[$val->attr_id][] = $val->attr_value_id;
        }

        $d['product_attr'] = $product_attr;
        $d['category']=Category::where("parent_id",0)->get();
        $d['subcats']=Category::where('parent_id',$product->cat_id)->get();
        $d['sub_sub_category']=Category::where('parent_id',$product->cat_id_2)->get();
        $d['tax']=Tax::all();
        $d['attrdata']=Attribute::all();
        $prodductVariants = ProductVariants::where('parent_id',$id)->get();

        foreach($prodductVariants as $key => $pval){
          $arra = [];
          foreach(json_decode($pval->variant_value) as $key_var => $val_var) {
            $attrval = AttributeValue::where('id', $val_var)->first();
            $arra[$key_var] = $attrval->attr_value_name;
          }
          $pval['variants'] = $arra;
        }
        $d['prodductVariants'] = $prodductVariants;
        $d['shipping_method'] =  ShippingMethod::all();
        
        //shipping avalibality admin
        $d['ship_meth_1'] = ShippingMethod::where('id',1)->first();
        $d['ship_meth_2'] = ShippingMethod::where('id',2)->first();
        $d['ship_meth_3'] = ShippingMethod::where('id',3)->first();

        //shipping vendor
        $data['checkvendorshiipingmethod1'] = VendorShipping::where('shipping_method_id',1)->where('vendor_id',$product->vender_id)->first();
        $data['checkvendorshiipingmethod2'] = VendorShipping::where('shipping_method_id',2)->where('vendor_id',$product->vender_id)->first();
        $data['checkvendorshiipingmethod3'] = VendorShipping::where('shipping_method_id',3)->where('vendor_id',$product->vender_id)->first();

         // product biddings
          $bids =UserBids::where('product_id',$id)->get();

          foreach($bids as $bid_key => $bid_val){

            $user = User::where('id',$bid_val->user_id)->first();
            $product = Product::where('id',$bid_val->product_id)->first();
            $bids[$bid_key]['user'] = !empty($user->name) ? $user->name : '';
            $bids[$bid_key]['product'] = !empty($product->pname) ? $product->pname : '';

          }
          $d['bids'] = $bids;


        return view('admin/product/add',$d);
    }



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

    public function productapprove($id){

      $vendor = Product::where('id',$id)->update([

        'is_publish' => 1

    ]);
  
    // $mail_data = Mails::where('msg_category', 'vendor approve')->first();
    // $msg = $mail_data->message;
    // foreach($basicinfo as $key=> $info){
    //     $msg = str_replace($key,$info,$msg);
    // }

    // $config = ['from_email' => $mail_data->mail_from,
    // "reply_email" => $mail_data->reply_email,
    // 'subject' => $mail_data->subject, 
    // 'name' => $mail_data->name,
    // 'message' => $msg,
    // ];

    // Mail::to($vendor->email)->send(new OrderMail($config));
    return redirect('/dashboard/product')->with('status', 'Product Approved');


    }
    public function rejectapprove($id){
      
    }


    public function importView(Request $request){
      return redirect('/dashboard/product');
    }

    public function importproduct(Request $request){
      $fileName = time().'_'.request()->importfile->getClientOriginalName();
        Excel::import(new ImportProduct, $request->file('importfile')->storeAs('product-csv', $fileName));
        return redirect()->back();
    }

    public function exportProduct(Request $request){
      return Excel::download(new ExportProduct, 'product.xlsx');
    }



  public function destroy($id)
      {
          $product =Product::where('id',$id)->first();
          if ($product != null) {

              $product->delete();
              ProductAttribute::where('product_id',$id)->delete();
              ProductVariants::where('parent_id',$id)->delete();
              DB::table('variations')->where('parent_id',$id)->delete();
              return redirect('dashboard/product');
          }
        if(Auth::user()->roles->first()->title == 'Vendor'){
          $type='Product';
        \Helper::addToLog('Product Deleted', $type);

        }  


      }

}



