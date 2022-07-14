@extends('new_layouts.master')

@section('meta')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Nurul Falah</title>
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('tumb.jpeg')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('tumb.jpeg')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('tumb.jpeg')}}">
<link rel="manifest" href="{{asset('asset/images/favicons/site.webmanifes')}}t">
<meta name="_token" content="{{ csrf_token() }}">
<meta name="theme-color" content="#8CC0DE">
@endsection

@section('css')
<style>
    /* desktop */
    @media (min-width: 501px) {
        .tab1 {
            display: block !important;
        }

        .tab2 {
                display: none !important;
            }

        #s_m {
            display: none !important;
        }

        #t_m {
            display: block !important;
        }

        #b_m {
            display: none;
        }
    }
    /* mobile */
    @media (max-width:500px) {
        .tab1 {
            display: none !important;
        }

        .tab2 {
            display: block !important;
        }

        #s_m {
            display: block !important;
        }

        #t_d {
            display: none !important;
        }
    }
</style>

@endsection

@section('content')

<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style" >
    <div class="blakish-overlay"></div>
    <div class="container">
        <div class="page-breadcrumb-content text-center">
            <div class="page-breadcrumb-title">
                <h2 class="breadcrumb-head black bold">Nurul  <span>Falah</span></h2>
            </div>
            <div class="page-breadcrumb-item ul-li">
                <ul class="breadcrumb text-uppercase black">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active"> Pelatihan </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="blog-item" class="blog-item-post" style="margin-top: -50px">
    <div class="container">
        <div class="blog-content-details">
            <div class="section-title mb45 headline text-center ">
                <span class="subtitle text-uppercase">DIKLAT / PELATIHAN</span>
                <h2>Diklat / Pelatihan<span> Mendatang.</span></h2>
            </div>
            <div class="best-course-area mb45">
                <div class="row">
                    @foreach ($diklat_online['data'] as $item)
                    <div class="col-md-4">
                        <div class="best-course-pic-text relative-position ">
                            <div class="best-course-pic relative-position">
                                <img src="https://admin.nurulfalah.org/image_flyer/{{$item['image']}}" alt="">
                                <div class="trend-badge-2 text-center text-uppercase">
                                    <i class="fas fa-bolt"></i>
                                    <span>Trending</span>
                                </div>
                                <div class="course-details-btn">
                                    <a href="https://registrasi.nurulfalah.org/{{$item['slug']}}" target="_blank">DAFTAR SEKARANG <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="blakish-overlay"></div>
                            </div>
                            <div class="best-course-text">
                                <div class="course-title mb20 headline relative-position">
                                    <h3><a href="https://registrasi.nurulfalah.org/{{$item['slug']}}" target="_blank" style="text-transform: uppercase">{{$item['name']}}</a></h3>
                                    <p class="text-danger"> Batas Pendaftaran : 
                                    {{substr($item['tanggal'],8) - 7}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection