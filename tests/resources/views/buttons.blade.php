@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Buttons</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Buttons</li>
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
										<h3 class="card-title">Default Button</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Use any of the available button classes to quickly create a styled button.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-default">Default</a>
													<a href="#" class="btn btn-primary">Primary</a>
													<a href="#" class="btn btn-secondary">Secondary</a>
													<a href="#" class="btn btn-success">Success</a>
													<a href="#" class="btn btn-info">Info</a>
													<a href="#" class="btn btn-warning">Warning</a>
													<a href="#" class="btn btn-danger">Danger</a>
													<a href="#" class="btn btn-link">Link</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button1"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<a href="#" class="btn btn-default">Default</a>
	<a href="#" class="btn btn-primary">Primary</a>
	<a href="#" class="btn btn-secondary">Secondary</a>
	<a href="#" class="btn btn-success">Success</a>
	<a href="#" class="btn btn-info">Info</a>
	<a href="#" class="btn btn-warning">Warning</a>
	<a href="#" class="btn btn-danger">Danger</a>
	<a href="#" class="btn btn-link">Link</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">light buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Make buttons  the light to any <code class="highlighter-rouge">.btn</code> element. <code class="highlighter-rouge">&lt;a&gt;</code>s don’t support the light attribute, so you must add the <code class="highlighter-rouge">.light</code> class to make it visually appear light.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-default-light">Default</a>
													<a href="#" class="btn btn-primary-light ">Primary</a>
													<a href="#" class="btn btn-secondary-light ">Secondary</a>
													<a href="#" class="btn btn-success-light ">Success</a>
													<a href="#" class="btn btn-info-light ">Info</a>
													<a href="#" class="btn btn-warning-light ">Warning</a>
													<a href="#" class="btn btn-danger-light ">Danger</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button2"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<a href="#" class="btn btn-default-light">Default</a>
	<a href="#" class="btn btn-primary-light ">Primary</a>
	<a href="#" class="btn btn-secondary-light ">Secondary</a>
	<a href="#" class="btn btn-success-light ">Success</a>
	<a href="#" class="btn btn-info-light ">Info</a>
	<a href="#" class="btn btn-warning-light ">Warning</a>
	<a href="#" class="btn btn-danger-light ">Danger</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Disabled buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Make buttons  the disabled to any <code class="highlighter-rouge">.btn</code> element. <code class="highlighter-rouge">&lt;a&gt;</code>s don’t support the disabled attribute, so you must add the <code class="highlighter-rouge">.disabled</code> class to make it visually appear disabled.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-primary disabled">Primary</a>
													<a href="#" class="btn btn-secondary disabled">Secondary</a>
													<a href="#" class="btn btn-success disabled">Success</a>
													<a href="#" class="btn btn-info disabled">Info</a>
													<a href="#" class="btn btn-warning disabled">Warning</a>
													<a href="#" class="btn btn-danger disabled">Danger</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button3"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<a href="#" class="btn btn-primary disabled">Primary</a>
	<a href="#" class="btn btn-secondary disabled">Secondary</a>
	<a href="#" class="btn btn-success disabled">Success</a>
	<a href="#" class="btn btn-info disabled">Info</a>
	<a href="#" class="btn btn-warning disabled">Warning</a>
	<a href="#" class="btn btn-danger disabled">Danger</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button3"><i class="fa fa-clipboard"></i></div>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color variations</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>The classic button, in different colors.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-blue">Blue</a>
													<a href="#" class="btn btn-azure">Azure</a>
													<a href="#" class="btn btn-indigo">Indigo</a>
													<a href="#" class="btn btn-purple">Purple</a>
													<a href="#" class="btn btn-pink">Pink</a>
													<a href="#" class="btn btn-red">Red</a>
													<a href="#" class="btn btn-orange">Orange</a>
													<a href="#" class="btn btn-yellow">Yellow</a>
													<a href="#" class="btn btn-lime">Lime</a>
													<a href="#" class="btn btn-green">Green</a>
													<a href="#" class="btn btn-teal">Teal</a>
													<a href="#" class="btn btn-cyan">Cyan</a>
													<a href="#" class="btn btn-gray">Gray</a>
													<a href="#" class="btn btn-gray-dark">Dark gray</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button4"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<a href="#" class="btn btn-blue">Blue</a>
	<a href="#" class="btn btn-azure">Azure</a>
	<a href="#" class="btn btn-indigo">Indigo</a>
	<a href="#" class="btn btn-purple">Purple</a>
	<a href="#" class="btn btn-pink">Pink</a>
	<a href="#" class="btn btn-red">Red</a>
	<a href="#" class="btn btn-orange">Orange</a>
	<a href="#" class="btn btn-yellow">Yellow</a>
	<a href="#" class="btn btn-lime">Lime</a>
	<a href="#" class="btn btn-green">Green</a>
	<a href="#" class="btn btn-teal">Teal</a>
	<a href="#" class="btn btn-cyan">Cyan</a>
	<a href="#" class="btn btn-gray">Gray</a>
	<a href="#" class="btn btn-gray-dark">Dark gray</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Border buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>  The default modifier classes with the <code class="highlighter-rouge">.btn-outline-*</code> </p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-outline-default">Primary</a>
													<a href="#" class="btn btn-outline-primary">Primary</a>
													<a href="#" class="btn btn-outline-secondary">Secondary</a>
													<a href="#" class="btn btn-outline-success">Success</a>
													<a href="#" class="btn btn-outline-info">Info</a>
													<a href="#" class="btn btn-outline-warning">Warning</a>
													<a href="#" class="btn btn-outline-danger">Danger</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button5"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<a href="#" class="btn btn-outline-default">Primary</a>
	<a href="#" class="btn btn-outline-primary">Primary</a>
	<a href="#" class="btn btn-outline-secondary">Secondary</a>
	<a href="#" class="btn btn-outline-success">Success</a>
	<a href="#" class="btn btn-outline-info">Info</a>
	<a href="#" class="btn btn-outline-warning">Warning</a>
	<a href="#" class="btn btn-outline-danger">Danger</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Radius buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-radius</code> to button to remove border-radius.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-radius btn-default">Default</a>
													<a href="#" class="btn btn-radius btn-primary">Primary</a>
													<a href="#" class="btn btn-radius btn-secondary">Secondary</a>
													<a href="#" class="btn btn-radius btn-success">Success</a>
													<a href="#" class="btn btn-radius btn-info">Info</a>
													<a href="#" class="btn btn-radius btn-warning">Warning</a>
													<a href="#" class="btn btn-radius btn-danger">Danger</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button6"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<a href="#" class="btn btn-radius btn-default">Default</a>
	<a href="#" class="btn btn-radius btn-primary">Primary</a>
	<a href="#" class="btn btn-radius btn-secondary">Secondary</a>
	<a href="#" class="btn btn-radius btn-success">Success</a>
	<a href="#" class="btn btn-radius btn-info">Info</a>
	<a href="#" class="btn btn-radius btn-warning">Warning</a>
	<a href="#" class="btn btn-radius btn-danger">Danger</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Radius light buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-radius</code> to button to remove border-radius.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-radius btn-default-light">Default</a>
													<a href="#" class="btn btn-radius btn-primary-light ">Primary</a>
													<a href="#" class="btn btn-radius btn-secondary-light ">Secondary</a>
													<a href="#" class="btn btn-radius btn-success-light ">Success</a>
													<a href="#" class="btn btn-radius btn-info-light ">Info</a>
													<a href="#" class="btn btn-radius btn-warning-light ">Warning</a>
													<a href="#" class="btn btn-radius btn-danger-light ">Danger</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button7"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<a href="#" class="btn btn-radius btn-default-light">Default</a>
	<a href="#" class="btn btn-radius btn-primary-light ">Primary</a>
	<a href="#" class="btn btn-radius btn-secondary-light ">Secondary</a>
	<a href="#" class="btn btn-radius btn-success-light ">Success</a>
	<a href="#" class="btn btn-radius btn-info-light ">Info</a>
	<a href="#" class="btn btn-radius btn-warning-light ">Warning</a>
	<a href="#" class="btn btn-radius btn-danger-light ">Danger</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-pill</code> class to any button  more rounded.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-pill btn-default">Default</a>
													<a href="#" class="btn btn-pill btn-primary">Primary</a>
													<a href="#" class="btn btn-pill btn-secondary">Secondary</a>
													<a href="#" class="btn btn-pill btn-success">Success</a>
													<a href="#" class="btn btn-pill btn-info">Info</a>
													<a href="#" class="btn btn-pill btn-warning">Warning</a>
													<a href="#" class="btn btn-pill btn-danger">Danger</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button8"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<a href="#" class="btn btn-pill btn-default">Default</a>
	<a href="#" class="btn btn-pill btn-primary">Primary</a>
	<a href="#" class="btn btn-pill btn-secondary">Secondary</a>
	<a href="#" class="btn btn-pill btn-success">Success</a>
	<a href="#" class="btn btn-pill btn-info">Info</a>
	<a href="#" class="btn btn-pill btn-warning">Warning</a>
	<a href="#" class="btn btn-pill btn-danger">Danger</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button8"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded light buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-pill</code> class to any button  more rounded.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-pill btn-default-light">Default</a>
													<a href="#" class="btn btn-pill btn-primary-light">Primary</a>
													<a href="#" class="btn btn-pill btn-secondary-light">Secondary</a>
													<a href="#" class="btn btn-pill btn-success-light">Success</a>
													<a href="#" class="btn btn-pill btn-info-light">Info</a>
													<a href="#" class="btn btn-pill btn-warning-light">Warning</a>
													<a href="#" class="btn btn-pill btn-danger-light">Danger</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button9"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<a href="#" class="btn btn-pill btn-default-light">Default</a>
	<a href="#" class="btn btn-pill btn-primary-light">Primary</a>
	<a href="#" class="btn btn-pill btn-secondary-light">Secondary</a>
	<a href="#" class="btn btn-pill btn-success-light">Success</a>
	<a href="#" class="btn btn-pill btn-info-light">Info</a>
	<a href="#" class="btn btn-pill btn-warning-light">Warning</a>
	<a href="#" class="btn btn-pill btn-danger-light">Danger</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button9"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 CLOSED -->

						<!-- ROW-4 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button with icon</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Basic buttons are traditional buttons with borders color opitons.</p>
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-dark"><i class="fe fe-upload mr-2"></i>Upload</button>
													<button type="button" class="btn btn-warning"><i class="fe fe-heart mr-2"></i>I like</button>
													<button type="button" class="btn btn-success"><i class="fe fe-check mr-2"></i>I agree</button>
													<button type="button" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>More</button>
													<button type="button" class="btn btn-danger"><i class="fe fe-link mr-2"></i>Link</button>
													<button type="button" class="btn btn-info"><i class="fe fe-message-circle mr-2"></i>Comment</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button10"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<button type="button" class="btn btn-dark"><i class="fe fe-upload mr-2"></i>Upload</button>
	<button type="button" class="btn btn-warning"><i class="fe fe-heart mr-2"></i>I like</button>
	<button type="button" class="btn btn-success"><i class="fe fe-check mr-2"></i>I agree</button>
	<button type="button" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>More</button>
	<button type="button" class="btn btn-danger"><i class="fe fe-link mr-2"></i>Link</button>
	<button type="button" class="btn btn-info"><i class="fe fe-message-circle mr-2"></i>Comment</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button10"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button with icon animation</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Basic buttons are traditional buttons with borders color opitons.</p>
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-dark">Upload <i class="fa fa-upload fa-spin ml-2"></i></button>
													<button type="button" class="btn btn-warning">I like <i class="fa fa-heart fa-spin ml-2"></i></button>
													<button type="button" class="btn btn-success">I agree <i class="fa fa-check fa-spin ml-2"></i></button>
													<button type="button" class="btn btn-primary">More <i class="fa fa-plus fa-spin ml-2"></i></button>
													<button type="button" class="btn btn-danger">Link <i class="fa fa-link fa-spin ml-2"></i></button>
													<button type="button" class="btn btn-info">Comment <i class="fa fa-comment-o fa-spin ml-2"></i></button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button11"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<button type="button" class="btn btn-dark">Upload <i class="fa fa-upload fa-spin ml-2"></i></button>
	<button type="button" class="btn btn-warning">I like <i class="fa fa-heart fa-spin ml-2"></i></button>
	<button type="button" class="btn btn-success">I agree <i class="fa fa-check fa-spin ml-2"></i></button>
	<button type="button" class="btn btn-primary">More <i class="fa fa-plus fa-spin ml-2"></i></button>
	<button type="button" class="btn btn-danger">Link <i class="fa fa-link fa-spin ml-2"></i></button>
	<button type="button" class="btn btn-info">Comment <i class="fa fa-comment-o fa-spin ml-2"></i></button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button11"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-4 CLOSED -->

						<!-- ROW-5 OPEN -->
						<div  class="row">
							<div class="col-md-12 ">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button size</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> or <code class="highlighter-rouge">.btn-block</code> for additional sizes.</p>
											<div class="example">
												<div class="btn-list">
													<div class="row">
														<div class="col-md-4 mb-2">
															<button type="button" class="btn btn-warning btn-sm mb-1">Small button</button>
														</div>
														<div class="col-md-4 mb-2">
															<button type="button" class="btn btn-info mb-1">Medium button</button>
														</div>
														<div class="col-md-4 mb-2">
															<button type="button" class="btn btn-success btn-lg mb-1">Large button</button>
														</div>
													</div>
													<button type="button" class="btn btn-primary btn-block">Block level button</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button12"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<div class="row">
		<div class="col-md-4 mb-2">
			<button type="button" class="btn btn-warning btn-sm mb-1">Small button</button>
		</div>
		<div class="col-md-4 mb-2">
			<button type="button" class="btn btn-info mb-1">Medium button</button>
		</div>
		<div class="col-md-4 mb-2">
			<button type="button" class="btn btn-success btn-lg mb-1">Large button</button>
		</div>
	</div>
	<button type="button" class="btn btn-primary btn-block">Block level button</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button12"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Social buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-facebook"><i class="fa fa-facebook mr-2"></i>Facebook</button>
													<button type="button" class="btn btn-twitter"><i class="fa fa-twitter mr-2"></i>Twitter</button>
													<button type="button" class="btn btn-google"><i class="fa fa-google mr-2"></i>Google</button>
													<button type="button" class="btn btn-youtube"><i class="fa fa-youtube mr-2"></i>Youtube</button>
													<button type="button" class="btn btn-vimeo"><i class="fa fa-vimeo mr-2"></i>Vimeo</button>
													<button type="button" class="btn btn-dribbble"><i class="fa fa-dribbble mr-2"></i>Dribble</button>
													<button type="button" class="btn btn-github"><i class="fa fa-github mr-2"></i>Github</button>
													<button type="button" class="btn btn-instagram"><i class="fa fa-instagram mr-2"></i>Instagram</button>
													<button type="button" class="btn btn-pinterest"><i class="fa fa-pinterest mr-2"></i>Pinterest</button>
													<button type="button" class="btn btn-vk"><i class="fa fa-vk mr-2"></i>VKontakte</button>
													<button type="button" class="btn btn-rss"><i class="fa fa-rss mr-2"></i>RSS</button>
													<button type="button" class="btn btn-flickr"><i class="fa fa-flickr mr-2"></i>Flickr</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button13"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<button type="button" class="btn btn-facebook"><i class="fa fa-facebook mr-2"></i>Facebook</button>
	<button type="button" class="btn btn-twitter"><i class="fa fa-twitter mr-2"></i>Twitter</button>
	<button type="button" class="btn btn-google"><i class="fa fa-google mr-2"></i>Google</button>
	<button type="button" class="btn btn-youtube"><i class="fa fa-youtube mr-2"></i>Youtube</button>
	<button type="button" class="btn btn-vimeo"><i class="fa fa-vimeo mr-2"></i>Vimeo</button>
	<button type="button" class="btn btn-dribbble"><i class="fa fa-dribbble mr-2"></i>Dribble</button>
	<button type="button" class="btn btn-github"><i class="fa fa-github mr-2"></i>Github</button>
	<button type="button" class="btn btn-instagram"><i class="fa fa-instagram mr-2"></i>Instagram</button>
	<button type="button" class="btn btn-pinterest"><i class="fa fa-pinterest mr-2"></i>Pinterest</button>
	<button type="button" class="btn btn-vk"><i class="fa fa-vk mr-2"></i>VKontakte</button>
	<button type="button" class="btn btn-rss"><i class="fa fa-rss mr-2"></i>RSS</button>
	<button type="button" class="btn btn-flickr"><i class="fa fa-flickr mr-2"></i>Flickr</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button13"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-5 CLOSED -->

						<!-- ROW-6 OPEN -->
						<div  class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Social buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>You can use only icons.</p>
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
													<button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
													<button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
													<button type="button" class="btn btn-icon btn-youtube"><i class="fa fa-youtube"></i></button>
													<button type="button" class="btn btn-icon btn-vimeo"><i class="fa fa-vimeo"></i></button>
													<button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
													<button type="button" class="btn btn-icon btn-github"><i class="fa fa-github"></i></button>
													<button type="button" class="btn btn-icon btn-instagram"><i class="fa fa-instagram"></i></button>
													<button type="button" class="btn btn-icon btn-pinterest"><i class="fa fa-pinterest"></i></button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button14"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
	<button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
	<button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
	<button type="button" class="btn btn-icon btn-youtube"><i class="fa fa-youtube"></i></button>
	<button type="button" class="btn btn-icon btn-vimeo"><i class="fa fa-vimeo"></i></button>
	<button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
	<button type="button" class="btn btn-icon btn-github"><i class="fa fa-github"></i></button>
	<button type="button" class="btn btn-icon btn-instagram"><i class="fa fa-instagram"></i></button>
	<button type="button" class="btn btn-icon btn-pinterest"><i class="fa fa-pinterest"></i></button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button14"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Icon only button. Add <code class="highlighter-rouge">.btn-icon</code> class to remove unnecessary  button.</p>
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-activity"></i></button>
													<button type="button" class="btn btn-icon  btn-github"><i class="fe fe-github"></i></button>
													<button type="button" class="btn btn-icon  btn-success"><i class="fe fe-bell"></i></button>
													<button type="button" class="btn btn-icon  btn-warning"><i class="fe fe-star"></i></button>
													<button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
													<button type="button" class="btn btn-icon  btn-purple"><i class="fe fe-mail"></i></button>
													<button type="button" class="btn btn-icon  btn-secondary"><i class="fe fe-git-merge"></i></button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button15"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-activity"></i></button>
	<button type="button" class="btn btn-icon  btn-github"><i class="fe fe-github"></i></button>
	<button type="button" class="btn btn-icon  btn-success"><i class="fe fe-bell"></i></button>
	<button type="button" class="btn btn-icon  btn-warning"><i class="fe fe-star"></i></button>
	<button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
	<button type="button" class="btn btn-icon  btn-purple"><i class="fe fe-mail"></i></button>
	<button type="button" class="btn btn-icon  btn-secondary"><i class="fe fe-git-merge"></i></button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button15"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-6 CLOSED -->

						<!-- ROW-7 OPEN -->
						<div class="row row-deck">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Loading button</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-loading</code> to use a loading state on a button. The width of the button depends on the length of the text inside Since the loading spinner is implemented using the element.</p>
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-primary btn-loading">Button text</button><br>
													<button type="button" class="btn btn-success btn-loading btn-icon"><i class="fe fe-check"></i></button>
													<button type="button" class="btn btn-warning btn-loading btn-sm">Button text</button><br>
													<button type="button" class="btn btn-danger btn-loading btn-lg">Button text</button>
													<button type="button" class="btn btn-info btn-loading btn-block">Button text</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button16"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<button type="button" class="btn btn-primary btn-loading">Button text</button><br>
	<button type="button" class="btn btn-success btn-loading btn-icon"><i class="fe fe-check"></i></button>
	<button type="button" class="btn btn-warning btn-loading btn-sm">Button text</button><br>
	<button type="button" class="btn btn-danger btn-loading btn-lg">Button text</button>
	<button type="button" class="btn btn-info btn-loading btn-block">Button text</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button16"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button dropdown</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Wrap the dropdown’s toggle using different colors and icons implemented in different dropdowns  styles (your button or link) and the dropdown menu within <code class="highlighter-rouge">.dropdown</code>, or another element that declares <code class="highlighter-rouge">position: relative;</code>. Dropdowns can be triggered from <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;button&gt;</code> elements to better fit your potential needs.</p>
											<div class="example">
												<div class="btn-list">
													<div class="dropdown">
														<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
															<i class="fe fe-calendar"></i>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
														</div>
													</div>
													<div class="dropdown">
														<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
															<i class="fe fe-calendar mr-2"></i>Show calendar
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
														</div>
													</div>
													<div class="dropdown">
														<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
															Show calendar
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button17"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<div class="dropdown">
		<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
			<i class="fe fe-calendar"></i>
		</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
			<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
		</div>
	</div>
	<div class="dropdown">
		<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
			<i class="fe fe-calendar mr-2"></i>Show calendar
		</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
			<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
		</div>
	</div>
	<div class="dropdown">
		<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
			Show calendar
		</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
			<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button17"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-7 CLOSED -->

						<!-- ROW-8 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List of buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>You can now create a list of buttons with the <code class="highlighter-rouge">.btn-list</code> container.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-primary">Save changes</a>
													<a href="#" class="btn btn-secondary">Save and continue</a>
													<a href="#" class="btn btn-danger">Cancel</a>
												</div>
											</div>
<!-- Prism Precode --><figure class="highlight clip-widget" id="button18"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list">
	<a href="#" class="btn btn-primary">Save changes</a>
	<a href="#" class="btn btn-secondary">Save and continue</a>
	<a href="#" class="btn btn-danger">Cancel</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button18"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
										<div class="text-wrap mt-6">
											<p>Use the <code class="highlighter-rouge">.text-center</code>  modifiers to alter the alignment.</p>
											<div class="example">
												<div class="btn-list text-center">
													<a href="#" class="btn btn-primary">Save changes</a>
													<a href="#" class="btn btn-secondary">Save and continue</a>
													<a href="#" class="btn btn-danger">Cancel</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button19"><pre><code class="language-markup"><script type="html-volgh/script"><div class="btn-list text-center">
	<a href="#" class="btn btn-primary">Save changes</a>
	<a href="#" class="btn btn-secondary">Save and continue</a>
	<a href="#" class="btn btn-danger">Cancel</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button19"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
										<div class="text-wrap mt-6">
											<p>Use the  <code class="highlighter-rouge">.text-right</code> modifiers to alter the alignment.</p>
											<div class="example">
												<div class="btn-list text-right">
													<a href="#" class="btn btn-primary">Save changes</a>
													<a href="#" class="btn btn-secondary">Save and continue</a>
													<a href="#" class="btn btn-danger">Cancel</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="button20"><pre><code class="language-markup"><script type="html-volgh/script"><div class="example">
	<div class="btn-list text-right">
		<a href="#" class="btn btn-primary">Save changes</a>
		<a href="#" class="btn btn-secondary">Save and continue</a>
		<a href="#" class="btn btn-danger">Cancel</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#button20"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-8 CLOSED -->
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
