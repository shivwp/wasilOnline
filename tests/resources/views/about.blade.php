@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">About</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">About</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN-->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body p-4 text-dark">
										<div class="statistics-info">
											<div class="row text-center">
												<div class="col-lg-3 col-sm-6 mt-4 mb-4">
													<div class="counter-status">
														<div class="counter-icon bg-primary">
															<i class="icon icon-people text-white"></i>
														</div>
														<h5 class="mb-2">Total Employees</h5>
														<h2 class="counter mb-0">2569</h2>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 mt-4 mb-4">
													<div class="counter-status">
														<div class="counter-icon bg-secondary">
															<i class="icon icon-rocket text-white"></i>
														</div>
														<h5 class="mb-2">Total Sales</h5>
														<h2 class="counter  mb-0">1765</h2>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6  mt-4 mb-4">
													<div class="counter-statuss">
														<div class="counter-icon bg-success">
															<i class="icon icon-docs text-white"></i>
														</div>
														<h5 class="mb-2">Total Projects</h5>
														<h2 class="counter mb-0">846</h2>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 mt-4 mb-4">
													<div class="counter-status">
														<div class="counter-icon bg-info">
															<i class="icon icon-graph text-white"></i>
														</div>
														<h5 class="mb-2">Total Growth</h5>
														<h2 class="counter  mb-0">7253</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="row">
										<div class="col-md-12 col-lg-12 pl-0">
											<div class="card-body about-con pabout">
												<h1 class="mb-4 font-weight-semibold">Why Volgh ?</h1>
												<h4 class="leading-normal">majority have suffered alteration in some form, by injected humour</h4>
												<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered  by injected humour, or randomised words which don't look even slightly believable.
												If you are going to use a passage of Lorem Ipsum, you need to as  necessary All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over the years, sometimes by accident,
												sometimes on purpose (injected humour and the like).</p>
												<a href="#" class="btn btn-primary  mt-2">View More</a>
											</div>
										</div><!-- COL-END -->
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="row">
										<div class="col-md-12 col-lg-12 pr-0">
											<div class="card-body pabout">
												<h1 class="mb-4 font-weight-semibold">What is Our Services?</h1>
												<h4 class="leading-normal">majority have suffered alteration in some form, by injected humour</h4>
												<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered  by injected humour, or randomised words which don't look even slightly believable.
												If you are going to use a passage of Lorem Ipsum, you need to as  necessary All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over the years, sometimes by accident,
												sometimes on purpose (injected humour and the like).</p>
												<a href="#" class="btn btn-primary mt-2">View More</a>
											</div>
										</div><!-- COL-END -->
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
								<div class="card text-center">
									<img src="{{URL::asset('assets/images/media/1.jpg')}}" alt="img" class="">
									<div class="card-body">
										<h3 class="mb-3">Company history</h3>
										<p>I must explain to you how all this mistaken idea of denouncing pleasure and you a complete account of the system</p>
										<a href="#" class="btn btn-primary">-Read More</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
								<div class="card text-center">
									<img src="{{URL::asset('assets/images/media/2.jpg')}}" alt="img" class="">
									<div class="card-body">
										<h3 class="mb-3">About Team</h3>
										<p>I must explain to you how all this mistaken idea of denouncing pleasure and you a complete account of the system</p>
										<a href="#" class="btn btn-secondary">-Read More</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
								<div class="card text-center">
									<img src="{{URL::asset('assets/images/media/6.jpg')}}" alt="img" class="">
									<div class="card-body">
										<h3 class="mb-3">Company growth</h3>
										<p>I must explain to you how all this mistaken idea of denouncing pleasure and you a complete account of the system</p>
										<a href="#" class="btn btn-info">-Read More</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
								<div class="card text-center">
									<img src="{{URL::asset('assets/images/media/7.jpg')}}" alt="img" class="">
									<div class="card-body">
										<h3 class="mb-3">Our Statistics</h3>
										<p>I must explain to you how all this mistaken idea of denouncing pleasure and you a complete account of the system</p>
										<a href="#" class="btn btn-success">-Read More</a>
									</div>
								</div>
							</div><!-- COL-END -->
						</div><!-- COL-END -->
					</div>
					<!-- ROW-3 CLOSED -->
			   </div>
			   <!-- CONTAINER CLOSED-->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/counters/counterup.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/counters/waypoints.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/counters/counters-1.js') }}"></script>
@endsection
