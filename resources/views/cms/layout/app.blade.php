<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>


    <meta charset="utf-8">


    <meta http-equiv="x-ua-compatible" content="ie=edge">



    <title>SHOP CMS</title>
    <meta name="description" content="Shop powered by finesse">
    <meta name="keywords" content="">



    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">


    {{--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">--}}
    <link href="{{ asset('css/material.min.css') }}" rel="stylesheet" type="text/css" media="all">

    <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/admin_responsive.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/solid.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/brands.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/adminMain.css') }}" rel="stylesheet" type="text/css" media="all">


</head>

    <body>
    <div class="wrapper">
        @include('cms.includes.sidebar')

        <div class="overlay"></div>
        <!-- Dark Overlay element -->
        
        <div class="content">
            @include('cms.includes.navbar')

            <div class="main-content">
                <br>
                <div class="col-12" style="margin-top: 50px">

                    <!-- Contents START -->
                @yield('content')

                <!-- Contents END -->

                </div>
            </div>
        </div>

    </div>

        <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/material.min.js') }}"></script>
        <script src="{{ asset('js/admin.js') }}"></script>


            @if(!empty($scripts))
                @foreach($scripts as $script)
                    <script src="{{ asset('js/'. $script) }}"></script>
                @endforeach

            @endif


    </body>

</html>
