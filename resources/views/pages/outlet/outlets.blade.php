<?php
$navlink['outlets'] = 'isActive';
?>
@extends('layouts.mainApp')

@section('content')

    <div class=" mh-500 pv-20 " style="margin: 20px auto; width: 90%">
        <p class="text-center abt-heading pt-2">
            <span class="under-line"> - Outlets - </span>
        </p>
        <br>
        <div class="row mt-2">

            <div class="col-md-4 mt-5">
                <div class="card curved">
                    <div class="card-body">
                        <h3>Abuja</h3>
                        <p ><span class="text-red"><b>Phone:</b> </span> <span>09030001440</span> </p>
                        <p ><span class="text-red"><b>Email:</b> </span> <span>{{ 'info@squaredgeltd.com' }}</span> </p>
                        <hr>

                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=kumasi%20crescent%2C%20abuja&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                                <a href="https://www.crocothemes.net"></a>
                            </div>
                            <style>.mapouter{position:relative;text-align:right;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;}</style>
                        </div>
                        <br>
                        <p class="abt-text-mini">
                            Plot 516 Tillbery Close off Kumasi Crescent, off Aminu Kano Cresent, Wuse 2, Abuja, FCT, Nigeria.
                        </p>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <div class="card curved">
                    <div class="card-body">
                        <h3>Kaduna</h3>
                        <p ><span class="text-red"><b>Phone:</b> </span> <span>09030001440</span> </p>
                        <p ><span class="text-red"><b>Email:</b> </span> <span>{{ 'info@squaredgeltd.com' }}</span> </p>
                        <hr>

                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=kumasi%20crescent%2C%20abuja&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                                <a href="https://www.crocothemes.net"></a>
                            </div>
                            <style>.mapouter{position:relative;text-align:right;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;}</style>
                        </div>
                        <br>
                        <p class="abt-text-mini">
                            Plot 516 Tillbery Close off Kumasi Crescent, off Aminu Kano Cresent, Wuse 2, Abuja, FCT, Nigeria.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <div class="card curved">
                    <div class="card-body">
                        <h3>Lagos</h3>
                        <p ><span class="text-red"><b>Phone:</b> </span> <span>09030001440</span> </p>
                        <p ><span class="text-red"><b>Email:</b> </span> <span>{{ 'info@squaredgeltd.com' }}</span> </p>
                        <hr>

                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=kumasi%20crescent%2C%20abuja&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                                <a href="https://www.crocothemes.net"></a>
                            </div>
                            <style>.mapouter{position:relative;text-align:right;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;}</style>
                        </div>
                        <br>
                        <p class="abt-text-mini">
                            Plot 516 Tillbery Close off Kumasi Crescent, off Aminu Kano Cresent, Wuse 2, Abuja, FCT, Nigeria.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <div class="card curved">
                    <div class="card-body">
                        <h3>Port-Harcourt</h3>
                        <p ><span class="text-red"><b>Phone:</b> </span> <span>09030001440</span> </p>
                        <p ><span class="text-red"><b>Email:</b> </span> <span>{{ 'info@squaredgeltd.com' }}</span> </p>
                        <hr>

                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=kumasi%20crescent%2C%20abuja&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                                <a href="https://www.crocothemes.net"></a>
                            </div>
                            <style>.mapouter{position:relative;text-align:right;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;}</style>
                        </div>
                        <br>
                        <p class="abt-text-mini">
                            Plot 516 Tillbery Close off Kumasi Crescent, off Aminu Kano Cresent, Wuse 2, Abuja, FCT, Nigeria.
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('pages.includes.footer')

@endsection