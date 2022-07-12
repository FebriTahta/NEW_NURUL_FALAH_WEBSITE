@extends('layouts.master_backend')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
    <div class="page">
        <div class="container-fluid">
            <div id="errList" class="text-uppercase">
            </div>
            <div class="row clearfix">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="header">
                            <h2>TABEL MEDIA SOCIAL</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-danger fade" id="modaldel" tabindex="-1" role="dialog" aria-labelledby="modal_5"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="formremove" method="POST"> @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_title_6">This is way to dangerous</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="py-3 text-center">
                            <i class="fa fa-exclamation-circle fa-4x"></i>
                            <h4 class="heading mt-4">Yakin akan menghapus Social Media tsb ?</h4>
                            <p>Social media ini ditampilkan pada slider awal landing page website.</p>
                            <input type="hidden" id="id" name="id" class="form-control">
                            <input type="hidden" id="img" name="img" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">YA HAPUS!.. SAYA YAQIN!</button> --}}
                        <input type="submit" class="btn btn-secondary btn-sm" id="btndell" value="YA HAPUS!.. SAYA YAQIN!">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="formedit" method="POST"> @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_title_6">Update Data Social Media</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="py-3">
                            {{-- <i class="fa fa-exclamation-circle fa-4x"></i> --}}
                            <div class="form-group">
                                <p>- NAMA SOCIAL MEDIA</p>
                                <input type="text" name="name" id="name" class="form-control" placeholder="- INPUTKAN NAMA"
                                    required>
                            </div>
                            <div class="form-group">
                                <p>- LINK SOCIAL MEDIA</p>
                                <input type="text" name="link" id="link" class="form-control" placeholder="- INPUTKAN LINK"
                                    required>
                            </div>
                            
                            <div class="form-group">
                                <div class="preview2">
                                    <img style="max-width: 100%" id="inputGroupFile02-preview">
                                </div>
                            </div>

                            <input type="hidden" id="id" name="id" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">YA HAPUS!.. SAYA YAQIN!</button> --}}
                        <input type="submit" class="btn btn-outline-primary btn-sm" id="btnedit" value="UPDATE!">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
    
    {{-- LOGIC --}}
    <script>
        
    </script>
@endsection
