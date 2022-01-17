@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Breadcrumbs</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
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
										<h3 class="card-title">Simple Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ol class="breadcrumb1">
												<li class="breadcrumb-item1 active">Home</li>
												<li class="breadcrumb-item1 active">About</li>
											</ol>
											<ol class="breadcrumb1">
												<li class="breadcrumb-item1"><a href="#">Home</a></li>
												<li class="breadcrumb-item1 active">Library</li>
											</ol>
											<ol class="breadcrumb1">
												<li class="breadcrumb-item1"><a href="#">Home</a></li>
												<li class="breadcrumb-item1"><a href="#">Library</a></li>
												<li class="breadcrumb-item1 active">Data</li>
											</ol>
										</div>
<!--Prism Precode-->
<figure class="highlight clip-widget" id="breadcrumb1"><pre><code class="language-markup"><script type="html-volgh/script"><ol class="breadcrumb1">
	<li class="breadcrumb-item1 active">Home</li>
	<li class="breadcrumb-item1 active">About</li>
</ol>
<ol class="breadcrumb1">
	<li class="breadcrumb-item1"><a href="#">Home</a></li>
	<li class="breadcrumb-item1 active">Library</li>
</ol>
<ol class="breadcrumb1">
	<li class="breadcrumb-item1"><a href="#">Home</a></li>
	<li class="breadcrumb-item1"><a href="#">Library</a></li>
	<li class="breadcrumb-item1 active">Data</li>
</ol></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb1"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End Prism Precode-->
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Breadcrumbs-Center align</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="breadcrumb-3">
												<ol class="breadcrumb1">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1 active">about</li>
												</ol>
											</div>
											<div class="breadcrumb-4">
												<ol class="breadcrumb1">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1 active">Library</li>
												</ol>
											</div>
											<div class="breadcrumb-5">
												<ol class="breadcrumb1 mb-0">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1"><a href="#">Library</a></li>
													<li class="breadcrumb-item1 active">Data</li>
												</ol>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb2"><pre><code class="language-markup"><script type="html-volgh/script"><div class="breadcrumb-3">
	<ol class="breadcrumb1">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1 active">about</li>
	</ol>
</div>
<div class="breadcrumb-4">
	<ol class="breadcrumb1">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1 active">Library</li>
	</ol>
</div>
<div class="breadcrumb-5">
	<ol class="breadcrumb1 mb-0">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1"><a href="#">Library</a></li>
		<li class="breadcrumb-item1 active">Data</li>
	</ol>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Breadcrumbs-Right align</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="breadcrumb-1">
												<ol class="breadcrumb1">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1 active">about</li>
												</ol>
											</div>
											<div class="breadcrumb-2">
												<ol class="breadcrumb1">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1"><a href="#">Library</a></li>
												</ol>
											</div>
											<div class="breadcrumb-6">
												<ol class="breadcrumb1 mb-0">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1"><a href="#">Library</a></li>
													<li class="breadcrumb-item1 active">Data</li>
												</ol>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb3"><pre><code class="language-markup"><script type="html-volgh/script"><div class="breadcrumb-1">
	<ol class="breadcrumb1">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1 active">about</li>
	</ol>
</div>
<div class="breadcrumb-2">
	<ol class="breadcrumb1">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1"><a href="#">Library</a></li>
	</ol>
</div>
<div class="breadcrumb-6">
	<ol class="breadcrumb1 mb-0">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1"><a href="#">Library</a></li>
		<li class="breadcrumb-item1 active">Data</li>
	</ol>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ol class="breadcrumb1 bg-info">
												<li class="breadcrumb-item active"><i class="fa fa-star-o mr-2 text-transparant" aria-hidden="true"></i>Home</li>
											</ol>
											<ol class="breadcrumb1 bg-success">
												<li class="breadcrumb-item1"><i class="fa fa-star-o mr-2 text-white" aria-hidden="true"></i><a class="text-white" href="#">Home</a></li>
												<li class="breadcrumb-item active"><i class="fa fa-star-o mx-2 text-transparant" aria-hidden="true"></i>Library</li>
											</ol>
											<ol class="breadcrumb1 bg-secondary">
												<li class="breadcrumb-item"><i class="fa fa-star-o mr-2 text-white" aria-hidden="true"></i><a class="text-white" href="#">Home</a></li>
												<li class="breadcrumb-item"><i class="fa fa-star-o mx-2 text-white" aria-hidden="true"></i><a class="text-white" href="#">Library</a></li>
												<li class="breadcrumb-item active"><i class="fa fa-star-o mx-2 text-transparant" aria-hidden="true"></i>Data</li>
											</ol>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb4"><pre><code class="language-markup"><script type="html-volgh/script"><ol class="breadcrumb1 bg-info">
	<li class="breadcrumb-item active"><i class="fa fa-star-o mr-2 text-transparant" aria-hidden="true"></i>Home</li>
</ol>
<ol class="breadcrumb1 bg-success">
	<li class="breadcrumb-item1"><i class="fa fa-star-o mr-2 text-white" aria-hidden="true"></i><a class="text-white" href="#">Home</a></li>
	<li class="breadcrumb-item active"><i class="fa fa-star-o mx-2 text-transparant" aria-hidden="true"></i>Library</li>
</ol>
<ol class="breadcrumb1 bg-secondary">
	<li class="breadcrumb-item"><i class="fa fa-star-o mr-2 text-white" aria-hidden="true"></i><a class="text-white" href="#">Home</a></li>
	<li class="breadcrumb-item"><i class="fa fa-star-o mx-2 text-white" aria-hidden="true"></i><a class="text-white" href="#">Library</a></li>
	<li class="breadcrumb-item active"><i class="fa fa-star-o mx-2 text-transparant" aria-hidden="true"></i>Data</li>
</ol></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
					</div>
					<!-- ROW-1 CLOSED -->
				</div>
				<!-- CONTAINER CLOSED -->
			</div>

@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/prism/prism.js') }}"></script>
@endsection
