<section class="fcontent">
    <div class="container">

        <div class="row">
            <div class="cat-list" style="">
                <h5 class="text-center"><b><a href="{{ route('partners') }}" style="color: rgb(104, 58, 35);">BACK </a>  |  {{ strtoupper($partner->name) }}</b></h5>
            </div>
        </div>
        <br>

        <div class="row">

            <div class="col-md-3">
                <div class="row">
                    <div class=" cat-list" style="">
                        <h5 style="padding: 10px;margin: 0"><b>OTHER PARTNERS</b></h5>
                        <ul class="list-group " id="catlists">
                            @foreach($partners as $partner)
                                <a class="list-group-item li-m9 clear-li " href="{{ route('partner.product', $partner->unid) }}">
                                    <b>{{ strtoupper($partner->name) }}</b>
                                </a>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="p-0 col-12">
                        {{--<img src="{{ url('img/custom_sculpsure.jpg') }}" alt="" class="img-fit">--}}
                        @include('pages.category.ads')

                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3">

                            <!--Absolute Round Image Placeholder Start-->
                            @include('pages.product.listItem')
                            <p class="prod-title text-center " >
                                <a href="{{ route('view.product', $product->unid) }}" style="color: #683A23" >{{ $product->name }}</a>
                            </p>
                            <!--Absolute Round Image Placeholder Ends-->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>