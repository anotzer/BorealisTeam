@extends('layouts.layout-front')
@section('content')
    <div class="D2HomePage" style="background: #000;">
        <div class="container-fluid" style="color: #fff; margin-left: 0;">
            <div class="row justify-content-lg-start">
                <div class="col-md-6" style="padding-top: 10px;">
                    <div class="card" style="background: #222; border-radius: 0;">
                        <div class="row justify-content-center card-header">{{ __('Create new tasks') }}</div>
                        <div class="card-body">
                            <form class="create_service_form" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="title" class="input-label-profiler text-center" value="Title" readonly>
                                        <input type="text" name="title" class="input-profiler" value="" required>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" style="padding-top: 10px;">
                    <div class="card" style="background: #222; border-radius: 0;">
                        <div class="row justify-content-center card-header">{{ __('Create new category') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{route('create.category')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="input-label-profiler text-center" value="Title" readonly>
                                        <input type="text" name="title" class="input-profiler" value="" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="button-gb-gradient-register">
                                            {{ __('Create category') }}
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
