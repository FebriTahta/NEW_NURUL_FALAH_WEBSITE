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
    <figure><img src="{{$form->img_form}}" alt="" class="img-fluid" style="max-width: 300px"></figure>
    <h2 style="font-size: 20px">{{$form->nama_form}}</h2>
    <p>Tilawati Pusat | Nurul Falah Surabaya</p>
    <a href="/download-sertifikat/{{$lembaga->id}}" id="unduh_sertifikat" class="btn btn-rounded btn-info" style="display:none;border-radius: 20px; box-shadow: 10px 10px 10px rgb(30, 99, 50); margin-right: 10px">Unduh Sertifikat </a> 
    <a href="#start" class="btn btn-rounded btn-success mobile_btn" style="border-radius: 20px; box-shadow: 10px 10px 10px rgb(30, 99, 50); margin-left: 10px" id="starts">Mengisi Survey</a>
    <p style="display: none" id="slug_form">{{$form->slug_form}}</p>
    <p style="display: none" id="slug_lembaga">{{$lembaga->slug_lembaga}}</p>
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
        
        <form id="formsubmit" method="post" enctype="multipart/form-data">@csrf
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="errList"></div>
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (isset($errors) && $errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif

            <div id="middle-wizard">
                <div class="step">
                    <div class="form-group">
                        <h2 class="section_title text-capitalize" style="font-size: 23px">Lembaga : {{$lembaga->jenjang_pendidikan}} - {{$lembaga->nama_lembaga}}</h2>
                        <h3 class="main_question" style="font-size: 14px; margin-top:0;">Dapatkan E Sertifikat setelah menambah / memperbarui data Santri & Guru</h3>
                        
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <a href="/download/template/data-santri" type="button" class="btn btn-sm btn-outline-primary" style="width:100%">Template Santri</a>
                            </div>
                            <div class="col-md-6 col-6">
                                <a data-bs-toggle="modal" data-bs-target="#modalimport" type="button" class="btn btn-sm btn-outline-success" style="width:100%">Import Data Santri</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <a href="/download/template/data-guru" type="button" class="btn btn-sm btn-outline-primary" style="width:100%">Template Guru</a>
                            </div>
                            <div class="col-md-6 col-6">
                                <a data-bs-toggle="modal" data-bs-target="#modalimport2" type="button" class="btn btn-sm btn-outline-success" style="width:100%">Import Data Guru</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row" >
                        <div class="col-md-3 col-3">
                            <h5>TOTAL </h5>
                        </div>
                        <div class="col-md-9 col-9" style="text-align: right">
                            @if ($lembaga->santri->count() > 0)
                                @php
                                    $last_santri = App\Models\Santri::where('lembaga_id', $lembaga->id)->orderBy('updated_at','desc')->first();    
                                @endphp
                                <span style="font-size: 15px"><u id="total_santri">{{$lembaga->santri->count()}}</u> Santri,<br> updated <u>{{\Carbon\Carbon::parse($last_santri->updated_at)->format('F Y')}}</u></span>
                            @else
                                <span> 0 - Santri</span>
                            @endif
                        </div>
                        <div class="col-md-3 col-3">
                            <h5> </h5>
                        </div>
                        <div class="col-md-9 col-9"  style="text-align: right">
                            @if ($lembaga->guru->count() > 0)
                                @php
                                    $last_guru = App\Models\Guru::where('lembaga_id', $lembaga->id)->orderBy('updated_at','desc')->first();    
                                @endphp
                                <span style="font-size: 15px"><u id="total_guru">{{$lembaga->guru->count()}}</u> Guru / Pengajar,<br> updated <u>{{\Carbon\Carbon::parse($last_guru->updated_at)->format('F Y')}}</u></span>
                            @else
                                <span> 0 - Guru</span>
                            @endif
                        </div>
                    </div>
                    {{-- <div class="form-group add_top_30">
                        <label for="nama_santri">Total Santri : 30 Santri</label>
                        <input type="text" name="nama_santri" id="nama_santri" class="form-control required" required>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control required" required>
                        <input type="hidden" name="form_id" value="{{$form->id}}">
                        <input type="hidden" name="lembaga_id" value="{{$lembaga->id}}">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4 col-4">
                                <label for="tanggal">Tanggal</label>
                                <input type="number" name="tanggal" id="tanggal" class="form-control required" required>
                            </div>
                            <div class="col-sm-4 col-4">
                                <label for="bulan">Bulan</label>
                                <select name="bulan" id="bulan" class="form-control required" required>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="col-sm-4 col-4">
                                <label for="tahun">Tahun</label>
                                <input type="text" name="tahun" id="tahun" class="form-control required" required>
                            </div>
                        </div>
                    </div>
                    <label>Jenis Kelamin</label>
                    <div class="form-group radio_input">
                        <label class="container_radio mr-3">Laki-laki
                            <input type="radio" name="jenis_kelamin" value="L" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio">Perempuan
                            <input type="radio" name="jenis_kelamin" value="P" class="required">
                            <span class="checkmark"></span>
                        </label>
                    </div> --}}
                </div>
                <!-- /step-->

                <!-- /Start Branch ============================== -->
                
                <!-- /step-->

                <div class="submit step" id="end">
                    <div class="form-group add_top_30">
                        <label for="nama_ortu">Nama Orang Tua (Ayah / Ibu)</label>
                        <input type="text" name="nama_ortu" id="nama_ortu" class="form-control required text-capitalize" required>
                    </div>

                    <div class="form-group add_top_30">
                        <label for="hp_ortu">Nomor HP (Ayah / Ibu)</label>
                        <input type="number" name="hp_ortu" id="hp_ortu" class="form-control required text-capitalize" required>
                    </div>
                </div>
                <!-- /step last-->

            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <a href="/{{$form->slug_form}}" class="btn btn-info"><i class="fa fa-backward"></i> KEMBALI</a>
                <a href="/display-sertifikat/{{$form->slug_form}}/{{$lembaga->id}}" target="_blank" style="display: none" class="btn btn-success"><i class="fa fa-download"></i> UNDUH SERTIFIKAT</a>
                <a href="/download-sertifikat/{{$lembaga->id}}" target="_blank" class="btn btn-success"><i class="fa fa-download"></i> UNDUH SERTIFIKAT</a>
                {{-- <button type="button" name="backward" class="backward" style="min-width: 105px">Sebelumnya</button>
                <button type="button" name="forward" class="forward">Next</button>
                <button type="submit" name="process" class="submit">Submit</button> --}}
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

<!-- Modal terms -->
<div class="modal fade" id="modalimport" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="formimport" action="/upload/template/data-santri" method="POST" enctype="multipart/form-data"> @csrf
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">Upload Data Santri</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group add_bottom_30 add_top_20">
                        <label><small style="font-size: 12px">(Pastikan format mengikuti template yang sudah disediakan dengan format excel / .xlsx)</small></label>
                        <div class="fileupload">
                            <input type="hidden" name="form_id" value="{{$form->id}}">
                            <input type="hidden" name="lembaga_id" value="{{$lembaga->id}}">
                            <input type="file" name="file" accept=".xlsx" class="required">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_1" data-bs-dismiss="modal">Import</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modalimport2" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="formimport" action="/upload/template/data-guru" method="POST" enctype="multipart/form-data"> @csrf
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">Upload Data Guru</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group add_bottom_30 add_top_20">
                        <label><small style="font-size: 12px">(Pastikan format mengikuti template yang sudah disediakan dengan format excel / .xlsx)</small></label>
                        <div class="fileupload">
                            <input type="hidden" name="lembaga_id" value="{{$lembaga->id}}">
                            <input type="file" name="file" accept=".xlsx" class="required">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_1" data-bs-dismiss="modal">Import</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
   $(document).ready(function () {
        $('b[role="presentation"]').hide();
        $('#starts').click();
        var total_guru = $('#total_guru').html();
        var total_santri = $('#total_santri').html();
        
        if (total_guru > 0 && total_santri > 0) {
            document.getElementById("unduh_sertifikat").style.display = "";
        }
    })


    $('#formsubmit').submit(function(e) {
        var slug_form = $('#slug_form').html();
        var slug_lembaga = $('#slug_lembaga').html();
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "/survey-lembaga-store-santri",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    
                    success: function(response) {
                        console.log(response);
                        if (response.status == 200) {
                            
                            toastr.success(response.message);
                            swal({
                                title: "Selamat! 🥳",
                                text: response.message,
                                type: "success"
                            }).then(okay => {
                                if (okay) {
                                    window.location.href = "/survey-lembaga/"+slug_form+"/"+slug_lembaga;
                                }
                            });

                        }  else {
                            swal({
                                title: "Maaf! 🙏",
                                text: response.message,
                                type: "warning"
                            }).then(okay => {
                                if (okay) {
                                    $('#starts').click();
                                }
                            });
                        }
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });

            // $('#formimport').submit(function(e) {
            //     e.preventDefault();
            //     var formData = new FormData(this);
            //     $.ajax({
            //         type: 'POST',
            //         url: "/upload/template/data-santri",
            //         data: formData,
            //         cache: false,
            //         contentType: false,
            //         processData: false,
                    
            //         success: function(response) {
            //             console.log(response);
            //             swal({
            //                     title: "tes! 🥳",
            //                     text: response.data,
            //                     type: "success"
            //                 })
            //         },
            //         error: function(data) {
            //             console.log(data);
            //         }
            //     });
            // });

</script>

<script>
    $("#wizard_container").wizard({
        stepsWrapper: "#wrapped",
        submit: ".submit",
        unidirectional: false,
    }).validate({
        errorPlacement: function(error, element) {
            if (element.is(':radio') || element.is(':checkbox')){
                error.insertBefore(element.next());
            } else {
                error.insertAfter(element);
            }
        }
    });
</script>

<script>
    
</script>
@endsection