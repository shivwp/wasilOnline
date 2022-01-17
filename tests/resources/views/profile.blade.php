@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Profile</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row" id="user-profile">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="wideget-user">
											<div class="row">
												<div class="col-lg-6 col-md-12">
													<div class="wideget-user-desc d-sm-flex">
														<div class="wideget-user-img">
															<img class="" src="{{URL::asset('assets/images/users/10.jpg')}}" alt="img">
														</div>
														<div class="user-wrap">
															<h4>Elizabeth Dyer</h4>
															<h6 class="text-muted mb-3">Member Since: November 2017</h6>
															<a href="#" class="btn btn-primary mt-1 mb-1"><i class="fa fa-rss"></i> Follow</a>
															<a href="#" class="btn btn-secondary mt-1 mb-1"><i class="fa fa-envelope"></i> E-mail</a>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12">
													<div class="wideget-user-info">
														<div class="wideget-user-warap">
															<div class="wideget-user-warap-l">
																<h4 class="text-danger">7253</h4>
																<p>Total Items</p>
															</div>
															<div class="wideget-user-warap-r">
																<h4 class="text-danger">8432</h4>
																<p>Total Sales</p>
															</div>
														</div>
														<div class="wideget-user-rating">
															<a href="#"><i class="fa fa-star text-warning"></i></a>
															<a href="#"><i class="fa fa-star text-warning"></i></a>
															<a href="#"><i class="fa fa-star text-warning"></i></a>
															<a href="#"><i class="fa fa-star text-warning"></i></a>
															<a href="#"><i class="fa fa-star-o text-warning mr-1"></i></a> <span>5 (3876 Reviews)</span>
														</div>
														<div class="wideget-user-icons">
															<a href="#" class="bg-facebook text-white mt-0"><i class="fa fa-facebook"></i></a>
															<a href="#" class="bg-info text-white"><i class="fa fa-twitter"></i></a>
															<a href="#" class="bg-google text-white"><i class="fa fa-google"></i></a>
															<a href="#" class="bg-dribbble text-white"><i class="fa fa-dribbble"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="border-top">
										<div class="wideget-user-tab">
											<div class="tab-menu-heading">
												<div class="tabs-menu1">
													<ul class="nav">
														<li class=""><a href="#tab-51" class="active show" data-toggle="tab">Profile</a></li>
														<li><a href="#tab-61" data-toggle="tab" class="">Friends</a></li>
														<li><a href="#tab-71" data-toggle="tab" class="">Gallery</a></li>
														<li><a href="#tab-81" data-toggle="tab" class="">Followers</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="border-0">
											<div class="tab-content">
												<div class="tab-pane active show" id="tab-51">
													<div id="profile-log-switch">
														<div class="media-heading">
															<h5><strong>Personal Information</strong></h5>
														</div>
														<div class="table-responsive ">
															<table class="table row table-borderless">
																<tbody class="col-lg-12 col-xl-6 p-0">
																	<tr>
																		<td><strong>Full Name :</strong> Elizabeth Dyer</td>
																	</tr>
																	<tr>
																		<td><strong>Location :</strong> USA</td>
																	</tr>
																	<tr>
																		<td><strong>Languages :</strong> English, German, Spanish.</td>
																	</tr>
																</tbody>
																<tbody class="col-lg-12 col-xl-6 p-0">
																	<tr>
																		<td><strong>Website :</strong> abcdz.com</td>
																	</tr>
																	<tr>
																		<td><strong>Email :</strong> georgemestayer@abcdz.com</td>
																	</tr>
																	<tr>
																		<td><strong>Phone :</strong> +125 254 3562 </td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="row profie-img">
															<div class="col-md-12">
																<div class="media-heading">
																	<h5><strong>Biography</strong></h5>
																</div>
																<p>
																	Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</p>
																<p class="mb-0">because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter but because those who do not know how to pursue consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab-61">
													<ul class="widget-users row">
														<li class="col-lg-4  col-md-6 col-sm-12 col-12">
															<div class="card">
																<div class="card-body text-center">
																	<span class="avatar avatar-xxl brround cover-image" data-image-src="{{URL::asset('assets/images/users/15.jpg')}}"></span>
																	<h4 class="h4 mb-0 mt-3">James Thomas</h4>
																	<p class="card-text">Web designer</p>
																</div>
																<div class="card-footer text-center">
																	<div class="row user-social-detail">
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="col-lg-4 col-md-6 col-sm-12 col-12">
															<div class="card">
																<div class="card-body text-center">
																	<span class="avatar avatar-xxl brround cover-image" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}"></span>
																	<h4 class="h4 mb-0 mt-3">George Clooney</h4>
																	<p class="card-text">Web designer</p>
																</div>
																<div class="card-footer text-center">
																	<div class="row user-social-detail">
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="col-lg-4 col-md-6 col-sm-12 col-12">
															<div class="card">
																<div class="card-body text-center">
																	<span class="avatar avatar-xxl brround cover-image" data-image-src="{{URL::asset('assets/images/users/20.jpg')}}"></span>
																	<h4 class="h4 mb-0 mt-3">Robert Downey Jr.</h4>
																	<p class="card-text">Web designer</p>
																</div>
																<div class="card-footer text-center">
																	<div class="row user-social-detail">
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="col-lg-4 col-md-6 col-sm-12 col-12">
															<div class="card mb-lg-0">
																<div class="card-body text-center">
																	<span class="avatar avatar-xxl brround cover-image" data-image-src="{{URL::asset('assets/images/users/12.jpg')}}"></span>
																	<h4 class="h4 mb-0 mt-3">Emma Watson</h4>
																	<p class="card-text">Web designer</p>
																</div>
																<div class="card-footer text-center">
																	<div class="row user-social-detail">
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="col-lg-4 col-md-6 col-sm-12 col-12">
															<div class="card mb-lg-0">
																<div class="card-body text-center">
																	<span class="avatar avatar-xxl brround cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}"></span>
																	<h4 class="h4 mb-0 mt-3">Mila Kunis</h4>
																	<p class="card-text">Web designer</p>
																</div>
																<div class="card-footer text-center">
																	<div class="row user-social-detail">
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="col-lg-4 col-md-6 col-sm-12 col-12">
															<div class="card mb-0">
																<div class="card-body text-center">
																	<span class="avatar avatar-xxl brround cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}"></span>
																	<h4 class="h4 mb-0 mt-3">Ryan Gossling</h4>
																	<p class="card-text">Web designer</p>
																</div>
																<div class="card-footer text-center">
																	<div class="row user-social-detail">
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																		</div>
																		<div class="col-lg-4 col-sm-4 col-4">
																			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="tab-pane" id="tab-71">
													<div class="row">
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded mb-5" src="{{URL::asset('assets/images/media/8.jpg')}}" alt="banner image">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded mb-5" src="{{URL::asset('assets/images/media/10.jpg')}}" alt="banner image ">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded mb-5" src="{{URL::asset('assets/images/media/11.jpg')}}" alt="banner image ">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded mb-5 " src="{{URL::asset('assets/images/media/12.jpg')}}" alt="banner image ">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded mb-5" src="{{URL::asset('assets/images/media/13.jpg')}}" alt="banner image">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded mb-5" src="{{URL::asset('assets/images/media/14.jpg')}}" alt="banner image">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded mb-5" src="{{URL::asset('assets/images/media/15.jpg')}}" alt="banner image">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded mb-0" src="{{URL::asset('assets/images/media/16.jpg')}}" alt="banner image">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded mb-0" src="{{URL::asset('assets/images/media/17.jpg')}}" alt="banner image">
														</div><div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded mb-0" src="{{URL::asset('assets/images/media/18.jpg')}}" alt="banner image">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded mb-0" src="{{URL::asset('assets/images/media/19.jpg')}}" alt="banner image">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded" src="{{URL::asset('assets/images/media/20.jpg')}}" alt="banner image">
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab-81">
													<div class="row">
														<div class=" col-lg-6 col-md-12">
															<div class="card borderover-flow-hidden">
																<div class="media card-body media-xs overflow-visible ">
																	<img class="avatar brround avatar-md mr-3" src="{{URL::asset('assets/images/users/18.jpg')}}" alt="avatar-img">
																	<div class="media-body valign-middle mt-2">
																		<a href="" class=" font-weight-semibold text-dark">John Paige</a>
																		<p class="text-muted ">johan@gmail.com</p>
																	</div>
																	<div class="media-body valign-middle text-right overflow-visible mt-2">
																		<button class="btn btn-primary" type="button">Follow</button> </button>
																	</div>
																</div>
															</div>
														</div>
														<div class=" col-lg-6 col-md-12">
															<div class="card borderover-flow-hidden">
																<div class="media card-body media-xs overflow-visible ">
																	<span class="avatar cover-image avatar-md brround bg-pink mr-3">LQ</span>
																	<div class="media-body valign-middle mt-2">
																		<a href="" class="font-weight-semibold text-dark">Lillian Quinn</a>
																		<p class="text-muted">lilliangore</p>
																	</div>
																	<div class="media-body valign-middle text-right overflow-visible mt-2">
																		<button class="btn btn-secondary" type="button">Follow</button> </button>
																	</div>
																</div>
															</div>
														</div>
														<div class=" col-lg-6 col-md-12">
															<div class="card borderover-flow-hidden mb-lg-0">
																<div class="media card-body media-xs overflow-visible ">
																	<span class="avatar cover-image avatar-md brround mr-3">IH</span>
																	<div class="media-body valign-middle mt-2">
																		<a href="" class="font-weight-semibold text-dark">Irene Harris</a>
																		<p class="text-muted">ireneharris@gmail.com</p>
																	</div>
																	<div class="media-body valign-middle text-right overflow-visible mt-2">
																		<button class="btn btn-success" type="button">Follow</button> </button>
																	</div>
																</div>
															</div>
														</div>
														<div class=" col-lg-6 col-md-12">
															<div class="card borderover-flow-hidden mb-lg-0">
																<div class="media card-body media-xs overflow-visible ">
																	<img class="avatar brround avatar-md mr-3" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="avatar-img">
																	<div class="media-body valign-middle mt-2">
																		<a href="" class="text-dark font-weight-semibold">Harry Fisher</a>
																		<p class="text-muted mb-0">harryuqt</p>
																	</div>
																	<div class="media-body valign-middle text-right overflow-visible mt-2">
																		<button class="btn btn-danger" type="button">Follow</button> </button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
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
@endsection
