@extends('layouts.vertical-menu.master2')
@section('css')
<link href="{{ URL::asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet">
@endsection
@section('content')
		<!-- BACKGROUND-IMAGE -->
		<div class="login-img">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="{{URL::asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="page">
				<div class="">
					<div class="col col-login mx-auto">
						<div class="text-center">
							<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img" alt="">
						</div>
					</div>
				    <!-- CONTAINER OPEN -->
					<div class="container-login100">
						<div class="wrap-login100 p-5">
							<form class="login100-form validate-form ">
								<div class="text-center mb-4">
									<img src="{{URL::asset('assets/images/users/10.jpg')}}" alt="lockscreen image" class="avatar avatar-xxl brround mb-2">
									<h4>Elizabeth Dyer</h4>
								</div>
								<div class="wrap-input100 validate-input" data-validate="Password is required">
									<input class="input100" type="password" name="pass" placeholder="Password">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="fa fa-lock" aria-hidden="true"></i>
									</span>
								</div>
								<div class="container-login100-form-btn">
									<a href="{{ url('/' . $page='index') }}" class="login100-form-btn btn-primary">
										Unlock
									</a>
								</div>
								<div class="text-center pt-2">
									<span class="txt1">
										I Forgot
									</span>
									<a class="txt2" href="forgot.html">
										Give me Hint
									</a>
								</div>
							</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End GLOABAL LOADER -->

		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->
@endsection
@section('js')
@endsection
