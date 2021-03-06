<?php
$active['product'] = 'nav-active';

?>
@extends('cms.layout.app')

@section('content')

    <div class="col-md-12">

        <nav class="row" style="margin: 0 4px">
            <ol class="breadcrumb radius50">
                <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a></li>
                <li class="breadcrumb-item"><b>Edit {{ $product->name }}</b></li>
            </ol>
        </nav>
        <!-- first div panel for greeting and important messages-->

        @include('cms.includes.notify')


    </div>
    <div class="col-12">
        <div class="card card-shadow card-pad0" style="padding: 20px">
            <div class="card-header">
                <b>Manage Products</b>

                <span class="pull-right">
                    @if($product->featured)
                        <a href="{{ route('product.feature', $product->id) }}" class="btn btn-warning btn-sm">De Feature</a>
                    @else
                        <a href="{{ route('product.defeature', $product->id) }}" class="btn btn-info btn-sm">Feature</a>
                    @endif

                </span>

                <span class="pull-right">
                    @if($product->active)
                        <a href="{{ route('product.disable', $product->id) }}" class="btn btn-danger btn-sm">Disable</a>
                    @else
                        <a href="{{ route('product.enable', $product->id) }}" class="btn btn-green btn-sm">Enable</a>
                    @endif

                </span>

            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('product.update', $product->id) }}" aria-label="{{ __('new-mfr') }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}



                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" required autofocus placeholder="prodct name">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Select Partner.</label>

                        <div class="col-md-6">
                            <select class="form-control" name="maker_id" id="" required>
                                <option value=""></option>
                                @foreach($makers as $maker)
                                    <option value="{{ $maker->id }}" {{ $product->partner_id === $maker->unid?'selected':'' }}>{{ $maker->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Select Category</label>

                        <div class="col-md-6">
                            <select class="form-control" name="category_id" id="" required>
                                <option value=""></option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->unid }}" {{ $product->category_id===$category->unid?'selected':'' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">New Product? </label>

                        <div class="col-md-6">
                            <input type="checkbox" class="" name="isnew" {{ $product->isnew?'checked':'' }}>

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
                                <img id="imgtoshow"  src="{{ $product->getpic1() }}" class="img-fit mid-size img-thumbnail" alt="">
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
                                <img id="imgtoshow"  src="{{ $product->getpic2() }}" class="img-fit mid-size img-thumbnail" alt="">
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
                                <img id="imgtoshow"  src="{{ $product->getpic3() }}" class="img-fit mid-size img-thumbnail" alt="">
                            </div>
                            <br>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Detail </label>

                        <div class="col-md-6">
                            <textarea id="" type="text" class="form-control" name="detail" required placeholder="product detail">{{ $product->detail }}</textarea>
                        </div>
                    </div>


                    <hr>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-green">
                                Update {{ $product->name }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection