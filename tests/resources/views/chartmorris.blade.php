@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/morris/morris.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- PAGE-HEADER -->
						<div>
							<h1 class="page-title">Morris Chart</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Chart</a></li>
								<li class="breadcrumb-item active" aria-current="page">Morris Chart</li>
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
									<h3 class="card-title">Area chart</h3>
								</div>
								<div class="card-body">
									<div id="morrisBar2" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Area chart 2</h3>
								</div>
								<div class="card-body">
									<div id="morrisBar3" class="chartsh"></div>
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
									<h3 class="card-title">Single bar chart</h3>
								</div>
								<div class="card-body">
									<div id="morrisBar4" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Multiple Bar chart</h3>
								</div>
								<div class="card-body">
									<div id="morrisBar5" class="chartsh"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-2 CLOSE -->

                    <!-- ROW-3 -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">line chart animated</h3>
								</div>
								<div class="card-body">
									<div id="morrisBar6" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">line chart</h3>
								</div>
								<div class="card-body">
									<div id="morrisBar7" class="chartsh"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-3 CLOSE -->

					<!-- ROW-4 OPEN -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Donut chart</h3>
								</div>
								<div class="card-body">
									<div id="morrisBar8" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Donut chart with multiple colors</h3>
								</div>
								<div class="card-body">
									<div id="morrisBar9" class="chartsh"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-4 CLOSE -->
				</div>
				</div>
				<!-- CONTAINER CLOSE -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/morris/raphael-min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/morris/morris.js') }}"></script>
<script src="{{ URL::asset('assets/js/morris.js') }}"></script>
@endsection
