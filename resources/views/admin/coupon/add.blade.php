@extends('layouts.vertical-menu.master')

@section('css')

<style>

 .note-placeholder {

    display: none !important;

}

.sub_cat, .sub_sub_cat {

    display: none;

  }

</style>

<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/date-picker/spectrum.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/multipleselect/multiple-select.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet">

@endsection

@section('page-header')

<!-- PAGE-HEADER -->

<div>

	<h1 class="page-title">{{$title}}</h1>

	<ol class="breadcrumb">

		<li class="breadcrumb-item"><a href="{{ route('dashboard.product.index') }}">Coupon</a></li>

		 @if(isset($coupon->id))
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        @else
            <li class="breadcrumb-item active" aria-current="page">Add</li>
        @endif

	</ol>

</div>



<!-- PAGE-HEADER END -->

@endsection



@section('content')

<!-- ROW-1 OPEN-->

<div class="card">

	<div class="card-body">

		<form method="POST" action="{{ route('dashboard.coupon.store') }}" enctype="multipart/form-data">

			@csrf

			<div class="row">
                <div class="col-10">
                    <div class="form-group">
                        <input type="text"  class="genrate_code form-control" id="genrate_code" name="code" placeholder="Coupon code" value="{{isset($coupon) ? $coupon->code : '' }}" />
                    </div>
                </div>
                <div class="col-2">
                    <a class="gen-btn btn btn-info-light    w-100"  href="javascript:void(0);" onclick="codegenrate()">Generate Code</a>
                </div>
	        </div>
            <div class="row">
                <input type="hidden" name="id" value="{{ isset($coupon) ? $coupon->id : ''}}">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Select Vendor</label>
                        <select class="form-control select2" name="vendor_id[]" id="" multiple>
                        <option value="0">All</option>
                        @if(count($vendor)>0)
                            @foreach($vendor as $key => $val)
                            @isset($coupon)
                            @php
                                $check = json_decode($coupon->vendor_id)
                            @endphp
                            @endisset
                                <option value="{{$val->id}}" {{ isset($check) && in_array($val->id, $check) ? 'selected' : '' }}>{{$val->first_name}} {{$val->last_name}}</option>
                            @endforeach
                        @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Select Product</label>
                        <select class="form-control select2 product_search" name="product_id[]" id="product_search" multiple="">
                            @if(!isset($coupon))
                                <option value="0">All</option>
                            @else
                            @foreach($product as $val)
                            @isset($coupon)
                            @php
                                $check = json_decode($coupon->product_id)
                            @endphp
                            @endisset
                                <option value="{{$val->id}}" {{ isset($check) && in_array($val->id, $check) ? 'selected' : '' }}>{{$val->pname}}</option>
                            @endforeach
                            @endif

                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Manimum spend</label>
                        <input type="number" class="form-control" name="manimum_spend" placeholder="Manimum" value="{{isset($coupon) ? $coupon->maximum_spend : '' }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Limit per coupon</label>
                        <input type="number" class="form-control" name="limit_per_coupon" placeholder="Coupon" value="{{isset($coupon) ? $coupon->limit_per_coupon : '' }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Coupon amount</label>
                        <input type="number" class="form-control" name="coupon_amount" placeholder="Amount" value="{{isset($coupon) ? $coupon->coupon_amount : '' }}" required>
                    </div>
                  

                    <div class="form-group">
                        <label class="form-label">Start date</label>
                        <input type="date" class="form-control" name="start_date" placeholder="Date" value="{{isset($coupon) ? $coupon->start_date : '' }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Free Shipping</label>
                        <select class="form-control select2" name="free_shipping" id="" >
                        <option value="1">yes</option>
                        <option value="0">no</option>
                        </select>
                    </div>
                   
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Select Category</label>
                        <select class="form-control select2" name="category_id[]" id="coupon_amount" multiple>
                        <option value="0">All</option>
                        @if(count($category)>0)
                            @foreach($category as $key => $val)
                            @isset($coupon)
                                @php
                                    $check = json_decode($coupon->category_id)
                                @endphp
                            @endisset
                                <option value="{{$val->id}}" {{isset($check) && in_array($val->id, $check) ? 'selected' : '' }}>{{$val->title}}</option>
                            @endforeach
                        @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Maximum spend</label>
                        <input type="number" class="form-control" name="maximum_spend" placeholder="Maximum" value="{{isset($coupon) ? $coupon->maximum_spend : '' }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Limit per user</label>
                        <input type="number" class="form-control" name="limit_per_user" placeholder="User" value="{{isset($coupon) ? $coupon->limit_per_user : '' }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Coupon amount type</label>
                        <select class="form-control select2" name="amount_type" id="coupon_amount_type" >
                        <option value="flat_rate" {{isset($coupon) && ($coupon->discount_type == 'flat_rate') ? 'selected' : ''}}>Flat Rate</option>
                        <option value="percentage"  {{isset($coupon) && ($coupon->discount_type == 'percentage') ? 'selected' : ''}}>Percantage</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="form-control select2" name="status" id="coupon_amount" >
                            <option value="1" {{isset($coupon) && ($coupon->status == 1) ? 'selected' : ''}}>Active</option>
                            <option value="0" {{isset($coupon) && ($coupon->status == 0) ? 'selected' : ''}}>InActive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Expiry date</label>
                        <input type="date" class="form-control" name="expiry_date" placeholder="Date" value="{{isset($coupon) ? $coupon->expiry_date : '' }}" required>
                    </div>
                  
                  
                    
                   
                  
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea rows="4" cols="50" class="form-control" name="description" placeholder="Type here" required>{{isset($coupon) ? $coupon->description : '' }}</textarea>
                    </div>
                </div>

            </div>

            @if(isset($product->id))
                <button class="btn btn-success-light mt-3 " type="submit">Update</button>
            @else
                <button class="btn btn-success-light mt-3 " type="submit">Save</button>
            @endif

        </form>

</div>

</div>					

@endsection

@section('js')

<script src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/date-picker/spectrum.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/multipleselect/multi-select.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/time-picker/toggles.min.js') }}"></script>

<script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>



<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/wysiwyag/wysiwyag.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/summernote/summernote-bs4.js') }}"></script>

<script src="{{ URL::asset('assets/js/summernote.js') }}"></script>

<script src="{{ URL::asset('assets/js/formeditor.js') }}"></script>
<script>     

 $('document').ready(function() {

    $('.note-codable').attr('name', 'content');

    var pre_editor_val = $('input[name="content"]').val();

    $('textarea[name="content"]').val(pre_editor_val);

    $('.note-editable.card-block').html(pre_editor_val);

    $('button[type="submit"]').click(function(editor_val){

        if(!jQuery('.codeview').lenght){

            var editor_val = $('.note-editable.card-block').html();

            $('textarea[name="content"]').val(editor_val);

        }

    });

  });



function codegenrate() {

    var rnd = Math.floor(Math.random() * 10000);

    document.getElementById('genrate_code').value = 'COUP'+rnd;

}

</script>
<script type="text/javascript">
 $('document').ready(function() {
    $('.product_search').select2({
         minimumInputLength: 3,
          ajax: {
                  url: '{{ route("dashboard.product-search") }}',
                  method: 'post',
                  dataType: 'json',
                  delay:250,
                  data: function (params) {
                    // console.log(params);
                      return{
                         psearchTerm: params.term,
                         _token: '{{csrf_token()}}'
                      }
                   },
                  processResults: function(data){
                    // console.log(data);
                    return{
                      results: data
                    };
                  },
                  cache:true
            }
    });
    
});

</script>



@endsection

