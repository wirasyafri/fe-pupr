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
                {{-- <div class="card mb-4">
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
                </div> --}}

                <!-- Text alignment -->
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Quick Access</h4>
                <div class="row mb-5">
                    <div class="col" onclick="location.href='{{ url('') }}/entry';" style="cursor:pointer;">
                        <div class="card mb-3 p-2">
                            <div class="row">
                                <div class="col-md-4 m-0 text-center">
                                    <img src="{{ asset('assets/img/icons/docs/pdf-icon.png') }}"
                                        class="card-img" style="max-width: 100px;" alt="quick access document">
                                </div>
                                <div class="col-md-8 align-self-center">
                                    <div class="card-body px-0">
                                        <p class="card-text"  style="text-align: center; font-size:18px; ">Dokumen</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" onclick="location.href='{{ url('') }}/folder/data-primer';" style="cursor:pointer;">
                        <div class="card mb-3 p-2">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('assets/img/icons/folders/data-primer.png') }}"
                                        class="card-img img-fluid"  style="max-width: 100px;" alt="quick access document">
                                </div>
                                <div class="col-md-8 align-self-center">
                                    <div class="card-body px-2">
                                        <p class="card-text" style="text-align: center; font-size:18px;">Data Primer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" onclick="location.href='{{ url('') }}/folder/data-sekunder';" style="cursor:pointer;">
                        <div class="card mb-3 p-2" >
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('assets/img/icons/folders/data-sekunder.png') }}"
                                        class="card-img img-fluid"  style="max-width: 100px;" alt="quick access document">
                                </div>
                                <div class="col-md-8 align-self-center">
                                    <div class="card-body px-0">
                                        <p class="card-text"   style="text-align: center; font-size:18px;">Data Sekunder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Text alignment -->
                <!-- recent file -->
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Recent Files</h4>
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card">
                                @include('listData.tableOnly')
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end recent file --}}
            </div>
        </div>
        <!-- / Content -->
        @endsection
