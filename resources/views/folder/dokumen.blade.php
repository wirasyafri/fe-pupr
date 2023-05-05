@extends('layouts.main')

@section('container')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">List /</span>Dokumen</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card">
                        @include('listData.tableAction')
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- preview dokumen --}}
    {{-- <div id="modal_preview" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" style="width: 100%">
            <div class="modal-content" style="width: 150%">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <iframe id="modal_preview_detail" name="modal_preview_detail" width="100%" height="850px"></iframe>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- end preview dokumen --}}

    {{-- test preview dokumen 2 --}}
    <div class="modal fade" id="modal_preview" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Preview Dokumen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe id="modal_preview_detail" name="modal_preview_detail" width="100%" height="750px"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection


@section('customJS')

<script>
    function openPopUp() {
        // var popup = document.getElementById('popup-iframe');
        // popup.style.display = 'block';
        $("#modal_preview_detail").attr("src",
            "{{ asset('assets/dokumen/desain ke 2.pdf') }}")
        $("#modal_preview").modal("show");

    }

</script>
@endsection
