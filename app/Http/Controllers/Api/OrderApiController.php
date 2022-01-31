<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Address;
use App\Models\Orderedproduct;
use App\Models\User;


use Auth;
class OrderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $ch=[];
        if(empty($request->shipping_address)){
            return response()->json(['shipping address required'],200); 
        }
        if(empty($request->billing_address)){
        return response()->json(['billing address required'],200); 
        }
        $order = Order::updateOrCreate(['id' => $request->pid],
        [
            'user_id'         => Auth::user()->id,
            'product_id'      => $request->input('product_id'),
            'status'            => 'new',
            // 'status_note'            => $request->input('status_note'),
            'invoice_number'           =>  ' ',
            'total_price'           => $request->input("total_price"),
            'currency_sign'       => $request->input('currency_sign'),
            'giftcard_used_amount' => $request->input('giftcard_used_amount'),
            // 'shipping_address_id'     => $request->input("shipping_address_id"),
            'shipping_type'          => $request->input('shipping_type'),
            'shipping_method'          => $request->input('shipping_method'),
            'shipping_price'     => $request->input("shipping_price"),
            'payment_mode'   => $request->input("payment_mode"),
            'payment_status'        => 'success',
            // 'receipt_amount'      => $request->input('receipt_amount'),
        ]);


            $adrs=new Address;
            $adrs->order_id=$order->id;
            $adrs->first_name=Auth::user()->first_name;
            $adrs->phone= $request->input('phone');
            $adrs->address_type= $request->input('address_type');
            $adrs->address= $request->input('address');
            $adrs->address2= $request->input('address2');
            $adrs->city= $request->input('city');
            $adrs->country= $request->input('country');
            $adrs->state= $request->input('state');
            $adrs->zip_code= $request->input('zip_code');
            $adrs->landmark= $request->input('landmark');
            $adrs->save();
            
        
         $order->update();
        if(!empty($order)){
             return response()->json([ 'status'=> true , 'message' => "Order placed", 'order' => $order], 200);
        }else{
             return response()->json([ 'status'=> false ,'message' => "Order not placed", 'order' => []], 200);
        }
    }

    public function placeOrder(Request $request)
    {
        $shippingCharge=0;
        $idCollection=[];
        $a=0;
        $ct=Carts::where("user_id",$request->user_id)->whereIn('id',$request->cart_id)->get(); 
       // shipping address entry

        $ship_add=new Address;
        $ship_add->first_name=$request->shipping_address["first_name"];
        $ship_add->last_name=$request->shipping_address["last_name"];
        $ship_add->phone=$request->shipping_address["phone"];
        $ship_add->alternate_phone=$request->shipping_address["alternate_phone"];
        $ship_add->address=$request->shipping_address["address"];
        $ship_add->address2=$request->shipping_address["address2"];
        $ship_add->address_type=$request->shipping_address["address_type"];
        $ship_add->city=$request->shipping_address["city"];
        $ship_add->country=$request->shipping_address["country"];
        $ship_add->state=$request->shipping_address["state"];
        $ship_add->pincode=$request->shipping_address["zip_code"];
        $ship_add->landmark=$request->shipping_address["landmark"];

        //billing Address Entry
        $ship_add->billing_name=$request->billing_address["name"];
        $ship_add->billing_phone=$request->billing_address["phone"];
        $ship_add->billing_address_type=$request->billing_address["address_type"];
        $ship_add->billing_address=$request->billing_address["address"];
        $ship_add->billing_address2=$request->billing_address["address2"];
        $ship_add->address_type=$request->shipping_address["address_type"];
        $ship_add->billing_city=$request->billing_address["city"];
        $ship_add->billing_country=$request->billing_address["country"];
        $ship_add->billing_state=$request->billing_address["state"];
        $ship_add->billing_landmark=$request->billing_address["landmark"];
        $ship_add->billing_zip_code=$request->billing_address["zip_code"];
        $ship_add->save();

        // order basic data entry
        $orderData=[];
        $in=Order::latest()->first();
        $order=new Order();
        $order->user_id=$request->user_id;
        $order->shipping_address_id=isset($ship_add->id)?$ship_add->id:'';
       
        $order->currency_sign=$request->currency_sign;
        $order->shipping_type=isset($request->shipping_type)?$request->shipping_type:'e_bolly';  
        // shipping entry
        $order->shipping_method=$request->shipping_method;
        if($request->has('giftcard_code')){
          $checkExisting=GiftCardUser::where('code',$request->giftcard_code)->first();
           if(isset($checkExisting)){
           if($request->totPrice<=$checkExisting->amount){
            $order->total_price=0;
            $order->giftcard_used_amount=number_format($request->totPrice,2);
           }else{
              $payable=$request->totPrice-$checkExisting->amount;
              $order->giftcard_used_amount=number_format($checkExisting->amount,2);
              $order->total_price=number_format($payable,2);
           }
         }else{
            $order->total_price=number_format($request->totPrice,2);
         }
          
        }else{
           $order->total_price=number_format($request->totPrice,2);
        }
        $order->shipping_price=$shippingCharge=number_format($request->shipping_price,2);
        
        if($in){
            $st= preg_replace("/[^0-9\.]/", '', $in->invoice_number);
            $order->invoice_number="EBL".sprintf('%04d', $st+1);
            $order->order_id="EBL".sprintf('%04d', $st+1);
        }else{
            $order->invoice_number='EBL0000';
            $order->order_id="EBL0000";
        }
        if((!empty($request->stripe_token) || $request->stripe_token!="") && (empty($request->payment['payment_gateway']) || $request->payment['payment_gateway']=="")){
         $order->payment_mode="Stripe"; 
         $order->payment_status="Success";
         $order->receipt_amount=$request->totPrice;      
         $order->save();
        }else{
         $order->payment_mode=$request->payment['payment_option']; 
         $order->payment_status=$request->payment['payment_status'];
         $order->receipt_amount=number_format($request->payment['amount_receipt'],2);      
         $order->save();
        }
        $i=0;
        //tax entry
        if(isset($ct)){
        foreach($ct as $item){
            if($item->product_type!="giftcard"){
                  $taxAmount=0;$k=0;
                  if(isset($item->product['tax_type']) && !empty($item->product['tax_type'])){
                  $tax=Tax::whereIn('tax_type',json_decode($item->product['tax_type']))->get();
                  if(isset($tax)){    
                  foreach($tax as $tx){
                   $taxAmount+=(($tx->tax/100)*($item->product['selling_price']*$item->quantity));
                  }
                  }
                  }
            
         // decrease quantity in product and product variant
               if($item->product_variant_id!="" || $item->product_variant_id!=null){
                  $pv=ProductVariation::find($item->product_variant_id);
                  $pv->variation_stock=$pv->variation_stock-$item->quantity;
                  $pv->update();
                  $p=Product::find($item->product_id);
                  $p->stock=$p->stock-$item->quantity;
                  $p->update();
                }
                }}}      
        // checking for variant product
                $pAt=ProductVariation::with(['variantValue','variantValue.attributeV',
                'variantValue.colorName','variantValue.attributeV',
                'variantValue.attributeV.attributeName'])->
                where('id',$item->product_variant_id)->first();
       // ordered product entry 
                $thumbnail=json_decode($item->product['thumbnails'],true);
                $price=isset($pAt) && $pAt->price_type=="vary_price"?$pAt['variation_price']:$item->product['selling_price'];
                $crate=CurrencyExchangeRate::with('currency')->where('id',$item['currency_exchange_id'])->first();
                $crate=$crate->target_rate;
                $orderedP=new OrderedProducts();
                $orderedP->product_id=$item['product_id'];
                $orderedP->product_name=$item->product['pname'];
                $orderedP->product_price=number_format(round($price*$crate),2);
                $orderedP->total_price=number_format(round(($price*$crate)*$item->quantity),2);
                $orderedP->discount=number_format((($item->product['discount']*100)/$item->product['selling_price'])*$crate,2);
                $orderedP->total_saving=number_format(round(($item->product['discount']*$item->quantity)*$crate,2),2);
                $orderedP->thumbnail=$item->product_type=="customized"?url('public/customized-image').
                '/'.$item['customized_image']:url('product/thumbnail').'/'.$thumbnail[0];
                $orderedP->quantity=$item->quantity;
                $orderedP->sku_id=isset($pAt->sku_id)?$pAt->sku_id:$item->product['sku_id'];
                $orderedP->order_id= $order->id;
                $orderedP->p_price=number_format(round(($item->product['p_price']*$item->quantity)*$crate,2),2);
                $orderedP->return_policy=Carbon::now()->addDays($item->product['return_policy']!='None'?$item->product['return_policy']:'0');
                $orderedP->product_type=$item->product_type;
                $orderedP->tax=isset($taxAmount)?number_format(round($taxAmount*$crate,2),2):"";
                $orderedP->color_name=isset($item->colorName['colorname'])?$item->colorName['colorname']:"";
                $orderedP->dimension_unit=$item->product['dimension_unit'];
                $orderedP->weight_unit=$item->product['weight_unit'];
                $orderedP->height=$item->product['height'];
                $orderedP->width=$item->product['width'];
                $orderedP->length=$item->product['length'];
                $orderedP->weight=$item->product['weight'];
                $idCollection[$a++]=$item['product_id'];
                $orderedP->category=$item->product->category['name'];
                //entry for bundle products
                if($item->product_type=="bundle"){
                  $ids=$item->product['bundle_product_ids'];
                  $pro=Product::whereIn('id',json_decode($ids,true))->get();
                  $bundle=[];$bun=0;
                  if(count($pro)>0){
                   foreach($pro as $key => $value){
                     $bundle[$bun++]=['sku_id'=>$value->sku_id,
                    'thumbnail'=>$value->thumbnails,
                    'selling_price'=>number_format(round(($value->selling_price*$crate),2),2)]; 
                    } 
                  }
                $orderedP->bundle_product=json_encode($bundle);
                }
                $orderedP->save();
                // entry for customized product
                if($item->product_type=="customized"){
                    $cusPro=new CustomizedOrderAttribute;
                    $cusPro->ordered_product_id=$orderedP->id;
                    $cusPro->sleeve_style=$item->sleeveName['style_group_name'];
                    $cusPro->bottom_style=$item->bottomName['style_group_name'];
                    $cusPro->neck_style=$item->neckName['style_group_name'];
                    $cusPro->optional_style=$item['optional_style'];
                    $cusPro->sleeve_design_id=$item->sleeveName['design_id'];
                    $cusPro->neck_design_id=$item->neckName['design_id'];
                    $cusPro->bottom_design_id=$item->bottomName['design_id'];
                    $cusPro->save();
                }
                // entry for applied all variation combination on product
                $j=0; $attrCollect=[];
                if(isset($pAt) && $pAt->variantValue){
                foreach($pAt->variantValue as  $value){
                    $opa=new OrderProductAttribute;
                    if($value->variation_type=="attribute"){
                    $attrCollect[$j++]=['name'=>$value->attributeV->attributeName['display_name'],
                    "value"=>$value->attributeV['atrr_value']];
                    $opa->ordered_product_id=$orderedP->id;
                    $opa->attribute_name=$value->attributeV->attributeName['display_name'];
                    $opa->attribute_value=$value->attributeV['atrr_value'];
                    }
                    elseif($value->variation_type=="color"){
                    $opa->ordered_product_id=$orderedP->id;
                    $opa->attribute_name="color";
                    $opa->attribute_value=$value->colorName['colorname'];
                    }
                    $opa->save();
                  }
                }  
            
          
       
       $this->checkStock($request);   
       Carts::where("user_id",$request->user_id)->delete();  
       $user =User::findOrFail($request->user_id);
       $orders=Order::where('user_id',$request->user_id)->where('order_id',$order->order_id)->first();
       $orderItems=Order::find($orders->id)->orderItem;
       $msg=$this->sendEmailToUser($user,$ship_add,$orders,$orderItems,$shippingCharge);
       if($msg['status']==true){
         Mail::to($user->email)->send(new Orders($msg));  
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
    public function destroy($id)
    {
        //
    }

    public function orderHistoryDetail(Request $request){

         $userid = Auth::user()->token()->user_id;
        $order=order::join('ordered_products', 'ordered_products.order_id', '=', 'orders.id' )->join('products','products.id','=','ordered_products.product_id')->join('users', 'users.id', '=', 'products.vendor_id' )->join('categories', 'categories.id', '=', 'products.cat_id' )->where('user_id','=',$userid)->get();
           


        if(!empty($order)){
             return response()->json([ 'status'=> true , 'message' => "Order History Detail", 'order' => $order], 200);
        }else{
             return response()->json([ 'status'=> false ,'message' => "Order not found", 'order' => []], 200);
        }

       
        }
    
}