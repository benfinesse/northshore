<?php
$active['dashboard'] = 'nav-active';
$scripts = ['Chart.min.js','homeChart.js']

?>
@extends('cms.layout.app')

@section('content')

    <div class="col-md-12">


        <nav class="row" style="margin: 0 4px">
            <ol class="breadcrumb radius50">
                <li class="breadcrumb-item"><b>Dashboard</b></li>
            </ol>
        </nav>

        <!-- first div panel for greeting and important messages-->

        @include('cms.includes.notify')


        <div class="">
            <!-- quick links here -->
            @include('cms.pages.dashboard.quicklinks')
        </div>
        <br>
        <div class="">

            @include('cms.pages.dashboard.chart')
        </div>

    </div>


@endsection