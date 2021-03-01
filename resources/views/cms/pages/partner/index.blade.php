<?php
$active['partner'] = 'nav-active';

?>
@extends('cms.layout.app')

@section('content')

    <div class="col-md-12">

        <nav class="row" style="margin: 0 4px">
            <ol class="breadcrumb radius50">
                <li class="breadcrumb-item"><b>Partner</b></li>
            </ol>
        </nav>
        <!-- first div panel for greeting and important messages-->

        @include('cms.includes.notify')

    </div>
    <br>
    <div class="col-12">
        <div class="card card-shadow card-pad0" style="padding: 20px">
            <div class="card-header">
                <a href="{{ route('partner.create') }}" class="btn btn-green">Add New</a>

                <span class="pull-right">{{ count($partners) }} Partners</span>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Website</th>

                        <th scope="col">Brand</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($partners as $partner)
                        <tr>
                            <th scope="row">
                                {{ $partner->name }}
                            </th>
                            <td>{!! $partner->websites() !!}</td>

                            <td>
                                <img style="max-height: 50px;max-width: 150px" class="" src="{{ $partner->brand() }}" alt="">
                            </td>
                            <td>
                                <a href="{{ route('partner.edit', $partner->id) }}" class="btn btn-sm btn-green">Manage</a>
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
                {{ $partners->links() }}
            </div>
        </div>
    </div>


@endsection