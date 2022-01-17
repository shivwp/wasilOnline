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
                                    <li class="breadcrumb-item"><a href="#">category</a></li>
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
                                <a href="{{ route('dashboard.gift-card.create') }}" class="btn btn-info-light ">
                                    {{$buton_name}}
                                </a>
                            </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-10p">id</th>
                                                        <th class="wd-15p">Title</th>
                                                        <th class="wd-15p">Description</th>
                                                        <th class="wd-15p">Image</th>
                                                        <th class="wd-15p">Amount</th>
                                                        <th class="wd-15p">Valid Days</th>
                                                        <th class="wd-15p">Status</th>
                                                        <th class="wd-15p">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if(count($giftcard)>0)
                                                    @foreach($giftcard as $key => $item)
                                                    <tr>
                                                        <td>{{$item->id ?? '' }}</td>
                                                        <td>{{$item->title ?? '' }}</td>
                                                        <td>{{$item->description ?? '' }}</td>
                                                        <td>
                                                            @if(!empty($item->image))
                                                            <img src="{{url('/giftcard')}}/{{$item->image}}" alt="giftcard">
                                                            @endif
                                                        </td>
                                                        <td>{{$item->amount ?? '' }}</td>
                                                        <td>{{$item->valid_days ?? '' }}</td>
                                                        <td>
                                                            @if($item->status == 1)
                                                            <span class="tag tag-green">Active</span>
                                                            @else
                                                            <span class="tag tag-gray-dark">Deactive</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                               
                                                                 <a class="btn btn-sm btn-secondary" href="{{ route('dashboard.gift-card.edit', $item->id) }}"><i class="fa fa-edit"></i> </a>
                                                                 
                                                               
                                                                    <form action="{{ route('dashboard.category.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}"><i class="fa fa-trash"></i></button>
                                                                    </form>
                                                               
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
 