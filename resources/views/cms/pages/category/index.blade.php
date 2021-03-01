<?php
$active['category'] = 'nav-active';

?>
@extends('cms.layout.app')

@section('content')

    <div class="col-md-12">

        <nav class="row" style="margin: 0 4px">
            <ol class="breadcrumb radius50">
                <li class="breadcrumb-item"><b>Category</b></li>
            </ol>
        </nav>
        <!-- first div panel for greeting and important messages-->

        @include('cms.includes.notify')

    </div>
    <br>
    <div class="col-12">
        <div class="card card-shadow card-pad0" style="padding: 20px">
            <div class="card-header">
                <a href="{{ route('category.create') }}" class="btn btn-green">Add New</a>

                <span class="pull-right">{{ count($categories) }} Categories</span>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Products</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($categories as $category)
                        <tr>
                            <th scope="row">
                                <input type="checkbox" value="{{ $category->id }}">
                            </th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->active?'Active':'Inactive' }}</td>
                            <td>{{ count($category->products) }}</td>
                            <td>
                                <a href="{{ route('category.edit', $category->unid) }}" class="btn btn-sm btn-dark">Manage</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <p class="text-center">No Data Found. Please Retry or Check back later</p>
                            </td>

                        </tr>
                    @endforelse



                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $categories->links() }}
            </div>
        </div>
    </div>


@endsection