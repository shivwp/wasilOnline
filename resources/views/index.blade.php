@extends('layouts.vertical-menu.master')
@section('css')
<style>
	.bg-secondary {
    background-color: #d43f8d!important;
}
</style>
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="page-title">Dashboard</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </div>
                        <!-- PAGE-HEADER END -->
@endsection
@section('content')	
						<!-- ROW-1 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-6">
								<div class="row">
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-primary mb-0 box-primary-shadow">
													<i class="fe fe-trending-up text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Total Sales</h6>
												<h2 class="mb-2 number-font">3516</h2>
												<p class="text-muted"></p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-secondary mb-0 box-secondary-shadow" >
													<i class="fe fe-codepen text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Total Leads</h6>
												<h2 class="mb-2 number-font">5692</h2>
												<p class="text-muted"></p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-success mb-0 box-success-shadow">
													<i class="fe fe-dollar-sign text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Total Profit</h6>
												<h2 class="mb-2  number-font">$2567</h2>
												<p class="text-muted"></p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-info mb-0 box-info-shadow">
													<i class="fe fe-briefcase text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Total Cost</h6>
												<h2 class="mb-2  number-font">$34,789</h2>
												<p class="text-muted"></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Earnings</h3>
									</div>
									<div class="card-body">
										<div id="echart1" class="chart-donut chart-dropshadow"></div>
										<div class="mt-4">
											<span class="ml-5"><span class="dot-label bg-info mr-2"></span>Sales</span>
											<span class="ml-5"><span class="dot-label bg-secondary mr-2"></span>Profit</span>
											<span class="ml-5"><span class="dot-label bg-success mr-2"></span>Growth</span>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 END -->

						<!-- <!-- ROW-3 -->
						<div class="row">
						
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Total Sales </h3>
									</div>
									<div class="card-body">
										<small class="text-muted">Total Sales</small>
										<h2 class="number-font">3516</h2>
										<div class="progress grouped h-3">
											<div class="progress-bar w-25 bg-primary " role="progressbar"></div>
											<div class="progress-bar w-30 bg-danger" role="progressbar"></div>
											<div class="progress-bar w-20 bg-warning" role="progressbar"></div>
										</div>
										<div class="row mt-3 pt-3">
											<div class="col border-right">
												<p class=" number-font1 mb-0"><span class="dot-label bg-primary"></span>Sales</p>
												<h5 class="mt-2 font-weight-semibold mb-0">25%</h5>
											</div>
											<div class="col  border-right">
												<p class=" number-font mb-0"><span class="dot-label bg-danger"></span>Marketing</p>
												<h5 class="mt-2 font-weight-semibold mb-0">30%</h5>
											</div>
											<div class="col">
												<p class="number-font1 mb-0"><span class="dot-label bg-warning"></span>Finance</p>
												<h5 class="mt-2 font-weight-semibold mb-0">20%</h5>
											</div>
										</div>
									</div>
								</div>
				
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 END -->

				

						
					</div>
				</div>
				<!-- CONTAINER END -->
            </div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/index1.js') }}"></script>
@endsection




