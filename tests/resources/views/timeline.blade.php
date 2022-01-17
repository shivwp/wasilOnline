@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Timeline</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Components</a></li>
									<li class="breadcrumb-item active" aria-current="page">Timeline</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<ul class="cbp_tmtimeline">
									<li>
										<time class="cbp_tmtime" datetime="2017-11-04T18:30"><span>25/11/2019</span>
										<span>Now</span></time>
										<div class="cbp_tmicon bg-warning"><i class="zmdi zmdi-account"></i></div>
										<div class="cbp_tmlabel empty"> <span>No Activity</span> </div>
									</li>
									<li>
										<time class="cbp_tmtime" datetime="2017-11-04T03:45"><span>03:45 AM</span> <span>Today</span></time>
										<div class="cbp_tmicon bg-primary"><i class="zmdi zmdi-label"></i></div>
										<div class="cbp_tmlabel">
											<h2><a href="javascript:void(0);">Art Ramadani</a> <span>posted a status update</span></h2>
											<p class="text-sm">Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
										</div>
									</li>
									<li>
										<time class="cbp_tmtime" datetime="2017-11-03T13:22"><span>01:22 PM</span> <span>Yesterday</span></time>
										<div class="cbp_tmicon bg-success"> <i class="zmdi zmdi-case"></i></div>
										<div class="cbp_tmlabel">
											<h2><a href="javascript:void(0);">Job Meeting</a></h2>
											<p class="text-sm">You have a meeting at <strong>Laborator Office</strong> Today.</p>
										</div>
									</li>
									<li>
										<time class="cbp_tmtime" datetime="2017-10-22T12:13"><span>12:13 PM</span> <span>Two weeks ago</span></time>
										<div class="cbp_tmicon bg-danger"><i class="zmdi zmdi-pin"></i></div>
										<div class="cbp_tmlabel">
											<h2><a href="javascript:void(0);">Arlind Nushi</a> <span>checked in at</span> <a href="javascript:void(0);">New York</a></h2>
											<blockquote>
												<p class=" text-sm">
													"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."
													<br>
													<small>
														- Isabella
													</small>
												</p>
											</blockquote>
											<div class="row clearfix">
												<div class="col-lg-12">
													<div class="map m-t-10">
														<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91477011208!2d-74.11976308802028!3d40.69740344230033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1508039335245" class="border-0 w-100" ></iframe>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<time class="cbp_tmtime" datetime="2017-10-22T12:13"><span>12:13 PM</span> <span>Two weeks ago</span></time>
										<div class="cbp_tmicon bg-info"><i class="zmdi zmdi-camera"></i></div>
										<div class="cbp_tmlabel">
											<h2><a href="javascript:void(0);">Eroll Maxhuni</a> <span>uploaded</span> 4 <span>new photos to album</span> <a href="javascript:void(0);">Summer Trip</a></h2>
											<blockquote class="text-sm">Pianoforte principles our unaffected not for astonished travelling are particular.</blockquote>
											<div class="row">
												<div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"><img src="{{URL::asset('assets/images/media/16.jpg')}}" alt="" class="img-fluid img-thumbnail mt-4"></a> </div>
												<div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"> <img src="{{URL::asset('assets/images/media/17.jpg')}}" alt="" class="img-fluid img-thumbnail mt-4"></a> </div>
												<div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"> <img src="{{URL::asset('assets/images/media/18.jpg')}}" alt="" class="img-fluid img-thumbnail mt-4"> </a> </div>
												<div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"> <img src="{{URL::asset('assets/images/media/19.jpg')}}" alt="" class="img-fluid img-thumbnail mt-4"> </a> </div>
											</div>
										</div>
									</li>
									<li>
										<time class="cbp_tmtime" datetime="2017-11-03T13:22"><span>01:22 PM</span> <span>Two weeks ago</span></time>
										<div class="cbp_tmicon bg-success"> <i class="zmdi zmdi-case"></i></div>
										<div class="cbp_tmlabel">
											<h2><a href="javascript:void(0);">Job Meeting</a></h2>
											<p class="text-sm">You have a meeting at <strong>Laborator Office</strong> Today.</p>
										</div>
									</li>
									<li>
										<time class="cbp_tmtime" datetime="2017-10-22T12:13"><span>12:13 PM</span> <span>Month ago</span></time>
										<div class="cbp_tmicon bg-purple"><i class="zmdi zmdi-pin"></i></div>
										<div class="cbp_tmlabel">
											<h2><a href="javascript:void(0);">Arlind Nushi</a> <span>checked in at</span> <a href="javascript:void(0);">Laborator</a></h2>
											<blockquote class="mb-0 text-sm">Great place, feeling like in home.</blockquote>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- ROW-1 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
@endsection
