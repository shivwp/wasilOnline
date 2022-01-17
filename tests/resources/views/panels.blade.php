@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Panels</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Panels</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Panels</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="expanel expanel-default mb-0">
												<div class="expanel-body">
													Basic panel example
												</div>
											</div>
										</div>
<!--Prism Precode-->
<figure class="highlight clip-widget" id="panel1"><pre><code class="language-markup"><script type="html-volgh/script"><div class="expanel expanel-default">
	<div class="expanel-body">
		Basic panel example
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#panel1"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End Prism Precode-->
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with footer</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="expanel expanel-default mb-0">
												<div class="expanel-body">
													Panel content
												</div>
												<div class="expanel-footer">Panel footer</div>
											</div>
										</div>
<!--Prism Precode-->
<figure class="highlight clip-widget" id="panel2"><pre><code class="language-markup"><script type="html-volgh/script"><div class="expanel expanel-default">
	<div class="expanel-body">
		Panel content
	</div>
	<div class="expanel-footer">Panel footer</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#panel2"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End Prism Precode-->
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with heading</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="row">
												<div class="col-md-6">
													<div class="expanel expanel-default mb-0">
														<div class="expanel-heading">Panel heading without title</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="expanel expanel-default mb-0">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
											</div>
										</div>
<!--Prism Precode-->
<figure class="highlight clip-widget" id="panel3"><pre><code class="language-markup"><script type="html-volgh/script"><div class="row">
	<div class="col-md-6">
		<div class="expanel expanel-default">
			<div class="expanel-heading">Panel heading without title</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="expanel expanel-default">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#panel3"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End Prism Precode-->
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with color header</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="row">
												<div class="col-md-12">
													<div class="expanel expanel-primary">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="expanel expanel-secondary">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="expanel expanel-success">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="expanel expanel-danger mb-0">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
											</div>
										</div>
<!--Prism Precode-->
<figure class="highlight clip-widget" id="panel4"><pre><code class="language-markup"><script type="html-volgh/script"><div class="row">
	<div class="col-md-12">
		<div class="expanel expanel-primary">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="expanel expanel-secondary">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="expanel expanel-success">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="expanel expanel-danger">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#panel4"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End Prism Precode-->
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-3 CLOSED -->
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
