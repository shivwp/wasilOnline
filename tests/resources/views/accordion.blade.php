@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/accordion/accordion.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Accordion</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Accordion</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row row-deck">
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Accordion</h3>
									</div>
									<div class="card-body">
										<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default active">
												<div class="panel-heading " role="tab" id="headingOne">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

															Collapsible Group Item #1
														</a>
													</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingTwo">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingThree">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

															Collapsible Group Item #3
														</a>
													</h4>
												</div>
												<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
										</div><!-- PANEL-GROUP -->
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Closed Accordion</h3>
									</div>
									<div class="card-body">
										<!-- ACCORDION BEGIN -->
										<ul class="demo-accordion accordionjs m-0" data-active-index="false">
											<!-- SECTION 1 -->
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<!-- SECTION 2 -->
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<!-- SECTION 3 -->
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Accordion Style 3</h3>
									</div>
									<div class="card-body">
										<ul class="demo-accordion accordionjs m-0">
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 4</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Accordion style</h3>
									</div>
									<div class="card-body">
										<div class="panel-group1" id="accordion1">
											<div class="panel panel-default mb-4">
												<div class="panel-heading1 ">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false">Section 1</a>
													</h4>
												</div>
												<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
													<div class="panel-body">
														<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false">Section 2</a>
													</h4>
												</div>
												<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
													<div class="panel-body">
														<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-2 CLOSED OPEN -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/accordion/accordion.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/accordion/accordion.js') }}"></script>
@endsection
