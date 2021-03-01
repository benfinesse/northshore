<section>

    <footer class="">
        <div class="container ">
            <div class="contact-details text-center ">
                <div class="row">
                    <div class="col">
                        <div class="icon"><i class="fas fa-map-marker"></i></div>
                        <div class="text">
                            <small>Plot 516 Tillbery Close off Kumasi Crescent, <br>off Aminu Kano Cresent, <br>Wuse 2, Abuja, FCT.</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="icon"><i class="fas fa-envelope"></i> <i class="fas fa-phone"></i></div>
                        <div class="text">
                            <p><a href="mailto:support@shirtstore.com">Support@example.com</a></p>
                        </div>
                        <div class="icon"></div>
                        <div class="text">
                            <p>(+234)09030001440</p>

                        </div>
                    </div>
                    <div class="col">
                        <h4>Quotes</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('makequote') }}">Request a quote</a></li>
                        </ul>


                    </div>
                    <div class="col">
                        <small>Get the latest News first from us by subscribing.</small>
                        <form class="mt-3" id="newsletter-form" action="" onclick="event.preventDefault();console.log($('#newssub').val());">
                            <input id="newssub" type="email" name="" placeholder="Enter Your Email" autocomplete="off">
                            <button class="btn btn-sm btn-green" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="social text-center">
                <ul class="social-list list-inline">
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-tumblr"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>© {{ date('Y') }} <a href="{{ route('home') }}">squaredge.com</a>. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p>Powered By <a href="https://finesseintegrated.com/" target="_blank">Finesse integrated</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{--<a href="#top" class="scrollTop shadow-heavy " style="display: block;"><i class="fa fa-angle-up"></i></a>--}}

</section>