@extends('layouts.main')

@section('container')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Welcome Intan Rahmawati! 🎉</h5>
                                <p class="mb-4">
                                    {{-- You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                            your profile. --}}
                                </p>

                                {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> --}}
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- quick access --}}
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="demo-inline-spacing mx-auto">
                            <a href="{{ url('') }}/entry" type="button"
                                class="btn btn-lg btn-primary">+ Dokumen</a>
                            <a href="{{ url('') }}/folder/data-primer" type="button"
                                class="btn btn-lg btn-primary">List Dokumen Primer</a>
                            <a href="{{ url('') }}/user/add" type="button"
                                class="btn btn-lg btn-primary">+ User</a>
                        </div>
                    </div>
                    <hr class="m-0" />
                </div>
                <!-- recent file -->
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Recent Files</h4>
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
                                                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                        <strong>Laporan
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
                                                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                        <strong>Kas Maret</strong>
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
                                                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                        <strong>Kegiatan Ramadhan</strong>
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
                {{-- end recent file --}}
            </div>
        </div>
        <!-- / Content -->
        @endsection
