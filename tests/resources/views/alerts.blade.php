@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Alerts</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Alerts</li>
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
										<h3 class="card-title">Default alerts</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-primary" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Primary alert—At vero eos et accusamus praesentium!
												</div>
												<div class="alert alert-secondary" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Secondary alert—At vero eos et accusamus praesentium!
												</div>
												<div class="alert alert-success" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Success alert—At vero eos et accusamus praesentium!
												</div>
												<div class="alert alert-info" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Info alert—At vero eos et accusamus praesentium!
												</div>
												<div class="alert alert-warning" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Warning alert—At vero eos et accusamus praesentium!
												</div>
												<div class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Danger alert—At vero eos et accusamus praesentium!
												</div>
											</div>
											<figure class="highlight" id="alert1"><pre><code class="language-markup"><script type="html-volgh/script"><div class="alert alert-primary" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Primary alert—At vero eos et accusamus praesentium!
</div>
<div class="alert alert-secondary" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Secondary alert—At vero eos et accusamus praesentium!
</div>
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Success alert—At vero eos et accusamus praesentium!
</div>
<div class="alert alert-info" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Info alert—At vero eos et accusamus praesentium!
</div>
<div class="alert alert-warning" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Warning alert—At vero eos et accusamus praesentium!
</div>
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Danger alert—At vero eos et accusamus praesentium!
</div></script></code></pre>
													<div class="clipboard-icon" data-clipboard-target="#alert1"><i class="fa fa-clipboard"></i></div>
												</figure>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Links in alerts</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-success" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message.</a>
												</div>
												<div class="alert alert-info" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Heads up!</strong> This<a href="#" class="alert-link"> alert needs your attention,</a> but it's not super important.
												</div>
												<div class="alert alert-warning" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Warning! </strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good.</a>
												</div>
												<div class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up </a>and try submitting again.
												</div>
											</div>
											<figure class="highlight" id="alert2"><pre><code class="language-markup"><script type="html-volgh/script"><div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message.</a>
</div>
<div class="alert alert-info" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<strong>Heads up!</strong> This<a href="#" class="alert-link"> alert needs your attention,</a> but it's not super important.
</div>
<div class="alert alert-warning" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<strong>Warning! </strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good.</a>
</div>
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up </a>and try submitting again.
</div></script></code></pre>
												<div class="clipboard-icon" data-clipboard-target="#alert2"><i class="fa fa-clipboard"></i></div>
											</figure>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alert with icon</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.alert-icon</code> class.</p>
											<div class="example">
												<div class="alert alert-success" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
												</div>
												<div class="alert alert-info" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<i class="fa fa-bell-o mr-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
												</div>
												<div class="alert alert-warning" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<i class="fa fa-exclamation mr-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.
												</div>
												<div class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<i class="fa fa-frown-o mr-2" aria-hidden="true"></i>Oh snap!Change a few things up and try submitting again.
												</div>
											</div>
											<figure class="highlight" id="alert3"><pre><code class="language-markup"><script type="html-volgh/script"><div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
</div>
<div class="alert alert-info" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<i class="fa fa-bell-o mr-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
</div>
<div class="alert alert-warning" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<i class="fa fa-exclamation mr-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.
</div>
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<i class="fa fa-frown-o mr-2" aria-hidden="true"></i>Oh snap!Change a few things up and try submitting again.
</div></script></code></pre>
												<div class="clipboard-icon" data-clipboard-target="#alert3"><i class="fa fa-clipboard"></i></div>
											</figure>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 CLOSED -->

						<!-- ROW-4 OPEN -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alert with avatar</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-avatar alert-primary alert-dismissible">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/14.jpg')}}"></span>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
												</div>
												<div class="alert alert-avatar  alert-success alert-dismissible">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/15.jpg')}}"></span>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit.
												</div>
											</div>
											<figure class="highlight" id="alert4"><pre><code class="language-markup"><script type="html-volgh/script"><div class="alert alert-avatar alert-primary alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<span class="avatar brround cover-image" data-image-src="../assets/images/users/14.jpg"></span>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</div>
<div class="alert alert-avatar  alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<span class="avatar brround cover-image" data-image-src="../assets/images/users/5.jpg"></span>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</div></script></code></pre>
												<div class="clipboard-icon" data-clipboard-target="#alert4"><i class="fa fa-clipboard"></i></div>
											</figure>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-4 CLOSED -->

						<!-- ROW-5 OPEN -->
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts With Icons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-default" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
													<span class="alert-inner--text"><strong>Default!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
												<div class="alert alert-primary" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
													<span class="alert-inner--text"><strong>Primary!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
												<div class="alert alert-success" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
													<span class="alert-inner--text"><strong>Success!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
												<div class="alert alert-info" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
													<span class="alert-inner--text"><strong>Info!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
												<div class="alert alert-warning" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
													<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
												<div class="alert alert-danger mb-0" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
													<span class="alert-inner--text"><strong>Danger!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
											</div>
											<figure class="highlight" id="alert5"><pre><code class="language-markup"><script type="html-volgh/script"><div class="alert alert-default" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
	<span class="alert-inner--text"><strong>Default!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-primary" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
	<span class="alert-inner--text"><strong>Primary!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-success" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
	<span class="alert-inner--text"><strong>Success!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-info" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
	<span class="alert-inner--text"><strong>Info!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-warning" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
	<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-danger mb-0" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
	<span class="alert-inner--text"><strong>Danger!</strong> This is a warning alert—check it out that has an icon too!</span>
</div></script></code></pre>
												<div class="clipboard-icon" data-clipboard-target="#alert5"><i class="fa fa-clipboard"></i></div>
											</figure>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class=" card-title mb-0">Alerts With Icons Dismissing</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-default alert-dismissible fade show" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
													<span class="alert-inner--text"><strong>Default!</strong> This is a default alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-primary alert-dismissible fade show" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
													<span class="alert-inner--text"><strong>Primary!</strong> This is a primary alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-success alert-dismissible fade show" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
													<span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-warning alert-dismissible fade show" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
													<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-info alert-dismissible fade show" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
													<span class="alert-inner--text"><strong>Info!</strong> This is a info alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
													<span class="alert-inner--text"><strong>Danger!</strong> This is a danger alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
											<figure class="highlight" id="alert6"><pre><code class="language-markup"><script type="html-volgh/script"><div class="alert alert-default alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
	<span class="alert-inner--text"><strong>Default!</strong> This is a default alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
	<span class="alert-inner--text"><strong>Primary!</strong> This is a primary alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
	<span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
	<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-info alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
	<span class="alert-inner--text"><strong>Info!</strong> This is a info alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
	<span class="alert-inner--text"><strong>Danger!</strong> This is a danger alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div></script></code></pre>
												<div class="clipboard-icon" data-clipboard-target="#alert6"><i class="fa fa-clipboard"></i></div>
											</figure>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-5 CLOSED -->

						<!-- ROW-6 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts Popovers</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="row">
													<div class="col-xl-2 col-md-4 mt-2 mb-2">
														<button type="button" class="btn btn-success btn-block" data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="alert sucess" data-content="Well done! You successfully read this important alert message..">
															Show success
														</button>
													</div>
													<div class="col-xl-2 col-md-4 mt-2 mb-2">
														<button type="button" class="btn btn-info btn-block" data-container="body" data-toggle="popover" data-popover-color="popinfo" data-placement="top" title="alert info" data-content="Heads up! This alert needs your attention, but it's not super important...">
															Show info
														</button>
													</div>
													<div class="col-xl-2 col-md-4 mt-2 mb-2">
														<button type="button" class="btn btn-block btn-warning" data-container="body" data-toggle="popover" data-popover-color="popwarning" data-placement="bottom" title="alert warning" data-content="Warning! Best check yo self, you're not looking too good..">
															Show warning
														</button>
													</div>

													<div class="col-xl-2 col-md-4 mt-2 mb-2">
														<button type="button" class="btn btn-block btn-danger" data-container="body" data-toggle="popover" data-popover-color="popdanger" data-placement="bottom" title="alert danger" data-content="Oh snap! Change a few things up and try submitting again.">
															Show danger
														</button>
													</div>
													<div class="col-xl-2 col-md-4 mt-2 mb-2">
														<button type="button" class="btn btn-block btn-secondary" data-container="body" data-toggle="popover" data-popover-color="popsecondary" data-placement="top" title="alert secondary" data-content="Error! Please Check u r emial id..">
															Show secondary
														</button>
													</div>
													<div class="col-xl-2 col-md-4 mt-2 mb-2">
														<button type="button" class="btn btn-block btn-primary" data-container="body"  data-toggle="popover" data-popover-color="pop-primary" data-placement="top" title="alert primary" data-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
															Show primary
														</button>
													</div>
												</div>
											</div>
											<figure class="highlight" id="alert7"><pre><code class="language-markup"><script type="html-volgh/script"><button type="button" class="btn btn-success btn-block" data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="alert sucess" data-content="Well done! You successfully read this important alert message..">
	Show success
</button>
<button type="button" class="btn btn-info btn-block" data-container="body" data-toggle="popover" data-popover-color="popinfo" data-placement="top" title="alert info" data-content="Heads up! This alert needs your attention, but it's not super important...">
	Show info
</button>
<button type="button" class="btn btn-block btn-warning" data-container="body" data-toggle="popover" data-popover-color="popwarning" data-placement="bottom" title="alert warning" data-content="Warning! Best check yo self, you're not looking too good..">
	Show warning
</button>
<button type="button" class="btn btn-block btn-danger" data-container="body" data-toggle="popover" data-popover-color="popdanger" data-placement="bottom" title="alert danger" data-content="Oh snap! Change a few things up and try submitting again.">
	Show danger
</button>
<button type="button" class="btn btn-block btn-secondary" data-container="body" data-toggle="popover" data-popover-color="popsecondary" data-placement="top" title="alert secondary" data-content="Error! Please Check u r emial id..">
	Show secondary
</button>
<button type="button" class="btn btn-block btn-primary" data-container="body"  data-toggle="popover" data-popover-color="pop-primary" data-placement="top" title="alert primary" data-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
	Show primary
</button></script></code></pre>
												<div class="clipboard-icon" data-clipboard-target="#alert7"><i class="fa fa-clipboard"></i></div>
											</figure>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts style</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap mb-4">
											<div class="example">
												<div class="alert alert-success">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													 <strong>Success Message</strong>
													<hr class="message-inner-separator">
													<p>You successfully read this important alert message.</p>
												</div>
											</div>
											<figure class="highlight" id="alert8"><pre><code class="language-markup"><script type="html-volgh/script"><div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	 <strong>Success Message</strong>
	<hr class="message-inner-separator">
	<p>You successfully read this important alert message.</p>
</div></script></code></pre>
												<div class="clipboard-icon" data-clipboard-target="#alert8"><i class="fa fa-clipboard"></i></div>
											</figure>
										</div>
										<div class="text-wrap mb-4">
											<div class="example">
												<div class="alert alert-info">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													 <strong>Info Message</strong>
													<hr class="message-inner-separator">
													<p>This alert needs your attention, but it's not super important.</p>
												</div>
											</div>
											<figure class="highlight" id="alert9"><pre><code class="language-markup"><script type="html-volgh/script"><div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<strong>Info Message</strong>
	<hr class="message-inner-separator">
	<p>This alert needs your attention, but it's not super important.</p>
</div></script></code></pre>
												<div class="clipboard-icon" data-clipboard-target="#alert9"><i class="fa fa-clipboard"></i></div>
											</figure>
										</div>
										<div class="text-wrap mb-4">
											<div class="example">
												<div class="alert alert-warning">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													 <strong>Warning Message</strong>
													<hr class="message-inner-separator">
													<p>Best check yo self, you're not looking too good</p>
												</div>
											</div>
											<figure class="highlight" id="alert10"><pre><code class="language-markup"><script type="html-volgh/script"><div class="alert alert-warning">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	 <strong>Warning Message</strong>
	<hr class="message-inner-separator">
	<p>Best check yo self, you are not looking too good</p>
</div></script></code></pre>
												<div class="clipboard-icon" data-clipboard-target="#alert10"><i class="fa fa-clipboard"></i></div>
											</figure>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-danger">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													 <strong>Danger Message</strong>
													<hr class="message-inner-separator">
													<p>Change a few things up and try submitting again.</p>
												</div>
											</div>
											<figure class="highlight" id="alert11"><pre><code class="language-markup"><script type="html-volgh/script"><div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	 <strong>Danger Message</strong>
	<hr class="message-inner-separator">
	<p>Change a few things up and try submitting again.</p>
</div></script></code></pre>
												<div class="clipboard-icon" data-clipboard-target="#alert11"><i class="fa fa-clipboard"></i></div>
											</figure>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-6 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/prism/prism.js') }}"></script>
<script src="{{ URL::asset('assets/js/popover.js') }}"></script>
@endsection
