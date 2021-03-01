<div class="row">
    <div class="col-md-9 col-sm-12">
        <div class="card card-shadow card-pad0" style="padding: 20px">
            <div class="card-header">
                <b>Order Charts</b>

            </div>
            <div class="card-body">
                <canvas id="line-chart" width="800" height="450"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="card card-shadow card-pad0" style="padding: 20px">
            <div class="card-header">
                <b>Chart Options</b>

            </div>
            <div class="card-body">
                <p><small>Set Range</small></p>
                <div class="row">
                    <small class="col-12">from</small>
                    <div class="col-md-12"><input type="date" class="form-control" placeholder="From" ></div>
                    <small class="col-12">to</small>
                    <div class="col-md-12"><input type="date" class="form-control" placeholder="To"></div>
                    <br>
                    <br>
                    <div class="col-12 col-md-12">
                        <button class="btn btn-block btn-dark">Update</button>
                    </div>

                </div>

                <hr>
                <p><small>Switch Chart</small></p>
                <div class="">
                    <div class="btn btn-green btn-sm btn-dark">Orders</div>
                    <div class="btn btn-green btn-sm btn-dark">Product</div>
                    <div class="btn btn-green btn-sm btn-dark">Visitors</div>
                </div>
            </div>
        </div>
    </div>
</div>