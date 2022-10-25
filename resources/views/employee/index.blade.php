@extends('layouts.master')

@section('content')
    @section('title', 'Employees')

    <p class="mb-4">
        <a href="{{ route('employee.create') }}">» Invite an employee</a>
    </p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Details</h6>
        </div>

        <div class="card-body">
            @if($employees->isEmpty())
                Data not found!
            @else
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Company</th>
                        <th>Employment Date</th>
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
