@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/formwizard/smart_wizard.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/formwizard/smart_wizard_theme_arrows.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/formwizard/smart_wizard_theme_circles.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/formwizard/smart_wizard_theme_dots.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/forn-wizard/css/demo.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Form-Wizard</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form-Wizard</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Form Wizard</h3>
									</div>
									<div class="card-body">
										<div id="smartwizard">
											<ul>
												<li><a href="#step-1">Login</a></li>
												<li><a href="#step-2">New User</a></li>
												<li><a href="#step-3">End</a></li>
											</ul>
											<div>
												<div id="step-1" class="">
													<form >
														<div class="form-group">
															<label>Email address</label>
															<input type="email" class="form-control" id="exampleInputEmail13" placeholder="Enter email address">
														</div>
														<div class="form-group">
															<label>Password</label>
															<input type="password" class="form-control" id="exampleInputPassword16" placeholder="Password">
														</div>
														<div class="checkbox">
															<div class="custom-checkbox custom-control">
																<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
																<label for="checkbox-1" class="custom-control-label">Check me Out</label>
															</div>
														</div>
													</form>
												</div>
												<div id="step-2" class="">
													<form >
														<div class="form-group">
															<label>User Name</label>
															<input type="text" class="form-control" id="inputtext3" placeholder="Enter User Name">
														</div>
														<div class="form-group">
															<label>Email address</label>
															<input type="email" class="form-control" placeholder="Enter email address">
														</div>
														<div class="form-group">
															<label>Password</label>
															<input type="password" class="form-control" placeholder="Password">
														</div>
														<div class="checkbox">
															<div class="custom-checkbox custom-control">
																<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
																<label for="checkbox-2" class="custom-control-label">Check me Out</label>
															</div>
														</div>
													</form>
												</div>
												<div id="step-3" class="">
													<div class="checkbox">
														<div class="custom-checkbox custom-control">
															<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox3">
															<label for="checkbox3" class="custom-control-label">I agree terms & Conditions</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card accordion-wizard">
									<div class="card-header">
										<h3 class="card-title">Accordion-Wizard-Form</h3>
									</div>
									<div class="card-body">
										<form id="form">
											<div class="list-group">
												<div class="list-group-item py-4" data-acc-step>
													<h5 class="mb-0" data-acc-title>Name &amp; Email</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label>Name:</label>
																<input type="text" name="name" class="form-control" />
															</div>
															<div class="form-group">
																<label>Email:</label>
																<input type="text" name="email" class="form-control" />
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item py-4" data-acc-step>
													<h5 class="mb-0" data-acc-title>Contact</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label>Telephone:</label>
																<input type="text" name="telephone" class="form-control" />
															</div>
															<div class="form-group">
																<label>Mobile:</label>
																<input type="text" name="mobile" class="form-control" />
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item py-4" data-acc-step>
													<h5 class="mb-0" data-acc-title>Payment</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label>Credit card:</label>
																<input type="text" name="card" class="form-control">
															</div>
															<div class="form-group form-row">
																<div class="col-sm-4">
																	<label>Expiry:</label>
																	<input type="text" name="expiry" class="form-control">
																</div>
																<div class="col-sm-4">
																	<label>CVV:</label>
																	<input type="text" name="cvv" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-2 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/formwizard/jquery.smartWizard.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/formwizard/fromwizard.js') }}"></script>
<script src="{{ URL::asset('assets/js/advancedform.js') }}"></script>
@endsection
