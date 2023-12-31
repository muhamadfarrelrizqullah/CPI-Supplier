@extends('layouts.main')

@section('title', 'Perhitungan')

@section('page_name', 'Perhitungan')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Evaluasi Supplier</h4>
                    <div class="card-header-action">
                        <a data-collapse="#nilai-perbandingan" class="btn btn-icon btn-info" href="#"><i
                                class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="nilai-perbandingan">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table-1">
                                <thead>
                                    <tr class="text-center">
                                        <th>A/C</th>
                                        @foreach (array_keys(reset($array)) as $criteria)
                                            <th>C{{ $criteria }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($array as $alternative => $criteriaValues)
                                        <tr class="text-center">
                                            <th>A{{ $alternative }}
                                            @foreach ($criteriaValues as $value)
                                                <td>{{ $value }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Pembentukan Matriks Normalisasi  (Tren Positif, Tren Negatif)</h4>
                    <div class="card-header-action">
                        <a data-collapse="#normalisasi" class="btn btn-icon btn-info" href="#"><i
                                class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="normalisasi">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table-1">
                                <thead>
                                    <tr class="text-center">
                                        <th>A/C</th>
                                        @foreach (array_keys(reset($normalisasi)) as $criteria)
                                            <th>C{{ $criteria }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($normalisasi as $alternative => $criteriaValues)
                                        <tr class="text-center">
                                            <th>A{{ $alternative }}</th> 
                                            @foreach ($criteriaValues as $value)
                                                <td>{{ $value }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Perhitungan Nilai Indeks Alternatif</h4>
                    <div class="card-header-action">
                        <a data-collapse="#pembobotan" class="btn btn-icon btn-info" href="#"><i
                                class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="pembobotan">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table-1">
                                <thead>
                                    <tr class="text-center">
                                        <th>A/C</th>
                                        @foreach (array_keys(reset($weighting)) as $criteria)
                                            <th>C{{ $criteria }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($weighting as $alternative => $criteriaValues)
                                        <tr class="text-center">
                                            <th>A{{ $alternative }}</th> 
                                            @foreach ($criteriaValues as $value)
                                                <td>{{ $value }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Perhitungan Nilai Indeks Gabungan dan Perangkingan Alternatif</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="table-1">
                            <thead>
                                <tr class="text-center">
                                    <th>Nama</th>
                                    <th>Nilai Indeks Gabungan</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sum as $alternative => $criteriaValues)
                                    <tr class="text-center">
                                        @foreach ($criteriaValues as $value)
                                            <td>{{ $value }}</td>
                                        @endforeach
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
