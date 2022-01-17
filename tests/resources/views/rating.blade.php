@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/rating/rating.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Ratings</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Components</a></li>
									<li class="breadcrumb-item active" aria-current="page">Ratings</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row row-cards">
							<div class="col-sm-12 col-md-12  col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Fractional Star rating</h3>
									</div>
									<div class="card-body">
										<div class="star-ratings">
											<div class="stars stars-example-fontawesome-o">
												<select id="example-fontawesome-o" name="rating" data-current-rating="3.6" autocomplete="off">
												  <option value="1">1</option>
												  <option value="2">2</option>
												  <option value="3">3</option>
												  <option value="4">4</option>
												  <option value="5">5</option>
												  <option value="6">6</option>
												  <option value="7">7</option>
												  <option value="8">8</option>
												  <option value="9">9</option>
												  <option value="10">10</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar 1/10 Rating</h3>
									</div>
									<div class="card-body">
										<div class="box box-example-1to10">
											<div class="box-body">
												<select id="example-1to10" name="rating" autocomplete="off">
												  <option value="1">1</option>
												  <option value="2">2</option>
												  <option value="3">3</option>
												  <option value="4">4</option>
												  <option value="5">5</option>
												  <option value="6">6</option>
												  <option value="7" selected="selected">7</option>
												  <option value="8">8</option>
												  <option value="9">9</option>
												  <option value="10">10</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Font Awesome Star Rating</h3>
									</div>
									<div class="card-body">
										<div class="star-ratings start-ratings-main mb-0 clearfix">
											<div class="stars stars-example-fontawesome">
												<select id="example-fontawesome" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Opinion rating</h3>
									</div>
									<div class="card-body">
										<div class="box box-example-movie">
											<div class="box-body">
												<select id="example-movie" name="rating" autocomplete="off">
												  <option value="Bad">Bad</option>
												  <option value="Mediocre">Mediocre</option>
												  <option value="Good" selected="selected">Good</option>
												  <option value="Awesome">Awesome</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Square Rating</h3>
									</div>
									<div class="card-body">
										<div class="box box-example-square">
                                            <div class="box-body">
                                              <select id="example-square" name="rating" autocomplete="off">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                              </select>
                                            </div>
                                        </div>
									</div>
								</div>
							</div><!-- COL-END -->
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Grade Rating</h3>
									</div>
									<div class="card-body">
										<div class="box  box-example-pill">
											<div class="box-body">
												<select id="example-pill" name="rating" autocomplete="off">
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Horizontal Bar Rating</h3>
									</div>
									<div class="card-body">
										<div class="box box-large box-example-horizontal">
											<div class="box-body">
												<select id="example-horizontal" name="rating" autocomplete="off">
													<option value="10">10</option>
													<option value="9">9</option>
													<option value="8">8</option>
													<option value="7">7</option>
													<option value="6">6</option>
													<option value="5">5</option>
													<option value="4">4</option>
													<option value="3">3</option>
													<option value="2">2</option>
													<option value="1" selected="selected">1</option>
												</select>
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
<script src="{{ URL::asset('assets/plugins/rating/jquery.barrating.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/rating/ratings.js') }}"></script>
@endsection
