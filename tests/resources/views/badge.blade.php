@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Badges</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Badges</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title">Badges</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<span class="badge badge-default mr-1 mb-1 mt-1">Default</span>
											<span class="badge badge-primary  mr-1 mb-1 mt-1">Primary</span>
											<span class="badge badge-success  mr-1 mb-1 mt-1">Success</span>
											<span class="badge badge-danger  mr-1 mb-1 mt-1">Danger</span>
											<span class="badge badge-info  mr-1 mb-1 mt-1">Info</span>
											<span class="badge badge-warning  mr-1 mb-1 mt-1">Warning</span>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge1"><pre><code class="language-markup"><script type="html-volgh/script"><span class="badge badge-default mr-1 mb-1 mt-1">Default</span>
<span class="badge badge-primary  mr-1 mb-1 mt-1">Primary</span>
<span class="badge badge-success  mr-1 mb-1 mt-1">Success</span>
<span class="badge badge-danger  mr-1 mb-1 mt-1">Danger</span>
<span class="badge badge-info  mr-1 mb-1 mt-1">Info</span>
<span class="badge badge-warning  mr-1 mb-1 mt-1">Warning</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12 col-lg-12">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title">gradient Badges</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<span class="badge badge-default mr-1 mb-1 mt-1">Default</span>
											<span class="badge badge-primary-gradient  mr-1 mb-1 mt-1">Primary</span>
											<span class="badge badge-success-gradient  mr-1 mb-1 mt-1">Success</span>
											<span class="badge badge-danger-gradient  mr-1 mb-1 mt-1">Danger</span>
											<span class="badge badge-info-gradient  mr-1 mb-1 mt-1">Info</span>
											<span class="badge badge-warning-gradient  mr-1 mb-1 mt-1">Warning</span>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge2"><pre><code class="language-markup"><script type="html-volgh/script"><span class="badge badge-default mr-1 mb-1 mt-1">Default</span>
<span class="badge badge-primary-gradient  mr-1 mb-1 mt-1">Primary</span>
<span class="badge badge-success-gradient  mr-1 mb-1 mt-1">Success</span>
<span class="badge badge-danger-gradient  mr-1 mb-1 mt-1">Danger</span>
<span class="badge badge-info-gradient  mr-1 mb-1 mt-1">Info</span>
<span class="badge badge-warning-gradient  mr-1 mb-1 mt-1">Warning</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12 col-lg-12">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title">Pill Badges</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<span class="badge badge-pill badge-default mr-1 mb-1 mt-1">Default</span>
											<span class="badge badge-pill badge-primary mr-1 mb-1 mt-1">Primary</span>
											<span class="badge badge-pill badge-success mr-1 mb-1 mt-1">Success</span>
											<span class="badge badge-pill badge-danger mr-1 mb-1 mt-1">Danger</span>
											<span class="badge badge-pill badge-info mr-1 mb-1 mt-1">Info</span>
											<span class="badge badge-pill badge-warning mr-1 mb-1 mt-1">Warning</span>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge3"><pre><code class="language-markup"><script type="html-volgh/script"><span class="badge badge-pill badge-default mr-1 mb-1 mt-1">Default</span>
<span class="badge badge-pill badge-primary mr-1 mb-1 mt-1">Primary</span>
<span class="badge badge-pill badge-success mr-1 mb-1 mt-1">Success</span>
<span class="badge badge-pill badge-danger mr-1 mb-1 mt-1">Danger</span>
<span class="badge badge-pill badge-info mr-1 mb-1 mt-1">Info</span>
<span class="badge badge-pill badge-warning mr-1 mb-1 mt-1">Warning</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge3"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12 col-lg-12">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title">gradient Pill Badges</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<span class="badge badge-pill badge-default mr-1 mb-1 mt-1">Default</span>
											<span class="badge badge-pill badge-primary-gradient mr-1 mb-1 mt-1">Primary</span>
											<span class="badge badge-pill badge-success-gradient mr-1 mb-1 mt-1">Success</span>
											<span class="badge badge-pill badge-danger-gradient mr-1 mb-1 mt-1">Danger</span>
											<span class="badge badge-pill badge-info-gradient mr-1 mb-1 mt-1">Info</span>
											<span class="badge badge-pill badge-warning-gradient mr-1 mb-1 mt-1">Warning</span>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge4"><pre><code class="language-markup"><script type="html-volgh/script"><span class="badge badge-pill badge-default mr-1 mb-1 mt-1">Default</span>
<span class="badge badge-pill badge-primary-gradient mr-1 mb-1 mt-1">Primary</span>
<span class="badge badge-pill badge-success-gradient mr-1 mb-1 mt-1">Success</span>
<span class="badge badge-pill badge-danger-gradient mr-1 mb-1 mt-1">Danger</span>
<span class="badge badge-pill badge-info-gradient mr-1 mb-1 mt-1">Info</span>
<span class="badge badge-pill badge-warning-gradient mr-1 mb-1 mt-1">Warning</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-xl-12">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title">Buttons with Badges</h3>
									</div>
									<div class="card-body ">
										<div class="example">
											<button type="button" class="btn btn-primary mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-white">2</span>
											</button>
											<button type="button" class="btn btn-secondary  mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-dark">2</span>
											</button>
											<button type="button" class="btn btn-success  mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-info">2</span>
											</button>
											<button type="button" class="btn btn-info  mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-danger">2</span>
											</button>
											<button type="button" class="btn btn-warning text-dark mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-primary">2</span>
											</button>
											<button type="button" class="btn btn-danger  mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-info">2</span>
											</button>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge5"><pre><code class="language-markup"><script type="html-volgh/script"><button type="button" class="btn btn-primary mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-white">2</span>
</button>
<button type="button" class="btn btn-secondary  mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-dark">2</span>
</button>
<button type="button" class="btn btn-success  mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-info">2</span>
</button>
<button type="button" class="btn btn-info  mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-danger">2</span>
</button>
<button type="button" class="btn btn-warning text-dark mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-primary">2</span>
</button>
<button type="button" class="btn btn-danger  mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-info">2</span>
</button></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Badges</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<h1>Heading 01 <span class="badge badge-default">New</span></h1>
											<h2>Heading 02 <span class="badge badge-default">New</span></h2>
											<h3>Heading 03 <span class="badge badge-default">New</span></h3>
											<h4>Heading 04 <span class="badge badge-default">New</span></h4>
											<h5>Heading 05 <span class="badge badge-default">New</span></h5>
											<h6>Heading 06 <span class="badge badge-default">New</span></h6>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge6"><pre><code class="language-markup"><script type="html-volgh/script"><h1>Heading 01 <span class="badge badge-default">New</span></h1>
<h2>Heading 02 <span class="badge badge-default">New</span></h2>
<h3>Heading 03 <span class="badge badge-default">New</span></h3>
<h4>Heading 04 <span class="badge badge-default">New</span></h4>
<h5>Heading 05 <span class="badge badge-default">New</span></h5>
<h6>Heading 06 <span class="badge badge-default">New</span></h6></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Colored Badges</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<h1 class="text-primary">Heading 01 <span class="badge badge-primary">New</span></h1>
											<h2  class="text-red">Heading 02 <span class="badge badge-danger">New</span></h2>
											<h3  class="text-yellow">Heading 03 <span class="badge badge-warning">New</span></h3>
											<h4  class="text-green">Heading 04 <span class="badge badge-success">New</span></h4>
											<h5  class="text-info">Heading 05 <span class="badge badge-info">New</span></h5>
											<h6  class="text-secondary">Heading 06 <span class="badge badge-secondary">New</span></h6>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge7"><pre><code class="language-markup"><script type="html-volgh/script"><h1 class="text-primary">Heading 01 <span class="badge badge-primary">New</span></h1>
<h2  class="text-red">Heading 02 <span class="badge badge-danger">New</span></h2>
<h3  class="text-yellow">Heading 03 <span class="badge badge-warning">New</span></h3>
<h4  class="text-green">Heading 04 <span class="badge badge-success">New</span></h4>
<h5  class="text-info">Heading 05 <span class="badge badge-info">New</span></h5>
<h6  class="text-secondary">Heading 06 <span class="badge badge-secondary">New</span></h6></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-3 CLOSED -->

						<!-- ROW-4 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual variations</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<span class="badge badge-default mt-2">Default</span>
											<span class="badge badge-primary mt-2">Primary</span>
											<span class="badge badge-success mt-2">Success</span>
											<span class="badge badge-info mt-2">Info</span>
											<span class="badge badge-warning mt-2">Warning</span>
											<span class="badge badge-danger mt-2">Danger</span>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge8"><pre><code class="language-markup"><script type="html-volgh/script"><span class="badge badge-default mt-2">Default</span>
<span class="badge badge-primary mt-2">Primary</span>
<span class="badge badge-success mt-2">Success</span>
<span class="badge badge-info mt-2">Info</span>
<span class="badge badge-warning mt-2">Warning</span>
<span class="badge badge-danger mt-2">Danger</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge8"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pill Badges</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<span class="badge badge-pill badge-default mt-2">Default</span>
											<span class="badge badge-pill badge-primary mt-2">Primary</span>
											<span class="badge badge-pill badge-success mt-2">Success</span>
											<span class="badge badge-pill badge-info mt-2">Info</span>
											<span class="badge badge-pill badge-warning mt-2">Warning</span>
											<span class="badge badge-pill badge-danger mt-2">Danger</span>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge9"><pre><code class="language-markup"><script type="html-volgh/script"><span class="badge badge-pill badge-default mt-2">Default</span>
<span class="badge badge-pill badge-primary mt-2">Primary</span>
<span class="badge badge-pill badge-success mt-2">Success</span>
<span class="badge badge-pill badge-info mt-2">Info</span>
<span class="badge badge-pill badge-warning mt-2">Warning</span>
<span class="badge badge-pill badge-danger mt-2">Danger</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge9"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End  Prism Precode -->
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-4 CLOSED -->
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
