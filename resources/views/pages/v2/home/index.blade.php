<?php
$navlink['home'] = 'current';
?>
@extends('layouts.v2.app')


@section('content')

    @include('pages.v2.home.banner')

    {{-- contents--}}
    @include('pages.v2.home.about')

    @include('pages.v2.home.rand')

    @include('pages.v2.home.prod_slide')


@endsection