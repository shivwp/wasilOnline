
@extends('layouts.vertical-menu.master')

@section('css')
<style>
  footer.footer {
    display: none;
}
h1.text-center.mt-5 {
    padding-top: 134px !important;
}
</style>

<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">

@endsection

@section('page-header')

                        <!-- PAGE-HEADER -->

                      

                        

                        <!-- PAGE-HEADER END -->

@endsection

@section('content')

                       <h1 class="text-center">Cleared cache</h1>
@endsection

@section('js')



@endsection

 