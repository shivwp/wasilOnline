@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Email View</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Email View</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-lg-3 col-md-12 col-sm-12">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox">
										<div class="mt-4 mb-4 ml-4 mr-4 text-center">
											<a href="#" class="btn btn-secondary btn-lg btn-block">Compose</a>
										</div>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
											<span class="icon mr-3"><i class="fe fe-inbox"></i></span>Inbox<span class="ml-auto badge badge-success">14</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-send"></i></span>Sent Mail
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-alert-circle"></i></span>Important <span class="ml-auto badge badge-danger">3</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-star"></i></span>Starred
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-file"></i></span>Drafts
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-tag"></i></span>Tags
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-trash-2"></i></span>Trash
										</a>
									</div>
								</div>
								<div class="card">
									<div class="online-status d-flex justify-content-between align-items-center mt-4 mb-2 ml-2">
										<h5 class="card-title chat ml-3">Chats</h5>
										<div class="status offline online"> <h6 class="online text-right">online</h6></div>
									</div>
									<ul class="mail-chats p-0">
										<li class="chat-persons p-3">
											<a href="#">
												<span class="pro-pic"><img src="{{URL::asset('assets/images/users/4.jpg')}}" alt=""></span>
												<div class="user">
													<p class="u-name">David</p>
													<p class="u-designation">Python Developer</p>
												</div>
											</a>
										</li>
										<!-- LIST PERSON -->
										<li class="chat-persons p-3 border-top">
											<a href="#">
												<span class="pro-pic"><img src="{{URL::asset('assets/images/users/1.jpg')}}" alt=""></span>
												<div class="user">
													<p class="u-name">Stella Johnson</p>
													<p class="u-designation">SEO Expert</p>
												</div>
											</a>
										</li>
										<!-- LIST PERSON -->
										<li class="chat-persons p-3 border-top">
											<a href="#">
												<span class="pro-pic"><img src="{{URL::asset('assets/images/users/15.jpg')}}" alt=""></span>
												<div class="user">
													<p class="u-name">Marina Michel</p>
													<p class="u-designation">Business Development</p>
												</div>
											</a>
										</li>
										<!-- LIST PERSON -->
										<li class="chat-persons p-3 border-top">
											<a href="#">
												<span class="pro-pic"><img src="{{URL::asset('assets/images/users/2.jpg')}}" alt=""></span>
												<div class="user">
													<p class="u-name">Edward Fletcher</p>
													<p class="u-designation">UI/UX Designer</p>
												</div>
											</a>
										</li>
										<!-- LIST PERSON -->
									</ul>
									<!-- CHAT -->
								</div>
							</div>
							<div class="col-lg-9 col-md-12 col-sm-12">
								<div class="card">
									<div class="p-5">
										<h4 class="card-title">Elizabeth Dyer<span class="badge badge-primary badge-sm badge-pill ml-2">inbox</span></h4>
									</div>
									<div class="card-body pt-0">
										<div class="email-media">
											<div class="mt-0 d-sm-flex">
												<img class="mr-2 rounded-circle avatar avatar-lg" src="{{ URL::asset('assets/images/users/10.jpg') }}" alt="avatar">
												<div class="media-body">
													<div class="float-right d-none d-md-flex fs-15">
														<small class="mr-3">Sep 13 , 2021 12:45 pm</small>
														<small class="mr-3"><i class="fe fe-star text-dark" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
														<small class="mr-3"><i class="fa fa-reply text-dark" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
														<div class="mr-3">
															<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal text-dark" data-toggle="tooltip" title="" data-original-title="View more"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Reply</a>
																<a class="dropdown-item" href="#">Report Spam</a>
																<a class="dropdown-item" href="#">Delete</a>
																<a class="dropdown-item" href="#">Show Original</a>
																<a class="dropdown-item" href="#">Print</a>
																<a class="dropdown-item" href="#">Filter</a>
															</div>
														</div>
													</div>
													<div class="media-title text-dark font-weight-semiblod">Elizabeth Dyer<span class="text-muted">( elizabeth@gmail.com )</span></div>
													<p class="mb-0">to Adam Cotter ( adamcotter@gmail.com ) </p>
													<small class="mr-2 d-md-none">Dec 13 , 2018 12:45 pm</small>
													<small class="mr-2 d-md-none"><i class="fe fe-star text-dark" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
													<small class="mr-2 d-md-none"><i class="fa fa-reply text-dark" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
												</div>
											</div>
										</div>
										<div class="eamil-body mt-5">
											<h6>Hi Sir/Madam</h6>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
											<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
											<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
											<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
											<p class="mb-0">Thanking you Sir/Madam</p>
											<hr>
											<div class="email-attch">
												<div class="float-right">
													<a href="#"><i class="fa fa-download text-dark" data-toggle="tooltip" title="" data-original-title="Download"></i></a>
												</div>
												<p>3 Attachments<a href="#"> View All Images</a></p>
												<div class="emai-img">
													<div class="d-sm-flex">
														<div class=" m-2">
															<a href="#"><img class="w-9 mb-2" src="{{ URL::asset('assets/images/media/1.jpg') }}" alt="placeholder image"></a>
															<h6 class="mb-3 mb-lg-0">1.jpg <small class="text-muted">12kb</small></h6>
														</div>
														<div class="m-2">
															<a href="#"><img class="w-9 mb-2" src="{{ URL::asset('assets/images/media/2.jpg') }}" alt="placeholder image"></a>
															<h6 class="mb-3 mb-lg-0">2.jpg <small class="text-muted">18kb</small></h6>
														</div>
														<div class="m-2">
															<a href="#"><img class="w-9 mb-2" src="{{ URL::asset('assets/images/media/3.jpg') }}" alt="placeholder image"></a>
															<h6>3.jpg <small class="text-muted">21kb</small></h6>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a class="btn ripple btn-primary mt-1 mb-1" href="#"><i class="fa fa-reply"></i> Reply</a>
										<a class="btn ripple btn-info mt-1 mb-1" href="#"><i class="fa fa-share"></i> Forward</a>
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
