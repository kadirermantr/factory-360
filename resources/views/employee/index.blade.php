@extends('layouts.master')

@section('content')
    @section('title', __('terms.employees'))

    <p class="mb-4">
        <a href="{{ route('employee.create') }}">
            » {{ (__('terms.create_record', ['attribute' => __('terms.employee')])) }}
        </a>
    </p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('terms.detail') }}</h6>
        </div>

        <div class="card-body">
            @if($employees->isEmpty())
                {{ __('terms.not_found') }}
            @else
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th>{{ __('terms.name') }}</th>
                        <th>{{ __('terms.position') }}</th>
                        <th>{{ __('terms.status') }}</th>
                        <th>{{ __('terms.company') }}</th>
                        <th>{{ __('terms.employment_date') }}</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td><a href="{{ route('employee.show', $employee->id) }}">{{ $employee->firstname }} {{ $employee->lastname }}</a></td>
                            <td>{{ $employee->position }}</td>
                            <td>{{ $employee->status }}</td>
                            <td><a href="{{ route('company.show', $employee->company->id) }}">{{ $employee->company->name }}</a></td>
                            <td>{{ $employee->employment_date }}</td>
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
