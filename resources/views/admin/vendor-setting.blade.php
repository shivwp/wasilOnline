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





</style>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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

                            <option value="{{$country->id}}"{{($data['country']== $country->id)? 'selected' :''}}>

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

                            <option value="{{$city->city_id}}" {{($data['city']== $city->city_id)? 'selected' :''}}>

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

             <input  type="text"

                   class="form-control" 

                   placeholder="instagram" name="instagram" value="{{($data['instagram'])??''}}" />

           </div>

          </div>

        </div>

        <div class="col-md-6">

          <div class="form-group">

          <div class="left-inner-addon input-container">

            <i class="fa fa-youtube"></i>

             <input  type="text"

                   class="form-control" 

                   placeholder="youtube" name="youtube" value="{{($data['youtube'])??''}}" />

           </div>

            

          </div>

        </div>

        <div class="col-md-6">

          <div class="form-group">

              <div class="left-inner-addon input-container">

            <i class="fa fa-twitter"></i>

             <input  type="text"

                   class="form-control" 

                   placeholder="twitter" name="twitter" value="{{($data['twitter'])??''}}" />

           </div>

        

          </div>

        </div>

        <div class="col-md-6">

          <div class="form-group">

                  <div class="left-inner-addon input-container">

            <i class="fa fa-linkedin"></i>

             <input  type="text"

                   class="form-control" 

                   placeholder="linkedin" name="linkedin" value="{{($data['linkedin'])??''}}" />

           </div>



          </div>

        </div>

        <div class="col-md-6">

          <div class="form-group">

            <div class="left-inner-addon input-container">

            <i class="fa fa-facebook"></i>

             <input  type="text"

                   class="form-control" 

                   placeholder="Facebook" name="facebook" value="{{($data['facebook'])??''}}" />

           </div>

            

          </div>

        </div>

        <div class="col-md-6">

          <div class="form-group">

             <div class="left-inner-addon input-container">

            <i class="fa fa-pinterest"></i>

             <input  type="text"

                   class="form-control" 

                   placeholder="pinterest" name="pinterest" value="{{($data['pinterest'])??''}}" />

           </div>

          

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
          @if($ship_1->is_available == 1)
            <div class="row">
              <div class="col-md-4">     
                <div class="form-group">
                  <label class="switch">
                      <input type="checkbox" id="free" name="free" {{ isset($checkvendorshiipingmethod1) && ($checkvendorshiipingmethod1->is_available == 1) ?  'checked' : '' }} onchange="freeship()">
                      <span class="slider round"></span>
                  </label>
                  <label for="scales">Free Shipping</label>
                </div>
              </div>
              <div class="col-md-4 order-limit">   
                <input type="number" class="form-control" name="order_limit" value="{{ isset($checkvendorshiipingmethod1) ? $checkvendorshiipingmethod1->min_order_free : '' }}" placeholder="order limit" > 
              </div>
              <div class="col-md-4">   
              </div>
            </div>
          @endif
          @if($ship_2->is_available == 1)
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="switch">
                    <input type="checkbox" id="fixed" name="fixed" {{ isset($checkvendorshiipingmethod2) && ($checkvendorshiipingmethod2->is_available == 1) ?  'checked' : '' }} onchange="fixedship()">
                    <span class="slider round"></span>
                  </label>
                <label for="scales">Fixed Shipping</label>
                </div>
              </div>
              <div class="col-md-4 shipping-price">   
                <input type="number" class="form-control" name="shipping_price" value="{{ isset($checkvendorshiipingmethod2) ? $checkvendorshiipingmethod2->ship_price : '' }}" placeholder="shipping price"> 
              </div>
              <div class="col-md-4">   
              </div>
            </div>
          @endif
          @if($ship_3->is_available == 1)
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="switch">
                    <input type="checkbox" id="wasil" name="wasil" {{ isset($checkvendorshiipingmethod3) && ($checkvendorshiipingmethod->is_available == 1) ?  'checked' : '' }}>
                    <span class="slider round"></span>
                  </label>
                  <label for="scales">Wasil Shipping</label>
                </div>
              </div>
            </div>
          @endif
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

    <script>

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
    <script type="text/javascript">
      function freeship()
      {
          if($('#free').is(":checked"))   
              $(".order-limit").show();
          else
              $(".order-limit").hide();
      }
      function fixedship()
      {
          if($('#fixed').is(":checked"))   
              $(".shipping-price").show();
          else
              $(".shipping-price").hide();
      }
    </script>





@endsection



