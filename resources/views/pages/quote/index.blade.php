<?php
//$navlink['skincenter'] = 'isActive';
?>
@extends('layouts.mainApp')

@section('content')

    <section>
        <div class=" mh-500 pv-20 container " style="margin: 20px auto;">
            <p class="text-center abt-heading pt-2">
                <span class="under-line"> - Make a Quote - </span>
            </p>
            <br>
            @include('cms.includes.notify')
            <div class="col-md-8 offset-md-2 mt-2">
                <form method="POST" action="{{ route('quote.store') }}"  enctype="multipart/form-data">
                    @csrf

                    <div class="form-group ">

                        <div class="col-md-12">
                            <input autocomplete="off" id="name" type="text" class="form-control" name="org_name" value="{{ old('org_phone') }}" required autofocus placeholder="Name | Corporate Name">
                        </div>
                    </div>

                    <div class="form-group ">

                        <div class="col-md-12">
                            <input autocomplete="off" id="name" type="text" class="form-control" name="org_phone" value="{{ old('org_phone') }}" required autofocus placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="form-group ">

                        <div class="col-md-12">
                            <input autocomplete="off" id="name" type="email" class="form-control" name="org_email" value="{{ old('org_email') }}" required autofocus placeholder="Email Address">
                        </div>
                    </div>

                    <div class="form-group  mb-4 pt-5">
                        <div class="col-md-12">
                            <textarea autocomplete="off" rows="10" id="" type="text" class="form-control vector" name="quo_detail" required placeholder="Quote detail | How can we help you?">{{ old('quo_detail') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group  mb-0">
                        <div class="col-md-6 ">
                            <button type="submit" class="btn btn-green">
                                Send Quote
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    @include('pages.includes.footer')

@endsection