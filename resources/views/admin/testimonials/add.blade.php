@extends('layouts.vertical-menu.master')

@section('css')

<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">

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

		<li class="breadcrumb-item"><a href="{{ route('dashboard.product.index') }}">testimonial</a></li>
		@if(isset($Testimonials->id))
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

		<form method="POST" action="{{ route('dashboard.testimonials.store') }}" enctype="multipart/form-data">

			@csrf

			<div class="row">

				<div class="col-12">	

					<input type="hidden" name="id" value="{{ isset($Testimonials) ? $Testimonials->id : '' }}">

					<div class="form-group">

						<label class="form-label">Title</label>

						<input type="text" class="form-control" name="title" placeholder="Title" value="{{isset($Testimonials) ? $Testimonials->title : '' }}">

					</div>

				</div>
				
				<div class="col-12">
					<div class="form-group">
						<label class="form-label">Discription</label>
						<textarea class="form-control" name="discription" rows="6" placeholder="text here.." >{{isset($Testimonials) ? $Testimonials->description : '' }}</textarea>
						
					</div>
				</div>

				<div class="col-12">
					<div class="form-group">
						<label class="form-label">Long Discription</label>
						<div id="summernote"><?php echo isset($Testimonials) ? $Testimonials->long_description : '' ?></div>
						
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label class="form-label">Customer Name</label>
						
						<input type="text" class="form-control" name="customer_name" placeholder="Customer Name" value="{{isset($Testimonials) ? $Testimonials->customer_name : '' }}">	
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label class="form-label">Customer Designation</label>
						<input type="text" class="form-control" name="designation" placeholder="Designation" value="{{isset($Testimonials) ? $Testimonials->designation : '' }}">	
					</div>
				</div>
				<div class="col-md-12">

					<label class="form-label mt-0">Image</label>

					<div class="dropify-wrapper" style="height: 302px;border: 1px solid #cdcdcd;">

						<div class="dropify-message" >

							<span class="file-icon"> <p>Drag and drop a file here or click</p>

							</span>

							<p class="dropify-error">Ooops, something wrong appended.</p>

						</div>

						<div class="dropify-loader"></div><div class="dropify-errors-container">

							<ul>

							</ul>

						</div>
						@if(isset($Testimonials->image))
							<input type="file" class="dropify" data-height="300" data-default-file="{{asset('testimonials/'.$Testimonials->image)}}" name="image" value="">
							
						@else
							<input type="file" class="dropify" data-height="300" name="image" value="">
						@endif
						
						

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

<script src="{{ URL::asset('assets/plugins/summernote/summernote-bs4.js') }}"></script>

<script src="{{ URL::asset('assets/js/summernote.js') }}"></script>

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

