@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="page-title">{{$title}}</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Coupon</a></li>
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
                                <div class="addnew-ele">
                                <a href="{{ route('dashboard.coupon.create') }}" class="btn btn-info-light ">
                                    {{$buton_name}}
                                </a>
                            </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th class="wd-15p">code</th>
                                                        <th class="wd-15p">description</th>
                                                        <th class="wd-15p">coupon_amount</th>
                                                        <th class="wd-15p">start_date</th>
                                                        <th class="wd-15p">expiry_date</th>
                                                        <th class="wd-15p">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if(count($coupon)>0)
                                                    @foreach($coupon as $key => $item)
                                                        <tr>
                                                            <td>{{ $item->id ?? '' }}</td>
                                                            <td>{{ $item->code ?? '' }}</td>
                                                            <td>{{ $item->description ?? '' }}</td>
                                                            <td>{{ $item->coupon_amount ?? '' }}</td>
                                                            <td>{{ $item->start_date ?? '' }}</td>
                                                            <td>{{ $item->expiry_date ?? '' }}</td>
                                                            <td>
                                                                {{--<a class="btn btn-sm btn-primary" href=""><i class="fa fa-eye"></i></a>--}}
                                                                 @can('coupon_edit')
                                                                 <a class="btn btn-sm btn-secondary" href="{{ route('dashboard.coupon.edit', $item->id) }}"><i class="fa fa-edit"></i> </a>
                                                                  @endcan
                                                                 @can('coupon_delete')
                                                                    <form action="{{ route('dashboard.coupon.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button type="submit" class="btn btn-sm btn-danger" value=""><i class="fa fa-trash"></i></button>
                                                                    </form>
                                                                    @endcan
                                                               
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- TABLE WRAPPER -->
                                </div>
                                <!-- SECTION WRAPPER -->
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->               
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/datatable.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
@endsection
 