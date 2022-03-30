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