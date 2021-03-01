
        <div class="row">
            <div class="col-12">

                <div class="card  card-clear">
                    <img class="card-img-top img-fitbw targetImg" src="{{ $product->getpic1() }}" style="max-width: 250px; margin: 0 auto;" alt="Card image cap">
                </div>
            </div>

            <div class="col-12">


                <hr>
                <strong>{{ $product->name }}</strong>
                <p class="gray-price fs-14">{{ $product->detail }}</p>

                <br>
                <div class="row">
                    <div class="col-4">
                        <img class="img-fitbw setimg img-thumbnail" src="{{ $product->getpic1() }}" alt="">
                    </div>
                    <div class=" col-4">
                        <img class="img-fitbw setimg img-thumbnail" src="{{ $product->getpic2() }}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fitbw setimg img-thumbnail" src="{{ $product->getpic3() }}" alt="">
                    </div>
                </div>
                <br>

            </div>

        </div>


