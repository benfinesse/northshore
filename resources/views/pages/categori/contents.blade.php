<section class="fcontent">
    <div class="container">

        <div class="row">
            <div class="cat-list" style="">
                <h5 class="text-center"><b><a href="{{ route('view.categories') }}" style="color: rgb(104, 58, 35);">BACK </a>  |  {{ strtoupper($category->name) }}</b></h5>
            </div>
        </div>
        <br>

        <div class="row">

            @include('pages.categori.categoryList')


            <div class="col-md-9" style="    padding: 0 0 0 20px;">
                @include('pages.categori.products')
            </div>





        </div>

    </div>
</section>
