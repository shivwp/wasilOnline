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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('page-header')
<div>
	<h1 class="page-title">{{$title}}</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('dashboard.product.index') }}">Gift-card</a></li>
		@if(isset($GiftCard->id))
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
		<form method="POST" action="{{ route('dashboard.gift-card.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<input type="hidden" name="id" value="{{ isset($GiftCard) ? $GiftCard->id : '' }}">
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Title</label>
						<input type="text" class="form-control" name="title" placeholder="title"  value="{{isset($GiftCard) ? $GiftCard->title : '' }}">
					</div>
				</div>



				<div class="col-md-6">



					<div class="form-group">



						<label class="form-label">Amount</label>

						<input type="text" name="amount" value="{{isset($GiftCard) ? $GiftCard->amount : ''}}" data-role="tagsinput" id="tags" class="form-control">

						<input type="hidden" name="amount_val" id="tag_val" value="">



					</div>



				</div>

				<div class="col-md-12">

					<div class="form-group">

						<label class="form-label">Select Product</label>

						<select class="form-control select2" name="productid">

						@if(count($products)>0)

							@foreach($products as $key => $p_val)

							<option value="{{$p_val->id}}" {{isset($GiftCard) && ($GiftCard->product_id == $p_val->id) ? 'selected' : ''}}>{{$p_val->pname}}</option>

							@endforeach

						@endif

						</select>



					</div>

				</div>



				<div class="col-md-6">



					<div class="form-group">



						<label class="form-label">Valid Days</label>



						<input type="number" class="form-control" name="valid_days" placeholder="valid days"  value="{{isset($GiftCard) ? $GiftCard->valid_days : '' }}">



					</div>



				</div>



				<div class="col-md-6">



					<div class="form-group">



						<label class="form-label">Status</label>



						<select class="form-control select2" name="status">



							<option value="">status</option>



							<option value="1" {{isset($GiftCard) && ($GiftCard->status == '1') ? 'selected' : '' }}>Active</option>



							<option value="0" {{isset($GiftCard) && ($GiftCard->status == '0') ? 'selected' : '' }}>Deactive</option>



						</select>



					</div>



				</div>



				<div class="col-md-6">



					<div class="form-group">



						<label class="form-label">Description</label>



						<textarea class="form-control" name="description" placeholder="Name"  value="" rows="12">{{isset($GiftCard) ? $GiftCard->description : '' }}</textarea>



					</div>



				</div>



				



				<div class="col-md-6">



					<label class="form-label mt-0">Image</label>



					<div class="dropify-wrapper" style="height: 302px;border: 1px solid #cdcdcd;"><div class="dropify-message" >



						<span class="file-icon"> <p>Drag and drop a file here or click</p>



						</span>



						<p class="dropify-error">Ooops, something wrong appended.</p>



					</div>



					<div class="dropify-loader"></div><div class="dropify-errors-container">



						<ul>



						</ul>



					</div>


					
					<input type="file" class="dropify" data-height="300" name="image" value="" data-default-file="{{isset($GiftCard->image)? url('giftcard/'.$GiftCard->image) : ''}}">



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



	@if(isset($GiftCard->id))

				<button class="btn btn-success-light mt-3 " type="submit">Update</button>

			@else

				<button class="btn btn-success-light mt-3 " type="submit">Save</button>

			@endif



</form>



</div>



</div>	

<style>

	.bootstrap-tagsinput {

    background-color: #fff;

    border: 1px solid #ccc;

    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);

    display: block;

    padding: 4px 6px;

    color: #555;

    vertical-align: middle;

    border-radius: 4px;

    max-width: 100%;

    line-height: 22px;

    cursor: text;

}

.bootstrap-tagsinput input {

    border: none;

    box-shadow: none;

    outline: none;

    background-color: transparent;

    padding: 0 6px;

    margin: 0;

    width: auto;

    max-width: inherit;

}

</style>				



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



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>



	$(document).ready(function() {



		$('#dataTable').DataTable();



	});

	$(document).ready(function() {

		$("#tags").change(function(){

			

			var tagval = $('input[name="amount"]').val();

			$('#tag_val').val(tagval);



		

		});

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



