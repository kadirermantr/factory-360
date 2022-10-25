@extends('layouts.master')

@section('content')
    @section('title', 'Invite Employee')
    <div class="card shadow mb-4">

        <div class="card-body">
            <form action="{{ route('employee.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="firstname" class="col-form-label">Firstname</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="firstname" id="firstname" value="{{ old('firstname') }}">
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
                        <input type="text" class="form-control" name="lastname" id="lastname" value="{{ old('lastname') }}">
                    </div>

                    @error('lastname')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="position" class="col-form-label">Position</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="position" id="position" value="{{ old('position') }}">
                    </div>

                    @error('position')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="company_id" class="col-form-label">Company</label>
                    </div>

                    <div class="col-sm-4">
                        <select class="form-select form-control" name="company_id">
                            <option selected>Select</option>
                            @foreach($companies as $company)
                                <option value="{{ $company->id }}" @if (old('company_id') == $company->id) selected="selected" @endif>{{ $company->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('company_id')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>


                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="phone" class="col-form-label">Phone</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                    </div>

                    @error('phone')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="email" class="col-form-label">Email</label>
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
                        <label for="employment_date" class="col-form-label">Employment date</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="employment_date" id="employment_date" value="{{ now()->format('Y-m-d') }}">
                    </div>

                    @error('employment_date')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2"></div>

                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Invite</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
