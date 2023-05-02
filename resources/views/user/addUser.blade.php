@extends('layouts.main')

@section('container')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah User</h4>

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
                      <label class="form-label" for="basic-default-fullname">Nama Lengkap</label>
                      <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nama Lengkap" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Username</label>
                      <input type="text" class="form-control" id="basic-default-company" placeholder="Username" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Email</label>
                      <input type="text" class="form-control" id="basic-default-company" placeholder="Email" />
                    </div>
                    <div class="mb-3">
                      <label for="defaultSelect" class="form-label">Role</label>
                        <select id="defaultSelect" class="form-select">
                          {{-- <option>Default select</option> --}}
                          <option value="1">Admin Super</option>
                          <option value="2">Admin Basis</option>
                          <option value="3">Admin TU</option>
                        </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Password</label>
                      <input class="form-control" type="password" id="html5-password-input" />
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Foto Profil</label>
                        <input class="form-control" type="file" id="formFileMultiple"/>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Content -->
@endsection
