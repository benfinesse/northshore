<div class="outlined">
    <div class="row">
        <div class="col-sm-4 ss-st">

            <i class="fa fa-list-ul"></i>

            <a href="#" class="" style="margin-left: 20px"><b>view more</b></a>
        </div>
        <div class="col-sm-4 ss-st">
            <form action="" style="height: 20px">
                @csrf
                <input type="text" name="search" placeholder="   search products" class="form-control cat-style">
                <input type="hidden" class="" value="">
            </form>
        </div>
        <div class="col-sm-4 ss-st">
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