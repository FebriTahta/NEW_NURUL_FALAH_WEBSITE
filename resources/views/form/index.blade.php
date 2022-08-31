@extends('new_layouts.form_master')

@section('tittle')
<title>{{$form->nama_form}}</title>

<!-- Favicons-->
<link rel="shortcut icon" href="{{$form->img_form}}" type="image/x-icon">
<link rel="apple-touch-icon" type="image/x-icon" href="{{$form->img_form}}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{$form->img_form}}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{$form->img_form}}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{$form->img_form}}">
@endsection

@section('style')
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<style>

@media(min-width: 600px) {
    #img_form {
        max-width: 100% !important;
    }
}

@media(max-width: 599px) {
    #img_form {
        width: 300px !important;
        height: 300px !important;
    }
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.select2-container--default .select2-selection--single{
    padding:6px;
    height: 45px;
    width: 100%; 
    font-size: 15px;  
    position: relative;
}

</style>
@endsection

@section('informasi_form')
<figure><img id="img_form" src="{{$form->img_form}}" alt="" class="img-fluid" width="300" height="300"></figure>
<h2 class="text-capitalize">{{$form->nama_form}}</h2>
<p class="text-capitalize" style="font-size: 18px">{{$form->jenis_form}}</p>
@endsection

@section('form_content')
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">
        <div id="top-wizard">
            <span id="location"></span>
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->
        <form id="wrapped" method="post" enctype="multipart/form-data">
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard">
                @if ($form->tipe == 'free')
                    @foreach ($grouppertanyaan as $item_g)
                        <div class="step text-capitalize">
                            <h2 class="section_title ">{{$item_g->nama_group}}</h2>
                            <h3 class="main_question">{{$form->nama_form}}</h3>
                            @foreach ($item_g->pertanyaan as $item_p)
                                @if ($item_p->jenis_pertanyaan == 'text')
                                    <div class="form-group add_top_30">
                                        <div class="form-group add_top_30">
                                            <label for="name" class="text-capitalize">{{$item_p->pertanyaan}}</label>
                                            <input type="text" name="name"  class="form-control required">
                                        </div>
                                    </div>
                                @elseif($item_p->jenis_pertanyaan == 'date')
                                    <div class="form-group add_top_30">
                                        <label for="alamat" class="text-capitalize">{{$item_p->pertanyaan}}</label>
                                        <input type="date" class="form-control required" name="name" >
                                    </div>
                                @elseif($item_p->jenis_pertanyaan == 'number')
                                    <div class="form-group add_top_30">
                                        <label for="alamat" class="text-capitalize">{{$item_p->pertanyaan}}</label>
                                        <input type="number" name="name"  class="form-control required">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                    <!-- /step-->
                @else
                    <div class="step text-capitalize">
                        <h2 class="section_title ">Data Lembaga</h2>
                        <h3 class="main_question">{{$form->nama_form}}</h3>
                        <div class="form-group add_top_30">
                            <div class="form-group add_top_30">
                                <label for="nama_lembaga" class="text-capitalize">NAMA LEMBAGA</label>
                                <input type="text" name="nama_lembaga" id="nama_lembaga"  class="form-control required text-uppercase">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="kabupaten" class="text-capitalize">KABUPATEN </label>
                                <select name="kabupaten_id" data-width="100%" id="kabupaten" class="form-control required" style="font-size: 14px; height: 45px; text-transform: uppercase"  >
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="kecamatan" class="text-capitalize">KECAMATAN </label>
                                <select name="kecamatan_id" data-width="100%" id="kecamatan" class="form-control required" style="font-size: 14px; height: 45px; text-transform: uppercase"  >
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="alamat" class="text-capitalize">ALAMAT LENGKAP </label>
                               <textarea name="form-control" id="alamat" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                       
                    </div>
                @endif
                
                

                <div class="submit step" id="end">
                    <div class="summary">
                        <div class="wrapper">
                            <h3>Pastikan anda benar!</h3>
                            <p>Tekan tombol submit dan dapatkan sertifikat anda</p>
                        </div>
                    </div>
                </div>
                <!-- /step last-->

            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <button type="button" name="backward" class="backward">Prev</button>
                <button type="button" name="forward" class="forward">Next</button>
                <button type="submit" name="process" class="submit">Submit</button>
            </div>
            <!-- /bottom-wizard -->
        </form>
    </div>
    <!-- /Wizard container -->
</div>
<!-- /content-right-->
</div>
<!-- /row-->
</div>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
</script>
@endsection