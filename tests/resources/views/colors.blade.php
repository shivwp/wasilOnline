@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Colors</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Colors</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual colors</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="row">
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-primary  mr-4"></div>
															<div>
																<strong>Primary</strong><br>
																<code>.bg-primary</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-info  mr-4"></div>
															<div>
																<strong>Info</strong><br>
																<code>.bg-info</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-secondary  mr-4"></div>
															<div>
																<strong>Secondary</strong><br>
																<code>.bg-secondary</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-warning  mr-4"></div>
															<div>
																<strong>Warning</strong><br>
																<code>.bg-warning</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-danger  mr-4"></div>
															<div>
																<strong>Danger</strong><br>
																<code>.bg-danger</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-success  mr-4"></div>
															<div>
																<strong>Success</strong><br>
																<code>.bg-success</code>
															</div>
														</div>
													</div><!-- COL END -->
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="color1"><pre><code class="language-markup"><script type="html-volgh/script"><div class="row">
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-primary  mr-4"></div>
			<div>
				<strong>Primary</strong><br>
				<code>.bg-primary</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-info  mr-4"></div>
			<div>
				<strong>Info</strong><br>
				<code>.bg-info</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-secondary  mr-4"></div>
			<div>
				<strong>Secondary</strong><br>
				<code>.bg-secondary</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-warning  mr-4"></div>
			<div>
				<strong>Warning</strong><br>
				<code>.bg-warning</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-danger  mr-4"></div>
			<div>
				<strong>Danger</strong><br>
				<code>.bg-danger</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-success  mr-4"></div>
			<div>
				<strong>Success</strong><br>
				<code>.bg-success</code>
			</div>
		</div>
	</div><!-- COL END -->
</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#color1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Gradient colors</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="row">
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-primary-gradient  mr-4"></div>
															<div>
																<strong>Primary</strong><br>
																<code>.bg-primary-gradient</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-info-gradient  mr-4"></div>
															<div>
																<strong>Info</strong><br>
																<code>.bg-info-gradient</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-secondary-gradient  mr-4"></div>
															<div>
																<strong>Secondary</strong><br>
																<code>.bg-secondary-gradient</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-warning-gradient  mr-4"></div>
															<div>
																<strong>Warning</strong><br>
																<code>.bg-warning-gradient</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-danger-gradient  mr-4"></div>
															<div>
																<strong>Danger</strong><br>
																<code>.bg-danger-gradient</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-success-gradient  mr-4"></div>
															<div>
																<strong>Success</strong><br>
																<code>.bg-success-gradient</code>
															</div>
														</div>
													</div><!-- COL END -->
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="color2"><pre><code class="language-markup"><script type="html-volgh/script"><div class="row">
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-primary-gradient  mr-4"></div>
			<div>
				<strong>Primary</strong><br>
				<code>.bg-primary-gradient</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-info-gradient  mr-4"></div>
			<div>
				<strong>Info</strong><br>
				<code>.bg-info-gradient</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-secondary-gradient  mr-4"></div>
			<div>
				<strong>Secondary</strong><br>
				<code>.bg-secondary-gradient</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-warning-gradient  mr-4"></div>
			<div>
				<strong>Warning</strong><br>
				<code>.bg-warning-gradient</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-danger-gradient  mr-4"></div>
			<div>
				<strong>Danger</strong><br>
				<code>.bg-danger-gradient</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-success-gradient  mr-4"></div>
			<div>
				<strong>Success</strong><br>
				<code>.bg-success-gradient</code>
			</div>
		</div>
	</div><!-- COL END -->
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#color2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Other colors</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="row">
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-blue  mr-4"></div>
															<div>
																<strong>Blue</strong><br>
																<code>.bg-blue</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-red  mr-4"></div>
															<div>
																<strong>Red</strong><br>
																<code>.bg-red</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-teal  mr-4"></div>
															<div>
																<strong>Teal</strong><br>
																<code>.bg-teal</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-azure   mr-4"></div>
															<div>
																<strong>Azure</strong><br>
																<code>.bg-azure </code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-orange  mr-4"></div>
															<div>
																<strong>Orange</strong><br>
																<code>.bg-orange</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-cyan  mr-4"></div>
															<div>
																<strong>Cyan</strong><br>
																<code>.bg-cyan</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-indigo  mr-4"></div>
															<div>
																<strong>Indigo</strong><br>
																<code>.bg-indigo</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-yellow  mr-4"></div>
															<div>
																<strong>Yellow</strong><br>
																<code>.bg-yellow</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-gray  mr-4"></div>
															<div>
																<strong>Gray</strong><br>
																<code>.bg-gray</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-purple   mr-4"></div>
															<div>
																<strong>Purple</strong><br>
																<code>.bg-purple </code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-lime  mr-4"></div>
															<div>
																<strong>Lime</strong><br>
																<code>.bg-lime</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-gray-dark  mr-4"></div>
															<div>
																<strong>Dark Gray</strong><br>
																<code>.bg-gray-dark</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-pink   mr-4"></div>
															<div>
																<strong>Pink</strong><br>
																<code>.bg-pink </code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-green  mr-4"></div>
															<div>
																<strong>Green</strong><br>
																<code>.bg-green</code>
															</div>
														</div>
													</div><!-- COL END -->
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-7 h-7 bg-secondary  mr-4"></div>
															<div>
																<strong>secondary</strong><br>
																<code>.bg-secondary</code>
															</div>
														</div>
													</div><!-- COL END -->
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="color3"><pre><code class="language-markup"><script type="html-volgh/script"><div class="row">
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-blue  mr-4"></div>
			<div>
				<strong>Blue</strong><br>
				<code>.bg-blue</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-red  mr-4"></div>
			<div>
				<strong>Red</strong><br>
				<code>.bg-red</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-teal  mr-4"></div>
			<div>
				<strong>Teal</strong><br>
				<code>.bg-teal</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-azure   mr-4"></div>
			<div>
				<strong>Azure</strong><br>
				<code>.bg-azure </code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-orange  mr-4"></div>
			<div>
				<strong>Orange</strong><br>
				<code>.bg-orange</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-cyan  mr-4"></div>
			<div>
				<strong>Cyan</strong><br>
				<code>.bg-cyan</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-indigo  mr-4"></div>
			<div>
				<strong>Indigo</strong><br>
				<code>.bg-indigo</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-yellow  mr-4"></div>
			<div>
				<strong>Yellow</strong><br>
				<code>.bg-yellow</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-gray  mr-4"></div>
			<div>
				<strong>Gray</strong><br>
				<code>.bg-gray</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-purple   mr-4"></div>
			<div>
				<strong>Purple</strong><br>
				<code>.bg-purple </code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-lime  mr-4"></div>
			<div>
				<strong>Lime</strong><br>
				<code>.bg-lime</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-gray-dark  mr-4"></div>
			<div>
				<strong>Dark Gray</strong><br>
				<code>.bg-gray-dark</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-pink   mr-4"></div>
			<div>
				<strong>Pink</strong><br>
				<code>.bg-pink </code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-green  mr-4"></div>
			<div>
				<strong>Green</strong><br>
				<code>.bg-green</code>
			</div>
		</div>
	</div><!-- COL END -->
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-7 h-7 bg-secondary  mr-4"></div>
			<div>
				<strong>secondary</strong><br>
				<code>.bg-secondary</code>
			</div>
		</div>
	</div><!-- COL END -->
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="color3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
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
