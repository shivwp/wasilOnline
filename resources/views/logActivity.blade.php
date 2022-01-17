@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                             
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Logs</a></li>
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
                               
                            </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                                <thead>
                                                   <tr>
														<th>No</th>
														<th>Subject</th>
														<th>URL</th>
														<th>Method</th>
														<th>Ip</th>
														<th width="300px">User Agent</th>
														<th>User Id</th>
														<th>Action</th>
													</tr>
                                                </thead>
                                                <tbody>
                                         
                                                    <tr>
                                                     
                                                         @if(count($logs)>0)
															@foreach($logs as $key => $log)
															<tr>
																<td>{{ ++$key }}</td>
																<td>{{ $log->subject }}</td>
																<td class="text-success">{{ $log->url }}</td>
																<td><label class="label label-info">{{ $log->method }}</label></td>
																<td class="text-warning">{{ $log->ip }}</td>
																<td class="text-danger">{{ $log->agent }}</td>
																<td>{{ $log->user_id }}</td>
																<td>
																 <form action="{{ route('dashboard.logsdelete', $log->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}">
                                                                        	<i class="fa fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
															</tr>
															@endforeach
														@endif
                                                    </tr>
                                                   
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
 
<!-- 
<div class="container">
	<h1>Log Activity Lists</h1>
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Subject</th>
			<th>URL</th>
			<th>Method</th>
			<th>Ip</th>
			<th width="300px">User Agent</th>
			<th>User Id</th>
			<th>Action</th>
		</tr>
		@if($logs->count())
			@foreach($logs as $key => $log)
			<tr>
				<td>{{ ++$key }}</td>
				<td>{{ $log->subject }}</td>
				<td class="text-success">{{ $log->url }}</td>
				<td><label class="label label-info">{{ $log->method }}</label></td>
				<td class="text-warning">{{ $log->ip }}</td>
				<td class="text-danger">{{ $log->agent }}</td>
				<td>{{ $log->user_id }}</td>
				<td><button class="btn btn-danger btn-sm">Delete</button></td>
			</tr>
			@endforeach
		@endif
	</table>
</div>
 -->
