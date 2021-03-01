@foreach($categories as $category)
    @if(count($category->products)>0)
        <div class="row mb-4">
            <div class="col-md-12 ">
                <h5><a href="{{ route('view.category', $category->unid) }}" style="color: #683A23"><b>{{ strtoupper($category->name) }}</b></a></h5>
                <hr>
                <div class="outlined">
                    <div class="row">
                        <div class="col-sm-4 ss-st p-3">
                            <a href="{{ route('view.category', $category->unid) }}" class="" style="margin-left: 20px"><b>view more</b></a>



                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="row"  style="margin-bottom: 50px">

            @include('pages.category.productItem')

        </div>
        <hr>
    @endif

@endforeach




