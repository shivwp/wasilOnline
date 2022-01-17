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

		<li class="breadcrumb-item"><a href="{{ route('dashboard.product.index') }}">Home page</a></li>

		<li class="breadcrumb-item active" aria-current="page">Edit</li>

	</ol>

</div>



<!-- PAGE-HEADER END -->

@endsection



@section('content')
<!-- ROW-1 OPEN-->

<div class="card">
<?php
$content = json_decode($homepage_content->content);
//dd($content);
?>


	<div class="card-body">

		<form method="POST" action="{{ route('dashboard.homepage.store') }}" enctype="multipart/form-data">

			@csrf

			<div class="row">
				<div class="col-12">
					<input type="hidden" name="content" value="{{ isset($homepage) ? $homepage->content : '' }}">
					<input type="hidden" name="id" value="{{ isset($homepage) ? $homepage->id : '' }}">
					<div class="form-group">
						<label class="form-label">Title</label>
						<input type="text" class="form-control" name="title" placeholder="Title" value="{{isset($homepage) ? $homepage->title : '' }}">
					</div>
				</div>

				<div class="col-12">
					 <label class="form-label">Content</label> 

					 <?php //echo $content->content;?>
					 <div id="summernote">{{isset($content) ? $content->content : '' }}</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-md-6 mb-2">
						<label class="form-label">Slider Images</label> 
						</div>
						<div class="col-md-6 mb-2">
							<button type ="button" class="btn btn-success btn-sm float-right btn-add" id="btn-add" name="btn-add" >+</button>
						</div>
					</div>
					<div class="append-silder">
						@if(!isset($content->slider) && empty($content->slider))
						<div class="row">
							<div class="col-md-6">
								<input type="file" class="form-control" name="silder_image[0][image]" value="" placeholder="image">
							</div>
							<div class="col-md-6">
								<input type ="text" class="form-control" name="silder_image[0][url]" value="" placeholder="url">
							</div>
						</div>
						@else
						@foreach($content->slider as $key => $val)
						<div class="row">
							<div class="col-md-6">
								<input type="file" class="form-control" name="silder_image[0][image]" value="" placeholder="image">
								<img src="{{url('img/slider/'.$val->image)}}"  height="100px">
							</div>
							<div class="col-md-6">
								<input type ="text" class="form-control" name="silder_image[0][url]" value="{{$val->url}}" placeholder="url">
							</div>
						</div>
						@endforeach
						@endif
					</div>
				</div>
				<div class="col-12">
					<label class="form-label">Sale images</label> 
					<div class="row">
						<div class="col-md-6">
						<label class="form-label">Sale image 1</label> 
							<input type ="file" class="form-control" name="sale_image[1][image]" value="" placeholder="banner image">
							@if(!empty($content->sale))
							<img src="{{url('img/slider/'.$content->sale[0]->image)}}"  height="100px">
							@endif
						</div>
						<div class="col-md-6">
						<label class="form-label">url</label> 
						<input type ="text" class="form-control" name="sale_image[1][url]" value="{{isset($content->sale[0]) ? $content->sale[0]->url : ''}}" placeholder="banner url">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
						<label class="form-label">Sale image 2</label> 
							<input type ="file" class="form-control" name="sale_image[2][image]" value="" placeholder="banner image">
						@if(!empty($content->sale[1]))
						<img src="{{url('img/slider/'.$content->sale[1]->image)}}"  height="100px">
						@endif
						</div>
						<div class="col-md-6">
						<label class="form-label">url</label> 
						<input type ="text" class="form-control" name="sale_image[2][url]" value="{{isset($content->sale[1]) ? $content->sale[1]->url : ''}}" placeholder="banner url">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
						<label class="form-label">Sale image 3</label> 
							<input type ="file" class="form-control" name="sale_image[3][image]" value="" placeholder="banner image">
						@if(!empty($content->sale[2]))
						<img src="{{url('img/slider/'.$content->sale[2]->image)}}"  height="100px">
						@endif
						</div>
						<div class="col-md-6">
						<label class="form-label">url</label> 
						<input type ="text" class="form-control" name="sale_image[3][url]" value="{{isset($content->sale[2]) ? $content->sale[2]->url : ''}}" placeholder="banner url">
						</div>
					</div>

				</div>
				<div class="col-12">
					<label class="form-label">Advertisement Images</label> 
					<input type ="file" class="form-control" name="adv_img" value="" placeholder="banner image">
					@if(!empty($content->adv_img))
					<img src="{{url('img/slider/'.$content->adv_img)}}"  height="100px">
					@endif
				</div>
				<div class="col-12">
					<label class="form-label">Banner Image</label> 
					<input type ="file" class="form-control" name="banner_img" value="" placeholder="banner image">
					@if(!empty($content->banner_img))
					<img src="{{url('img/slider/'.$content->banner_img)}}"  height="100px">
					@endif
				
				</div>
				<div class="col-12">
					<label class="form-label">Meta title</label> 
					<input type="text" class="form-control" name="page_title" placeholder="Title" value="{{($data['Pagemeta_title'])??''}}">
				</div>
				<div class="col-12">
					<label class="form-label">Meta Deatils</label> 
					<textarea type="text" class="form-control" name="page_details" row="20" placeholder="Title" value="">{{($data['Pagemeta_details'])??''}}</textarea>
				</div>
			</div>

			@if(isset($homepage->id))
				<button class="btn btn-success-light mt-3 " type="submit">Update</button>
			@else
				<button class="btn btn-success-light mt-3 " type="submit">Save</button>
			@endif

		</form>

	</div>

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

</script>
<script>
$(document).ready(function(){
	$i = 1;
	$(".btn-add").click(function () {
		var html = '<div class="row mt-3">'+
							'<div class="col-md-6">'+
								'<input type="file" class="form-control" name="silder_image['+$i+'][image]" value="" placeholder="image">'+
							'</div>'+
							'<div class="col-md-6">'+
								'<input type ="text" class="form-control" name="silder_image['+$i+'][url]" value="" placeholder="url">'+
							'</div>'+
					'</div>';
			$(".append-silder").append(html);
			$i++;
	});
});
</script>

@endsection

