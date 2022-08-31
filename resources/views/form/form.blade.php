@extends('new_layouts.form_master')

@section('judul')
    
@endsection


@section('style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

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
    <p>Tilawati Pusat | Nurul Falah Surabaya</p>
    <a href="/download-sertifikat/data" class="btn_1 rounded primary">Unduh Sertifikat</a>
    <a href="#start" class="btn_1 rounded mobile_btn yellow">Start Now!</a>
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
        <form id="formsurvey" method="post" enctype="multipart/form-data">@csrf
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard">

                <div class="step">
                    <h2 class="section_title">Data Santri</h2>
                    <h3 class="main_question">{{$form->nama_form}}</h3>
                    <div class="form-group">
                        <label for="nama_santri" class="text-capitalize">Nama Santri</label>
                        <input type="text" name="nama_santri" id="nama_santri"  class="form-control required">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir" class="text-capitalize">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir"  class="form-control required">
                    </div>
                    <label for="" style="font-size: 14px; margin-bottom: 20px">Tanggal Lahir</label>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-4">
                                <label for="tanggal_lahir">Tanggal</label>
                                <input type="number" name="tanggal_lahir" id="tanggal_lahir"  class="form-control required">
                            </div>
                            <div class="col-md-4 col-4">
                                <label for="bulan_lahir">Bulan</label>
                                <select name="bulan_lahir" class="form-control required" id="bulan_lahir">
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
                            <div class="col-md-4 col-4">
                                <label for="tahun_lahir">Tahun</label>
                                <input type="number" name="tahun_lahir" id="tahun_lahir"  class="form-control required">
                            </div>
                        </div>
                    </div>
                    <small>* Pastikan data benar </small>
                </div>

                <div class="step">
                    <h2 class="section_title">Data Orang Tua Santri</h2>
                    <h3 class="main_question">{{$form->nama_form}}</h3>
                    <div class="form-group">
                        <label for="nama_ortu" class="text-capitalize">Nama Ayah / Ibu</label>
                        <input type="text" name="nama_ortu" id="nama_ortu"  class="form-control required">
                    </div>
                    <div class="form-group">
                        <label for="hp_ortu" class="text-capitalize">No. HP Ayah / Ibu</label>
                        <input type="number" name="hp_ortu" id="hp_ortu"  class="form-control required">
                    </div>
                    
                    <small>* Pastikan data benar </small>
                </div>

                <div class="submit step" id="end">
                    <h2 class="section_title">Data Lembaga</h2>
                    <h3 class="main_question">{{$form->nama_form}}</h3>
                    <div class="form-group add_top_30">
                       
                        <label for="nama_lembaga" class="text-capitalize">Nama Lembaga</label>
                        <input type="text" name="nama_lembaga" id="nama_lembaga"  class="form-control required text-uppercase">
                    </div>
                    <div class="form-group">
                        
                        <label for="kabupaten" class="text-capitalize">KABUPATEN </label>
                        <select name="kabupaten_id" data-width="100%" id="kabupaten" class="form-control " style="font-size: 14px; height: 45px; text-transform: uppercase"  >
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        
                        <label for="kecamatan" class="text-capitalize">KECAMATAN </label>
                        <select name="kecamatan_id" data-width="100%" id="kecamatan" class="form-control " style="font-size: 14px; height: 45px; text-transform: uppercase"  >
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group add_bottom_30 add_top_20">
                        <label for="alamat" class="text-capitalize">Alamat Lengkap</label>
                        <textarea name="form-control" id="alamat" cols="30" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <button type="button" name="backward" class="backward">Prev</button>
                <button type="button" name="forward" class="forward">Next</button>
                <button  name="process" class="submit" data-toggle="modal" data-target="modalsubmit">Submit</button>
            </div>
            <!-- /bottom-wizard -->
        </form>
    </div>
    <!-- /Wizard container -->
</div>
@endsection

@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('b[role="presentation"]').hide();
    })
    $('#kabupaten').select2({
        // placeholder: '1. KABUPATEN',
        width: 'resolve',
        ajax: {
            url: '/fetch-kabupaten',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.nama_kabupaten,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('select[name="kabupaten_id"]').on('change', function() {
        var kabupaten_id = $(this).val();
        if(kabupaten_id) {
            $.ajax({
                url: '/fetch-kecamatan/' + kabupaten_id,
                type: "GET",
                dataType: "json",
                success:function(data) {                      
                    $('select[name="kecamatan_id"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="kecamatan_id"]').append('<option value="'+ value.id +'">'+ value.nama_kecamatan +'</option>');
                    });
                }
            });
        }else{
            $('select[name="kecamatan_id"]').empty().disabled();
        }
    });

    $('#formsurvey').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('form.submit') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    
                    success: function(response) {
                        if (response.status == 200) {
                            // $("#formsurvey")[0].reset();
                            // oTable.fnDraw(false);
                            // $('#btndel').val('YA HAPUS');
                            // $('#btndel').attr('disabled', false);
                            // $('#modaldel').modal('hide');
                            toastr.success(response.message);
                        } else {
                            // $("#formsubmit")[0].reset();
                            // $('#btndel').val('YA HAPUS');
                            // $('#btndel').attr('disabled', false);
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

<script>
    // $('form#wrapped').attr('action', 'send_email_1.php');
    $("#wizard_container").wizard({
        stepsWrapper: "#wrapped",
        submit: ".submit",
        unidirectional: false,
        // beforeSelect: function(event, state) {
        //     if ($('input#website').val().length != 0) {
        //         return false;
        //     }
        //     if (!state.isMovingForward)
        //         return true;
        //     var inputs = $(this).wizard('state').step.find(':input');
        //     return !inputs.length || !!inputs.valid();
        // }
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
@endsection