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

                        <!-- ROW-1 OPEN-->

                                <div class="card">

                                    <div class="card-body">

                                            <div class="row">

                                                <input type="hidden" name="id" value="{{ isset($order) ? $order->title : ''}}">

                                                <div class="col-md-4">

                                                    <div class="form-group">

                                                        <label class="form-label">Order id</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->order_id : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">User id</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->user_id : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">Status</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->status : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">Status note</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->status_note : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">Invoice number</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->invoice_number : '' }}" required>

                                                    </div>

                                            </div>

                                            <div class="col-md-4">

                                                    <div class="form-group">

                                                        <label class="form-label">Total price</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->total_price : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">Currency sign</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->currency_sign : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">Gift amount</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->giftcard_used_amount : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">Shipping address</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->shipping_address_id : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">Shipping type</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->shipping_type : '' }}" required>

                                                    </div>

                                            </div>

                                            <div class="col-md-4">

                                                    <div class="form-group">

                                                        <label class="form-label">Shipping method</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->shipping_method : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">Shipping price</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->shipping_price : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">Payment mode</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->payment_mode : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">Payment status</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->payment_status : '' }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <label class="form-label">Recipet amount</label>

                                                        <input type="text" class="form-control" name="title" placeholder="Name" value="{{  isset($order) ? $order->receipt_amount : '' }}" required>

                                                    </div>

                                            </div>

                                       

                                        
                                        @if(isset($menu->id))
                                            <a  href="/dashboard/order" class="btn btn-success-light mt-3 ">Update</a>
                                        @else
                                            <a  href="/dashboard/order" class="btn btn-success-light mt-3 ">Save</a>
                                        @endif

                                    </div>



                                     </form>

                                    

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

  });</script>

@endsection

