@extends('new_layouts.be_master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Kategori Posting
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-home2"></i>Today</a>
                    </li>
                </ul>
                <a class="btn-fab absolute fab-right-bottom btn-primary" data-toggle="control-sidebar">
                    <i class="icon icon-menu"></i>
                </a>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Today Tab Start-->
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-note-list text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">Total Kategori</div>
                                <h5 class="sc-counter mt-3"> {{$total_kategori}} </h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary" style="margin-bottom: 20px" data-toggle="modal" data-target="#modaladd">KATEGORI BARU</button>
                <div class="row">
                    <!--Grafik Berita Artikel-->
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                <h5> DATA KATEGORI</h5>
                            </div>
                            <div class="row my-3">
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
            <!--Today Tab End-->
        </div>
    </div>
</div>

<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formadd" method="POST"> @csrf
                <div class="modal-header" style="background-color: deepskyblue">
                    <h5 class="modal-title" id="modal_title_6" style="color: white">KATEGORI BARU</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="py-3 text-center">
                        {{-- <i class="fa fa-exclamation-circle fa-4x"></i> --}}

                        <div class="form-group">
                            <p>- KATEGORI</p>
                            <input type="text" name="name" class="form-control" placeholder="- INPUTKAN KATEGORI"
                                required>
                        </div>

                        <input type="hidden" name="id" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">YA HAPUS!.. SAYA YAQIN!</button> --}}
                    <input type="submit" class="btn btn-outline-primary btn-sm" id="btnadd" value="INPUT!">
                </div>
            </form>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
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
                        data: 'kategori_name',
                        name: 'kategori_name'
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

        $('#formadd').submit(function(e) {
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
                        $("#formadd")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#btnadd').val('INPUT!');
                        $('#btnadd').attr('disabled', false);
                        $('#modaladd').modal('hide');
                        toastr.success(response.message);
                    } else {
                        $("#formadd")[0].reset();
                        $('#btnadd').val('Add Product');
                        $('#btnadd').attr('disabled', false);
                        toastr.error(response.message);
                        $('#modaladd').modal('hide');
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
            console.log(name);
        })
</script>
@endsection