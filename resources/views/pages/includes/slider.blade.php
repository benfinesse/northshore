<section>
    <div class="wrapper">
        <div class="slider stick-dots">
            @foreach($banners as $banner)
                <div class="slide">
                    <div class="slide__img">
                        <img src="" alt="" data-lazy="{{ $banner->logo1() }}" class="full-image animated" style="width: 100%" data-animation-in="zoomInImage"/>
                    </div>
                    <div class="slide__content">
                        <div class="slide__content--headings">
                            <h2 class="animated" data-animation-in="fadeInUp">{{ $banner->title }}</h2>
                            <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3">{{ $banner->detail1 }}</p>
                            @if(!empty($banner->btn))
                                <a href="{{ $banner->target }}" class="btn btn-dark-transparent animated rounded-0 btn-lg" data-animation-in="fadeInUp" data-delay-in="0.6">{{ $banner->btn }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{--<div class="slider-progress">--}}
            {{--<div class="progress"></div>--}}
        {{--</div>--}}
    </div>
</section>


{{--<div class="isrelative">--}}

    {{--<div class="icontent">
        <h4 style="font-size: 3em">{{ $banner->title }}</h4>
        <br>
        <p style="font-size: 2em">{{ $banner->detail1 }}</p>
        <a href="{{ $banner->target }}" class="btn btn-dark">{{ $banner->btn }}</a>
    </div>--}}

    {{--<img src="{{ $banner->logo1() }}">--}}
{{--</div>--}}