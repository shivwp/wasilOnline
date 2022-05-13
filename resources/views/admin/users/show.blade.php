@extends('layouts.vertical-menu.master')

@section('css')

<style>

    span.user-font {

    font-size: 20px;

}

</style>



<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">



<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">



@endsection



@section('page-header')



                        <!-- PAGE-HEADER -->



                            <div>



                                <h1 class="page-title">{{$title}}</h1>



                                <ol class="breadcrumb">



                                    <li class="breadcrumb-item"><a href="#">Order</a></li>



                                    <li class="breadcrumb-item active" aria-current="page">List</li>



                                </ol>



                            </div>



                        



                        <!-- PAGE-HEADER END -->



@endsection



@section('content')



                        <!-- ROW-1 OPEN-->



                            <!-- ROW-1 OPEN -->



                            <div class="row">



                            <div class="col-md-12 col-lg-12">



                                <div class="card">



                                    <div class="card-body">

                                        <div class="row mb-5">

                                            <div class="col-md-12">

                                                <h3>USER INFO</h3>

                                                <span class="user-font"><strong>Name:</strong> {{!empty($user->name) ? $user->name : $user->first_name}}</span><br>

                                                <span class="user-font"><strong>Email: </strong>{{ $user->email ?? '' }}</span><br>

                                                <span class="user-font"><strong>Phone: </strong>{{ $user->phone ?? '' }}</span><br>

                                                <span class="user-font"><strong>DOB: </strong>{{ $user->dob ?? '' }}</span><br>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-12">

                                                <div class="panel panel-primary">

                                                    <div class="tab-menu-heading">

                                                        <div class="tabs-menu ">

                                                            <!-- Tabs -->

                                                            <ul class="nav panel-tabs">

                                                                <li ><a href="#tab1" class="active" data-toggle="tab">User Buying History</a></li>

                                                                <li><a href="#tab2" data-toggle="tab">Top 5 Buying Products</a></li>

                                                                <li><a href="#tab3" data-toggle="tab">Top 5 buying Categories</a></li>

                                                                <li><a href="#tab4" data-toggle="tab">User Cart Products</a></li>
                                                                <li><a href="#tab5" data-toggle="tab">User Bids on Products</a></li>

                                                            </ul>

                                                        </div>

                                                    </div>

                                                    <div class="panel-body tabs-menu-body">

                                                        <div class="tab-content">

                                                            <div class="tab-pane active " id="tab1">

                                                                <table id="" class="table table-striped table-bordered text-nowrap w-100">

                                                                    <thead>

                                                                        <tr>

                                                                            <th class="wd-15p">ORDER number</th>

                                                                            <th class="wd-15p">ORDER Product</th>

                                                                            <th class="wd-15p">amount</th>

                                                                            <th class="wd-15p">shipping charge</th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                    @if(count($userOrder)>0)

                                                                        @foreach($userOrder as $key => $item)

                                                                            <tr>

                                                                                <td>#0{{ $item->id ?? '' }}

                                                                                </td>

                                                                                <td>

                                                                                    @if(count($item->order_product) > 0)

                                                                                        @foreach($item->order_product as $val)

                                                                                        <p>{{$val->product_name}}</p>



                                                                                        @endforeach

                                                                                    @endif

                                                                                </td>

                                                                                <td>${{!empty($item->order_meta['total_price']) ? $item->order_meta['total_price'] : ''}}</td>

                                                                                <td>${{!empty($item->order_meta['shipping_price']) ? $item->order_meta['shipping_price'] : '0'}}</td>

                                                                                {{-- <td>

                                                                                    @if(!empty($item->billing))

                                                                                        @foreach(json_decode($item->billing) as $val)

                                                                                        <spane>{{$val}}</spane><br>

                                                                                        @endforeach

                                                                                    @endif

                                                                                </td>

                                                                                <td>

                                                                                    @if(!empty($item->ship))

                                                                                        @foreach(json_decode($item->ship) as $val)

                                                                                        <spane>{{$val}}</spane><br>

                                                                                        @endforeach

                                                                                    @endif

                                                                                </td>--}}

                    

                    

                    

                                                                                <td>{{ $item->ship_price ?? '' }}</td>

                    

                                                                            

                                                                            </tr>

                    

                                                                        @endforeach

                    

                                                                    @endif

                    

                                                                    </tbody>

                    

                                                                </table>

                                                            </div>

                                                            <div class="tab-pane" id="tab2">

                                                                <table id="" class="table table-striped table-bordered text-nowrap w-100">

                                                                    <thead>

                                                                        <tr>

                                                                            <th class="wd-15p">Product Id</th>

                                                                            <th class="wd-15p">Product name</th>

                                                                            <th class="wd-15p">Qty</th>

                                                                            <th class="wd-15p">amount</th>

                                                                            <th class="wd-15p">Total Amount</th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        @if(count($topsellingproduct) > 0)

                                                                            @foreach($topsellingproduct as $item)

                                                                            <tr>

                                                                                <td>{{ $item->id ?? '' }}</td>

                                                                                <td>{{ $item->pname ?? '' }}</td>

                                                                                <td>{{ round($item->quantity_sold) ?? '' }}</td>

                                                                                <td>${{ $item->s_price ?? '' }}</td>

                                                                                <td>${{ ($item->s_price * $item->quantity_sold) ?? '' }}</td>

                                                                            </tr>

                                                                            <p></p>

                                                                            @endforeach

                                                                        @endif

                                                                    </tbody>

                                                                </table>

                                                            </div>

                                                            <div class="tab-pane" id="tab3">

                                                                <table id="" class="table table-striped table-bordered text-nowrap w-100">

                                                                    <thead>

                                                                        <tr>

                                                                            <th class="wd-15p">Category Id</th>

                                                                            <th class="wd-15p">Category Name</th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        @if(count($topsellingcategory) > 0)

                                                                            @foreach($topsellingcategory as $item)

                                                                            <tr>

                                                                                <td>{{ $item->id ?? '' }}</td>

                                                                                <td>{{ $item->title ?? '' }}</td>

                                                                            </tr>

                                                                            <p></p>

                                                                            @endforeach

                                                                        @endif

                                                                    </tbody>

                                                                </table>

                                                            </div>

                                                            <div class="tab-pane" id="tab4">

                                                                <table id="" class="table table-striped table-bordered text-nowrap w-100">

                                                                    <thead>

                                                                        <tr>

                                                                            <th class="wd-15p">Cart id</th>

                                                                            <th class="wd-15p">Product Name</th>

                                                                            <th class="wd-15p">Qty</th>

                                                                            <th class="wd-15p">Total Amount</th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        @if(count($usercart) > 0)

                                                                            @foreach($usercart as $item)

                                                                            <tr>

                                                                                <td>#{{ $item->id ?? '' }}</td>

                                                                                <td>{{ $item->pro_name ?? '' }}</td>

                                                                                <td>{{ $item->quantity ?? '' }}</td>

                                                                                <td>${{ $item->price ?? '' }}</td>

                                                                            </tr>

                                                                            <p></p>

                                                                            @endforeach

                                                                        @endif

                                                                    </tbody>

                                                                </table>

                                                            </div>

                                                             <div class="tab-pane" id="tab5">

                                                                <table id="" class="table table-striped table-bordered text-nowrap w-100">

                                                                    <thead>

                                                                        <tr>
                                                                            <th  class="wd-10p">id</th>
                                                                            <th class="wd-15p">User Name</th>
                                                                            <th class="wd-15p">Product Name</th>
                                                                            <th class="wd-20p">Bid Price</th>
                                                                            <th class="wd-20p">Bid Status</th>
                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                       @if(count($usersbid)>0)
                                                                            @foreach($usersbid as $key => $item)
                                                                            <tr>
                                                                                <td>{{$item->id ?? '' }}</td>
                                                                                <td>{{$item->user ?? '' }}</td>
                                                                                <td>{{$item->product ?? '' }}</td>
                                                                                <td>{{$item->bid_price ?? '' }}</td>
                                                                                <td>
                                                                                    @if($item->status == 'pending')
                                                                                        <span class=" tag tag-blue">{{ $item->status ?? '' }}</span>
                                                                                    @elseif($item->status == 'out bid')
                                                                                        <span class=" tag tag-red">{{ $item->status ?? '' }}</span>
                                                                                    @elseif($item->status == 'winner')
                                                                                        <span class=" tag tag-green">{{ $item->status ?? '' }}</span>
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                            @endforeach
                                                                        @endif
                                                                    </tbody>

                                                                </table>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                    <!-- TABLE WRAPPER -->



                                </div>



                                <!-- SECTION WRAPPER -->



                            </div>



                        </div>



                        <!-- ROW-1 CLOSED -->               



@endsection