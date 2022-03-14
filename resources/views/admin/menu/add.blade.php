@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet">
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="page-title">{{$title}}</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.menus.index') }}">Menu</a></li>
                                      @if(isset($menu->id))
                                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                    @else
                                        <li class="breadcrumb-item active" aria-current="page">Add</li>
                                    @endif
                                </ol>
                            </div>
                        
                        <!-- PAGE-HEADER END -->
@endsection

@section('content')
             <div class="card">
                                <form  method="post" action="{{route('dashboard.menus.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <form  method="post" action="{{route('dashboard.menus.store')}}" enctype="multipart/form-data">
                                      
                                            <div class="row">
                                                <input type="hidden" name="id" value="{{ isset($menu) ? $menu->id : '' }}">
                                               
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title', isset($menu) ? $menu->title : '') }}" required>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="form-label">url</label>
                                                        <input type="text" class="form-control" name="url" placeholder="Title" value="{{ old('url', isset($menu) ? $menu->url : '') }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Position</label>
                                                        <input type="text" class="form-control" name="position" placeholder="Title" value="{{ old('position', isset($menu) ? $menu->position : '') }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Icon</label>
                                                        <input type="text" class="form-control" name="icon" placeholder="icon" value="{{ old('icon', isset($menu) ? $menu->icon : '') }}" required>
                                                    </div>
                                                    
                                                  
                                                </div>
                                                
                                            </div>
                                       
                                        @if(isset($menu->id))
                                            <button class="btn btn-success-light mt-3 " type="submit">Update</button>
                                        @else
                                            <button class="btn btn-success-light mt-3 " type="submit">Save</button>
                                        @endif
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

@endsection
