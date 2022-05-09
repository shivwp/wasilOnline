<?php

namespace App\Exports;

use App\Models\Order;
use App\Models\OrderMeta;
use App\Models\OrderedProducts;
use App\Models\ProductAttribute;
use App\Models\User;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\OrderShipping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportOrder implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $OrderedProducts = OrderedProducts::select('order_id','product_id','vendor_id','product_name','category','product_type','quantity','product_price','discount','total_price as tot_price','tax','status')->limit('3')->orderBy('id','DESC')->get();


        foreach($OrderedProducts as $key => $val){

            $vendor = User::where('id',$val->vendor_id)->first();
              $val->vendor_id = $vendor->name;
            $orderMata          = OrderMeta::where('order_id',$val->order_id)->pluck('meta_value','meta_key');
            if(isset($orderMata['shipping_address'])){
                unset($orderMata['shipping_address']);
            }
            if(isset($orderMata['shipping'])){
                unset($orderMata['shipping']);
            }
            if(isset($orderMata['billing_address'])){
                unset($orderMata['billing_address']);
            }
            if(isset($orderMata['gift_card_data'])){
                unset($orderMata['gift_card_data']);
            }
           
            if(isset($orderMata['currency_sign'])){
                unset($orderMata['currency_sign']);
            }
            //dd($orderMata);

            foreach($orderMata as $key1 => $val1){

                 $OrderedProducts[$key][$key1] = $val1;

             }

             $OrderShipping = OrderShipping::where('order_id',$val->order_id)->pluck('shipping_title');
             if(!empty($OrderShipping)){
                  $OrderedProducts[$key]['ship'] = $OrderShipping;
             }
             else{
                 $OrderedProducts[$key]['ship'] = "";
             }

            $ProductAttribute = ProductAttribute::where('product_id',$val->product_id)->get();

            if(!empty($ProductAttribute) || count($ProductAttribute) > 0){
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

            }



        }
        //dd($OrderedProducts);


        return $OrderedProducts;
      
    }


    public function headings(): array
    {
        $header =  ["OrderNo","product_id","vendor name","product name","category","product_type","quantity","product_price","discount","total_price","tax","status","billing_first_name","billing_last_name","billing_phone","billing_alternate_phone","billing_address","billing_address_type","billing_city","billing_country","billing_state","billing_zip_code","billing_landmark","subtotal_price","total_price","gift_card_amount","shipping_price","shipping_first_name","shipping_last_name","shipping_phone","shipping_alternate_phone","shipping_address","shipping_address_type","shipping_city","shipping_country","shipping_state","shipping_zip_code","shipping_landmark","refund_amount_in","shipping method"];

        $attr = Attribute::all();
        foreach($attr as $val){
            $newattr = 'attribute_'.$val->slug;

            array_push($header,$newattr);
        }

         
        return $header;
    }
}
