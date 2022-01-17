@extends('layouts.horizontal-menu.master')
@section('css')
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="page-title">Dashboard 01</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
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
												<h2 class="mb-2 number-font">34,516</h2>
												<p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-secondary mb-0 box-secondary-shadow">
													<i class="fe fe-codepen text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Total Leads</h6>
												<h2 class="mb-2 number-font">56,992</h2>
												<p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
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
												<h2 class="mb-2  number-font">$42,567</h2>
												<p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
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
												<p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
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

						<!-- ROW-3 -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Browsing Status</h3>
									</div>
									<div class="card-body p-4">
										<div class="mb-5">
											<p class="mb-2">Chrome<span class="float-right text-muted">80%</span></p>
											<div class="progress h-2">
												<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
											</div>
										</div>
										<div class="mb-5">
											<p class="mb-2">Firefox<span class="float-right text-muted">70%</span></p>
											<div class="progress h-2">
												<div class="progress-bar bg-pink w-70" role="progressbar"></div>
											</div>
										</div>
										<div class="mb-5">
											<p class="mb-2">Safari<span class="float-right text-muted">80%</span></p>
											<div class="progress h-2">
												<div class="progress-bar bg-warning w-65" role="progressbar"></div>
											</div>
										</div>
										<div class="mb-5">
											<p class="mb-2">Opera<span class="float-right text-muted">80%</span></p>
											<div class="progress h-2">
												<div class="progress-bar bg-danger w-80" role="progressbar"></div>
											</div>
										</div>
										<div class="mb-5">
											<p class="mb-2">UC Browser<span class="float-right text-muted">70%</span></p>
											<div class="progress h-2">
												<div class="progress-bar bg-success w-60" role="progressbar"></div>
											</div>
										</div>
										<div class="mb-0">
											<p class="mb-2">Internet Explore<span class="float-right text-muted">50%</span></p>
											<div class="progress h-2">
												<div class="progress-bar bg-info w-50" role="progressbar"></div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Production Status</h3>
									</div>
									<div class="p-4 border-bottom">
										<p class="mb-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
										<div class="row">
											<div class="col">
												<p class="mb-1">Production Volume</p>
												<h3 class="mb-0 number-font">57,865</h3>
											</div>
											<div class="col mb-0">
												<div id="spark1" class="chart-dropshadow-info"></div>
											</div>
										</div>
									</div>
									<div class="p-4 border-bottom">
										<div class="row">
											<div class="col">
												<p class="mb-1">Sales Revenue</p>
												<h3 class="mb-0 number-font">22,345</h3>
											</div>
											<div class="col mb-0">
												<div class="chart-wrapper">
													<div id="spark2" class="chart-dropshadow-secondary"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="p-4 border-bottom">
										<div class="row">
											<div class="col">
												<p class="mb-1">Total Orders</p>
												<h3 class="mb-0 number-font">52,156</h3>
											</div>
											<div class="col mb-0">
												<div id="spark3" class="chart-dropshadow-success"></div>
											</div>
										</div>
									</div>
									<div class="p-4">
										<div class="row">
											<div class="col">
												<p class="mb-1">Total profit</p>
												<h3 class="mb-0 number-font">34,673</h3>
											</div>
											<div class="col mb-0">
												<div id="spark4" class="chart-dropshadow-danger"></div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Total Sales By Org Unit</h3>
									</div>
									<div class="card-body">
										<small class="text-muted">Total Sales</small>
										<h2 class="number-font">69,453</h2>
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
								<div class="card">
									<div class="card-body">
										<div class="align-items-center">
											<h4 class="">Total Expenses</h4>
										</div>
										<div class="row d-flex align-items-center mt-3">
											<div class="col">
												<h6 class="text-muted mb-2">Monthly</h6>
												<h2 class="d-flex mb-0 number-font">$35487<small><i class="fe fe-arrow-up text-success"></i></small></h2>
											</div>
											<div class="col text-right">
												<div class="">
													<span class="sparkline_bar1 chart-dropshadow-secondary"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 END -->

						<!-- ROW-4 -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="">
											<div class="d-flex">
												<h6 class="mb-3">Members Online</h6>
												<div class="ml-auto">
													<a class="btn btn-light btn-sm btn-icon mr-2" href="#"><i class="fa fa-chevron-left"></i></a>
													<a class="btn btn-light btn-sm btn-icon" href="#"><i class="fa fa-chevron-right"></i></a>
												</div>
											</div>
											<h3 class="number-font mb-1">2356</h3>
											<span class="text-success"><i class="zmdi zmdi-long-arrow-up zmdi-hc-lg mr-2"></i><span>+24%</span></span><span class="text-muted ml-2">From Last Month</span>
											<p class="mb-0 mt-2 text-muted">Lorem ipsum dolor sit amet odio consectetur accusamus .</p>
										</div>
									</div>
									<div class="chart-wrapper">
										<canvas id="widgetChart1" class="chart-dropshadow-info"></canvas>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="">
											<div class="d-flex">
												<h6 class="mb-3">Current Serverload</h6>
												<div class="ml-auto">
													<a class="btn btn-light btn-sm btn-icon mr-2" href="#"><i class="fa fa-chevron-left"></i></a>
													<a class="btn btn-light btn-sm btn-icon" href="#"><i class="fa fa-chevron-right"></i></a>
												</div>
											</div>
											<h3 class="number-font mb-1">4321</h3>
											<span class="text-success"><i class="zmdi zmdi-long-arrow-up zmdi-hc-lg mr-2"></i><span>90.5%</span></span><span class="text-muted ml-2">From Last Month</span>
											<p class="mb-0 mt-2 text-muted">Lorem ipsum dolor sit amet odio consectetur accusamus .</p>
										</div>
									</div>
									<div class="chart-wrapper">
										<canvas id="widgetChart2" class="chart-dropshadow-secondary"></canvas>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="">
											<div class="d-flex">
												<h6 class="mb-3">To Day's Revenue</h6>
												<div class="ml-auto">
													<a class="btn btn-light btn-sm btn-icon mr-2" href="#"><i class="fa fa-chevron-left"></i></a>
													<a class="btn btn-light btn-sm btn-icon" href="#"><i class="fa fa-chevron-right"></i></a>
												</div>
											</div>
											<h3 class="number-font mb-1">8963</h3>
											<span class="text-success"><i class="zmdi zmdi-long-arrow-up zmdi-hc-lg mr-2"></i><span>20.8%</span></span><span class="text-muted ml-2">From Last Month</span>
											<p class="mb-0 mt-2 text-muted">Lorem ipsum dolor sit amet odio consectetur accusamus .</p>
										</div>
									</div>
									<div class="chart-wrapper">
										<canvas id="widgetChart3" class="chart-dropshadow-success"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-4 END -->

						<!-- ROW-5 -->
						<div class="row">
							<div class="col-12 col-sm-12">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title mb-0">Product Sales</h3>
									</div>
									<div class="card-body">
										<div class="grid-margin">
											<div class="">
												<div class="table-responsive">
													<table class="table card-table border table-vcenter text-nowrap align-items-center">
														<thead class="">
															<tr>
																<th>Product</th>
																<th>Sold</th>
																<th>Record point</th>
																<th>Stock</th>
																<th>Amount</th>
																<th>Stock Status</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="text-sm font-weight-600">Women Wallet-E32N</td>
																<td>18</td>
																<td>05</td>
																<td>112</td>
																<td>$ 2,356</td>
																<td><i class="fa fa-check mr-1 text-success"></i> In Stock</td>
															</tr>
															<tr>
																<td class="text-sm font-weight-600">Phone-345S</td>
																<td>10</td>
																<td>04</td>
																<td>210</td>
																<td>$ 3,522</td>
																<td><i class="fa fa-check text-success"></i> In Stock</td>
															</tr>
															<tr>
																<td class="text-sm font-weight-600">Doll-Elephant</td>
																<td>15</td>
																<td>05</td>
																<td>215</td>
																<td>$ 5,362</td>
																<td><i class="fa fa-check text-success"></i> In Stock</td>
															</tr>
															<tr>
																<td class="text-sm font-weight-600">Women-Kurtis</td>
																<td>21</td>
																<td>07</td>
																<td>102</td>
																<td>$ 1,326</td>
																<td><i class="fa fa-check text-success"></i> In Stock</td>
															</tr>
															<tr>
																<td class="text-sm font-weight-600">Mens Shoes</td>
																<td>34</td>
																<td>10</td>
																<td>325</td>
																<td>$ 5,234</td>
																<td><i class="fa fa-check text-success"></i> In Stock</td>
															</tr>
															<tr>
																<td class="text-sm font-weight-600">Mens Gold Metal Watch</td>
																<td>11</td>
																<td>04</td>
																<td>0</td>
																<td>$ 3,256</td>
																<td>
																	<i class="fa fa-exclamation-triangle text-warning"></i>  Out of stock
																</td>
															</tr>
															<tr>
																<td class="text-sm font-weight-600">Laptop</td>
																<td>60</td>
																<td>10</td>
																<td>0</td>
																<td>$ 7,652</td>
																<td>
																	<i class="fa fa-exclamation-triangle text-danger"></i> Out of stock
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div><!-- ROW-5 END -->
					</div>
				</div>
				<!-- CONTAINER END -->
            </div>
@endsection
@section('js')

        <!-- Internal Js -->
        <script src="{{ URL::asset('assets/js/index1.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>

@endsection




