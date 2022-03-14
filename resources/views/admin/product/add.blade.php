@extends('layouts.vertical-menu.master')

@section('css')

<style>

.note-placeholder {
	display: none !important;
}

.sub_cat, .sub_sub_cat {
	display: none;
}

</style>

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
		<li class="breadcrumb-item">
			<a href="{{ route('dashboard.product.index') }}">Product</a>
		</li>
		 @if(isset($product->id))
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

		<form method="POST" action="{{ route('dashboard.product.store') }}" enctype="multipart/form-data">

			@csrf

			<div class="row">

				<input type="hidden" name="id" value="{{ isset($product) ? $product->id : '' }}">
				
				@if(Auth::user()->roles->first()->title == "Admin")	
				<div class="col-md-12">
					<div class="form-group">
						<label class="form-label">Select Vendor</label>
						<select name="vendorid" class="form-control select2" required >
							<option value="0">Select</option>
							@if(count($all_vendors) > 0)
								@foreach($all_vendors as $val)
									<option value="{{$val->id}}" {{isset($product) && ($product->vendor_id == $val->id) ? 'selected' : ''}}>{{$val->first_name}}</option>
								@endforeach
							@endif
						</select>
					</div>
				</div>
				@endif

				<div class="col-md-12">

					<div class="form-group">

						<label class="form-label">Procuct Name</label>

						<input type="hidden" name="pid" value="{{ isset($product->id)?$product->id:'' }}" class="pid" required>

						<input type="text" class="form-control" name="productname" placeholder="Name"  value="{{isset($product) ? $product->pname : '' }}">

					</div>

				</div>

				<div class="col-md-12">

					<div class="form-group mb-0">

						<label class="form-label">Short Discription</label>

						<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="text here.." required>{{isset($product) ? $product->short_description : '' }}</textarea>

					</div>

				</div>

				<div class="col-md-12">

					<div class="form-group mb-0">

						<label class="form-label">Detailed Discription</label>

                                                        <div id="summernote"><?php echo isset($product) ? $product->long_description : '' ?></div>

					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">Select Category</label>

						<select name="catid" class="form-control select2" id="pc" >
  						
							<option value="">Select</option>

							@if(count($category) > 0)

								@foreach($category as $val)

									<option value="{{$val->id}}" {{isset($product) && ($product->cat_id == $val->id) ? 'selected' : ''}}>{{$val->title}}</option>

								@endforeach

							@endif

						</select>

					</div>

				</div>

				<div class="col-md-6 @if(!isset($product)) sub_cat @endif">

					<div class="form-group">

						<label class="form-label">Sub Category</label>

						<select name="catid_2" class="form-control select2" id="subpc" class="pc_1">

						@if(!isset($product))
							<option value="">Select</option>
						@endif

							@if(isset($subcats) > 0)
								@foreach($subcats as $val)
									<option value="{{$val->id}}" {{isset($product) && ($product->cat_id_2 == $val->id) ? 'selected' : ''}}>{{$val->title}}</option>

								@endforeach

							@endif

						</select>

					</div>

				</div>

					<div class="col-md-6 @if(!isset($product)) sub_sub_cat @endif">

					<div class="form-group">

						<label class="form-label">Sub Category</label>

						<select name="catid_3" class="form-control select2" id="subc" class="pc_2">

							<option value="">Select</option>

							@if(isset($sub_sub_category) > 0)

								@foreach($sub_sub_category as $val)

									<option value="{{$val->id}}" {{isset($product) && ($product->cat_id_3 == $val->id) ? 'selected' : ''}}>{{$val->title}}</option>

								@endforeach

							@endif

						</select>

					</div>

				</div>
				@if(Auth::user()->roles->first()->title == "Admin" && !empty($product))
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Product Commission</label>
						<input type="text" class="form-control" name="commission" value ="{{isset($product) ? $product->commission : '' }}" >
					</div>
				</div>
				@endif
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Product Type</label>
						<select name="pro_type" class="form-control select2 pro_type" id="product_type" required>
								<option value="single" {{isset($product) && ($product->product_type == "single") ? 'selected' : ''}}>Single</option>
								<option value="variants" {{isset($product) && ($product->product_type == "variants") ? 'selected' : ''}}>Variants</option>
								<option value="giftcard" {{isset($product) && ($product->product_type == "variants") ? 'selected' : ''}}>Giftcard</option>
								<option value="card" {{isset($product) && ($product->product_type == "card") ? 'selected' : ''}}>Card</option>
						</select>
					</div>
				</div>


				<div class="col-md-6 pro-single">
					<div class="form-group">
						<label class="form-label">Select Attributes</label>
						<select name="attribute" class="form-control select2" id="select-single-attr" multiple>
							<option value="" hidden>Select Attributes</option>
						@if(count($attrdata) > 0)
						@foreach($attrdata as $key => $attr)	
								<option value="{{ $attr->id }}" {{isset($product) && array_key_exists($attr->id,$product_attr) ? 'selected' : ''}}>{{ $attr->name }}</option>
						@endforeach
						@endif
						</select>
					</div>
					<button class="btn btn-success btn-sm" type="button" id="make_attr_value_selection">Make attribute value selection
					</button>
				</div>
				<div class="col-md-6 pro-variants">
					<div class="form-group">
						<label class="form-label">Select Attributes</label>
						<select name="attribute" class="form-control select2" id="select-multi-attr" multiple>
							<option value="" hidden>Select Attributes</option>
						@if(count($attrdata) > 0)
						@foreach($attrdata as $key => $attr)	
								<option value="{{ $attr->id }}" {{isset($product) && array_key_exists($attr->id,$product_attr) ? 'selected' : ''}}>{{ $attr->name }}</option>
						@endforeach
						@endif
						</select>
					</div>
					<button class="btn btn-success btn-sm" type="button" id="make_attr_value_selection_multi">Make attribute value selection
					</button>
				</div>
				<div class="col-md-12">
					<div class ="row attrval">
						@isset($product)
						@foreach($product_attr as $key => $val)
						<?php
							$attr = App\Models\Attribute::where('id','=', $key)->first();
							$attrval= App\Models\AttributeValue::where('attr_id','=',$key)->get();
						?>
						@if($product->product_type == "single")
						<div class="col-md-6">
							<div class="form-group attrs">
							<label class="form-label">{{$attr->name}}</label>
							<select name="attrvalid[{{$attr->id}}][]" class="form-control select2" id="selectattr" multiple="">
								@if(count($attrval)>0)
  									@foreach($attrval as $aval)
									<option value="{{$aval->id}}" {{isset($val) && in_array($aval->id,$val) ? 'selected' : ''}} >{{$aval->attr_value_name}}</option>
									@endforeach
								@endif
							</select>
							</div>
						</div>
						@elseif($product->product_type == "variants")
						<div class="col-md-6">
						<div class="form-group attrs">
							<label class="form-label">{{$attr->name}}</label>
							<select name="{{$attr->slug}}[]" class="form-control select2" id="selectattr" multiple="">
							@if(count($attrval)>0)
  									@foreach($attrval as $aval)
									<option value="{{$aval->id}}" {{isset($val) && in_array($aval->id,$val) ? 'selected' : ''}} >{{$aval->attr_value_name}}</option>
									@endforeach
							@endif
							</select>
							</div>
						
						</div>
						@endif
						@endforeach
						@endisset
					</div>
					<div class ="row make-variation">
					@isset($product)
					@if($product->product_type == "variants")
						<div class ="col-md-3">
								<button class="btn btn-success btn-sm mb-2" type="button" id="make_variantions">Make Variantions</button>
						</div>
					@endif
					@endisset
					</div>
				</div>
				@if(!isset($product))
				<div class="col-md-12 show_variantions" style="display: none;">
					<div class="form-group">
						<table class="table table-hover">
						<thead>
							<tr>
								<th></th>
								<th>SKU</th>
								<th>Price</th>
								<th>Number of products</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody class="variantions_combinations">

						   </tbody>
						</table>
					</div>
				</div>
				@else
  					@if($product->product_type == 'variants')
					  <div class="col-md-12 show_variantions">
						<div class="form-group">
							<table class="table table-hover">
							<thead>
								<tr>
									<th></th>
									<th>SKU</th>
									<th>Price</th>
									<th>Number of products</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody class="variantions_combinations">
  									@if(count($prodductVariants) > 0)
									  @foreach($prodductVariants as $key => $pval)
<tr id="variant_row_1">
	<!-- <td>1</td> -->
	<td>

  	{{-- @foreach(json_decode($pval->variant_value) as $key_var => $val_var)variants --}}
  	@foreach($pval->variants as $key_var => $val_var)
			<strong>{{$key_var}}:{{$val_var}}</strong>
	@endforeach
	</td>
	<td>
		<input type="text" class="form-control"  value="{{$pval->variant_sku}}" name="variant_sku[{{$key}}][]">
	</td>
	<td>
		<input type="text" class="form-control"  value="{{$pval->variant_price}}" name="variant_price[{{$key}}][]">
	</td>
	<td>
		<input type="text" class="form-control"  value="{{$pval->variant_stock}}" name="variant_stock[{{$key}}][]">
	</td>
	<td>
		<img src="{{url('products/gallery')}}/{{json_decode($pval->variant_images)[0]}}" style="height:50px">
		<input type="hidden" name="prv_img[{{$key}}][]" value="{{($pval->variant_images)}}">
		<input type="file" class="form-control"  value="" name="variant_images[{{$key}}][]">
	{{-- <input type="hidden" name="variant_id[{{$key}}][]" value="{{$key}}"> --}}
	<input type="hidden" name="variant_value[{{$key}}][]" value="{{json_decode(json_encode($pval->variant_value))}}">
	</td>
	<td>
		<button class="delete_variant fa fa-trash btn btn-danger btn-sm" data-row="1">
		</button>
	</td>
</tr>
									  @endforeach
									@endif
								</tbody>
							</table>
						</div>
					</div>
					@endif
				@endif
				
				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">Sku </label>

						<input type="text" class="form-control" name="sku" placeholder="Sku" value="{{isset($product) ? $product->sku_id : '' }}" >

					</div>

				</div>
				@if(Auth::user()->roles->first()->title == "Admin")	
					<div class="col-md-12">
						<div class="row mt-5">
							<div class="col-md-12">
							  <h4>Shipping Methods<h4>
								<hr>
							</div>
							<div class="col-md-12">
							@if($ship_meth_1->is_available == 1)
							  <div class="row">
								<div class="col-md-4">     
								  <div class="form-group">
									<label class="switch">
										<input type="checkbox" id="free" name="free" {{ isset($checkvendorshiipingmethod1) && ($checkvendorshiipingmethod1->is_available == 1) ?  'checked' : '' }} onchange="freeship()">
										<span class="slider round"></span>
									</label>
									<label for="scales">Free Shipping</label>
								  </div>
								</div>
								<div class="col-md-4 order-limit">   
								  <input type="number" class="form-control" name="order_limit" value="{{ isset($checkvendorshiipingmethod1) ? $checkvendorshiipingmethod1->min_order_free : '' }}" placeholder="order limit" > 
								</div>
								<div class="col-md-4">   
								</div>
							  </div>
							@endif
							@if($ship_meth_2->is_available == 1)
							  <div class="row">
								<div class="col-md-4">
								  <div class="form-group">
									<label class="switch">
									  <input type="checkbox" id="fixed" name="fixed" {{ isset($checkvendorshiipingmethod2) && ($checkvendorshiipingmethod2->is_available == 1) ?  'checked' : '' }} onchange="fixedship()">
									  <span class="slider round"></span>
									</label>
								  <label for="scales">Fixed Shipping</label>
								  </div>
								</div>
								<div class="col-md-4 shipping-price">   
								  <input type="number" class="form-control" name="shipping_price" value="{{ isset($checkvendorshiipingmethod2) ? $checkvendorshiipingmethod2->ship_price : '' }}" placeholder="shipping price"> 
								</div>
								<div class="col-md-4">   
								</div>
							  </div>
							@endif
							@if($ship_meth_3->is_available == 1)
							  <div class="row">
								<div class="col-md-4">
								  <div class="form-group">
									<label class="switch">
									  <input type="checkbox" id="wasil" name="wasil" {{ isset($checkvendorshiipingmethod3) && ($checkvendorshiipingmethod->is_available == 1) ?  'checked' : '' }}>
									  <span class="slider round"></span>
									</label>
									<label for="scales">Wasil Shipping</label>
								  </div>
								</div>
							  </div>
							@endif
							</div>
						  </div>
					</div>
				@endif
				@if(Auth::user()->roles->first()->title == "Vendor")
				<div class="col-md-12">
					@if($checkvendorshiipingmethod1 != null && $checkvendorshiipingmethod1->is_available == 1)
					  <div class="row">
						<div class="col-md-4">     
						  <div class="form-group">
							<label class="switch">
								<input type="checkbox" id="free" name="free"  onchange="freeship()">
								<span class="slider round"></span>
							</label>
							<label for="scales">Free Shipping</label>
						  </div>
						</div>
						<div class="col-md-4 order-limit">   
						  <input type="number" class="form-control" name="order_limit" value="" placeholder="order limit" > 
						</div>
						<div class="col-md-4">   
						</div>
					  </div>
					@endif
					@if($checkvendorshiipingmethod2 != null && $checkvendorshiipingmethod2->is_available == 1)
					  <div class="row">
						<div class="col-md-4">
						  <div class="form-group">
							<label class="switch">
							  <input type="checkbox" id="fixed" name="fixed" onchange="fixedship()">
							  <span class="slider round"></span>
							</label>
						  <label for="scales">Fixed Shipping</label>
						  </div>
						</div>
						<div class="col-md-4 shipping-price">   
						  <input type="number" class="form-control" name="shipping_price" value="{{ isset($checkvendorshiipingmethod2) ? $checkvendorshiipingmethod2->ship_price : '' }}" placeholder="shipping price"> 
						</div>
						<div class="col-md-4">   
						</div>
					  </div>
					@endif
					@if($checkvendorshiipingmethod3 != null && $checkvendorshiipingmethod3->is_available == 1)
					  <div class="row">
						<div class="col-md-4">
						  <div class="form-group">
							<label class="switch">
							  <input type="checkbox" id="wasil" name="wasil" >
							  <span class="slider round"></span>
							</label>
							<label for="scales">Wasil Shipping</label>
						  </div>
						</div>
					  </div>
					@endif
				  </div>
				@endif

				<div class="col-md-6 ship-type">

					<div class="form-group">

						<label class="form-label">Fixed Shipping Price</label>

						<input type="text" name="shipping_price" value="{{isset($product) ? $product->shipping_charge : '' }}" class="form-control" >

					</div>

				</div>

				<!-- <div class="col-md-6">

					<div class="form-group">

						<label class="form-label">Shipping Price</label>

						<input type="text" name="shipping_price" value="{{isset($product) ? $product->shipping_charge : '' }}" class="form-control" >

					</div>

				</div> -->

				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">Purchase Price</label>

						<input type="number" class="form-control" name="purchase" placeholder="Purchase Price" value="{{isset($product) ? $product->p_price : '' }}" required>

					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">Selling Price</label>

						<input type="number" class="form-control" name="selling" placeholder="Selling Price" value="{{isset($product) ? $product->s_price : '' }}" required>

					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">Tax Apply</label>

						<select class="form-control select2" name="tax_apply" id="tax_apply" >

						<option value="exclude" {{isset($product) && ($product->tax_apply == "exclude") ? 'selected' : ''}}>Tax Exclude</option>

							<option value="include" {{isset($product) && ($product->tax_apply == "include") ? 'selected' : ''}}>Taxt Include</option>

						</select>

					</div>

				</div>

				<div class="col-md-6 tax-type" >

					<div class="form-group">

						<label class="form-label">Tax(in %)</label>

						<select class="form-control select2" name="tax" >

						<option value="">Select Tax type</option>

						@if(count($tax)>0)

							@foreach($tax as $key => $tax)

							<option value="{{$tax->id}}" {{isset($product) && ($product->tax_type == $tax->id)}}>{{$tax->title}}</option>

							@endforeach

						@endif

						</select>

					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">Number of products</label>

						<input type="number" class="form-control" name="stock" placeholder="Stock" value="{{isset($product) ? $product->in_stock : '' }}" >

					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">Return Policy</label>

						<select class="form-control select2" name="return_days">

						<option value="none">None</option>

						<option value="1">1</option>

						<option value="2">2</option>

						<option value="3">3</option>

						<option value="4">4</option>

						<option value="5">5</option>

						<option value="6">6</option>

						<option value="7">7</option>

						<option value="8">8</option>

						<option value="9">9</option>

						<option value="10">10</option>

						<option value="11">11</option>

						<option value="12">12</option>

						<option value="13">13</option>

						<option value="14">14</option>

						<option value="15">15</option>

						<option value="16">16</option>

						<option value="17">17</option>

						<option value="18">18</option>

						<option value="19">19</option>

						<option value="20">20</option>

						<option value="21">21</option>

						<option value="22">22</option>

						<option value="23">23</option>

						<option value="24">24</option>

						<option value="25">25</option>

						<option value="26">26</option>

						<option value="27">27</option>

						<option value="28">28</option>

						<option value="29">29</option>

						<option value="30">30</option>

						<option value="31">31</option>

						</select>

					</div>

				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Offer Start Date</label>
						<input type="datetime-local" class="form-control" name="discount_start" placeholder="discount" value="{{isset($product) ? $product->offer_start_date : '' }}" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Offer End Date</label>
						<input type="datetime-local" class="form-control" name="discount_end" placeholder="discount" value="{{isset($product) ? $product->offer_end_date : '' }}" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Discount</label>
						<input type="number" class="form-control" name="offer_discount" placeholder="discount" value="{{isset($product) ? $product->offer_discount : '' }}" >
					</div>
				</div>

				<div class="col-md-12">

					<div class="form-group">

						<label class="form-label">Meta Title</label>

						<input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="{{isset($product) ? $product->meta_title : '' }}" >

					</div>

				</div>

				<div class="col-md-12">

					<div class="form-group">

						<label class="form-label">Meta Keyword</label>

						<textarea name="meta_keyword" class="form-control" placeholder="Meta Keyword" value="" rows="6" >{{isset($product) ? $product->meta_keyword : '' }}</textarea>

					</div>

				</div>

				<div class="col-md-12">

					<div class="form-group">

						<label class="form-label">Meta Discription</label>

						<textarea name="meta_description" class="form-control" placeholder="Meta Description" value="{{isset($product) ? $product->meta_description : '' }}" rows="6" >{{isset($product) ? $product->meta_description : '' }}</textarea>

					</div>

				</div>

				<div class="col-md-12">

					<label class="form-label mt-0">Featured Image</label>

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
						@if(isset($product->featured_image))
							<input type="file" class="dropify" data-height="300" data-default-file="{{asset('products/feature/'.$product->featured_image)}}" name="featured_image" value="">
							
						@else
							<input type="file" class="dropify" data-height="300" name="featured_image" value="">
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

				<div class="col-md-12 mt-2">
					@if(isset($product->gallery_image))
					@php
						$value = json_decode($product->gallery_image);
						
					@endphp
					@if(!empty($value))
					@foreach($value as $multidata)
	                    <div class="parc">
	                    	<span class="pip" data-title="{{$multidata}}">
	                      	<img src="{{ url('products/gallery').'/'.$multidata ?? "" }}" alt="" width="100" height="100">
	                      	<a class="btn"><i class="pe-7s-trash remove" onclick="removeImage('{{$multidata}}')"></i></a> 
	                    </div>
	               @endforeach
				   @endif
	                  <input type ="hidden" name="gallery_image1" id="gallery_img" value="{{$product->gallery_image}}">
	               @endif
                
					<label class="form-label mt-0">Gallery</label>
					<input type="file" class="form-control" name="gallery_image[]" value="" multiple>
				</div>

				<div class="col-md-3 mt-2">
					<label class="switch">
						<input type="checkbox" id="featured" name="featured" {{ isset($product) && ($product->featured == 1) ?  'checked' : '' }}>
						<span class="slider round"></span>
					</label>
					<label for="scales">Featured</label>
				</div>
				<div class="col-md-3 mt-2">
					<label class="switch">
						<input type="checkbox" id="new" name="new" {{ isset($product) && ($product->new == 1) ?  'checked' : '' }}>
						<span class="slider round"></span>
					</label>
					<label for="scales">New</label>
				</div>
				<div class="col-md-3 mt-2">
						<label class="switch">
							<input type="checkbox" id="best_saller" name="best_saller" {{ isset($product) && ($product->best_saller == 1) ?  'checked' : '' }}>
							<span class="slider round"></span>
						</label>
						<label for="scales">Best Saller</label>
				</div>
				@if(Auth::user()->roles->first()->title == "Admin")	
					<div class="col-md-3 mt-2">
							<label class="switch">
								<input type="checkbox" id="top" name="top_hundred" {{ isset($product) && ($product->top_hunderd == 1) ?  'checked' : '' }}>
								<span class="slider round"></span>
							</label>
							<label for="scales">Top 100</label>
					</div>
				@endif



	</div>

	@if(isset($product->id))
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

		if($('#product_type').val() == 'single'){
			
			$(".pro-variants").hide();
			$(".pro-single").show();

		}
		if($('#product_type').val() == 'variants'){
			$(".pro-variants").show();
			$(".pro-single").hide();
			
		}

		$('.ship-type').hide();
		$(document).on('change', '#fix_apply', function(e) {

		if($(this).find(":selected").val() == '2') {

			$('.ship-type').show();

		} else {

			$('.ship-type').hide();

		}

		});

		$('.tax-type').hide();

		$(document).on('change', '#tax_apply', function(e) {

		if($(this).find(":selected").val() == 'include') {

			$('.tax-type').show();

		} else {

			$('.tax-type').hide();

		}

		});

		$(document).on('change', '#pc', function(event) {

		//

		var pcat = $(this).val();

		$('.sub_sub_cat').hide();



		if(pcat != '0') {

			$.get('{{ url('dashboard/get-category') }}/'+pcat, function(data) {

			//

			$("#subpc").html(data.html);

			});  

			$('.sub_cat').show();

		} 

		else {

			$('.sub_cat').hide();

		}

		});

		$(document).on('change', '#subpc', function(event) {

		//

		var pcat = $(this).val();

		if(pcat != '0') {

			$.get('{{ url('dashboard/get-category') }}/'+pcat, function(data) {

			//

			$("#subc").html(data.html);

			});  

			$('.sub_sub_cat').show();

		} 

		else {

			$('.sub_sub_cat').hide();

		}

		});

		$(document).on('change', '#product_type', function(event) {
			var pro_type = $('#product_type').val();
			if(pro_type == "variants"){
				$('.pro-single').hide();
				$(".pro-variants").show();
			}
		});
		$(document).on('click', '.delete_variant', function(e){
			e.preventDefault();
			$('#variant_row_'+$(this).attr('data-row')).remove();
		});
		$('#make_attr_value_selection').on('click',function(e) {
			
			var attrid = $('#select-single-attr').val();
			$.ajax({
						url: "{{ route("dashboard.get-attr-value-single") }}",
						type: "POST",
						data: {
							attrid: attrid,
							_token: '{{csrf_token()}}'
						},
						dataType: 'json',
						success: function (result) {
							$('.attrval').html(result);
							$(".select2").select2();
						
						}
					});
		});
		$('#make_attr_value_selection_multi').on('click',function(e) {
			
			var attrid = $('#select-multi-attr').val();
			var html = '<div class ="col-md-3">'+
								'<button class="btn btn-success btn-sm" type="button" id="make_variantions">Make Variantions</button>'+
						'</div>';
		
			$.ajax({
						url: "{{ route("dashboard.get-attr-select") }}",
						type: "POST",
						data: {
							attrid: attrid,
							_token: '{{csrf_token()}}'
						},
						dataType: 'json',
						success: function (result) {
							$('.attrval').html(result);
							$('.make-variation').html(html);
							$(".select2").select2();
						
						}
					});

		});
		$(document).on("click", "#make_variantions" , function(e) {
			e.preventDefault();
			var formData = new FormData();
			$('.attrval > div.col-md-6').each(function( index,element ) {
				var name = $(this).find('select.form-control').attr('name');
				formData.append(name, $(this).find('select.form-control').val());
			});
			formData.append('_token', '{{ csrf_token() }}');
			$.ajax({
				url: '{{ route("dashboard.create-varient") }}',
				type: 'POST',
				data: formData,
				datatype: 'JOSN',
				processData: false,
				contentType: false,
				success: function (response) {
				// $('.cus_variants').hide();
				$('.hidevariationSelection').hide();
				$('.show_variantions').show();
				$('.variantions_combinations').html(response.html);
				},

				error: function (response) {

				}

			});

		});



	});

</script>
<script>
		function removeImage(data){
		console.log(data);
	    var inputvalue = $('#gallery_img').val();
	    var ary = JSON.parse(inputvalue);
	    console.log(ary);

		ary.splice( $.inArray(data,ary) ,1 );
	    var asd = JSON.stringify(ary);
	   $('.pip[data-title="'+data+'"]').remove();
	   $('#gallery_img').val(asd);
	}
</script>
<script type="text/javascript">

	function freeship()
	{
		if($('#free').is(":checked"))   
			$(".order-limit").show();
		else
			$(".order-limit").hide();
	}
	function fixedship()
	{
		if($('#fixed').is(":checked"))   
			$(".shipping-price").show();
		else
			$(".shipping-price").hide();
	}
</script>



@endsection

