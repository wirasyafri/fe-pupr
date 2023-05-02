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
                      <label for="defaultSelect" class="form-label">Data</label>
                      <select id="defaultSelect" class="form-select">
                         <option>--Pilih Kategori Data--</option>
                          <option value="1">Data Primer</option>
                          <option value="2">Data Sekunder</option>
                          <option value="3">Dokumen</option>
                      </select>
                  </div>
                  <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Jenis Data</label>
                    <select id="defaultSelect" class="form-select">
                        <option>--Pilih Jenis Data--</option>
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
                    {{-- <div class="mb-3">
                      <label class="form-label" for="basic-default-message">Keterangan</label>
                      <textarea
                        id="basic-default-message"
                        class="form-control"
                        placeholder="Keterangan"
                      ></textarea>
                    </div> --}}
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Upload files</label>
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
