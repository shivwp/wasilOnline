@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Services</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Services</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-3 ">
								<div class="card service">
									<div class="card-body">
										<div class="item-box text-center">
											<div class=" text-center  mb-4 text-primary"><i class="icon icon-people"></i></div>
											<div class="item-box-wrap">
												<h5 class="mb-2">Creative solutions</h5>
												<p class="text-muted mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
								<div class="card service">
									<div class="card-body">
										<div class="item-box text-center">
											<div class=" text-center text-danger-gradient mb-4"><i class="icon icon-clock"></i></div>
											<div class="item-box-wrap">
												<h5 class="mb-2">Trace your time</h5>
												<p class="text-muted mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
								<div class="card service">
									<div class="card-body">
										<div class="item-box text-center">
											<div class=" text-center text-success mb-4"><i class="fa fa-building-o"></i></div>
											<div class="item-box-wrap">
												<h5 class="mb-2">Business FrameWork</h5>
												<p class="text-muted mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
								<div class="card service">
									<div class="card-body">
										<div class="item-box text-center">
											<div class="text-center text-warning-gradient mb-4"><i class="icon icon-action-redo"></i></div>
											<div class="item-box-wrap">
												<h5 class="mb-2">Shares</h5>
												<p class="text-muted mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-1 CLOSE -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-2 col-lg-3 feature">
												<div class="fa-stack fa-lg fa-1x border btn-primary mb-3">
													<i class="fa fa-globe fa-stack-1x text-white"></i>
												</div>
											</div>
											 <div class="col-xl-10 col-lg-9">
												<div class="mt-1">
													<h4 class="font-weight-semibold">Web design</h4>
													<p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
													The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
													making it look like readable English.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-2 col-lg-3 feature">
												<div class="fa-stack fa-lg fa-1x border bg-warning mb-3">
													<i class="fa fa-building-o fa-stack-1x text-white"></i>
												</div>
											</div>
											 <div class="col-xl-10 col-lg-9">
												<div class="mt-1">
													<h4 class="font-weight-semibold">Web Development</h4>
													<p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
													The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
													making it look like readable English.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-2 col-lg-3 feature">
												<div class="fa-stack fa-lg fa-1x border bg-pink mb-3">
													<i class="fa fa-file-word-o fa-stack-1x text-white"></i>
												</div>
											</div>
											 <div class="col-xl-10 col-lg-9">
												<div class="mt-1">
													<h4 class="font-weight-semibold">Wordpress</h4>
													<p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
													The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
													making it look like readable English.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-2 col-lg-3 feature">
												<div class="fa-stack fa-lg fa-1x border bg-danger mb-3">
													<i class="fa fa-camera fa-stack-1x text-white"></i>
												</div>
											</div>
											 <div class="col-xl-10 col-lg-9">
												<div class="mt-1">
													<h4 class="font-weight-semibold">photography</h4>
													<p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
													The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
													making it look like readable English.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-2 col-lg-3 feature">
												<div class="fa-stack fa-lg fa-1x border bg-purple mb-3">
													<i class="fa fa-pencil-square-o fa-stack-1x text-white"></i>
												</div>
											</div>
											 <div class="col-xl-10 col-lg-9">
												<div class="mt-1">
													<h4 class="font-weight-semibold">Development</h4>
													<p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
													The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
													making it look like readable English.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-2 col-lg-3 feature">
												<div class="fa-stack fa-lg fa-1x border bg-success mb-3">
													<i class="fa fa-eercast fa-stack-1x text-white"></i>
												</div>
											</div>
											 <div class="col-xl-10 col-lg-9">
												<div class="mt-1">
													<h4 class="font-weight-semibold">Android</h4>
													<p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
													The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
													making it look like readable English.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-2 CLOSE -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Our services</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
											<div class="row mt-3">
												<div class="col-md-6">
													<label>Web Design</label>
													<div class="progress progress-md mb-3">
														<div class="progress-bar  bg-purple w-50">50%</div>
													</div>
												</div>
												<div class="col-md-6">
													<label>Web Development</label>
													<div class="progress progress-md mb-3">
														<div class="progress-bar bg-danger w-70">70%</div>
													</div>
												</div>
												<div class="col-md-6">
													<label>Wordpress</label>
													<div class="progress progress-md mb-3">
														<div class="progress-bar  bg-warning w-80">80%</div>
													</div>
												</div>
												<div class="col-md-6">
													<label>Photography</label>
													<div class="progress progress-md mb-3">
														<div class="progress-bar bg-primary w-75">75%</div>
													</div>
												</div>
												<div class="col-md-6">
													<label>Development</label>
													<div class="progress progress-md mb-3 mb-md-0">
														<div class="progress-bar bg-pink w-65">80%</div>
													</div>
												</div>
												<div class="col-md-6">
													<label>Android</label>
													<div class="progress progress-md mb-0">
														<div class="progress-bar bg-success w-70">69%</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-3 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
@endsection
