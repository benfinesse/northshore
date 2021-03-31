<?php
$navlink['partners'] = 'current';
?>
@extends('layouts.v2.app')


@section('content')

    <section class="banner-section">
        <div class="container">
            <div class="banner-inner">
                <div class="banner-content">
                    <h2 class="page-title">Partners</h2>
                    <p>Our Trusted partners.</p>
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
                @foreach($items as $partner)
                    <div class="col-sm-12 col-md-4 mb-4">
                        <div class="card soft-shadow">
                            <div class="card-body">
                                <a href="{{ $partner->website }}" target="_blank">
                                    <strong class="text-uppercase">{{ $partner->name }}</strong>
                                </a>
                                <p ><span class="text-red"><b>links:</b> </span>
                                    {!! $partner->websites() !!}
                                </p>
                                <hr>
                                <p class="abt-text-mini">
                                    {!! $partner->details() !!}
                                    <a href="{{ route('topartner', $partner->unid) }}" class="open-modal" rel="modal:open"><small class="text-red"><b>see more</b></small></a>
                                </p>
                                <img src="{{ $partner->brand() }}" alt="logo" class="partner-img" style="max-height: 30px">
                                <hr>
                                <a href="{{ route('partner.product', $partner->unid) }}" class="theme-btn style-two">View Products</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection