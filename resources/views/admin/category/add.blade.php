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

<link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet">

@endsection

@section('page-header')

<!-- PAGE-HEADER -->

<div>

	<h1 class="page-title">{{$title}}</h1>

	<ol class="breadcrumb">

		<li class="breadcrumb-item"><a href="{{ route('dashboard.product.index') }}">category</a></li>
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

						<label class="form-label">Title (English)</label>

						<input type="text" class="form-control" name="title" placeholder="Title" value="{{isset($category) ? $category->title : '' }}">

					</div>

				</div>
				<div class="col-6">	

					<input type="hidden" name="id" value="{{ isset($category) ? $category->id : '' }}">

					<div class="form-group">

						<label class="form-label">Title (Arabic)</label>

						<input type="text" class="form-control" name="arab_title" placeholder="Title" value="{{isset($category) ? $category->arab_title : '' }}">

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


				<div class="col-12">

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
				<div class="col-6">
					<div class="form-group">
						<label class="form-label">Discription(English)</label>
						<textarea class="form-control" name="discription" rows="6" placeholder="text here.." >{{isset($category) ? $category->discription : '' }}</textarea>
						
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label class="form-label">Discription(Arabic)</label>
						<textarea class="form-control" name="arab_description" rows="6" placeholder="text here.." >{{isset($category) ? $category->arab_description : '' }}</textarea>
						
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
						@if(isset($category->category_image))
							<input type="file" class="dropify" data-height="300" data-default-file="{{asset('category/'.$category->category_image)}}" name="category_image" value="">
							
						@else
							<input type="file" class="dropify" data-height="300" name="category_image" value="">
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
						<div class="col-md-12">

					<label class="form-label mt-0">Banner Image</label>

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
						@if(isset($category->category_image_banner))
							<input type="file" class="dropify" data-height="300" data-default-file="{{asset('category/'.$category->category_image_banner)}}" name="category_image_banner" value="">
							
						@else
							<input type="file" class="dropify" data-height="300" name="category_image_banner" value="">
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

</script>



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

