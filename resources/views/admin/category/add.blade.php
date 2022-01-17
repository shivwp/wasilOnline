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
		@if(isset($category->id))
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

		<form method="POST" action="{{ route('dashboard.category.store') }}" enctype="multipart/form-data">

			@csrf

			<div class="row">

				<div class="col-6">	

					<input type="hidden" name="id" value="{{ isset($category) ? $category->id : '' }}">

					<div class="form-group">

						<label class="form-label">Title</label>

						<input type="text" class="form-control" name="title" placeholder="Title" value="{{isset($category) ? $category->title : '' }}">

					</div>

				</div>

				<div class="col-6">	

					<div class="form-group">

						<label class="form-label">Status</label>

						<select name="status" class="form-control select2" required>

						<option value="">Select</option>

						<option value="active" {{isset($category) && ($category->status == 'active') ? 'selected' : '' }}>Active</option>

						<option value="pending" {{isset($category) && ($category->status == 'pending') ? 'selected' : '' }}>Pending</option>

						</select>

					</div>

				</div>
				@if(isset($category->id))
				<div class="col-6">
		          <div class="form-group">
		            <label class="control-label ">Commision</label>
		            <input type="text" class="form-control" id="exampleInputuname_1" name="commision" value="{{isset($category) ? $category->commision : '' }}">
		          </div>
		        </div>
				@else	
				@endif


				<div class="col-6">

					<div class="form-group">

						<label class="form-label">Select Parent</label>

						<select name="parent_cat" class="form-control select2" id="pc">

							<option value="0">No parent</option>

							@foreach($cat as $val)

							@if($val->level < 4)

								<option value ="{{$val->id}}" level="{{ $val->level }}" {{isset($category) && ($category->parent_id == $val->id) ?  'selected' : '' }}>{{$val->title}}</option>

							@endif

							@endforeach

						</select>

						<input type="hidden" id="cat-level" name="level" value="">

					</div>

				</div>
				<div class="col-12">
					<div class="form-group">
						<label class="form-label">Discription</label>
						<textarea class="form-control" name="discription" rows="6" placeholder="text here.." >{{isset($category) ? $category->discription : '' }}</textarea>
						
					</div>
				</div>

			</div>

			@if(isset($category->id))
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
