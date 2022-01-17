@extends('layouts.vertical-menu.master2')
@section('css')

        <link href="{{ URL::asset('assets/plugins/countdown/jquerysctipttop.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/jquery-countdown/jquery.countdown.css')}}" rel="stylesheet">

@endsection
@section('content')
		<div class="login-img">

		    <!-- GLOBAL-LOADER -->
			<div id="global-loader">
				<img src="{{URL::asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
			</div>
			<!-- END GLOBAL-LOADER -->

			<!-- PAGE -->
			<div class="page">
				<div class="">
				    <!-- CONTAINER OPEN -->
					<div class="container">
						<div class="row text-center mx-auto">
							<div class="col-lg-8 col-sm-12 center-block align-items-center construction  ">
								<div class="text-white">
									<div class="card-body">
										<h1 class="display-2 mb-0 font-weight-semibold">Coming Soon</h1>
										<div id="launch_date"></div>
										<p>we apologize for your in-convenience....any quaries contact me </p>
										<h4><strong>Contact:</strong> Volgh@demo.com</h4>
										<div class="mt-5">
											<button class="btn btn-icon" type="button">
												<span class="btn-inner--icon"><i class="fa fa-facebook-f"></i></span>
											</button>
											<button class="btn btn-icon" type="button">
												<span class="btn-inner--icon"><i class="fa fa-google"></i></span>
											</button>
											<button class="btn btn-icon" type="button">
												<span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
											</button>
											<button class="btn btn-icon" type="button">
												<span class="btn-inner--icon"><i class="fa fa-pinterest-p"></i></span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- END PAGE -->

		</div>
@endsection
@section('js')

        <script src="{{ URL::asset('assets/plugins/jquery-countdown/jquery.plugin.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-countdown/jquery.countdown.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-countdown/countdown.js') }}"></script>

@endsection
