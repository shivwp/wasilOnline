@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/horizontal-menu/horizontal-menu.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Headers</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Headers</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Header</h3>
									</div>
									<div class="header header-1 p-4">
										<div class="container">
											<div class="d-flex">
												<a class="animated-arrow horizontal-navtoggle"><span></span></a>
												<a class="header-brand" href="index.html">
													<img src="{{URL::asset('assets/images/brand/logo-3.png')}}" class="header-brand-img" alt="Volgh logo">
												</a><!-- LOGO -->
												<div class="d-flex order-lg-2 ml-auto header-right-icons">
													<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="ion ion-search"></i></a>
													<div class="default-header">
														<form class="form-inline">
															<div class="search-element">
																<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
																<button class="btn btn-primary-color" type="submit"><i class="ion ion-search"></i></button>
															</div>
														</form>
													</div><!-- SEARCH -->
													<div class="dropdown d-md-flex">
														<a class="nav-link icon full-screen-link nav-link-bg">
															<i class="fe fe-maximize-2" id="fullscreen-button1"></i>
														</a>
													</div><!-- FULL-SCREEN -->
													<div class="dropdown d-md-flex notifications">
														<a class="nav-link icon" data-toggle="dropdown">
															<i class="fe fe-bell"></i>
															<span class="nav-unread badge badge-success badge-pill">2</span>
														</a>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
															<a href="#" class="dropdown-item mt-2 d-flex pb-3">
																<div class="notifyimg bg-success">
																	<i class="fa fa-thumbs-o-up"></i>
																</div>
																<div>
																	<strong>Someone likes our posts.</strong>
																	<div class="small text-muted">3 hours ago</div>
																</div>
															</a>
															<a href="#" class="dropdown-item d-flex pb-3">
																<div class="notifyimg bg-warning">
																	<i class="fa fa-commenting-o"></i>
																</div>
																<div>
																	<strong> 3 New Comments</strong>
																	<div class="small text-muted">5  hour ago</div>
																</div>
															</a>
															<a href="#" class="dropdown-item d-flex pb-3">
																<div class="notifyimg bg-danger">
																	<i class="fa fa-cogs"></i>
																</div>
																<div>
																	<strong> Server Rebooted.</strong>
																	<div class="small text-muted">45 mintues ago</div>
																</div>
															</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item text-center">View all Notification</a>
														</div>
													</div><!-- NOTIFICATIONS -->
													<div class="dropdown d-md-flex message">
														<a class="nav-link icon text-center" data-toggle="dropdown">
															<i class="fe fe-mail"></i>
															<span class=" nav-unread badge badge-danger  badge-pill">6</span>
														</a>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
															<a href="#" class="dropdown-item d-flex mt-2 pb-3">
																<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</div>
																<div>
																	<strong>Madeleine</strong>
																	<p class="mb-0 fs-13 text-muted ">Hey! there I' am available</p>
																	<div class="small text-muted">3 hours ago</div>
																</div>
															</a>
															<a href="#" class="dropdown-item d-flex pb-3">
																<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}">
																	<span class="avatar-status bg-red"></span>
																</div>
																<div>
																	<strong>Anthony</strong>
																	<p class="mb-0 fs-13 text-muted ">New product Launching</p>
																	<div class="small text-muted">5  hour ago</div>
																</div>
															</a>
															<a href="#" class="dropdown-item d-flex pb-3">
																<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{URL::asset('assets/images/users/18.jpg')}}">
																	<span class="avatar-status bg-yellow"></span>
																</div>
																<div>
																	<strong>Olivia</strong>
																	<p class="mb-0 fs-13 text-muted ">New Schedule Realease</p>
																	<div class="small text-muted">45 mintues ago</div>
																</div>
															</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item text-center">See all Messages</a>
														</div>
													</div><!-- MESSAGE-BOX -->
													<div class="dropdown text-center selector profile-1">
														<a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
															<span><img src="{{URL::asset('assets/images/users/10.jpg')}}" alt="profile-user" class="avatar avatar-sm brround cover-image mb-1 ml-0"></span>
															<span class=" ml-3 d-none d-lg-block ">
																<span class="text-dark">Elizabeth Dyer</span>
															</span>
														</a>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
															<div class="drop-heading">
																<div class="text-center">
																	<h5 class="text-dark mb-0">Elizabeth Dyer</h5>
																	<small class="text-muted">Administrator</small>
																</div>
															</div>
															<div class="dropdown-divider m-0"></div>
															<a class="dropdown-item" href="#">
																<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
															</a>
															<a class="dropdown-item" href="#">
																<i class="dropdown-icon  mdi mdi-settings"></i> Settings
															</a>
															<a class="dropdown-item" href="#">
																<span class="float-right"></span>
																<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
															</a>
															<a class="dropdown-item" href="#">
																<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
															</a>
															<div class="dropdown-divider"></div>
															<a class="dropdown-item" href="#">
																<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
															</a>
															<a class="dropdown-item" href="login.html">
																<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
															</a>
														</div>
													</div><!-- PROFILE -->
												</div>
											</div>
										</div>
									</div>
									<!-- HEADER END -->

									<!-- SIDE-MENU -->
									<div class="horizontal-main clearfix bg-white">
										<div class="horizontal-mainwrapper container clearfix">
											<nav class="horizontalMenu clearfix">
												<ul class="horizontalMenu-list">
													<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-laptop"></i> Dashboard <i class="horizontal-icon fa fa-angle-down"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Marketing Dashboard</a></li>
															<li aria-haspopup="true"><a href="#">Sales Dashboard</a></li>
															<li aria-haspopup="true"><a href="#">Service Dashboard</a></li>
															<li aria-haspopup="true"><a href="#">Finance Dashboard</a></li>
															<li aria-haspopup="true"><a href="#">IT Dashboard</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><a href="#" class=""><i class="fa fa-cube"></i> widgets</a></li>
													<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-edit"></i> Forms <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Form Elements</a></li>
															<li aria-haspopup="true"><a href="#">Form Editor</a></li>
															<li aria-haspopup="true"><a href="#">Form Wizard</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-cogs"></i>Components <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Maps</a></li>
															<li aria-haspopup="true"><a href="#">Crypto-currencies</a></li>
															<li aria-haspopup="true"><a href="#">User List</a></li>
															<li aria-haspopup="true"><a href="#">Timeline</a></li>
															<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"></span><a href="#">Calendar</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Default calendar</a></li>
																	<li aria-haspopup="true"><a href="#">Full calendar</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"></span><a href="#">Tables</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Default table</a></li>
																	<li aria-haspopup="true"><a href="#">Data Table</a></li>
																</ul>
															</li>
															<li aria-haspopup="true"><a href="#">Search page</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><a href="#" class="sub-icon active"><i class="fa fa-tasks"></i> UI Elements  <i class="fa fa-angle-down horizontal-icon"></i></a>
														<div class="horizontal-megamenu clearfix">
															<div class="container">
																<div class="mega-menubg">
																	<div class="row">
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li aria-haspopup="true"><a href="#">Alerts</a></li>
																				<li aria-haspopup="true"><a href="#">Buttons</a></li>
																				<li aria-haspopup="true"><a href="#">Colors</a></li>
																				<li aria-haspopup="true"><a href="#">Avatar-Square</a></li>
																				<li aria-haspopup="true"><a href="#">Avatar-Rounded</a></li>
																				<li aria-haspopup="true"><a href="#">Avatar-Radius</a></li>
																				<li aria-haspopup="true"><a href="#">Drop downs</a></li>
																				<li aria-haspopup="true"><a href="#">Cards design</a></li>
																				<li aria-haspopup="true"><a href="#">Default Chat</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li aria-haspopup="true"><a href="#">List</a></li>
																				<li aria-haspopup="true"><a href="#">Tags</a></li>
																				<li aria-haspopup="true"><a href="#">Pagination</a></li>
																				<li aria-haspopup="true"><a href="#">Navigation</a></li>
																				<li aria-haspopup="true"><a href="#">Typography</a></li>
																				<li aria-haspopup="true"><a href="#">Breadcrumbs</a></li>
																				<li aria-haspopup="true"><a href="#">Badges</a></li>
																				<li aria-haspopup="true"><a href="#">Notifications</a></li>
																				<li aria-haspopup="true"><a href="#">Sweet alerts</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li aria-haspopup="true"><a href="#">Jumbotron</a></li>
																				<li aria-haspopup="true"><a href="#">Panels</a></li>
																				<li aria-haspopup="true"><a href="#">Thumbnails</a></li>
																				 <li aria-haspopup="true"><a href="#">Media Object</a></li>
																				<li aria-haspopup="true"><a href="#">Accordions</a></li>
																				<li aria-haspopup="true"><a href="#">Tabs</a></li>
																				<li aria-haspopup="true"><a href="#">Charts</a></li>
																				<li aria-haspopup="true"><a href="#">Range slider</a></li>
																				<li aria-haspopup="true"><a href="#">Content Scroll bar</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li aria-haspopup="true"><a href="#">Modal</a></li>
																				<li aria-haspopup="true"><a href="#">Tooltip and popover</a></li>
																				<li aria-haspopup="true"><a href="#">Progress</a></li>
																				<li aria-haspopup="true"><a href="#">Carousels</a></li>
																				<li aria-haspopup="true"><a href="#">Headers</a></li>
																				<li aria-haspopup="true"><a href="#">Footers  </a></li>
																				<li aria-haspopup="true"><a href="#">Loaders</a></li>
																				<li aria-haspopup="true"><a href="#">Counters</a></li>
																				<li aria-haspopup="true"><a href="#">Rating</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-pie-chart"></i> Charts <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Chart Js</a></li>
															<li aria-haspopup="true"><a href="#"> Flot Charts</a></li>
															<li aria-haspopup="true"><a href="#">ECharts</a></li>
															<li aria-haspopup="true"><a href="#">High Charts</a></li>
															<li aria-haspopup="true"><a href="#">Morris Charts</a></li>
															<li aria-haspopup="true"><a href="#">Nvd3 Charts</a></li>
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">C3 charts</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">C3 Bar Charts</a></li>
																	<li aria-haspopup="true"><a href="#">C3 Line Charts</a></li>
																	<li aria-haspopup="true"><a href="#">C3 Donut Charts</a></li>
																	<li aria-haspopup="true"><a href="#">C3 Pie charts</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-folder-open-o"></i> Pages <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Profile</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Profile</a></li>
																	<li aria-haspopup="true"><a href="#">Edit Profile</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Mail</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Mail-Compose</a></li>
																	<li aria-haspopup="true"><a href="#">Mail-inbox</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">E-commerce</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Shop</a></li>
																	<li aria-haspopup="true"><a href="#">Product Details</a></li>
																	<li aria-haspopup="true"><a href="#">Shopping Cart</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Custom Pages</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Login</a></li>
																	<li aria-haspopup="true"><a href="#">Register</a></li>
																	<li aria-haspopup="true"><a href="#">Forgot Password</a></li>
																	<li aria-haspopup="true"><a href="#">Lock screen</a></li>
																	<li aria-haspopup="true"><a href="#">Empty Page</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" ><a href="#">Under Construction</a></li>
															<li aria-haspopup="true"><a href="#">Gallery</a></li>
															<li aria-haspopup="true"><a href="#">About Company </a></li>
															<li aria-haspopup="true"><a href="#">Services </a></li>
															<li aria-haspopup="true"><a href="#">FAQS</a></li>
															<li aria-haspopup="true"><a href="#">Terms</a></li>
															<li aria-haspopup="true"><a href="#">Invoice</a></li>
															<li aria-haspopup="true"><a href="#">Pricing Tables</a></li>
															<li aria-haspopup="true"><a href="#">Blog</a></li>
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Error Pages</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">400</a></li>
																	<li aria-haspopup="true"><a href="#">401</a></li>
																	<li aria-haspopup="true"><a href="#">403</a></li>
																	<li aria-haspopup="true"><a href="#">404</a></li>
																	<li aria-haspopup="true"><a href="#">500</a></li>
																	<li aria-haspopup="true"><a href="#">503</a></li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
											</nav>
											<!-- NAV END -->
										</div>
									</div>
									<!-- HORIZONTAL-MENU END -->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Header Style-01</h3>
									</div>
									<div class="header header-2 p-4">
										<div class="container">
											<nav class=" navbar header-nav navbar-expand-lg main-navbar p-0">
												<a class="animated-arrow horizontal-navtoggle"><span></span></a>
												<a class="header-brand" href="index.html">
													<img src="{{URL::asset('assets/images/brand/logo-3.png')}}" class="header-brand-img" alt="Volgh-Admin logo">
												</a>
												<ul class="navbar-nav navbar-right mr-auto">
													<li class="dropdown dropdown-list-toggle envelope"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><span class="badge badge-danger nav-link-badge">5</span><i class="fe fe-mail"></i></a>
														<div class="dropdown-menu dropdown-list dropdown-menu-right">
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow show">
																<a href="#" class="dropdown-item d-flex mt-2 pb-3">
																	<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}">
																		<span class="avatar-status bg-green"></span>
																	</div>
																	<div>
																		<strong>Madeleine</strong>
																		<p class="mb-0 fs-13 text-muted ">Hey! there I' am available</p>
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}">
																		<span class="avatar-status bg-red"></span>
																	</div>
																	<div>
																		<strong>Anthony</strong>
																		<p class="mb-0 fs-13 text-muted ">New product Launching</p>
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{URL::asset('assets/images/users/18.jpg')}}">
																		<span class="avatar-status bg-yellow"></span>
																	</div>
																	<div>
																		<strong>Olivia</strong>
																		<p class="mb-0 fs-13 text-muted ">New Schedule Realease</p>
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item text-center">See all Messages</a>
															</div>
														</div>
													</li>
													<li class="dropdown dropdown-list-toggle d-none d-sm-block"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-secondary nav-link-badge">6</span><i class="fe fe-bell"></i></a>
														<div class="dropdown-menu  dropdown-menu-arrow ">
															<a href="#" class="dropdown-item mt-2 d-flex pb-3">
																<div class="notifyimg bg-success">
																	<i class="fa fa-thumbs-o-up"></i>
																</div>
																<div>
																	<strong>Someone likes our posts.</strong>
																	<div class="small text-muted">3 hours ago</div>
																</div>
															</a>
															<a href="#" class="dropdown-item d-flex pb-3">
																<div class="notifyimg bg-warning">
																	<i class="fa fa-commenting-o"></i>
																</div>
																<div>
																	<strong> 3 New Comments</strong>
																	<div class="small text-muted">5  hour ago</div>
																</div>
															</a>
															<a href="#" class="dropdown-item d-flex pb-3">
																<div class="notifyimg bg-danger">
																	<i class="fa fa-cogs"></i>
																</div>
																<div>
																	<strong> Server Rebooted.</strong>
																	<div class="small text-muted">45 mintues ago</div>
																</div>
															</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item text-center">View all Notification</a>
														</div>
													</li>
													<li class="dropdown dropdown-list-toggle d-none d-lg-block">
														<a href="#" class="nav-link nav-link-lg full-screen-link">
															<i class="fe fe-maximize-2 " id="fullscreen-button2"></i>
														</a>
													</li>
												</ul>
												<div class="header2">
													<form class="form-inline">
														<div class="search-element">
															<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
															<button class="btn btn-primary-color" type="submit"><i class="ion ion-search"></i></button>
														</div>
													</form>
												</div>
												<div class="dropdown ml-2 ">
													<a href="#" data-toggle="dropdown" class="nav-link header-style-2 dropdown-toggle nav-link-lg d-flex">
														<span><img src="{{URL::asset('assets/images/users/10.jpg')}}" alt="profile-user" class="avatar avatar-sm brround cover-image w-32 mr-2"></span>
													</a>
													<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrowy">
														<div class="drop-heading">
															<div class="text-center">
																<h5 class="text-dark mb-0">Elizabeth Dyer</h5>
																<small class="text-muted">Administrator</small>
															</div>
														</div>
														<div class="dropdown-divider m-0"></div>
														<a class="dropdown-item" href="#">
															<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
														</a>
														<a class="dropdown-item" href="#">
															<i class="dropdown-icon  mdi mdi-settings"></i> Settings
														</a>
														<a class="dropdown-item" href="#">
															<span class="float-right"></span>
															<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
														</a>
														<a class="dropdown-item" href="#">
															<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
														</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">
															<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
														</a>
														<a class="dropdown-item" href="login.html">
															<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
														</a>
													</div>
												</div>
											</nav>
										</div>
									</div>
									<!--Horizontal-menu-->
									<div class="horizontal-main horizontal-main2 clearfix bg-white">
										<div class="horizontal-mainwrapper container clearfix">
											<nav class="horizontalMenu clearfix"><div class="overlapblackbg"></div>
												<ul class="horizontalMenu-list">
													<li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon"> Dashboard <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Crypto Currency</a></li>
															<li aria-haspopup="true"><a href="#">Sales Dashboard</a></li>
															<li aria-haspopup="true"><a href="#">Marketing Dashboard</a></li>
															<li aria-haspopup="true"><a href="#">IT Dashboard</a></li>
															<li aria-haspopup="true"><a href="#">Social Dashboard</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><a href="#" class="sub-icon"> widgets</a></li>
													<li aria-haspopup="true"><a href="#" class="sub-icon"> Mail </a></li>
													<li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon active"> Components <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Modal</a></li>
															<li aria-haspopup="true"><a href="#">Tooltip and popover</a></li>
															<li aria-haspopup="true"><a href="#">Progress</a></li>
															<li aria-haspopup="true"><a href="#">Charts</a></li>
															<li aria-haspopup="true"><a href="#">Carousels</a></li>
															<li aria-haspopup="true"><a href="#">Accordions</a></li>
															<li aria-haspopup="true"><a href="#">Tabs</a></li>
															<li aria-haspopup="true"><a href="#">Headers</a></li>
															<li aria-haspopup="true"><a href="#">Footers</a></li>
															<li aria-haspopup="true"><a href="#">Crypto-currencies</a></li>
															<li aria-haspopup="true"><a href="#">User List</a></li>
															<li aria-haspopup="true"><a href="#">Search page</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon"> UI Elements  <i class="fa fa-angle-down horizontal-icon"></i></a>
														<div class="horizontal-megamenu clearfix">
															<div class="container">
																<div class="mega-menubg">
																	<div class="row">
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li><a href="#">Alerts</a></li>
																				<li><a href="#">Buttons</a></li>
																				<li><a href="#">Colors</a></li>
																				<li><a href="#"> Avatars</a></li>
																				<li><a href="#">Drop downs</a></li>
																				<li><a href="#">Thumbnails</a></li>
																				<li><a href="#">Media Object</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li><a href="#">List</a></li>
																				<li><a href="#">Tags</a></li>
																				<li><a href="#">Pagination</a></li>
																				<li><a href="#">Navigation</a></li>
																				<li><a href="#">Typography</a></li>
																				<li><a href="#"> Breadcrumbs</a></li>
																				<li><a href="#">Invoice</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li><a href="#">Badges</a></li>
																				<li><a href="#">Jumbotron</a></li>
																				<li><a href="#">Panels</a></li>
																				<li><a href="#">Profile</a></li>
																				<li><a href="#">Edit Profile</a></li>
																				<li><a href="#">Pricing Tables</a></li>
																				<li><a href="#">Gallery</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li><a href="#"> Email</a></li>
																				<li><a href="#">Email Inbox</a></li>
																				<li><a href="#">About Company</a></li>
																				<li><a href="#">Services</a></li>
																				<li><a href="#">FAQS</a></li>
																				<li><a href="#">Terms and Conditions</a></li>
																				<li><a href="#">Blog</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon"> Charts <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Chartjs Charts</a></li>
															<li aria-haspopup="true"><a href="#">Dygraph Charts</a></li>
															<li aria-haspopup="true"><a href="#">Am Charts</a></li>
															<li aria-haspopup="true"><a href="#">Pie Charts</a></li>
															<li aria-haspopup="true"><a href="#">Echart Charts</a></li>
															<li aria-haspopup="true"><a href="#">Flot Charts</a></li>
															<li aria-haspopup="true"><a href="#">High Charts</a></li>
															<li aria-haspopup="true"><a href="#">Nvd3 Charts</a></li>
															<li aria-haspopup="true"><a href="#">Morris Charts</a></li>
															<li aria-haspopup="true"><a href="#">C3 Charts</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon"> Pages <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li><a href="#">Vector Maps</a></li>
															<li><a href="#">Empty Page</a></li>
															<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">E-commerce</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Products</a></li>
																	<li aria-haspopup="true"><a href="#">Product Details</a></li>
																	<li aria-haspopup="true"><a href="#">Shopping Cart</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">Account</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Login</a></li>
																	<li aria-haspopup="true"><a href="#">Register</a></li>
																	<li aria-haspopup="true"><a href="#">Forgot password</a></li>
																	<li aria-haspopup="true"><a href="#">Lock screen</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">Error Pages</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">400 Error</a></li>
																	<li aria-haspopup="true"><a href="#">401 Error</a></li>
																	<li aria-haspopup="true"><a href="#">403 Error</a></li>
																	<li aria-haspopup="true"><a href="#">404 Error</a></li>
																	<li aria-haspopup="true"><a href="#">500 Error</a></li>
																	<li aria-haspopup="true"><a href="#">503 Error</a></li>
																</ul>
															</li>
															<li><a href="construction.html">Under Construction</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon">Icons <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Font Awesome</a></li>
															<li aria-haspopup="true"><a href="#">Material Design Icons</a></li>
															<li aria-haspopup="true"><a href="#">Simple line Icons</a></li>
															<li aria-haspopup="true"><a href="#">Feather Icons</a></li>
															<li aria-haspopup="true"><a href="#">Ionic Icons</a></li>
															<li aria-haspopup="true"><a href="#"> Flag Icons</a></li>
															<li aria-haspopup="true"><a href="#">pe7 Icons</a></li>
															<li aria-haspopup="true"><a href="#">Themify Icons</a></li>
															<li aria-haspopup="true"><a href="#"> Typicons Icons</a></li>
															<li aria-haspopup="true"><a href="#">Weather Icons</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon"> Tables <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Default table</a></li>
															<li aria-haspopup="true"><a href="#">Data Table</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon"> Forms <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Form Elements</a></li>
															<li aria-haspopup="true"><a href="#">Form-wizard</a></li>
															<li aria-haspopup="true"><a href="#">Text Editor</a></li>
														</ul>
													</li>
												</ul>
											</nav>
											<!--Menu HTML Code-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Header style 2</h3>
									</div>
									<div class="header header-1 header-style p-4">
										<div class="container">
											<div class="d-flex">
												<a class="animated-arrow horizontal-navtoggle"><span></span></a>
												<a class="header-brand" href="index.html">
													<img src="{{URL::asset('assets/images/brand/logo-3.png')}}" class="header-brand-img" alt="Volgh logo">
												</a><!-- LOGO -->
												<div class="header3">
													<form class="form-inline">
														<div class="search-element">
															<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
															<button class="btn btn-primary-color" type="submit"><i class="ion ion-search"></i></button>
														</div>
													</form>
												</div><!-- SEARCH -->
												<div class="d-flex order-lg-2 ml-auto header-right-icons ">
													<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="ion ion-search"></i></a>
													<div class="dropdown d-md-flex">
														<a class="nav-link icon full-screen-link nav-link-bg">
															<i class="fe fe-maximize-2" id="fullscreen-button3"></i>
														</a>
													</div><!-- FULL-SCREEN -->
													<div class="dropdown d-md-flex notifications">
														<a class="nav-link icon" data-toggle="dropdown">
															<i class="fe fe-bell"></i>
															<span class="nav-unread badge badge-success badge-pill">3</span>
														</a>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
															<a href="#" class="dropdown-item mt-2 d-flex pb-3">
																<div class="notifyimg bg-success">
																	<i class="fa fa-thumbs-o-up"></i>
																</div>
																<div>
																	<strong>Someone likes our posts.</strong>
																	<div class="small text-muted">3 hours ago</div>
																</div>
															</a>
															<a href="#" class="dropdown-item d-flex pb-3">
																<div class="notifyimg bg-warning">
																	<i class="fa fa-commenting-o"></i>
																</div>
																<div>
																	<strong> 3 New Comments</strong>
																	<div class="small text-muted">5  hour ago</div>
																</div>
															</a>
															<a href="#" class="dropdown-item d-flex pb-3">
																<div class="notifyimg bg-danger">
																	<i class="fa fa-cogs"></i>
																</div>
																<div>
																	<strong> Server Rebooted.</strong>
																	<div class="small text-muted">45 mintues ago</div>
																</div>
															</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item text-center">View all Notification</a>
														</div>
													</div><!-- NOTIFICATIONS -->
													<div class="dropdown d-md-flex message">
														<a class="nav-link icon text-center" data-toggle="dropdown">
															<i class="fe fe-mail"></i>
															<span class=" nav-unread badge badge-danger  badge-pill">6</span>
														</a>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
															<a href="#" class="dropdown-item d-flex mt-2 pb-3">
																<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</div>
																<div>
																	<strong>Madeleine</strong>
																	<p class="mb-0 fs-13 text-muted ">Hey! there I' am available</p>
																	<div class="small text-muted">3 hours ago</div>
																</div>
															</a>
															<a href="#" class="dropdown-item d-flex pb-3">
																<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}">
																	<span class="avatar-status bg-red"></span>
																</div>
																<div>
																	<strong>Anthony</strong>
																	<p class="mb-0 fs-13 text-muted ">New product Launching</p>
																	<div class="small text-muted">5  hour ago</div>
																</div>
															</a>
															<a href="#" class="dropdown-item d-flex pb-3">
																<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{URL::asset('assets/images/users/18.jpg')}}">
																	<span class="avatar-status bg-yellow"></span>
																</div>
																<div>
																	<strong>Olivia</strong>
																	<p class="mb-0 fs-13 text-muted ">New Schedule Realease</p>
																	<div class="small text-muted">45 mintues ago</div>
																</div>
															</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item text-center">See all Messages</a>
														</div>
													</div><!-- MESSAGE-BOX -->
													<div class="dropdown text-center selector profile-1">
														<a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
															<span><img src="{{URL::asset('assets/images/users/10.jpg')}}" alt="profile-user" class="avatar avatar-sm brround cover-image mb-1 ml-0"></span>
															<span class=" ml-3 d-none d-lg-block ">
																<span class="text-dark">Elizabeth Dyer</span>
															</span>
														</a>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
															<div class="drop-heading">
																<div class="text-center">
																	<h5 class="text-dark mb-0">Elizabeth Dyer</h5>
																	<small class="text-muted">Administrator</small>
																</div>
															</div>
															<div class="dropdown-divider m-0"></div>
															<a class="dropdown-item" href="#">
																<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
															</a>
															<a class="dropdown-item" href="#">
																<i class="dropdown-icon  mdi mdi-settings"></i> Settings
															</a>
															<a class="dropdown-item" href="#">
																<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
															</a>
															<a class="dropdown-item" href="#">
																<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
															</a>
															<div class="dropdown-divider"></div>
															<a class="dropdown-item" href="#">
																<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
															</a>
															<a class="dropdown-item" href="login.html">
																<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
															</a>
														</div>
													</div><!-- PROFILE -->
												</div>
												<a href="#" class="header-toggler d-lg-none ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
													<span class="header-toggler-icon"></span>
												</a>
											</div>
										</div>
									</div>
									<!-- HEADER END -->

									<!-- SIDE-MENU -->
									<div class="horizontal-main  clearfix bg-white">
										<div class="horizontal-mainwrapper container clearfix">
											<nav class="horizontalMenu clearfix">
												<ul class="horizontalMenu-list">
													<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-laptop"></i> Dashboard <i class="horizontal-icon fa fa-angle-down"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Marketing Dashboard</a></li>
															<li aria-haspopup="true"><a href="#">Sales Dashboard</a></li>
															<li aria-haspopup="true"><a href="#">Service Dashboard</a></li>
															<li aria-haspopup="true"><a href="#">Finance Dashboard</a></li>
															<li aria-haspopup="true"><a href="#">IT Dashboard</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><a href="#" class=""><i class="fa fa-cube"></i> widgets</a></li>
													<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-edit"></i> Forms <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Form Elements</a></li>
															<li aria-haspopup="true"><a href="#">Form Editor</a></li>
															<li aria-haspopup="true"><a href="#">Form Wizard</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-cogs"></i>Components <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Maps</a></li>
															<li aria-haspopup="true"><a href="#">Crypto-currencies</a></li>
															<li aria-haspopup="true"><a href="#">User List</a></li>
															<li aria-haspopup="true"><a href="#">Timeline</a></li>
															<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"></span><a href="#">Calendar</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Default calendar</a></li>
																	<li aria-haspopup="true"><a href="#">Full calendar</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"></span><a href="#">Tables</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Default table</a></li>
																	<li aria-haspopup="true"><a href="#">Data Table</a></li>
																</ul>
															</li>
															<li aria-haspopup="true"><a href="#">Search page</a></li>
														</ul>
													</li>
													<li aria-haspopup="true"><a href="#" class="sub-icon active"><i class="fa fa-tasks"></i> UI Elements  <i class="fa fa-angle-down horizontal-icon"></i></a>
														<div class="horizontal-megamenu clearfix">
															<div class="container">
																<div class="mega-menubg">
																	<div class="row">
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li aria-haspopup="true"><a href="#">Alerts</a></li>
																				<li aria-haspopup="true"><a href="#">Buttons</a></li>
																				<li aria-haspopup="true"><a href="#">Colors</a></li>
																				<li aria-haspopup="true"><a href="#">Avatar-Square</a></li>
																				<li aria-haspopup="true"><a href="#">Avatar-Rounded</a></li>
																				<li aria-haspopup="true"><a href="#">Avatar-Radius</a></li>
																				<li aria-haspopup="true"><a href="#">Drop downs</a></li>
																				<li aria-haspopup="true"><a href="#">Cards design</a></li>
																				<li aria-haspopup="true"><a href="#">Default Chat</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li aria-haspopup="true"><a href="#">List</a></li>
																				<li aria-haspopup="true"><a href="#">Tags</a></li>
																				<li aria-haspopup="true"><a href="#">Pagination</a></li>
																				<li aria-haspopup="true"><a href="#">Navigation</a></li>
																				<li aria-haspopup="true"><a href="#">Typography</a></li>
																				<li aria-haspopup="true"><a href="#">Breadcrumbs</a></li>
																				<li aria-haspopup="true"><a href="#">Badges</a></li>
																				<li aria-haspopup="true"><a href="#">Notifications</a></li>
																				<li aria-haspopup="true"><a href="#">Sweet alerts</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li aria-haspopup="true"><a href="#">Jumbotron</a></li>
																				<li aria-haspopup="true"><a href="#">Panels</a></li>
																				<li aria-haspopup="true"><a href="#">Thumbnails</a></li>
																				 <li aria-haspopup="true"><a href="#">Media Object</a></li>
																				<li aria-haspopup="true"><a href="#">Accordions</a></li>
																				<li aria-haspopup="true"><a href="#">Tabs</a></li>
																				<li aria-haspopup="true"><a href="#">Charts</a></li>
																				<li aria-haspopup="true"><a href="#">Range slider</a></li>
																				<li aria-haspopup="true"><a href="#">Content Scroll bar</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3 col-md-12 col-xs-12 link-list">
																			<ul>
																				<li aria-haspopup="true"><a href="#">Modal</a></li>
																				<li aria-haspopup="true"><a href="#">Tooltip and popover</a></li>
																				<li aria-haspopup="true"><a href="#">Progress</a></li>
																				<li aria-haspopup="true"><a href="#">Carousels</a></li>
																				<li aria-haspopup="true"><a href="#">Headers</a></li>
																				<li aria-haspopup="true"><a href="#">Footers  </a></li>
																				<li aria-haspopup="true"><a href="#">Loaders</a></li>
																				<li aria-haspopup="true"><a href="#">Counters</a></li>
																				<li aria-haspopup="true"><a href="#">Rating</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-pie-chart"></i> Charts <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true"><a href="#">Chart Js</a></li>
															<li aria-haspopup="true"><a href="#"> Flot Charts</a></li>
															<li aria-haspopup="true"><a href="#">ECharts</a></li>
															<li aria-haspopup="true"><a href="#">High Charts</a></li>
															<li aria-haspopup="true"><a href="#">Morris Charts</a></li>
															<li aria-haspopup="true"><a href="#">Nvd3 Charts</a></li>
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">C3 charts</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">C3 Bar Charts</a></li>
																	<li aria-haspopup="true"><a href="#">C3 Line Charts</a></li>
																	<li aria-haspopup="true"><a href="#">C3 Donut Charts</a></li>
																	<li aria-haspopup="true"><a href="#">C3 Pie charts</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-folder-open-o"></i> Pages <i class="fa fa-angle-down horizontal-icon"></i></a>
														<ul class="sub-menu">
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Profile</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Profile</a></li>
																	<li aria-haspopup="true"><a href="#">Edit Profile</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Mail</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Mail-Compose</a></li>
																	<li aria-haspopup="true"><a href="#">Mail-inbox</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">E-commerce</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Shop</a></li>
																	<li aria-haspopup="true"><a href="#">Product Details</a></li>
																	<li aria-haspopup="true"><a href="#">Shopping Cart</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Custom Pages</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">Login</a></li>
																	<li aria-haspopup="true"><a href="#">Register</a></li>
																	<li aria-haspopup="true"><a href="#">Forgot Password</a></li>
																	<li aria-haspopup="true"><a href="#">Lock screen</a></li>
																	<li aria-haspopup="true"><a href="#">Empty Page</a></li>
																</ul>
															</li>
															<li aria-haspopup="true" ><a href="#">Under Construction</a></li>
															<li aria-haspopup="true"><a href="#">Gallery</a></li>
															<li aria-haspopup="true"><a href="#">About Company </a></li>
															<li aria-haspopup="true"><a href="#">Services </a></li>
															<li aria-haspopup="true"><a href="#">FAQS</a></li>
															<li aria-haspopup="true"><a href="#">Terms</a></li>
															<li aria-haspopup="true"><a href="#">Invoice</a></li>
															<li aria-haspopup="true"><a href="#">Pricing Tables</a></li>
															<li aria-haspopup="true"><a href="#">Blog</a></li>
															<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Error Pages</a>
																<ul class="sub-menu">
																	<li aria-haspopup="true"><a href="#">400</a></li>
																	<li aria-haspopup="true"><a href="#">401</a></li>
																	<li aria-haspopup="true"><a href="#">403</a></li>
																	<li aria-haspopup="true"><a href="#">404</a></li>
																	<li aria-haspopup="true"><a href="#">500</a></li>
																	<li aria-haspopup="true"><a href="#">503</a></li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
											</nav>
											<!-- NAV END -->
										</div>
									</div>
									<!-- HORIZONTAL-MENU END -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Content -->
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/horizontal-menu/horizontal-menu.js') }}"></script>
@endsection
