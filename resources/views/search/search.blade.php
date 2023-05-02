@extends('layouts.main')

@section('container')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Search Data</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{-- <h5 class="mb-0">Basic Layout</h5>
                  <small class="text-muted float-end">Default label</small> --}}
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Nama File</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    placeholder="Nama File" />
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
            </div>
        </div>
        {{-- hasil pencarian --}}
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Hasil Pencarian</h4>
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card">
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>File Size</th>
                                        <th>Last Modified</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Laporan Akhir">
                                                    <i class="menu-icon tf-icons bx bx-detail"></i>
                                                    {{-- <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" /> --}}
                                                </li>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Laporan
                                                    Akhir</strong>
                                        </td>
                                        <td>177 MB</td>
                                        <td>
                                            May 7, 2023
                                        </td>
                                        <td>2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Laporan Akhir">
                                                    <i class="menu-icon tf-icons bx bx-detail"></i>
                                                    {{-- <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" /> --}}
                                                </li>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kas
                                                    Maret</strong>
                                        </td>
                                        <td>20 MB</td>
                                        <td>
                                            May 7, 2023
                                        </td>
                                        <td>2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Laporan Akhir">
                                                    <i class="menu-icon tf-icons bx bx-detail"></i>
                                                    {{-- <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" /> --}}
                                                </li>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kegiatan
                                                    Ramadhan</strong>
                                        </td>
                                        <td>100 MB</td>
                                        <td>
                                            May 7, 2023
                                        </td>
                                        <td>2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end hasil pencarian --}}
    </div>
    <!-- / Content -->
    @endsection
