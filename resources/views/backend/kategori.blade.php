@extends('layouts.master_backend')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
    <div class="page">

        <div class="container-fluid">
            <div id="errList" class="text-uppercase">
                {{-- ERROR MESSAGE VALIDATION --}}
            </div>
            <div class="row clearfix">
                <div class="col-xl-3">
                    <form id="formaddkategori" method="POST"> @csrf
                        <div class="card">
                            <div class="body">
                                <p>- KATEGORI</p>
                                <input type="text" name="name" class="form-control" placeholder="- INPUTKAN KATEGORI"
                                    required>
                            </div>

                            <div class="body">
                                <input type="submit" id="btnadd" class="form-control btn btn-primary" value="ADD KATEGORI!">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="header">
                            <h2>TABEL KATEGORI</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="example"
                                class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- data --}}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
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
                            <h4 class="heading mt-4">Yakin akan menghapus Kategori ini ?</h4>
                            <p>Kategori ini akan hilang pada setiap posting yang ada, dan kemungkinan dapat menyebabkan
                                error pada dokumentasi</p>
                            <input type="hidden" id="kategori_id" name="kategori_id" class="form-control">
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
                        <h5 class="modal-title" id="modal_title_6">Update Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="py-3 text-center">
                            {{-- <i class="fa fa-exclamation-circle fa-4x"></i> --}}

                            <div class="form-group">
                                <p>- KATEGORI</p>
                                <input type="text" name="name" id="name" class="form-control" placeholder="- INPUTKAN KATEGORI"
                                    required>
                            </div>

                            <input type="hidden" id="kategori_id" name="id" class="form-control">
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
        $(document).ready(function() {
            var table = $('#example').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('page.kategori.backend') }}",
                columns: [{
                        "width":10,
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
        });


        $('#formaddkategori').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('add.kategori.backend') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnadd').attr('disabled', 'disabled');
                    $('#btnadd').val('Processing');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formaddkategori")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#btnadd').val('ADD KATEGORI');
                        $('#btnadd').attr('disabled', false);
                        toastr.success(response.message);
                    } else {
                        $("#formaddkategori")[0].reset();
                        $('#btnadd').val('Add Product');
                        $('#btnadd').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#formedit').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('add.kategori.backend') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnedit').attr('disabled', 'disabled');
                    $('#btnedit').val('Processing');
                },
                success: function(response) {
                    if (response.status == 200) {
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#btnedit').val('UPDATE');
                        $('#btnedit').attr('disabled', false);
                        $('#modaledit').modal('hide');
                        toastr.success(response.message);
                    } else {
                        $('#btnedit').val('Add Product');
                        $('#btnedit').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#formremove').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('remove.kategori.backend') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btndell').attr('disabled', 'disabled');
                    $('#btndell').val('Processing');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formremove")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#btndell').val('YA HAPUS! SAYA YAKIN!');
                        $('#btndell').attr('disabled', false);
                        $('#modaldel').modal('hide');
                        toastr.success(response.message);
                    } else {
                        $("#formremove")[0].reset();
                        $('#btndell').val('YA HAPUS! SAYA YAKIN!');
                        $('#btndell').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#modaldel').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #kategori_id').val(id);
        })
        $('#modaledit').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-body #kategori_id').val(id);
            modal.find('.modal-body #name').val(name);
        })
    </script>
@endsection
