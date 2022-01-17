@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Blog</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row row-cards row-deck">
							<div class="col-md-4">
								<div class="card">
									<img class="card-img-topbr-tr-0 br-tl-0" src="{{URL::asset('assets/images/media/19.jpg')}}" alt="Card image cap">
									<div class="card-header">
										<h5 class="card-title">Blog title </h5>
									</div>
									<div class="card-body">
									   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									   <a href="#" class="float-right">Read more <i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-4">
								<div class="card">
									<img class="card-img-topbr-tr-0 br-tl-0" src="{{URL::asset('assets/images/media/12.jpg')}}" alt="Card image cap">
									<div class="card-header">
									   <h5 class="card-title">Blog title</h5>
									</div>
									<div class="card-body">
									   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									   <a href="#" class="float-right text-info">Read more <i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-4">
								<div class="card ">
									<img class="card-img-topbr-tr-0 br-tl-0" src="{{URL::asset('assets/images/media/17.jpg')}}" alt="Card image cap">
									<div class="card-header">
									   <h5 class="card-title">Blog title</h5>
									</div>
									<div class="card-body">
									   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									   <a href="#" class="float-right text-success">Read more <i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-4">
								<div class="card">
									<img class="card-img-topbr-tr-0 br-tl-0 " src="{{URL::asset('assets/images/media/20.jpg')}}" alt="Card image cap">
									<div class="card-header">
										<h5 class="card-title">Blog title</h5>
									</div>
									<div class="card-body">
									   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									   <a href="" class="btn btn-primary btn-md">Read more</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-4">
								<div class="card ">
									<img class="card-img-topbr-tr-0 br-tl-0 " src="{{URL::asset('assets/images/media/23.jpg')}}" alt="Card image cap">
									<div class="card-header">
										<h5 class="card-title">Blog title</h5>
									</div>
									<div class="card-body">
									   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									   <a href="" class="btn btn-warning btn-md">Read more</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-4">
								<div class="card ">
									<img class="card-img-topbr-tr-0 br-tl-0 " src="{{URL::asset('assets/images/media/22.jpg')}}" alt="Card image cap">
									<div class="card-header">
										<h5 class="card-title">Blog title</h5>
									</div>
									<div class="card-body">
									   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									   <a href="" class="btn btn-info btn-md">Read more</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-xl-3">
								<div class="card">
									<a href="#"><img class="card-img-topbr-tr-0 br-tl-0" src="{{URL::asset('assets/images/media/13.jpg')}}" alt="And this isn&#39;t my nose. This is a false one."></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3 cover-image" data-image-src="{{URL::asset('assets/images/users/18.jpg')}}"></div>
											<div>
												<a href="profile.html" class="text-default">Megan Peters</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-xl-3">
								<div class="card">
									<a href="#"><img class="card-img-topbr-tr-0 br-tl-0" src="{{URL::asset('assets/images/media/14.jpg')}}" alt="Well, I didn&#39;t vote for you."></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3 cover-image" data-image-src="{{URL::asset('assets/images/users/16.jpg')}}"></div>
											<div>
												<a href="profile.html" class="text-default">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-xl-3">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas</a></h4>
										<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3 cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}"></div>
											<div>
												<a href="profile.html" class="text-default">Carol Paige</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
									<a href="#"><img class="card-img-top br-br-0 br-bl-0" src="{{URL::asset('assets/images/media/15.jpg')}}" alt="How do you know she is a witch?"></a>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-xl-3">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas..</a></h4>
										<div class="text-muted">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut ..</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3 cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}"></div>
											<div>
												<a href="profile.html" class="text-default">Fiona Hodges</a>
												<small class="d-block text-muted">5 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
									<a href="#"><img class="card-img-top br-br-0 br-bl-0" src="{{URL::asset('assets/images/media/16.jpg')}}" alt="Shut up!"></a>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-6">
								<div class="card card-aside">
									<a href="#" class="card-aside-column br-tl-0 br-bl-0 cover-image" data-image-src="{{URL::asset('assets/images/media/17.jpg')}}"></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="#">Generator on the Internet..</a></h4>
										<div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium  sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3 cover-image" data-image-src="{{URL::asset('assets/images/users/18.jpg')}}"></div>
											<div>
												<a href="profile.html" class="text-default">Anna Ogden</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-6">
								<div class="card card-aside">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">Nihil molestiae consequatur.</a></h4>
										<div class="text-muted">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3 cover-image" data-image-src="{{URL::asset('assets/images/users/16.jpg')}}"></div>
											<div>
												<a href="profile.html" class="text-default">Irene	Scott</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
									<a href="#" class="card-aside-column br-br-0 br-tr-0 cover-image" data-image-src="{{URL::asset('assets/images/media/18.jpg')}}"></a>
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
