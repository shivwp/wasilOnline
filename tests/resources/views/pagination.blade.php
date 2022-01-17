@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Pagination</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Pagination</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Basic pagination</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="pagination-wrapper">
												<nav aria-label="Page navigation">
													<ul class="pagination mb-0">
														<li class="page-item active">
															<a class="page-link" href="#">1</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#">2</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#">3</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#">4</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#">5</a>
														</li>
														<li class="page-item">
															<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
														</li>
													</ul>
												</nav>
											</div>
										</div>
										<!-- PAGINATION-WRAPPER -->
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination1"><pre><code class="language-markup"><script type="html-volgh/script"><div class="pagination-wrapper">
	<nav aria-label="Page navigation">
		<ul class="pagination mb-0">
			<li class="page-item active">
				<a class="page-link" href="#">1</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">2</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">3</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">4</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">5</a>
			</li>
			<li class="page-item">
				<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
			</li>
		</ul>
	</nav>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-=1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic pagination</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="pagination">
												<li class="page-item page-prev disabled">
													<a class="page-link" href="#" tabindex="-1">Prev</a>
												</li>
												<li class="page-item active"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item"><a class="page-link" href="#">4</a></li>
												<li class="page-item page-next">
													<a class="page-link" href="#">Next</a>
												</li>
											</ul>
											<!-- PAGINATION-WRAPPER -->
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination2"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="pagination">
	<li class="page-item page-prev disabled">
		<a class="page-link" href="#" tabindex="-1">Prev</a>
	</li>
	<li class="page-item active"><a class="page-link" href="#">1</a></li>
	<li class="page-item"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#">4</a></li>
	<li class="page-item page-next">
		<a class="page-link" href="#">Next</a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- R0W-3 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Model Pagination</h3>
									</div>
									<div class="card-body ">
										<div class="example">
											<ul class="pagination mg-b-0 page-0">
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#">2</a>
												</li>
												<li class="page-item active">
													<a class="page-link" href="#">3</a>
												</li>
												<li class="page-item">
													<a class="page-link hidden-xs-down" href="#">4</a>
												</li>

												<li class="page-item">
													<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
												</li>
											</ul>
										</div>
										<!-- PAGINATION-WRAPPER -->
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination3"><pre><code class="language-markup"><script type="html-volgh/script"><ul class="pagination mg-b-0 page-0">
	<li class="page-item">
		<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
	</li>
	<li class="page-item">
		<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
	</li>
	<li class="page-item">
		<a class="page-link" href="#">2</a>
	</li>
	<li class="page-item active">
		<a class="page-link" href="#">3</a>
	</li>
	<li class="page-item">
		<a class="page-link hidden-xs-down" href="#">4</a>
	</li>
	<li class="page-item">
		<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
	</li>
	<li class="page-item">
		<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
								<!-- SECTION-WRAPPER -->
							</div><!-- COL-END -->
						</div>
						<!-- ROW-3 CLOSED -->

						<!-- ROW-4 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Model Pagination2</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<nav aria-label="Page navigation">
												<ul class="pagination pagination-success mb-0">
													<li class="page-item page-0">
														<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
													</li>
													<li class="page-item">
														<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
													</li>
													<li class="page-item active">
														<a class="page-link" href="#">4</a>
													</li>
													<li class="page-item disabled"><span class="page-link">...</span></li>
													<li class="page-item">
														<a class="page-link" href="#">10</a>
													</li>
													<li class="page-item page-0">
														<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
													</li>
													<li class="page-item">
														<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
													</li>
												</ul>
											</nav>
											<!-- PAGINATION-WRAPPER -->
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination4"><pre><code class="language-markup"><script type="html-volgh/script"><nav aria-label="Page navigation">
	<ul class="pagination pagination-success mb-0">
		<li class="page-item page-0">
			<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
		</li>
		<li class="page-item">
			<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
		</li>
		<li class="page-item active">
			<a class="page-link" href="#">4</a>
		</li>
		<li class="page-item disabled"><span class="page-link">...</span></li>
		<li class="page-item">
			<a class="page-link" href="#">10</a>
		</li>
		<li class="page-item page-0">
			<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
		</li>
		<li class="page-item">
			<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-4 CLOSED -->

						<!-- ROW-5 -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Model Pagination2</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<nav aria-label="Page navigation example">
												<ul class="pagination">
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Previous">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Next">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination5"><pre><code class="language-markup"><script type="html-volgh/script"><nav aria-label="Page navigation example">
	<ul class="pagination">
		<li class="page-item">
			<a class="page-link" href="#" aria-label="Previous">
				<i class="fa fa-angle-left"></i>
				<span class="sr-only">Previous</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#" aria-label="Next">
				<i class="fa fa-angle-right"></i>
				<span class="sr-only">Next</span>
			</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pagination left alignment</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<nav aria-label="Page navigation example">
												<ul class="pagination ">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item active"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination6"><pre><code class="language-markup"><script type="html-volgh/script"><nav aria-label="Page navigation example">
	<ul class="pagination ">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1">
				<i class="fa fa-angle-left"></i>
				<span class="sr-only">Previous</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">
				<i class="fa fa-angle-right"></i>
				<span class="sr-only">Next</span>
			</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pagination center alignment</h3>
									</div>
									<div class="card-body">
										<div class="example">
											<nav aria-label="Page navigation example">
												<ul class="pagination justify-content-center">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item active"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination7"><pre><code class="language-markup"><script type="html-volgh/script"><nav aria-label="Page navigation example">
	<ul class="pagination justify-content-center">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1">
				<i class="fa fa-angle-left"></i>
				<span class="sr-only">Previous</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">
				<i class="fa fa-angle-right"></i>
				<span class="sr-only">Next</span>
			</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pagination Right Alignment</h3>
									</div>
									<div class="card-body ">
										<div class="example">
											<nav aria-label="Page navigation example">
												<ul class="pagination justify-content-end">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item active"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination8"><pre><code class="language-markup"><script type="html-volgh/script"><nav aria-label="Page navigation example">
	<ul class="pagination justify-content-end">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1">
				<i class="fa fa-angle-left"></i>
				<span class="sr-only">Previous</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">
				<i class="fa fa-angle-right"></i>
				<span class="sr-only">Next</span>
			</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination8"><i class="fa fa-clipboard"></i></div>
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
