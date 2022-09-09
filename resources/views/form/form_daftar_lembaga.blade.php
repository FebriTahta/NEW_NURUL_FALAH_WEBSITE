@extends('new_layouts.form_master')

@section('judul')
<title style="text-transform: capitalize">{{ucwords($form->nama_form)}}</title>
<meta property="og:title" content="{{ucwords($form->nama_form)}}" style="text-transform: capitalize" />
<meta property="og:type" content="website" />
<meta property="og:image" content="{{$form->img_form}}" />
<meta property="og:description" content="Nurul Falah Surabaya (Tilawati Pusat)" />
<meta property="og:url" content="http://nurulfalah.org/{{$form->slug_form}}" />
<meta name="theme-color" content="#8CC0DE">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="twitter:card" content="summary_large_image">
<meta property='og:image:width' content='1200' />
<meta property='og:image:height' content='627' />
@endsection


@section('style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/ba62606529.js" crossorigin="anonymous"></script>
<style>
.select2-container--default .select2-selection--single{
    padding:6px;
    height: 45px;
    width: 100%; 
    font-size: 15px;  
    position: relative;
}
</style>
@endsection

@section('info')
<div>
    <figure><img src="{{$form->img_form}}" alt="" class="img-fluid" width="270" height="270"></figure>
    <h2 style="font-size: 20px">{{$form->nama_form}}</h2>
    <p id="slug_form">{{$form->slug_form}}</p>
    <p>Tilawati Pusat | Nurul Falah Surabaya</p>
    {{-- <a href="/download-sertifikat/data" class="btn_1 rounded primary">Unduh Sertifikat</a> --}}
    <a href="#start" class="btn btn-rounded btn-success mobile_btn" style="border-radius: 20px; box-shadow: 10px 10px 10px rgb(30, 99, 50); margin-left: 10px" id="starts">Mengisi Survey</a>
    <a href="#start2" class="btn btn-rounded btn-success mobile_btn" style="border-radius: 20px; box-shadow: 10px 10px 10px rgb(30, 99, 50); margin-left: 10px; display:none" id="starts2">Mengisi Survey</a>
</div>
<div class="copy">@ {{date('Y')}} Nurul Falah Surabaya</div>
@endsection


@section('form_content')
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">
        <div id="top-wizard">
            <span id="location"></span>
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->
        <form id="#" method="post" enctype="multipart/form-data">@csrf
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard">
                <div class="submit step" id="end">
                    <h2 class="section_title">{{$cabang->nama_cabang}}</h2>
                    <h3 class="main_question" style="font-size: 13px">Daftarkan lembaga anda / pilih lembaga anda pada daftar berikut ini</h3>
                    <div class="form-group"  id="tabel-wilayah">
                        <hr>
                        <a id="btnmendaftar" class="btn btn-sm btn-info" style="width:100%;" disabled>DAFTAR LEMBAGA : {{$wilayah->nama_wilayah}} !</a>
                        <input type="hidden" id="cabang_id" value="{{$cabang->id}}">
                        <input type="hidden" id="wilayah_id" value="{{$wilayah->id}}">
                        <input type="hidden" id="total_lembaga" value="{{$lembaga}}">
                        <hr>
                        {{-- @if ($lembaga > 0) --}}
                        <table id="table-data-lembaga" class="table table-bordered table-hover data-tables" style="margin-top: 20px; width:100%;">
                            <thead style="font-size: 13px">
                                <tr>
                                    <th style="margin-left: -5px">Lembaga</th>
                                    <th>Jenjang</th>
                                    <th style="width:10%">...</th>
                                </tr>
                            </thead>
                            <tbody class="text-capitalize" style="margin-left: 5px"></tbody>
                        </table>
                        {{-- @else --}}
                        <code id="lembagakosong" style="">Belum ada lembaga yang terdaftar. Daftarkan lembaga anda</code>
                        {{-- @endif --}}
                    </div>
                    
                </div>
            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <button type="button" data-toggle="modal" data-target="#modallembaga" data-kabupaten_id ="{{$wilayah->id}}" data-cabang_id="{{$cabang->id}}" 
                class="btn btn-sm text-white" style="background-color: rgb(60, 161, 101); margin-bottom: 20px"> <i class="fa fa-plus"></i> LEMBAGA BARU <i class="fa fa-back"></i></button>
            </div>
            <!-- /bottom-wizard -->
        </form>

        <div class="summary" style="margin-top: 50px">
            <h6>Bagikan Survey Ini</h6>
            <a class="btn btn-sm btn-social btn-success btn-in" href="https://wa.me/?text=https://nurulfalah.org/{{$form->slug_form}}" target="_blank" title="Share this post on LinkedIn">
                <i class="fa fa-whatsapp"></i> Whatsapp
            </a>
            <a class="btn btn-sm btn-social btn-primary btn-fb" href="https://www.facebook.com/sharer/sharer.php?u=https://nurulfalah.org/{{$form->slug_form}}" target="_blank" title="Share this post on Facebook">
                <i class="fa fa-facebook"></i> Facebook
            </a>
        </div>
        <center>
            <small style="font-size: 12px">
                © {{date('Y')}} {{$form->nama_form}}.<br>
            </small>
        </center>
    </div>
    <!-- /Wizard container -->
</div>

<div class="modal fade" id="modallembaga" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content b-0">
            <form id="formdaftar" method="POST" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div id="errList" class="text-uppercase">
                            {{-- ERROR MESSAGE VALIDATION --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="cabang_id" name="cabangbaru_id">
                        <input type="hidden" id="kabupaten_id" name="kabupaten_id">
                    </div>
                    <div class="form-group">
                        <label for="nama_lembaga" class="text-capitalize">Nama Lembaga </label>
                        <input type="text" class="form-control required text-capitalize" id="nama_lembaga" name="nama_lembaga" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="text-capitalize">Alamat Lengkap Lembaga</label>
                        <textarea name="alamat" class="form-control required" id="alamat" cols="30" rows="10" required></textarea>                        
                    </div>
                    <div class="form-group">
                        <label for="telp_lembaga" class="text-capitalize">Telpon Lembaga</label>
                        <input type="number" class="form-control required text-capitalize" id="telp_lembaga" name="telp_lembaga" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="jenis_pendidikan">Jenjang Pendidikan</label>
                                <select name="jenis_pendidikan" id="jenis_pendidikan" data-width="100%" class="form-control required" style="font-size: 14px; height: 45px; text-transform: capitalize"  required>
                                    <option value="formal">formal</option>
                                    <option value="non formal">non formal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="jenjang_pendidikan" class="text-capitalize">Jenjang Pendidikan<br></label>
                                <input type="text" id="jenjang_pendidikan" class="form-control required" style="text-transform: capitalize" name="jenjang_pendidikan" placeholder="SD / MI / TPQ" required>         
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success btn-sm btn-xs l-s-1 s-12 text-uppercase" value="Submit" id="btnadd" required>
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
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $("#starts").click();
        var cabang_id = $('#cabang_id').val();
        var wilayah_id = $('#wilayah_id').val();
        var total_lembaga = $('#total_lembaga').val();
        var slug_form = $('#slug_form').html();
        console.log(total_lembaga);
        if (total_lembaga > 0 || total_lembaga == null) {
            
            document.getElementById('lembagakosong').style.display = "none";
            document.getElementById('table-data-lembaga').style.display = "";
        }else{
            document.getElementById('lembagakosong').style.display = "";
            document.getElementById('table-data-lembaga').style.display = "none";
        }

        console.log(cabang_id);
        if (cabang_id) {
            $('#table-data-lembaga').DataTable({
                searching: true, 
                paging: false, 
                info: false,
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: "/fetch-lembaga-cabang/"+cabang_id+ '/' + wilayah_id + '/' + slug_form,
                columns: [
                    {
                        data: 'nama_lembaga',
                        name: 'nama_lembaga'
                    },
                    {
                        data: 'jenjang_pendidikan',
                        name: 'jenjang_pendidikan'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
        } 
    });

    $('#modallembaga').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var cabang_id = button.data('cabang_id')
            var kabupaten_id = button.data('kabupaten_id')
            var modal = $(this)
            modal.find('.modal-body #cabang_id').val(cabang_id);
            modal.find('.modal-body #kabupaten_id').val(kabupaten_id);
            console.log(name);
    })

    $('#formdaftar').submit(function(e) {
        var slug_form = $('#slug_form').html();
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('form.lembaga.store') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#btnadd').attr('disabled', 'disabled');
                        $('#btnadd').val('Processing');
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status == 200) {
                            $("#formdaftar")[0].reset();
                            var oTable = $('#table-data-lembaga').dataTable();
                            oTable.fnDraw(false);
                            $('#btnadd').val('Submit');
                            $('#btnadd').attr('disabled', false);
                            $('#modallembaga').modal('hide');

                            toastr.success(response.message);
                            swal({   
                                title: "Selamat! 🥳",
                                text: response.message,
                                type: "success"
                            }).then(okay => {
                                if (okay) {
                                    window.location.href = "/survey-lembaga/"+slug_form+"/"+response.lembaga;
                                }
                            });

                        } else {
                            $('#btnadd').val('Submit');
                            $('#btnadd').attr('disabled', false);
                            swal({
                                title: "Maaf! 🙏",
                                text: response.message,
                                type: "warning"
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


