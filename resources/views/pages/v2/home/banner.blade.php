<section class="banner-section" style="background: url('{{ $banner->logo1() }}');">
    <div class="">
        <div class="banner-inner">
            @if(!empty($banner->title))
                <div class="banner-content" style="background: rgba(45,45,45,0.68); width: 100%; position: absolute;bottom: 0;">
                    <div class="container m-3">
                        <h2 class="page-title text-center">
                            {{ $banner->title }}
                            @if(!empty($banner->btn))
                                <a href="{{ $banner->target }}" class="theme-btn style-two">{{ $banner->btn }}</a>
                            @endif
                        </h2>
                    </div>
                </div>
            @endif

        </div>
    </div>
    <div class="banner-angle">
        <img src="{{ url('assets/images/hero/hero-angle.png') }}" alt="Angle">
    </div>
</section>