<div class="square-container outlined">
    <div class="square-aligner"></div>
    <div class="square-content hide-overflow">
        <div class="cours2 " style="overflow:hidden;">
            @if(!empty($infopage))
                <img class="hover" src="{{ $product->getpic1() }}" style="transition:1s;">
            @else
                <a href="{{ route('view.product',$product->unid) }}" class="">
                    <img class="hover" src="{{ $product->getpic1() }}" style="transition:1s;">
                </a>
            @endif


        </div>
    </div>
</div>