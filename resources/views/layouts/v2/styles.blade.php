<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/fas/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/leaflet.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/spacing.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

@yield('custom_css')

<style>
    .min-height{
        min-height: 80vh;
    }
    .img-fit{
        width: 100%;
    }
    .product-item-wrapper{
        width: 100%;
        height:320px;
        overflow: hidden;
        align-content: center;
        display: grid;
        text-align: -webkit-center;
        padding: 10px;
    }
    .product-footer{
        background: #151C46;
        color: #f1f1f1;
        padding: 10px 0;
        cursor: pointer;
    }
    .soft-shadow{
        box-shadow: 0px 20px 20px #0000000f;
    }

    .banner-content .page-title, .banner-content p{
        color: #fff
    }
</style>