@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- PAGE-HEADER -->
						<div>
							<h1 class="page-title">Flot Chart</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Chart</a></li>
								<li class="breadcrumb-item active" aria-current="page">Flot Chart</li>
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
									<h3 class="card-title">line chart with negative values </h3>
								</div>
								<div class="card-body">
									<div id="placeholder2" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">line chart </h3>
								</div>
								<div class="card-body">
									<div id="placeholder3" class="chartsh"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-1 CLOSED -->

                    <!-- ROW-2 OPEN -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Animated graph</h3>
								</div>
								<div class="card-body">
									<div id="placeholder4" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Chart with multiple types</h3>
								</div>
								<div class="card-body">
									<div id="placeholder5" class="chartsh"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-2 CLOSE -->

					<!-- ROW-3 OPEN -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Bar chart</h3>
								</div>
								<div class="card-body">
									<div id="placeholder6" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Area chart</h3>
								</div>
								<div class="card-body">
									<div id="placeholder1" class="chartsh"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">pie chart models</h3>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-9">
											<div id="placeholder" class="chartsh"></div>
										</div>
										<div class="col-lg-3">
											<div id="menu">
												<button id="example-1" class="btn btn-block btn-sm btn-primary mt-2 mt-lg-0 ">Default Options</button>
												<button id="example-2" class="btn btn-block btn-sm btn-primary mt-2">Without Legend</button>
												<button id="example-3" class="btn btn-block btn-sm btn-primary mt-2">Label Formatter</button>
												<button id="example-4" class="btn btn-block btn-sm btn-primary mt-2">Label Radius</button>
												<button id="example-5" class="btn btn-block btn-sm btn-primary mt-2">Label Styles #1</button>
												<button id="example-6" class="btn btn-block btn-sm btn-primary mt-2">Label Styles #2</button>
												<button id="example-8" class="btn btn-block btn-sm btn-primary mt-2">Combined Slice</button>
												<button id="example-9" class="btn btn-block btn-sm btn-primary mt-2">Rectangular Pie</button>
												<button id="example-10" class="btn btn-block btn-sm btn-primary mt-2">Tilted Pie</button>
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
<script src="{{ URL::asset('assets/js/flot.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/flot/jquery.flot.pie.js') }}"></script>
@endsection
