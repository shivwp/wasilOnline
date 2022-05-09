<?php



namespace App\Exports;



use App\Models\Product;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\ProductAttribute;
use App\Models\User;
use App\Models\Category;
use App\Models\ProductVariants;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\FromCollection;



class ExportProduct implements FromCollection, WithHeadings

{

    /**

    * @return \Illuminate\Support\Collection

    */

    public function collection()

    {

        //return Product::all();

        $head = $this->headings();

        $Product =  Product::orderBy('id', 'DESC')->where([['product_type','!=','giftcard'],['product_type','!=','card']])->where('parent_id',0)->limit(5)->get();

        foreach($Product as $key => $value){

           

             $attr = [];

             //vendor

             $vendor = User::where('id',$value->vendor_id)->first();

             $value->vendor_id = $vendor->email;


             //cateory 

             $Category = Category::where('id',$value->cat_id)->first();
             $SubCategory = Category::where('id',$value->cat_id)->first();
             $SubSubCategory = Category::where('id',$value->cat_id)->first();

             $value->cat_id = !empty($Category->title) ? $Category->title : "";
             $value->cat_id_2 =  !empty($SubCategory->title) ? $SubCategory->title : ""; 
             $value->cat_id_3 = !empty($SubSubCategory->title) ? $SubSubCategory->title : "";


             $ProductAttribute = ProductAttribute::where('product_id',$value->id)->get();

             // dd($ProductAttribute);

          foreach($ProductAttribute as $key1 => $val1){

                $attribute = Attribute::where('id',$val1->attr_id)->first();

                $attrval = AttributeValue::where('id',$val1->attr_value_id)->first();

                $attr['attribute_'.$attribute->slug][] =  $attrval->slug;

          }


           $attrss = Attribute::all();
            foreach($attrss as $val){
                $newattr = 'attribute_'.$val->slug;
                //dd($attr->);
                if(isset($attr['attribute_'.$val->slug])){
                   $attrs = implode(",",$attr['attribute_'.$val->slug]); 
                }
                else{
                 $attrs = '';   
                }
                
                $Product[$key][$newattr] = $attrs;

            }

            // foreach($attr as $datakey => $data){

            //     dd($datakey);

            //     $attrs = implode(",",$data);

            //     $Product[$key][$datakey] = $attrs;


            // }
             unset($value->id);


        }

        // dd($Product);

           return $Product;

    }

    public function headings(): array
    {
        $header =  ["vendor_id", "cat_id", "cat_id_2","cat_id_3","brand_slug", "slug", "pname","arab_pname","product_type","sku_id","p_price","s_price","commission","new","best_saller","featured","tax_apply","tax_type","short_description","arab_short_description","long_description","arab_long_description","featured_image","gallery_image","in_stock","shipping_type","shipping_charge","avg_rating","meta_title","meta_keyword","meta_description","parent_id","created_at","updated_at","offer_start_date","offer_end_date","offer_discount","top_hunderd","return_days","is_publish","in_offer"];

         $attr = Attribute::all();
        foreach($attr as $val){
            $newattr = 'attribute_'.$val->slug;

            array_push($header,$newattr);
        }
        return $header;
    }

}

