@extends('layouts.master')

@section('head')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto");

        @-webkit-keyframes come-in {
            0% {
                -webkit-transform: translatey(100px);
                transform: translatey(100px);
                opacity: 0;
            }

            30% {
                -webkit-transform: translateX(-50px) scale(0.4);
                transform: translateX(-50px) scale(0.4);
            }

            70% {
                -webkit-transform: translateX(0px) scale(1.2);
                transform: translateX(0px) scale(1.2);
            }

            100% {
                -webkit-transform: translatey(0px) scale(1);
                transform: translatey(0px) scale(1);
                opacity: 1;
            }
        }

        @keyframes come-in {
            0% {
                -webkit-transform: translatey(100px);
                transform: translatey(100px);
                opacity: 0;
            }

            30% {
                -webkit-transform: translateX(-50px) scale(0.4);
                transform: translateX(-50px) scale(0.4);
            }

            70% {
                -webkit-transform: translateX(0px) scale(1.2);
                transform: translateX(0px) scale(1.2);
            }

            100% {
                -webkit-transform: translatey(0px) scale(1);
                transform: translatey(0px) scale(1);
                opacity: 1;
            }
        }


        @media (min-width:701px) {
            .floating-container {
                position: fixed;
                width: 100px;
                height: 100px;
                bottom: 50px;
                right: 0;
                margin: 15px 10px;
            }

            .floating-container:hover {
                height: 300px;
            }

            .floating-container:hover .floating-button {
                box-shadow: 0 10px 25px rgba(44, 179, 240, 0.6);
                -webkit-transform: translatey(5px);
                transform: translatey(5px);
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
            }

            .floating-container:hover .element-container .float-element:nth-child(1) {
                -webkit-animation: come-in 0.4s forwards 0.2s;
                animation: come-in 0.4s forwards 0.2s;
            }

            .floating-container:hover .element-container .float-element:nth-child(2) {
                -webkit-animation: come-in 0.4s forwards 0.4s;
                animation: come-in 0.4s forwards 0.4s;
            }

            .floating-container:hover .element-container .float-element:nth-child(3) {
                -webkit-animation: come-in 0.4s forwards 0.6s;
                animation: come-in 0.4s forwards 0.6s;
            }

            .floating-container .floating-button {
                position: absolute;
                width: 50px;
                height: 50px;
                background: #2cb3f0;
                bottom: 0;
                border-radius: 50%;
                left: 0;
                right: 0;
                margin: auto;
                color: white;
                line-height: 50px;
                text-align: center;
                font-size: 23px;
                z-index: 100 !important;
                box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
                cursor: pointer;
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
            }

            .floating-container .float-element {
                position: relative;
                display: block;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                margin: 15px auto;
                color: white;
                font-weight: 500;
                text-align: center;
                line-height: 50px;
                z-index: 0;
                opacity: 0;
                -webkit-transform: translateY(100px);
                transform: translateY(100px);
            }

            .floating-container .float-element .material-icons {
                vertical-align: middle;
                font-size: 16px;
            }

            .floating-container .float-element:nth-child(1) {
                background: #42A5F5;
                box-shadow: 0 20px 20px -10px rgba(66, 165, 245, 0.5);
            }

            .floating-container .float-element:nth-child(2) {
                background: #4CAF50;
                box-shadow: 0 20px 20px -10px rgba(76, 175, 80, 0.5);
            }

            .floating-container .float-element:nth-child(3) {
                background: #FF9800;
                box-shadow: 0 20px 20px -10px rgba(255, 152, 0, 0.5);
            }
        }

        @media (max-width:700px) {}

    </style>
@endsection

@section('content')
    <!--Banner Three Start-->
    <section class="banner-one">
        <div class="banner-two__bg-slide">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "loop": true, "effect": "fade", "slidesPerView": 1, "autoplay": { "delay": 5000 }, "pagination": {
                                    "el": "#banner-two__bg-slide-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(slider.jpg);"></div>
                        <!-- /.image-layer -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
            </div><!-- /.thm-swiper__slider -->
            <div class="swiper-pagination" id="banner-two__bg-slide-pagination"></div>
        </div><!-- /.banner-two__bg-slide -->
    </section>
    <!-- Banner Section One End -->

    <div class="bg_gray" style="padding-bottom: 0;">
        <div class="container" id="youtube" style="padding: 20px;">
            <div class="">
                <div class="main_title">
                    <h5 style="color: red"><i class="fab fa-youtube"></i> NURUL FALAH MEDIA</h5>
                    <a href="https://www.youtube.com/channel/UC1Xkdp_DKN0hJL85UWxH_Gg/videos" target="_blank"
                        class="muted">KUNJUNGI YOUTUBE</a>
                </div>
                <div class="owl-carousel owl-theme carousel_4" style="padding-bottom: 0;">
                    @foreach ($youtube as $item)
                        <div class="item">
                            <div class="strip">
                                <figure>
                                    <img src="https://i.ytimg.com/vi/{{ substr($item->link, 32, 11) }}/maxresdefault.jpg"
                                        alt="">
                                    <a href="{{ $item->link }}" target="_blank" class="strip_info"></a>
                                </figure>
                                <ul>
                                    <li><i class="fa fa-fw"></i><span>{{ $item->name }}</span> </li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <a href="https://tabungamal.id/ramadhan" target="_blank" style="margin-top: 0; padding-top: 0;">
        <img id="tabungamal-mobile" src="{{ asset('bersamaquran.png') }}" style="max-width: 100%" alt="">
    </a>

    <!--Latest Properties Three Start-->
    <section class="latest_properties three" style="margin-top: 50px">
        <div class="container">
            <div class="block-title text-center">
                <h4>Nurul Falah News</h4>
                <h2 style="color: darkcyan">BERITA TERKINI</h2>
            </div>
            <div class="row mobile-berita">
                @foreach ($berita_mobile as $item)
                    {{-- <div class="container" style="margin-bottom: 20px;">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 text-muted" style="padding: 0; margin: 0;">
                                <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}"
                                    style="color: cadetblue;text-transform: uppercase; font-weight: 900; padding: 0; margin: 0;">{{ substr($item->judul, 0, 25) }}
                                    @if (strlen($item->judul) > 25)
                                        ...
                                    @endif
                                </a><br>
                                <span class="badge badge-info"
                                    style="opacity: 0.85; font-size: 10px">{{ $item->kategoriposting->name }}</span><br>
                                <small>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small>
                            </div>
                        </div>
                    </div> --}}
                    <div class="container" style="margin-bottom: 20px">
                        <div class="card col-12 col-md-6" style="background-color: rgb(255, 255, 255); box-shadow: 5px 10px #c4bcbc;border-radius: 10px">
                            <div class="row" style="padding-top: 10px; padding-bottom: 10px">
                                <div class="col-md-6 col-6">
                                    <img style="max-width: 100%; border-radius: 5px" src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt="">
                                </div>
                                <div class="col-md-6 col-6">
                                    <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}"
                                        style="color: cadetblue;text-transform: uppercase; font-weight: 900; padding: 0; margin: 0;">{{ substr($item->judul, 0, 25) }}
                                        @if (strlen($item->judul) > 35)
                                            ...
                                        @endif
                                    </a><br>
                                    <span class="badge badge-info"
                                        style="opacity: 0.85; font-size: 10px">{{ $item->kategoriposting->name }}</span><br>
                                    <small>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="container" style="margin-bottom: 20px;">
                    <a href="/media/{{$jenis_berita->slug}}" class="btn btn-info text-uppercase" style="width: 100%">{{$jenis_berita->name}} LAINNYA...</a>
                </div>
            </div>
            <section class="listing_details_top" style="padding: 0;" id="jadwal_sholat_mobile">
                <section class="listing_details_bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="listing_details_bottom_left">
                                    <div class="listing_details_bottom_left_content">
                                        <ul class="post_rating_and_view_list list-unstyled">
                                            <li><i class="far fa-clock"></i>{{ date('d F Y') }}</li>
                                            <li>
                                                <ul class="rating_list list-unstyled">
                                                    <h3 style="font-weight: 600">SURABAYA</h3>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="listing_details_bottom_right">
                                    <marquee style="text-transform: uppercase">
                                        <h5>hari ini tanggal {{ date('d F Y') }} , <strong>Subuh:
                                                {{ $jadwal_sholat['subuh'] }} WIB</strong> | <strong>Dzuhur:
                                                {{ $jadwal_sholat['dzuhur'] }} WIB</strong> | <strong>Ashar:
                                                {{ $jadwal_sholat['ashar'] }} WIB</strong> | <strong>Magrib:
                                                {{ $jadwal_sholat['maghrib'] }} WIB</strong> | <strong>Isya:
                                                {{ $jadwal_sholat['isya'] }} WIB</strong></h5>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <div class="row desktop-berita">
                @if ($berita !== null)
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="latest_properties_single">
                            <div class="latest_properties_img_carousel owl-theme owl-carousel">
                                <div class="latest_properties_img">
                                    <img src="{{ asset('img_thumbnail/' . $berita->thumbnail) }}" alt="">
                                    <div class="featured_and_sale_btn">
                                        {{-- <a href="#" class="sale_btn">Nurul Falah</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="latest_properties_content" style="padding: 5%;">
                                <div class="latest_properties_top_content" style="text-align: justify">
                                    <p style="text-transform: uppercase; font-weight: 900">{{ $berita->judul }}
                                    </p>
                                    <p>{!! substr($berita->deskripsi, 0, 500) !!} @if (strlen($berita->deskripsi) > 500)
                                            ...
                                        @endif
                                    </p>
                                </div>
                                <div class="latest_properties_bottom_content">
                                    <ul class="list-unstyled">
                                        <li><a href="/post/{{ $berita->jenisposting->slug }}/{{ $berita->slug }}"
                                                style="font-weight: 900" class="text-info"><span
                                                    class="fa fa-arrow-right text-info"></span>Selengkapnya</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card">
                            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="color: rgb(0, 0, 0)">
                                <marquee style="text-transform: uppercase">
                                    Jadwal sholat hari ini tanggal {{ date("d F Y") }} untuk wilayah Kab. Banyuwangi, <strong>Subuh: {{ $jadwal_sholat['subuh'] }} WIB</strong> | <strong>Dzuhur: {{ $jadwal_sholat['dzuhur'] }} WIB</strong> | <strong>Ashar: {{ $jadwal_sholat['ashar'] }} WIB</strong> | <strong>Magrib: {{ $jadwal_sholat['maghrib'] }} WIB</strong> | <strong>Isya: {{ $jadwal_sholat['isya'] }} WIB</strong>
                                </marquee>
                            </div>
                        </div> --}}
                        <section class="listing_details_top" style="padding: 0;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="listing_details_top_left">
                                            <div class="listing_details_top_title">
                                                <h3>SURABAYA</h3><small>{{ date('d F Y') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="listing_details_top_right clearfix">
                                            <div class="listing_details_top_product_list_box">
                                                <marquee style="text-transform: uppercase">
                                                    <h5>hari ini tanggal {{ date('d F Y') }} , <strong>Subuh:
                                                            {{ $jadwal_sholat['subuh'] }} WIB</strong> | <strong>Dzuhur:
                                                            {{ $jadwal_sholat['dzuhur'] }} WIB</strong> | <strong>Ashar:
                                                            {{ $jadwal_sholat['ashar'] }} WIB</strong> | <strong>Magrib:
                                                            {{ $jadwal_sholat['maghrib'] }} WIB</strong> | <strong>Isya:
                                                            {{ $jadwal_sholat['isya'] }} WIB</strong></h5>
                                                </marquee>
                                                {{-- <marquee style="text-transform: uppercase">
                                                <h5>hari ini tanggal {{ date('d F Y') }} , <strong>Subuh: 12
                                                        WIB</strong> | <strong>Dzuhur: 12 WIB</strong> | <strong>Ashar:
                                                        12 WIB</strong> | <strong>Magrib: 12 WIB</strong> |
                                                    <strong>Isya: 12 WIB</strong>
                                                </h5>
                                            </marquee> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="listing_details_bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="listing_details_bottom_left">
                                            <div class="listing_details_bottom_left_content">
                                                <ul class="post_rating_and_view_list list-unstyled">
                                                    <li><i class="far fa-clock"></i>{{ date('d F Y') }}</li>
                                                    <li>
                                                        <select name="" id="" class="form-control" style="width: 200px">
                                                            <option value="">SURABAYA</option>
                                                        </select>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="listing_details_bottom_right">
                                            <div class="listing_details_bottom_right_btn">
                                                <a href="#"><i class="fas fa-search"></i>Cari Jadwal Sholat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                @endif

                <div class="col-xl-4 col-lg-4 col-md-4">
                    @foreach ($beritas as $item)
                        <div class="latest_properties_single">
                            <div class="latest_properties_img_carousel owl-theme owl-carousel">
                                <div class="latest_properties_img">
                                    <img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt="">
                                    <div class="featured_and_sale_btn">
                                        <a href="#" class="sale_btn">Lasiz NF</a>
                                    </div>
                                </div>
                            </div>
                            <div class="latest_properties_content" style="padding: 5%;">
                                <div class="latest_properties_top_content" style="text-align: justify">
                                    <p style="text-transform: uppercase; font-weight: 900">{{ $item->judul }}
                                    </p>
                                    <p>{!! substr($item->deskripsi, 0, 150) !!}
                                        @if (strlen($item->deskripsi) > 150)
                                            ...
                                        @endif
                                    </p>
                                </div>
                                <div class="latest_properties_bottom_content">
                                    <ul class="list-unstyled">
                                        <li><a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}"
                                                style="font-weight: 900" class="text-info"><span
                                                    class="fa fa-arrow-right text-info"></span>Selengkapnya</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--Latest Properties Three End-->
    {{-- <section class="faqs" id="section-tabungamal">
        
        <div class="container">
            
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faqs_left">
                        <div class="block-title text-left">
                            <a href="https://tabungamal.id/ramadhan" target="_blank"><h4>Amil Zakat Lazis Nurul Falah</h4></a>
                            <a href="https://tabungamal.id/ramadhan" target="_blank"><h2>Ramadhan Bersama Al Qur'an</h2></a>
                        </div>
                        <div class="faqs_text" style="text-align: justify">
                            <p style="font-size: 15px">Sempurnakan ibadah kita dibulan ramadhan dengan ber'amal dan ber'zakat bersama Lazis Nurul Falah. kunjungi <a style="color: blue" href="https://tabungamal.id/ramadhan">https://tabungamal.id</a></p>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="faqs_img_box">
                                    <div class="faqs_img mar-30">
                                        <a href="https://tabungamal.id" target="_blank">
                                            <img src="{{asset('tb.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="faqs_img_box">
                                    <div class="faqs_img">
                                        <a href="https://tabungamal.id/ramadhan" target="_blank">
                                            <img src="{{asset('tb2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6" id="section-ramdan-mobile">
                    <div class="text-center" id="logo-ramdan">
                        <img src="{{asset('ramdan2.png')}}" style="height: 80px" alt="">
                    </div>
                    <div class="faq">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Wakaf Ponpes Tahfidz</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Kami mengajak sahabat untuk bergabung membantu proses pembangunan gedung pesantran tahfidz leader. kunjungi <a style="color: blue" href="https://tabungamal.id/ramadhan">https://tabungamal.id</a></p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Zakat Fitrah</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Tunaikan kewajiban kita sebagai umat muslim pada saat bulan ramadhan ini dengan zakat fitrah kunjungi <a style="color: blue" href="https://tabungamal.id/ramadhan">https://tabungamal.id</a></p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Bayar Fidyah</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Tunaikan kesempurnaan puasa bagi anda yang tidak bisa menunaikan ibadah puasa sebulan penuh dengan membayar Fidyah kunjungi <a style="color: blue" href="https://tabungamal.id/ramadhan">https://tabungamal.id</a></p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title bdr-b-n">
                                    <h4>Takjil</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Mari bergabung bersama kami dengan memberikan Takjil berbuka puasa pada bulan ramadhan kunjungi <a style="color: blue" href="https://tabungamal.id/ramadhan">https://tabungamal.id</a></p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section id="section-tabungamal" class="providing_one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url({{ asset('asset/images/gedung.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="providing_one_left">
                        <div class="block-title text-left">
                            <h4>Sedekah bersama Al Qur'an</h4>
                            <h2>Mari bergabung <br> bersama LAZIS NF</h2>
                        </div>
                        <div class="providing_one_btn">
                            <a href="https://tabungamal.id" target="_blank" class="thm-btn">Kunjungi LAZIS NF</a>
                        </div>
                        <div class="providing_one_shaape_one">
                            <img src="{{asset('asset/images/shapes/providing_one_shape_1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="providing_one_four_boxes clearfix">
                        <ul class="list-unstyled">
                            <li>
                                <div class="providing_one_four_boxes_iocn">
                                    <span class="icon-home"></span>
                                </div>
                                <div class="providing_one_four_boxes_text">
                                    <p>Wakaf <br>Al Qur’an</p>
                                </div>
                            </li>
                            <li>
                                <div class="providing_one_four_boxes_iocn">
                                    <span class="icon-house"></span>
                                </div>
                                <div class="providing_one_four_boxes_text">
                                    <p>Santunan <br>Yatim Dhuafa</p>
                                </div>
                            </li>
                            <li>
                                <div class="providing_one_four_boxes_iocn">
                                    <span class="icon-condominium"></span>
                                </div>
                                <div class="providing_one_four_boxes_text">
                                    <p>Wakaf <br>Ponpes Tahfidz</p>
                                </div>
                            </li>
                            <li>
                                <div class="providing_one_four_boxes_iocn">
                                    <span class="icon-buildings"></span>
                                </div>
                                <div class="providing_one_four_boxes_text">
                                    <p>Zakat <br>Fitrah</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="testimonials_one" id="section-tabungamal2">
        <div class="container">
            <div class="swiper-container" id="testimonials-one__thumb">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://tabungamal.id/ramadhan/assets/img/testimoni/eva.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://tabungamal.id/ramadhan/assets/img/testimoni/diah.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://tabungamal.id/ramadhan/assets/img/testimoni/teguh.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-container" id="testimonials-one__carousel">
                <div class="testimonials_one_carousel_bg"
                    style="background-image: url({{asset('assets/images/testimonials/testimonial-1-carousel-img.jpg')}})"></div>
                <div class="testimonials_one_quote">
                    <i class="fas fa-quote-left"></i>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="padding: 20px">
                        <p style="font-size: 20px">
                            "Selama saya menjadi donatur di LAZIS Nurul Falah, saya sangat terkesan dengan beberapa program yang dimiliki lembaga ini. Semoga LAZIS Nurul Falah bertambah jaya dan tetap peduli dengan saudara-saudara yang membutuhkan. Amiin."
                        </p>
                        <div class="testimonials-one__meta">
                            <h3>Eva Febriyanti / <span> sejak 2019</span></h3>
                        </div>
                    </div>
                    <div class="swiper-slide" style="padding: 20px">
                        <p style="font-size: 20px">
                            "Semoga yang dibantu adalah orang-orang yang sangat membutuhkan untuk membangun jasmani dan rohani dan lebih sehat lagi ke seluruh Indonesia. Kesannya, Nurul Falah punya semangat juang tinggi dalam menyebarkan Al-Qur'an untuk lebih dicintai dan diamalkan semua orang."
                        </p>
                        <div class="testimonials-one__meta">
                            <h3>Diah / <span> Sejak 2012</span></h3>
                        </div>
                    </div>
                    <div class="swiper-slide" style="padding: 20px">
                        <p style="font-size: 20px">
                           "Semoga kedepan anak-anak yatim dapat dibina dengan lebih telaten dan rutin, baik mental maupun spritualnya. Semoga mereka selalu tersantuni dan Yayasan Nurul Falah dapat berkembang dan membantu ke lebih banyak orang yang membutuhkan. Aamiin ya Robbal alamin."</p>
                        <div class="testimonials-one__meta">
                            <h3>Teguh / <span> Sejak 2012</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="featured_properties jarallax" data-jarallax data-speed="0.2" data-imgPosition="20% 0%"
        style="background-image: url({{ asset('asset/images/gedung.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="featured_properties_left wow slideInLeft" data-wow-delay="100ms">
                        <div class="featured_properties_img">
                            <img src="kultum.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="featured_properties_right">
                        <div class="block-title text-left">
                            <h4>Mari Ikuti</h4>
                            <h2 style="text-transform: uppercase">kultum jelang berbuka puasa</h2>
                        </div>
                        <div class="featured_properties_text">
                            <p>Kultum jelang berbuka puasa dilaksanakan oleh para ustadz pesantren Al Quran Nurul Falah yang
                                disiarkan secara langsung (LIVE) melalui youtube Media Nurul Falah.
                            </p>
                        </div>
                        <ul class="featured_properties_right_list list-unstyled">
                            <li><span class="icon-confirmation"></span>Berlangsung selama Bulan Suci Ramadhan.</li>
                            <li><span class="icon-confirmation"></span>LIVE at Nurul Falah Media Channel.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Blog Two Start-->
    <section class="blog_one" style="padding-bottom: 60px; ">
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-12">
                    <div class="blog_one_left">
                        <div class="block-title text-left" style="text-transform: uppercase">
                            <h4>Redaksi</h4>
                            <h2 style="font-size: 30px; font-weight: 900; color: darkcyan">Artikel Terbaru</h2>
                        </div>
                        <div class="blog_one_text artikel-text text-muted" style="font-weight: 600">
                            <p>Perkaya wawasan & Ilmu Pengetahuan anda dengan membaca artikel yang berkualitas.</p>
                        </div>
                    </div>
                </div>
                <div class="mobile-artikel">
                    @foreach ($artikels as $item)
                        <div class="container" style="margin-bottom: 20px">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <div class="blog_one_image_box">
                                        <div class="blog_one_img">
                                            <img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt="">
                                            <small>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6 text-muted" style="padding: 0; margin: 0;">
                                    <span class="badge badge-primary"
                                        style="opacity: 0.5; font-size:   10px">{{ $item->kategoriposting->name }}</span><br>
                                    <a class="text-muted"
                                        href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}"
                                        style="text-transform: uppercase; font-weight: 900">{{ $item->judul }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

                <div class="col-xl-8 col-lg-8 desktop-artikel">
                    <div class="blog_one_right">
                        <div class="blog_one_carousel owl-theme owl-carousel">
                            <!--Blog One Single-->
                            @foreach ($artikels as $item)
                                <div class="blog_one_single">
                                    <div class="blog_one_image_box">
                                        <div class="blog_one_img">
                                            <img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt="">
                                        </div>
                                        <div class="blog_one_date_box">
                                            <p>{{ $item->kategoriposting->name }}</p>
                                        </div>
                                    </div>
                                    <div class="blog_one_content_box">
                                        <h3 style="text-transform: uppercase"><a
                                                href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}">{{ $item->judul }}</a>
                                        </h3>
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="#"><i class="far fa-user-circle"></i>
                                                    {{ $item->sumberposting->name }}</a>
                                            </li>
                                            {{-- <li><span>/</span></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Two End-->
    <section class="listing_details_bottom bottom-tabungamal"
        style="margin-top: 20px;background: linear-gradient(to right, #33ccff 0%, #99ffb3 100%);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="listing_details_bottom_left">
                        <div class="listing_details_bottom_left_content">
                            <ul class="post_rating_and_view_list list-unstyled">
                                <li style="color: rgb(255, 255, 255)"><i class="fa fa-heart"></i>Ber'Amal dan
                                    Ber'Sedekah</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Are You Ready Start-->
    <section class="are_you_ready two jarallax bottom-tabungamal" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url({{ asset('bersamaquran.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="are_you_ready_content"
                        style="align-self: center; align-content: center; align-items: center; text-align: center">
                        <div class="are_you_ready_shape"><img src="asset/images/shapes/are_you_ready_shape.png" alt="">
                        </div>
                        <div id="beramal-mobile" class="ramadhan"
                            style="background-color: white; border-radius: 20px;">
                            <img src="{{ asset('bersamaquran.png') }}" style="max-width: 100%" alt="">
                        </div>

                        <h2 id="beramal">Ramadhan Bersama <br> Al Qur'an</h2>
                        <a href="https://tabungamal.id/ramadhan/" target="_blank" class="thm-btn"
                            style="margin-top: 20px">KUNJUNGI</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="display: none">
        <img src="{{ asset('ramdan2.png') }}" style="max-width: 100%" alt="">
        <div class="container" style="text-align: center; font-size: 30px; font-weight: 200">
            <h5 style="font-weight: 900">MARI SEMPURNAKAN IBADAH DI BULAN SUCI RAMADHAN DENGAN BERAMAL DAN BERSEDEKAH</h5>
            <br>
            <a href="https://tabungamal.id/ramadhan/" target="_blank" class="thm-btn">KUNJUNGI</a>
            <br>
        </div>
    </section>
    {{-- <div class="floating-container">
        <div class="floating-button">+</div>
        <div class="element-container">

            <a href="google.com"> <span class="float-element tooltip-left">
                    <i class="material-icons">email
                    </i></a>
            </span>
            <span class="float-element">
                <i class="material-icons">whatsapp
                </i>
            </span>
            <span class="float-element">
                <i class="material-icons">chat</i>
            </span>
        </div>
    </div> --}}
    <!--Brand One Start-->
    
@endsection

@section('script')
@endsection
