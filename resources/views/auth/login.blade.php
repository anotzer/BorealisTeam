@extends('layouts.layout-front')
@section('content')
    <div class="D2HomePage" style="background: #000;">
        <div class="container" style="left: 785px; top: 282px; color: #fff;">
            <div class="row justify-content-center">
                <div class="col-md-4" style="padding-top: 244px;">
                    <div class="card" style="background: #222; border-radius: 0;">
                        <div class="row justify-content-center card-header">{{ __('Login') }}</div>

                        <div class="card-body col-md-12">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="input-register @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email/Username">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="input-register @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-md-6 offset-md-4">--}}
{{--                                        <div class="form-check">--}}
{{--                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                            <label class="form-check-label" for="remember">--}}
{{--                                                {{ __('Remember Me') }}--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="form-group row mb-0">
                                    <div class="col-md-12    ">
                                        <button type="submit" class="button-gb-gradient-register">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
