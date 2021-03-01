<div class="col-md-3">
    <div class="row">
        <div class="cat-list" style="">
            <h5 class="text-center"><b>{{ strtoupper($category->name) }}</b></h5>

            <ul class="list-group " id="catlists">
                @foreach($category->partners as $partner)
                    <a class="list-group-item li-m9 clear-li" href="{{ route('topartner', $partner->unid) }}" class="open-modal" rel="modal:open">
                        <b>{{ strtoupper($partner->name) }}</b>
                    </a>
                @endforeach

            </ul>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="p-0 col-12">
            @include('pages.category.ads')
        </div>
    </div>
</div>