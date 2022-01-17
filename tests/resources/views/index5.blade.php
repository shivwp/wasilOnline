@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Dashboard 05</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard 05</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- Row1 -->
						<div class="row">
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body text-center">
										<h6 class=""><span class="text-primary"><i class="fe fe-file-text mr-2 fs-20 text-primary-shadow"></i></span>Total Projects</h6>
										<h3 class="text-dark counter mt-0 mb-3 number-font">7,896</h3>
										<div class="progress h-1 mt-0 mb-2">
											<div class="progress-bar progress-bar-striped bg-primary w-70" role="progressbar"></div>
										</div>
										<div class="row mt-4">
											<div class="col text-center"> <span class="text-muted">Weekly</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font1">8</h4> </div>
											<div class="col text-center"> <span class="text-muted">Monthly</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font2">23</h4> </div>
											<div class="col text-center"> <span class="text-muted">Total</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font3">31</h4> </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body text-center">
										<h6 class=""><span class="text-secondary"><i class="fe fe-users mr-2 fs-20 text-secondary-shadow"></i></span>Total Employees</h6>
										<h3 class="text-dark counter mt-0 mb-3 number-font">2,897</h3>
										<div class="progress h-1 mt-0 mb-2">
											<div class="progress-bar progress-bar-striped  bg-secondary w-50" role="progressbar"></div>
										</div>
										<div class="row mt-4">
											<div class="col text-center"> <span class="text-muted">Male</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font1">378</h4> </div>
											<div class="col text-center"> <span class="text-muted">Female</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font1">689</h4> </div>
											<div class="col text-center"> <span class="text-muted">Total</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font1">1,069</h4> </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body text-center">
										<h6 class=""><span class="text-success"><i class="fe fe-award mr-2 fs-20 text-success-shadow"></i></span>Ongoing Projects</h6>
										<h3 class="text-dark counter mt-0 mb-3 number-font">1,567</h3>
										<div class="progress h-1 mt-0 mb-2">
											<div class="progress-bar progress-bar-striped  bg-success w-60" role="progressbar"></div>
										</div>
										<div class="row mt-4">
											<div class="col text-center"> <span class="text-muted">Weekly</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font1">5</h4> </div>
											<div class="col text-center"> <span class="text-muted">Monthly</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font1">20</h4> </div>
											<div class="col text-center"> <span class="text-muted">Total</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font1">25</h4> </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body text-center">
										<h6 class=""><span class="text-info"><i class="fe fe-tag mr-2 fs-20 text-info-shadow"></i></span>Total Tasks</h6>
										<h3 class="text-dark counter mt-0 mb-3 number-font">4,293</h3>
										<div class="progress h-1 mt-0 mb-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-40" role="progressbar"></div>
										</div>
										<div class="row mt-4">
											<div class="col text-center"> <span class="text-muted">Weekly</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font1">35</h4> </div>
											<div class="col text-center"> <span class="text-muted">Monthly</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font1">56</h4> </div>
											<div class="col text-center"> <span class="text-muted">Total</span>
												<h4 class="font-weight-normal mt-2 mb-0 number-font1">91</h4> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row1 CLOSED -->

						<!-- Row2 -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Developing Team</h3>
									</div>
									<div class="card-body">
										<div class="ibox teams bg-boxshadow">
											<!-- Ibox Content -->
											<div class="ibox-content teams">
												<!-- Members -->
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround cover-image cover-image" data-image-src="{{URL::asset('assets/images/users/12.jpg')}}"></span>
													<span class="avatar brround cover-image cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
													<span class="avatar brround cover-image cover-image" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}"></span>
													<span class="avatar brround cover-image cover-image" data-image-src="{{URL::asset('assets/images/users/2.jpg')}}"></span>
													<span class="avatar brround cover-image cover-image" data-image-src="{{URL::asset('assets/images/users/14.jpg')}}"></span>
													<span class="avatar brround cover-image cover-image">+8</span>
												</div>
												<!-- Team Board Details -->
												<div class="teams-board-details mt-4">
													<h4 class="font-weight-normal">About Developing Team</h4>
													<p>Contrary to popular belief, Lorem Ipsum is not simply random text classical Latin literature.Contrary to popular belief, text classical Latin literature.</p>
												</div>
												<!-- Progress Details -->
												<span class="font-weight-semibold text-muted">Status of current project: <span class="stat-percent text-dark font-weight-bold">58%</span></span>
												<div class="progress-details-teams mt-2 mb-4">
													<div class="progress progress-sm ">
														<div class="progress-bar bg-primary w-50" role="progressbar"></div>
													</div>
												</div>
												<div class="row mt-2">
													<div class="col-4">
														<div class="teams-rank text-muted">PROJECTS</div>
														<span>24</span>
													</div>
													<div class="col-4">
														<div class="teams-rank text-muted">RANKING</div>
														<span>3rd</span>
													</div>
													<div class="col-4">
														<div class="teams-rank text-muted">BUDGET</div>
														<span>$36,25,854</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body">
										<h6 class="mb-2">Yearly Current Budget</h6>
										<h2 class="mb-1"><span class="number-font counter">$35,897</span></h2>
										<p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
										<div id="echart8" class="h-200"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-sm-12 col-sm-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Work Activity</h3>
									</div>
									<div class="card-body">
										<div>
											<div class="clearfix">
												<div class="float-left">
													<div class="h4 number-font mb-0">6785</div>
												</div>
												<div class="float-right">
													<small class="text-muted h6">Complete Projects</small>
												</div>
											</div>
											<div class="progress mt-2 h-1">
												<div class="progress-bar  bg-primary w-75"></div>
											</div>
										</div>
										<div class="mt-5">
											<div class="clearfix">
												<div class="float-left">
													<div class="h4 number-font mb-0">896</div>
												</div>
												<div class="float-right">
													<small class="text-muted h6">Pending Projects</small>
												</div>
											</div>
											<div class="progress mt-2 h-1">
												<div class="progress-bar  bg-secondary w-75"></div>
											</div>
										</div>
										<div class="mt-5 mb-4">
											<div class="clearfix">
												<div class="float-left">
													<div class="h4 number-font mb-0">278</div>
												</div>
												<div class="float-right">
													<small class="text-muted h6">Future Projects</small>
												</div>
											</div>
											<div class="progress mt-2 h-1">
												<div class="progress-bar bg-success w-75"></div>
											</div>
										</div>
									</div>
									<div>
										<div id="spark1"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-xl-6">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title">Project Budget</h3>
									</div>
									<div class="card-body text-center">
										<div id="echart" class="chartsh chart-dropshadow"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12 col-lg-12">
								<div class="card">
									<div class="row">
										<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<h6 class="mb-0">Planning</h6>
												<h2 class="mb-1 mt-2 number-font text-primary"><span class="counter">86</span>%</h2>
												<p class="mb-0 text-muted"> Completed</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<h6 class="mb-0">Design</h6>
												<h2 class="mb-1 mt-2 number-font text-secondary"><span class="counter">75</span>%</h2>
												<p class="mb-0 text-muted"> Completed</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<h6 class="mb-0">Development</h6>
												<h2 class="mb-1 mt-2 number-font text-success"><span class="counter">58</span>%</h2>
												<p class="mb-0 text-muted">Completed</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0">
											<div class="card-body text-center">
												<h6 class="mb-0">Testing</h6>
												<h2 class="mb-1 mt-2 number-font text-danger"><span class="counter">69</span>%</h2>
												<p class="mb-0 text-muted">Completed</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-md-12">
										<div class="card overflow-hidden">
											<div class="card-body">
												<div class="d-flex">
													<div class="card-order">
														<h6 class="mb-1">Active Projects</h6>
														<h2 class="mb-1"><span class="number-font counter">7,893</span></h2>
														<p class="mb-2 text-muted"><span class="mb-0 text-success fs-13 "><i class="fe fe-arrow-up"></i> 37%</span> for Last month</p>
													</div>
													<div class="counter-icon bg-primary ml-auto box-primary-shadow">
														<i class="fe fe-edit fs-2 text-white"></i>
													</div>
												</div>
												<p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
												<a class="btn btn-sm btn-primary" href="#"><i class="fe fe-eye"></i> View more</a>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-md-12">
										<div class="card overflow-hidden">
											<div class="card-body">
												<div class="d-flex">
													<div class="card-order">
														<h6 class="mb-1">Work Progress</h6>
														<h2 class="mb-1"><span class="number-font counter">56.29</span>%</h2>
														<p class="mb-2 text-muted"><span class="mb-0 text-danger fs-13"><i class="fe fe-arrow-down"></i> 16%</span> for Last month</p>
													</div>
													<div class="counter-icon bg-secondary ml-auto box-secondary-shadow">
														<i class="fe fe-trending-up  fs-2 text-white"></i>
													</div>
												</div>
												<p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
												<a class="btn btn-sm btn-secondary" href="#"><i class="fe fe-eye "></i> View more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-3 CLOSED -->

						<!-- ROW-4 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title ">Projects</h3>
									</div>
									<div class="">
										<div class="d-flex table-responsive p-3">
											<div class="mr-2">
												<button class="btn btn-primary btn-sm fs-13"><i class="mdi mdi-plus-circle-outline"></i>Add</button>
											</div>
											<div class="mr-2">
												<button type="button" class="btn btn-light btn-sm mr-2 fs-13"><i class="mdi mdi-alert-circle-outline"></i></button>
												<button type="button" class="btn btn-light btn-sm fs-13"><i class="mdi mdi-delete-empty"></i></button>
											</div>
											<div class="mr-2">
												<button type="button" class="btn btn-light btn-sm fs-13"><i class="mdi mdi-printer"></i></button>
											</div>
											<div class="ml-auto mr-2 mt-1 border-0 d-none d-md-block">
												<input type="text" class="form-control" placeholder="Search Here">
											</div>
										</div>
										<div class="table-responsive border-top">
											<table class="table card-table table-striped table-vcenter text-nowrap">
												<thead>
													<tr>
														<th>Id</th>
														<th>Project Name</th>
														<th>Team</th>
														<th>Feedback</th>
														<th>Date</th>
														<th>Preview</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>2345</td>
														<td>Megan Peters</td>
														<td><div class="avatar-list avatar-list-stacked">
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/12.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/2.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/19.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/2.jpg')}}"></span>
															</div>
														</td>
														<td>please check pricing Info </td>
														<td class="text-nowrap">July 13, 2018</td>
														<td class="w-1"><a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a></td>
													</tr>
													<tr>
														<td>4562</td>
														<td>Phil Vance</td>
														<td><div class="avatar-list avatar-list-stacked">
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/12.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/13.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/3.jpg')}}"></span>
															</div>
														</td>
														<td>New stock</td>
														<td class="text-nowrap">June 15, 2018</td>
														<td><a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a></td>
													</tr>
													<tr>
														<td>8765</td>
														<td>Adam Sharp</td>
														<td><div class="avatar-list avatar-list-stacked">
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/14.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/19.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}"></span>
															</div>
														</td>
														<td>Daily updates</td>
														<td class="text-nowrap">July 8, 2018</td>
														<td><a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a></td>
													</tr>
													<tr>
														<td>2665</td>
														<td>Samantha Slater</td>
														<td><div class="avatar-list avatar-list-stacked">
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/2.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/2.jpg')}}"></span>
															</div>
														</td>
														<td>available item list</td>
														<td class="text-nowrap">June 28, 2018</td>
														<td><a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a></td>
													</tr>
													<tr>
														<td>1245</td>
														<td>Joanne Nash</td>
														<td><div class="avatar-list avatar-list-stacked">
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}"></span>
															  <span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}"></span>
															</div>
														</td>
														<td>Provide Best Services</td>
														<td class="text-nowrap">July 2, 2018</td>
														<td><a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-4 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/js/index5.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
@endsection
