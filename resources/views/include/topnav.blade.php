<section>
    <!--  top navigation -->
    <nav class="navbar navbar-light navbar-fixed-top navbar-expand-lg navbar-light shadow-lite bg-white-30" id="top">
        <a class="navbar-brand" href="{{ route('home') }}"><img style="height: 100%" src="{{ url('icons/m-logo.png') }}" alt=""> SQUAREDGE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item animate">
                    <a class="nav-link {{ @$navlink['home'] }}" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ @$navlink['category'] }}" href="{{ route('view.categories') }}">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ @$navlink['outlets'] }}" href="{{ route('resellers') }}">Resellers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ @$navlink['skincenter'] }}" href="{{ route('skincenter') }}">Skin Center</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ @$navlink['partners'] }}" href="{{ route('partners') }}">Partners</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ @$navlink['blog'] }}" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ @$navlink['about'] }}" href="{{ route('about') }}">About</a>
                </li>




            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 o-style" type="search" placeholder="Search">
                <button class="btn btn-outline-default my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Search</button>
            </form>
        </div>
    </nav>
</section>