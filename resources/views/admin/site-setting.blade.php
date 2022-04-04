@extends('layouts.vertical-menu.master')



@section('css')



<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



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

    

          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">Value OF the day Banner(English)</label>
                <input type="hidden" name="value_banner" value="banner">
                <input type="file" class="form-control" id="exampleInputuname_1" name="value_banner" value="{{($setting['value_banner'])??''}}">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <img src="{{ url('images/').'/'.$setting['value_banner'] ?? "" }}"  alt="banner">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">Value OF the day Banner(Arabic)</label>
                <input type="hidden" name="arab_value_banner" value="banner">
                <input type="file" class="form-control" id="exampleInputuname_1" name="arab_value_banner" value="{{($setting['arab_value_banner'])??''}}">
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <img src="{{ url('images/').'/'.$setting['arab_value_banner'] ?? "" }}"  alt="banner">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">Value OF the day Banner alt tag</label>
                <input type="text" name="value_banner_alt" value="{{isset($setting['value_banner_alt']) ? $setting['value_banner_alt'] : ""}}" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">Value OF the day Banner url</label>
                <input type="text" name="value_banner_url" value="{{isset($setting['value_banner_url']) ? $setting['value_banner_url'] : ""}}" class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">Top 100 Banner(English)</label>
                <input type="hidden" name="top_banner" value="banner">
                <input type="file" class="form-control" id="exampleInputuname_1" name="top_banner" value="{{($setting['top_banner'])??''}}">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
                  <img src="{{ url('images/').'/'.$setting['top_banner'] ?? "" }}"  alt="banner">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">Top 100 Banner(Arabic)</label>
                <input type="hidden" name="arab_top_banner" value="banner">
                <input type="file" class="form-control" id="exampleInputuname_1" name="arab_top_banner" value="{{($setting['arab_top_banner'])??''}}">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
                  <img src="{{ url('images/').'/'.$setting['arab_top_banner'] ?? "" }}"  alt="banner">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">Top 100 Banner alt tag</label>
                <input type="text" name="top_banner_alt" value="{{isset($setting['top_banner_alt']) ? $setting['top_banner_alt'] : ""}}" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">Top 100 Banner url</label>
                <input type="text" name="top_banner_url" value="{{isset($setting['top_banner_url']) ? $setting['top_banner_url'] : ""}}" class="form-control">
            </div>
          </div>

          

          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label ">New Arrival Banner(English)</label>
              <input type="hidden" name="arrival_banner" value="banner">
              <input type="file" class="form-control" id="exampleInputuname_1" name="arrival_banner" value="{{($setting['arrival_banner'])??''}}">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <img src="{{ url('images/').'/'.$setting['arrival_banner'] ?? "" }}"  alt="banner">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label ">New Arrival Banner(Arabic)</label>
              <input type="hidden" name="arab_arrival_banner" value="banner">
              <input type="file" class="form-control" id="exampleInputuname_1" name="arab_arrival_banner" value="{{($setting['arab_arrival_banner'])??''}}">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <img src="{{ url('images/').'/'.$setting['arab_arrival_banner'] ?? "" }}"  alt="banner">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">New Arrival Banner alt tag</label>
                <input type="text" name="arrival_banner_alt" value="{{isset($setting['arrival_banner_alt']) ? $setting['arrival_banner_alt'] : ""}}" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">New Arrival Banner url</label>
                <input type="text" name="arrival_banner_url" value="{{isset($setting['arrival_banner_url']) ? $setting['arrival_banner_url'] : ""}}" class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label ">Sale with us(English)</label>
              <input type="hidden" name="sale_with_us" value="banner">
              <input type="file" class="form-control" id="exampleInputuname_1" name="sale_with_us" value="{{($setting['sale_with_us'])??''}}">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <img src="{{ url('images/').'/'.$setting['sale_with_us'] ?? "" }}"  alt="banner">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label ">Sale with us(Arabic)</label>
              <input type="hidden" name="arab_sale_with_us" value="banner">
              <input type="file" class="form-control" id="exampleInputuname_1" name="arab_sale_with_us" value="{{($setting['arab_sale_with_us'])??''}}">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <img src="{{ url('images/').'/'.$setting['arab_sale_with_us'] ?? "" }}"  alt="banner">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">Sale with us alt tag</label>
                <input type="text" name="sale_with_us_alt" value="{{isset($setting['sale_with_us_alt']) ? $setting['sale_with_us_alt'] : ""}}" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">Sale with us url</label>
                <input type="text" name="sale_with_us_url" value="{{isset($setting['sale_with_us_url']) ? $setting['sale_with_us_url'] : ""}}" class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label ">All category page banner(English)</label>
              <input type="hidden" name="all_cat_page_banner" value="banner">
              <input type="file" class="form-control" id="exampleInputuname_1" name="all_cat_page_banner" value="{{($setting['all_cat_page_banner'])??''}}">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <img src="{{ url('images/').'/'.$setting['all_cat_page_banner'] ?? "" }}"  alt="banner">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label ">All category page banner(Arabic)</label>
              <input type="hidden" name="arab_all_cat_page_banner" value="banner">
              <input type="file" class="form-control" id="exampleInputuname_1" name="arab_all_cat_page_banner" value="{{($setting['arab_all_cat_page_banner'])??''}}">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <img src="{{ url('images/').'/'.$setting['arab_all_cat_page_banner'] ?? "" }}"  alt="banner">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">All category page banner alt tag</label>
                <input type="text" name="all_cat_page_banner_alt" value="{{isset($setting['all_cat_page_banner_alt']) ? $setting['all_cat_page_banner_alt'] : ""}}" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label class="control-label ">All category page banner url</label>
                <input type="text" name="all_cat_page_banner_url" value="{{isset($setting['all_cat_page_banner_url']) ? $setting['all_cat_page_banner_url'] : ""}}" class="form-control">
            </div>
          </div>


          
          

        <div class="col-md-6">

          <div class="form-group">

            <label class="control-label ">Shipping Methods</label>

            <input type="text" name="ship_method" data-role="tagsinput" value="{{isset($arr) ? $arr : ''}}" class="form-control" id="tags">

            <input type="hidden" name="ship_val" id="tag_val" value="">

           

          </div>

        </div>

           <div class="col-md-12">

            <h4 class="mt-5">Social links</h4><hr>

        <div class="row">

        <div class="col-md-4">     

          <div class="form-group">

          <div class="left-inner-addon input-container">

            <i class="fa fa-instagram"></i>

             <input  type="text"

                   class="form-control" 

                   placeholder="instagram" name="instagram" value="{{($setting['instagram'])??''}}" />

           </div>

          </div>

        </div>



        <div class="col-md-4">

          <div class="form-group">

              <div class="left-inner-addon input-container">

            <i class="fa fa-twitter"></i>

             <input  type="text"

                   class="form-control" 

                   placeholder="twitter" name="twitter" value="{{($setting['twitter'])??''}}" />

           </div>

        

          </div>

        </div>
        

 

        <div class="col-md-4">

          <div class="form-group">

            <div class="left-inner-addon input-container">

            <i class="fa fa-facebook"></i>

             <input  type="text"

                   class="form-control" 

                   placeholder="Facebook" name="facebook" value="{{($setting['facebook'])??''}}" />

           </div>

            

          </div>

        </div>

        <div class="col-md-4">

          <div class="form-group">

              <div class="left-inner-addon input-container">

            <i class="fa fa-pinterest"></i>

             <input  type="text"

                   class="form-control" 

                   placeholder="twitter" name="pinterest" value="{{($setting['pinterest'])??''}}" />

           </div>

        

          </div>

        </div>



      </div>





     

       

      </div>
      <div class="col-md-12">

        <h4 class="mt-5">Product Approval Options</h4><hr>

        <div class="row">

          <div class="col-md-4">     

            <div class="form-group">

              <label class="switch">

                  <input type="checkbox" id="auto-approve" name="approval" {{ isset($setting['approval']) && ($setting['approval'] == 1) ?  'checked' : '' }}>

                  <span class="slider round"></span>

              </label>

              <label for="scales">Auto approve all product</label>

            </div>

          </div>

        

        </div>

      </div>
      <div class="col-md-12">

        <h4 class="mt-5">Shipping Options</h4><hr>

        <div class="row">

          <div class="col-md-4">     

            <div class="form-group">

              <label class="switch">

                  <input type="checkbox" id="free-shipping" name="free" {{ isset($setting) && ($setting['free_shipping_is_applied'] == "on") ?  'checked' : '' }} onchange="freeShipping()">

                  <span class="slider round"></span>

              </label>

              <label for="scales">Free Shipping</label>

            </div>

          </div>
          <div class="col-md-4 " >
            <input type="number" name="free_shipping" value="{{ isset($setting['free_shipping_over']) ? $setting['free_shipping_over'] : '' }}" class="form-control free-shipping">
          </div>
          <div class="col-md-4"></div>

          {{-- <div class="col-md-4">

            <div class="form-group">

              <label class="switch">

                <input type="checkbox" id="fixed" name="fixed" {{ isset($ship_meth_2) && ($ship_meth_2->is_available == 1) ?  'checked' : '' }}>

                <span class="slider round"></span>

              </label>

            <label for="scales">Fixed Shipping</label>

            </div>

          </div> --}}

          {{-- <div class="col-md-4">

            <div class="form-group">

              <label class="switch">

                <input type="checkbox" id="wasil" name="wasil" {{ isset($ship_meth_3) && ($ship_meth_3->is_available == 1) ?  'checked' : '' }}>

                <span class="slider round"></span>

              </label>

              <label for="scales">Wasil Shipping</label>

            </div>

          </div> --}}

          <div class="col-md-4">

            <div class="form-group">

              <label class="switch">
                <input type="checkbox" id="normal-shipping" name="normal" {{ isset($setting) && ($setting['normal_shipping_is_applied'] == "on") ?  'checked' : '' }} onchange="normalShipping()">

                <span class="slider round"></span>

              </label>

              <label for="scales">Normal Shipping</label>

            </div>

          </div>
          <div class="col-md-4">
            <input type="number" name="admin_normal_price" value="{{ isset($setting['normal_price']) ? $setting['normal_price'] :'' }}" class="form-control normal-shipping" >
          </div>
          <div class="col-md-4"></div>

          <div class="col-md-4">

            <div class="form-group">

              <label class="switch">

                <input type="checkbox" id="city-shipping" name="city_shipping" {{ isset($setting) && ($setting['city_shipping'] == "on") ?  'checked' : '' }} onchange="cityShipping()">

                <span class="slider round"></span>

              </label>

              <label for="scales">Shipping By City</label>

            </div>

          </div>

        </div>

      </div>
     
      {{-- Shipping By City --}}
      <div class="row city-shipping" style="display: none">
        <div class="col-md-12">
          <h4 class="mt-5">Shipping By City</h4><hr>
        </div>
        <?php $i = 0; ?>
        @if(count($city_list) > 0)
          @foreach ($city_list as $item)
          @php
           $singlePrice = \App\Models\CityPrice::where('city_id',$item->city_id)->first(); 
          @endphp
          <div class="col-md-4">
            <div class="form-group">
              <input type="hidden" name="city[{{$i}}][city_id]" value="{{$item->city_id}}">
              <input type="text" class="form-control" id="exampleInputuname_1" name="country" value="{{($item['city_name'])??''}}" disabled>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input type="text" name="city[{{$i}}][admin_normal_price]" value="{{!empty($singlePrice->normal_price) ? $singlePrice->normal_price : ''}}" class="form-control" placeholder="normal price">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input type="text" name="city[{{$i}}][admin_city_wise_price]" value="{{!empty($singlePrice->priority_price) ? $singlePrice->priority_price : ''}}" class="form-control" placeholder="priority price">
            </div>
          </div>
          <?php $i++ ?>
          @endforeach
        @endif
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

<script>
  if(document.getElementById('free-shipping').checked) {
    $(".free-shipping").show();
  }
  else{
    $(".free-shipping").hide();
  }
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
    $(".city-shipping").hide();
  }
   function freeShipping()
	{
		if($('#free-shipping').is(":checked"))   
			$(".free-shipping").show();
		else
			$(".free-shipping").hide();
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

  $(document).ready(function() {
		$("#tags").change(function(){
			var tagval = $('input[name="ship_method"]').val();

			$('#ship_method').val(tagval);

		});
	});

</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@endsection