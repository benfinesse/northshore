

<?php
$active['product'] = 'nav-active';

?>
@extends('cms.layout.app')

@section('content')

    <div class="col-md-12">

        <nav class="row" style="margin: 0 4px">
            <ol class="breadcrumb radius50">
                <li class="breadcrumb-item"><a href="{{ route('partner.index') }}">Partners</a></li>
                <li class="breadcrumb-item"><b>New Partner</b></li>
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
                <b>Add a new Partner</b>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('partner.update', $partner->id) }}" aria-label="{{ __('new-partner') }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Name <i class="fa fa-user-alt"></i></label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $partner->name }}" required autofocus placeholder="partner name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Website <i class="fa fa-globe"></i></label>

                        <div class="col-md-8">
                            <textarea id="" type="text" class="form-control" name="website" required placeholder="Website">{{ $partner->website }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Detail <i class="fa fa-info"></i> </label>

                        <div class="col-md-8">
                            <textarea id="" type="text" rows="9" class="form-control myfield" name="details" required placeholder="partner detail">{{ $partner->details }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Image <i class="fa fa-image"></i></label>

                        <div class="col-md-8">
                            <p> Partner Image/Brand <small>500kb Max , Must be Image File Type</small></p>
                            <input type="file" class="form-control" name="passport" accept="image/*" onchange="shwimg($(this))" id="imgInp" >
                            <br>
                            <br>
                            <div class="childimg dark-t-bg" style="max-width: 200px; padding: 0; border-radius: 5px; margin: 0 auto">
                                <img id="imgtoshow"  src="{{ $partner->brand() }}" class="img-fit mid-size img-thumbnail" alt="">
                            </div>
                            <br>

                        </div>
                    </div>

                    <hr>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-green">
                                Update Partner
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    @include('cms.includes.tinymyce')

@endsection