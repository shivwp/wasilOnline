@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">User list</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">User list</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW OPEN -->
						<div class="row row-cards">
							<div class="col-lg-4 col-xl-3">
								<div class="card">
									<div class=" userlist bg-primary ">
										<div class="card-body text-center">
											<div class="userprofile mt-0">
												<div class="userpic"> <img src="{{URL::asset('assets/images/users/10.jpg')}}" alt="" class="userpicimg"> </div>
												<h3 class="username">Elizabeth Dyer</h3>
												<p class="text-white mb-1">Administrator</p>
												<p class="text-white">New York, USA</p>
											</div>
											<strong class="text-white">Information</strong><br>
											<p class="text-white-transparent mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ornare lacus adipiscing, posuere.<br>
											  <br>
											<p class="mb-0"><span class="text-white">Email : </span><a href="" class="text-white-transparent">info@pearle.in</a></p>
											<p class="mb-0"><span class="text-white">Phone no :</span><span class="text-white-transparent"> +9100000000</span></p>
										</div>
									</div>
									<div class="panel-footer border-0">
										<div class="text-center ">
											<div class="flex-c-m ">
												<a href="#" class="login100-social-item bg1">
													<i class="fa fa-facebook"></i>
												</a>

												<a href="#" class="login100-social-item bg2">
													<i class="fa fa-twitter"></i>
												</a>

												<a href="#" class="login100-social-item bg3">
													<i class="fa fa-google"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Team</h3>
									</div>
									<div class="team">
										<ul class="list-unstyled list-separated">
											<li class="list-separated-item p-3">
												<div class="row align-items-center">
													<div class="col-auto">
														<span class="avatar brround avatar-md d-block cover-image" data-image-src="{{URL::asset('assets/images/users/12.jpg')}}"></span>
													</div>
													<div class="col">
														<div>
															<a href="javascript:void(0)" class="text-inherit">Anna White</a>
														</div>
														<small class="d-block item-except text-sm text-muted h-1x">annawhite@info.com</small>
													</div>
													<div class="col-auto">
														<div class="item-action dropdown">
															<a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
																<div class="dropdown-divider"></div>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="list-separated-item p-3">
												<div class="row align-items-center">
													<div class="col-auto">
														<span class="avatar brround avatar-md d-block cover-image" data-image-src="{{URL::asset('assets/images/users/15.jpg')}}"></span>
													</div>
													<div class="col">
														<div>
															<a href="javascript:void(0)" class="text-inherit">Karen	Miller</a>
														</div>
														<small class="d-block item-except text-sm text-muted h-1x">karen@example.com</small>
													</div>
													<div class="col-auto">
														<div class="item-action dropdown">
															<a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
																<div class="dropdown-divider"></div>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="list-separated-item p-3">
												<div class="row align-items-center">
													<div class="col-auto">
														<span class="avatar brround avatar-md d-block cover-image" data-image-src="{{URL::asset('assets/images/users/19.jpg')}}"></span>
													</div>
													<div class="col">
														<div>
															<a href="javascript:void(0)" class="text-inherit">Nicola Powell</a>
														</div>
														<small class="d-block item-except text-sm text-muted h-1x">lapowell@info.com</small>
													</div>
													<div class="col-auto">
														<div class="item-action dropdown">
															<a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
																<div class="dropdown-divider"></div>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="list-separated-item p-3">
												<div class="row align-items-center">
													<div class="col-auto">
														<span class="avatar brround  avatar-md d-block cover-image" data-image-src="{{URL::asset('assets/images/users/2.jpg')}}"></span>
													</div>
													<div class="col">
														<div>
															<a href="javascript:void(0)" class="text-inherit">Nathan Payne</a>
														</div>
														<small class="d-block item-except text-sm text-muted h-1x">nathan765@info.com</small>
													</div>
													<div class="col-auto">
														<div class="item-action dropdown">
															<a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
																<div class="dropdown-divider"></div>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="list-separated-item p-3">
												<div class="row align-items-center">
													<div class="col-auto">
														<span class="avatar brround avatar-md d-block cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}"></span>
													</div>
													<div class="col">
														<div>
															<a href="javascript:void(0)" class="text-inherit">Jacob	Slater</a>
														</div>
														<small class="d-block item-except text-sm text-muted h-1x">jacob567@info.com</small>
													</div>
													<div class="col-auto">
														<div class="item-action dropdown">
															<a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
																<div class="dropdown-divider"></div>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="list-separated-item p-3">
												<div class="row align-items-center">
													<div class="col-auto">
														<span class="avatar brround avatar-md d-block cover-image" data-image-src="{{URL::asset('assets/images/users/11.jpg')}}"></span>
													</div>
													<div class="col">
														<div>
															<a href="javascript:void(0)" class="text-inherit">Victor Blake</a>
														</div>
														<small class="d-block item-except text-sm text-muted h-1x">victor_1@info.com</small>
													</div>
													<div class="col-auto">
														<div class="item-action dropdown">
															<a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
																<div class="dropdown-divider"></div>
																<a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-8 col-xl-9">
								<div class="input-group mb-5">
									<input type="text" class="form-control" placeholder="">
									<div class="input-group-append ">
										<button type="button" class="btn btn-secondary">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0 p-4">
										<h2 class="card-title">1 - 30 of 546 users</h2>
										<div class="page-options d-flex float-right">
											<select class="form-control custom-select w-auto">
												<option value="asc">Latest</option>
												<option value="desc">Oldest</option>
											</select>
										</div>
									</div>
									<div class="e-table px-5 pb-5">
										<div class="table-responsive table-lg">
											<table class="table table-bordered mb-0">
												<thead>
													<tr>
														<th  class="text-center">

														</th>
														<th class="text-center">Photo</th>
														<th >Name</th>
														<th>Date</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-1" type="checkbox"> <label class="custom-control-label" for="item-1"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/16.jpg')}}"></td>
														<td class="text-nowrap align-middle">Adam Cotter</td>
														<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-2" type="checkbox"> <label class="custom-control-label" for="item-2"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/15.jpg')}}"></td>
														<td class="text-nowrap align-middle">Pauline Noble</td>
														<td class="text-nowrap align-middle"><span>26 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-3" type="checkbox"> <label class="custom-control-label" for="item-3"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/4.jpg')}}"></td>
														<td class="text-nowrap align-middle">Sherilyn Metzel</td>
														<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-4" type="checkbox"> <label class="custom-control-label" for="item-4"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/18.jpg')}}"></td>
														<td class="text-nowrap align-middle">Terrie Boaler</td>
														<td class="text-nowrap align-middle"><span>20 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-5" type="checkbox"> <label class="custom-control-label" for="item-5"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/19.jpg')}}"></td>
														<td class="text-nowrap align-middle">Rutter Pude</td>
														<td class="text-nowrap align-middle"><span>13 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary  badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-6" type="checkbox"> <label class="custom-control-label" for="item-6"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/8.jpg')}}"></td>
														<td class="text-nowrap align-middle">Clifford Benjamin</td>
														<td class="text-nowrap align-middle"><span>25 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-7" type="checkbox"> <label class="custom-control-label" for="item-7"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/12.jpg')}}"></td>
														<td class="text-nowrap align-middle">Thedric Romans</td>
														<td class="text-nowrap align-middle"><span>12 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-8" type="checkbox"> <label class="custom-control-label" for="item-8"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/1.jpg')}}"></td>
														<td class="text-nowrap align-middle">Haily Carthew</td>
														<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-9" type="checkbox"> <label class="custom-control-label" for="item-9"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/12.jpg')}}"></td>
														<td class="text-nowrap align-middle">Dorothea Joicey</td>
														<td class="text-nowrap align-middle"><span>12 Dec 2017</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-10" type="checkbox"> <label class="custom-control-label" for="item-10"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/15.jpg')}}"></td>
														<td class="text-nowrap align-middle">Mikaela Pinel</td>
														<td class="text-nowrap align-middle"><span>10 Dec 2017</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-11" type="checkbox"> <label class="custom-control-label" for="item-11"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/12.jpg')}}"></td>
														<td class="text-nowrap align-middle">Donnell Farries</td>
														<td class="text-nowrap align-middle"><span>03 Dec 2017</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-12" type="checkbox"> <label class="custom-control-label" for="item-12"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/4.jpg')}}"></td>
														<td class="text-nowrap align-middle">Letizia Puncher</td>
														<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="mb-5">
									<ul class="pagination float-right">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
@endsection
