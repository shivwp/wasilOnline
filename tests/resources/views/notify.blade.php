@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Notification</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Components</a></li>
									<li class="breadcrumb-item active" aria-current="page">Notification</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts Notifications</h3>
									</div>
									<div class="card-body text-center">
										<div class="example">
											<div class="btn-list">
												<a href="#" class="btn btn-success notice">Success</a>
												<a href="#" class="btn btn-warning warning">Warning</a>
												<a href="#" class="btn btn-danger error">Danger</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts Popovers</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-2 mt-2 mb-2">
												<button type="button" class="btn btn-success btn-block " data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="alert sucess" data-content="Well done! You successfully read this important alert message..">
													Show success
												</button>
											</div>
											<div class="col-lg-2 mt-2 mb-2">
												<button type="button" class="btn btn-info btn-block" data-container="body" data-toggle="popover" data-popover-color="popinfo" data-placement="top" title="alert info" data-content="Heads up! This alert needs your attention, but it's not super important...">
													Show info
												</button>
											</div>
											<div class="col-lg-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-warning " data-container="body" data-toggle="popover" data-popover-color="popwarning" data-placement="bottom" title="alert warning" data-content="Warning! Best check yo self, you're not looking too good..">
													Show warning
												</button>
											</div>

											<div class="col-lg-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-danger" data-container="body" data-toggle="popover" data-popover-color="popdanger" data-placement="bottom" title="alert danger" data-content="Oh snap! Change a few things up and try submitting again.">
												Show danger
												</button>
											</div>
											<div class="col-lg-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-secondary" data-container="body" data-toggle="popover" data-popover-color="popsecondary" data-placement="top" title="alert secondary" data-content="Error! Please Check u r emial id..">
													Show secondary
												</button>
											</div>
											<div class="col-lg-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-primary" data-container="body"  data-toggle="popover" data-popover-color="pop-primary" data-placement="top" title="alert primary" data-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
													Show primary
												</button>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts style</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-12 col-md-12">
												<div class="alert alert-success mb-4">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													 <strong>Success Message</strong>
													<hr class="message-inner-separator">
													<p>You successfully read this important alert message.</p>
												</div>
											</div>
											<div class="col-sm-12 col-md-12">
												<div class="alert alert-info mb-4">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Info Message</strong>
													<hr class="message-inner-separator">
													<p>This alert needs your attention, but it's not super important.</p>
												</div>
											</div>
											<div class="col-sm-12 col-md-12">
												<div class="alert alert-warning mb-4">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Warning Message</strong>
													<hr class="message-inner-separator">
													<p>Best check yo self, you're not looking too good.</p>
												</div>
											</div>
											<div class="col-sm-12 col-md-12">
												<div class="alert alert-danger">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Danger Message</strong>
													<hr class="message-inner-separator">
													<p>Change a few things up and try submitting again.</p>
												</div>
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
		<!-- POPOVER JS -->
        <script src="{{ URL::asset('assets/js/popover.js') }}"></script>

		<!-- NOTIFICATIONS JS -->
        <script src="{{ URL::asset('assets/plugins/notify/js/rainbow.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/notify/js/custom-notification.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/notify/js/jquery.growl.js') }}"></script>
@endsection
