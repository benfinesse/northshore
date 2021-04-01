<?php
$navlink['products'] = 'current';
?>
@extends('layouts.v2.app')


@section('content')

    <section class="banner-section">
        <div class="container">
            <div class="banner-inner">
                <div class="banner-content">
                    <h2 class="page-title">Product Listings</h2>
                    <p>Explore our products.</p>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="banner-angle">
            <img src="{{ url('assets/images/hero/hero-angle.png') }}" alt="Angle">
        </div>
    </section>

    <div class="min-height" style="margin-top: 170px">
        <div class="container mb-5">
            <div class="row">
                @forelse($items as $product)
                    <div class="col-sm-12 col-md-4 mb-5">
                        <div class="product-item-wrapper">
                            <a href="{{ route('show.product', $product->unid) }}">
                                <img src="{{ $product->image }}" alt="" >
                            </a>
                        </div>
                        <div class="product-footer text-center" onclick="window.location='{{ route('show.product', $product->unid) }}'">
                            <b>{{ $product->name }}</b>
                        </div>

                    </div>
                @empty
                    <div class="col-12">
                        <h4 class="text-center">Oops, Products not Found</h4>
                        <p class="text-center">Kindly Retry...</p>
                        <div class="text-center">
                            <a href="{{ route('products') }}" class="theme-btn">Products</a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
        <div class="container">
            <div class="pt-5">
                {{ $items->links() }}
            </div>
        </div>
    </div>

@endsection