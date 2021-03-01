<?php

//  S H O W    P R O D U C T    I N F O    -   M A I N
//    $navlink['category'] = 'isActive';
?>
@extends('layouts.mainApp')


@section('content')
    <br>

    @include('pages.includes.breadcrumb')

    {{-- contents--}}

    @include('pages.product.contents')


    @include('pages.includes.footer')



@endsection