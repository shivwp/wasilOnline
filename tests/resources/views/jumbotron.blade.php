@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Jumbotron</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Jumbotron</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Jumbotron</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="jumbotron mb-0">
												<h1 class="display-3">Hello, world!</h1>
												<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
												<hr class="my-4">
												<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
												<p class="lead m-0">
													<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
												</p>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="jumb1"><pre><code class="language-markup"><script type="html-volgh/script"><div class="jumbotron">
	<h1 class="display-3">Hello, world!</h1>
	<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	<hr class="my-4">
	<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
	<p class="lead m-0">
		<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</p>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#jumb1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
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
										<h3 class="card-title">Jumbotron</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="jumbotron mb-0">
												<div class="container">
													<h1 class="display-3">jumbotron</h1>
													<p class="lead m-0">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="jumb2"><pre><code class="language-markup"><script type="html-volgh/script"><div class="jumbotron">
	<div class="container">
		<h1 class="display-3">jumbotron</h1>
		<p class="lead m-0">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#jumb2"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End  Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-2 CLOSED -->
					</div>
				</div>
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/prism/prism.js') }}"></script>
@endsection
