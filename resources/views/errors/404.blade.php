@extends('layouts.mainApp')


@section('content')


    <div class="container" style="min-height: 600px">
        <h2 class="text-center pt-5">
            Sorry! we cant find the page you are looking for.
        </h2>
        <br>
        <p class="text-center"><a href="{{ route('home') }}" class="btn btn-green">HOME</a></p>
    </div>


    @include('pages.includes.footer')



@endsection