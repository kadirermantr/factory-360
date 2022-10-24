@extends('layouts.master')

@section('content')
    @section('title', 'Users')

    <p class="mb-4">
        <a href="{{ route('user.create') }}">» Create a user</a>
    </p>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Membership Date</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></td>
                            <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                            <td>{{ \Carbon\Carbon::make($user->created_at)->format('Y-m-d') }}</td>
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
