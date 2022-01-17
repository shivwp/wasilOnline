@extends('layouts.vertical-menu.master')
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div><h1 class="page-title">{{$title}}</h1></div>
                        <!-- PAGE-HEADER END -->
@endsection
@section('content')
<div class="card">
  <div class="card-body" id="add_space">
    <form action="{{ route("dashboard.vendorsettings.store") }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
         <div class="col-md-12">
          <div class="form-group">
            <label class="control-label ">Commision </label>
            <input type="text" class="form-control" id="exampleInputuname_1" name="commision" value="">
          </div>
        </div>
    </div>
     <div class="form-actions" id="add_space">
      <button class="btn btn-success-light mt-3">Save & update</button>
    </div>
    </div>
  </form>
</div>
</div>
@endsection