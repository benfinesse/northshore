<section class="services-section pt-150 rpt-95 mb-145 rmb-95">
    <div class="what-experct mt-120 rmt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="what-experct-img rmb-50" style="background-image: url('{{ $randomProduct->getpic1() }}'); background-size: contain;background-repeat: no-repeat;"></div>
                </div>
                <div class="col-lg-6">
                    <style>
                        .tthover:hover{
                            color: #fff !important;
                        }
                    </style>
                    <div class="what-experct-content">
                        <h3>{{ $randomProduct->name }}</h3>
                        <p>{{ $randomProduct->shortInfo }}</p>
                        <a href="#" class="theme-btn style-three tthover">Show More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
