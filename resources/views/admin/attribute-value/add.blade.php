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
		<li class="breadcrumb-item"><a href="{{ route('dashboard.product.index') }}">Attribute Value</a></li>
		
		@if(isset($attributeVal->id))
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
		<form method="POST" action="{{ route('dashboard.attribute-value.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-12">	
					<input type="hidden" name="id" value="{{ isset($attributeVal) ? $attributeVal->id : '' }}">
					<div class="form-group">
						<label class="form-label">Select Attribute</label>
						<select name="attrid" class="form-control select2">
							<option value="">Select</option>
							@foreach($attribute as $key => $val)
								<option value ="{{$val->id}}" {{isset($attributeVal) && ($attributeVal->attr_id == $val->id) ?  'selected' : '' }}>{{$val->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-12">
						<div class="form-group">
							<label class="form-label">Attribute Value Name</label>
							<input type="text" class="form-control" name="attr_value" placeholder="Attribute Name" value="{{ isset($attributeVal) ? $attributeVal->attr_value_name : '' }}">
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
@endsection
