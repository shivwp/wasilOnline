@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Thumbnail</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thumbnail</li>
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
										<h3 class="card-title">Basic Thumbnails</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="row mt-4">
												<div class="col-xs-6 col-md-3">
													<a href="#" class="thumbnail ">
														<img src="{{URL::asset('assets/images/media/1.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
												</div>
												<div class="col-xs-6 col-md-3">
													<a href="#" class="thumbnail">
														<img src="{{URL::asset('assets/images/media/2.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
												</div>
												<div class="col-xs-6 col-md-3">
													<a href="#" class="thumbnail">
														<img src="{{URL::asset('assets/images/media/3.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
												</div>
												<div class="col-xs-6 col-md-3">
													<a href="#" class="thumbnail">
														<img src="{{URL::asset('assets/images/media/5.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="thumb1"><pre><code class="language-markup"><script type="html-volgh/script"><div class="row">
	<div class="col-xs-6 col-md-3">
		<a href="#" class="thumbnail ">
			<img src="{{URL::asset('assets/images/media/1.jpg')}}" alt="thumb1" class="thumbimg">
		</a>
	</div>
	<div class="col-xs-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="{{URL::asset('assets/images/media/2.jpg')}}" alt="thumb1" class="thumbimg">
		</a>
	</div>
	<div class="col-xs-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="{{URL::asset('assets/images/media/3.jpg')}}" alt="thumb1" class="thumbimg">
		</a>
	</div>
	<div class="col-xs-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="{{URL::asset('assets/images/media/5.jpg')}}" alt="thumb1" class="thumbimg">
		</a>
	</div>
</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#thumb1"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Custom content Thumbnails</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="row mt-4">
												<div class="col-xs-6 col-md-4">
													<div class="thumbnail">
														<a href="#">
															<img src="{{URL::asset('assets/images/media/19.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
															<p>
																<a href="#" class="btn btn-primary" role="button">Button</a>
																<a href="#" class="btn btn-secondary" role="button">Button</a>
															</p>
														</div>
													</div>
												</div><!-- COL-END -->
												<div class="col-xs-6 col-md-4">
													<div class="thumbnail">
														<a href="#">
															<img src="{{URL::asset('assets/images/media/20.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
															<p>
																<a href="#" class="btn btn-primary" role="button">Button</a>
																<a href="#" class="btn btn-secondary" role="button">Button</a>
															</p>
														</div>
													</div>
												</div><!-- COL-END -->
												<div class="col-xs-6 col-md-4">
													<div class="thumbnail">
														<a href="#">
															<img src="{{URL::asset('assets/images/media/21.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
															<p>
																<a href="#" class="btn btn-primary" role="button">Button</a>
																<a href="#" class="btn btn-secondary" role="button">Button</a>
															</p>
														</div>
													</div>
												</div><!-- COL-END -->
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="thumb2"><pre><code class="language-markup"><script type="html-volgh/script"><div class="row">
	<div class="col-xs-6 col-md-4">
		<div class="thumbnail">
			<a href="#">
				<img src="{{URL::asset('assets/images/media/19.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>
					<a href="#" class="btn btn-primary" role="button">Button</a>
					<a href="#" class="btn btn-secondary" role="button">Button</a>
				</p>
			</div>
		</div>
	</div><!-- COL-END -->
	<div class="col-xs-6 col-md-4">
		<div class="thumbnail">
			<a href="#">
				<img src="{{URL::asset('assets/images/media/20.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>
					<a href="#" class="btn btn-primary" role="button">Button</a>
					<a href="#" class="btn btn-secondary" role="button">Button</a>
				</p>
			</div>
		</div>
	</div><!-- COL-END -->
	<div class="col-xs-6 col-md-4">
		<div class="thumbnail">
			<a href="#">
				<img src="{{URL::asset('assets/images/media/21.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>
					<a href="#" class="btn btn-primary" role="button">Button</a>
					<a href="#" class="btn btn-secondary" role="button">Button</a>
				</p>
			</div>
		</div>
	</div><!-- COL-END -->
</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#thumb2"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End Prism Precode -->
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
										<h3 class="card-title">Custom content Thumbnails</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="row mt-4">
												<div class="col-xs-12 col-md-6 col-lg-3">
													<div class="thumbnail">
														<a href="#">
															<img src="{{URL::asset('assets/images/media/22.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-lg-3">
													<div class="thumbnail">
														<a href="#">
															<img src="{{URL::asset('assets/images/media/23.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-lg-3">
													<div class="thumbnail">
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
														</div>
														<a href="#">
															<img src="{{URL::asset('assets/images/media/24.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-lg-3">
													<div class="thumbnail">
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
														</div>
														<a href="#">
															<img src="{{URL::asset('assets/images/media/25.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="thumb3"><pre><code class="language-markup"><script type="html-volgh/script"><div class="row">
	<div class="col-xs-12 col-md-6 col-lg-3">
		<div class="thumbnail">
			<a href="#">
				<img src="{{URL::asset('assets/images/media/22.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-3">
		<div class="thumbnail">
			<a href="#">
				<img src="{{URL::asset('assets/images/media/23.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-3">
		<div class="thumbnail">
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
			</div>
			<a href="#">
				<img src="{{URL::asset('assets/images/media/24.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-3">
		<div class="thumbnail">
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
			</div>
			<a href="#">
				<img src="{{URL::asset('assets/images/media/25.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
		</div>
	</div>
</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#thumb3"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End Prism Precode -->
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
