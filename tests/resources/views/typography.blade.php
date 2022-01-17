@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Typography</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Typography</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Heading Text</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
											<div class="example">
												<h1>h1. Heading</h1>
												<h2>h2. Heading</h2>
												<h3>h3. Heading</h3>
												<h4>h4. Heading</h4>
												<h5>h5. Heading</h5>
												<h6>h6. Heading</h6>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo1"><pre><code class="language-markup"><script type="html-volgh/script"><h1>h1. Heading</h1>
<h2>h2. Heading</h2>
<h3>h3. Heading</h3>
<h4>h4. Heading</h4>
<h5>h5. Heading</h5>
<h6>h6. Heading</h6>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- /Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Heading with color Text</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
											<div class="example">
												<h1 class="text-primary">h1. Heading</h1>
												<h2  class="text-secondary">h2. Heading</h2>
												<h3  class="text-success">h3. Heading</h3>
												<h4  class="text-danger">h4. Heading</h4>
												<h5  class="text-info">h5. Heading</h5>
												<h6  class="text-warning">h6. Heading</h6>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo2"><pre><code class="language-markup"><script type="html-volgh/script"><h1 class="text-primary">h1. Heading</h1>
<h2  class="text-secondary">h2. Heading</h2>
<h3  class="text-success">h3. Heading</h3>
<h4  class="text-danger">h4. Heading</h4>
<h5  class="text-info">h5. Heading</h5>
<h6  class="text-warning">h6. Heading</h6>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- /Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Heading-Inverse</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using <code>heading-inverse</code> css</p>
											<div class="example">
												<h1 class="heading-inverse">h1. Heading</h1>
												<h2 class="heading-secondary">h2. Heading</h2>
												<h3 class="heading-inverse">h3. Heading</h3>
												<h4 class="heading-inverse">h4. Heading</h4>
												<h5 class="heading-inverse">h5. Heading</h5>
												<h6 class="heading-inverse">h6. Heading</h6>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo3"><pre><code class="language-markup"><script type="html-volgh/script"><h1 class="heading-inverse">h1. Heading</h1>
<h2 class="heading-secondary">h2. Heading</h2>
<h3 class="heading-inverse">h3. Heading</h3>
<h4 class="heading-inverse">h4. Heading</h4>
<h5 class="heading-inverse">h5. Heading</h5>
<h6 class="heading-inverse">h6. Heading</h6>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Heading primary to danger</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using <code>heading-primary</code> to <code>heading-danger</code> css</p>
											<div class="example">
												<h1 class="heading-primary">h1. Heading</h1>
												<h2 class="heading-secondary">h2. Heading</h2>
												<h3 class="heading-success">h3. Heading</h3>
												<h4 class="heading-info">h4. Heading</h4>
												<h5 class="heading-warning">h5. Heading</h5>
												<h6 class="heading-danger">h6. Heading</h6>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo4"><pre><code class="language-markup"><script type="html-volgh/script"><h1 class="heading-primary">h1. Heading</h1>
<h2 class="heading-secondary">h2. Heading</h2>
<h3 class="heading-success">h3. Heading</h3>
<h4 class="heading-info">h4. Heading</h4>
<h5 class="heading-warning">h5. Heading</h5>
<h6 class="heading-danger">h6. Heading</h6>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row row-deck">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Height</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Utilities for controlling the leading (line height) of an element.</p>
											<div class="example">
												<p class="leading-none">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-tight">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-normal">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-loose m-0">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo5"><pre><code class="language-markup"><script type="html-volgh/script"><p class="leading-none">Lorem ipsum dolor sit amet.<br />
	Dolor sit amet.
</p>
<p class="leading-tight">Lorem ipsum dolor sit amet.<br />
	Dolor sit amet.
</p>
<p class="leading-normal">Lorem ipsum dolor sit amet.<br />
	Dolor sit amet.
</p>
<p class="leading-loose m-0">Lorem ipsum dolor sit amet.<br />
	Dolor sit amet.
</p>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Text alignment</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Easily realign text to components with text alignment classes.</p>
											<div class="example">
												<p class="text-left">Left aligned text on all viewport sizes.</p>
												<p class="text-center">Center aligned text on all viewport sizes.</p>
												<p class="text-right">Right aligned text on all viewport sizes.</p>
												<p class="text-justify m-0">Both aligned text on all viewport sizes. Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.</p>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo6"><pre><code class="language-markup"><script type="html-volgh/script"><p class="text-left">Left aligned text on all viewport sizes.</p>
<p class="text-center">Center aligned text on all viewport sizes.</p>
<p class="text-right">Right aligned text on all viewport sizes.</p>
<p class="text-justify m-0">Both aligned text on all viewport sizes. Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.</p>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-3 CLOSED -->

						<!-- ROW-4 OPEN -->
						<div class="row">
							<div class="col-lg- col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Paragraph Text</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
												<p class="lead">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid. The former case isn’t worth discussing here, but the latter requires a closer look.</p>
												<p>You can use the mark tag to <mark>highlight</mark> text.</p>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo7"><pre><code class="language-markup"><script type="html-volgh/script"><p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<p class="lead">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid. The former case isn’t worth discussing here, but the latter requires a closer look.</p>
<p>You can use the mark tag to <mark>highlight</mark> text.</p>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-4 CLOSED -->

						<!-- ROW-5 OPEN -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Letter spacing</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Utilities for controlling the tracking (letter spacing) of an element.</p>
											<div class="example">
												<p class="tracking-tight">Lorem ipsum dolor sit amet. Tight letter spacing.</p>
												<p class="tracking-normal">Lorem ipsum dolor sit amet. Normal letter spacing.</p>
												<p class="tracking-wide m-0">Lorem ipsum dolor sit amet. Wide letter spacing.</p>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo8"><pre><code class="language-markup"><script type="html-volgh/script"><p class="tracking-tight">Lorem ipsum dolor sit amet. Tight letter spacing.</p>
<p class="tracking-normal">Lorem ipsum dolor sit amet. Normal letter spacing.</p>
<p class="tracking-wide m-0">Lorem ipsum dolor sit amet. Wide letter spacing.</p>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo8"><i class="fa fa-clipboard"></i></div>
</figure>
<!--End  Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
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
