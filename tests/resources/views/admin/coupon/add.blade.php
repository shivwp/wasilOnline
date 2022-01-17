@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet">
<style> .note-placeholder {
    display: none !important;
}</style>
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="page-title">{{$title}}</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.coupon.index') }}">Coupon</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </div>
                        
                        <!-- PAGE-HEADER END -->
@endsection

@section('content')
                        <!-- ROW-1 OPEN-->
                                <div class="card">
                                <form  method="post" action="{{route('dashboard.coupon.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <form  method="post" action="{{route('dashboard.coupon.store')}}" enctype="multipart/form-data">
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
                                                        <label class="form-label">Coupon amount</label>
                                                        <input type="number" class="form-control" name="coupon_amount" placeholder="Amount" value="{{isset($coupon) ? $coupon->coupon_amount : '' }}" required>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Start date</label>
                                                        <input type="date" class="form-control" name="start_date" placeholder="Date" value="{{isset($coupon) ? $coupon->start_date : '' }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Expiry date</label>
                                                        <input type="date" class="form-control" name="expiry_date" placeholder="Date" value="{{isset($coupon) ? $coupon->expiry_date : '' }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Minimum spend</label>
                                                        <input type="number" class="form-control" name="minimum_spend" placeholder="Minimum" value="{{isset($coupon) ? $coupon->minimum_spend : '' }}" required>
                                                    </div>
                                                   
                                                   <!--  <div class="form-group">
                                                        <label class="form-label">Indivisual</label>
                                                        <input type="text" class="form-control" name="is_indivisual" placeholder="Indivisual" value="{{isset($coupon) ? $coupon->is_indivisual : '' }}" required>
                                                    </div> -->
                                                    
                                                  
                                                </div>
                                                    <div class="col-md-6">
                                              <!--       <div class="form-group">
                                                        <label class="form-label">Exclude sale item</label>
                                                        <input type="text" class="form-control" name="limit_per_coupon" placeholder="Sale" value="{{isset($coupon) ? $coupon->limit_per_coupon : '' }}" required>
                                                    </div> -->
                                                     <div class="form-group">
                                                        <label class="form-label">Maximum spend</label>
                                                        <input type="number" class="form-control" name="maximum_spend" placeholder="Maximum" value="{{isset($coupon) ? $coupon->maximum_spend : '' }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Limit per user</label>
                                                        <input type="number" class="form-control" name="limit_per_user" placeholder="User" value="{{isset($coupon) ? $coupon->limit_per_user : '' }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Status</label>
                                                        <input type="text" class="form-control" name="status" placeholder="Status" value="{{isset($coupon) ? $coupon->status : '' }}" required>
                                                    </div>
                                                <!--     <div class="form-group">
                                                        <label class="form-label">Allow free shipping</label>
                                                        <input type="number" class="form-control" name="allow_free_shipping" placeholder="Shipping" value="{{isset($coupon) ? $coupon->allow_free_shipping : '' }}" required>
                                                    </div> -->
                                                <!--     <div class="form-group">
                                                        <label class="form-label">Discount type</label>
                                                        <input type="text" class="form-control" name="discount_type" placeholder="Discount" value="{{isset($coupon) ? $coupon->discount_type : '' }}" required>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label class="form-label">Limit per coupon</label>
                                                        <input type="number" class="form-control" name="limit_per_coupon" placeholder="Coupon" value="{{isset($coupon) ? $coupon->limit_per_coupon : '' }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                <div class="form-group">
                                                        <label class="form-label">Description</label>
                                                        <textarea rows="4" cols="50" class="form-control" name="description" placeholder="Type here" required>{{isset($coupon) ? $coupon->description : '' }}</textarea>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        <button type ="submit" class="btn btn-success-light mt-3 ">Save</button>
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
@endsection
