<?php
$active['mfr'] = 'nav-active';

?>
@extends('cms.layout.app')

@section('content')

    <div class="col-md-12">

        <nav class="row" style="margin: 0 4px">
            <ol class="breadcrumb radius50">
                <li class="breadcrumb-item"><b>Manufacturer</b></li>
            </ol>
        </nav>
        <!-- first div panel for greeting and important messages-->

        @include('cms.includes.notify')

    </div>
    <br>
    <div class="col-12">
        <div class="card card-shadow card-pad0" style="padding: 20px">
            <div class="card-header">
                <a href="{{ route('mfr.create') }}" class="btn btn-green">Add New</a>

                <span class="pull-right">{{ count($mfrs) }} Manufacturers</span>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mfr. Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Products</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($mfrs as $mfr)
                        <tr>
                            <th scope="row">
                                <input type="checkbox" value="{{ $mfr->id }}">
                            </th>
                            <td>{{ $mfr->name }}</td>
                            <td>{{ $mfr->active?'Active':'Inactive' }}</td>
                            <td>{{ count($mfr->prdt) }}</td>
                            <td>
                                <a href="{{ route('mfr.edit', $mfr->unid) }}" class="btn btn-sm btn-dark">Manage</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <p class="text-center">No Data Found. Please Retry or Check back later</p>
                            </td>

                        </tr>
                    @endforelse



                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $mfrs->links() }}
            </div>
        </div>
    </div>


@endsection