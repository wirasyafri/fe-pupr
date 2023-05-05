@extends('layouts.main')

@section('customCss')
<link rel="stylesheet" href="../assets/css/yearpicker.css" />
@endsection
@section('container')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">FAQ</h4>

        <!-- Basic Layout -->
        <div class="row">
            {{-- <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ url('') }}/hehe" method="POST" enctype="multipart/form-data"
            class="user">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Nama File</label>
                <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nama File"
                    name="name" />
            </div>
            <div class="mb-3">
                <label for="html5-month-input" class="col-md-2 col-form-label">Tahun</label>
                <input type="text" class="yearpicker form-control" value="" />
            </div>
            <div class="mb-3">
                <label for="defaultSelect" class="form-label">Lokasi</label>
                <x-input.selectProvince />
            </div>
            <div class="mb-3">
                <label for="defaultSelect" class="form-label">Data</label>
                <select id="defaultSelect" class="form-select">
                    <option>Semua</option>
                    <option value="1">Data Primer</option>
                    <option value="2">Data Sekunder</option>
                    <option value="3">Dokumen</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="defaultSelect" class="form-label">Jenis Data</label>
                <select id="defaultSelect" class="form-select">
                    <option>Semua</option>
                    <option value="1">Topografi</option>
                    <option value="2">Data Geoteknik Tanah </option>
                    <option value="3">Data Kualitas Air</option>
                    <option value="3">Data Hidrometri</option>
                    <option value="3">Peta</option>
                    <option value="3">Gambar Teknis</option>
                    <option value="3">Data Hujan</option>
                    <option value="3">Laporan Akhir</option>
                    <option value="3">Dokumen Output</option>
                    <option value="3">Laporan Survey</option>
                    <option value="3">Laporan Lainnya</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="defaultSelect" class="form-label">Tipe Data</label>
                <select id="defaultSelect" class="form-select">
                    <option>Semua</option>
                    <option value="3">CAD</option>
                    <option value="3">DEM</option>
                    <option value="3">DOC</option>
                    <option value="3">DTM</option>
                    <option value="3">DWG</option>
                    <option value="3">PDF</option>
                    <option value="2">SHP</option>
                    <option value="1">XLS</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>
</div> --}}
<div class="col-md-12 col-lg-12">
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Ini Apa ?</h5>
            <p class="card-text">Ini web buat upload download data</p>
            {{-- <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a> --}}
        </div>
    </div>
</div>
<div class="col-md-12 col-lg-12">
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Yang bisa upload siapa ?</h5>
            <p class="card-text">Yang bisa upload ada user dengan role admin super</p>
            {{-- <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a> --}}
        </div>
    </div>
</div>
<div class="col-md-12 col-lg-12">
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">kenapa tidak bisa upload ?</h5>
            <p class="card-text">Servernya mungkin sibuk</p>
            {{-- <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a> --}}
        </div>
    </div>
</div>
</div>

<div class="col-md mb-4 mb-md-0">
    <small class="text-light fw-semibold">enak yang mana sir ?</small>
    <div class="accordion mt-3" id="accordionExample">
        <div class="card accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                    data-bs-target="#accordionOne" aria-expanded="false" aria-controls="accordionOne">
                    Hukum Riba Apa min ?

                </button>
            </h2>
            <div id="accordionOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Haraaamm, ini jelas jelas haram ya akhi ukhti
                </div>
            </div>
        </div>
        <div class="card accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                    data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                    Teman Saya ingin pacaran, bagaimana hukumnya ?
                </button>
            </h2>
            <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Allah Ta’ala berfirman,
                    <br>

وَلَا تَقْرَبُوا الزِّنَا إِنَّهُ كَانَ فَاحِشَةً وَسَاءَ سَبِيلًا
<br>
“Dan janganlah kamu mendekati zina; sesungguhnya zina itu adalah suatu perbuatan yang keji. Dan suatu jalan yang buruk.”
<br>
(QS. Al Isro’ [17] : 32)



                </div>
            </div>
        </div>
        <div class="card accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                    data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                    Ada Link Motivasi hidup ga min ?
                </button>
            </h2>
            <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LzILhKcZMGc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- / Content -->
@endsection

@section('customJS')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="../assets/js/yearpicker.js"></script>
@endsection
