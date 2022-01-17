@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Cart</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cart</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card cart">
									<div class="card-header">
										<h3 class="card-title">Shopping Cart</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered table-vcenter text-nowrap">
												<thead>
													<tr>
														<th>Product</th>
														<th>Title</th>
														<th>Price</th>
														<th class="w-25">Quantity</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<img src="{{URL::asset('assets/images/pngs/1.png')}}" alt="" class="h-8">
														</td>
														<td>laborum et dolorum fuga</td>
														<td class="font-weight-bold">$568</td>
														<td >
															<div class="input-group input-indec">
																<span class="input-group-btn">
																	<button type="button" class="quantity-left-minus btn btn-light btn-number br-0"  data-type="minus" data-field="">
																		<i class="fa fa-minus"></i>
																	</button>
																</span>
																<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="1" >
																<span class="input-group-btn">
																	<button type="button" class="quantity-right-plus btn btn-light btn-number br-0" data-type="plus" data-field="">
																		<i class="fa fa-plus"></i>
																	</button>
																</span>
															</div>
														</td>
														<td>
															<a href="javascript:void(0)" class="btn btn-danger mr-3" data-toggle="tooltip" data-placement="top" title="Save for Washlist"><i class="icon icon-heart  fs-16"></i></a>
															<a href="javascript:void(0)" class="btn btn-info mr-3" data-toggle="tooltip" data-placement="top" title="Remove"><i class="icon icon-trash  fs-16"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{URL::asset('assets/images/pngs/4.png')}}" alt="" class="h-8">
														</td>
														<td>laborum et dolorum fuga</td>
														<td class="font-weight-bold">$1,027</td>
														<td >
															<div class="input-group input-indec">
																<span class="input-group-btn">
																	<button type="button" class="quantity-left-minus btn btn-light btn-number br-0"  data-type="minus" data-field="">
																		<i class="fa fa-minus"></i>
																	</button>
																</span>
																<input type="text" id="quantity1" name="quantity" class="form-control input-number text-center" value="1" >
																<span class="input-group-btn">
																	<button type="button" class="quantity-right-plus btn btn-light btn-number br-0" data-type="plus" data-field="">
																		<i class="fa fa-plus"></i>
																	</button>
																</span>
															</div>
														</td>
														<td>
															<a href="javascript:void(0)" class="btn btn-danger  mr-3" data-toggle="tooltip" data-placement="top" title="Save for Washlist"><i class="icon icon-heart  fs-16"></i></a>
															<a href="javascript:void(0)" class="btn btn-info  mr-3" data-toggle="tooltip" data-placement="top" title="Remove"><i class="icon icon-trash  fs-16"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{URL::asset('assets/images/pngs/8.png')}}" alt="" class="h-8">
														</td>
														<td>laborum et dolorum fuga</td>
														<td class="font-weight-bold">$1,589</td>
														<td >
															<div class="input-group input-indec">
																<span class="input-group-btn">
																	<button type="button" class="quantity-left-minus btn btn-light btn-number br-0"  data-type="minus" data-field="">
																		<i class="fa fa-minus"></i>
																	</button>
																</span>
																<input type="text" id="quantity2" name="quantity" class="form-control input-number text-center" value="1" >
																<span class="input-group-btn">
																	<button type="button" class="quantity-right-plus btn btn-light btn-number br-0" data-type="plus" data-field="">
																		<i class="fa fa-plus"></i>
																	</button>
																</span>
															</div>
														</td>
														<td>
															<a href="javascript:void(0)" class="btn btn-danger  mr-3" data-toggle="tooltip" data-placement="top" title="Save for Washlist"><i class="icon icon-heart  fs-16"></i></a>
															<a href="javascript:void(0)" class="btn btn-info  mr-3" data-toggle="tooltip" data-placement="top" title="Remove"><i class="icon icon-trash  fs-16"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div><br>
										<div class="row">
											<div class="col-6"><input class="productcart form-control" type="text" placeholder="Coupon Code"></div>
											<div class="col-6"><a href="#" class="btn btn-primary btn-md">Apply Coupon</a></div>
										</div><br>
										<div class="mt-3">
											<ul class="list-group">
												<li class="list-group-item">
													Sub Total
													<span class="badgetext h4 font-weight-bold mb-0">$4,360</span>
												</li>
												<li class="list-group-item">
													Discount
													<span class="badgetext h4 font-weight-bold mb-0">5%</span>
												</li>
												<li class="list-group-item">
													Shipping
													<span class="badgetext h4 font-weight-bold mb-0">Free</span>
												</li>
												<li class="list-group-item">
													Total
													<span class="badgetext h4 font-weight-bold mb-0">$3,976</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-footer text-right">
										<a href="#" class="btn btn-primary"><i class="fa fa-arrow-left mr-1"></i>Continue Shopping</a>
										<a href="#" class="btn btn-success">Check out<i class="fa fa-arrow-right ml-1"></i></a>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
						<!-- ROW-1 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
@endsection
