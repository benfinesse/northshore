<?php
$navlink['products'] = 'current';
?>
@extends('layouts.v2.app')

@section('custom_css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        footer{
            color: #777 !important;
        }
    </style>
@endsection

@section('content')

    <section class="banner-section">
        <div class="container">
            <div class="banner-inner">
                <div class="banner-content">
                    <h2 class="page-title">Product Details</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="banner-angle">
            <img src="{{ url('assets/images/hero/hero-angle.png') }}" alt="Angle">
        </div>
    </section>

    <div class="min-height" style="margin-top: 170px">
        <div class="container">
            <div class="row">
                <div class="wrapper-p col-md-5 col-12">
                    <div class="card  card-clear outlined" style="max-height: 418px;align-content: center;display: grid;text-align: -webkit-center;min-height: 350px">
                        <img class="" src="{{ $product->getpic1() }}" alt="{{ $product->name }}">
                    </div>
                    <div class="row">
                        @if(is_file($product->pic1))
                            <div class="col-sm-6 col-md-4 mt-4">
                                <div class="square-container outlined">
                                    <div class="square-aligner"></div>
                                    <div class="square-content hide-overflow">
                                        <div class="cours2 " style="overflow:hidden;">
                                            <img class="hover setimg" src="{{ $product->getpic1() }}" style="transition:1s;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if(is_file($product->pic2))
                            <div class="col-sm-6 col-md-4 mt-4">
                                <div class="square-container outlined">
                                    <div class="square-aligner"></div>
                                    <div class="square-content hide-overflow">
                                        <div class="cours2 " style="overflow:hidden;">
                                            <img class="hover setimg" src="{{ $product->getpic2() }}" style="transition:1s;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if(is_file($product->pic3))
                            <div class="col-sm-6 col-md-4 mt-4">
                                <div class="square-container outlined">
                                    <div class="square-aligner"></div>
                                    <div class="square-content hide-overflow">
                                        <div class="cours2 " style="overflow:hidden;">
                                            <img class="hover setimg" src="{{ $product->getpic3() }}" style="transition:1s;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif



                    </div>
                </div>

                <div class="col-md-7">
                    <h3><b>{{ $product->name }}</b></h3>
                    {{--<p class=""><b>N{{ $product->price }}</b> <small class="green-bg">{{ !empty($product->oldprice)?''.$product->getdis():'' }}</small> </p>--}}
                    {{--<small><strike>N{{ $product->oldprice }}</strike></small>--}}
                    <hr>
                    <div class="gray-color">{!! $product->detail !!}</div>

                    {{--<a href="#" class="btn btn-green">Add to Bag</a>--}}
                    {{--<a href="#" class="btn btn-dark"> Add Review</a>--}}
                    <br>
                </div>

            </div>
        </div>
    </div>

@endsection