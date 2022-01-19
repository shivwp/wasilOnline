@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Marketing</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Rewards</li>
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
										<i class="icon-bag text-info fa-3x text-info-shadow"></i>
										<h4 class="mt-4 mb-2 number-font">Total Orders </h4>
										<h2 class="mb-2  ">{{count($order)}}</h2>
										<p class="text-muted"></p>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<i class="icon-graph text-primary fa-3x text-primary-shadow"></i>
										<h4 class="mt-4 mb-2 number-font">Fullfilled</h4>
										<h2 class="mb-2 ">{{count($readyforship)}}</h2>
										<p class="text-muted"></p>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<i class="icon icon-basket-loaded text-secondary fa-3x text-secondary-shadow"></i>
										<h4 class="mt-4 mb-2 number-font">Shipped</h4>
										<h2 class="mb-2  ">{{count($shipped)}}</h2>
										<p class="text-muted"></p>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<i class="icon-basket text-success fa-3x text-success-shadow"></i>
										<h4 class="mt-4 mb-2 number-font">Delivered </h4>
										<h2 class="mb-2 ">{{count($delivered)}}</h2>
										<p class="text-muted"></p>
									</div>
								</div>
							</div><!-- COL END -->
						
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
								<div class="card overflow-hidden bg-white work-progress">
									
									<div class="card-body">
										<h3 class="number-font mb-2">{{count($order)}}</h3>
										<span>Total Orders</span>
										<div class="chart-wrapper">
											<canvas id="deals" class="chart-dropshadow-success"></canvas>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-7">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Total Transactions</h3>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<canvas id="total-coversations" class="h-160 chart-dropshadow-info"></canvas>
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
												<h6 class="">Today's Order</h6>
												<h3 class="mb-2 number-font">30</h3>
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
												<h3 class="mb-2 number-font">900</h3>
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
										<h3 class="card-title">Department Performance And Work Ability</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar8" class="h-270 donutShadow"></div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Orders</h3>
									</div>
									<div class="">
										<div class="list-group-item d-flex  align-items-center border-top-0 border-left-0 border-right-0">
										
											<div class="">
												<div class="font-weight-semibold">Total Orders</div>
												<small class="text-muted">{{count($order)}}
												</small>
												
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-danger btn-sm">View</a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center border-left-0 border-right-0">
										
											<div class="">
												<div class="font-weight-semibold">Fullfilled</div>
												<small class="text-muted">{{count($readyforship)}}
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-secondary">View</a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center border-left-0 border-right-0">
											
											<div class="">
												<div class="font-weight-semibold">Shipped</div>
												<small class="text-muted">{{count($shipped)}}
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-success">View</a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center border-left-0 border-right-0">
											
											<div class="">
												<div class="font-weight-semibold">Delivered</div>
												<small class="text-muted">{{count($delivered)}}
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm  btn-info">View</a>
											</div>
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
													<h6 class="mb-1">Graph Fullfillment</h6>
													<h2 class="number-font mb-0">{{count($readyforship)}}</h2>
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
													<p class="mb-1">Delivered Orders</p>
													<h2 class="number-font mb-0">{{count($delivered)}}</h2>
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
<!-- <script src="{{ URL::asset('assets/js/index2.js') }}"></script> -->
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/morris/raphael-min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/morris/morris.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script type="text/javascript">
	$((function(o) {
	(t = document.getElementById("deals")).height = "225";
	var e = t.getContext("2d").createLinearGradient(0, 0, 0, 380);
	e.addColorStop(0, "#09ad95"), e.addColorStop(1, "#09ad95"), new Chart(t, {
		type: "bar",
		data: {
			labels: [{!!$string!!}],
			datasets: [{
				label: "Current Deals",
				data: [{!!$orderArr!!}],
				backgroundColor: e,
				hoverBackgroundColor: e,
				hoverBorderWidth: 2,
				hoverBorderColor: "gradientStroke1"
			}]
		},
		options: {
			responsive: !0,
			maintainAspectRatio: !1,
			tooltips: {
				mode: "index",
				titleFontSize: 12,
				titleFontColor: "#000",
				bodyFontColor: "#000",
				backgroundColor: "#fff",
				cornerRadius: 3,
				intersect: !1
			},
			legend: {
				display: !1,
				labels: {
					usePointStyle: !0
				}
			},
			scales: {
				xAxes: [{
					barPercentage: .3,
					ticks: {
						fontColor: "#77778e"
					},
					display: !0,
					gridLines: {
						display: !1,
						drawBorder: !1
					},
					scaleLabel: {
						display: !1,
						labelString: "Month",
						fontColor: "#77778e"
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "transparent"
					},
					display: !0,
					gridLines: {
						display: !1,
						drawBorder: !1
					},
					scaleLabel: {
						display: !1,
						labelString: "sales",
						fontColor: "transparent"
					}
				}]
			},
			title: {
				display: !1,
				text: "Normal Legend"
			}
		}
	});
	var t, r = document.getElementById("total-coversations").getContext("2d");
	new Chart(r, {
		type: "line",
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
				label: "Total-Transactions",
				borderColor: "#0774f8",
				borderWidth: 4,
				backgroundColor: "transparent",
				data: [0, 50, 0, 100, 50, 130, 100, 140, 50, 0, 100, 50, 130, 100, 140]
			}]
		},
		options: {
			responsive: !0,
			maintainAspectRatio: !1,
			tooltips: {
				mode: "index",
				titleFontSize: 12,
				titleFontColor: "#000",
				bodyFontColor: "#000",
				backgroundColor: "#fff",
				cornerRadius: 3,
				intersect: !1
			},
			legend: {
				display: !1,
				labels: {
					usePointStyle: !0
				}
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#77778e"
					},
					display: !0,
					gridLines: {
						display: !0,
						color: "rgba(119, 119, 142, 0.2)",
						drawBorder: !1
					},
					scaleLabel: {
						display: !1,
						labelString: "Month",
						fontColor: "rgba(0,0,0,0.8)"
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#77778e"
					},
					display: !0,
					gridLines: {
						display: !1,
						color: "rgba(119, 119, 142, 0.2)",
						drawBorder: !1
					},
					scaleLabel: {
						display: !1,
						labelString: "sales",
						fontColor: "transparent"
					}
				}]
			},
			title: {
				display: !1,
				text: "Normal Legend"
			}
		}
	}), new Morris.Donut({
		element: "morrisBar8",
		data: [{
			value: 23,
			label: "Delivered"
		}, {
			value: 20,
			label: "Fullfield"
		}, {
			value: 15,
			label: "Shipped"
		}],
		backgroundColor: "rgba(119, 119, 142, 0.2)",
		labelColor: "#77778e",
		colors: ["#0774f8", "#d43f8d", "#09ad95"],
		formatter: function(o) {
			return o + "%"
		}
	}).on("click", (function(o, e) {
		console.log(o, e)
	})), (t = document.getElementById("revenue")).height = "300", t.getContext("2d"), new Chart(t, {
		type: "bar",
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
			datasets: [{
				label: "total profit",
				data: [15, 18, 12, 14, 10, 15, 7, 14],
				backgroundColor: "#d43f8d",
				hoverBackgroundColor: "#d43f8d",
				hoverBorderWidth: 2,
				hoverBorderColor: "#d43f8d"
			}, {
				label: "Total sales",
				data: [10, 14, 10, 15, 9, 14, 15, 20],
				backgroundColor: "#0774f8",
				hoverBackgroundColor: "#0774f8",
				hoverBorderWidth: 2,
				hoverBorderColor: "#0774f8"
			}]
		},
		options: {
			responsive: !0,
			maintainAspectRatio: !1,
			tooltips: {
				mode: "index",
				titleFontSize: 12,
				titleFontColor: "#000",
				bodyFontColor: "#000",
				backgroundColor: "#fff",
				cornerRadius: 3,
				intersect: !1
			},
			legend: {
				display: !1,
				labels: {
					usePointStyle: !0,
					fontFamily: "Montserrat"
				}
			},
			scales: {
				xAxes: [{
					barPercentage: .5,
					ticks: {
						fontColor: "#77778e"
					},
					display: !0,
					gridLines: {
						display: !0,
						color: "rgba(119, 119, 142, 0.2)",
						drawBorder: !1
					},
					scaleLabel: {
						display: !1,
						labelString: "Month",
						fontColor: "rgba(0,0,0,0.8)"
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#77778e"
					},
					display: !0,
					gridLines: {
						display: !0,
						color: "rgba(119, 119, 142, 0.2)",
						drawBorder: !1
					},
					scaleLabel: {
						display: !1,
						labelString: "sales",
						fontColor: "rgba(0,0,0,0.81)"
					}
				}]
			},
			title: {
				display: !1,
				text: "Normal Legend"
			}
		}
	}), r = document.getElementById("areaChart1").getContext("2d"), new Chart(r, {
		type: "line",
		data: {
			labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
			type: "line",
			datasets: [{
				label: "Market value",
				data: [30, 70, 30, 100, 50, 130, 100, 140],
				backgroundColor: "transparent",
				borderColor: "#d43f8d",
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#d43f8d",
				pointBorderColor: "#d43f8d",
				pointHoverBorderColor: "#d43f8d",
				pointBorderWidth: 2,
				pointRadius: 2,
				pointHoverRadius: 2,
				borderWidth: 4
			}]
		},
		options: {
			maintainAspectRatio: !1,
			legend: {
				display: !1
			},
			responsive: !0,
			tooltips: {
				mode: "index",
				titleFontSize: 12,
				titleFontColor: "#6b6f80",
				bodyFontColor: "#6b6f80",
				backgroundColor: "#fff",
				titleFontFamily: "Montserrat",
				bodyFontFamily: "Montserrat",
				cornerRadius: 3,
				intersect: !1
			},
			scales: {
				xAxes: [{
					gridLines: {
						color: "transparent",
						zeroLineColor: "transparent"
					},
					ticks: {
						fontSize: 2,
						fontColor: "transparent"
					}
				}],
				yAxes: [{
					display: !1,
					ticks: {
						display: !1
					}
				}]
			},
			title: {
				display: !1
			},
			elements: {
				line: {
					borderWidth: 1
				},
				point: {
					radius: 4,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	}), r = document.getElementById("areaChart2").getContext("2d"), new Chart(r, {
		type: "line",
		data: {
			labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
			type: "line",
			datasets: [{
				label: "Total Revenue",
				data: [24, 18, 28, 21, 32, 28, 30],
				backgroundColor: "transparent",
				borderColor: "#09ad95",
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#09ad95",
				pointBorderColor: "#09ad95",
				pointHoverBorderColor: "#09ad95",
				pointBorderWidth: 2,
				pointRadius: 2,
				pointHoverRadius: 2,
				borderWidth: 4
			}]
		},
		options: {
			maintainAspectRatio: !1,
			legend: {
				display: !1
			},
			responsive: !0,
			tooltips: {
				mode: "index",
				titleFontSize: 12,
				titleFontColor: "#6b6f80",
				bodyFontColor: "#6b6f80",
				backgroundColor: "#fff",
				titleFontFamily: "Montserrat",
				bodyFontFamily: "Montserrat",
				cornerRadius: 3,
				intersect: !1
			},
			scales: {
				xAxes: [{
					gridLines: {
						color: "transparent",
						zeroLineColor: "transparent"
					},
					ticks: {
						fontSize: 2,
						fontColor: "transparent"
					}
				}],
				yAxes: [{
					display: !1,
					ticks: {
						display: !1
					}
				}]
			},
			title: {
				display: !1
			},
			elements: {
				line: {
					borderWidth: 1
				},
				point: {
					radius: 4,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	})
}));
</script>
@endsection
