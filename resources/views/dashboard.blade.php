@extends('layouts.main')

@section('title', 'Dashboard')

@section('page_name', 'Dashboard')

@section('content')
    <section id="hero" class="hero d-flex align-items-center section-bg text-dark" style="padding-top: 10px">
        <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
            <div class="row" style="text-align: left;"">
                <div><h4><b>Metode CPI</b></h4>
                    <p>CPI (Cost Performance Index) adalah salah satu metode evaluasi kinerja yang digunakan dalam sistem pendukung pengambilan keputusan (SPK), khususnya dalam proyek manajemen. CPI digunakan untuk mengevaluasi efisiensi biaya dari suatu proyek atau kegiatan. Formula CPI dihitung dengan membandingkan biaya aktual yang dikeluarkan dengan biaya yang seharusnya dikeluarkan untuk mencapai tingkat kemajuan yang telah dicapai.</p>
                    <br/>
                    <h4><b>Tahapan Metode</b>
                    </h4><p>Berikut tahap dalam pengambilan keputusan menggunakan metode CPI, antara lain:</p>
                    <br/>

                    <h6>1. Pembentukkan Matrik Normalisasi</h6>
                    <img src="http://localhost:8000/assets/img/t1.png" style="width: 50%; padding-bottom: 20px">

                    <h6>2. Menghitung Nilai Indeks Alternatif</h6>
                    <img src="http://localhost:8000/assets/img/t2.png" style="width: 20%; padding-bottom: 20px">

                    <h6>3. Menghitung Nilai Indeks Gabungan</h6>
                    <img src="http://localhost:8000/assets/img/t3.png" style="width: 30%; padding-bottom: 20px">

                    <p style="font-size: 15px">
                    di mana,
                    <br/>
                    xij = Nilai Alternatif ke-I pada kriteria ke-j
                    <br/>
                    xij(min) = Nilai minimum pada kriteria ke-j
                    <br/>
                    rij+ = Nilai normalisasi tren positif untuk alternatif ke I pada kriteria ke-j 
                    <br/>
                    rij- = Nilai normalisasi tren negatif untuk alternatif ke I pada kriteria ke-j 
                    <br/>
                    wj = Nilai bobot kriteria 
                    </p>

                    <h4 style="padding-top: 25px"><b>Studi Kasus</b></h4><p>
                        Pada kasus ini terdapat 8 kriteria, yaitu Kualitas Produk, Waktu Pengiriman, Layanan, Harga, Biaya Pengiriman, Biaya Penyimpanan, Inovasi Produk, dan Fleksibilitas Pemesanan guna mengambil keputusan untuk <b> Seleksi Supplier Terbaik.</b> Dalam proses seleksi ini, perusahaan menggunakan metode Cost Performance Index (CPI) untuk 
                        mengevaluasi kinerja dari setiap supplier.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="http://localhost:8000/assets/img/beranda.png" class="img-fluid" alt="">
          <img src="http://localhost:8000/assets/img/koperasi.png" class="img-fluid" alt=""  style="padding-top: 360px">
        </div>
        </div>
        </div>
    </section>
@endsection
