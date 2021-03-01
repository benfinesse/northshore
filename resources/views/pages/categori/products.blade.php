@if(count($category->products)>0)
    <div class="row mb-4">
        <div class="col-md-12 ">
            <div class="outlined">
                <div class="row">
                    <div class="col-sm-6 ss-st pt-4 pb-1">
                        <form action="" style="height: 20px">
                            @csrf
                            <input type="text" name="search" placeholder="   search products" class="form-control cat-style">
                            <input type="hidden" class="" value="">
                        </form>
                    </div>
                    <div class="col-sm-6 ss-st pt-4 pb-1">
                        <form action="" style="height: 20px">
                            <select name="" id="" class="form-control cat-style pad0">
                                <option c value="">sort by</option>
                                <option value="">Relevance</option>
                                <option value="">name: A-z</option>
                                <option value="">name:Z-A</option>
                                <option value="">price:Low-High</option>
                                <option value="">price:High-Low</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row"  style="margin-bottom: 50px">

        @foreach($category->products as $product)
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
@endif



