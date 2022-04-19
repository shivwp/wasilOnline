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
												<h3 class="card-title mb-0">#INV-{{$order->id}}</h3>
											</div>
											<div class="float-right">
												<h3 class="card-title">
                                                    @php
                                                        $date = date("d F Y", strtotime($order->created_at));
                                                    @endphp
                                                    Date: {{$date}}
                                                </h3>
											</div>
										</div>
										<hr>
										<div class="row">
											{{-- <div class="col-lg-6 ">
												<p class="h3">Invoice From:</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													yourdomain@example.com
												</address>
											</div> --}}
											<div class="col-lg-6 ">
												<p class="h3">Invoice To:</p>
												<address>
                                                    {{!empty($orderMeta['shipping_address2']) ? $orderMeta['shipping_address2'] : ''}}<br>
													{{!empty($country) ? $country : ''}}<br>
													{{!empty($state) ? $state : ''}}<br>
													{{!empty($city) ? $city : ''}}<br>
                                                    {{!empty($orderMeta['shipping_zip_code']) ? $orderMeta['shipping_zip_code'] : ''}}<br>
													{{!empty($user->email) ? $user->email : ''}}
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
                                            @foreach($orderProduct as $key => $val)
												<tr>
													<td class="text-center">{{$val->id}}</td>
													<td>
														{{$val->product_name}}
													</td>
													<td class="text-center">{{$val->quantity}}</td>
													<td class="text-right">${{$val->product_price}}</td>
													<td class="text-right">${{$val->total_price}}</td>
												</tr>
                                            @endforeach
                                            {{-- @if(!empty($orderMeta['shipping']))
                                            @foreach($orderMeta['shipping'])
                                            <tr>
                                                <td colspan="4" class="font-weight-bold text-uppercase text-right">Shipping Method</td>
                                                <td class="font-weight-bold text-right h4">$12,038</td>
                                            </tr>
                                            @endforeach
                                            @endif --}}
                                            <tr>
                                                <td colspan="4" class="font-weight-bold text-uppercase text-right">Shipping Price</td>
                                                <td class="font-weight-bold text-right h4">${{!empty($orderMeta['shipping_price']) ? $orderMeta['shipping_price'] : '0'}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="font-weight-bold text-uppercase text-right">Total</td>
                                                <td class="font-weight-bold text-right h4">${{$totalprice + $orderMeta['shipping_price']}}</td>
                                            </tr>
												
											</tbody></table>
										</div>										
									</div>
									<div class="card-footer text-right">
										{{-- <button type="button" class="btn btn-primary mb-1" onclick="javascript:window.print();"><i class="si si-wallet"></i> Pay Invoice</button>
										<button type="button" class="btn btn-success mb-1" onclick="javascript:window.print();"><i class="si si-paper-plane"></i> Send Invoice</button> --}}
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
