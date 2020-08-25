@extends('layouts.layout-front')
@section('content')
    <div class="D2HomePage" style="background: #000;">
        <div class="container" style="color: #fff; margin-left: 0;">
            <div class="row justify-content-lg-start">
                <div class="col-md-6" style="padding-top: 10px;">
                    <div class="card" style="background: #222; border-radius: 0;">
                        <div class="row justify-content-center card-header">{{ __('STANDARD PROFILE SETTINGS') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('profile.update') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="input-label-profiler" value="Name">
                                        <input type="text" name="name" class="input-profiler" value="{{Auth::user()->name}}" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="input-label-profiler" value="E-mail">
                                        <input name="email" id="email" type="email" value="{{Auth::user()->email}}" class="input-profiler" disabled readonly>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Change your password') }}
                                    </a>
                                @endif
                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="button-gb-gradient-register">
                                            {{ __('Update') }}
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
