@extends('layouts.master')

@section('content')
    @section('title', 'Edit Employee')
    <div class="card shadow mb-4">

        <div class="card-body">
            <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="firstname" class="col-form-label">Firstname</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="firstname" id="firstname" value="{{ $employee->firstname }}">
                    </div>

                    @error('firstname')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="lastname" class="col-form-label">Lastname</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="lastname" id="lastname" value="{{ $employee->lastname }}">
                    </div>

                    @error('lastname')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="company_id" class="col-form-label">Company</label>
                    </div>

                    <div class="col-sm-4">
                        <select class="form-select form-control" name="company_id" id="company_id">
                            <option value="">Select</option>
                            @foreach($companies as $company)
                                <option value="{{ $company->id }}" @if ($company->id == $employee->company_id) selected @endif>{{ $company->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('company_id')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="lastname" class="col-form-label">Position</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="position" id="position" value="{{ $employee->position }}">
                    </div>

                    @error('position')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="lastname" class="col-form-label">Gender</label>
                    </div>

                    <div class="col-sm-4 py-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male"  @if ($employee->gender == 'male') checked @endif />
                            <label class="form-check-label" for="male">male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" @if ($employee->gender == 'female') checked @endif />
                            <label class="form-check-label" for="female">female</label>
                        </div>
                    </div>

                    @error('gender')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="status" class="col-form-label">Status</label>
                    </div>

                    <div class="col-sm-4 py-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="invited" value="invited"  @if ($employee->status == 'invited') checked @endif />
                            <label class="form-check-label" for="invited">invited</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="passive" value="passive"  @if ($employee->status == 'passive') checked @endif />
                            <label class="form-check-label" for="passive">passive</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="active" value="active" @if ($employee->status == 'active') checked @endif />
                            <label class="form-check-label" for="active">active</label>
                        </div>
                    </div>

                    @error('gender')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="email" class="col-form-label">Email</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="email" id="email" value="{{ $employee->email }}">
                    </div>

                    @error('email')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="employment_date" class="col-form-label">Employment date</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="employment_date" id="employment_date" value="{{ $employee->employment_date }}">
                    </div>

                    @error('employment_date')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2"></div>

                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
