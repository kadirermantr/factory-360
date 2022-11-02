@extends('layouts.master')

@section('content')
    @section('title', __('terms.create_record', ['attribute' => __('terms.user')]))
    <div class="card shadow mb-4">

        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="name" class="col-form-label">{{ __('terms.name') }}</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                    </div>

                    @error('name')
                        <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="email" class="col-form-label">{{ __('terms.email') }}</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                    </div>

                    @error('email')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="password" class="col-form-label">{{ __('terms.password')}}</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    @error('password')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2"></div>

                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">{{ __('terms.create') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
