{{--<nav class="navbar fixed-top navbar-expand-lg navbar-dark primary-color navba" id="mnav">--}}

<nav class="navbar fixed-top lite-shadow" style="background: #fff; color: #4b4b4b;">
    <div class="" style="width: 100%">

        <span type="" id="sidebarCollapse" class="">
            <b><i class="fa fa-bars"></i></b>
        </span>

        <span class="set-left">
            <a href="{{ route('cms.logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('cms.logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
        </span>

        <span class="set-left" style="margin-right:100px;">ShopName <b>CMS</b></span>


    </div>


</nav>

