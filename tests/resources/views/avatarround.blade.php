@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Avatar-Rounded</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Avatar-Rounded</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row row-deck">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Round avatar</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar  brround cover-image" data-image-src="{{URL::asset('assets/images/users/12.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-image-src="{{URL::asset('assets/images/users/13.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-image-src= "{{URL::asset('assets/images/users/11.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-image-src= "{{URL::asset('assets/images/users/12.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-image-src= "{{URL::asset('assets/images/users/14.jpg')}}"></span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatarround1"><pre><code class="language-markup"><script type="html-volgh/script"><div class="avatar-list">
	<span class="avatar  brround cover-image" data-image-src="../assets/images/users/12.jpg"></span>
	<span class="avatar  brround cover-image" data-image-src="../assets/images/users/13.jpg"></span>
	<span class="avatar  brround cover-image" data-image-src= "../assets/images/users/11.jpg"></span>
	<span class="avatar  brround cover-image" data-image-src= "../assets/images/users/12.jpg"></span>
	<span class="avatar  brround cover-image" data-image-src= "../assets/images/users/14.jpg"></span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatarround1"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End  Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">RoundAvatars list</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/users/12.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/users/19.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/users/2.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/users/14.jpg')}}"></span>
													<span class="avatar brround cover-image">+8</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatarround2"><pre><code class="language-markup"><script type="html-volgh/script"><div class="avatar-list avatar-list-stacked">
	<span class="avatar brround cover-image"  data-image-src="../assets/images/users/12.jpg"></span>
	<span class="avatar brround cover-image"  data-image-src="../assets/images/users/1.jpg"></span>
	<span class="avatar brround cover-image"  data-image-src="../assets/images/users/19.jpg"></span>
	<span class="avatar brround cover-image"  data-image-src="../assets/images/users/2.jpg"></span>
	<span class="avatar brround cover-image"  data-image-src="../assets/images/users/14.jpg"></span>
	<span class="avatar brround cover-image">+8</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatarround2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row row-deck">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">RoundAvatar size</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar avatar-sm brround cover-image"  data-image-src="{{URL::asset('assets/images/users/15.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/users/13.jpg')}}"></span>
													<span class="avatar avatar-md brround cover-image"  data-image-src="{{URL::asset('assets/images/users/16.jpg')}}"></span>
													<span class="avatar avatar-lg brround cover-image"  data-image-src="{{URL::asset('assets/images/users/17.jpg')}}"></span>
													<span class="avatar avatar-xl brround cover-image"  data-image-src="{{URL::asset('assets/images/users/14.jpg')}}"></span>
													<span class="avatar avatar-xxl brround cover-image"  data-image-src="{{URL::asset('assets/images/users/18.jpg')}}"></span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatarround3"><pre><code class="language-markup"><script type="html-volgh/script"><div class="avatar-list">
	<span class="avatar avatar-sm brround cover-image"  data-image-src="../assets/images/users/15.jpg"></span>
	<span class="avatar brround cover-image"  data-image-src="../assets/images/users/13.jpg"></span>
	<span class="avatar avatar-md brround cover-image"  data-image-src="../assets/images/users/16.jpg"></span>
	<span class="avatar avatar-lg brround cover-image"  data-image-src="../assets/images/users/17.jpg"></span>
	<span class="avatar avatar-xl brround cover-image"  data-image-src="../assets/images/users/14.jpg"></span>
	<span class="avatar avatar-xxl brround cover-image"  data-image-src="../assets/images/users/18.jpg"></span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatarround3"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">RoundAvatar status</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/users/19.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/users/15.jpg')}}">
														<span class="avatar-status bg-secondary"></span>
													</span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/users/20.jpg')}}">
														<span class="avatar-status bg-red"></span>
													</span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/users/11.jpg')}}">
														<span class="avatar-status bg-green"></span>
													</span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/users/17.jpg')}}">
														<span class="avatar-status bg-yellow"></span>
													</span>
												</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatarround4"><pre><code class="language-markup"><script type="html-volgh/script"><div class="avatar-list">
	<span class="avatar brround cover-image"  data-image-src="../assets/images/users/19.jpg"></span>
	<span class="avatar brround cover-image"  data-image-src="../assets/images/users/15.jpg">
		<span class="avatar-status bg-secondary"></span>
	</span>
	<span class="avatar brround cover-image"  data-image-src="../assets/images/users/20.jpg">
		<span class="avatar-status bg-red"></span>
	</span>
	<span class="avatar brround cover-image"  data-image-src="../assets/images/users/11.jpg">
		<span class="avatar-status bg-green"></span>
	</span>
	<span class="avatar brround cover-image"  data-image-src="../assets/images/users/17.jpg">
		<span class="avatar-status bg-yellow"></span>
	</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatarround4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div><!-- COL END -->
					</div>
					<!-- ROW-2 CLOSED -->
				</div>
				<!-- CONTAINER CLOSED -->
			</div>

@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/prism/prism.js') }}"></script>
@endsection
