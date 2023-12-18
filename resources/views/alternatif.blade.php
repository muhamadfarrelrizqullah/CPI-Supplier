@extends('layouts.main')

@section('title', 'Alternatif')

@section('page_name', 'Alternatif')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr class="text-center">
                                    <th>id</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatifs as $alternatif)
                                    <tr class="text-center">
                                        <td>A{{ $alternatif->id }}</td>
                                        <td>{{ $alternatif->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $alternatifs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
