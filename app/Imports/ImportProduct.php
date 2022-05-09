<?php



namespace App\Imports;



use App\Models\Product;
use App\Models\Category;
use App\Models\User;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\ProductAttribute;
use App\Models\ProductVariants;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;




class ImportProduct implements ToModel, WithStartRow, WithCustomCsvSettings, WithHeadingRow

{

    /**

    * @param array $row

    *

    * @return \Illuminate\Database\Eloquent\Model|null

    */
    use Importable;
     public function toCollection(Collection $collection)
    {
        //
    }
    public function startRow(): int
    {
        return 2;
    }

     public function getCsvSettings(): array
    {
        # Define your custom import settings for only this class
        return [
            'input_encoding' => 'UTF-8'
        ];
    }

   public function model(array $row)

    {

        
       // dd($row);

        //vendor
        $vendor = User::where('email',$row['vendor_id'])->first();
        $vendorid = $vendor->id;

        //category 
        $cat1 = Category::where('slug',$row['cat_id'])->first();
        $cat1id = $cat1->id;

        $cat2 = Category::where('slug',$row['cat_id_2'])->first();
        $cat2id = $cat2->id;

        $cat3 = Category::where('slug',$row['cat_id_3'])->first();
        $cat3id = $cat3->id;


        $Product =  new Product([

            //

                        'vendor_id'    => $vendorid,
                        'cat_id'    => $cat1id,
                        'cat_id_2' => $cat2id,
                        'cat_id_3' => $cat3id,
                        'brand_slug' => !empty($row['brand_slug']) ? $row['brand_slug'] : '',
                        'pname' => !empty($row['pname']) ? $row['pname'] : '',

                        'arab_pname' => !empty($row['arab_pname']) ? $row['arab_pname'] : '',
                        'product_type' => !empty($row['product_type']) ? $row['product_type'] : '',
                        'sku_id' => !empty($row['sku_id']) ? $row['sku_id'] : '',
                         'p_price' => !empty($row['p_price']) ? $row['p_price'] : '',

                        's_price' => !empty($row['s_price']) ? $row['s_price'] : '',
                        'commission' => !empty($row['commission']) ? $row['commission'] : '',
                        'new' => !empty($row['new']) ? $row['new'] : '',
                        'best_saller' => !empty($row['best_saller']) ? $row['best_saller'] : '',
                        'featured' => !empty($row['featured']) ? $row['featured'] : '',
                        'tax_apply' => !empty($row['tax_apply']) ? $row['tax_apply'] : '',
                        'tax_type' => !empty($row['tax_type']) ? $row['tax_type'] : '',

                       
                     
                        'short_description' => !empty($row['short_description']) ? $row['short_description'] : '',
                        'arab_short_description' => !empty($row['arab_short_description']) ? $row['arab_short_description'] : '',
                        'long_description' => !empty($row['long_description']) ? $row['long_description'] : '',
                        'arab_long_description' => !empty($row['arab_long_description']) ? $row['arab_long_description'] : '',

                       
                        'featured_image' => !empty($row['featured_image']) ? $row['featured_image'] : '',
                        'gallery_image' => !empty($row['gallery_image']) ? $row['gallery_image'] : '',
                        'in_stock' => !empty($row['in_stock']) ? $row['in_stock'] : '',
                        'shipping_type' => !empty($row['shipping_type']) ? $row['shipping_type'] : '',
                        'shipping_charge' => !empty($row['shipping_charge']) ? $row['shipping_charge'] : '',
                        'avg_rating' => !empty($row['avg_rating']) ? $row['avg_rating'] : '',
                        'meta_title' => !empty($row['meta_title']) ? $row['meta_title'] : '',
                        'meta_keyword' => !empty($row['meta_keyword']) ? $row['meta_keyword'] : '',
                        'meta_description' => !empty($row['meta_description']) ? $row['meta_description'] : '',
                        'offer_start_date' =>!empty($row['offer_start_date']) ? $row['offer_start_date'] : '',
                        'offer_end_date' => !empty($row['offer_end_date']) ? $row['offer_end_date'] : '',
                        'offer_discount' => !empty($row['offer_discount']) ? $row['offer_discount'] : '',
                        'top_hunderd' => !empty($row['top_hunderd']) ? $row['top_hunderd'] : '',
                        'return_days' => !empty($row['return_days']) ? $row['return_days'] : '',  
                        'is_publish' => !empty($row['is_publish']) ? $row['is_publish'] : '',
                        'in_offer' => !empty($row['in_offer']) ? $row['in_offer'] : '',

        ]);

        $Product->save();

        if(!empty($row['attribute_colour']) && !empty($row['attribute_size'])){

            if(!empty($row['product_type']) && ($row['product_type'] == "single")){

                 //  Break array
                 $attr_array = array_slice($row, 41);

                 foreach($attr_array as $key => $value){

                        if(!empty($value)){

                           $new_key = explode("attribute_",$key);
                           $new_key = $new_key[1];


                           $new_value = explode(",",$value);

                           $attribute = Attribute::where('slug',$new_key)->first();
                           $attrval = AttributeValue::where('attr_id',$attribute->id)->whereIn('slug',$new_value)->get();

                              foreach($attrval as $productattr){
                                   $productAttr = ProductAttribute::create([
                                        'product_id'=>$Product->id,
                                        'attr_id' => $attribute->id,
                                        'attr_value_id'=>$productattr->id,
                                    ]);
                              }



                        }

                 }

            }

            else{

                 $attr_array = array_slice($row, 41);
                 $attributes = Attribute::all();
                 $attr_array_new = array();
                 foreach($attributes as $key => $value){
                    if(isset($attr_array['attribute_'.$value->slug])){
                        $attr_array_new[$value->slug] = explode(",",$attr_array['attribute_'.$value->slug]);
                    }

                    // foreach($attr_array_new as  $arr_new){
                           
                    // }
                 }

                  $attr_new_ty = array();
                 foreach($attr_array_new as $attr_name => $attr_val){
                   // $attr_new_ty[]
                    foreach($attr_val as $val){
                        $AttributeValue = AttributeValue::where('slug',$val)->first();
                        $attr_new_ty[$attr_name][] = $AttributeValue->id;
                    }
                    

                 }
                 // dd($attr_new_ty);
                 $result = array(array());

                foreach ($attr_new_ty as $property => $property_values) {

                  $tmp = array();

                  foreach ($result as $result_item) {

                      foreach ($property_values as $property_value) {

                        $tmp[] = array_merge($result_item, array($property => $property_value));

                      }

                  }

                $result = $tmp;

            }
                  //dd($result);


                foreach($result as $key => $value){

                    $ChildProduct =  new Product([

                            'vendor_id'    => $vendorid,
                            'cat_id'    => $cat1id,
                            'cat_id_2' => $cat2id,
                            'cat_id_3' => $cat3id,
                            'brand_slug' => !empty($row['brand_slug']) ? $row['brand_slug'] : '',
                            'pname' => !empty($row['pname']) ? $row['pname'] : '',

                            'arab_pname' => !empty($row['arab_pname']) ? $row['arab_pname'] : '',
                            'product_type' => !empty($row['product_type']) ? $row['product_type'] : '',
                            'sku_id' => !empty($row['sku_id']) ? $row['sku_id'] : '',
                             'p_price' => !empty($row['p_price']) ? $row['p_price'] : '',

                            's_price' => !empty($row['s_price']) ? $row['s_price'] : '',
                            'commission' => !empty($row['commission']) ? $row['commission'] : '',
                            'new' => !empty($row['new']) ? $row['new'] : '',
                            'best_saller' => !empty($row['best_saller']) ? $row['best_saller'] : '',
                            'featured' => !empty($row['featured']) ? $row['featured'] : '',
                            'tax_apply' => !empty($row['tax_apply']) ? $row['tax_apply'] : '',
                            'tax_type' => !empty($row['tax_type']) ? $row['tax_type'] : '',

                           
                         
                            'short_description' => !empty($row['short_description']) ? $row['short_description'] : '',
                            'arab_short_description' => !empty($row['arab_short_description']) ? $row['arab_short_description'] : '',
                            'long_description' => !empty($row['long_description']) ? $row['long_description'] : '',
                            'arab_long_description' => !empty($row['arab_long_description']) ? $row['arab_long_description'] : '',

                           
                            'featured_image' => !empty($row['featured_image']) ? $row['featured_image'] : '',
                            'gallery_image' => !empty($row['gallery_image']) ? $row['gallery_image'] : '',
                            'in_stock' => !empty($row['in_stock']) ? $row['in_stock'] : '',
                            'shipping_type' => !empty($row['shipping_type']) ? $row['shipping_type'] : '',
                            'shipping_charge' => !empty($row['shipping_charge']) ? $row['shipping_charge'] : '',
                            'avg_rating' => !empty($row['avg_rating']) ? $row['avg_rating'] : '',
                            'meta_title' => !empty($row['meta_title']) ? $row['meta_title'] : '',
                            'meta_keyword' => !empty($row['meta_keyword']) ? $row['meta_keyword'] : '',
                            'meta_description' => !empty($row['meta_description']) ? $row['meta_description'] : '',
                            'offer_start_date' =>!empty($row['offer_start_date']) ? $row['offer_start_date'] : '',
                            'offer_end_date' => !empty($row['offer_end_date']) ? $row['offer_end_date'] : '',
                            'offer_discount' => !empty($row['offer_discount']) ? $row['offer_discount'] : '',
                            'top_hunderd' => !empty($row['top_hunderd']) ? $row['top_hunderd'] : '',
                            'return_days' => !empty($row['return_days']) ? $row['return_days'] : '',  
                            'is_publish' => !empty($row['is_publish']) ? $row['is_publish'] : '',
                            'in_offer' => !empty($row['in_offer']) ? $row['in_offer'] : '',
                             'parent_id' => $Product->id,

                    ]);

                     $ChildProduct->save();

                    //dd(json_encode($value));

                      $updateVariants = [
                            'parent_id' => $Product->id,
                            'p_id' => $ChildProduct->id,

                            'variant_id' => json_encode($value),

                            'variant_value' => json_encode($value), //$variant->id,
                            'variant_sku' => !empty($row['sku_id']) ? $row['sku_id'] : '',

                            'variant_price' => !empty($row['s_price']) ? $row['s_price'] : '',
                            'variant_stock' => !empty($row['in_stock']) ? $row['in_stock'] : '',

                        ];

              $products_variants_id = DB::table('products_variants')->insertGetId($updateVariants);

                foreach($value as $v_k => $v_val){

                    $getatrid = Attribute::where('slug',$v_k)->first();

                      DB::table('variations')->insert([
                      'product_id' => $ChildProduct->id,
                       'parent_id' => $Product->id,
                        'variant_id' => $products_variants_id,
                      'attribute_id' => $getatrid->id, //$variant->variant_id,
                      'attribute_term_id' => $v_val, //$variant->id,
                    ]);

                }
                  
                  





                    
                }

                


                


            }


        }

         return $Product;


           
        

    }

}

