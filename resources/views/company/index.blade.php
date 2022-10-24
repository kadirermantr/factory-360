@extends('layouts.master')

@section('content')
    @section('title', 'Companies')

    <p class="mb-4">
        <a href="{{ route('company.create') }}">» Create a company</a>
    </p>

    <div class="card shadow mb-4">

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Creator</th>
                        <th>Founding Date</th>
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
        </div>
    </div>

    @php
        $dataTable = true;
    @endphp
@endsection
