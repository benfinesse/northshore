<?php
$navlink['about'] = 'current';
?>
@extends('layouts.v2.app')


@section('content')

    <section class="banner-section">
        <div class="container">
            <div class="banner-inner">
                <div class="banner-content">
                    <h2 class="page-title">Who we are!</h2>
                    <p>Learn about us, what we do and who we work with.</p>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
            <h2>About Us</h2>
            <p>
                Squaredge Nigeria Limited is an aesthetics, beauty and skin care products company with specific focus on cosmeceuticals, medical aesthetics products and devices across the aesthetics value chain. We partner with the top-most manufacturers in the world to these products easily accessible to aesthetics physician, dermatologists, plastic surgeons. We also service Medical Spas, Beauty clinics and spas as well as pharmacy chains. As a result of this, end-users are able to access services locally which they would have otherwise traveled abroad for. We are headquartered in Abuja but our sphere of operations covers the West African region.
            </p>
            <p>Our subsidiary, The Skin Center is a Medical Aesthetics clinic where we offer services and products directly to individuals. We are poised to become industry leaders within our region, and we have built the required capacities and relationships to ensure that you have access to a wide range of products and solutions at the right price when and where you need it.</p>
            <p>make range of products and services, created by the legendary skin care provider, Dr. Zein Obagi. We are also manufacturers’ representatives of various aesthetic products from Europe, Middle East and Asia.</p>
            <p>Our area of coverage is primarily West Africa while at manufacturers' requests we cover other countries in Africa. Our primary clients are Physicians, Dermatologists, Plastic Surgeons, Med Spas, Clinics, Beauty Salons and Pharmacy chains.</p>
            <p>Squaredge Nigeria Limited is a beauty and skin care product and service provider, engaged in the wholesale and distribution of skin care products especially in the area of aesthetics and cosmetics. We are exclusive distributors the ZO Skin Health Inc., range of products and services, created by the legendary skin care provider, Dr. Zein Obagi.</p>
            <p>We are also manufacturers’ representatives of products from Europe, Middle East and Asia.</p>
            <br>
            <h3>Vision</h3>
            <p>The vision is to be the foremost one-stop centre for the aesthetic industry in the country.</p>
            <br>
            <h3>Mission</h3>
            <p>Our mission is to creatively market our value proposition and support practitioners to professionally diagnose and dispense treatment for clients’ skincare issues with the best products/devices in the industry.</p>
            <br>
            <h3>Core Values</h3>
            <p>These are the principles and values that guide our activities. They form the backbone of our operations and dealings with all stakeholders like staff, customers, vendors, international partners, and host communities.</p>
            <ol>
                <li>- Professionalism</li>
                <li>- Empathy</li>
                <li>- Resourcefulness</li>
                <li>- Fairness</li>




            </ol>
        </div>
    </div>

@endsection