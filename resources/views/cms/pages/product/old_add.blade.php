<?php
$active['product'] = 'nav-active';

?>
@extends('cms.layout.app')

@section('content')

    <div class="col-md-12">

        <nav class="row" style="margin: 0 4px">
            <ol class="breadcrumb radius50">
                <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a></li>
                <li class="breadcrumb-item"><b>New Account</b></li>
            </ol>
        </nav>
        <!-- first div panel for greeting and important messages-->

        @include('cms.includes.notify')

        <div class="">

        </div>
        <br>

    </div>
    <br>
    <div class="col-12">
        <div class="card card-shadow card-pad0" style="padding: 20px">
            <div class="card-header">
                <b>Create a new Product</b>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('product.store') }}" aria-label="{{ __('new-product') }}" enctype="multipart/form-data">
                    @csrf



                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="prodct name">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Select Mfr.</label>

                        <div class="col-md-6">
                            <select class="form-control" name="maker_id" id="" required>
                                <option value=""></option>
                                @foreach($makers as $maker)
                                    <option value="{{ $maker->id }}" {{ intval(old('maker_id'))===intval($maker->id)?'selected':'' }}>{{ $maker->name }}</option>
                                @endforeach

                            </select>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Price</label>

                        <div class="col-md-6">
                            <input id="" type="text" class="form-control" name="price" value="{{ old('price') }}" required placeholder="current price">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Price (old) </label>

                        <div class="col-md-6">
                            <input id="" type="text" class="form-control" name="oldprice" value="{{ old('oldprice') }}" placeholder="Old price">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Select Category</label>

                        <div class="col-md-6">
                            <select class="form-control" name="category_id" id="" required>
                                <option value=""></option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ intval(old('category_id'))===intval($category->id)?'selected':'' }}>{{ $category->name }}</option>
                                @endforeach

                            </select>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">New Product? </label>

                        <div class="col-md-6">
                            <input type="checkbox" class="" name="isnew">
                            {{--<input id="" type="checkbox" class="" name="isnew">--}}

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Discount</label>

                        <div class="col-md-6">
                            <input id="" type="text" class="form-control" name="discount" value="{{ old('discount') }}"  placeholder="Price discount">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Image 1</label>

                        <div class="col-md-6">
                            <p> Product Image <small>500kb Max , Must be Image File Type</small></p>
                            <input type="file" class="form-control" name="pic1" accept="image/*" onchange="shwimg($(this))" id="imgInp" >

                            <br>
                            <br>
                            <div class="childimg dark-t-bg" style="max-width: 200px; padding: 0; border-radius: 5px; margin: 0 auto">
                                <img id="imgtoshow"  src="{{ url('image/default.png') }}" class="img-fit mid-size img-thumbnail" alt="">
                            </div>
                            <br>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Image 2</label>

                        <div class="col-md-6">
                            <p> Product Image <small>500kb Max , Must be Image File Type</small></p>
                            <input type="file" class="form-control" name="pic2" accept="image/*" onchange="shwimg($(this))" id="imgInp" >

                            <br>
                            <br>
                            <div class="childimg dark-t-bg" style="max-width: 200px; padding: 0; border-radius: 5px; margin: 0 auto">
                                <img id="imgtoshow"  src="{{ url('image/default.png') }}" class="img-fit mid-size img-thumbnail" alt="">
                            </div>
                            <br>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Image 3</label>

                        <div class="col-md-6">
                            <p> Product Image <small>500kb Max , Must be Image File Type</small></p>
                            <input type="file" class="form-control" name="pic3" accept="image/*" onchange="shwimg($(this))" id="imgInp" >

                            <br>
                            <br>
                            <div class="childimg dark-t-bg" style="max-width: 200px; padding: 0; border-radius: 5px; margin: 0 auto">
                                <img id="imgtoshow"  src="{{ url('image/default.png') }}" class="img-fit mid-size img-thumbnail" alt="">
                            </div>
                            <br>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Detail </label>

                        <div class="col-md-6">
                            <textarea id="" type="text" class="form-control" name="detail" required placeholder="product detail">{{ old('detail') }}</textarea>
                        </div>
                    </div>


                    <hr>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-green">
                                Add Product
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection