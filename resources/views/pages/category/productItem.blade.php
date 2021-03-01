@foreach($category->products->take(4) as $product)
    <div class="col-sm-6 col-md-4 col-lg-3">

        <!--Absolute Round Image Placeholder Start-->
        @include('pages.product.listItem')
        <p class="prod-title text-center " >
            <a href="{{ route('view.product', $product->unid) }}" style="color: #683A23" >{{ $product->name }}</a>
        </p>
        <!--Absolute Round Image Placeholder Ends-->
    </div>
@endforeach

{{--<div class="img-dp">--}}
    {{--<a href="{{ route('modal.show',$product->unid) }}" class="">--}}
        {{--<div class="cours2 " style="overflow:hidden;">--}}
            {{--<img class="hover" src="{{ $product->getpic1() }}" style="transition:1s;">--}}
        {{--</div>--}}
    {{--</a>--}}
{{--</div>--}}