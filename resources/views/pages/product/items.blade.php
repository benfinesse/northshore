<div class="col-md-12">
    <div class="row">
        <div class="wrapper-p col-md-4 col-12">
            <div class="card  card-clear outlined">
                <img class="card-img-top img-fitbw targetImg" src="{{ $product->getpic1() }}" alt="Card image cap">
            </div>
        </div>

        <div class="col-md-8">
            <h3><b>{{ $product->name }}</b></h3>
            {{--<p class=""><b>N{{ $product->price }}</b> <small class="green-bg">{{ !empty($product->oldprice)?''.$product->getdis():'' }}</small> </p>--}}
            {{--<small><strike>N{{ $product->oldprice }}</strike></small>--}}
            <hr>
            <h6 class="gray-price">{{ $product->detail }}</h6>

            {{--<a href="#" class="btn btn-green">Add to Bag</a>--}}
            {{--<a href="#" class="btn btn-dark"> Add Review</a>--}}
            <br>
            <br>
            <div class="row">
                @if(is_file($product->pic1))
                    <div class="col-sm-3 col-4">
                        <div class="square-container outlined">
                            <div class="square-aligner"></div>
                            <div class="square-content hide-overflow">
                                <div class="cours2 " style="overflow:hidden;">
                                    <img class="hover setimg" src="{{ $product->getpic1() }}" style="transition:1s;">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if(is_file($product->pic2))
                        <div class="col-sm-3 col-4">
                            <div class="square-container outlined">
                                <div class="square-aligner"></div>
                                <div class="square-content hide-overflow">
                                    <div class="cours2 " style="overflow:hidden;">
                                        <img class="hover setimg" src="{{ $product->getpic2() }}" style="transition:1s;">
                                    </div>
                                </div>
                            </div>
                        </div>
                @endif

                @if(is_file($product->pic3))
                        <div class="col-sm-3 col-4">
                            <div class="square-container outlined">
                                <div class="square-aligner"></div>
                                <div class="square-content hide-overflow">
                                    <div class="cours2 " style="overflow:hidden;">
                                        <img class="hover setimg" src="{{ $product->getpic3() }}" style="transition:1s;">
                                    </div>
                                </div>
                            </div>
                        </div>
                @endif



            </div>
        </div>

    </div>

</div>

<div class="col-md-12" style="margin-top: 30px">
    <br>
    <section id="tabs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12" style="width: 100%">
                    <hr>
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Details</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p style="width: 100%">
                                {{ $product->detail }}
                            </p>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p>
                                No reviews yet
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>