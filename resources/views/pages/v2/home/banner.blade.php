<section class="hero-section" style="background: url('{{ $banner->logo1() }}'); background-size: cover;position: relative;display: flex;align-items: center;justify-content: center;background-position: center; ">
    <div class="container">
        <div class="hero-content">
            <h1>{{ $banner->title }}</h1>
            <h5>{{ $banner->detail1 }}</h5>

            @if(!empty($banner->btn))
                <a href="{{ $banner->target }}" class="theme-btn">{{ $banner->btn }}</a>
            @endif

        </div>
    </div>
    <div class="hero-angle">
        {{--<img src="{{ $banner->logo1() }}" alt="hero angle">--}}
        <img src="{{ url('assets/images/hero/hero-angle.png') }}" alt="hero angle">
    </div>
</section>
