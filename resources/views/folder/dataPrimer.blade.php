@extends('layouts.main')

@section('container')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">List /</span>Data Primer</h4>

          <!-- Basic Layout -->
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
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td>
							<ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
							<li
							  data-bs-toggle="tooltip"
							  data-popup="tooltip-custom"
							  data-bs-placement="top"
							  class="avatar avatar-xs pull-up"
							  title="Laporan Akhir"
							>
							<i class="menu-icon tf-icons bx bx-detail"></i>
							  {{-- <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" /> --}}
							</li>
							<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Laporan Akhir</strong></td>
                          <td>177 MB</td>
                          <td>
                            May 7, 2023
                          </td>
                          <td>2022</td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
							<ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
							<li
							  data-bs-toggle="tooltip"
							  data-popup="tooltip-custom"
							  data-bs-placement="top"
							  class="avatar avatar-xs pull-up"
							  title="Laporan Akhir"
							>
							<i class="menu-icon tf-icons bx bx-detail"></i>
							  {{-- <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" /> --}}
							</li>
							<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Laporan Akhir</strong></td>
                          <td>177 MB</td>
                          <td>
                            May 7, 2023
                          </td>
                          <td>2022</td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
							<ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
							<li
							  data-bs-toggle="tooltip"
							  data-popup="tooltip-custom"
							  data-bs-placement="top"
							  class="avatar avatar-xs pull-up"
							  title="Laporan Akhir"
							>
							<i class="menu-icon tf-icons bx bx-detail"></i>
							  {{-- <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" /> --}}
							</li>
							<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Laporan Akhir</strong></td>
                          <td>177 MB</td>
                          <td>
                            May 7, 2023
                          </td>
                          <td>2022</td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-trash me-1"></i> Delete</a
                                >
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
