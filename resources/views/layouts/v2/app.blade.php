<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#683A23">

    <title>SQUAREDGE</title>
    <meta name="description" content="Squaredge!">
    <meta name="keywords" content="skin care, sunna, skin modification, skin treatment, hot baths">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/logo_ico.png') }}">

    @include('layouts.v2.styles')


</head>

    <body>
        <div class="page-wrapper">
            <div class="preloader"></div>

            {{--INCASE WE WISH TO ADD MODALS TO THE PAGE--}}
            @include('include.v2.modals')

            @include('include.v2.topnav')

            <div class="" style="margin-top: 55px"></div>

            @yield('content')
        </div>

        @include('layouts.v2.js')


    </body>

</html>
