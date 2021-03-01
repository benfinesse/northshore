<?php
    $navlink['category'] = 'isActive';
?>
@extends('layouts.mainApp')


@section('content')

    @include('pages.includes.categoryHead')

    {{-- contents--}}

    @include('pages.category.contents')


    @include('pages.includes.footer')



@endsection