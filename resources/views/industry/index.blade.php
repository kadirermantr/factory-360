@extends('layouts.master')

@section('content')
    @section('title', 'Industries')

    <p class="mb-4">
        <a href="{{ route('industry.create') }}">» Create an industry</a>
    </p>

    <div class="card shadow mb-4">
        <div class="card-body">
            @if($industries->isEmpty())
                Data not found!
            @else
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
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
