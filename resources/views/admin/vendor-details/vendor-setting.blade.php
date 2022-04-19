@extends('layouts.vertical-menu.master')
@section('css')
<style>
strong.select2-results__group {
    font-size: 33px;
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/date-picker/spectrum.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/multipleselect/multiple-select.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />

<link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet">

@endsection
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







      <input type="hidden" class="form-control" name="vendor_id" value="{{ isset($vendor) ? $vendor->id : '' }}">



      <div class="row">



              <div class="col-md-2">



          <div class="form-group">Profile Image </label>



            <input type="file" class="form-control" id="exampleInputuname_1" name="profile_img" value="{{($data['profile_img'])??''}}">



          </div>



        </div>



        



        <div class="col-md-4">



          <div class="form-group">



           <img class="vendor_image" src="{{url('')}}/images/vendor/settings/{{($data['profile_img'])??''}}" style="height:100px;width:100px;" alt="logo" >



          </div>



        </div>



         <div class="col-md-2">



          <div class="form-group">



            <label class="control-label ">Banner Image </label>



            <input type="file" class="form-control" id="exampleInputuname_1" name="banner_img" value="{{($data['banner_img'])??''}}">



          </div>



        </div>



        <div class="col-md-4">



          <div class="form-group">



              <img class="vendor_image" src="{{url('')}}/images/vendor/settings/{{($data['banner_img'])??''}}" style="height:100px;width:100px;" alt="logo" >



            



          </div>



        </div>



          @if(isset($vendor->id))



          <div class="col-md-12">



          <div class="form-group">



            <label class="control-label ">Commision </label>



            <input type="text" name="commision" class="form-control" value="{{($data['commision'])??''}}">



          </div>



        </div>          



        @else



      



        @endif



       



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



    <div class="row">



        <div class="col-md-6">



        <h4 class="mt-5">Address</h4> <hr>



      <div class="row">



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Street-1</label>



            <input type="text" class="form-control"  name="street_1" value="{{($data['street_1'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Street-2</label>



            <input type="text" class="form-control"  name="street_2" value="{{($data['street_2'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">City</label>



            <input type="text" class="form-control"  name="city" value="{{($data['city'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Zip</label>



            <input type="number" class="form-control"  name="zip" value="{{($data['zip'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Country</label>



            <input type="text" class="form-control"  name="country" value="{{($data['country'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">State</label>



            <input type="text" class="form-control"  name="state" value="{{($data['state'])??''}}">



          </div>



        </div>



      </div></div>



      <div class="col-md-6">



        <h4 class="mt-5">Social links</h4><hr>



        <div class="row">



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Instagram</label>



            <input type="text" class="form-control"  name="instagram" value="{{($data['instagram'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Youtube</label>



            <input type="text" class="form-control"  name="youtube" value="{{($data['youtube'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Twitter</label>



            <input type="text" class="form-control"  name="twitter" value="{{($data['twitter'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Linkedin</label>



            <input type="number" class="form-control"  name="linkedin" value="{{($data['linkedin'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Facebook</label>



            <input type="text" class="form-control"  name="facebook" value="{{($data['facebook'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Pinterest</label>



            <input type="text" class="form-control"  name="pinterest" value="{{($data['pinterest'])??''}}">



          </div>



        </div>



      </div>



      



      </div>



    



       </div>

       <div class="row">
        <div class="col-md-12">
          <h4 class="mt-5">Selling Areas</h4> <hr>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label class="control-label ">Select City</label>
                  <select  name="citystatecountry[]" id="city" class="form-control select2" multiple>
                    @php  
                    if(!empty($data['citystatecountry'])){
                      $array = json_decode($data['citystatecountry']);
                    }
                    else{
                      $array = [];
                    }
                    @endphp
                    @if(count($stateCity)>0)
                      @foreach($stateCity as $key => $val)
                        <optgroup label="{{$val->state_name}}">
                          @foreach($val->city as $k1 => $v1)
                          <option value="{{$v1->city_id}}" {{isset($data['citystatecountry']) && in_array($v1->city_id,$array) ? 'selected' : ''}}>{{$v1->city_name}}</option>
                          @endforeach
                      @endforeach
                    @endif
                  </select>
              </div>
            </div>
          </div>
        </div>
      </div>



       <h4>Payment Options</h4>



       <hr>



      <div class="row">



            <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Account Name </label>



            <input type="text" class="form-control" name="account_name" value="{{($data['account_name'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Account Number </label>



            <input type="number" class="form-control" name="account_number" value="{{($data['account_number'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Bank Name </label>



            <input type="text" class="form-control" name="bank_name" value="{{($data['bank_name'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">bank Number </label>



            <input type="text" class="form-control" name="bank_number" value="{{($data['bank_number'])??''}}">



          </div>



        </div>



          <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Swift Code </label>



            <input type="text" class="form-control" name="swift_code" value="{{($data['swift_code'])??''}}">



          </div>



        </div>



        <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Routing Number </label>



            <input type="text" class="form-control" name="routing_number" value="{{($data['routing_number'])??''}}">



          </div>



        </div>



         <div class="col-md-12">



            <label class="switch">



              <input type="checkbox" id="selling" name="selling"isset({{isset($data['selling']) && ($data['selling'] == 1)?'checked':''}}) >



              <span class="slider round"></span>



            </label>



        



        <label for="scales">Enable Selling</label>



      </div>



        <div class="col-md-12">



            <label class="switch">



              <input type="checkbox" id="product_publish" name="product_publish" {{isset($data['product_publish']) && ($data['product_publish'] == 1)?'checked':''}}>



              <span class="slider round"></span>



            </label>



        



        <label for="scales">Publish Product direct</label>



      </div>



        <div class="col-md-12">



           <label class="switch">



              <input type="checkbox" id="feature_vendor" name="feature_vendor" {{(isset($data['feature_vendor']) && $data['feature_vendor'] == 1)?'checked':''}}>



              <span class="slider round"></span>



            </label>



       



        <label for="scales">Make feature vendor</label>



      </div>



       <div class="col-md-12">



        <label class="switch">



             <input type="checkbox" id="notify" name="notify" {{isset($data['notify']) && ($data['notify'] == 1)?'checked':''}}>



              <span class="slider round"></span>



            </label>



        



        <label for="scales">Send the vendor an email About their account</label>



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

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/date-picker/spectrum.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/multipleselect/multi-select.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/time-picker/toggles.min.js') }}"></script>

<script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>



<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/wysiwyag/wysiwyag.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/summernote/summernote-bs4.js') }}"></script>

<script src="{{ URL::asset('assets/js/summernote.js') }}"></script>

<script src="{{ URL::asset('assets/js/formeditor.js') }}"></script>
<script>     

<script src="{{ URL::asset('assets/plugins/multipleselect/multi-select.js') }}"></script>
@endsection