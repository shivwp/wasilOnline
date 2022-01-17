@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">C3 Bar Charts</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">C3 Bar Charts</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">combination of bar & line chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-combination" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single Bar chart </h3>
									</div>
									<div class="card-body">
										<div id="chart-monthly" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-bar-stacked" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Multiple Bar chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-bar" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Horizontal Bar chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-bar-rotated" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Area-spline filled chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-tasks" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-3 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/js/charts.js') }}"></script>
<script src="{{ URL::asset('assets/js/index.js') }}"></script>
@endsection
