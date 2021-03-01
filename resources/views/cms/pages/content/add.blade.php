<?php
$active['content'] = 'nav-active';

?>
@extends('cms.layout.app')

@section('content')

    <div class="col-md-12">

        <nav class="row" style="margin: 0 4px">
            <ol class="breadcrumb radius50">
                <li class="breadcrumb-item"><a href="{{ route('content.index') }}">Contents</a></li>
                <li class="breadcrumb-item"><b>New Content</b></li>
            </ol>
        </nav>
        <!-- first div panel for greeting and important messages-->

        @include('cms.includes.notify')

    </div>

    <div class="col-12">
        <div class="card card-shadow card-pad0" style="padding: 20px">
            <div class="card-header">
                <b>Create a new Content</b>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('content.store') }}" aria-label="{{ __('new-mfr') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Type *</label>

                        <div class="col-md-6">
                            <select type="" class="form-control" name="type" required>
                                <option value=""></option>
                                <option value="banner">banner</option>
                                <option value="menu">menu</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Logo 1</label>

                        <div class="col-md-6">
                            <p> Passport Image <small>500kb Max , Must be Image File Type</small></p>
                            <input type="file" class="form-control" name="logo1" accept="image/*" onchange="shwimg($(this))" id="imgInp" >

                            <br>
                            <br>
                            <div class="childimg dark-t-bg" style="max-width: 200px; padding: 0; border-radius: 5px; margin: 0 auto">
                                <img id="imgtoshow"  src="{{ url('image/default.png') }}" class="img-fit mid-size img-thumbnail" alt="">
                            </div>
                            <br>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Logo 2</label>

                        <div class="col-md-6">
                            <p> Passport Image <small>500kb Max , Must be Image File Type</small></p>
                            <input type="file" class="form-control" name="logo2" accept="image/*" onchange="shwimg($(this))" id="imgInp" >

                            <br>
                            <br>
                            <div class="childimg dark-t-bg" style="max-width: 200px; padding: 0; border-radius: 5px; margin: 0 auto">
                                <img id="imgtoshow"  src="{{ url('image/default.png') }}" class="img-fit mid-size img-thumbnail" alt="">
                            </div>
                            <br>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Title</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="title" value="{{ old('title') }}" >

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Group</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="group" value="{{ old('group') }}">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">detail 1</label>

                        <div class="col-md-6">
                            <textarea id="name" type="text" class="form-control" name="detail1">{{ old('detail1') }}</textarea>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">detail 2</label>

                        <div class="col-md-6">
                            <textarea id="name" type="text" class="form-control" name="detail2">{{ old('detail2') }}</textarea>

                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Button</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="btn" value="{{ old('btn') }}">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Button Target</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="target" value="{{ old('target') }}">

                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-green">
                                Add Content
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection