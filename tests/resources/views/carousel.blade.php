@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Carousel</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Carousel</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel</h3>
									</div>
									<div class="card-body">
										<div id="carousel-default" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/19.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/20.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/21.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/22.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/23.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with indicators</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/24.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/25.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/1.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/2.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/3.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-controls" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/4.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/5.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/6.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/7.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/8.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-controls" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-controls" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with captions</h3>
									</div>
									<div class="card-body">
										<div id="carousel-captions" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/9.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/10.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/11.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/12.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/13.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators1" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators1">
												<li data-target="#carousel-indicators1" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators1" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators1" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators1" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators1" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/14.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/15.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/16.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/17.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/18.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top-right controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators2" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators2">
												<li data-target="#carousel-indicators2" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators2" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators2" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators2" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators2" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/19.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/20.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/21.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/22.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/23.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top-left controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators3" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators3">
												<li data-target="#carousel-indicators3" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators3" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators3" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators3" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators3" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/24.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/25.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/1.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/2.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/3.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with bottom-right controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators4" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators4">
												<li data-target="#carousel-indicators4" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators4" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators4" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators4" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators4" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/4.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/5.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/6.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/7.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/8.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with bottom-left controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators5" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators5">
												<li data-target="#carousel-indicators5" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators5" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators5" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators5" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators5" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/9.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/10.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/11.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/12.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/13.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with Background color captions</h3>
									</div>
									<div class="card-body">
										<div id="carousel-captions2" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/red.jpg')}}" data-holder-rendered="true">
													<div class="carousel-caption">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/blue.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/green.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions2" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions2" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with GradientBackground  caption</h3>
									</div>
									<div class="card-body">
										<div id="carousel-captions1" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/gradient1.jpg')}}" data-holder-rendered="true">
													<div class="carousel-caption">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/gradient2.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/media/gradient3.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions1" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions1" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-2 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
@endsection
