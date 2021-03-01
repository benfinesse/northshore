<?php
$active['mfr'] = 'nav-active';

?>
@extends('cms.layout.app')

@section('content')

    <div class="col-md-12">

        <nav class="row" style="margin: 0 4px">
            <ol class="breadcrumb radius50">
                <li class="breadcrumb-item"><a href="{{ route('mfr.index') }}">Manufacturer</a></li>
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
                <b>Create a new Manufacturer</b>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('mfr.store') }}" aria-label="{{ __('new-mfr') }}">
                    @csrf



                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Phone</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>

                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-green">
                                Add Mfr.
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection