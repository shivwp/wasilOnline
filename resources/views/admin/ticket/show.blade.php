@extends('layouts.vertical-menu.master')
@section('css')
<style>
  .user-message {
    margin-top: 5px;
    padding-top: 14px;
    background: #ffffff;
    border-radius: 3px;
    margin-bottom: 8px;
    border: 1px #0caf4e solid;
    box-shadow: 1px 1px #0caf4e;
}
.admin-message {
    margin-top: 5px;
    background: #ffffff;
    border-radius: 3px;
    margin-bottom: 8px;
    border: 1px #0caf4e solid;
}
.user-span{
    margin-left: 9px;
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
                                    <li class="breadcrumb-item"><a href="#">Gift-card</a></li>
                                    
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
    
                                        <div class="row">
                                            <div class ="col-md-3">
                                                <label>Category:</label>
                                            </div>
                                            <div class ="col-md-3">
                                                {{$tickets->category->title ?? '' }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class ="col-md-3">
                                                <label>Product:</label>
                                            </div>
                                            <div class ="col-md-3">
                                                {{$tickets->product->pname ?? '' }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class ="col-md-3">
                                                <label>Order:</label>
                                            </div>
                                            <div class ="col-md-3">
                                                #0{{$tickets->order->id ?? '' }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class ="col-md-3">
                                                <label>User:</label>
                                            </div>
                                            <div class ="col-md-3">
                                                {{$tickets->user->first_name ?? '' }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class ="col-md-3">
                                                <label>Description:</label>
                                            </div>
                                            <div class ="col-md-3">
                                                {{$tickets->description ?? '' }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class ="col-md-3">
                                                <label>Image:</label>
                                            </div>
                                            <div class ="col-md-3">
                                                <img src="{{url('support-image').'/'.$tickets->image}}" alt="" style="height:50px">
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class ="col-md-12 text-center">
                                                <h5>Chets</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class ="col-md-12">
                                            @if(count($comments)>0)
                                                @foreach($comments as $key => $vaal)
                                                    <div class="row">
                                                        <div class ="col-md-3">
                                                            <img src="{{url('images').'/user.png'}}" alt="" style="height:50px" class="rounded-circle"><br>
                                                            <span class="user-span">{{$vaal->user_name}}({{$vaal->user_title}})</span>
                                                        </div>
                                                        <div class ="col-md-9 user-message">
                                                            <p>{{$vaal->comment}}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                                {{--<div class="row">
                                                    <div class ="col-md-3">
                                                        <img src="{{url('images').'/user.png'}}" alt="" style="height:50px" class="rounded-circle"><br>
                                                        <span class="user-span">Admin</span>
                                                    </div>
                                                    <div class ="col-md-9 admin-message">
                                                        <p>Hello. How are you today?</p>
                                                    </div>
                                                </div>--}}
                                            </div>

                                        </div>
                                        <form action="{{route('dashboard.support-comments')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mt-5">
                                                <div class ="col-md-12">
                                                <textarea  name="comment" value="" class="form-control" placeholder="text"></textarea>
                                                </div>
                                                <div class ="col-md-12 mt-2">
                                                    <input  type="file" name="img" value="" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="hidden" name="ticket_id" value="{{$tickets->id ?? '' }}" class="form-control">
                                                        <input type="hidden" name="support_id" value="{{ Auth::user()->id}}" class="form-control">
                                                        <button class="btn btn-danger mt-2" name="">Send</button>
                                                    </div>
                                                
                                            </div>
                                        </form>


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
 