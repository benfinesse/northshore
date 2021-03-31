<?php
$navlink['category'] = 'current';
?>
@extends('layouts.v2.app')


@section('content')

    <section class="banner-section">
        <div class="container">
            <div class="banner-inner">
                <div class="banner-content">
                    <h2 class="page-title">Categories</h2>
                    <p>Product Categories</p>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                @foreach($items as $category)
                    <div class="col-sm-12 col-md-4 mb-4">
                        <div class="card soft-shadow">
                            <div class="card-body">
                                <a href="{{ route('products', ['cid'=>$category->unid]) }}">
                                    <strong class="text-uppercase">{{ $category->name }}</strong>
                                </a>
                                <hr>
                                {{ $category->details }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection