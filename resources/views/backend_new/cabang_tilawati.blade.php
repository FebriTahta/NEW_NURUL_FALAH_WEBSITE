@extends('new_layouts.be_master')

@section('style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Cabang Pengguna Metode TILAWATI
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
    <hr>
    
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
                                <div class="counter-title">Total Cabang </div>
                                <h5 class="sc-counter mt-3" id="total_kategori">{{$total_cabang}}</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <button class="btn btn-primary btn-sm" style="margin-bottom: 20px" data-toggle="modal" data-target="#modalimport">Import Cabang</button>
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table table-responsive">
                                <div class="card-title">Cabang Tilawati</div>
                                <table id="table-data" class="display responsive table table-bordered table-hover data-tables">
                                    <thead style="font-size: 18px; font-weight: bold">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Cabang</th>
                                            <th>Kepala Cabang</th>
                                            <th>Asal Cabang</th>
                                            <th>Status</th>
                                            <th>Wilayah</th>
                                            <th style="width:5%">...</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Today Tab End-->
            <div class="tab-pane animated fadeInUpShort" id="v-pills-3">
                <div class="row">
                    <div class="col-md-4 mx-md-auto m-5">
                        <div class="card no-b shadow">
                            <div class="card-body p-4">
                                <div>
                                    <i class="icon-calendar-check-o s-48 text-primary"></i>
                                    <code class="p-t-b-20">Hey Soldier welcome back signin now there is lot
                                        of new stuff
                                        waiting
                                        for you</code>
                                </div>
                                <form action="dashboard2.html">
                                    <div class="form-group has-icon"><i class="icon-calendar"></i>
                                        <input class="form-control form-control-lg datePicker" placeholder="Date From"
                                            type="text">
                                    </div>
                                    <div class="form-group has-icon"><i class="icon-calendar"></i>
                                        <input class="form-control form-control-lg datePicker" placeholder="Date TO"
                                            type="text">
                                    </div>
                                    <input class="btn btn-success btn-lg btn-block" value="Get Data" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Yesterday Tab Start-->
        </div>
    </div>
</div>
<!-- Right Sidebar -->

<div class="modal fade" id="modalimport" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-success">
                <h6 class="modal-title text-white" id="exampleModalLabel">DATA BARU</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                   class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form action="/cabang-tilawati/import" method="POST" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div id="errList" class="text-uppercase">
                            {{-- ERROR MESSAGE VALIDATION --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label form="jenis_id" style="font-size: 14px" class="text-capitalize">Import Data Cabang </label><br>
                        <input type="file" class="" id="file" name="file" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success l-s-1 s-12 text-uppercase" value="IMPORT DATA CABANG" id="btnadd" required>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalwilayah" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md  modal-dialog-centered" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-success">
                <h6 class="modal-title text-white" id="exampleModalLabel">DATA BARU</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                   class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="form-wilayah" method="POST" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div id="errList" class="text-uppercase">
                            {{-- ERROR MESSAGE VALIDATION --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="id" name="id" required>
                        <select name="wilayah_id[]" id="wilayah" class="fomr-control select2" multiple>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success l-s-1 s-12 text-uppercase" value="Tambah Wilayah" id="btnwilayah" required>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalwilayahdel" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md  modal-dialog-centered" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-danger">
                <h6 class="modal-title text-white" id="exampleModalLabel">HAPUS WILAYAH</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                   class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="form-wilayah-del" method="POST" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div id="errList" class="text-uppercase">
                            {{-- ERROR MESSAGE VALIDATION --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-danger">Yakin akan menghapus Wilayah ini dari Cabang tersebut ?</p>
                        <b>Nama Cabang : <p id="nama_cabang"></p></b>
                        <b>Nama Wilayah : <p id="nama_wilayah"></p></b>
                        <input type="hidden" id="id" name="id" required>
                        <input type="hidden" id="wilayah_id" name="wilayah_id[]">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger l-s-1 s-12 text-uppercase" value="Hapus Wilayah" id="btnwilayahdel" required>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
           
           $('#table-data').DataTable({
                //karena memakai yajra dan template maka di destroy dulu biar ga dobel initialization
                dom: 'Bfrtip',
                buttons: [
                    'colvis'
                ],
               destroy: true,
               processing: true,
               serverSide: true,
               ajax: {
                   url: "/cabang-tilawati/index",
               },
               columns: [
                   {
                       "width": 10,
                       "data": null,
                       "sortable": false,
                       render: function(data, type, row, meta) {
                           return meta.row + meta.settings._iDisplayStart + 1;
                       }
                   },
                   {
                       data: 'nama_cabang',
                       name: 'nama_cabang'
                   },
                  
                   {
                       data: 'kepala_cabang',
                       name: 'kepala_cabang'
                   },

                   {
                       data: 'asal_cabang',
                       name: 'asal_cabang'
                   },

                   {
                       data: 'status_cabang',
                       name: 'status_cabang'
                   },

                   {
                       data: 'wilayah',
                       name: 'wilayah'
                   },

                   {
                       data: 'add_wilayah',
                       name: 'add_wilayah'
                   },
               ]
           });
       })

       $('#wilayah').select2({
            width: 'resolve',
            ajax: {
                url: '/cabang-wilayah/fetch',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.nama_wilayah,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });

        $('#modalwilayah').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);            
        })

        $('#modalwilayahdel').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var wilayah_id = button.data('wilayah_id')
            var nama_cabang = button.data('nama_cabang')
            var nama_wilayah = button.data('nama_wilayah')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);            
            modal.find('.modal-body #wilayah_id').val(wilayah_id);
            modal.find('.modal-body #nama_cabang').html(nama_cabang);
            modal.find('.modal-body #nama_wilayah').html(nama_wilayah);
        })

        $('#form-wilayah').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "/cabang-wilayah/add-cabang-wilayah",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnwilayah').attr('disabled', 'disabled');
                    $('#btnwilayah').val('Processing');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#form-wilayah")[0].reset();
                        $('#wilayah').val('');
                        var oTable = $('#table-data').dataTable();
                        oTable.fnDraw(false);
                        $('#btnwilayah').val('Tambah Wilayah!');
                        $('#btnwilayah').attr('disabled', false);
                        $('#modalwilayah').modal('hide');
                        toastr.success(response.message);
                    } else {
                        $("#form-wilayah")[0].reset();
                        $('#btnwilayah').val('Tambah Wilayah!');
                        $('#btnwilayah').attr('disabled', false);
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

        $('#form-wilayah-del').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "/cabang-wilayah/remove-cabang-wilayah",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnwilayahdel').attr('disabled', 'disabled');
                    $('#btnwilayahdel').val('Processing');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#form-wilayah-del")[0].reset();
                        var oTable = $('#table-data').dataTable();
                        oTable.fnDraw(false);
                        $('#btnwilayahdel').val('Hapus Wilayah!');
                        $('#btnwilayahdel').attr('disabled', false);
                        $('#modalwilayahdel').modal('hide');
                        toastr.success(response.message);
                    } else {
                        $("#form-wilayah-del")[0].reset();
                        $('#btnwilayahdel').val('Hapus Wilayah!');
                        $('#btnwilayahdel').attr('disabled', false);
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
</script>
@endsection