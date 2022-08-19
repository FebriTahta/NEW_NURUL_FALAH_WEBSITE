@extends('new_layouts.be_master')

@section('content')
    <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon-box"></i>
                            DAFTAR FORMS
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
                                    <div class="counter-title">Total Seluruh Form </div>
                                    <h5 class="sc-counter mt-3" id="total_kategori"> {{$forms->count()}}</h5>
                                </div>
                                <div class="progress progress-xs r-0">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="128"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary btn-sm" style="margin-bottom: 20px" data-toggle="modal"
                        data-target="#modaladd">Create New Form</button>
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($message = Session::get('danger'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    
                    <div class="row">
                        @foreach ($forms as $item)
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header  white">
                                        <strong class="text-capitalize"> {{$item->nama_form}} </strong>
                                    </div>
                                    <div class="card-body p-0">
                                        <!-- Big Heading -->
                                        <div class="text-center bg-light b-b p-3">
                                            <img src="{{$item->img_form}}"
                                                style="max-width: 100%" alt="">
                                        </div>
                                        <ul class="list-group list-group-flush no-b">
                                            <li class="list-group-item">
                                                <i class="icon-settings text-blue"></i>
                                                @if($item->grouppertanyaan->count() > 0)
                                                <span style="color:blue">{{$item->grouppertanyaan->count()}} Group Pertanyaan</span>
                                                @else
                                                <span style="color:red">Belum ada Pertanyaan</span>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer white">
                                        <a href="/{{$item->slug_form}}" target="_blank"
                                            class="btn btn-xs text-white btn-info">Link
                                            Form</a>
                                        <a href="/daftar-pertanyaan/{{$item->slug_form}}"
                                            class="btn btn-outline-success btn-xs">Pertanyaan</a>
                                        <a href="#" data-id="{{$item->id}}" data-img_form="{{$item->img_form}}" data-nama_form="{{$item->nama_form}}" 
                                            data-jenis_form="{{$item->jenis_form}}" class="btn btn-outline-primary btn-xs" data-toggle="modal"
                                            data-target="#modaledit" data-slug_form="{{$item->slug_form}}">Update</a>
                                        <a href="#" class="btn btn-outline-danger btn-xs" data-toggle="modal" data-id="{{$item->id}}" 
                                             data-img_form="{{$item->img_form}}" 
                                            data-target="#modaldel">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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

    <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content b-0">
                <div class="modal-header r-0 bg-primary">
                    <h6 class="modal-title text-white" id="exampleModalLabel">DATA BARU</h6>
                    <a href="#" data-dismiss="modal" aria-label="Close"
                        class="paper-nav-toggle paper-nav-white active"><i></i></a>
                </div>
                <form id="formadd" method="POST" enctype="multipart/form-data"
                    action="{{ route('be.form.create') }}">@csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label form="nama_form">Nama Form Baru</label>
                            <input type="text" class="form-control" id="nama_form1" name="nama_form" onkeyup="createTextSlug()" required>
                        </div>
                        <div class="form-group">
                            <label form="slug_form">Slug Form</label><span class="text-danger"> (url / link bersifat unique)</span>
                            <input type="text" class="form-control" id="slug_form1" name="slug_form" required>
                        </div>
                        <div class="form-group">
                            <label form="jenis_form">Jenis Form ?</label>
                            <select name="jenis_form" class="form-control" id="jenis_form">
                                <option value="survey">Survey (isian bebas)</option>
                                <option value="multi_poin">Penilaian (multi poin)</option>
                                <option value="single_poin">Penilaian (single poin)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <code form="nama_jenis">Image Thumbnail </code><br>
                            <input type="file" class="" id="img_thumbnail_jenis" name="img_form" required>
                        </div>
                        <div class="form-group">
                            <img src="" id="preview2" class="img-thumbnail">
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
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content b-0">
                <div class="modal-header r-0 bg-primary">
                    <h6 class="modal-title text-white" id="exampleModalLabel">UPDATE DATA</h6>
                    <a href="#" data-dismiss="modal" aria-label="Close"
                        class="paper-nav-toggle paper-nav-white active"><i></i></a>
                </div>
                <form id="formadd" method="POST" enctype="multipart/form-data"
                    action="{{ route('be.form.create') }}">@csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id">
                            <label form="nama_form">Nama Form Baru</label>
                            <input type="text" class="form-control" id="nama_form" onkeyup="createTextSlug2()" name="nama_form" required>
                        </div>
                        <div class="form-group">
                            <label form="slug_form">Slug (url / link bersifat unique)</label>
                            <input type="text" class="form-control" id="slug_form" name="slug_form" required>
                        </div>
                        <div class="form-group">
                            <label form="jenis_form">Jenis Form ?</label>
                            <select name="jenis_form" class="form-control" id="jenis_form">
                                <option value="survey">Survey (isian bebas)</option>
                                <option value="multi_poin">Penilaian (multi poin)</option>
                                <option value="single_poin">Penilaian (single poin)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <code form="nama_jenis">Image Thumbnail </code><br>
                            <input type="file" class="" name="img_form">
                        </div>
                        <div class="form-group">
                            <img src="" id="img_form" class="img-thumbnail">
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

    <div class="modal modal-danger fade" id="modaldel" tabindex="-1" role="dialog" aria-labelledby="modal_5"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{route('be.form.remove')}}" enctype="multipart/form-data" method="POST"> @csrf
                    <div class="modal-header bg-danger text-white" >
                        <h5 class="modal-title" id="modal_title_6">This is way to dangerous</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="py-3 text-center">
                            <i class="fa fa-exclamation-circle fa-4x"></i>
                            <h4 class="heading mt-4 text-danger">Yakin akan menghapus Dasa Survey tsb ?</h4>
                            <p class="text-bold">Apabila survey tersebut terdapat hasil / nilai maka seluruhnya juga akan ikut terhapus</p>
                            <input type="hidden" id="id" name="id">
                            <input type="hidden" id="thumbnail" name="img_form">
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">YA HAPUS!.. SAYA YAQIN!</button> --}}
                        <input type="submit" class="btn btn-danger btn-sm" id="btndell" value="YA HAPUS!.. SAYA YAQIN!">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#img_thumbnail_jenis').change(function(e) {
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

        $('#img_jenis2').change(function(e) {
            var fileName = e.target.files[0].name;
            // $("#img_thumbnail_jenis").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview_e").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });
        $('#img_thumbnail_jenis2').change(function(e) {
            var fileName = e.target.files[0].name;
            // $("#img_thumbnail_jenis").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview2_e").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $(document).ready(function() {

        })

        // $('#formadd').submit(function(e) {
        //     e.preventDefault();
        //     var formData = new FormData(this);
        //     $.ajax({
        //         type: 'POST',
        //         url: "{{ route('be.form.create') }}",
        //         data: formData,
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         beforeSend: function() {
        //             $('#btnadd').attr('disabled', 'disabled');
        //             $('#btnadd').val('Processing');
        //         },
        //         success: function(response) {
        //             if (response.status == 200) {
        //                 $("#formadd")[0].reset();
        //                 var oTable = $('#table-data').dataTable();
        //                 oTable.fnDraw(false);
        //                 $('#btnadd').val('UPDATE DATA');
        //                 $('#btnadd').attr('disabled', false);
        //                 $('#modaladd').modal('hide');
        //                 toastr.success(response.message);
        //             } else {
        //                 $("#formadd")[0].reset();
        //                 $('#btnadd').val('UPDATE DATA');
        //                 $('#btnadd').attr('disabled', false);
        //                 toastr.error(response.message);
        //                 $('#errList').html("");
        //                 $('#errList').addClass('alert alert-danger');
        //                 $.each(response.errors, function(key, err_values) {
        //                     $('#errList').append('<div>' + err_values + '</div>');
        //                 });
        //             }
        //         },
        //         error: function(data) {
        //             console.log(data);
        //         }
        //     });
        // });

        $('#modaldel').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var img_form = button.data('img_form')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #thumbnail').val(img_form);
        })

        $('#modaledit').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var img_form = button.data('img_form')
            var slug_form = button.data('slug_form')
            var nama_form = button.data('nama_form')
            var jenis_form = button.data('jenis_form')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #nama_form').val(nama_form);
            modal.find('.modal-body #jenis_form').val(jenis_form);
            modal.find('.modal-body #slug_form').val(slug_form);
            modal.find('.modal-body #img_form').attr("src", img_form);
            console.log(slug_form);
        })

        //create
        function createTextSlug()
        {
            var title = document.getElementById("nama_form1").value;
                        document.getElementById("slug_form1").value = generateSlug(title);
        }
        function generateSlug(text)
        {
            return text.toString().toLowerCase()
                .replace(/^-+/, '')
                .replace(/-+$/, '')
                .replace(/\s+/g, '-')
                .replace(/\-\-+/g, '-')
                .replace(/[^\w\-]+/g, '');
        }
        //update
        function createTextSlug2()
        {
            var title = document.getElementById("nama_form").value;
                        document.getElementById("slug_form").value = generateSlug(title);
        }
        function generateSlug(text)
        {
            return text.toString().toLowerCase()
                .replace(/^-+/, '')
                .replace(/-+$/, '')
                .replace(/\s+/g, '-')
                .replace(/\-\-+/g, '-')
                .replace(/[^\w\-]+/g, '');
        }

        // $('#formremove').submit(function(e) {
        //     e.preventDefault();
        //     var formData = new FormData(this);
        //     $.ajax({
        //         type: 'POST',
        //         url: "{{ route('remove.posting.backend') }}",
        //         data: formData,
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         beforeSend: function() {
        //             $('#btndell').attr('disabled', 'disabled');
        //             $('#btndell').val('Processing');
        //         },
        //         success: function(response) {
        //             if (response.status == 200) {
        //                 $("#formremove")[0].reset();
        //                 var oTable = $('#example').dataTable();
        //                 oTable.fnDraw(false);
        //                 $('#btndell').val('YA HAPUS! SAYA YAKIN!');
        //                 $('#btndell').attr('disabled', false);
        //                 $('#modaldel').modal('hide');
        //                 toastr.success(response.message);
        //             } else {
        //                 $("#formremove")[0].reset();
        //                 $('#btndell').val('YA HAPUS! SAYA YAKIN!');
        //                 $('#btndell').attr('disabled', false);
        //                 toastr.error(response.message);
        //                 $('#errList').html("");
        //                 $('#errList').addClass('alert alert-danger');
        //                 $.each(response.errors, function(key, err_values) {
        //                     $('#errList').append('<div>' + err_values + '</div>');
        //                 });
        //             }
        //         },
        //         error: function(data) {
        //             console.log(data);
        //         }
        //     });
        // });
    </script>
@endsection
