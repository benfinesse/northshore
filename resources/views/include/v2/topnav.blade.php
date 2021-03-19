<header class="main-header">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container clearfix">

            <div class="header-inner d-lg-flex align-items-center">

                <div class="logo-outer d-flex align-items-center">
                    <div class="logo"><a href="{{ route('home') }}"><img src="{{ url('img/logo.png') }}" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix ml-lg-auto">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header clearfix">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="{{ @$navlink['home'] }}"><a href="{{ route('home') }}">Home</a></li>
                                <li class="{{ @$navlink['products'] }}"><a href="{{ route('products') }}">Products</a></li>
                                <li class="{{ @$navlink['partners'] }}"><a href="{{ route('partners') }}">Partners</a></li>
                                <li class="{{ @$navlink['about'] }}"><a href="{{ route('about') }}">About</a></li>

                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper-->

</header>