@extends('layouts.main')

@section('container')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Entry Data</h4>

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
                      <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nama File" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Nama Kegiatan</label>
                      <input type="text" class="form-control" id="basic-default-company" placeholder="Nama Kegiatan" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Tahun Kegiatan</label>
                      <input class="form-control" type="date" value="" id="html5-date-input" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Jenis Data</label>
                      <input type="text" class="form-control" id="basic-default-company" placeholder="Jenis Data" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-message">Keterangan</label>
                      <textarea
                        id="basic-default-message"
                        class="form-control"
                        placeholder="Keterangan"
                      ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple />
                      </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Content -->
@endsection
