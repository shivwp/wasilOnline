@extends('layouts.vertical-menu.master')
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="page-title">{{$title}}</h1>
                                
                            </div>
                        
                        <!-- PAGE-HEADER END -->
@endsection
@section('content')
<div class="card">
  <div class="card-body" id="add_space">
    <form action="{{ route("dashboard.general-setting.store") }}" method="post" enctype="multipart/form-data">
      @csrf

    

      <hr class="light-grey-hr" />
      <div class="row">
        <div class="col-sm-12">
          <h4>Approval Setting</h4><br>
        </div>
       
      </div>
    
    
      <div class="row">
      <div class="col-sm-3">
          <div class="form-group">
            <label class="switch">
              <input type="checkbox"  name="vendor_approval" {{($setting['vendor_approval'] == 1)?'checked':''}}>
              <span class="slider round"></span>
            </label>
            <label class="form-label">Vendor Auto Approval </label>
          </div>
        </div>


        <div class="col-sm-3">
          <div class="form-group">
            <label class="switch">
              <input type="checkbox" name="product_approval" {{($setting['product_approval'])?'checked':''}}  >
              <span class="slider round"></span>
            </label>
            <label class="form-label ">Product Auto Approval </label>
          </div>
        </div>
   


      </div>
      <button type="submit" class="btn btn-success-light mt-3   ">  Save & update</button>
  </form>
   <form action="{{ route("dashboard.general-setting.store") }}" method="post" enctype="multipart/form-data">
      @csrf

       <hr class="light-grey-hr" />
      <div class="row">
        <div class="col-sm-12">
          <h4>Withdrawl Options</h4><br>
        </div>
       
      </div>
    
    
      <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
            <label class="form-label ">Minimum withdrawal limit</label>
            <input class="form-control" type="number" name="min_withdrwal_limit" value="{{(isset($setting['min_withdrwal_limit'])?$setting['min_withdrwal_limit']:'')}}" >
          </div>
        </div>


        <div class="col-sm-12">
          <div class="form-group">
            <label class="form-label ">Maximum withdrawal limit </label>
            <input class="form-control" type="number" name="max_withdrwal_limit" value="{{(isset($setting['max_withdrwal_limit'])?$setting['max_withdrwal_limit']:'')}}">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label class="form-label ">Withdrawal hold for days</label>
            <input class="form-control" type="number" name="withdrwal_hold" value="{{(isset($setting['withdrwal_hold'])?$setting['withdrwal_hold']:'')}}" >
          </div>
        </div>

         <div class="col-sm-12">
          <div class="form-group">
            <label class="form-label ">Withdraw Threshold</label>
            <input class="form-control" type="text" name="withdrwal_threshould" value="{{(isset($setting['withdrwal_threshould'])?$setting['withdrwal_threshould']:'')}}" >
          </div>
        </div>
   


      </div>
    <button type="submit" class="btn btn-success-light mt-3   ">  Save & update</button>
  </form>
       
    </div>

 


  


</div>

</div>


@endsection
