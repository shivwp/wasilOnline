@extends('layouts.vertical-menu.master')

@section('css')

<link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet">

<style> .note-placeholder {

    display: none !important;

}</style>

@endsection

@section('page-header')

                        <!-- PAGE-HEADER -->

                            <div>

                                <h1 class="page-title">{{$title}}</h1>

                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.coupon.index') }}">Coupon</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>

                                </ol>

                            </div>

                        

                        <!-- PAGE-HEADER END -->

@endsection



@section('content')

                        <!-- ROW-1 OPEN-->

                                <div class="card">

                                <form  method="post" action="{{route('dashboard.tax.store')}}" enctype="multipart/form-data">

                                    @csrf

                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-md-12">
                                                <span>Your Current Balance: <strong>{{$authUser->vendor_wallet}}</strong></span>
                                                <br>
                                                <span>Minimum Withdrow Amount: <strong>{{$max_withdrwal_limit->value}}</strong></span>
                                                <br>
                                                <span>Minimum Withdrow Amount: <strong>{{$min_withdrwal_limit->value}}</strong></span>
                                                <br>
                                                <span>Withdrow Threshold: <strong>{{$withdrwal_threshould->value}} Days</strong></span>
                                            </div>
                                        </div>


                                        <div class="row">

                                         <h5>You don't have sufficient balance for a withdraw request!</h5>   


                                        </div>

                                       

                                      

                                    </div>



                                </form>

                                    

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

 $('document').ready(function() {

    $('.note-codable').attr('name', 'content');

    var pre_editor_val = $('input[name="content"]').val();

    $('textarea[name="content"]').val(pre_editor_val);

    $('.note-editable.card-block').html(pre_editor_val);

    $('button[type="submit"]').click(function(editor_val){

        if(!jQuery('.codeview').lenght){

            var editor_val = $('.note-editable.card-block').html();

            $('textarea[name="content"]').val(editor_val);

        }

    });

  });



function codegenrate() {

    var rnd = Math.floor(Math.random() * 10000);

    document.getElementById('genrate_code').value = 'COUP'+rnd;

}

</script>

@endsection

