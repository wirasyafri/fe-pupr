@extends('layouts.main')

@section('container')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User /</span>List</h4>
        <!-- <div class="card mb-4 d-flex align-items-end"> -->
            <!-- <div class="card-body ">
                <div class="mx-auto">
                    <a href="{{ url('') }}/user/add" type="button" class="btn btn-lg btn-primary">+ User</a>
                </div>
            </div> -->
            <!-- <hr class="m-0" /> -->
        <!-- </div> -->
        <div class="row mb-4">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-body">

                        <form>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label" for="basic-default-fullname">Nama</label>
                                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nama" />
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label" for="basic-default-fullname">Username</label>
                                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="Username" />
                                </div>
                                <div class="col mb-3">
                                    <label for="defaultSelect" class="form-label">Kategori Admin</label>
                                    <select id="defaultSelect" class="form-select">
                                        {{-- <option>Default select</option> --}}
                                        <option value="1">Admin Super</option>
                                        <option value="2">Admin Basis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button type="submit" class="flex-fill btn btn-primary" style="height: 40px;">Cari</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="row mb-2 ">
                    <div class="col">
                        <h4 class="fw-bold py-2"><span class="text-muted fw-light"></span>Daftar User</h4>
                    </div>
                    <div class="col text-end">
                        <a href="{{ url('') }}/user/add" type="button" class=" p-auto btn btn-primary">Tambah User</a>
                    </div>
                </div>

                <div class="card mb-4">

                    <div class="card">
                        <div class="table-responsive text-nowrap">
                            <table class="table p-2">

                                {{-- <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Role</th>
                        </tr>
                      </thead> --}}
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="M Yasir">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>M
                                                    Yasir</strong>
                                        </td>
                                        <td>yasirm</td>
                                        <td>
                                            masyasir@gmail.com
                                        </td>
                                        <td>Super Admin</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Syafri Wira">
                                                    <img src="../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Syafri Wira</strong>
                                        </td>
                                        <td>wirasyafri</td>
                                        <td>
                                            wirasyafri@gmail.com
                                        </td>
                                        <td>Super Admin</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Anton Supardi">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Anton Supardi</strong>
                                        </td>
                                        <td>spranton</td>
                                        <td>
                                            antonsuper@gmail.com
                                        </td>
                                        <td>Super Admin</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Tono Subiryo">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tono Subiryo</strong>
                                        </td>
                                        <td>tnssubir</td>
                                        <td>
                                            tonosubiryo@gmail.com
                                        </td>
                                        <td>Super Admin</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Tono Subiryo">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Intan Rahmawati</strong>
                                        </td>
                                        <td>intan n nya tiga</td>
                                        <td>
                                            intanintan12@gmail.com
                                        </td>
                                        <td>Super Admin</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    @endsection