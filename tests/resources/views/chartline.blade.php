@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- PAGE-HEADER -->
						<div>
							<h1 class="page-title">C3-Line Charts</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">C3-Line Charts</li>
							</ol>
						</div>
					<!-- PAGE-HEADER END -->
@endsection
@section('content')
			        <!-- ROW-1 -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Sales Growth in every Month</h3>
								</div>
								<div class="card-body">
									<div id="chart-employment" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Line Chart 1</h3>
								</div>
								<div class="card-body">
									<div id="chart-sracked" class="chartsh"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-1 CLOSED -->

					<!-- ROW-2 -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Line chart 2</h3>
								</div>
								<div class="card-body">
									<div id="chart-spline-rotated" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Line Chart 3</h3>
								</div>
								<div class="card-body">
									<div id="chart-temperature" class="chartsh"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-2 CLOSED -->

                    <!-- ROW-3 -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Line Chart 4</h3>
								</div>
								<div class="card-body">
									<div id="chart-area-spline-sracked" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Line Chart 5 </h3>
								</div>
								<div class="card-body">
									<div id="chart-spline" class="chartsh"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-3 CLOSED -->

					<!-- ROW-4 -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Line Chart 6</h3>
								</div>
								<div class="card-body">
									<div id="chart-area" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Line Chart 7</h3>
								</div>
								<div class="card-body">
									<div id="chart-area-spline" class="chartsh"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-4 CLOSED -->

					<!-- ROW-5 -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Line Chart with step</h3>
								</div>
								<div class="card-body">
									<div id="chart-area-step" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Line Chart 8</h3>
								</div>
								<div class="card-body">
									<div id="chart-step" class="chartsh"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-5 CLOSED -->
				</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/js/charts.js') }}"></script>
@endsection
