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

                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.pages.index') }}">Page</a></li>
                                    @if(isset($page->id))
                                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                    @else
                                        <li class="breadcrumb-item active" aria-current="page">Add</li>
                                    @endif

                                    

                                </ol>

                            </div>

                        

                        <!-- PAGE-HEADER END -->

@endsection



@section('content')

                        <!-- ROW-1 OPEN-->

                                <div class="card">

                                <form  method="post" action="{{route('dashboard.pages.store')}}" enctype="multipart/form-data">

                                    @csrf

                                    <div class="card-body">

                                        <form  method="post" action="{{route('dashboard.pages.store')}}" enctype="multipart/form-data">

                                      

                                            <div class="row">

                                                <input type="hidden" name="id" value="{{ isset($page) ? $page->id : '' }}">

                                                <input type="hidden" name="content" value="{{ isset($page) ? $page->content : '' }}">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title', isset($page) ? $page->title : '') }}" required>
                                                </div>
                                                <label class="form-label">Content</label>
                                                <div id="summernote"></div>
                                                </div>
                                            </div>

                                            

                                            <div class="col-12">
                                                <label class="form-label">Meta title</label> 
                                                <input type="text" class="form-control" name="page_title" placeholder="Title" value="{{($data['Pagemeta_title'])??''}}">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Meta Deatils</label> 
                                                <textarea type="text" class="form-control" name="page_details" row="20" placeholder="Title" value="">{{($data['Pagemeta_details'])??''}}</textarea>
                                            </div>
                                             @if(isset($page->id))
                                             <button type ="submit" class="btn btn-success-light mt-3 ">Update</button>
                                        @else
                                            <button type ="submit" class="btn btn-success-light mt-3 ">Save</button>
                                        @endif

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

</script>

@endsection

