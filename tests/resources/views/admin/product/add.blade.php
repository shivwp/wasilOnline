@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/date-picker/spectrum.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/multipleselect/multiple-select.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
<!-- PAGE-HEADER -->
<div>
	<h1 class="page-title">{{$title}}</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dashboard.product.index') }}">Product</a></li>
		<li class="breadcrumb-item active" aria-current="page">Edit</li>
	</ol>
</div>

<!-- PAGE-HEADER END -->
@endsection

@section('content')
<!-- ROW-1 OPEN-->
<div class="card">
	<div class="card-body">
		<form method="POST" action="{{ route('dashboard.product.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<input type="hidden" name="id" value="{{ isset($product) ? $product->id : '' }}">
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Select Vendor</label>
						<select name="vendorid" class="form-control select2">
							<option>Select</option>
							@if(count($all_vendors) > 0)
								@foreach($all_vendors as $val)
									<option value="{{$val->id}}" {{isset($product) && ($product->cat_id == $val->id) ? 'selected' : ''}}>{{$val->first_name}}</option>
								@endforeach
							@endif
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Procuct Name</label>
						<input type="text" class="form-control" name="productname" placeholder="Name"  value="{{isset($product) ? $product->pname : '' }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Select Category</label>
						<select name="catid" class="form-control select2">
							<option>Select</option>
							@if(count($category) > 0)
								@foreach($category as $val)
									<option value="{{$val->id}}" {{isset($product) && ($product->cat_id == $val->id) ? 'selected' : ''}}>{{$val->title}}</option>
								@endforeach
							@endif
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Product Type</label>
						<select name="catid" class="form-control select2">
							<option>Select</option>
								<option value="">Single</option>
								<option value="">Variants</option>
						</select>
					</div>
				</div>
				@if(count($attributes) > 0)
				@foreach($attributes as $key => $attr)
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">{{$attr['name']}} Attribute</label>
						<select name="attrvalid[{{$attr['id']}}][]" class="form-control select2" id="attrval">
							<option value="">Select Attribute</option>
							@if(count($attr) > 0)
							@foreach($attr['terms'] as $attrval)
							<option value="{{ $attrval->id }}" {{isset($product_terms[$attr['id']]['attr_value_id']) && ($product_terms[$attr['id']]['attr_value_id'] == $attrval->id) ? 'selected' : ''}}>{{ Str::ucfirst($attrval['attr_value_name'])}}</option>
							@endforeach
							@endif
						</select>
					</div>
				</div>
				@endforeach
				@endif
				{{--<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Select Attridute</label>
						<select name="attrid" class="form-control select2" id="attr">
							<option>Select</option>
							@if(count($attribute) > 0)
							@foreach($attribute as $attr)
							<option value="{{$attr->id}}">{{$attr->name}}</option>
							@endforeach
							@endif
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Select Attribute Value</label>
						<select name="attrvalid" class="form-control select2" id="attrval">
							<option value="">Select</option>
						</select>
					</div>
				</div>--}}
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Sku id</label>
						<input type="text" class="form-control" name="sku" placeholder="Skuid" value="{{isset($product) ? $product->sku_id : '' }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Shipping type</label>
						<select class="form-control select2" name="shipping_type">
							<option value="">Select</option>
							<option value="paid" {{isset($product) && ($product->shipping_type == 'paid') ? 'selected' : '' }}>Paid</option>
							<option value="unpaid" {{isset($product) && ($product->shipping_type == 'unpaid') ? 'selected' : '' }}>Unpaid</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Shipping Price</label>
						<input type="text" name="shipping_price" value="{{isset($product) ? $product->shipping_charge : '' }}" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Purchase Price</label>
						<input type="number" class="form-control" name="purchase" placeholder="Purchase Price" value="{{isset($product) ? $product->p_price : '' }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Selling Price</label>
						<input type="number" class="form-control" name="selling" placeholder="Selling Price" value="{{isset($product) ? $product->s_price : '' }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Discount Type</label>
						<select class="form-control select2" name="discount_type">
							<option value="">Select</option>
							<option value="flat_rate">Falt Rate</option>
							<option value="percentage">Percentage</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Discount</label>
						<input type="number" class="form-control" name="discount" placeholder="Discount" value="{{isset($product) ? $product->discount : '' }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Tax(in %)</label>
						<input type="number" class="form-control" name="tax" placeholder="Tax" value="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Stock</label>
						<input type="number" class="form-control" name="stock" placeholder="Stock" value="{{isset($product) ? $product->in_stock : '' }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Meta Title</label>
						<input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="{{isset($product) ? $product->meta_title : '' }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Meta Keyword</label>
						<textarea name="meta_keyword" class="form-control" placeholder="Meta Keyword" value="" rows="6">{{isset($product) ? $product->meta_keyword : '' }}</textarea>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Meta Discription</label>
						<textarea name="meta_description" class="form-control" placeholder="Meta Description" value="{{isset($product) ? $product->meta_description : '' }}" rows="6">{{isset($product) ? $product->meta_description : '' }}</textarea>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mb-0">
						<label class="form-label">Product Discription</label>
						<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="text here.." >{{isset($product) ? $product->short_description : '' }}</textarea>
					</div>
				</div>
				<div class="col-md-6">
					<label class="form-label mt-0">Thumbnail</label>
					<div class="dropify-wrapper" style="height: 302px;border: 1px solid #cdcdcd;"><div class="dropify-message" >
						<span class="file-icon"> <p>Drag and drop a file here or click</p>
						</span>
						<p class="dropify-error">Ooops, something wrong appended.</p>
					</div>
					<div class="dropify-loader"></div><div class="dropify-errors-container">
						<ul>
						</ul>
					</div>
					<input type="file" class="dropify" data-height="300" name="featured_image" value="{{isset($product) ? $product->gallery_image : '' }}">
					<button type="button" class="dropify-clear">Remove</button>
					<div class="dropify-preview">
						<span class="dropify-render">

						</span>
						<div class="dropify-infos"
						>
						<div class="dropify-infos-inner">
							<p class="dropify-filename">
								<span class="dropify-filename-inner"></span>
							</p>
							<p class="dropify-infos-message">Drag and drop or click to replace</p>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
	<button class="btn btn-success-light mt-3 " type="submit">Success</button>
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
<script>
	$(document).ready(function() {
		$('#dataTable').DataTable();
	});
</script>
<script>
	$(document).ready(function() {

		$('#attr').change(function(){
//$('#new_city').hide();
var attrid = $(this).val();
// AJAX request
$.ajax({
	url:'{{url('dashboard/get-attr-value')}}',
	method: 'post',
	data: {
		"_token": "{{ csrf_token() }}",
		"attrid": attrid
	},
	dataType: 'json',
	success: function(response) {
		// Remove options 
		$('#attrval').find('option').not(':first').remove();
// Add options
$.each(response,function(index,data){
	$('#attrval').append('<option value="'+data['id']+'">'+data['attr_value_name']+'</option>');
});
}
});
});

	});
</script>
@endsection
