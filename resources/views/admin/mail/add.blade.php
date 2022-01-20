@extends('layouts.vertical-menu.master')

@section('css')

<style>

 	.note-placeholder {

    	display: none !important;

	}

</style>

<link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

@endsection

@section('page-header')

<!-- PAGE-HEADER -->

<div>

	<h1 class="page-title">{{$title}}</h1>

	<ol class="breadcrumb">

		<li class="breadcrumb-item"><a href="{{ route('dashboard.mail.index') }}">Mail</a></li>

		<li class="breadcrumb-item active" aria-current="page">Edit</li>

	</ol>

</div>



<!-- PAGE-HEADER END -->

@endsection



@section('content')



<!-- 
		<table style="max-width: 600px; border:1px solid red; margin:0 auto; height:  80px; background: #fff; width: 100%;">
			<tbody>
				<tr>
					<th style=" vertical-align: middle;text-align: center;  height:  80px;">
				 		<img src="{{URL::asset('assets/images/brand/logo-3.png')}}" style="max-width:140px;">
					</th>
				</tr>
			
				<tr>
					<th style="background:#0baf4d;padding: 30px;">
						<h5 style="font-size: 16px; font-family: 'Raleway', sans-serif; font-weight: 600; text-align: center; color: #fff;">Hello From Jimmy Smith</h5>
						<h2 style="font-size: 34px; font-family: 'Raleway', sans-serif; font-weight: 800; text-align: center; color: #fff;margin: 0;">Thanks For Your Order!</h2>
					</th>
					
				</tr>
				<tr>
					<th style="padding:40px 40px 0px 40px;">
						<h5 style="font-size: 16px; font-family: 'Raleway', sans-serif; font-weight: 600;">Hi There!</h5>
						<h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra </h6>
						<hr>
					</th>
					
				</tr>
				<tr>
					<th style="padding:0px 40px;">
						<h3 style="font-size: 30px; font-family: 'Raleway', sans-serif; font-weight: 800; color:#2b2e3e;">Order Details</h3>


					</th>
					
				</tr>

				<tr>
					<th style=" padding:0px 40px;display:flex; justify-content: space-between;">
						<h4 style="font-size: 16px; font-family: 'Raleway', sans-serif; font-weight: 500; color:#8b8b8b; padding:10px 0px"> <i>Order number: 1</i></h4>
						<h4 style="font-size: 16px; font-family: 'Raleway', sans-serif; font-weight: 500; color:#8b8b8b; padding:10px 0px"> <i>order date: Jan 18,2022</i></h4>
					</th>
				</tr>
				<tr>
				<td>
				<table style="max-width:600px; width: 100%; ">
				    <thead>
				        <tr>
				            <th style="padding: 0px 40px;" ><h4 style="font-size: 16px; font-family: 'Raleway', sans-serif; font-weight: 800;  padding:10px 0px; color: #4c4c53;"> Product</h4></th>
				            <th style="padding: 0px 40px;"  ><h4 style="font-size: 16px; font-family: 'Raleway', sans-serif; font-weight: 800;  padding:10px 0px; color: #4c4c53;"> Quantity</h4></th>
				            <th style="padding: 0px 40px;"  ><h4 style="font-size: 16px; font-family: 'Raleway', sans-serif; font-weight: 800;  padding:10px 0px; color: #4c4c53;"> Price</h4></th>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				            <td style="padding: 0px 40px;"><h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >A Study in Scariet </h6></td>
				            <td style="padding: 0px 40px;"><h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >1 </h6></td>
				            <td style="padding: 0px 40px;">
				            	<h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >$10</h6>
				            </td>
				        </tr>
				          <tr>
				            <td style="padding: 0px 40px;"><h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >The Hound Of the Baskervilles </h6></td>
				            <td style="padding: 0px 40px;"><h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >1 </h6></td>
				            <td style="padding: 0px 40px;">
				            	<h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >$10</h6>
				            </td>
				        </tr>
				         <tr>
				            <td style="padding: 0px 40px;"><h6 style="font-size: 16px; font-family: 'Raleway', sans-serif; font-weight: 800; color:#4c4c53; line-height: 20px; " >Subtotal:</h6></td>
				            <td style="padding: 0px 40px;"><h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 800; color:#4c4c53; line-height: 20px; " ></h6></td>
				            <td style="padding: 0px 40px;">
				            	<h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >$20</h6>
				            	
				            </td>
				        </tr>
				         <tr>
				            <td style="padding: 0px 40px;"><h6 style="font-size: 16px; font-family: 'Raleway', sans-serif; font-weight: 800; color:#4c4c53; line-height: 20px; " >total:</h6></td>
				            <td style="padding: 0px 40px;"><h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 800; color:#4c4c53; line-height: 20px; " ></h6></td>
				            <td style="padding: 0px 40px;">
				            	<h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >$20</h6>
				            </td>
				        </tr>
				    </tbody>
				</table>

				</td>
			</tr>
	
		
				<tr>
					<th style=" padding:0px 40px 40px 40px;">
						<h2 style="font-size: 30px; font-family: 'Raleway', sans-serif; font-weight: 800; color:#2b2e3e;">Billing Address</h2>
						<h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >Sherlock Holmes Detectives Ltd.</h6>
					
						<h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >221B Baker Street London </h6>
				
						<h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >London</h6>
						<h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >NW1 6XE</h6>
					
						<h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >987-654-3210 </h6>
				
						<h6 style="font-size: 15px; font-family: 'Raleway', sans-serif; font-weight: 400; color:#4c4c53; line-height: 20px; " >info@gmail.com</h6>
					</th>
				</tr>
			</tbody>
		</table> -->



<!-- ROW-1 OPEN-->

<div class="card">



	<div class="card-body">

		<form method="POST" action="{{ route('dashboard.mail.store') }}" enctype="multipart/form-data">

			@csrf

			<div class="row">

				<input type="hidden" name="id" value="{{isset($mail) ? $mail->id : ''}}">

				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">From Name</label>

						<input type="text" class="form-control" name="title" placeholder="From Name"  value="{{isset($mail) ? $mail->name : ''}}">

					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">Subject</label>

						<input type="text" class="form-control" name="subject" placeholder="Subject" value="{{isset($mail) ? $mail->subject : ''}}">

					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">Message Category</label>

						<select class="form-control select2"  name="mail_cat">

						<option value="">Select Category</option>

						<option value="placed" {{isset($mail) && ($mail->msg_category == 'placed') ? 'selected' : '' }}>Order Placed</option>

						<option value="shipped" {{isset($mail) && ($mail->msg_category == 'shipped') ? 'selected' : '' }}>Order Shipped</option>

						<option value="packed" {{isset($mail) && ($mail->msg_category == 'packed') ? 'selected' : '' }}>Order Packed</option>

						<option value="cancelled" {{isset($mail) && ($mail->msg_category == 'cancelled') ? 'selected' : '' }}>Order Cancelled</option>

						<option value="delivered" {{isset($mail) && ($mail->msg_category == 'delivered') ? 'selected' : '' }}>Order Delivered</option>

						<option value="out for delivery" {{isset($mail) && ($mail->msg_category == 'out for delivery') ? 'selected' : '' }}>Out for Delivery</option>

						<option value="out for reach" {{isset($mail) && ($mail->msg_category == 'out for reach') ? 'selected' : '' }}>Out for Reach</option>

						<option value="return" {{isset($mail) && ($mail->msg_category == 'return') ? 'selected' : '' }}>Order Return</option>

						<option value="refunded" {{isset($mail) && ($mail->msg_category == 'refunded') ? 'selected' : '' }}>Order Refunded</option>

						<option value="contact us" {{isset($mail) && ($mail->msg_category == 'contact us') ? 'selected' : '' }}>Contact Us/option>

						<option value="forgot password" {{isset($mail) && ($mail->msg_category == 'forgot password') ? 'selected' : '' }}>Forgot password</option>

						<option value="distributor" {{isset($mail) && ($mail->msg_category == 'distributor') ? 'selected' : '' }}>Distributor</option>

						<option value="password reset" {{isset($mail) && ($mail->msg_category == 'password reset') ? 'selected' : '' }}>Password reset</option>

						<option value="signup" {{isset($mail) && ($mail->msg_category == 'signup') ? 'selected' : '' }}>Signup</option>

						<option value="giftcard" {{isset($mail) && ($mail->msg_category == 'giftcard') ? 'selected' : '' }}>Gift Card Code</option>

						</select>



					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">From Email</label>

						<input type="email" class="form-control" name="from_mail" placeholder="From Email" value="{{isset($mail) ? $mail->from_email : ''}}">

					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label class="form-label">Reply From Email</label>

						<input type="email" class="form-control" name="reply_from_mail" placeholder="Replay From Email" value="{{isset($mail) ? $mail->reply_email : ''}}">

					</div>

				</div>



				<div class="col-md-12">

					<h3 class="card-title">Message Content</h3>

				</div>

				<div class="card-body">

					<input type="hidden" name="message" value="{{isset($mail) ? $mail->message : ''}}">

					<div id="summernote"></div>

				</div>

			</div>

			@if(isset($mail->id))
				<button class="btn btn-success-light mt-3 " type="submit">Update</button>
			@else
				<button class="btn btn-success-light mt-3 " type="submit">Save</button>
			@endif

		</form>

		

	</div>

	


</div>	



@endsection

@section('js')

<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/wysiwyag/wysiwyag.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/summernote/summernote-bs4.js') }}"></script>

<script src="{{ URL::asset('assets/js/summernote.js') }}"></script>

<script src="{{ URL::asset('assets/js/formeditor.js') }}"></script>

<script>     

 // $('document').ready(function() {

 //     $('.note-codable').attr('name', 'body')

     

 //     .html('{{old('body')}}');

 //  });

</script>

<script>     

 $('document').ready(function() {

    $('.note-codable').attr('name', 'message');

    var pre_editor_val = $('input[name="message"]').val();

    $('textarea[name="message"]').val(pre_editor_val);

    $('.note-editable.card-block').html(pre_editor_val);

    $('button[type="submit"]').click(function(editor_val){

        if(!jQuery('.codeview').lenght){

            var editor_val = $('.note-editable.card-block').html();

            $('textarea[name="message"]').val(editor_val);

        }

    });

  });

</script>



@endsection

