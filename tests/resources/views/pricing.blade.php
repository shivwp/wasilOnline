@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Pricing</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Pricing</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="card-category">Free</div>
										<div class="display-5 my-4">$0</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>4</strong> Ads</li>
											<li><i class="fe fe-check text-success mr-2"></i> 30 days</li>
											<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
											<li><i class="fe fe-x text-danger mr-2"></i> Urgent Ads</li>
										</ul>
										<div class="text-center mt-6">
											<a href="#" class="btn btn-primary btn-block">Choose plan</a>
										</div>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="card-category">Unlimited</div>
										<div class="display-5 my-4">$150</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>Unlimited</strong> Ads</li>
											<li><i class="fe fe-check text-success mr-2"></i> 365 Days</li>
											<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
											<li><i class="fe fe-check text-success mr-2"></i> Urgent ads</li>
										</ul>
										<div class="text-center mt-6">
											<a href="#" class="btn btn-warning btn-block">Choose plan</a>
										</div>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-status bg-success"></div>
									<div class="card-body text-center">
										<div class="card-category">Premium</div>
										<div class="display-5 my-4">$65</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>50</strong> Ads</li>
											<li><i class="fe fe-check text-success mr-2"></i> 60 Days</li>
											<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
											<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
										</ul>
										<div class="text-center mt-6">
											<a href="#" class="btn btn-success btn-block">Choose plan</a>
										</div>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="card-category">Enterprise</div>
										<div class="display-5 my-4">$100</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>100</strong> Ads</li>
											<li><i class="fe fe-check text-success mr-2"></i> 180 days</li>
											<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
											<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
										</ul>
										<div class="text-center mt-6">
											<a href="#" class="btn btn-danger btn-block">Choose plan</a>
										</div>
									</div>
								</div>
							</div><!-- col-end -->
						</div>
						<!-- ROW-1 CLOSED -->

						<h4 class="card-title mt-4">Pricing cards 4 colums</h4>
						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-lg-3">
								<div class="panel price panel-color">
									<div class="panel-heading bg-primary p-0 text-center">
										<h3>Personal</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$15 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 2 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>3 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 1 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarantee</li>
										<li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-lg btn-primary" href="#">Purchase Now!</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-xs-6 col-sm-6 col-lg-3">
								<div class="panel price panel-color">
									<div class="panel-heading bg-warning  p-0 text-center">
										<h3>Team</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$25 /</strong> month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 3 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>4 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarantee</li>
										<li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-lg btn-warning" href="#">Purchase Now!</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-xs-6 col-sm-6 col-lg-3">
								<div class="panel price panel-color">
									<div class="panel-heading bg-success p-0 text-center">
										<h3>Business</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$99 /</strong> month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 5 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>8 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarantee</li>
										<li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-lg btn-success" href="#">Purchase Now!</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-xs-6 col-sm-6 col-lg-3">
								<div class="panel price panel-color">
									<div class="panel-heading bg-danger p-0 text-center">
										<h3>Corporate</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$35 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 4 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>6 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarantee</li>
										<li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-lg btn-danger" href="#">Purchase Now!</a>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<h4 class="card-title mt-4">Pricing cards 4 colums</h4>
						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-lg-3 col-xs-6 col-sm-6  primary">
								<div class="princing-item mb-4">
									<div class="pricing-divider text-center">
										<h3 class="text-light">Basic</h3>
										<h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 120 <span class="h5">/mo</span></h4>
										<svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
											<path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
												c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
											<path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
												c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
											<path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
												H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
											<path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
											c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
										</svg>
									</div>
									<div class=" br-br-0 br-bl-0 bg-white mt-0 shadow text-center">
										<ul class="list-group list-group-flush text-center">
											<li class="list-group-item"><b>10</b> users included</li>
											<li class="list-group-item"><b>2 GB</b> of storage</li>
											<li class="list-group-item"><b>Free </b>Email support</li>
											<li class="list-group-item"><b> 24/7</b> support</li>
											<li class="list-group-item border-bottom-0"><b>Help center access</b></li>
										</ul>
										<div class="card-footer">
											<button type="button" class="btn btn-primary btn-block">Sign up for free</button>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-3 col-xs-6 col-sm-6  secondary">
								<div class="princing-item mb-4">
									<div class="pricing-divider text-center">
										<h3 class="text-light">Premium</h3>
										<h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 150 <span class="h5">/mo</span></h4>
										<svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_2' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
											<path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
												c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
											<path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
												c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
											<path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
												H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
											<path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
											c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
										</svg>
									</div>
									<div class=" br-br-0 br-bl-0 bg-white mt-0 shadow text-center">
										<ul class="list-group list-group-flush text-center">
											<li class="list-group-item"><b>10</b> users included</li>
											<li class="list-group-item"><b>2 GB</b> of storage</li>
											<li class="list-group-item"><b>Free </b>Email support</li>
											<li class="list-group-item"><b> 24/7</b> support</li>
											<li class="list-group-item border-bottom-0"><b>Help center access</b></li>
										</ul>
										<div class="card-footer">
											<button type="button" class="btn btn-warning btn-block">Sign up for free</button>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-3 col-xs-6 col-sm-6 success">
								<div class="princing-item mb-4">
									<div class="pricing-divider text-center">
										<h3 class="text-light">Enterprise</h3>
										<h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 200 <span class="h5">/mo</span></h4>
										<svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_3' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
											<path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
												c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
											<path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
												c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
											<path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
												H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
											<path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
											c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
										</svg>
									</div>
									<div class=" br-br-0 br-bl-0 bg-white mt-0 shadow text-center">
										<ul class="list-group list-group-flush text-center">
											<li class="list-group-item"><b>10</b> users included</li>
											<li class="list-group-item"><b>2 GB</b> of storage</li>
											<li class="list-group-item"><b>Free </b>Email support</li>
											<li class="list-group-item"><b> 24/7</b> support</li>
											<li class="list-group-item border-bottom-0"><b>Help center access</b></li>
										</ul>
										<div class="card-footer">
											<button type="button" class="btn btn-success btn-block">Sign up for free</button>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-3 col-xs-6 col-sm-6 info">
								<div class="princing-item mb-4">
									<div class="pricing-divider text-center">
										<h3 class="text-light">Enterprise</h3>
										<h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 180 <span class="h5">/mo</span></h4>
										<svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_4' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
											<path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
												c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
											<path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
												c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
											<path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
												H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
											<path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
											c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
										</svg>
									</div>
									<div class=" br-br-0 br-bl-0 bg-white mt-0 shadow text-center">
										<ul class="list-group list-group-flush text-center">
											<li class="list-group-item"><b>10</b> users included</li>
											<li class="list-group-item"><b>2 GB</b> of storage</li>
											<li class="list-group-item"><b>Free </b>Email support</li>
											<li class="list-group-item"><b> 24/7</b> support</li>
											<li class="list-group-item border-bottom-0"><b>Help center access</b></li>
										</ul>
										<div class="card-footer">
										<button type="button" class="btn btn-danger btn-block">Sign up for free</button></div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-3 CLOSED -->

						<!-- ROW-4 OPEN -->
						<h4 class="card-title mt-4">Column pricing table</h4>
						<div class="row">
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center pricing bg-primary">
										<div class="card-category">Basic</div>
										<div class="display-3 my-4">$10</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>2 </strong> FreeDomain Name</li>
											<li><strong>2</strong> One-Click Apps</li>
											<li><strong>1</strong>  Databases</li>
											<li><strong>Money</strong> BackGuarantee</li>
											<li><strong>24/7</strong> Support</li>
										</ul>
										<div class="text-center mt-4">
											<a href="#" class="btn btn-white btn-block">Buy Now</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center  pricing bg-warning ">
										<div class="card-category">Premium</div>
										<div class="display-3 my-4">$49</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>3 </strong> FreeDomain Name</li>
											<li><strong>5</strong> One-Click Apps</li>
											<li><strong>3</strong>  Databases</li>
											<li><strong>Money</strong> BackGuarantee</li>
											<li><strong>24/7</strong> Support</li>
										</ul>
										<div class="text-center mt-4">
											<a href="#" class="btn btn-white btn-block">Buy Now</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center pricing bg-success">
										<div class="card-category">Enterprise</div>
										<div class="display-3 my-4">$99</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>10 </strong> FreeDomain Name</li>
											<li><strong>10</strong> One-Click Apps</li>
											<li><strong>8</strong>  Databases</li>
											<li><strong>Money</strong> BackGuarantee</li>
											<li><strong>24/7</strong> Support</li>
										</ul>
										<div class="text-center mt-4">
											<a href="#" class="btn btn-white btn-block">Buy Now</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center  pricing bg-danger">
										<div class="card-category">Unlimited</div>
										<div class="display-3 my-4">$139</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>12 </strong> FreeDomain Name</li>
											<li><strong>10</strong> One-Click Apps</li>
											<li><strong>6</strong>  Databases</li>
											<li><strong>Money</strong> BackGuarantee</li>
											<li><strong>24/7</strong> Support</li>
										</ul>
										<div class="text-center mt-4">
											<a href="#" class="btn btn-white btn-block">Buy Now</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-4 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
@endsection
