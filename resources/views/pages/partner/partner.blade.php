<?php
$navlink['partners'] = 'isActive';
?>
@extends('layouts.mainApp')

@section('content')

    <div class=" mh-500 pv-20 " style="margin: 20px auto; width: 90%">
        <p class="text-center abt-heading pt-5">
            <span class="under-line"> - Partners - </span>
        </p>
        <br>
        <div class="row mt-5">
            @foreach($partners as $partner)
                <div class="col-md-4 mt-5">
                    <div class="card curved">
                        <div class="card-body">
                            <h3>{{ $partner->name }}</h3>
                            <p ><span class="text-red"><b>websites:</b> </span>
                                {!! $partner->websites() !!}
                            </p>
                            <hr>
                            <p class="abt-text-mini">
                                {!! $partner->details() !!}
                                <a href="{{ route('topartner', $partner->unid) }}" class="open-modal" rel="modal:open"><small class="text-red"><b>see more</b></small></a>
                            </p>
                            <img src="{{ $partner->brand() }}" alt="logo" class="partner-img">

                            <hr>
                            <a href="#" class="btn btn-sm btn-dark">View Products</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

    @include('pages.includes.footer')

@endsection