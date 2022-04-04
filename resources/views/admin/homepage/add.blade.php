@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet">
<style> .note-placeholder {
    display: none !important;
}
.class-for-margin{
	margin-bottom:50px
}
</style>

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

<div class="card">
<?php
$content = json_decode($homepage_content->content);

?>


	<div class="card-body">

		<form method="POST" action="{{ route('dashboard.homepage.store') }}" enctype="multipart/form-data">

			@csrf

			<div class="row">
				<div class="col-12">
					<input type="hidden" name="content" value="{{ isset($content) ? $content->content : '' }}">

					<input type="hidden" name="id" value="{{ isset($homepage) ? $homepage->id : '' }}">

					<div class="form-group">

						<label class="form-label">Title</label>

						<input type="text" class="form-control" name="title" placeholder="Title" value="{{isset($homepage) ? $homepage->title : '' }}" required>

					</div>

				</div>
				<div class="col-12">
					 <label class="form-label">Content</label> 

					 <?php //echo $content->content;?>

					 <div id="summernote">{{isset($content) ? $content->content : '' }}</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-md-12">
							<label class="form-label"> Main Slider Images</label> 
							<hr>
						</div>
						<div class="col-md-12">
							<button type ="button" class="btn btn-success btn-sm float-right btn-add" id="btn-add" name="btn-add" >+</button>
						</div>
					</div>
					<div class="append-silder">
						@if(isset($content->slider) && !empty($content->slider))
						<?php $i = 0; ?>
						@foreach($content->slider as $key => $val)
						<div class="row slider-content mt-2 class-for-margin">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<label class="form-label">Slider Image</label> 
										<input type="file" class="form-control" name="slider_image[{{$i}}][image]" value="" placeholder="image" >
										<input type="hidden" name="slider_image[{{$i}}][image_prev]" value="{{ isset($val->image)?$val->image:''}}">
									</div>
									<div class="col-md-8">
										<img src="{{url('img/slider/'.$val->image)}}"  height="100px">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-6">
										<label class="form-label">Responsive Image</label> 
										<input type="file" class="form-control" name="slider_image[{{$i}}][banner_mobile]" value="" placeholder="banner_mobile" >
										<input type="hidden" name="slider_image[{{$i}}][banner_mobile_prev]" value="{{ isset($val->banner_mobile)?$val->banner_mobile:''}}">
									</div>
									<div class="col-md-6">
										<img src="{{url('img/slider/'.$val->banner_mobile)}}"  height="100%"> 
									</div>

								</div>

							</div>
							<div class="col-md-2">
									<label class="form-label">Url</label> 
									<input type ="text" class="form-control" name="slider_image[{{$i}}][url]" value="{{$val->url}}" placeholder="url" required>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<label class="form-label">Slider Image(Arabic)</label> 
										<input type="file" class="form-control" name="slider_image[{{$i}}][slider_image_arabic]" value="" placeholder="image" >
										<input type="hidden" name="slider_image[{{$i}}][slider_image_arabic_prev]" value="{{ isset($val->slider_image_arabic)?$val->slider_image_arabic:''}}">
									</div>
									<div class="col-md-8">
										<img src="{{url('img/slider/'.$val->slider_image_arabic)}}"  height="100px">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-6">
										<label class="form-label">Responsive Image(Arabic)</label> 
										<input type="file" class="form-control" name="slider_image[{{$i}}][banner_mobile_arabic]" value="" placeholder="banner_mobile" >
										<input type="hidden" name="slider_image[{{$i}}][banner_mobile_arabic_prev]" value="{{ isset($val->banner_mobile_arabic)?$val->banner_mobile_arabic:''}}">
									</div>
									<div class="col-md-6">
										<img src="{{url('img/slider/'.$val->banner_mobile_arabic)}}"  height="100%"> 
									</div>

								</div>

							</div>
							<div class="col-md-2">
								<label class="form-label">Alt tag</label> 
								<input type ="text" class="form-control" name="slider_image[{{$i}}][slider_alt]"  placeholder="alt tag" value="{{isset($val->slider_alt) ? $val->slider_alt : '' }}">
							</div>
						</div>
						<?php $i++; ?>
						@endforeach
						@else
						<div class="row">
							<div class="col-md-6">
								<input type="file" class="form-control" name="slider_image[0][image]" value="" placeholder="image" >
							</div>
							<div class="col-md-6">
								<input type ="text" class="form-control" name="slider_image[0][url]" value="" placeholder="url" required>
							</div>
							<div class="col-md-6">
								<input type="file" class="form-control" name="slider_image[0][banner_responsive]" value="" placeholder="image" >

							</div>
						</div>
						@endif
					</div>
				</div>

			

				<div class="col-12">
				    	<label class="form-label mt-4"> Sale Images</label> 
                        <hr>
						<div class="row">
							<div class="col-md-2">
								<label class="form-label">url</label> 
								<input type ="text" class="form-control" name="sale_image[1][url]" value="{{isset($content->sale[0]) ? $content->sale[0]->url : ''}}" placeholder="banner url" required>
							</div>
							<div class="col-md-2">
								<label class="form-label">Alt tag</label> 
									<input type ="text" class="form-control" name="sale_image[1][sale_alt]"  placeholder="alt tag" value="{{isset($content->sale[0]) ? $content->sale[0]->sale_alt : ''}}">
							</div>
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-8">
										<label class="form-label">Sale image 1</label> 
										<input type ="file" class="form-control" name="sale_image[1][image]" value="" placeholder="banner image" >
										<input type="hidden" name="sale_image[1][sale_prev]" value="{{ isset($content->sale[0]->image)?$content->sale[0]->image:""}}" >
									</div>
									<div class="col-md-4">
										@if(!empty($content->sale))
											<img src="{{url('img/slider/'.$content->sale[0]->image)}}"  width="100%">
										@endif
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-8">
										<label class="form-label">Sale image 1(arabic)</label> 
										<input type ="file" class="form-control" name="sale_image[1][image_arabic]" value="" placeholder="banner image" >
										<input type="hidden" name="sale_image[1][sale_arabic_prev]" value="{{ isset($content->sale[0]->arabic_image)?$content->sale[0]->arabic_image:""}}" >
									</div>
									<div class="col-md-4">
										@if(!empty($content->sale))
											<img src="{{url('img/slider/'.$content->sale[0]->arabic_image)}}"  width="100%">
										@endif
									</div>
								</div>
							</div>
						</div>

					<div class="row mt-2">
		                <div class="col-md-2">
							<label class="form-label">url</label> 
							<input type ="text" class="form-control" name="sale_image[2][url]" value="{{isset($content->sale[1]) ? $content->sale[1]->url : ''}}" placeholder="banner url" required>
						</div>
						<div class="col-md-2">
								<label class="form-label">Alt tag</label> 
								<input type ="text" class="form-control" name="sale_image[2][sale_alt]"  placeholder="alt tag" value="{{isset($content->sale[1]) ? $content->sale[1]->sale_alt : ''}}">
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-8">
									<label class="form-label">Sale image 2</label> 
									<input type ="file" class="form-control" name="sale_image[2][image]" value="" placeholder="banner image" >
									<input type="hidden" name="sale_image[2][sale_prev]" value="{{ isset($content->sale[1]->image)?$content->sale[1]->image:""}}">
								</div>
								<div class="col-md-4">
									@if(!empty($content->sale[1]))
										<img src="{{url('img/slider/'.$content->sale[1]->image)}}"  width="100%">
									@endif
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-8">
									<label class="form-label">Sale image 2(arabic)</label> 
									<input type ="file" class="form-control" name="sale_image[2][image_arabic]" value="" placeholder="banner image" >
									<input type="hidden" name="sale_image[2][sale_arabic_prev]" value="{{ isset($content->sale[1]->arabic_image)?$content->sale[1]->arabic_image:""}}">
								</div>
								<div class="col-md-4">
									@if(!empty($content->sale[1]))
										<img src="{{url('img/slider/'.$content->sale[1]->arabic_image)}}"  width="100%">
									@endif
								</div>
							</div>
						</div>
					</div>



					<div class="row mt-2">
						<div class="col-md-2">
							<label class="form-label">url</label> 
							<input type ="text" class="form-control" name="sale_image[3][url]" value="{{isset($content->sale[2]) ? $content->sale[2]->url : ''}}" placeholder="banner url" required>
						</div>
						<div class="col-md-2">
								<label class="form-label">Alt tag</label> 
								<input type ="text" class="form-control" name="sale_image[3][sale_alt]"  placeholder="alt tag" value="{{isset($content->sale[2]) ? $content->sale[2]->sale_alt : ''}}">
						</div>
						<div class="col-md-4">
                         	<div class="row">
                        		<div class="col-md-8">
									<label class="form-label">Sale image 3</label> 
									<input type ="file" class="form-control" name="sale_image[3][image]" value="" placeholder="banner image" >
									<input type="hidden" name="sale_image[3][sale_prev]" value="{{ isset($content->sale[2]->image)?$content->sale[2]->image:""}}">
                                </div>
                        		<div class="col-md-4">
									@if(!empty($content->sale[2]))
										<img src="{{url('img/slider/'.$content->sale[2]->image)}}" width="100%">

									@endif
								</div>
							</div>
						</div>
						<div class="col-md-4">
                         	<div class="row">
                        		<div class="col-md-8">
									<label class="form-label">Sale image 3</label> 
									<input type ="file" class="form-control" name="sale_image[3][image_arabic]" value="" placeholder="banner image" >
									<input type="hidden" name="sale_image[3][sale_arabic_prev]" value="{{ isset($content->sale[2]->arabic_image)?$content->sale[2]->arabic_image:""}}">
                                </div>
                        		<div class="col-md-4">
									@if(!empty($content->sale[2]))
										<img src="{{url('img/slider/'.$content->sale[2]->arabic_image)}}" width="100%">

									@endif
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-12 mt-5">
						<label class="form-label"> Sale Banner Image</label> 
					     <hr>
                    <div class="row">
						<div class="col-md-2">
							<label class="form-label"> Sale Banner (English)</label> 
						</div>
                        <div class="col-md-6">
							<input type ="file" class="form-control" name="banner_img" value="" placeholder="banner image" >
							<input type="hidden" name="banner_img_prev" value="{{isset($content->banner_img) ? $content->banner_img: ''}}">
						</div>
                        <div class="col-md-4">
							@if(!empty($content->banner_img))
								<img src="{{url('img/slider/'.$content->banner_img)}}"  width="100%">
							@endif
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-md-2">
							<label class="form-label"> Sale Banner (Arabic)</label> 
						</div>
                        <div class="col-md-6">
							<input type ="file" class="form-control" name="arab_banner_img" value="" placeholder="banner image" >
							<input type="hidden" name="arab_banner_img_prev" value="{{isset($content->arab_banner_img) ? $content->arab_banner_img: ''}}">
						</div>
                        <div class="col-md-4">
							@if(!empty($content->banner_img))
								<img src="{{url('img/slider/'.$content->arab_banner_img)}}"  width="100%">
							@endif
						</div>
					</div>
					<div class="row">
						<label class="form-label">Sale Banner Alt tag</label> 
						<input type ="text" class="form-control" name="sale_banner_alt_tag"  placeholder="alt tag" value="{{isset($content->sale_banner_alt_tag) ? $content->sale_banner_alt_tag: ''}}">
					</div>
				</div>



				<div class="col-12">
					<label class="form-label">Advertisement Images</label> 
					<hr>
				 	<div class="row">
						 <div class ="col-md-2">
						 	<label class="form-label">Images(English)</label> 
						 </div>
                        <div class="col-md-6">
							<input type ="file" class="form-control" name="adv_img" value="" placeholder="banner image" >
							<input type="hidden" name="adv_img_prev" value="{{isset($content->adv_img) ? $content->adv_img: ''}}">
						</div>
                        <div class="col-md-4">
							@if(!empty($content->adv_img))
								<img src="{{url('img/slider/'.$content->adv_img)}}"  width="100px">
							@endif
						</div>
					</div>
					<div class="row mt-2">
						<div class ="col-md-2">
						 	<label class="form-label">Images(Arabic)</label> 
						 </div>
                        <div class="col-md-6">
							<input type ="file" class="form-control" name="arab_adv_img" value="" placeholder="banner image" >
							<input type="hidden" name="arab_adv_img_prev" value="{{isset($content->arab_adv_img) ? $content->arab_adv_img: ''}}">
						</div>
                        <div class="col-md-4">
							@if(!empty($content->adv_img))
								<img src="{{url('img/slider/'.$content->arab_adv_img)}}"  width="100px">
							@endif
						</div>
					</div>
					<div class="row">
						<label class="form-label">Advertisement Banner Alt tag</label> 
						<input type ="text" class="form-control" name="adv_alt_tag"  placeholder="alt tag" value="{{isset($content->adv_alt_tag) ? $content->adv_alt_tag: ''}}">
					</div>
				</div>

				<div class="col-12 mt-5">
				    	<label class="form-label mt-4">Gift Card Image</label> 
                        <hr>
						<div class="row">
							<div class="col-md-2">
								<label class="form-label">url</label> 
								<input type ="text" class="form-control" name="giftcard_image_url" value="{{isset($content->giftcard_image_url) ? $content->giftcard_image_url: ''}}" placeholder="banner url" required>
							</div>
							<div class="col-md-2">
								<label class="form-label">Alt tag</label> 
									<input type ="text" class="form-control" name="giftcard_image_alt"  placeholder="alt tag" value="{{isset($content->giftcard_image_alt) ? $content->giftcard_image_alt: ''}}">
							</div>
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-8">
										<label class="form-label">Giftcard image</label> 
										<input type ="file" class="form-control" name="giftcard_image" value="" placeholder="banner image" >
										<input type="hidden" name="prev_giftcard_image" value="{{isset($content->giftcard_image) ? $content->giftcard_image: ''}}" >
									</div>
									<div class="col-md-4">
										@if(!empty($content->sale))
											<img src="{{url('img/slider/'.$content->giftcard_image)}}"  width="100%">
										@endif
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-8">
										<label class="form-label">Gift Card Imaage(arabic)</label> 
										<input type ="file" class="form-control" name="arab_giftcard_image" value="" placeholder="banner image" >
										<input type="hidden" name="prev_arab_giftcard_image" value="{{ isset($content->arab_giftcard_image)?$content->arab_giftcard_image:""}}" >
									</div>
									<div class="col-md-4">
										@if(!empty($content->sale))
											<img src="{{url('img/slider/'.$content->arab_giftcard_image)}}"  width="100%">
										@endif
									</div>
								</div>
							</div>
						</div>
				</div>





				<div class="col-6">
					<label class="form-label">New Products Url</label> 
					<input type="text" class="form-control" name="new_product_url" placeholder="url" value="{{($data['new_product_url'])??''}}" >
				</div>
				<div class="col-6">

					<label class="form-label">Best Seller Url</label> 

					<input type="text" class="form-control" name="best_seller_url" placeholder="url" value="{{($data['best_seller_url'])??''}}" >

				</div>

				<div class="col-6">
					<label class="form-label">Meta title</label> 
					<input type="text" class="form-control" name="page_title" placeholder="Title" value="{{($data['Pagemeta_title'])??''}}" >

				</div>



				<div class="col-6">
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
	//$i = 1;
	$(".btn-add").click(function () {
		$i = jQuery('.slider-content').length;

		var html = '<div class="row slider-content mt-3">'+

							'<div class="col-md-4">'+

								'<input type="file" class="form-control" name="slider_image['+$i+'][image]" value="" placeholder="image">'+

							'</div>'+

							'<div class="col-md-4">'+

								'<input type ="text" class="form-control" name="slider_image['+$i+'][url]" value="" placeholder="url">'+


							'</div>'+



							'<div class="col-md-4">'+
									'<input type="file" class="form-control" name="slider_image['+$i+'][banner_responsive]" value="" placeholder="image">'+

							'</div>'+
					'</div>';

			$(".append-silder").append(html);
			//$i++;

	});



});



</script>







@endsection







