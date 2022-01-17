@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Rangeslider</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Components</a></li>
									<li class="breadcrumb-item active" aria-current="page">Rangeslider</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Default grid slider with min and max values</p>
												<input type="text" id="range" value="" name="range" />
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Grid with slider labels are far away outside it's container</p>
												<input type="text" id="range_25" value="" name="range" />
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Grid with labels inside container using force_edges attribute</p>
												<input type="text" id="range_27" value="" name="range" />
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Create Grid with pre-defined steps</p>
												<input type="text" id="range_26" value="" name="range" />
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Prevent one from dragging the labels</p>
												<input type="text" id="range_31" value="" name="range" />
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Grid with minimum and maximum values</p>
												<input type="text" class="range_min_max" value="" name="range" />
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/range.js') }}"></script>
@endsection
