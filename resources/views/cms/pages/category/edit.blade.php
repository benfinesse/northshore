<?php
$active['category'] = 'nav-active';

?>
@extends('cms.layout.app')

@section('content')

    <div class="col-md-12">

        <nav class="row" style="margin: 0 4px">
            <ol class="breadcrumb radius50">
                <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
                <li class="breadcrumb-item"><b>Edit {{ $category->name }}</b></li>
            </ol>
        </nav>
        <!-- first div panel for greeting and important messages-->

        @include('cms.includes.notify')


    </div>
    <div class="col-12">
        <div class="card card-shadow card-pad0" style="padding: 20px">
            <div class="card-header">
                <b>Manage Category</b>

                <span class="pull-right ">
                    <form action="{{ route('category.destroy', $category->id) }}" method="post" >
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-danger">DELETE <i class="fa fa-trash"></i></button>
                    </form>

                </span>

                <span class="pull-right">
                     @if($category->active)
                        <a href="{{ route('category.disable', $category->id) }}" class="btn btn-warning">Disable</a>
                    @else
                        <a href="{{ route('category.enable', $category->id) }}" class="btn btn-green">Endable</a>
                    @endif
                </span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('category.update', $category->id) }}" aria-label="{{ __('new-category') }}">
                    @csrf
                    {{ method_field('put') }}


                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}" required autofocus>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Details</label>

                        <div class="col-md-6">
                            <textarea id="name" type="text" class="form-control" name="details">{{ $category->details }}</textarea>

                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-green">
                                Update {{ $category->name}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection