@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Tooltip and Popover</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tooltip and Popover</li>
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
										<h3 class="card-title">Static Tooltip</h3>
									</div>
									<div class="card-body text-center">
										<div class="bd-example bd-example-tooltip-static">
											<div class="tooltip tooltip-top" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the top
												</div>
											</div>
											<div class="tooltip tooltip-right" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the right
												</div>
											</div>
											<div class="tooltip tooltip-bottom" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the bottom
												</div>
											</div>
											<div class="tooltip tooltip-left" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the left
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<h3 class="card-title">Interactive Demo Tooltip</h3>
										<div class="bd-example tooltip-demo">
											<div class="bd-example-tooltips">
												<div class="example">
													<div class="row text-center">
														<div class="col-md-3 mt-2 mb-2">
															<button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
														</div>
														<div class="col-md-3 mt-2 mb-2">
															<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
														</div>
														<div class="col-md-3 mt-2 mb-2">
															<button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
														</div>
														<div class="col-md-3 mt-2 mb-2">
															<button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
														</div>
													</div>
												</div>
<!-- Prism Code-->
<figure class="highlight clip-widget mb-0" id="toolpop1"><pre><code class="language-markup"><script type="html-volgh/script"><div class="row text-center">
	<div class="col-md-3 mt-2 mb-2">
		<button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
	</div>
	<div class="col-md-3 mt-2 mb-2">
		<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
	</div>
	<div class="col-md-3 mt-2 mb-2">
		<button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
	</div>
	<div class="col-md-3 mt-2 mb-2">
		<button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#toolpop1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Code-->
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Popover</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="row text-center">
												<div class="col-sm-6 col-lg-3 mt-2 mb-2">
													<button type="button" class="btn btn-warning" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="Popover top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
														Popover top
													</button>
												</div><!-- col-3 -->
												<div class="col-sm-6 col-lg-3 mt-2 mb-2 ">
													<button type="button" class="btn btn-danger" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="Popover bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
														Popover bottom
													</button>
												</div><!-- col-3 -->
                                                <div class="col-sm-6 col-lg-3 mt-2 mb-2">
                                                    <button type="button" class="btn btn-purple" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="Popover right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                        Popover right
                                                    </button>
                                                </div><!-- col-3 -->
												<div class="col-sm-6 col-lg-3 mt-2 mb-2">
													<button type="button" class="btn btn-cyan" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="Popover left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
														Popover left
													</button>
												</div><!-- col-3 -->
											</div>
										</div>
<!-- Prism Code-->
<figure class="highlight clip-widget mb-0" id="toolpop2"><pre><code class="language-markup"><script type="html-volgh/script"><div class="row text-center">
	<div class="col-sm-6 col-lg-3 mt-2 mb-2">
		<button type="button" class="btn btn-warning" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="Popover top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
			Popover top
		</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mt-2 mb-2 ">
		<button type="button" class="btn btn-danger" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="Popover bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
			Popover bottom
		</button>
	</div><!-- col-3 -->
    <div class="col-sm-6 col-lg-3 mt-2 mb-2">
        <button type="button" class="btn btn-purple" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="Popover right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover right
        </button>
    </div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mt-2 mb-2">
		<button type="button" class="btn btn-cyan" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="Popover left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
			Popover left
		</button>
	</div><!-- col-3 -->
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#toolpop2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Code-->
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
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/prism/prism.js') }}"></script>
<script src="{{ URL::asset('assets/js/popover.js') }}"></script>
@endsection


