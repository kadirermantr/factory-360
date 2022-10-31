@extends('layouts.master')

@section('content')
    @section('title', trans('terms.dashboard'))

    <div class="row">
        @foreach($statistics as $statistic)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 -">{{ $statistic['title'] }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $statistic['count'] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('terms.welcome') }}</h6>
        </div>

        <div class="card-body">{{ __('terms.description') }}</div>
    </div>


@endsection
