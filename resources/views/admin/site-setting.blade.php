@extends('layouts.vertical-menu.master')

@section('css')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endsection
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
    <form action="{{ route("dashboard.settings.store") }}" method="post" enctype="multipart/form-data">
      @csrf 
   
      <div class="row">
         <div class="col-md-2">
          <div class="form-group">
            <label class="control-label ">Business logo </label>
            <input type="hidden" name="logo" value="Business logo">
           <input type="file" class="form-control" id="exampleInputuname_1" name="logo" value="{{($setting['logo'])??''}}">
          </div>
        </div>
             <div class="col-md-4">
          <div class="form-group">
            <img src="{{ url('images/logo').'/'.$setting['logo'] ?? "" }}" style="height:100px;width:200px;" alt="logo">
            </div>
        </div>
       
        <div class="col-md-6">
          <div class="form-group">
            <input type="hidden" name="name_0" value="Business Name">
            <label class="control-label ">Business Name </label>
             <input type="text" class="form-control" id="exampleInputuname_1" name="name" value="{{($setting['name'])??''}}">
           
          </div>
        </div>
       
 
      </div>
      <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <input type="hidden" name="name_1" value="Business Name">
            <label class="control-label ">Country </label>
            <input type="text" class="form-control" id="exampleInputuname_1" name="country" value="{{($setting['country'])??''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">State </label>
            <input type="text" class="form-control" id="exampleInputuname_1" name="state" value="{{($setting['state'])??''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="hidden" name="name_3" value="City">
            <label class="control-label ">City </label>
            <input type="text" class="form-control" id="exampleInputuname_1" name="city" value="{{($setting['city'])??''}}">
          </div>
        </div>

      
        <div class="col-md-6">
          <div class="form-group">
            
            <label class="control-label ">Postcode </label>
              <input type="text" class="form-control" id="exampleInputuname_1" name="postcode" value="{{($setting['postcode'])??''}}">
          </div>
        </div>
        <!--/span-->
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">Helpline Number </label>
              <input type="text" class="form-control" id="exampleInputuname_1" name="help_number" value="{{($setting['help_number'])??''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">Email </label>
              <input type="text" class="form-control" id="exampleInputuname_1" name="email" value="{{($setting['email'])??''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">PAN Number </label>
              <input type="text" class="form-control" id="exampleInputuname_1" name="pan_number" value="{{($setting['pan_number'])??''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">CIN Number </label>
               <input type="text" class="form-control" id="exampleInputuname_1" name="cin_number" value="{{($setting['cin_number'])??''}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">GSTIN Number </label>
              <input type="text" class="form-control" id="exampleInputuname_1" name="gst_number" value="{{($setting['gst_number'])??''}}">
          </div>
        </div>
         <div class="col-md-6">
          <div class="form-group">
            <label class="control-label ">Site Url </label>
            <input type="text" class="form-control" id="exampleInputuname_1" name="url" value="{{($setting['url'])??''}}">
          </div>
        </div>
          <div class="col-md-6">
          <div class="form-group">
            <input type="hidden" name="name_4" value="Address">
            <label class="control-label ">Address </label>
            <input type="text" class="form-control" id="exampleInputuname_1" name="address" value="{{($setting['address'])??''}}">
          </div>
        </div>
        <div class="col-sm-6">
          <label>Official Hour Type</label>
             <input type="text" class="form-control" id="exampleInputuname_1" name="hour" value="{{($setting['hour'])??''}}">
        </div>
    
        <div class="col-sm-6">
          <label>Currency</label>
           <select class="form-control" multiple="multiple">
            <option selected="selected">English</option>
          </select>
        </div>
     
       
      </div>
    

<div class="form-actions" id="add_space">

    <button class="btn btn-success-light mt-3   ">  Save & update</button>
  </div>
       
    </div>

 


  

  </form>

</div>

</div>


@endsection

@section('js')
<script type="text/javascript">
$('select').select2({
  createTag: function (params) {
    // Don't offset to create a tag if there is no @ symbol
    if (params.term.indexOf('@') === -1) {
      // Return null to disable tag creation
      return null;
    }

    return {
      id: params.term,
      text: params.term
    }
  }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection