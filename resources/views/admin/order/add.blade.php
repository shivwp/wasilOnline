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
 <!--  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail</h1>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>
  </section> -->
  <section class="content-header">
     <div class="container-fluid">
        <form method="POST" action="{{ route('dashboard.order.update',$order->main_id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
        <div class="row">
          <div class="col-12">
            <div class="invoice p-3 mb-3">
                @php
                    $date = date("d F Y", strtotime($order->created_at));
                    $amount = ($order->product_price) * ($order->quantity);

                    $t_amount = $amount+($order->shipping_price);
                @endphp
              <div class="row">
                <div class="col-12">
                    <h2>
                        Order #{{$order->order_generated_id}} Details
                        <small class="float-right">Date: {{$date}}</small>
                    </h2>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <br>
                  <address>
                    <strong>User Details</strong><br>
                    Name: {{$order->first_name}} {{$order->last_name}}<br>
                    Address: {{$order->address}}{{$order->address2}}<br>
                    Zip Code: {{$order->zip_code}}<br>
                    Phone: {{$order->phone}}<br>
                    Email: {{$order->email}}
                  </address>
                </div>
                
               
                <div class="col-sm-4 invoice-col edit_shipping1">
                  <br>
                    <strong>Shipping Details <a class="btn btn-info text-center edit_shipping"><i class="fas fa-pen"></i>edit</a></strong><br>
                    Shipping Method : {{$order->shipping_method}}<br>
                    Shipping Type : {{$order->shipping_type}}<br>
                    Address: {{$order->address}}
                </div>

                <div class="col-sm-4 invoice-col edit_shipping2" style="display:none;">
                    <strong>Shipping Details</strong>
                    <label class="form-label">Shipping Method</label>
                    <input type="text" class="form-control" name="shipping_method" placeholder="Shipping Method" value="{{ $order->shipping_method }}" required>
                    <label class="form-label">Shipping Type</label>
                    <input type="text" class="form-control" name="shipping_type" placeholder="Shipping Type" value="{{ $order->shipping_type }}" required>
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $order->address }}" required>
                </div>

                <div class="col-sm-4 invoice-col edit_billing1">
                    <br>
                    <address>
                        <strong>Billing Details </strong><a class="btn btn-info text-center edit_billing"><i class="fas fa-pen"></i>edit</a><br>
                      <!--   Product Name: {{$order->product_name}} <br>
                        Price: {{$order->product_price}}<br> -->
                        <!-- Address:{{$order->address}} -->
                    </address>
                </div>
                <!-- for address table -->
                <input type ="hidden" value="{{$order->main_id}}" name = "order_id">
                
                <div class="col-sm-4 invoice-col edit_billing2" style="display:none;">
                    <strong>Billing Details</strong>
                    <!--  <label class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Product Name" value="{{ $order->product_name }}" required>
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" name="product_price" placeholder="Price" value="{{ $order->product_price }}" required> -->
                    <!-- <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $order->address }}" required> -->
                </div>

              </div>
<!-- 
              <div class="row">
                <div class="col-6">
                  <p class="lead">Payment Details:</p>
                    <div class="table-responsive">
                    <table class="table">
                     
                      <tr>
                        <th>Product Amount:</th>
                        <td>{{$order->currency_sign}}{{$order->product_price}}</td>
                      </tr>
                      <tr>
                        <th>Quentity:</th>
                        <td>{{$order->quantity}}</td>
                      </tr>
                      <tr>
                        <th>Shipping Amount:</th>
                        <td>{{$order->currency_sign}}{{$order->shipping_price}}</td>
                      </tr>
                      <tr>
                        <th>Total Amount:</th>
                        <td>{{$order->currency_sign}}{{$t_amount}}</td>
                      </tr>
                    </table>
                  </div>
                </div>

                <div class="col-6">
                   <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th>Swift Code:</th>
                        <td></td>
                      </tr>
                       <tr>
                        <th>Institution number :</th>
                        <td></td>
                      </tr>
                       <tr>
                        <th>Branch number:</th>
                        <td></td>
                      </tr>
                       <tr>
                        <th>Account number :</th>
                        <td></td>
                      </tr>
                      </table>
                  </div>
                </div>
            </div> -->
          </div>
        </div>
    </div>


            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label">Order Status</label>
                        <select name="order_status" class="form-control" id="pc">
                            <option value="new" {{ $order->status == 'new' ?  'selected' : '' }}>New</option>
                            <option value="in process" {{ $order->status == 'in process' ?  'selected' : '' }}>In Process</option>
                            <option value="shipped" {{ $order->status == 'shipped' ?  'selected' : '' }}>Shipped</option>
                            <option value="packed" {{ $order->status == 'packed' ?  'selected' : '' }}>Packed</option>
                            <option value="refunded" {{ $order->status == 'refunded' ?  'selected' : '' }}>Refunded</option>
                            <option value="cancelled" {{ $order->status == 'cancelled' ?  'selected' : '' }}>Cancelled</option>
                            <option value="delivered" {{ $order->status == 'delivered' ?  'selected' : '' }}>Delivered</option>
                            <option value="out of delivery" {{ $order->status == 'out of delivery' ?  'selected' : '' }}>Out Of Delivery</option>
                            <option value="return" {{ $order->status == 'return' ?  'selected' : '' }}>Return</option>
                            <option value="out for reach" {{ $order->status == 'out for reach' ?  'selected' : '' }}>Out For Reach</option>
                            <option value="ready to ship" {{ $order->status == 'ready to ship' ?  'selected' : '' }}>Ready to Ship</option>
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
            <button class="btn btn-success-light mt-3 " type="submit">Submit</button>
            </form>
    </section>
  </div>
</div>  
</div> 

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
                       
                        <th class="wd-15p">Total</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @php
                            $i=1;
                            $total = 0;
                        @endphp
                       
                        @foreach($allorder as $item)
                            @php
                                $price = $item->product_price;
                                $quantity = $item->quantity;
                                $subtotal = ($price*$quantity);
                                $total = $total + $subtotal;
                            @endphp
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->product_price}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$subtotal}}</td>
                        </tr>
                        @endforeach
                    
                </tbody>
                <div class="row">

                    <div class="col-6">
                       <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Shipping Charge:</th>
                                <td>{{$order->shipping_price}}</td>
                                
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>{{$total + $order->shipping_price}}</td>
                            </tr>
                          </table>
                      </div>
                    </div>
                </div>
            </table>
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
    });
</script>
@endsection

