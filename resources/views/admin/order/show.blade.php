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
        <form method="POST" action="" enctype="multipart/form-data">
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
               <!--  <div class="col-sm-4 invoice-col">
                  <br>
                  <address>
                    <strong>User Details</strong><br>
                    Name:<br>
                    Phone: <br>
                    Email: 
                  </address>
                </div> -->
                
               
                <div class="col-sm-4 invoice-col edit_billing1">
                 {{-- <br>
                    <strong>Billing Details <a class="btn btn-info text-center edit_billing"><i class="fas fa-pen"></i>edit</a></strong><br>--}}
                   
                        
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
                    <input type="text" class="form-control" name="billing_first_name" placeholder="First Name" value="" required>

                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="billing_last_name" placeholder="Last Name" value="" required>

                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="billing_email" placeholder="Email" value="" required>

                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="billing_phone" placeholder="Phone" value="" required>

                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="billing_city" placeholder="City" value="" required>

                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="billing_address1" placeholder="Address" value="" required>

                    <label class="form-label">Address-2</label>
                    <input type="text" class="form-control" name="billing_address2" placeholder="Address-2" value="" required>

                    <label class="form-label">Zip-Code</label>
                    <input type="text" class="form-control" name="billing_zip" placeholder="Zip-Code" value="" required>
                </div>

                <div class="col-sm-4 invoice-col edit_shipping1">
                  {{--<br>
                   <strong>Shipping Details <a class="btn btn-info text-center edit_shipping"><i class="fas fa-pen"></i>edit</a></strong><br>--}} 
                       
                        
                            First Name : {{ $order->shipping_first_name ?? '' }}<br>
                            Last Name : {{ $order->shipping_last_name ?? '' }}<br>
                            Phone : {{ $order->shipping_phone ?? '' }}<br>
                            City : {{ $order->shipping_city ?? '' }}<br>
                            Address : {{ $order->shipping_address2 ?? '' }}<br>
                            Address-2 : <br>
                            Zip-Code : {{ $order->shipping_zip_code ?? '' }}<br>  
                    </div>
                <!-- for address table -->
                <input type ="hidden" value="" name = "order_id">
                
                 <div class="col-sm-4 invoice-col edit_shipping2" >
                    <strong>Shipping Details</strong>
                     <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="shipping_first_name" placeholder="First Name" value="" required>

                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="shipping_last_name" placeholder="Last Name" value="" required>

                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="shipping_email" placeholder="Email" value="" required>

                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="shipping_phone" placeholder="Phone" value="" required>

                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="shipping_city" placeholder="City" value="" required>

                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="shipping_address1" placeholder="Address" value="" required>

                    <label class="form-label">Address-2</label>
                    <input type="text" class="form-control" name="shipping_address2" placeholder="Address-2" value="" required>

                    <label class="form-label">Zip-Code</label>
                    <input type="text" class="form-control" name="shipping_zip" placeholder="Zip-Code" value="" required>
              </div>

          
        </div>
    </div>


            {{--<div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label">Order Status</label>
                        <select name="order_status" class="form-control" id="pc">
                            <option value="new" >New</option>
                            <option value="in process" >In Process</option>
                           
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label">Status Note</label>
                        <textarea class="form-control" name="status_note" rows="4" placeholder="text here.." ></textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-success-light mt-3 " type="submit">Submit</button>--}}
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
                            <td>{{$item->quantity}}</td>
                            <td>  <button  type="button" class="btn btn-sm btn-primary status-change" data-toggle="modal" data-target="#exampleModal1" value="{{$item->id}}" data-attr-order-id ="{{$item->order_id}}" data-attr-product-id ="{{$item->product_id}}">
                                {{$item->status}}
                                </button></td>
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
                                <td>{{$order->shipping_price}}{{$currency}}</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>{{$total + (int)$order->shipping_price}}{{$currency}}</td>
                            </tr>
                          </table>
                      </div>
                    </div>
                </div>
            </table>
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
                            <td>  <button  type="button" class="btn btn-sm btn-primary status-change" data-toggle="modal" data-target="#exampleModal1" value="{{$item->id}}" data-attr-order-id ="{{$item->order_id}}" data-attr-product-id ="{{$item->product_id}}">
                                {{$item->status}}
                                </button></td>
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
                                <td>{{$order->shipping_price}}{{$currency}}</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>{{$total + $order->shipping_price}}{{$currency}}</td>
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
          <textarea class="form-control" name="comment" value=""></textarea>
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
    });
</script>
@endsection

