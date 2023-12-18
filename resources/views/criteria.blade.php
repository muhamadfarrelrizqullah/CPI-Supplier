@extends('layouts.main')

@section('title', 'Kriteria')

@section('page_name', 'Kriteria')

@section('content')
    <div class="row">
        <div class="col-12">
            {{-- @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        @if (session()->has('updateSuccess'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('updateSuccess') }}</strong>
            </div>
        @endif --}}
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr class="text-center">
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Weight</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($criterias as $criteria)
                                    <tr class="text-center">
                                        <td>C{{ $criteria->id }}</td>
                                        <td>{{ $criteria->name }}</td>
                                        <td>{{ $criteria->type }}</td>
                                        <td>{{ $criteria->weight }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $criterias->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection