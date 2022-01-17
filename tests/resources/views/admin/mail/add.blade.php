@extends('layouts.vertical-menu.master')
@section('css')
<style>
 	.note-placeholder {
    	display: none !important;
	}
</style>
<link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet">
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
			<button class="btn btn-success-light mt-3 " type="submit">Save</button>
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
