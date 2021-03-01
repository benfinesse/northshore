$(document).ready(function() {
    var time = 2;
    var $bar,
        $slick,
        isPause,
        tick,
        percentTime;

    $slick = $(".slicked");
    $slick.slick({
        autoplay: true,
        autoplaySpeed: 8000,

        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        lazyLoad: 'progressive',
        arrows: false,
        dots: true,
    });

    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 800,
        cssEase: 'linear',
        lazyLoad: 'progressive',
        arrows: false,
        dots: true,
        fade: true,
    }).slickAnimation();


    $bar = $('.slider-progress .progress');

    function startProgressbar() {
        resetProgressbar();
        percentTime = 0;
        isPause = false;
        tick = setInterval(interval, 30);
    }

    function interval() {
        if (isPause === false) {
            percentTime += 1 / (time + 0.1);
            $bar.css({
                width: percentTime + "%"
            });
            if (percentTime >= 100) {
                $slick.slick('slickNext');
                startProgressbar();
            }
        }
    }

    function resetProgressbar() {
        $bar.css({
            width: 0 + '%'
        });
        clearTimeout(tick);
    }

    $('.slick-arrow').on('click', function(event){
        startProgressbar();
    });

    startProgressbar();


    //set modal fade start

    $('a.open-modal').click(function(event) {
        $(this).modal({
            fadeDuration: 300,
            fadeDelay: 0.80
        });
        return false;
    });

    $(document).on('click', '.setimg', function (event) {
        $('.targetImg').attr('src', $(this).attr('src'));
    });



});