<?php
$navlink['contact'] = 'current';
?>
@extends('layouts.v2.app')


@section('content')

    <section class="banner-section">
        <div class="container">
            <div class="banner-inner">
                <div class="banner-content">
                    <h2 class="page-title">Contact Us</h2>
                    <p>Easily reach out to us.</p>
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



    <!--====================================================================
       Start Contact Info Section
   =====================================================================-->
    <div class="contact-info mt-150 rmt-125">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="flaticon-phone-call"></i>
                        </div>
                        <div class="info-content">
                            <span>+234 90 3000 1440</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="flaticon-location"></i>
                        </div>
                        <div class="info-content">
                            <span>Wuse 2, Abuja, FCT, Nigeria.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="flaticon-mail"></i>
                        </div>
                        <div class="info-content">
                            <span>{{ "info@squaredgeltd.com" }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form">
        <div class="container">
            <div class="contact-form-inner">
                <div class="section-title text-center mb-95">
                    <h2>Get In Touch</h2>
                    <p>Feel free to reach out to us!<br> Expecting to hear from you.</p>
                </div>
                <form action="#" method="post">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control" value="" required="" placeholder="Name Here">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" value="" required="" placeholder="Email Here">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="tel" name="phone-no" id="phone-no" class="form-control" value="" required="" placeholder="Phone No.">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-control" value="" required="" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-60">
                                <textarea name="message" id="message" class="form-control" rows="7" required="" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="theme-btn style-two">Send Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="contact-map" id="map"></div>


@endsection