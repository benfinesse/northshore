<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#683A23">

    <title>SQUAREDGE</title>
    <meta name="description" content="Shop powered by finesse">
    <meta name="keywords" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/logo_ico.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">


    <link href="{{ asset('css/material.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet" type="text/css" media="all">
    {{--<link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet" type="text/css" media="all">--}}
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/solid.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/brands.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/jquery.modal.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" media="all">







</head>

    <body>
    @include('include.modals')

    @include('include.topnav')

    <div class="" style="margin-top: 55px"></div>

    @yield('content')


        <script src="{{ asset('js/jquery300.min.js') }}"></script>
        {{--<script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>--}}

        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/slick-animation.min.js') }}"></script>
        <script src="{{ asset('js/jquery.modal.min.js') }}"></script>
        <script src="{{ asset('js/material.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('js/anime.min.js') }}"></script>


        <script>
            $(document).ready(function() {

                $('.minislider').slick({
                    dots: false,
                    infinite: true,
                    speed: 500,
                    fade: true,
                    cssEase: 'linear',
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 6000,
                });
            });
        </script>




    </body>

</html>
