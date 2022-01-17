@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Dropdowns</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dropdowns</li>
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
										<h3 class="card-title">Single button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="example panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown1"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="example panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-default btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown2"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-default btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-primary btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-success btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-info btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-danger btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="example panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-default">Action</button>
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary">Action</button>
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success">Action</button>
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info">Action</button>
													<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning">Action</button>
													<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger">Action</button>
													<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown3"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-default">Action</button>
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-primary">Action</button>
	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-success">Action</button>
	<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class=" fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-info">Action</button>
	<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-warning">Action</button>
	<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-danger">Action</button>
	<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class=" fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="example panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-default">Action</button>
													<button type="button" class="btn btn-pill btn-default dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-primary">Action</button>
													<button type="button" class="btn btn-pill btn-primary dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-success">Action</button>
													<button type="button" class="btn btn-pill btn-success dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-info">Action</button>
													<button type="button" class="btn btn-pill btn-info dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-warning">Action</button>
													<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-danger">Action</button>
													<button type="button" class="btn btn-pill btn-danger dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown4"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-default">Action</button>
	<button type="button" class="btn btn-pill btn-default dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-primary">Action</button>
	<button type="button" class="btn btn-pill btn-primary dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-success">Action</button>
	<button type="button" class="btn btn-pill btn-success dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-info">Action</button>
	<button type="button" class="btn btn-pill btn-info dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-warning">Action</button>
	<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class=" fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-danger">Action</button>
	<button type="button" class="btn btn-pill btn-danger dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single Square outline button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="example panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown5"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="example panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown6"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-success btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-info btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="example panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary">Action</button>
													<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success">Action</button>
													<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info">Action</button>
													<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning">Action</button>
													<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-danger">Action</button>
													<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown7"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-primary">Action</button>
	<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-success">Action</button>
	<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-info">Action</button>
	<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-warning">Action</button>
	<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-danger">Action</button>
	<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="example panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-primary">Action</button>
													<button type="button" class="btn btn-pill btn-outline-primary dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-success">Action</button>
													<button type="button" class="btn btn-pill btn-outline-success dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-info">Action</button>
													<button type="button" class="btn btn-pill btn-outline-info dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-warning">Action</button>
													<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-danger">Action</button>
													<button type="button" class="btn btn-pill btn-outline-danger dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown8"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-outline-primary">Action</button>
	<button type="button" class="btn btn-pill btn-outline-primary dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class=" fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-outline-success">Action</button>
	<button type="button" class="btn btn-pill btn-outline-success dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-outline-info">Action</button>
	<button type="button" class="btn btn-pill btn-outline-info dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-outline-warning">Action</button>
	<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-outline-danger">Action</button>
	<button type="button" class="btn btn-pill btn-outline-danger dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown8"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Dropup variation</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="dropup btn-group mt-2 mb-2">
												<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropup1
													<span class="caret"></span></button>
												<ul class="dropdown-menu">
													<li><a href="#">HTML</a></li>
													<li><a href="#">CSS</a></li>
													<li><a href="#">JavaScript</a></li>
													<li class="divider"></li>
													<li><a href="#">About Us</a></li>
												</ul>
											</div>
											<!-- Split dropup button -->
											<div class="dropup btn-group mt-2 mb-2">
												<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropup2
													<span class="caret"></span></button>
												<ul class="dropdown-menu">
													<li><a href="#">HTML</a></li>
													<li><a href="#">CSS</a></li>
													<li><a href="#">JavaScript</a></li>
													<li class="divider"></li>
													<li><a href="#">About Us</a></li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown9"><pre><code class="language-markup"><script type="html-volgh/script"><div class="dropup btn-group mt-2 mb-2">
	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropup1
		<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="#">HTML</a></li>
		<li><a href="#">CSS</a></li>
		<li><a href="#">JavaScript</a></li>
		<li class="divider"></li>
		<li><a href="#">About Us</a></li>
	</ul>
</div>
<!-- Split dropup button -->
<div class="dropup btn-group mt-2 mb-2">
	<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropup2
		<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="#">HTML</a></li>
		<li><a href="#">CSS</a></li>
		<li><a href="#">JavaScript</a></li>
		<li class="divider"></li>
		<li><a href="#">About Us</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown9"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon Drop Downs dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="example panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-facebook btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-facebook"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-twitter btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-twitter"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-google btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-google"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-youtube btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-youtube "></i><span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-vimeo btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-vimeo"></i><span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-github btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-github"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown10"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-facebook btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-facebook"></i> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-twitter btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-twitter"></i> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-google btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-google"></i> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-youtube btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-youtube "></i><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-vimeo btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-vimeo"></i><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-github btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-github"></i> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown10"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
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
@endsection
