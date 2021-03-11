<section class="fcontent">
    <div class="container ">

        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-12 col-md-12 col-lg-6 mt-5">
                    <div class="card shadow-mild">
                        <div class="row" style="padding-left: 15px;padding-right: 15px;">
                            <div class="col-md-6">
                                <!--Absolute Round Image Placeholder Start-->
                                <div class="square-container hide-overflow">
                                    <div class="square-aligner"></div>
                                    <div class="square-content">
                                        <div class="img-dp">
                                            <a href="{{ route('view.product', $product->unid) }}">
                                                <img class="img-fitbw" src="{{ $product->getpic1() }}" alt="prod_img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--Absolute Round Image Placeholder Ends-->

                            </div>
                            <div class="col-md-6">
                                <h6 class="mt-4 text-center text-uppercase color-def"><a
                                            href="{{ route('view.product', $product->unid) }}">{{ $product->name }}</a></h6>
                                <p class="text-justify pl-2 pr-2">
                                    {{ $product->shortInfo }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        @if($products->count()>3)
            <div class="text-center mt-3 mb-5">
                <a href="{{ route('view.categories') }}" class="btn btn-def1 btn-lg text-uppercase mt-5 shadow-lg">View more</a>
            </div>
        @endif

    </div>
</section>