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
                        DAFTAR BROADCAST
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
                                <div class="counter-title">Total Broadcast</div>
                                <h5 class="sc-counter mt-3"> {{$total_broadcast}} </h5>
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
                                <div class="counter-title">Total Target Keseluruhan</div>
                                <h5 class="sc-counter mt-3"> {{$total_target}} </h5>
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
                                <h5 class="text-uppercase"> DAFTAR BROADCAST</h5>
                            </div>
                            <button class="btn btn-outline btn-primary btn-sm" data-toggle="modal" data-target="#modaladd"> Buat Broadcast Baru</button>
                            <div class="row my-3">
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-bordered table-striped table-hover js-basic-example dataTable text-capitalize">
                                        <thead>
                                            <tr>
                                                <th style="width:5%;  text-align: center">No</th>
                                                <th>Admin</th>
                                                <th>Jenis</th>
                                                <th>Thumbnail</th>
                                                <th>Judul Broadcast</th>
                                                <th>Tanggal</th>
                                                <th>Target</th>
                                                <th style="width:8%; text-align: center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- data --}}
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width:5%;  text-align: center">No</th>
                                                <th>Admin</th>
                                                <th>Jenis</th>
                                                <th>Thumbnail</th>
                                                <th>Judul Broadcast</th>
                                                <th>Tanggal</th>
                                                <th>Target</th>
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
    <div class="modal-dialog modal-md modal-dialog-centered modal-lg" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-primary">
                <h6 class="modal-title text-white" id="exampleModalLabel">DATA BROADCAST BARU</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="formadd" method="POST" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label form="admin_broadcast">Pilih Nomor Admin</label>
                            <select name="admin_broadcast" class="form-control" id="admin_broadcast" required>
                                    <option value="">:: PILIH NOMOR PENGIRIM BROADCAST ::</option>
                                    <option value="6289523444715">Admin Tilawati (MB LULUK)</option>
                                    <option value="6287787280791">Admin Tilawati (SEMUA BIDANG)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label form="judul_broadcast">Judul Broadcast</label>
                            <input type="text" class="form-control" id="judul_broadcast" name="judul_broadcast" required>
                        </div>
                        <div class="form-group">
                            <label form="desc_broadcast">Deskripsi Broadcast</label>
                            <textarea name="desc_broadcast" id="desc_broadcast" class="form-control" cols="30" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis_broadcast">Jenis Broadcast</label>
                            <select name="jenis_broadcast" id="jenis_broadcast" class="form-control" required>
                                <option value="">-</option>
                                <option value="text">Text</option>
                                <option value="image">Image</option>
                                <option value="dokumen">Dokumen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label form="url_img">URL (File Wablas Image / Dokumen)</label>
                            <input type="text" class="form-control" id="url_img" name="url_img" >
                        </div>
                        {{-- <div class="form-group">
                            <code form="img_broadcast">Image Thumbnail (boleh dikosongi)</code><br>
                            <input type="file" class="" id="img_broadcast" style="max-width: 300px" name="img_broadcast">
                        </div>
                        <div class="form-group">
                            <img src="" id="preview2" class="img-thumbnail">
                        </div> --}}
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
                        <label form="judul_broadcast">Judul Broadcast</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" class="form-control" id="judul_broadcast" name="judul_broadcast" required>
                    </div>
                    <div class="form-group">
                        <label form="desc_broadcast">Deskripsi Broadcast</label>
                        <textarea name="desc_broadcast" id="desc_broadcast" class="form-control" cols="30" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <code form="img_broadcast2">Image Thumbnail (boleh dikosongi)</code><br>
                        <input type="file" class="" id="img_broadcast2" style="max-width: 300px" name="img_broadcast">
                    </div>
                    <div class="form-group">
                        <img src="" id="preview22" class="img-thumbnail">
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
                        <h5 class="text-danger">Yakin menghapus broadcast tersebut ?<h5>
                        <p class="text-danger">data target didalam broadcast tersebut juga akan ikut terhapus</p>
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
        $('#img_broadcast').change(function(e) {
            var fileName = e.target.files[0].name;
            // $("#img_thumbnail_jenis").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview2").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $('#img_broadcast2').change(function(e) {
            var fileName = e.target.files[0].name;
            // $("#img_thumbnail_jenis").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview22").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

    $(document).ready(function() {
        // tinymce.init({
        //     selector: 'textarea',
        //     content_style: "body { line-height: 1; }",
        //     plugins: 'image code',
        //     toolbar: 'undo redo | bold italic underline | link image | code',
        //     image_title: true,
        //     automatic_uploads: true,
        //     file_picker_types: 'image',
        //     file_picker_callback: function(cb, value, meta) {
        //         var input = document.createElement('input');
        //         input.setAttribute('type', 'file');
        //         input.setAttribute('accept', 'image/*');
        //         input.onchange = function() {
        //             var file = this.files[0];

        //             var reader = new FileReader();
        //             reader.onload = function() {
        //                 var id = 'blobid' + (new Date()).getTime();
        //                 var blobCache = tinymce.activeEditor.editorUpload.blobCache;
        //                 var base64 = reader.result.split(',')[1];
        //                 var blobInfo = blobCache.create(id, file, base64);
        //                 blobCache.add(blobInfo);

        //                 cb(blobInfo.blobUri(), {
        //                     title: file.name
        //                 });
        //             };
        //             reader.readAsDataURL(file);
        //         };

        //         input.click();
        //     },
        //     setup: function (editor) {
        //         editor.on('change', function () {
        //             editor.save();
        //         });
        //     }
        // });

            var table = $('#example').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: "{{route('page.broadcast.be')}}",
                columns: [{
                        "width":10,
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'admin',
                        name: 'admin'
                    },
                    {
                        data: 'jenis_broadcast',
                        name: 'jenis_broadcast'
                    },
                    {
                        data: 'img',
                        name: 'img'
                    },
                    {
                        data: 'judul_broadcast',
                        name: 'judul_broadcast'
                    },
                    {
                        data: 'tanggal',
                        name: 'tanggal'
                    },
                    {
                        data: 'target',
                        name: 'target'
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
                    url: "{{ route('store.broadcast.be') }}",
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

            $('#modaledit').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var judul_broadcast = button.data('judul_broadcast')
                var desc_broadcast = button.data('desc_broadcast')
                var img_broadcast = button.data('img_broadcast')
                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #judul_broadcast').val(judul_broadcast);
                modal.find('.modal-body #desc_broadcast').val(desc_broadcast);            
                modal.find('.modal-body #preview22').attr("src", img_broadcast);
                console.log(img_broadcast);
            })

            $('#formedit').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('store.broadcast.be') }}",
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
            $('#modaldel').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var modal = $(this)
                modal.find('.modal-body #id').val(id);
            })

            $('#formdel').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('remove.broadcast.be') }}",
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
                            toastr.warning(response.message);
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

            
    });
</script>
@endsection