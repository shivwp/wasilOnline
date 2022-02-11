@extends('layouts.vertical-menu.master')
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div><h1 class="page-title">{{$title}}</h1></div>
                        <!-- PAGE-HEADER END -->
@endsection
@section('content')
<div class="card">

  <div class="card-body" id="add_space">
    <form action="{{ url("dashboard/vendor-added") }}" method="post" enctype="multipart/form-data">
      @csrf
     <input type="hidden" class="form-control" name="vendor_id" value="{{ isset($vendor) ? $vendor->id : '' }}">
    <div class="row">
             
  
       
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">First Name </label>
            <input type="text" name="first_name" class="form-control" value="{{($data['first_name'])??''}}">
          </div>
        </div>
          <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">Last Name </label>
            <input type="text" name="last_name" class="form-control" value="{{($data['last_name'])??''}}">
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">Store Name </label>
            <input type="text" name="store_name" class="form-control" value="{{($data['store_name'])??''}}">
          </div>
        </div>
      
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">Store url </label>
            <input type="text" name="store_url" class="form-control " value="{{($data['store_url'])??''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">Phone Number </label>
            <input type="number" name="phone_number" class="form-control " value="{{($data['phone_number'])??''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">Email </label>
            <input type="email" class="form-control"  name="email" value="{{($data['email'])??''}}">
          </div>
        </div>
        <!--/span-->
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">Username</label>
            <input type="text" class="form-control" name="user_name " value="{{($data['user_name'])??''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">Password </label>
            <input type="number" class="form-control"  name="password" value="{{($data['password'])??''}}">
          </div>
        </div>

       
      </div>

    

    <div class="form-actions" id="add_space">
      <button class="btn btn-success-light mt-3">Save & update</button>
    </div>
    </div>
    </div>
  </form>
</div>
</div>
@endsection