@extends('layouts.master')

@section('content')
    @section('title', __('terms.users'))

    <p class="mb-4">
        <a href="{{ route('user.create') }}">
            » {{ __('terms.create_record', ['attribute' => __('terms.user')]) }}
        </a>
    </p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('terms.detail') }}</h6>
        </div>

        <div class="card-body">
            @if($users->isEmpty())
                {{ __('terms.not_found') }}
            @else
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th>{{ __('terms.name') }}</th>
                        <th>{{ __('terms.email') }}</th>
                        <th>{{ __('terms.membership_date') }}</th>
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
            @endif
        </div>
    </div>

    @php
        $dataTable = true;
    @endphp
@endsection
