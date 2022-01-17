<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">


        @include('layouts.vertical-menu.head')
     
    </head>

    <body class="app sidebar-mini">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="{{URL::asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
         <div class="page">
            <div class="page-main">

                @include('layouts.vertical-menu.app-sidebar')

                @include('layouts.vertical-menu.mobile-header')

                <div class="app-content">
                    <div class="side-app">

                        <div class="page-header">
                        @yield('page-header')
                        @include('layouts.vertical-menu.notification')
                        </div>

                        @yield('content')

            @include('layouts.vertical-menu.sidebar')

            @include('layouts.vertical-menu.footer')

        </div>

            @include('layouts.vertical-menu.footer-scripts')

    </body>
</html>
