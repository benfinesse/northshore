@for($i=0;$i<4;$i++)
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card  card-clear">
            <div class="spl">
                <img class="card-img-top img-fitbw pl2 animate" src="{{ url('data/bag1b.jpg') }}" alt="Card image cap">
                <img class="card-img-top img-fitbw" src="{{ url('data/bag1a.jpg') }}" alt="Card image cap">
                <div class="dopt">
                    <a title="see information" href="{{ route('modal.show','id') }}" class="btn-circle animate open-modal" rel="modal:open"><i class="fa fa-info-circle"></i></a>
                    <a title="add to bag" href="#" class="btn-circle animate"><i class="fa fa-shopping-bag"></i></a>
                </div>
                <span class="phint"><small>-15%</small></span>
            </div>

            <div class="card-body">
                <div class="row"></div>
                <p class="prod-title text-center " >Spiffy Bag</p>
                <p class="text-center pprice">
                    N30,000
                </p>
            </div>
        </div>
    </div>
@endfor

