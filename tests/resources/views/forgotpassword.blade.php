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
			<!-- End GLOABAL LOADER -->

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
						<div class="row">
							<div class="col col-login mx-auto">
								<form class="card shadow-none" method="post">
									<div class="card-body p-6">
										<h3 class="text-center card-title">Forgot password</h3>
											<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
												<input class="input100" type="text" name="email" placeholder="Email">
												<span class="focus-input100"></span>
												<span class="symbol-input100">
													<i class="zmdi zmdi-email" aria-hidden="true"></i>
												</span>
											</div>
											<div class="form-footer">
												<a href="#" class="btn btn-primary btn-block">Send</a>
											</div>
											<div class="text-center text-muted mt-3 ">
											Forget it, <a href="login.html">send me back</a> to the sign in screen.
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!--END PAGE -->

		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

@endsection
@section('js')
@endsection
