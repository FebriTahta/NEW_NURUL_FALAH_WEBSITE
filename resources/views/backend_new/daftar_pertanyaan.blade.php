@extends('new_layouts.be_master')

@section('style')
<style>
    .is-blurred {
        filter: blur(2px);
        -webkit-filter: blur(2px);
    }
</style>
@endsection

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        {{$form->nama_form}}
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
                                <div class="counter-title">Total Group</div>
                                <h5 class="sc-counter mt-3"> {{$total_group}} </h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-note-list text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">Total Pertanyaan</div>
                                <h5 class="sc-counter mt-3"> {{$total_pertanyaan}} </h5>
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
                                <h5 class="text-uppercase"> DATA PERTANYAAN PADA FORM : <br> {{$form->nama_form}}</h5>
                                <input type="hidden" id="slug_form" value="{{$form->slug_form}}">
                            </div>
                            <button class="btn btn-outline btn-primary btn-sm" data-toggle="modal" data-target="#modaladd"> Tambah Group Pertanyaan Baru (STEP)</button>
                            <div class="row my-3">
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-bordered table-striped table-hover js-basic-example dataTable text-capitalize">
                                        <thead>
                                            <tr>
                                                <th style="width:5%;  text-align: center">No</th>
                                                <th>Step</th>
                                                <th>Pertanyaan</th>
                                                <th style="width:8%; text-align: center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- data --}}
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width:5%;  text-align: center">No</th>
                                                <th>Step</th>
                                                <th>Pertanyaan</th>
                                                <th style="width:8%; text-align: center">Action</th>
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

{{-- modal --}}
<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-primary">
                <h6 class="modal-title text-white" id="exampleModalLabel">DATA STEP BARU</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="formadd" method="POST" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label form="pertanyaan">Step Pertanyaan...</label>
                        <input type="hidden" id="form_id" name="form_id" value="{{$form->id}}">
                        <input type="text" class="form-control" id="nama_group" name="nama_group" required>
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
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-primary">
                <h6 class="modal-title text-white" id="exampleModalLabel">UPDATE DATA</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="formedit" method="POST" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label form="pertanyaan">Step Pertanyaan...</label>
                        <input type="hidden" id="id" name="id" required>
                        <input type="hidden" id="form_id" name="form_id" value="{{$form->id}}" required>
                        <input type="text" class="form-control" id="nama_group" name="nama_group" required>
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
                        <h5 class="text-danger">Yakin menghapus pertanyaan tersebut ?<h5>
                        <p class="text-danger">Apabila ada jawaban dari pertanyaan ini maka jawaban tersebut juga akan terhapus</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger l-s-1 s-12 text-uppercase" value="YA HAPUS"
                        id="btnadd" required>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modaldelp" style="z-index:1000000000" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
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
                        <h5 class="text-danger">Yakin menghapus pertanyaan tersebut ?<h5>
                        <p class="text-danger">Apabila ada jawaban dari pertanyaan ini maka jawaban tersebut juga akan terhapus</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger l-s-1 s-12 text-uppercase" value="YA HAPUS"
                        id="btnadd" required>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-pertanyaan" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md modal-dialog-centered modal-lg" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-success">
                <h6 class="modal-title text-white" id="exampleModalLabel">DAFTAR PERTANYAAN : <span class="text-uppercase" id="nama_group"></span></h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="formdel" method="POST" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" id="id" name="id" required>
                        <div class="table-responsive">
                            <table id="tabel_pertanyaan" style="width: 100%"
                                class="table table-bordered table-striped table-hover js-basic-example dataTable text-capitalize">
                                <thead>
                                    <tr>
                                        <th style="width:10%">No</th>
                                        <th>Pertanyaan</th>
                                        <th style="width:10%">Tipe</th>
                                        <th>Pilihan</th>
                                        <th style="width:10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 12px">
                                    {{-- data --}}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="width:10%">No</th>
                                        <th>Pertanyaan</th>
                                        <th style="width:10%">Tipe</th>
                                        <th>Pilihan</th>
                                        <th style="width:10%">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modaladdper" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-success">
                <h6 class="modal-title text-white" id="exampleModalLabel">Pertanyaan Pada : <span id="nama_group" class="text-capitalize"></span></h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="formaddper" method="POST" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" id="id" name="grouppertanyaan_id" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis_pertanyaan"> Jenis Pertanyaan</label>
                        <select name="jenis_pertanyaan" id="jenis_pertanyaan" class="form-control">
                            <option value="text">Text</option>
                            <option value="textarea">Textarea</option>
                            <option value="radio">Radio button (single choice)</option>
                            <option value="check">Checkbox (multi choice)</option>
                            <option value="combo">Combo box</option>
                        </select>
                    </div>

                    <div class="form-group" id="pertanyaan_bebas">
                        <label form="pertanyaan">Pertanyaan baru...</label>
                        
                        <input type="text" class="form-control text-capitalize" id="pertanyaan" name="pertanyaan" >
                    </div>

                    <div class="field_pilihan" id="pilihan_pertanyaan"  style="display:none">
                        <div class="form-group" >
                            <div class="row">
                                <div class="col-sm-5">
                                    <input type="text" class="form-control text-capitalize" name="nama_pilihan[]" placeholder="option...">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control text-capitalize" name="nilai_pilihan[]" placeholder="value...">  
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary mb-3" id="add_button"><i class="bi bi-plus"></i>add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success l-s-1 s-12 text-uppercase" value="Submit"
                        id="btnper" required>
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
    $('#jenis_pertanyaan').on('change', function() {
        if (this.value == 'check' || this.value == 'radio' || this.value == 'combo') {
            document.getElementById("pilihan_pertanyaan").style.display = "";
            console.log('show');
        }else{
            console.log('hide');
            document.getElementById("pilihan_pertanyaan").style.display = "none";
        }
    })

    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('#add_button'); //Add button selector
        var wrapper = $('.field_pilihan'); //Input field wrapper
        var fieldHTML = '<div class="form-group add"><div class="row">';
        fieldHTML=fieldHTML + '<div class="col-md-5"><input class="form-control" placeholder="Option..." type="text" name="nama_pilihan[]" /></div>';
        fieldHTML=fieldHTML + '<div class="col-md-5"><input class="form-control" placeholder="Value..." type="text" name="nilai_pilihan[]" /></div>';
        fieldHTML=fieldHTML + '<div class="col-md-2"><a href="javascript:void(0);" class="remove_button btn btn-danger">dell</a></div>';
        fieldHTML=fieldHTML + '</div></div>'; 
        var x = 1; //Initial field counter is 1
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('').parent('').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });


    $(document).ready(function() {
       
        var slug_form = $('#slug_form').val();
            var table = $('#example').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: "/daftar-pertanyaan/"+slug_form,
                columns: [{
                        "width":10,
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'nama_group',
                        name: 'nama_group'
                    },
                    {
                        data: 'pertanyaan',
                        name: 'pertanyaan'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

            $('#formadd').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('be.grouppertanyaan.create') }}",
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
                            $('#btnadd').val('TAMBAH DATA BARU');
                            $('#btnadd').attr('disabled', false);
                            $('#modaladd').modal('hide');
                            toastr.success(response.message);
                        } else {
                            $("#formadd")[0].reset();
                            $('#btnadd').val('TAMBAH DATA BARU');
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
                    url: "{{ route('be.grouppertanyaan.create') }}",
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
                            $("#formedit")[0].reset();
                            var oTable = $('#example').dataTable();
                            oTable.fnDraw(false);
                            $('#btnedit').val('UPDATE DATA');
                            $('#btnedit').attr('disabled', false);
                            $('#modaledit').modal('hide');
                            toastr.success(response.message);
                        } else {
                            $("#formedit")[0].reset();
                            $('#btnedit').val('UPDATE DATA');
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

            $('#formdel').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('be.grouppertanyaan.remove') }}",
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
                            toastr.success(response.message);
                        } else {
                            $("#formdel")[0].reset();
                            $('#btndel').val('YA HAPUS');
                            $('#btndel').attr('disabled', false);
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

            $('#formaddper').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('be.pertanyaan.create') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#btnper').attr('disabled', 'disabled');
                        $('#btnper').val('Processing');
                    },
                    success: function(response) {
                        if (response.status == 200) {
                            $("#formaddper")[0].reset();
                            var oTable = $('#example').dataTable();
                            oTable.fnDraw(false);
                            $('#btnper').val('TAMBAH DATA BARU');
                            $('#btnper').attr('disabled', false);
                            $('#modaladdper').modal('hide');
                            toastr.success(response.message);
                        } else {
                            
                            $('#btnper').val('TAMBAH DATA BARU');
                            $('#btnper').attr('disabled', false);
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
    });

        $('#modaledit').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var nama_group = button.data('nama_group')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #nama_group').val(nama_group);
        })

        $('#modaldel').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var pertanyaan = button.data('pertanyaan')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #pertanyaan').html(pertanyaan);
        })

        $('#modal-pertanyaan').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var nama_group = button.data('nama_group')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-header #nama_group').html(nama_group);
            
            var tabel_pertanyaan = $('#tabel_pertanyaan').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: "/daftar-pertanyaan-data/"+id,
                columns: [{
                        "width":10,
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'pertanyaan',
                        name: 'pertanyaan'
                    },
                    {
                        data: 'jenis_pertanyaan',
                        name: 'jenis_pertanyaan'
                    },
                    {
                        data: 'pilihan',
                        name: 'pilihan'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
            
        })

        $('#modaladdper').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var nama_group = button.data('nama_group')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-header #nama_group').html(nama_group);            
        })
</script>
@endsection