@extends('layouts.vertical-menu.master')
@section('css')
<style>
.input-container {
  padding-bottom: 1em;
}
.left-inner-addon {
    position: relative;
}
.left-inner-addon input {
    padding-left: 35px !important; 
}
.left-inner-addon i {
    position: absolute;
    padding: 12px 12px;
    pointer-events: none;
}

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



      <div class="row">



              <div class="col-md-2">



          <div class="form-group">Store logo</label>



            <input type="file" class="form-control" id="exampleInputuname_1" name="profile_img" value="{{($data['profile_img'])??''}}">



          </div>



        </div>



        



        <div class="col-md-4">



          <div class="form-group">



             @if(isset($vendor->id))



            <img class="vendor_image" src="{{url('')}}/images/vendor/settings/{{($data['profile_img'])??''}}" style="height:100px;width:100px;" alt="logo" >



             @else



      



        @endif



          </div>



        </div>







         <div class="col-md-2">



          <div class="form-group">



            <label class="control-label "> Store Banner  </label>



            <input type="file" class="form-control" id="exampleInputuname_1" name="banner_img" value="{{($data['banner_img'])??''}}">



          </div>



        </div>



        <div class="col-md-4">



          <div class="form-group">



             @if(isset($vendor->id))



            <img class="banner_img" src="{{url('')}}/images/vendor/settings/{{($data['banner_img'])??''}}" style="height:100px;width:100px;" alt="logo">



             @else



      



        @endif



          </div>



        </div>



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



            <input type="text" class="form-control" name="user_name " value="{{($data['first_name'])??''}}">



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



   



    </form>



     <form action="{{ route("dashboard.vendorsettings.store") }}" method="post" enctype="multipart/form-data">



      @csrf



    <div class="row">
        <div class="col-md-12">
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
              <label class="control-label ">Country</label>
              <select  id="country" name="country" class="form-control">
                  <option value="">Select Country</option>
                  @foreach ($countries as $country)
                  <option value="{{$country->id}}"{{(isset($data['country']) && $data['country']== $country->id)? 'selected' :''}}>
                      {{$country->name}}
                  </option>
                  @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">State</label>
                <!--  <input type="text" class="form-control"  name="state" value="{{($data['state'])??''}}">
                -->
                <select id="state" name="state" class="form-control">
                    @foreach ($states as $state)
                      <option value="{{$state->state_id}}" {{($data['state']== $state->state_id)? 'selected' :''}}>
                      {{$state->state_name}}
                      </option>
                    @endforeach
                </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label ">City</label>
            <!--  <input type="text" class="form-control"  name="city" value="{{($data['city'])??''}}"> -->
              <select id="city" name="city" class="form-control">
                @foreach ($cities as $city)
                  <option value="{{$city->city_id}}" {{($data['city']==   $city->city_id)? 'selected' :''}}>
                      {{$city->city_name}}
                  </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label ">Zip</label>
              <input type="number" class="form-control"  name="zip" value="{{($data['zip'])??''}}">
            </div>
          </div>
          </div></div>
          <div class="col-md-12">
              <h4 class="mt-5">Social links</h4><hr>
              <div class="row">
                <div class="col-md-6"> 
                  <div class="form-group">
                    <div class="left-inner-addon input-container">
                          <i class="fa fa-instagram"></i>
                          <input  type="text" class="form-control" placeholder="instagram" name="instagram" value="{{($data['instagram'])??''}}" />
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="left-inner-addon input-container">
                      <i class="fa fa-youtube"></i>
                        <input  type="text" class="form-control" placeholder="youtube" name="youtube" value="{{($data['youtube'])??''}}" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <div class="left-inner-addon input-container">
                          <i class="fa fa-twitter"></i>
                          <input  type="text" class="form-control"     placeholder="twitter" name="twitter" value="{{($data['twitter'])??''}}" />
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <div class="left-inner-addon input-container">
                        <i class="fa fa-linkedin"></i>
                        <input  type="text"  class="form-control"    placeholder="linkedin" name="linkedin" value="{{($data['linkedin'])??''}}" />
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                        <div class="left-inner-addon input-container">
                          <i class="fa fa-facebook"></i>
                            <input  type="text" class="form-control"  placeholder="Facebook" name="facebook" value="{{($data['facebook'])??''}}" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <div class="left-inner-addon input-container">
                        <i class="fa fa-pinterest"></i>
                        <input  type="text" class="form-control"  placeholder="pinterest" name="pinterest" value="{{($data['pinterest'])??''}}" />
                      </div>
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



         <div class="form-actions" id="add_space">



      <button class="btn btn-success-light mt-3">Save & update</button>



    </div>



       </form>







     







      <form action="{{ route("dashboard.vendorsettings.store") }}" method="post" enctype="multipart/form-data">



      @csrf



       <h4 class="mt-5">Payment Options</h4>



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



          <div class="col-md-6">



          <div class="form-group">



            <label class="control-label ">Paypal Id </label>



            <input type="text" class="form-control" name="paypal_id" value="{{($data['paypal_id'])??''}}">



          </div>



        </div>



          @if(Auth::user()->roles->first()->title == "Admin") 



          <div class="col-md-12">
            <label class="switch">
              @if(isset($data['selling']))
              <input type="checkbox" id="selling" name="selling" {{($data['selling'] == 1)?'checked':''}}>
              @endif
              <span class="slider round"></span>
            </label>
            <label for="scales">Enable Selling</label>
          </div>



        <div class="col-md-12">
            <label class="switch">
               @if(isset($data['product_publish']))
              <input type="checkbox" id="product_publish" name="product_publish" {{($data['product_publish'] == 1)?'checked':''}}>
               @endif
              <span class="slider round"></span>
            </label>
            <label for="scales">Publish Product direct</label>
        </div>
        <div class="col-md-12">
           <label class="switch">
            @if(isset($data['feature_vendor']))
              <input type="checkbox" id="feature_vendor" name="feature_vendor" {{($data['feature_vendor'] == 1)?'checked':''}}>
               @endif
              <span class="slider round"></span>
            </label>



       



           <label for="scales">Make feature vendor</label>
        </div>
       <div class="col-md-12">
          <label class="switch">
              @if(isset($data['notify']))
                <input type="checkbox" id="notify" name="notify" {{($data['notify'] == 1)?'checked':''}}>
              @endif
              <span class="slider round"></span>
          </label>
          <label for="scales">Send the vendor an email About their account</label>
        </div>
        



      @endcan



      </div>

      

      <div class="row mt-5">

        <div class="col-md-12">

          <h4>Shipping Methods<h4>

            <hr>

        </div>

        <div class="col-md-12">
          @if(isset($avaliablesettings['free_shipping_is_applied']) && ($avaliablesettings['free_shipping_is_applied'] == "on"))
            <div class="row">

              <div class="col-md-4">     

                <div class="form-group">

                  <label class="switch">

                      <input type="checkbox" id="free" name="free_shipping_is_applied" {{ isset($data['free_shipping_is_applied']) && ($data['free_shipping_is_applied'] == "on") ?  'checked' : '' }} onchange="freeship()">

                      <span class="slider round"></span>

                  </label>

                  <label for="scales">Free Shipping</label>

                </div>

              </div>

              <div class="col-md-4 order-limit">   

                <input type="number" class="form-control" name="free_shipping_over" value="{{isset($data['free_shipping_over']) ? $data['free_shipping_over'] : 0}}" placeholder="order limit" > 

              </div>

              <div class="col-md-4">   

              </div>

            </div>
          @endif
          @if(isset($avaliablesettings['normal_shipping_is_applied']) && ($avaliablesettings['normal_shipping_is_applied'] == "on"))
            <div class="row">

              <div class="col-md-4">

                <div class="form-group">
    
                  <label class="switch">
                    <input type="checkbox" id="normal-shipping" name="normal_shipping_is_applied" {{ isset($data['normal_shipping_is_applied']) && ($data['normal_shipping_is_applied'] == "on") ?  'checked' : '' }} onchange="normalShipping()">
    
                    <span class="slider round"></span>
    
                  </label>
    
                  <label for="scales">Normal Shipping</label>
    
                </div>
    
              </div>
              <div class="col-md-4">
                <input type="number" name="normal_price" value="{{isset($data['normal_price']) ? $data['normal_price'] : 0}}" class="form-control normal-shipping" placeholder="shipping price" >
              </div>

              <div class="col-md-4">   

              </div>

            </div>
          @endif
          @if(isset($avaliablesettings['city_shipping']) && ($avaliablesettings['city_shipping'] == "on"))
            <div class="row">
              <div class="col-md-4">

                <div class="form-group">
    
                  <label class="switch">
    
                    <input type="checkbox" id="city-shipping" name="shipping_by_city_is_applied" {{ isset($data['shipping_by_city_is_applied']) && ($data['shipping_by_city_is_applied'] == "on") ?  'checked' : '' }} onchange="cityShipping()">
    
                    <span class="slider round"></span>
    
                  </label>
    
                  <label for="scales">Shipping By City</label>
    
                </div>
    
              </div>
            </div>
          @endif
            <div class="row city-shipping" style="display: none">
              <div class="col-md-12">
                <h4 class="mt-5">Shipping By City</h4><hr>
              </div>
              <?php $i = 0; ?>
              @if(count($city_list) > 0)
                @foreach ($city_list as $item)
                @php
                 $singlePrice = \App\Models\CityPriceVendor::where('vendor_id',Auth::user()->id)->where('city_id',$item->city_id)->first(); 
                @endphp
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="hidden" name="ship_city[{{$i}}][city_id]" value="{{$item->city_id}}">
                    <input type="text" class="form-control" id="exampleInputuname_1" name="country" value="{{($item['city_name'])??''}}" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="ship_city[{{$i}}][admin_normal_price]" value="{{!empty($singlePrice->normal_price) ? $singlePrice->normal_price : ''}}" class="form-control" placeholder="normal price">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="ship_city[{{$i}}][admin_city_wise_price]" value="{{!empty($singlePrice->priority_price) ? $singlePrice->priority_price : ''}}" class="form-control" placeholder="priority price">
                  </div>
                </div>
                <?php $i++ ?>
                @endforeach
              @endif
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



    <script>
      if(document.getElementById('normal-shipping').checked) {
        $(".normal-shipping").show();
      }
      else{
        $(".normal-shipping").hide();
      }
      if(document.getElementById('city-shipping').checked) {
        $(".city-shipping").show();
      }
      else{
        $(".normal-shipping").hide();
      }
      function normalShipping()
      {
        if($('#normal-shipping').is(":checked"))   
          $(".normal-shipping").show();
        else
          $(".normal-shipping").hide();
      }
    function cityShipping()
    {
      if($('#city-shipping').is(":checked"))   
        $(".city-shipping").show();
      else
        $(".city-shipping").hide();
    }



        $(document).ready(function () {



            $('#country').on('change', function () {



                var idCountry = this.value;



                $("#state").html('');



                $.ajax({



                    url: "{{url('dashboard/fetch-states')}}",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $('#state').html('<option value="">Select State</option>');



                        $.each(result.states, function (key, value) {



                            $("#state").append('<option value="' + value



                                .state_id + '">' + value.state_name + '</option>');



                        });



                        $('#city').html('<option value="">Select City</option>');



                      



                    }



                });



                



            });



            $('#state').on('change', function () {



                var idState = this.value;



                $("#city").html('');



                $.ajax({



                    url: "{{url('dashboard/fetch-cities')}}",



                    type: "POST",



                    data: {



                        state_id: idState,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (res) {



                        $('#city').html('<option value="">Select City</option>');



                        $.each(res.cities, function (key, value) {



                            $("#city").append('<option value="' + value



                                .city_id + '">' + value.city_name + '</option>');



                        });



                    }



                });



            });



        });



    </script>

    










@endsection







