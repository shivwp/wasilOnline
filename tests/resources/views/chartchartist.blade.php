@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/morris/morris.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- PAGE-HEADER -->
						<div>
							<h1 class="page-title">Chart JS</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chart JS</li>
							</ol>
						</div>
					<!-- PAGE-HEADER END -->
@endsection
@section('content')
					<!-- ROW-1 OPEN -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Top label chart</h3>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="chart-legend-top" class="h-400"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Right label chart</h3>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="chart-legend-right" class="h-400" ></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Bottom label chart</h3>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="chart-legend-bottom" class="h-400" ></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Left label chart</h3>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="chart-legend-left" class="h-400"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-1 CLOSE -->
				</div>
				</div>
				<!-- CONTAINER CLOSE -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/js/chart.js') }}"></script>
@endsection
