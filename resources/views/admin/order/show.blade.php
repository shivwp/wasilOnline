@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet">
@endsection
@section('page-header')

    <!-- PAGE-HEADER -->
        <div>
            <h1 class="page-title">{{$title}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.order.index') }}">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Details</li>
            </ol>
        </div>
    <!-- PAGE-HEADER END -->
@endsection

@section('content')
<div class="card">
<div class="card-body">
<div class="content-wrapper">
 
  <section class="content-header">
     <div class="container-fluid">
        <form method="POST" action="{{ route('dashboard.order.update',$order->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
            <div class="row">
                <div class="col-12">
                    <div class="invoice p-3 mb-3">
                        @php
                            $date = date("d F Y", strtotime($order->created_at));
                            // $amount = ($order->product_price) * ($order->quantity);
                            // $t_amount = $amount+($order->shipping_price);
                        
                        @endphp
                        <div class="row">
                            <div class="col-12">
                                <h2>
                                    Order #0{{$order->id}} Details
                                    <small class="float-right">Date:{{$date}}</small>
                                </h2>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col edit_billing1">
                                <h3><strong>Billing Details </strong> <a class="ml-3 btn btn-sm btn-info text-center btn-outline-info edit_billing"><i class="ti-pencil-alt"></i> Edit</a> </h3>
                                    
                                        First Name : {{ $order->billing_first_name ?? '' }}<br>
                                        Last Name : {{ $order->billing_last_name ?? '' }}<br>
                                        Phone : {{ $order->billing_phone ?? '' }}<br>
                                        City : {{ $order->billing_city ?? '' }}<br>
                                        Address : {{ $order->billing_address2 ?? '' }}<br>
                                        Address-2 : <br>
                                        Zip-Code : {{ $order->billing_zip_code ?? '' }}<br>  
                            </div>
                            <div class="col-sm-4 invoice-col edit_billing2" >
                                <strong>Billing Details</strong>
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="billing_first_name" placeholder="First Name" value="{{ isset( $order->billing_first_name)? $order->billing_first_name:''}}" required>

                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="billing_last_name" placeholder="Last Name" value="{{ isset($order->billing_last_name)?$order->billing_last_name:''}}" required>

                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="billing_phone" placeholder="Phone" value="{{ isset($order->billing_phone)?$order->billing_phone:''}}" required>

                                <label class="form-label">Country</label>
                                <select  id="country" name="country" class="form-control">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                    <option value="{{$country->id}}"{{(isset($billingcountry) && $billingcountry->id == $country->id)? 'selected' :''}}>
                                        {{$country->name}}
                                    </option>
                                    @endforeach
                                </select>

                                <label class="form-label">State</label>
                                <select id="state" name="state" class="form-control">
                                    <option value="">
                                    </option>
                                    @if(!empty($shippingstate))
                                    <option value="{{$billingstate->state_id}}" {{ !empty( $billingstate->state_id ) ? 'selected' : '' }} >{{$billingstate->state_name}}</option>
                                    @endif
                                </select>  

                                <label class="form-label">City</label>
                                <select id="city" name="city" class="form-control">
                                    <option value="" >
                                    </option>
                                    <option value="">
                                        </option>
                                        @if(!empty($billingcity))
                                       	<option value="{{$billingcity->city_id}}" {{ !empty( $billingcity->city_id ) ? 'selected' : '' }} >{{$billingcity->city_name}}</option>
                                        @endif
                                </select>

                                {{-- <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="billing_address1" placeholder="Address" value="{{ isset($order->billing_phone)?$order->billing_phone:''}}" required> --}}

                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="billing_address2" placeholder="Address-2" value="{{ isset($order->billing_address2)?$order->billing_address2:''}}" >

                                <label class="form-label">Zip-Code</label>
                                <input type="text" class="form-control" name="billing_zip" placeholder="Zip-Code" value="{{ isset($order->billing_zip_code)?$order->billing_zip_code:''}}" required>
                            </div>

                            <div class="col-sm-4 invoice-col edit_shipping1">
                                    <h3><strong>Shipping Details <a class="ml-3 btn btn-sm btn-info text-center btn-outline-info  edit_shipping"><i class="ti-pencil-alt"></i> Edit</a></strong></h3>
                                
                                    
                                        First Name : {{ $order->shipping_first_name ?? '' }}<br>
                                        Last Name : {{ $order->shipping_last_name ?? '' }}<br>
                                        Phone : {{ $order->shipping_phone ?? '' }}<br>
                                        City : {{ $order->shipping_city ?? '' }}<br>
                                        Address : {{ $order->shipping_address2 ?? '' }}<br>
                                        Address-2 : <br>
                                        Zip-Code : {{ $order->shipping_zip_code ?? '' }}<br>  
                            </div>
                            <!-- for address table -->
                            <input type ="hidden" value="{{$order->id}}" name = "order_id">
                            
                            <div class="col-sm-4 invoice-col edit_shipping2" >
                                <strong>Shipping Details</strong>
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="shipping_first_name" placeholder="First Name" value="{{ isset($order->shipping_first_name)?$order->shipping_first_name:''}}" required>

                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="shipping_last_name" placeholder="Last Name" value="{{ isset($order->shipping_last_name)?$order->shipping_last_name:''}}" required>

                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="shipping_phone" placeholder="Phone" value="{{ isset($order->shipping_phone)?$order->shipping_phone:''}}" required>

                                <label class="form-label">Country</label>
                                <select  id="country" name="shipping_country" class="form-control">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                    <option value="{{$country->id}}"{{(isset($shippingcountry) && $shippingcountry->id == $country->id)? 'selected' :''}}>
                                        {{$country->name}}
                                    </option>
                                    @endforeach
                                </select>

                                <label class="form-label">State</label>
                                <select id="state" name="shipping_state" class="form-control">
                                    <option value="">
                                    </option>
                                    @if(!empty($shippingstate))
                                    <option value="{{$shippingstate->state_id}}" {{ !empty( $shippingstate->state_id ) ? 'selected' : '' }} >{{$shippingstate->state_name}}</option>
                                    @endif
                                </select>  

                                <label class="form-label">City</label>
                                <select id="city" name="shipping_city" class="form-control">
                                    <option value="" >
                                    </option>
                                    <option value="">
                                        </option>
                                        @if(!empty($shippingcity))
                                       	<option value="{{$shippingcity->city_id}}" {{ !empty( $shippingcity->city_id ) ? 'selected' : '' }} >{{$shippingcity->city_name}}</option>
                                        @endif
                                </select>

                                {{-- <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="shipping_address1" placeholder="Address" value="{{ isset($order->billing_last_name)?$order->billing_last_name:''}}" required> --}}

                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="shipping_address2" placeholder="Address-2" value="{{ isset($order->shipping_address2)?$order->shipping_address2:''}}" required>

                                <label class="form-label">Zip-Code</label>
                                <input type="text" class="form-control" name="shipping_zip" placeholder="Zip-Code" value="{{ isset($order->shipping_zip_code)?$order->shipping_zip_code:''}}" required>
                            </div>
                            
                    
                        </div>
                    </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label">Order Status</label>
                            <select name="order_status" class="form-control" id="pc">
                                <option value="new" {{ $order->status == 'new' ?  'selected' : '' }}>New</option>
                                <option value="delivered" {{ $order->status == 'delivered' ?  'selected' : '' }}>Delivered</option>
                                <option value="out of delivery" {{ $order->status == 'out of delivery' ?  'selected' : '' }}>Out Of Delivery</option>
                                <option value="return" {{ $order->status == 'return' ?  'selected' : '' }}>Return</option>
                                <option value="refunded" {{ $order->status == 'refunded' ?  'selected' : '' }}>Refunded</option>
                                <option value="cancelled" {{ $order->status == 'cancelled' ?  'selected' : '' }}>Cancelled</option>
                                <option value="out for reach" {{ $order->status == 'out for reach' ?  'selected' : '' }}>Out For Reach</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label">Status Note</label>
                            <textarea class="form-control" name="status_note" rows="4" placeholder="text here.." value="">{{isset($ordernotedata) ? $ordernotedata->order_note : $ordernotedata->order_note}}</textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success-light mt-3 " type="submit">Submit</button>
        </form>
    </section>
  </div>
</div>  
</div> 
@if(Auth::user()->roles->first()->title == 'Admin')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered text-nowrap w-100">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="wd-15p">Product Name</th>
                        <th class="wd-15p">Cost</th>
                        <th class="wd-15p">Quantity</th>
                        <th class="wd-15p">status</th>
                       
                        <th class="wd-15p">Total</th>
                    </tr>
                </thead>
                <tbody>
                    
                    
                        @php
                            $i=1;
                            $total = 0;
                        @endphp
                       
                        @foreach($order->orderItem as $item)
                            @php
                                $price = $item->product_price;
                                $quantity = $item->quantity;
                                $subtotal = ($price*$quantity);
                                $total = $total + $subtotal;
                                $currency = !empty($order->currency_code) && ($order->currency_code == 'USD') ? '$' : 'KD'
                            @endphp
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->product_price}}{{$currency}}</td>
                            <td>
                                <input type="hidden" name="itemid" id="itemid" value="{{$item->id}}">
                                <input type ="number" class="qty-design" min="0" value="{{$item->quantity}}" name="product_qty" id="product_qty_update" >
                                <button class="btn btn-success qty-update"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            </td>
                            <td>  <button  type="button" class="btn btn-sm btn-primary status-change" data-toggle="modal" data-target="#exampleModal1" value="{{$item->id}}" data-attr-order-id ="{{$item->order_id}}" data-attr-product-id ="{{$item->product_id}}">
                                {{$item->status}}
                                </button></td>
                            <td>{{$subtotal}}{{$currency}}</td>
                        </tr>
                        @endforeach
                    
                </tbody>
              
            </table>
            <div class="row">
                    <div class="col-6">
                       <div class="table-responsive">
                       <form action="{{route('dashboard.refund-order')}}" method="post"> 
                           <input type ="hidden" name="orderid" value="{{$order->id}}"> 
                           @csrf
                            <table class="table">
                            
                                @isset($order_meta['coupon'])
                                <tr>
                                    <th>Coupon: {{$order_meta['coupon']}}</th>
                                    <td>(-) {{$order_meta['coupon_amount']}}</td>
                                </tr>
                                @endisset
                                <tr>
                                    <th>Shipping:</th>
                                    <td>{{$order->shipping_price}}{{$currency}}</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td>{{$total + (int)$order->shipping_price}}{{$currency}}</td>
                                </tr>
                            
                                    <tr>
                                        <th>Refund Amount:</th>
                                        <td><input type ="text" class="form-control" name="refund_amount" value=""></td>
                                    </tr>
                                    <tr>
                                        <th>Refund Note:</th>
                                        <td><input type ="text" class="form-control" name="refund_note" value=""></td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn btn-success" type="submit" >Refund</button>
                                        </td>
                                    </tr>
                                
                            </table>
                        </form>
                         
                      </div>
                    </div>
                </div>
           
            
        </div>                                    
    </div>
</div>
@elseif(Auth::user()->roles->first()->title == 'Vendor')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered text-nowrap w-100">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="wd-15p">Product Name</th>
                        <th class="wd-15p">Cost</th>
                        <th class="wd-15p">Quantity</th>
                        <th class="wd-15p">Vendor Earning</th>
                        <th class="wd-15p">status</th>
                       
                        <th class="wd-15p">Total</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @php
                            $i=1;
                            $total = 0;
                        @endphp
                       
                        @foreach($order->orderItem as $item)
                            @php
                                $price = $item->product_price;
                                $quantity = $item->quantity;
                                $subtotal = ($price*$quantity);
                                $total = $total + $subtotal;
                                $currency = !empty($order->currency_code) && ($order->currency_code == 'USD') ? '$' : 'KD'
                            @endphp
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->product_price}}{{$currency}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->product_price}}{{$currency}}</td>
                            <td>  
                                <button  type="button" class="btn btn-sm btn-primary status-change" >
                                {{$item->status}}
                                </button>
                            </td>
                            <td>{{$subtotal}}{{$currency}}</td>
                        </tr>
                        @endforeach
                    
                </tbody>
                <div class="row">

                    <div class="col-6">
                       <div class="table-responsive">
                        <table class="table">
                           
                            @isset($order_meta['coupon'])
                            <tr>
                                <th>Coupon: {{$order_meta['coupon']}}</th>
                                <td>(-) {{$order_meta['coupon_amount']}}</td>
                            </tr>
                            @endisset
                            <tr>
                                <th>Shipping:</th>
                                <td>{{$order->ship_pr}}{{$currency}}</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>{{$total + $order->ship_pr}}{{$currency}}</td>
                            </tr>
                          </table>
                      </div>
                    </div>
                </div>
            </table>
        </div>                                    
    </div>
</div>
@endif

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <form action ="{{ route('dashboard.chnage-order-status') }}" method="post"> 
        @csrf
          <input type="hidden" class="form-control itemid"  name="id" value="">
          <input type="hidden" class="form-control orderid"  name="orderid" value="">
          <input type="hidden" class="form-control productid"  name="productid" value="">
          <div class="modal-body">
            <label>Change status</label>
           <select class="form-control select2" name="status" >
               <option value="new">new</option>
               <option value="in process">in process</option>
               <option value="packed">packed</option>
               <option value="ready to ship">ready to ship</option>
               <option value="shipped">shipped</option>
               <option value="out for delivery">out for delivery</option>
               <option value="delivered">delivered</option>
               <option value="cancelled">cancelled</option>
               <option value="return">return</option>
               <option value="refunded">refunded</option>
               <option value="out for reach">out for reach</option>
           </select>
          </div>
        <div class="modal-body">
          <label>Add Note</label>
          <textarea class="form-control" name="comment" value="" required></textarea>
        </div>
        <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>  
@endsection

@section('js')

<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/wysiwyag/wysiwyag.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/summernote/summernote-bs4.js') }}"></script>

<script src="{{ URL::asset('assets/js/summernote.js') }}"></script>

<script src="{{ URL::asset('assets/js/formeditor.js') }}"></script>

<script>     

 $('document').ready(function() {

     $('.note-codable').attr('name', 'content').html('{{old('body')}}');

  });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.edit_billing2').hide();
        $('.edit_shipping2').hide();
      $('.edit_billing').on('click', function() {
      
       $('.edit_billing1').hide();
       $('.edit_billing2').show();
      });
    });
    $(document).ready(function() {
      $('.edit_shipping').on('click', function() {
      
       $('.edit_shipping1').hide();
       $('.edit_shipping2').show();
      });
      $('.status-change').on('click', function() {
      var status = $(this).val();
      var orderid = $(this).attr("data-attr-order-id");
      var productid = $(this).attr("data-attr-product-id");

      $('.itemid').val(status);
      $('.orderid').val(orderid);
      $('.productid').val(productid);

    });
    $(document).ready(function () {
        $('#country').on('change', function () {
            var idCountry = this.value;
            $("#state").html('');
            $.ajax({
                url: "{{url('dashboard/fetch-states')}}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#state').html('<option value="">Select State</option>');
                    $.each(result.states, function (key, value) {
                        $("#state").append('<option value="' + value
                            .state_id + '">' + value.state_name + '</option>');
                    });
                    $('#city').html('<option value="">Select City</option>');

                }
            });
        });
        $('#state').on('change', function () {
            var idState = this.value;
            $("#city").html('');
            $.ajax({
                url: "{{url('dashboard/fetch-cities')}}",
                type: "POST",
                data: {
                    state_id: idState,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#city').html('<option value="">Select City</option>');
                    $.each(res.cities, function (key, value) {
                        $("#city").append('<option value="' + value
                            .city_id + '">' + value.city_name + '</option>');
                    });
                }
            });
        });

        $('.qty-update').on('click', function (){
            var qty = $('#product_qty_update').val();
            var itemid = $('#itemid').val();
            $.ajax({
                type: 'GET',
                url: '{{ route("dashboard.order-qty-update") }}',
                data: {
                             qty: qty,
                             itemid: itemid,
							_token: '{{csrf_token()}}'
					},
                dataType: "json",
                success: function(data) {
                    console.log( data );    
                    location.reload();
                }
            });

        });
    });
});
</script>
@endsection

