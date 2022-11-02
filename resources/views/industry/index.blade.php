@extends('layouts.master')

@section('content')
    @section('title', __('terms.industries'))

    <p class="mb-4">
        <a href="{{ route('industry.create') }}">
            » {{ (__('terms.create_record', ['attribute' => __('terms.industry')])) }}
        </a>
    </p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('terms.detail') }}</h6>
        </div>

        <div class="card-body">
            @if($industries->isEmpty())
                {{ __('terms.not_found') }}
            @else
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th>{{ __('terms.name') }}</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($industries as $industry)
                        <tr>
                            <td><a href="{{ route('industry.show', $industry->id) }}">{{ $industry->name }}</a></td>
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
