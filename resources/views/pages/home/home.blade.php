<?php
$navlink['home'] = 'isActive';
?>
@extends('layouts.mainApp')


@section('content')

    @include('pages.includes.slider')

    {{-- contents--}}
    @include('pages.includes.welcome')

    @include('pages.home.contents')

    @include('pages.home.featured')


    @include('pages.includes.footer')



@endsection