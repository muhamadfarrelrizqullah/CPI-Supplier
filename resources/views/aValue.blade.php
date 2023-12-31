@extends('layouts.main')

@section('title', 'Input Nilai Alternatif')

@section('page_name', 'Input Nilai Alternatif')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr class="text-center">
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatifs as $alternatif)
                                    <tr class="text-center">
                                        <td>A{{ $alternatif->id }}</td>
                                        <td>{{ $alternatif->name }}</td>
                                        <td>
                                            <a href="/value/{{ $alternatif->id }}" class="text-info mr-2"><i
                                                    class="fas fa-edit" style="font-size: 20px"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
