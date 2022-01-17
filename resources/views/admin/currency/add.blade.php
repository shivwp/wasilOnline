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

		<form method="POST" action="{{ route('dashboard.currency.store') }}" enctype="multipart/form-data">

			@csrf

			<div class="row">

                <div class="col-6">	

					<input type="hidden" name="id" value="{{ isset($currency) ? $currency->id : '' }}">

					<div class="form-group">

						<label class="form-label">Currency Name</label>

						<input type="text" class="form-control" name="currency_name" placeholder="Currency name" value="{{isset($currency) ? $currency->name : '' }}" required>

					</div>

				</div>

                <div class="col-6">	

					<div class="form-group">

						<label class="form-label">Currency Code</label>

						<input type="text" class="form-control" name="currency_code" placeholder="Currency code" value="{{isset($currency) ? $currency->code : '' }}" required>

					</div>

				</div>

                <div class="col-6">	

					<div class="form-group">

						<label class="form-label">Country Name</label>

						<input type="text" class="form-control" name="country_name" placeholder="Country name" value="{{isset($currency) ? $currency->country_name : '' }}" required>

					</div>

				</div>

                <div class="col-6">	

					<div class="form-group">

						<label class="form-label">Country code</label>

						<input type="text" class="form-control" name="country_code" placeholder="Country code" value="{{isset($currency) ? $currency->country_code : '' }}" required>

					</div>

				</div>

                <div class="col-6">	

					<div class="form-group">

						<label class="form-label">Compare with</label>

						<input type="text" class="form-control" name="compare" placeholder="Compare with" value="{{isset($currency) ? $currency->compare_by : '' }}" required>

					</div>

				</div>

                <div class="col-6">

					<div class="form-group">

						<label class="form-label">Compare Rate</label>

						<input type="text" class="form-control" name="compare_rate" placeholder="Compare rate" value="{{isset($currency) ? $currency->compare_rate : '' }}" required>

					</div>

				</div>

                <div class="col-6">

					<div class="form-group">

						<label class="form-label">Status</label>

                        <select name="status" class ="form-control select2" required>

                             <option value="">Select</option>

                            <option value="1" {{isset($currency) && ($currency->status == 1) ? 'selected' : '' }}>active</option>

                            <option value="0" {{isset($currency) && ($currency->status == 0) ? 'selected' : '' }}>Inactive</option>

                        </select>

					</div>

				</div>

			

			</div>

			@if(isset($currency->id))
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

<script>

	$(document).ready(function() {

		$('#dataTable').DataTable();

	});

</script>

<script>

	$(document).ready(function() {

		$('#pc').change(function() {

			var element = $(this).find('option:selected'); 

			//var myTag = element.attr("myTag");

			$('#cat-level').val(element.attr('level'));

			$('#cat-level').attr('value',element.attr('level'));

  		});

	});

</script>









@endsection

