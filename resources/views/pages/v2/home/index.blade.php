<?php
$navlink['home'] = 'current';
?>
@extends('layouts.v2.app')

@section('custom_css')
    <style>
        .team-item {
            margin-bottom: 30px;
            align-content: center;
            display: grid;
            text-align: -webkit-center;
        }
        .owl-carousel .owl-item img {
            height: 250px !important;
            width: auto !important;
        }
    </style>
@endsection


@section('content')

    @include('pages.v2.home.banner')

    {{-- contents--}}
    @include('pages.v2.home.about')

    @include('pages.v2.home.rand')

    @include('pages.v2.home.prod_slide')


@endsection