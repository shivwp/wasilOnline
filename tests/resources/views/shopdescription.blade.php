@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Product Detials</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Product Detials</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-lg-8 col-md-12">
								<div class="card productdesc">
									<div class="card-body">
										<div class="productdec text-center">
											<div class="bg-light-gray p-6 text-center">
												<img alt="Product" src="{{URL::asset('assets/images/pngs/3.png')}}">
											</div>
										</div>
										<div class="text-center mt-5 pb-5 border-bottom">
											<a href="#" class="btn btn-primary"><i class="ti-shopping-cart"> </i> Add to cart</a>
											<a href="#" class="btn btn-secondary"><i class="ti-shopping-cart"> </i> Buy Now</a>
										</div>

										<div class="mt-4 mb-4">
											<h3>Lenovo Ideapad 330 Pentium Quad Core </h3>
											<h5 class="mb-3 mt-2">Description</h5>
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
											<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized .</p>
										</div>
										<div class="panel panel-primary">
											<div class="tab-menu-heading">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#tab1" class="active" data-toggle="tab">Specification</a></li>
														<li><a href="#tab2" data-toggle="tab">Dimensions</a></li>
														<li><a href="#tab3" data-toggle="tab">Reviews(2)</a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body">
												<div class="tab-content">
													<div class="tab-pane active" id="tab1">
														<h4 class="mb-5 mt-3">General</h4>
														<ul class="list-unstyled mb-0">
															<li class="row">
																<div class="col-sm-3 text-muted">Brand</div>
																<div class="col-sm-3">CASAMOTION</div>
															</li>
															<li class=" row">
																<div class="col-sm-3 text-muted">Model Number</div>
																<div class="col-sm-3">AHLF016</div>
															</li>
															<li class="p-b-20 row">
																<div class="col-sm-3 text-muted">Model Name</div>
																<div class="col-sm-3">casamotion</div>
															</li>
															<li class="p-b-20 row">
																<div class="col-sm-3 text-muted">Suitable For</div>
																<div class="col-sm-3">Table, Floor</div>
															</li>
															<li class="p-b-20 row">
																<div class="col-sm-3 text-muted">Material</div>
																<div class="col-sm-3">Wood</div>
															</li>
															<li class="p-b-20 row">
																<div class="col-sm-3 text-muted">Color</div>
																<div class="col-sm-3">Brown</div>
															</li>
														</ul>
													</div>
													<div class="tab-pane" id="tab2">
														<ul class="list-unstyled mb-0">
															<li class="row">
																<div class="col-sm-3 text-muted">Width</div>
																<div class="col-sm-3">6.1 inch</div>
															</li>
															<li class=" row">
																<div class="col-sm-3 text-muted">Height</div>
																<div class="col-sm-3">24 inch</div>
															</li>
															<li class="p-b-20 row">
																<div class="col-sm-3 text-muted">Depth</div>
																<div class="col-sm-3">6.1 inch</div>
															</li>
															<li class="p-b-20 row">
																<div class="col-sm-3 text-muted">Other Dimensions</div>
																<div class="col-sm-3">15.5*15.5*24CM</div>
															</li>
														</ul>
													</div>
													<div class="tab-pane" id="tab3">
														<div class="media mb-5">
															<div class=" mr-3">
																<a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{URL::asset('assets/images/users/5.jpg')}}"> </a>
															</div>
															<div class="media-body">
																<h5 class="mt-0 mb-0">Gavin Murray</h5>
																<div class="text-warning mb-0">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<p class="font-13 text-muted mb-0">Good Looking.........</p>
																<a href=""><span class="badge btn-custom badge-pill">Reply</span></a>
															</div>
														</div>
														<div class="media mb-5">
															<div class=" mr-3">
																<a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{URL::asset('assets/images/users/15.jpg')}}"> </a>
															</div>
															<div class="media-body">
																<h5 class="mt-0 mb-0">Paul Smith</h5>
																<div class="text-warning mb-0">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<p class="font-13 text-muted mb-0">Very nice ! On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the </p>
																<a href=""><span class="badge btn-custom badge-pill">Reply</span></a>
															</div>
														</div>
														<h5 class="mb-3">Add Review</h5>
														<form class="form-horizontal  m-t-20" action="index.html">
															<div class="form-group">
																<div class="col-xs-12">
																	<input class="form-control" type="text" required="" placeholder="Username*">
																</div>
															</div>
															<div class="form-group">
																<div class="col-xs-12">
																	<input class="form-control" type="email" required="" placeholder="Email*">
																</div>
															</div>
															<div class="form-group">
																<div class="col-xs-12">
																	<textarea class="form-control" rows="5">Your Review*</textarea>
																</div>
															</div>
															<div class="">
																<a href="#" class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</a>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> Categories &amp; Fliters</div>
									</div>
									<div class="card-body">
										<div class="custom-checkbox custom-control">
											<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" checked="">
											<label for="checkbox-1" class="custom-control-label">Mens</label>
										</div>
										<div class="custom-checkbox custom-control">
											<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
											<label for="checkbox-2" class="custom-control-label">Womens</label>
										</div>
										<div class="custom-checkbox custom-control">
											<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
											<label for="checkbox-3" class="custom-control-label">Kids</label>
										</div>
										<div class="custom-checkbox custom-control">
											<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
											<label for="checkbox-4" class="custom-control-label">Others</label>
										</div>
										<div class="form-group mt-3">
											<label class="form-label">Category</label>
											<select name="beast" id="select-beast" class="form-control custom-select">
												<option value="0">--Select--</option>
												<option value="1">Dress</option>
												<option value="2">Bags &amp; Purses</option>
												<option value="3">Coat &amp; Jacket</option>
												<option value="4">Beauty</option>
												<option value="5">Jeans</option>
												<option value="5">Jewellery</option>
												<option value="5">Electronics</option>
												<option value="5">Sports</option>
												<option value="5">Technology</option>
												<option value="5">Watches</option>
												<option value="5">Accessories</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label">Brand</label>
											<select name="beast" id="select-beast1" class="form-control custom-select">
												<option value="0">--Select--</option>
												<option value="1">White</option>
												<option value="2">Black</option>
												<option value="3">Red</option>
												<option value="4">Green</option>
												<option value="5">Blue</option>
												<option value="6">Yellow</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label">Type</label>
											<select name="beast" id="select-beast2" class="form-control custom-select">
												<option value="0">--Select--</option>
												<option value="1">Extra Small</option>
												<option value="2">Small</option>
												<option value="3">Medium</option>
												<option value="4">Large</option>
												<option value="5">Extra Large</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label">Color</label>
											<select name="beast" id="select-beast3" class="form-control custom-select">
												<option value="0">--Select--</option>
												<option value="1">White</option>
												<option value="2">Black</option>
												<option value="3">Red</option>
												<option value="4">Green</option>
												<option value="5">Blue</option>
												<option value="6">Yellow</option>
											</select>
										</div>
										<a class="btn btn-primary " href="#">Apply Filter</a>
										<a class="btn btn-danger" href="#">Search Now</a>
									</div>
								</div>
								<div class="card productdesc-1">
									<div class="card-body bg_gray">
										<div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
											<div class="carousel-inner ">
												<div class="carousel-item">
													<img class="pro_img" alt="Product" src="{{URL::asset('assets/images/pngs/1.png')}}">
													<div class="carouselproduct mt-4 text-center">
														<h5 class=""><a href="product-details.html">Lather Watch</a></h5>
														<ul class="product_price list-unstyled">
															<li class="old_price">$999.00</li>
															<li class="new_price">$799.00</li>
														</ul>
														<div class="mb-3 mt-2 text-warning">
															<i class=" fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#" class="btn btn-primary"><i class="ti-shopping-cart"></i> Buy Now</a>
													</div>
												</div>
												<div class="carousel-item active">
													<img class="pro_img " alt="Product" src="{{URL::asset('assets/images/pngs/2.png')}}">
													<div class="carouselproduct mt-4 text-center">
														<h5 class=""><a href="product-details.html">Smart Watch</a></h5>
														<ul class="product_price list-unstyled">
															<li class="old_price">$87.00</li>
															<li class="new_price">$25.00</li>
														</ul>
														<div class="mb-3 mt-3 text-warning">
															<i class=" fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#" class="btn btn-secondary"><i class="ti-shopping-cart"></i> Buy Now</a>
													</div>
												</div>
												<div class="carousel-item">
													<img class="pro_img productborder" alt="Product" src="{{URL::asset('assets/images/pngs/3.png')}}">
													<div class="carouselproduct mt-4 text-center">
														<h5 class=""><a href="product-details.html">Watch</a></h5>
														<ul class="product_price list-unstyled">
															<li class="old_price">$59.00</li>
															<li class="new_price">$34.00</li>
														</ul>
														<div class="mb-3 mt-2 text-warning">
															<i class=" fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<button class="btn btn-success"><i class="ti-shopping-cart"> </i> Buy Now</button>
													</div>
												</div>
												<div class="carousel-item">
													<img class="pro_img productborder" alt="Product" src="{{URL::asset('assets/images/pngs/4.png')}}">
													<div class="carouselproduct mt-4 text-center">
														<h5 class=""><a href="product-details.html">Smart watch</a></h5>
														<ul class="product_price list-unstyled">
															<li class="old_price">$54.00</li>
															<li class="new_price">$39.00</li>
														</ul>
														<div class="mb-3 mt-2 text-warning">
															<i class=" fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#" class="btn btn-info"><i class="ti-shopping-cart"></i> Buy Now</a>
													</div>
												</div>
												<div class="carousel-item">
													<img class="pro_img productborder" alt="Product" src="{{URL::asset('assets/images/pngs/5.png')}}">
													<div class="carouselproduct mt-4 text-center">
														<h5 class=""><a href="product-details.html">Royal gold color watch</a></h5>
														<ul class="product_price list-unstyled">
															<li class="old_price">$37.00</li>
															<li class="new_price">$25.00</li>
														</ul>
														<div class="mb-3 mt-2 text-warning">
															<i class=" fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#" class="btn btn-danger"><i class="ti-shopping-cart"> </i> Buy Now</a>
													</div>
												</div>
												<div class="carousel-item">
													<img class="pro_img productborder" alt="Product" src="{{URL::asset('assets/images/pngs/6.png')}}">
													<div class="carouselproduct mt-4 text-center">
														<h5 class=""><a href="product-details.html">Shoes</a></h5>
														<ul class="product_price list-unstyled">
															<li class="old_price">$64.00</li>
															<li class="new_price">$25.00</li>
														</ul>
														<div class="mb-3 mt-2 text-warning">
															<i class=" fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#" class="btn btn-warning"><i class="ti-shopping-cart"> </i> Buy Now</a>
													</div>
												</div>
												<div class="carousel-item">
													<img class="pro_img productborder" alt="Product" src="{{URL::asset('assets/images/pngs/7.png')}}">
													<div class="carouselproduct mt-4 text-center">
														<h5 class=""><a href="product-details.html">Lime Sports Shoes</a></h5>
														<ul class="product_price list-unstyled">
															<li class="old_price">$35.00</li>
															<li class="new_price">$19.00</li>
														</ul>
														<div class="mb-3 mt-2 text-warning">
															<i class=" fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#" class="btn btn-primary"><i class="ti-shopping-cart"> </i> Buy Now</a>
													</div>
												</div>
												<div class="carousel-item">
													<img class="pro_img productborder" alt="Product" src="{{URL::asset('assets/images/pngs/8.png')}}">
													<div class="carouselproduct mt-4 text-center">
														<h5 class=""><a href="product-details.html">Sandals</a></h5>
														<ul class="product_price list-unstyled">
															<li class="old_price">$44.00</li>
															<li class="new_price">$35.00</li>
														</ul>
														<div class="mb-3 mt-2 text-warning">
															<i class=" fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#" class="btn btn-secondary"><i class="ti-shopping-cart"> </i> Buy Now</a>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev product-carousel-control" href="#carouselExampleControls" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next product-carousel-control" href="#carouselExampleControls" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
@endsection
