@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">List</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">List</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic List Group</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="list-group-item">Cras justo odio</li>
												<li class="list-group-item">Dapibus ac facilisis in</li>
												<li class="list-group-item">Morbi leo risus</li>
												<li class="list-group-item">Porta ac consectetur ac</li>
												<li class="list-group-item">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list1"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="list-group-item">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Active List item</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="list-group-item active">Cras justo odio</li>
												<li class="list-group-item">Dapibus ac facilisis in</li>
												<li class="list-group-item">Morbi leo risus</li>
												<li class="list-group-item">Porta ac consectetur ac</li>
												<li class="list-group-item">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list2"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="list-group-item active">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Order list</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="listorder">Cras justo odio</li>
												<li class="listorder">Dapibus ac facilisis in</li>
												<li class="listorder">Morbi leo risus</li>
												<li class="listorder">Porta ac consectetur ac</li>
												<li class="listorder">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list3"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="listorder">Cras justo odio</li>
	<li class="listorder">Dapibus ac facilisis in</li>
	<li class="listorder">Morbi leo risus</li>
	<li class="listorder">Porta ac consectetur ac</li>
	<li class="listorder">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Unorder list</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="listunorder">Cras justo odio</li>
												<li class="listunorder">Dapibus ac facilisis in</li>
												<li class="listunorder">Morbi leo risus</li>
												<li class="listunorder">Porta ac consectetur ac</li>
												<li class="listunorder">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list4"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="listunorder">Cras justo odio</li>
	<li class="listunorder">Dapibus ac facilisis in</li>
	<li class="listunorder">Morbi leo risus</li>
	<li class="listunorder">Porta ac consectetur ac</li>
	<li class="listunorder">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Order list</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="listorder1">Cras justo odio</li>
												<li class="listorder1">Dapibus ac facilisis in</li>
												<li class="listorder1">Morbi leo risus</li>
												<li class="listorder1">Porta ac consectetur ac</li>
												<li class="listorder1">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list5"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="listorder1">Cras justo odio</li>
	<li class="listorder1">Dapibus ac facilisis in</li>
	<li class="listorder1">Morbi leo risus</li>
	<li class="listorder1">Porta ac consectetur ac</li>
	<li class="listorder1">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Unorder list</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="listunorder1">Cras justo odio</li>
												<li class="listunorder1">Dapibus ac facilisis in</li>
												<li class="listunorder1">Morbi leo risus</li>
												<li class="listunorder1">Porta ac consectetur ac</li>
												<li class="listunorder1">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list6"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="listunorder1">Cras justo odio</li>
	<li class="listunorder1">Dapibus ac facilisis in</li>
	<li class="listunorder1">Morbi leo risus</li>
	<li class="listunorder1">Porta ac consectetur ac</li>
	<li class="listunorder1">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Disabled  List item</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="list-group-item disabled">Cras justo odio</li>
												<li class="list-group-item">Dapibus ac facilisis in</li>
												<li class="list-group-item">Morbi leo risus</li>
												<li class="list-group-item">Porta ac consectetur ac</li>
												<li class="list-group-item">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list7"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="list-group-item disabled">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual classes with List Group</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="list-group-item">Dapibus ac facilisis in</li>
												<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
												<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
												<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
												<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list8"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
	<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
	<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
	<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list8"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 CLOSEDE -->

						<!-- ROW-4 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group with icons</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Cras justo odio</li>
												<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Dapibus ac facilisis in</li>
												<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Morbi leo risus</li>
												<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Porta ac consectetur ac</li>
												<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list9"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Cras justo odio</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Dapibus ac facilisis in</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Morbi leo risus</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Porta ac consectetur ac</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list9"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group with colored icons</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="list-group-item"><i class="fa fa-cog text-primary" aria-hidden="true"></i> Dapibus ac facilisis in</li>
												<li class="list-group-item"><i class="fa fa-cog text-danger" aria-hidden="true"></i> Dapibus ac facilisis in</li>
												<li class="list-group-item"><i class="fa fa-cog text-success" aria-hidden="true"></i> Cras sit amet nibh libero</li>
												<li class="list-group-item"><i class="fa fa-cog text-warning" aria-hidden="true"></i> Porta ac consectetur ac</li>
												<li class="list-group-item"><i class="fa fa-cog text-info" aria-hidden="true"></i> Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list10"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="list-group-item"><i class="fa fa-cog text-primary" aria-hidden="true"></i> Dapibus ac facilisis in</li>
	<li class="list-group-item"><i class="fa fa-cog text-danger" aria-hidden="true"></i> Dapibus ac facilisis in</li>
	<li class="list-group-item"><i class="fa fa-cog text-success" aria-hidden="true"></i> Cras sit amet nibh libero</li>
	<li class="list-group-item"><i class="fa fa-cog text-warning" aria-hidden="true"></i> Porta ac consectetur ac</li>
	<li class="list-group-item"><i class="fa fa-cog text-info" aria-hidden="true"></i> Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list10"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With defalut badges</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="list-group-item">
													Cras justo odio
													<span class="badgetext badge badge-default badge-pill">20</span>
													</li>
													<li class="list-group-item">
													Dapibus ac facilisis in
													<span class=" badgetext badge badge-default badge-pill">15</span>
													</li>
													<li class="list-group-item">
													Morbi leo risus
													<span class=" badgetext badge badge-default badge-pill">10</span>
													</li>
													<li class="list-group-item">
													Porta ac consectetur ac
													<span class=" badgetext badge badge-default badge-pill">8</span>
													</li>
													<li class="list-group-item">
													Vestibulum at eros
													<span class=" badgetext badge badge-default badge-pill">1</span>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list11"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="list-group-item">
		Cras justo odio
		<span class="badgetext badge badge-default badge-pill">20</span>
		</li>
		<li class="list-group-item">
		Dapibus ac facilisis in
		<span class=" badgetext badge badge-default badge-pill">15</span>
		</li>
		<li class="list-group-item">
		Morbi leo risus
		<span class=" badgetext badge badge-default badge-pill">10</span>
		</li>
		<li class="list-group-item">
		Porta ac consectetur ac
		<span class=" badgetext badge badge-default badge-pill">8</span>
		</li>
		<li class="list-group-item">
		Vestibulum at eros
		<span class=" badgetext badge badge-default badge-pill">1</span>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list11"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With color badges</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-group">
												<li class="list-group-item justify-content-between">
												Cras justo odio
												<span class="badgetext badge badge-primary badge-pill">20</span>
												</li>
												<li class="list-group-item justify-content-between">
												Dapibus ac facilisis in
												<span class="badgetext badge badge-danger badge-pill">15</span>
												</li>
												<li class="list-group-item justify-content-between">
												Morbi leo risus
												<span class="badgetext badge badge-success badge-pill">10</span>
												</li>
												<li class="list-group-item justify-content-between">
												Porta ac consectetur ac
												<span class="badgetext badge badge-warning badge-pill">8</span>
												</li>
												<li class="list-group-item justify-content-between">
												Vestibulum at eros
												<span class="badgetext badge badge-info badge-pill">1</span>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list12"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="list-group">
	<li class="list-group-item justify-content-between">
	Cras justo odio
	<span class="badgetext badge badge-primary badge-pill">20</span>
	</li>
	<li class="list-group-item justify-content-between">
	Dapibus ac facilisis in
	<span class="badgetext badge badge-danger badge-pill">15</span>
	</li>
	<li class="list-group-item justify-content-between">
	Morbi leo risus
	<span class="badgetext badge badge-success badge-pill">10</span>
	</li>
	<li class="list-group-item justify-content-between">
	Porta ac consectetur ac
	<span class="badgetext badge badge-warning badge-pill">8</span>
	</li>
	<li class="list-group-item justify-content-between">
	Vestibulum at eros
	<span class="badgetext badge badge-info badge-pill">1</span>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list12"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End  Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-4 CLOSED -->

						<!-- ROW-5 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With Custom content</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="list-group">
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												</a>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list13"><pre><code class="language-markup"><script type="html-volgh/script"><div class="list-group">
<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
	<div class="d-flex w-100 justify-content-between">
		<h5 class="mb-1">List group item heading</h5>
		<small class="text-muted">3 days ago</small>
	</div>
	<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	<small class="text-muted">Donec id elit non mi porta.</small>
</a>
<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
	<div class="d-flex w-100 justify-content-between">
		<h5 class="mb-1">List group item heading</h5>
		<small class="text-muted">3 days ago</small>
	</div>
	<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	<small class="text-muted">Donec id elit non mi porta.</small>
</a>
<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
	<div class="d-flex w-100 justify-content-between">
		<h5 class="mb-1">List group item heading</h5>
		<small class="text-muted">3 days ago</small>
	</div>
	<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	<small class="text-muted">Donec id elit non mi porta.</small>
</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list13"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With Disabled Custom content</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="list-group">
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												</a>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list14"><pre><code class="language-markup"><script type="html-volgh/script"><div class="list-group">
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
	</a>
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
	</a>
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
	</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list14"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-5 CLOSED -->
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
