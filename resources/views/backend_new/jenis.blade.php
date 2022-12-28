@extends('new_layouts.be_master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Jenis Posting
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
                                <div class="counter-title">Total Jenis</div>
                                <h5 class="sc-counter mt-3"> {{$total_jenis}} </h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="row">
                    <!--Grafik Berita Artikel-->
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modaladd"> Tambah Jenis Postingan</button>
                            </div>
                            <div class="card-title">
                                <h5> DATA JENIS POSTINGAN</h5>
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

<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md modal-dialog-centered modal-md" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-primary">
                <h6 class="modal-title text-white" id="exampleModalLabel">DATA BROADCAST BARU</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="formadd" method="POST" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                       
                        <div class="form-group">
                            <label form="judul_broadcast">Jenis</label>
                            <input type="text" class="form-control" id="jenis_name" name="jenis_name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary l-s-1 s-12 text-uppercase" value="TAMBAH DATA BARU"
                            id="btnadd" required>
                    </div>
                </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md modal-dialog-centered modal-md" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-primary">
                <h6 class="modal-title text-white" id="exampleModalLabel">DATA BROADCAST BARU</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="formedit" method="POST" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                       
                        <div class="form-group">
                            <label form="judul_broadcast">Jenis</label>
                            <input type="hidden" class="form-control" id="id" name="id">
                            <input type="text" class="form-control" id="jenis_name" name="jenis_name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary l-s-1 s-12 text-uppercase" value="TAMBAH DATA BARU"
                            id="btnedit" required>
                    </div>
                </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modaldel" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-danger">
                <h6 class="modal-title text-white" id="exampleModalLabel">HAPUS DATA</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="formdel" method="POST" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" id="id" name="id" required>
                        <u><h5 id="pertanyaan"><h5></u>
                        <br>
                        <h5 class="text-danger">Yakin menghapus Jenis Posting tersebut ?<h5>
                        <p class="text-danger">Jika data posting ini memiliki relasi dengan postingan, maka data jenis posting ini tidak dapat dihapus</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger l-s-1 s-12 text-uppercase" value="YA HAPUS"
                        id="btndel" required>
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

<script src="https://cdn.tiny.cloud/1/ugxr3g858dujcaxkbpc955v096pyy3twc4qp21awzic10swl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    $(document).ready(function() {
            var table = $('#example').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('page.jenis.backend') }}",
                columns: [{
                        "width":10,
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'jenis_name',
                        name: 'jenis_name'
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
                url: "{{ route('add.jenis.backend') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnadd').attr('disabled', 'disabled');
                    $('#btnadd').val('Process...');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formadd")[0].reset();
                        $('#btnadd').val('SUBMIT!');
                        $('#btnadd').attr('disabled', false);
                        var oTable = $('#example').dataTable();
                            oTable.fnDraw(false);
                            $('#modaladd').modal('hide');
                        toastr.success(response.message);
                        swal({
                            title: "SUCCESS!",
                            text: "BROADCAST DIPERBARUI!",
                            type: "success"
                        });
                    } else {
                        $("#formadd")[0].reset();
                        $('#btnadd').val('SUBMIT!');
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
                url: "{{ route('add.jenis.backend') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnedit').attr('disabled', 'disabled');
                    $('#btnedit').val('Process...');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formedit")[0].reset();
                        $('#btnedit').val('SUBMIT!');
                        $('#btnedit').attr('disabled', false);
                        var oTable = $('#example').dataTable();
                            oTable.fnDraw(false);
                            $('#modaledit').modal('hide');
                        toastr.success(response.message);
                        swal({
                            title: "SUCCESS!",
                            text: response.message,
                            type: "success"
                        });
                    } else {
                        $("#formedit")[0].reset();
                        $('#btnedit').val('SUBMIT!');
                        $('#btnedit').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#modaledit').modal('hide');
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                        swal({
                            title: "MAAF!",
                            text: response.message,
                            type: "error"
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#formdel').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('remove.jenis.backend') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#btndel').attr('disabled', 'disabled');
                        $('#btndel').val('Processing');
                    },
                    success: function(response) {
                        if (response.status == 200) {
                            $("#formdel")[0].reset();
                            var oTable = $('#example').dataTable();
                            oTable.fnDraw(false);
                            $('#btndel').val('YA HAPUS');
                            $('#btndel').attr('disabled', false);
                            $('#modaldel').modal('hide');
                            swal({
                                title: "OK!",
                                text: response.message,
                                type: "success"
                            });
                            toastr.warning(response.message);
                        } else {
                            $("#formdel")[0].reset();
                            $('#btndel').val('YA HAPUS');
                            $('#btndel').attr('disabled', false);
                            toastr.error(response.message);
                            $('#errList').html("");
                            $('#errList').addClass('alert alert-danger');
                            swal({
                                title: "MAAF!",
                                text: response.message,
                                type: "error"
                            });
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
                modal.find('.modal-body #id').val(id);
            })

            $('#modaledit').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var jenis_name = button.data('jenis_name')
                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #jenis_name').val(jenis_name);
            })
</script>
@endsection