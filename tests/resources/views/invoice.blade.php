@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Invoice</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Invoice</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="clearfix">
											<div class="float-left">
												<h3 class="card-title mb-0">#INV-526</h3>
											</div>
											<div class="float-right">
												<h3 class="card-title">Date: 12-09-2019</h3>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-lg-6 ">
												<p class="h3">Invoice Form:</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													yourdomain@example.com
												</address>
											</div>
											<div class="col-lg-6 text-right">
												<p class="h3">Invoice To:</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													ypurdomain@example.com
												</address>
											</div>
										</div>
										<div class="table-responsive push">
											<table class="table table-bordered table-hover mb-0 text-nowrap">
												<tbody><tr class=" ">
													<th class="text-center"></th>
													<th>Item</th>
													<th class="text-center">Quantity</th>
													<th class="text-right">Unit Price</th>
													<th class="text-right">Sub Total</th>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td>
														<p class="font-w600 mb-1">Logo Design</p>
														<div class="text-muted"><div class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</div></div>
													</td>
													<td class="text-center">2</td>
													<td class="text-right">$674</td>
													<td class="text-right">$1,308</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>
														<p class="font-w600 mb-1">Website wireframe for 2 pages</p>
														<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</div>
													</td>
													<td class="text-center">4</td>
													<td class="text-right">$1,500</td>
													<td class="text-right">$6,000</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>
														<p class="font-w600 mb-1">PSD to HTML coding</p>
														<div class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
													</td>
													<td class="text-center">3</td>
													<td class="text-right">$530</td>
													<td class="text-right">$1,690</td>
												</tr>
												<tr>
													<td class="text-center">4</td>
													<td>
														<p class="font-w600 mb-1">E-commerce Development</p>
														<div class="text-muted">When our power of choice is untrammelled and when nothing prevents our being able</div>
													</td>
													<td class="text-center">2</td>
													<td class="text-right">$800</td>
													<td class="text-right">$1,600</td>
												</tr>
												<tr>
													<td class="text-center">5</td>
													<td>
														<p class="font-w600 mb-1">Design and layout of 2 pages in Photoshop</p>
														<div class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
													</td>
													<td class="text-center">2</td>
													<td class="text-right">$720</td>
													<td class="text-right">$1,440</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-bold text-uppercase text-right">Total</td>
													<td class="font-weight-bold text-right h4">$12,038</td>
												</tr>
											</tbody></table>
										</div>
									</div>
									<div class="card-footer text-right">
										<button type="button" class="btn btn-primary mb-1" onclick="javascript:window.print();"><i class="si si-wallet"></i> Pay Invoice</button>
										<button type="button" class="btn btn-success mb-1" onclick="javascript:window.print();"><i class="si si-paper-plane"></i> Send Invoice</button>
										<button type="button" class="btn btn-info mb-1" onclick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
@endsection
