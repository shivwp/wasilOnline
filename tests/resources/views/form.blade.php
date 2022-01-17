@extends('layouts.vertical-menu.master')
@section('css')

        <link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet">

@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Form Editor</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Editor</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">WYSIWYG Editor style1</div>
									</div>
									<div class="card-body">
										<textarea class="content" name="example"></textarea>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Summernote</h3>
									</div>
									<div class="card-body">
										<div id="summernote"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-2 CLOSED -->

					</div>
				</div>
				<!-- CONTAINER CLOSED -->
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
@endsection
