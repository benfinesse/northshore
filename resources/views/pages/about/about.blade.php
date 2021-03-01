<?php
$navlink['about'] = 'isActive';
?>
@extends('layouts.mainApp')

@section('content')

    <div class=" mh-500 pv-20 " style="margin: 20px auto; width: 90%">

        <div class="row">
            <div class="col-md-3" style="padding-top: 50px">
                <div class="nav-wrapz">
                    <p class="abt-text mb-0"><a href="#aboutUs" class="">About Us</a></p>
                    <hr>
                    <p class="abt-text mb-0"><a href="#vision" class="">Vision</a></p>
                    <hr>
                    <p class="abt-text mb-0"><a href="#mission" class="">Mission</a></p>
                    <hr>
                    <p class="abt-text mb-0"><a href="#corevals" class="">Core Values</a></p>
                    <hr>
                    <p class="abt-text mb-0"><a href="#ourteam" class="">Our Team</a></p>
                    <hr>
                    <p class="abt-text mb-0"><a href="#contactus" class="">Contact Us</a></p>

                </div>
                <div class="nav-wrapz2">
                    <p class="abt-text mb-0"><a href="#aboutUs" class="">About Us</a></p>
                    <hr>
                    <p class="abt-text mb-0"><a href="#vision" class="">Vision</a></p>
                    <hr>
                    <p class="abt-text mb-0"><a href="#mission" class="">Mission</a></p>
                    <hr>
                    <p class="abt-text mb-0"><a href="#corevals" class="">Core Values</a></p>
                    <hr>
                    <p class="abt-text mb-0"><a href="#ourteam" class="">Our Team</a></p>
                    <hr>
                    <p class="abt-text mb-0"><a href="#contactus" class="">Contact Us</a></p>
                </div>


            </div>

            <div class="col-md-9">
                <div class="" id="aboutUs">
                    <p class="text-center abt-heading pt-5">
                        <span class="under-line"> - About us - </span>
                    </p>
                    <br>
                    <p class="abt-text">
                        Squaredge Nigeria Limited is an aesthetics, beauty and skin care products company with specific focus
                        on cosmeceuticals, medical aesthetics products and devices across the aesthetics value chain.
                        We partner with the top-most manufacturers in the world to these products easily accessible to
                        aesthetics physician, dermatologists, plastic surgeons. We also service Medical Spas,
                        Beauty clinics and spas as well as pharmacy chains. As a result of this, end-users are able to
                        access services locally which they would have otherwise traveled abroad for. We are headquartered
                        in Abuja but our sphere of operations covers the West African region.
                    </p>

                    <p class="abt-text">
                        Our subsidiary, The Skin Center is a Medical Aesthetics clinic where we offer services and
                        products directly to individuals.  We are poised to become industry leaders within our region,
                        and we have built the required capacities and relationships to ensure that you have access to a
                        wide range of products and solutions at the right price when and where you need it.
                    </p>

                    <p class="abt-text">
                        make range of products and services, created by the legendary skin care provider, Dr. Zein Obagi. We are also manufacturers’ representatives of various aesthetic products from Europe, Middle East and Asia.
                    </p>

                    <p class="abt-text">
                        Our area of coverage is primarily West Africa while at manufacturers' requests we cover other countries in Africa. Our primary clients are Physicians, Dermatologists, Plastic Surgeons, Med Spas, Clinics, Beauty Salons and Pharmacy chains.
                    </p>

                    <p class="abt-text">
                        Squaredge Nigeria Limited is a beauty and skin care product and service provider, engaged in the wholesale and distribution of skin care products especially in the area of aesthetics and cosmetics. We are exclusive distributors the ZO Skin Health Inc., range of products and services, created by the legendary skin care provider, Dr. Zein Obagi.
                    </p>

                    <p class="abt-text">
                        We are also manufacturers’ representatives of products from Europe, Middle East and Asia.
                    </p>
                </div>

                <div id="vision">
                    <p class="text-center abt-heading pt-5">
                        <span class="under-line"> - Vision - </span>
                    </p>

                    <br>
                    <p class="abt-text">
                        The vision is to be the foremost one-stop centre for the aesthetic industry in the country.
                    </p>
                </div>
                
                <div id="mission">
                    <p class="text-center abt-heading pt-5">
                        <span class="under-line"> - Mission - </span>
                    </p>

                    <br>
                    <p class="abt-text">
                        Our mission is to creatively market our value proposition and support practitioners to professionally diagnose and dispense treatment for clients’ skincare issues with the best products/devices in the industry.
                    </p>
                </div>

                <div id="corevals">
                    <p class="text-center abt-heading pt-5">
                        <span class="under-line"> - Core Values - </span>
                    </p>

                    <br>
                    <p class="abt-text">
                        These are the principles and values that guide our activities. They form the backbone of our operations and dealings with all stakeholders like staff, customers, vendors, international partners, and host communities.
                    </p>
                    <p class="abt-text">
                    <ol>
                        <li>Professionalism</li>
                        <li>Empathy</li>
                        <li>Resourcefulness</li>
                        <li>Fairness</li>
                    </ol>
                    </p>

                </div>

                <div id="ourteam">
                    <p class="text-center abt-heading pt-5">
                        <span class="under-line"> - Our Team - </span>
                    </p>

                    <br>
                    <p class="abt-text">
                        With the constant aim of achieving total customer satisfaction, we have built a team of highly
                        experienced individuals providing prompt and efficient service delivery to our clients.

                    </p>
                </div>

                <div id="contactus">
                    <p class="text-center abt-heading pt-5">
                        <span class="under-line"> - Contact Us - </span>
                    </p>

                    <br>
                    <p class="abt-text">
                        Plot 516 Tillbery Close off Kumasi Crescent, off Aminu Kano Cresent, Wuse 2, Abuja, FCT, Nigeria. Email: info@squaredgeltd.com, Tel: 09030001440. Website: www.squaredgeltd.com
                    </p>

                </div>
            </div>
        </div>

    </div>



    @include('pages.includes.footer')



@endsection