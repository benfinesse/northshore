<div class="col-md-3">
    <div class="row">
        <div class=" cat-list" style="">
            <h5 style="padding: 10px;margin: 0"><b>CATEGORIES</b></h5>
            <ul class="list-group " id="catlists">
                @foreach($categories as $category)
                    <a class="list-group-item li-m9 clear-li " href="{{ route('view.category', $category->unid) }}">
                        <b>{{ strtoupper($category->name) }}</b>
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