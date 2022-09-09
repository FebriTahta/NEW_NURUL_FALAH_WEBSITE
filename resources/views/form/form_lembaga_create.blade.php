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
    <p>Tilawati Pusat | Nurul Falah Surabaya</p>
    {{-- <a href="/download-sertifikat/data" class="btn_1 rounded primary">Unduh Sertifikat</a> --}}
    <a href="#start" class="btn btn-rounded btn-success mobile_btn" style="border-radius: 20px; box-shadow: 10px 10px 10px rgb(30, 99, 50); margin-left: 10px" id="starts">Mengisi Survey</a>
    <p style="display: none" id="slug_form">{{$form->slug_form}}</p>
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
        
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <form id="formdaftar" method="post" enctype="multipart/form-data">@csrf
            <div id="middle-wizard">
                <div class="submit step" id="end">
                    <h2 class="section_title">Mendaftakan Lembaga</h2>
                    <h3 class="main_question" style="font-size: 13px">KEC. {{$kecamatan->nama_kecamatan}} | {{$kabupaten->nama_kabupaten}}</h3>
                    <div class="form-group">
                        <label for="nama_lembaga" class="text-capitalize">NAMA LEMBAGA </label>
                        <input type="text" class="form-control required" id="nama_lembaga" name="nama_lembaga" required>
                        <input type="hidden" value="{{$kabupaten->id}}" name="kabupaten_id">
                        <input type="hidden" value="{{$kecamatan->id}}" name="kecamatan_id">
                    </div>
                    <div class="form-group">
                        <code style="font-size: 12px">[ Tuliskan alamat lengkap tanpa kecamatan & kota ]</code>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="text-capitalize">Alamat <br><code>[tanpa kecamatan dan kota]</code></label>
                        <textarea name="alamat" class="form-control required" id="alamat" cols="30" rows="10" required></textarea>                        
                    </div>
                    <div class="form-group">
                        <code style="font-size: 12px">[ jenjang pendidikan : SD / MI / TPQ / dll ]</code>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-6">
                                <label for="jenis_pendidikan" class="text-capitalize">Jenis</label>
                                <select name="jenis_pendidikan" id="jenis_pendidikan" data-width="100%" class="form-control required" style="font-size: 14px; height: 45px; text-transform: uppercase"  required>
                                    <option value="formal">formal</option>
                                    <option value="non formal">non formal</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-6">
                                <label for="jenjang_pendidikan" class="text-capitalize">Jenjang<br></label>
                                <input type="text" id="jenjang_pendidikan" class="form-control required" style="text-transform: uppercase" name="jenjang_pendidikan" placeholder="SD / MI / TPQ" required>         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <a href="/{{$form->slug_form    }}" style="margin-bottom: 20px" class="btn btn-sm btn-info"><i class="fa fa-backward"></i> KEMBALI !</a>
                <button type="submit" id="btndaftar" class="btn btn-sm text-white" style="background-color: rgb(116, 196, 148); margin-bottom: 20px" value="DAFTAR !">DAFTAR ! <i class="fa fa-forward"></i></button>
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
    })

    $('#kabupaten').on('change', function(){
        // console.log(this.value);
        var kabupaten_id = $('#kabupaten_id').val(this.value);
        var kecamatan_id = $('#kecamatan_id').val('');
        document.getElementById("tabel-lembaga").style.display = "none";
    });

    $('#kecamatan').on('change', function(){
        // console.log(this.value);
        var kecamatan_id = $('#kecamatan_id').val(this.value);
    });


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
                                    window.location.href = "/survey-lembaga/"+slug_form+"/"+response.lembaga;
                                }
                            });

                        } else {
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


    // $('#btndaftar').click(function () {
        
    // })

    $('#kabupaten').select2({
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

    $('select[name="kabupaten"]').on('change', function() {
        var kabupaten = $(this).val();
        if(kabupaten) {
            $.ajax({
                url: '/fetch-kecamatan/' + kabupaten,
                type: "GET",
                dataType: "json",
                success:function(data) {                      
                    $('#kecamatan').empty();
                    $('#kecamatan').append('<option value="">___</option>');
                    $.each(data, function(key, value) {
                        $('#kecamatan').append('<option value="'+ value.id +'">'+ value.nama_kecamatan +'</option>');
                    });
                }
            });
        }else{
            $('#kecamatan').empty().disabled();
        }
    });

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