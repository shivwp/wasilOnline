@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Loaders</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Components</a></li>
									<li class="breadcrumb-item active" aria-current="page">Loaders</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row row-deck">
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">loaders</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner1">
												<div class="double-bounce1"></div>
												<div class="double-bounce2"></div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">loaders</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner2">
												<div class="cube1"></div>
												<div class="cube2"></div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">loaders</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner"></div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">loaders</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="lds-ring"><div></div><div></div><div></div><div></div></div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">loaders</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="lds-hourglass"></div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">loaders</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="lds-heart"><div></div></div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">loaders big sizes</h3>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner-lg"></div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">loaders big sizes</h3>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner1-lg">
												<div class="double-bounce1"></div>
												<div class="double-bounce2"></div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-2 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER OPEN -->
			</div>
@endsection
@section('js')
@endsection
