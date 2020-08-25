@extends('layouts.layout-front')
@section('content')
    <div class="D2HomePage" style="background: #000;">
        <div class="container" style="left: 785px; top: 282px; color: #fff;">
            <div class="row justify-content-center">
                <div class="col-md-4" style="padding-top: 244px;">
                    <div class="card" style="background: #222; border-radius: 0;">
                        <div class="row justify-content-center card-header">{{ __('Register') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="name" type="text" class="input-register @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="NickName">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="input-register @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email/Login">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="password" type="password" class="input-register @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="input-register" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="button-gb-gradient-register">
                                            {{ __('Register') }}
                                        </button>
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
