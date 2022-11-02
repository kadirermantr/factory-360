@extends('layouts.master')

@section('content')
    @section('title', __('terms.companies'))

    <p class="mb-4">
        <a href="{{ route('company.create') }}">
            » {{ (__('terms.create_record', ['attribute' => __('terms.company')])) }}
        </a>
    </p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('terms.detail') }}</h6>
        </div>

        <div class="card-body">
            @if($companies->isEmpty())
                {{ __('terms.not_found') }}
            @else
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th>{{ __('terms.name') }}</th>
                        <th>{{ __('terms.creator') }}</th>
                        <th>{{ __('terms.founding_date') }}</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td><a href="{{ route('company.show', $company->id) }}">{{ $company->name }}</a></td>
                                <td><a href="{{ route('user.show', $company->user->id) }}">{{ $company->user->name }}</a></td>
                                <td>{{ \Carbon\Carbon::make($company->created_at)->format('Y-m-d') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>

    @php
        $dataTable = true;
    @endphp
@endsection
