@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Dashboard 02</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard 02</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')

						<!-- ROW-1 OPEN -->
						<div class="row row-cards">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<i class="fa fa-globe text-primary fa-3x text-primary-shadow"></i>
										<h6 class="mt-4 mb-2">Total Visit</h6>
										<h2 class="mb-2 number-font">834</h2>
										<p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<i class="fa fa-dollar text-secondary fa-3x text-secondary-shadow"></i>
										<h6 class="mt-4 mb-2">Cost per Click</h6>
										<h2 class="mb-2  number-font">$34,516</h2>
										<p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<i class="fa fa-comment-o text-success fa-3x text-success-shadow"></i>
										<h6 class="mt-4 mb-2">Investment</h6>
										<h2 class="mb-2 number-font">80%</h2>
										<p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<i class="fa fa-pie-chart text-info fa-3x text-info-shadow"></i>
										<h6 class="mt-4 mb-2">Revenue</h6>
										<h2 class="mb-2  number-font">70k</h2>
										<p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card overflow-hidden bg-white work-progress">
									<div class="card-header">
										<h3 class="card-title">Current Deals</h3>
										<div class="card-options">
											<h4 class="mb-0 text-dark font-weight-normal">39.05%</h4>
										</div>
									</div>
									<div class="card-body">
										<h3 class="number-font mb-2">$ 50,150.00</h3>
										<span>Used balance Current Deals</span>
										<div class="chart-wrapper">
											<canvas id="deals" class="chart-dropshadow-success"></canvas>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Total Transactions</h3>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<canvas id="total-coversations" class="h-160 chart-dropshadow-info"></canvas>
										</div>
										<div class="row mt-6">
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">Twitter</h5>
												<h3 class="text-xxl mb-1 social-content  number-font">21,754</h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"><i class="fa fa-caret-up text-success ml-1"></i> +2.56%</span> vs last month (79.56%)</p>
											</div>
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">Google</h5>
												<h3 class="text-xxl mb-1 social-content  number-font">3,256</h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"><i class="fa fa-caret-up text-success ml-1"></i> +2.56%</span> vs last month (79.56%)</p>
											</div>
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">Facebook</h5>
												<h3 class="text-xxl mb-1 social-content  number-font">86,258</h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"><i class="fa fa-caret-up text-success ml-1"></i> +2.56%</span> vs last month (79.56%)</p>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<h6 class="">Today's revenue</h6>
												<h3 class="mb-2 number-font">$ 22,300</h3>
												<p class="text-muted">
													<span class="text-success"><i class="fa fa-chevron-circle-up text-success ml-1"></i> 3%</span>
													last month
												</p>
												<div class="progress h-2">
													<div class="progress-bar bg-secondary w-50" role="progressbar"></div>
												</div>
												<span class="d-inline-block mt-2 text-muted">12% increase</span>
											</div>
											<div class="col col-auto">
												<div class="counter-icon bg-secondary text-secondary box-secondary-shadow ml-auto">
													<i class="icon icon-rocket text-white mb-5 "></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<h6 class="">Total Clients</h6>
												<h3 class="mb-2 number-font">1,12,900</h3>
												<p class="text-muted">
													<span class="text-danger"><i class="fa fa-chevron-circle-down text-danger ml-1"></i> 0.15%</span>
													last month
												</p>
												<div class="progress h-2">
													<div class="progress-bar bg-primary w-50" role="progressbar"></div>
												</div>
												<span class="d-inline-block mt-2 text-muted">New Clients (12% increase)</span>
											</div>
											<div class="col col-auto">
												<div class="counter-icon bg-primary text-primary box-primary-shadow ml-auto">
													<i class="icon icon-people text-white mb-5 "></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Customer Satisfaction</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar8" class="h-270 donutShadow"></div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Users</h3>
									</div>
									<div class="">
										<div class="list-group-item d-flex  align-items-center border-top-0 border-left-0 border-right-0">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold">Mozelle Belt</div>
												<small class="text-muted">Web Designer
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-primary">View</a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center border-left-0 border-right-0">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="{{URL::asset('assets/images/users/13.jpg')}}"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold">Thomos</div>
												<small class="text-muted">Web Designer
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-secondary">View</a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center border-left-0 border-right-0">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="{{URL::asset('assets/images/users/14.jpg')}}"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold">Marry</div>
												<small class="text-muted">Web Designer
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-success">View</a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center border-left-0 border-right-0">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold">John</div>
												<small class="text-muted">Web Designer
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-danger">View</a>
											</div>
										</div>
										<div class="p-3 px-5">
											<a href="#" class="btn btn-primary"><i class="fe fe-plus mr-1"></i>Add New User</a>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 CLOSED -->

						<!-- ROW-4 OPEN -->
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-xl-8">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Sales Statistics</h3>
									</div>
									<div class="card-body">
										<div class="chart-wrapper chart-dropshadow">
											<canvas id="revenue"></canvas>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-lg-12 col-md-12 col-xl-4">
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
										<div class="card overflow-hidden">
											<div class="card-body pb-0">
												<div class="float-left">
													<h6 class="mb-1">Graph Profit Margin</h6>
													<h2 class="number-font mb-0">78%</h2>
												</div>
												<div class="float-right">
													<span class="mini-stat-icon bg-info"><i class="si si-eye "></i></span>
												</div>
											</div>
											<div class="card-body pt-0 pb-0 border-top-0 overflow-hidden">
												<div class="chart-wrapper overflow-hidden">
													<canvas id="areaChart1" class="areaChart chart-dropshadow-secondary"></canvas>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body pb-0">
												<div class="float-left">
													<p class="mb-1">Total revenue</p>
													<h2 class="number-font mb-0">$7865</h2>
												</div>
												<div class="float-right">
													<span class="mini-stat-icon bg-danger"><i class="si si-volume-2"></i></span>
												</div>
											</div>
											<div class="card-body pt-0 pb-0 border-top-0 overflow-hidden">
												<div class="chart-wrapper ">
													<canvas id="areaChart2" class="areaChart chart-dropshadow-success"></canvas>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
						</div>
						<!-- ROW-4 CLOSED -->

						<!-- ROW-5 OPEN -->
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Social Activities</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered table-hover  mb-0 text-nowrap">
												<thead>
													<tr>
														<th>#</th>
														<th>Campaign</th>
														<th>Client</th>
														<th>Budget</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Gmail</td>
														<td>Ryan MacLeod</td>
														<td>$12k</td>
														<td><span class="badge badge-success">Active</span></td>
													</tr>
													<tr>
														<td>2</td>
														<td>FaceBook</td>
														<td>Jacob Sutherland</td>
														<td>$16k</td>
														<td><span class="badge badge-info">Running</span></td>
													</tr>
													<tr>
														<td>3</td>
														<td>Skype</td>
														<td>James Oliver</td>
														<td>$14k</td>
														<td><span class="badge badge-success">Active</span></td>
													</tr>
													<tr>
														<td>4</td>
														<td>Twitter</td>
														<td>Lisa Nash</td>
														<td>$19k</td>
														<td><span class="badge badge-success">Active</span></td>
													</tr>
													<tr>
														<td>5</td>
														<td>Youtube</td>
														<td>Alan Walsh</td>
														<td>$21k</td>
														<td><span class="badge badge-danger">Hold</span></td>
													</tr>
													<tr>
														<td>6</td>
														<td>Pinterest</td>
														<td>Pippa Mills</td>
														<td>$14k</td>
														<td><span class="badge badge-danger">Hold</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-5 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/js/index2.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/morris/raphael-min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/morris/morris.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
@endsection
