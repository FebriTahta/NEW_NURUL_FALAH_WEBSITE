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

<style>
    body, html {
      height: 100%;
      /* width: 100%; */
      margin: 0;
    }
    
    .bg {
      /* The image used */
      background-image: url("serti.jpg");
    
      /* Full height */
      height: 100%; 
      /* width: 100%; */

      z-index: 1;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    }

    /* BIG SIZE */
    @media only screen and (min-width: 601px) {
        .awalan {
            position: absolute;
            /* left: 15%; */
            margin-left:45px;
            top:38%;
            z-index: 9999;
            font-size: 10px;
            width: 20%;
        }

        table {
            top: 44%;
            margin-left:40px;
            z-index: 9999;
            font-size: 10px;
            width: 20%;
            position: absolute;
        }

        table td, table td * {
            vertical-align: top;
        }

        .akhiran {
            position: absolute;
            margin-left:45px;
            top: 46%;
            z-index: 9999;
            font-size: 10px;
            width: 20%;
        }

        .qrcode {
            position: absolute;
            left: 15%;
            bottom: 19%;
            z-index: 9999;
            font-size: 18px;
            width: 70%;
        }
    }
    
    

    

    

    .tanggalan {
        position: absolute;
        left: 69%;
        bottom: 30%;
        z-index: 9999;
        font-size: 18px;
        width: 70%;
    }

    .no_sertifikat {
        position: absolute;
        left: 15%;
        bottom: 16%;
        z-index: 9999;
        font-size: 18px;
        width: 70%;
        margin-bottom:2px;
    }

    
</style>
@endsection

@section('info')
<div>
    <figure><img src="{{$form->img_form}}" alt="" class="img-fluid" style="max-width: 300px"></figure>
    <h2 style="font-size: 20px">{{$form->nama_form}}</h2>
    <p>Tilawati Pusat | Nurul Falah Surabaya</p>
    <a href="/download-sertifikat/{{$lembaga->id}}" id="unduh_sertifikat" class="btn btn-rounded btn-info" style="border-radius: 20px; box-shadow: 10px 10px 10px rgb(30, 99, 50); margin-right: 10px">Unduh Sertifikat </a> 
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
        <form id="#" method="post" enctype="multipart/form-data">@csrf
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard">
                <div class="awalan" style="margin-top:25px">Dengan mengucap rasa syukur kehadirat Allah SWT. Dengan ini kami  menerbitkan sertifikat kepada :</div>
                <table>
                    <tr>
                        <td style="width: 20%">Nama Lembaga</td>
                        <td style="width: 2%">:</td>
                        <td>{{strtoupper($data['nama_lembaga'])}}</td>
                    </tr>
                    <tr>
                        <td style="width: 20%">Alamat</td>
                        <td style="width: 2%">:</td>
                        <td style="width: 75%">{{strtoupper($data['alamat'])}}
                            {{--, {{strtoupper($data['kabupaten'])}} --}}
                        </td>
                    </tr>
                </table>
                <div class="akhiran" style="margin-top: 20px">Telah menerapkan Metode Tilawati, semoga ilmunya barokah.</div>
                <div class="qrcode">
                    <img src="{!! 'data:image/png;base64,'.$data['qrcode'] !!}" alt="" style="max-width: 100px;">
                </div>
            </div>
            
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