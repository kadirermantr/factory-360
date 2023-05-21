@extends('layouts.master')

@section('content')
    @section('title', __('terms.edit_record', ['attribute' => __('terms.employee')]))
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('terms.detail') }}</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="firstname" class="col-form-label">{{ __('terms.firstname') }}</label>
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
                        <label for="lastname" class="col-form-label">{{ __('terms.lastname') }}</label>
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
                        <label for="company_id" class="col-form-label">{{ __('terms.company') }}</label>
                    </div>

                    <div class="col-sm-4">
                        <select class="form-select form-control" name="company_id" id="company_id">
                            <option value="">{{ __('terms.select') }}</option>
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
                        <label for="lastname" class="col-form-label">{{ __('terms.position') }}</label>
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
                        <label for="lastname" class="col-form-label">{{ __('terms.gender') }}</label>
                    </div>

                    <div class="col-sm-4 py-1">
                        @foreach($genders as $gender)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="{{ $gender }}" value="{{ $gender }}"  @if (($employee->gender)->value == $gender->value) checked @endif />
                                <label class="form-check-label" for="{{ $gender }}">{{ __("terms.$gender->value") }}</label>
                            </div>
                        @endforeach
                    </div>

                    @error('gender')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="status" class="col-form-label">{{ __('terms.status') }}</label>
                    </div>

                    <div class="col-sm-4 py-1">
                        @foreach($statuses as $status)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="{{ $status }}" value="{{ $status }}"  @if (($employee->status)->value == $status->value) checked @endif />
                                <label class="form-check-label" for="{{ $status }}">{{ __("terms.$status->value") }}</label>
                            </div>
                        @endforeach
                    </div>

                    @error('gender')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="email" class="col-form-label">{{ __('terms.email') }}</label>
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
                        <label for="employment_date" class="col-form-label">{{ __('terms.employment_date') }}</label>
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
                        <button type="submit" class="btn btn-primary">{{ __('terms.edit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
