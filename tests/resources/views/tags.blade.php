@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Tags</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tags</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default tag</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag">First tag</span>
													<span class="tag">Second tag</span>
													<span class="tag">Third tag</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tag1"><pre><code class="language-markup"><script type="html-volgh/script"><div class="tags">
	<span class="tag">First tag</span>
	<span class="tag">Second tag</span>
	<span class="tag">Third tag</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tag1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Link tag</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<a href="#" class="tag">First tag</a>
													<a href="#" class="tag">Second tag</a>
													<a href="#" class="tag">Third tag</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tag2"><pre><code class="language-markup"><script type="html-volgh/script"><div class="tags">
	<a href="#" class="tag">First tag</a>
	<a href="#" class="tag">Second tag</a>
	<a href="#" class="tag">Third tag</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tag2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded tag</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-rounded">First tag</span>
													<span class="tag tag-rounded">Second tag</span>
													<span class="tag tag-rounded">Third tag</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tag3"><pre><code class="language-markup"><script type="html-volgh/script"><div class="tags">
	<span class="tag tag-rounded">First tag</span>
	<span class="tag tag-rounded">Second tag</span>
	<span class="tag tag-rounded">Third tag</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tag3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color tag</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-blue">Blue tag</span>
													<span class="tag tag-azure">Azure tag</span>
													<span class="tag tag-indigo">Indigo tag</span>
													<span class="tag tag-purple">Purple tag</span>
													<span class="tag tag-pink">Pink tag</span>
													<span class="tag tag-red">Red tag</span>
													<span class="tag tag-orange">Orange tag</span>
													<span class="tag tag-yellow">Yellow tag</span>
													<span class="tag tag-lime">Lime tag</span>
													<span class="tag tag-green">Green tag</span>
													<span class="tag tag-teal">Teal tag</span>
													<span class="tag tag-cyan">Cyan tag</span>
													<span class="tag tag-gray">Gray tag</span>
													<span class="tag tag-gray-dark">Dark gray tag</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tag4"><pre><code class="language-markup"><script type="html-volgh/script"><div class="tags">
	<span class="tag tag-blue">Blue tag</span>
	<span class="tag tag-azure">Azure tag</span>
	<span class="tag tag-indigo">Indigo tag</span>
	<span class="tag tag-purple">Purple tag</span>
	<span class="tag tag-pink">Pink tag</span>
	<span class="tag tag-red">Red tag</span>
	<span class="tag tag-orange">Orange tag</span>
	<span class="tag tag-yellow">Yellow tag</span>
	<span class="tag tag-lime">Lime tag</span>
	<span class="tag tag-green">Green tag</span>
	<span class="tag tag-teal">Teal tag</span>
	<span class="tag tag-cyan">Cyan tag</span>
	<span class="tag tag-gray">Gray tag</span>
	<span class="tag tag-gray-dark">Dark gray tag</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tag4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Avatar tag</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag">
														<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/11.jpg')}}"></span>
														Victoria
													</span>
													<span class="tag">
														<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}"></span>
														Nathan
													</span>
													<span class="tag">
														<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
														Alice
													</span>
													<span class="tag">
														<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/18.jpg')}}"></span>
														Rose
													</span>
													<span class="tag">
														<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/16.jpg')}}"></span>
														Peter
													</span>
													<span class="tag">
														<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}"></span>
														Wayne
													</span>
													<span class="tag">
														<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}"></span>
														Michelle
													</span>
													<span class="tag">
														<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/17.jpg')}}"></span>
														Debra
													</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tag5"><pre><code class="language-markup"><script type="html-volgh/script"><div class="tags">
	<span class="tag">
		<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/11.jpg')}}"></span>
		Victoria
	</span>
	<span class="tag">
		<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}"></span>
		Nathan
	</span>
	<span class="tag">
		<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
		Alice
	</span>
	<span class="tag">
		<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/18.jpg')}}"></span>
		Rose
	</span>
	<span class="tag">
		<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/16.jpg')}}"></span>
		Peter
	</span>
	<span class="tag">
		<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}"></span>
		Wayne
	</span>
	<span class="tag">
		<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}"></span>
		Michelle
	</span>
	<span class="tag">
		<span class="tag-avatar avatar cover-image" data-image-src="{{URL::asset('assets/images/users/17.jpg')}}"></span>
		Debra
	</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tag5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List of tags</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>You can create a list of tags with the <code class="highlighter-rouge">.tags</code> container.</p>
											<div class="example">
												<div class="tags">
													<span class="tag">First tag</span>
													<span class="tag">Second tag</span>
													<span class="tag">Third tag</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tag6"><pre><code class="language-markup"><script type="html-volgh/script"><div class="tags">
	<span class="tag">First tag</span>
	<span class="tag">Second tag</span>
	<span class="tag">Third tag</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tag6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
											<p class="mt-4">If the list is very long, it will automatically wrap on multiple lines, while keeping all tags evenly spaced.</p>
											<div class="example">
												<div class="tags">
													<span class="tag">One</span>
													<span class="tag">Two</span>
													<span class="tag">Three</span>
													<span class="tag">Four</span>
													<span class="tag">Five</span>
													<span class="tag">Six</span>
													<span class="tag">Seven</span>
													<span class="tag">Eight</span>
													<span class="tag">Nine</span>
													<span class="tag">Ten</span>
													<span class="tag">Eleven</span>
													<span class="tag">Twelve</span>
													<span class="tag">Thirteen</span>
													<span class="tag">Fourteen</span>
													<span class="tag">Fifteen</span>
													<span class="tag">Sixteen</span>
													<span class="tag">Seventeen</span>
													<span class="tag">Eighteen</span>
													<span class="tag">Nineteen</span>
													<span class="tag">Twenty</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tag7"><pre><code class="language-markup"><script type="html-volgh/script"><div class="tags">
	<span class="tag">One</span>
	<span class="tag">Two</span>
	<span class="tag">Three</span>
	<span class="tag">Four</span>
	<span class="tag">Five</span>
	<span class="tag">Six</span>
	<span class="tag">Seven</span>
	<span class="tag">Eight</span>
	<span class="tag">Nine</span>
	<span class="tag">Ten</span>
	<span class="tag">Eleven</span>
	<span class="tag">Twelve</span>
	<span class="tag">Thirteen</span>
	<span class="tag">Fourteen</span>
	<span class="tag">Fifteen</span>
	<span class="tag">Sixteen</span>
	<span class="tag">Seventeen</span>
	<span class="tag">Eighteen</span>
	<span class="tag">Nineteen</span>
	<span class="tag">Twenty</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tag7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Tag remove</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag">
														One
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag">
														Two
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag">
														Three
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag">
														Four
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tag8"><pre><code class="language-markup"><script type="html-volgh/script"><div class="tags">
	<span class="tag">
		One
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag">
		Two
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag">
		Three
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag">
		Four
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tag8"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Tag addons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<div class="tag">
														npm
														<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
													</div>
													<div class="tag tag-danger">
														npm
														<span class="tag-addon"><i class="fe fe-activity"></i></span>
													</div>
													<div class="tag">
														bundle
														<span class="tag-addon tag-success">passing</span>
													</div>
													<span class="tag tag-dark">
														CSS gzip size
														<span class="tag-addon tag-warning">20.9 kB</span>
													</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tag9"><pre><code class="language-markup"><script type="html-volgh/script"><div class="tags">
	<div class="tag">
		npm
		<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
	</div>
	<div class="tag tag-danger">
		npm
		<span class="tag-addon"><i class="fe fe-activity"></i></span>
	</div>
	<div class="tag">
		bundle
		<span class="tag-addon tag-success">passing</span>
	</div>
	<span class="tag tag-dark">
		CSS gzip size
		<span class="tag-addon tag-warning">20.9 kB</span>
	</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tag9"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-2 CLOSED -->
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
