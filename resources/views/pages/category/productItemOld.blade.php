@foreach($category->products->take(4) as $product)
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card  card-clear">

            <div class="spl">
                @if(!empty($product->getpic2()))
                    <img class="card-img-top img-fitbw pl2 animate" src="{{ $product->getpic2() }}" alt="{{ $product->name }}">
                @endif

                @if(!empty($product->getpic1()))
                    <img class="card-img-top img-fitbw" src="{{ $product->getpic1() }}" alt="{{ $product->name }}">
                @endif



                <div class="dopt">
                    <a title="see information" href="{{ route('modal.show',$product->unid) }}" class="btn-circle animate open-modal" rel="modal:open"><i class="fa fa-info-circle"></i></a>

                </div>


                @if(!empty($product->isnew))
                    <span class="pnew"><small>N E W</small></span>
                @endif

            </div>

            <div class="card-body">
                <div class="row"></div>
                <p class="prod-title text-center " >
                    <a href="{{ route('view.product', $product->unid) }}" style="color: #683A23" >{{ $product->name }}</a>
                </p>
            </div>
        </div>
    </div>
@endforeach