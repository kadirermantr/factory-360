@extends('layouts.master')

@section('content')
    @section('title', 'Edit Company')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Details</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('company.update', $company->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="name" class="col-form-label">Name</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $company->name }}">
                    </div>

                    @error('name')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2"></div>

                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary" name="edit" value="edit">Edit</button>
                        <a onclick="document.getElementById('deleteForm').submit()" class="btn btn-danger" value="delete">Delete</a>
                    </div>
                </div>
            </form>

            <form action="{{ route('company.destroy', $company) }}" method="POST" id="deleteForm">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Employees</h6>
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
                            <th>Employment Date</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td><a href="{{ route('employee.show', $employee->id) }}">{{ $employee->firstname }} {{ $employee->lastname }}</a></td>
                                <td>{{ $employee->position }}</td>
                                <td>{{ $employee->status }}</td>
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
