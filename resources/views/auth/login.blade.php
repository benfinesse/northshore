@extends('layouts.cmsLogin')

@section('content')

<div class="container" style="height: 100vh; display: flex;  align-items: center; justify-content: center;">
    <div class="card" style="background-color: #ffffffc9">
        <div class="card-header">Shop CMS Admin Console</div>

        <div class="card-body">
            <form method="POST" action="{{ route('cms.login') }}">
                @csrf
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-md-right">username</label>

                    <div class="col-md-12">
                        <input id="email" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                                    @endif

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">password</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="password" required value="{{ old('password') }}">
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 ">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>

                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-sm btn-dark">
                            Login
                        </button>

                        {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                        <a class="btn btn-link" href="#">
                            Forgot your password?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
