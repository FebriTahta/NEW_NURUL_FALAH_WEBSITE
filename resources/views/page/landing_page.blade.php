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

    </style>
    <link href="{{ asset('/assets3/css/detail-page.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets3/css/blog.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('assets4/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets4/css/plugins/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets4/css/plugins/nice-select.css')}}" />

    <link rel="stylesheet" href="{{asset('assets4/css/style.css')}}" />
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
                    {{-- <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(tabamal.png);"></div>
                        <!-- /.image-layer -->
                    </div><!-- /.swiper-slide --> --}}
                </div><!-- /.swiper-wrapper -->
                
            </div><!-- /.thm-swiper__slider -->
            <div class="swiper-pagination" id="banner-two__bg-slide-pagination"></div>
        </div><!-- /.banner-two__bg-slide -->
    </section>
    <!-- Banner Section One End -->

    <div class="bg_white" style="padding-bottom: 0; background-color: white">
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

    <section class="video-section bg_white" style="padding-top: 30px; padding-bottom: 30px;background-color: white">
        <div class="container">
            <div class="grid grid-cols-12 gap-[30px] items-center">
                <div class="col-span-12 lg:col-span-6 relative">
                    <div class="mb-5 lg:mb-0 max-w-[450px]">
                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl mb-[10px]">Pesantren Al Quran <span class="text-success">Nurul Falah Surabaya.</span></h2>
                        <p>Pesantren Alquran Nurul Falah adalah sebuah lembaga non-formal 
                            yang bergerak dibidang pendidikan agama khususnya Alquran, dan berada di 
                            bawah naungan langsung Yayasan Nurul Falah. </p>
                        <a href="#" class="flex flex-wrap items-center text-secondary text-tiny mt-[20px]">Selengkapnya
                            <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z" fill="currentColor"></path>
                            </svg>
                        </a>
                        <img class="absolute bottom-[-18px] right-[5px]" src="{{asset('assets4/images/video/star.png')}}" loading="lazy" width="65" height="73" alt="image">

                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 text-center">
                    <div class="relative p-[20px] lg:p-[30px] bg-[#ECFAF7] inline-block rounded-[24px]">
                        <div class="scene drop-shadow-[0px_10px_20px_rgba(0,0,0,0.25)]" data-relative-input="true">
                            <img data-depth="0.1" src="{{asset('gambar1.png')}}" class="rounded-[24px]" loading="lazy" width="507" height="349" alt="video image">
                        </div>
                        <a href="https://www.youtube.com/channel/UC1Xkdp_DKN0hJL85UWxH_Gg/featured" target="_blank" class="play-button bg-white text-white hover:text-primary absolute left-0 right-0 mx-auto top-1/2 -translate-y-1/2 hover:scale-105 hover:bg-primary w-[55px] h-[55px] flex 
        flex-wrap z-[1] items-center justify-center opacity-80 shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)] transition-all rounded-full group
        
        before:block before:absolute  before:bg-white before:opacity-80 before:shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)] hover:before:bg-primary hover:before:opacity-80 before:w-[70px] before:h-[70px] before:rounded-full before:z-[-1]
        " aria-label="play button">
                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-secondary group-hover:stroke-white" d="M1.63861 10.764V6.70324C1.63861 1.66145 5.20893 -0.403178 9.57772 2.11772L13.1024 4.14812L16.6271 6.17853C20.9959 8.69942 20.9959 12.8287 16.6271 15.3496L13.1024 17.38L9.57772 19.4104C5.20893 21.9313 1.63861 19.8666 1.63861 14.8249V10.764Z" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="popular-properties py-[80px]" style="background-color: white">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-[50px]">
                        <div>
                            <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                                Berita Terbaru <span class="text-secondary">.</span></h2>
                        </div>
                        <div>
                            <a href="properties-v1.html" class="flex flex-wrap items-center text-secondary text-tiny"> Berita Selengkapnya
                                <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z" fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">

                @foreach ($beritas as $item)
                    <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                        <div class="relative">
                            <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}" class="block">
                                <img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" class="w-full h-full" loading="lazy" width="370" height="266" alt="Orchid Casel de Paradise.">
                            </a>
                            <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-secondary leading-none text-[14px] font-normal capitalize">{{$item->kategoriposting->name}}</span>
                        </div>

                        <div class="py-[20px] px-[20px]">
                            <h3>
                                <a href="properties-details.html" class="font-recoleta leading-tight text-[22px] xl:text-lg text-primary text-uppercase" style="font-size: 12px">
                                    {{substr($item->judul,0,35)}}
                                    @if (strlen($item->judul) > 35)
                                            ...
                                    @endif
                                </a>
                            </h3>
                            <h4>
                                <a href="properties-details.html" class="font-light text-tiny text-secondary underline">
                                    <p>{!! substr($item->deskripsi, 0, 160) !!}
                                        @if (strlen($item->deskripsi) > 160)
                                            ...
                                        @endif
                                    </p>
                                </a>
                            </h4>
                            <span class="font-light text-sm">Uploaded : {{Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y')}}</span>
                            <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-recoleta text-base text-primary px-[15px] bg-white">Sumber</span></div>
                            <p class="font-light text-capitalize">{{$item->sumberposting->name}}</p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    {{-- <section class="blog_one">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="blog_one_left">
                        <div class="block-title text-left">
                            <h4>Our Blog Posts</h4>
                            <h2>Latest News <br>& Articles</h2>
                        </div>
                        <div class="blog_one_text">
                            <p>Lorem ipsum onts persp unde omnis iste natus errluptatem acc usantium demque
                                laudantium totam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="blog_one_right">
                        <div class="blog_one_carousel owl-carousel">
                            <!--Blog One Single-->
                            @foreach ($berita_mobile as $item)
                                <div class="blog_one_single">
                                    <div class="blog_one_image_box">
                                        <div class="blog_one_img">
                                            <img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt="">
                                        </div>
                                        <div class="blog_one_date_box">
                                            <p>20 Nov, 2020</p>
                                        </div>
                                    </div>
                                    <div class="blog_one_content_box">
                                        <h3><a href="news-details.html">Save Thousands Selling Your Property</a></h3>
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="news-details.html"><i class="far fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                            <!--Blog One Single-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <a href="https://tabungamal.id/ramadhan" target="_blank" style="margin-top: 0; padding-top: 0;">
        <img id="tabungamal-mobile" src="{{ asset('bersamaquran.png') }}" style="max-width: 100%" alt="">
    </a>

    <!--Latest Properties Three Start-->
    <section class="latest_properties three">
        <div class="container">
            {{-- <div class="block-title text-center">
                <h4>Nurul Falah News</h4>
                <h2 style="color: darkcyan">BERITA TERKINI</h2>
            </div> --}}
            <div class="row mobile-berita">

                <nav class="secondary_nav sticky_horizontal"
                    style="background: linear-gradient(to right, #3369ff 0%, #99ffb3 100%); max-height: 80px; margin-bottom: 20px;overflow: hidden">
                    <div class="container" style="overflow: hidden">
                        <ul id="secondary_nav">
                            @foreach ($kategori_all as $item)
                                <li>
                                    <p href="#{{ $item->name }}"
                                        style="background-color: azure; color: primary; border-radius: 5px; padding-left: 5px;padding-right: 5px; font-size: 12px">
                                        {{ $item->name }}</p>
                                </li>
                            @endforeach
                            <li>
                                <p
                                    style="background-color: azure; color: primary; border-radius: 5px; padding-left: 5px;padding-right: 5px; font-size: 12px">
                                    Selengkapnya</a>
                            </li>
                        </ul>
                    </div>
                    <span></span>
                </nav>
                <div class="container">
                    <div class="owl-carousel owl-theme categories_carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 996px; padding-left: 50px; padding-right: 50px;">
                                @foreach ($artikels as $key => $item)
                                    <div class="owl-item active" style="width: 108px; margin-right: 20px;">
                                        <div class="item_version_2">
                                            <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}">
                                                <figure>
                                                    <span>{{ $key }}</span>
                                                    <img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}"
                                                        data-src="{{ asset('img_thumbnail/' . $item->thumbnail) }}"
                                                        alt="" class="owl-lazy" width="350" height="450"
                                                        style="opacity: 1;">
                                                    <div class="info">
                                                        <h3 style="font-size: 10px">{{ $item->kategoriposting->name }}</h3>
                                                        <small style="font-size: 8px">
                                                            @if (strlen($item->judul) > 20)
                                                                {{ substr($item->judul, 0, 20) }}..
                                                            @else
                                                                {{ $item->judul }}
                                                            @endif
                                                        </small>
                                                    </div>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><i
                                    class="arrow_left"></i></button><button type="button" role="presentation"
                                class="owl-next"><i class="arrow_right"></i></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
                <div class="container">
                    <hr style="background: linear-gradient(to right, #3369ff 0%, #99ffb3 100%)">
                </div>
                @foreach ($berita_mobile as $item)
                    <div class="container" style="margin-bottom: 20px; background-color: white">
                        <div class="row" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-6 col-6">
                                {{-- <img style="max-width: 100%; border-radius: 5px"
                                    src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt=""> --}}
                                <div class="item_version_2">
                                    <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}">
                                        <figure>
                                            <span>{{ $key }}</span>
                                            <img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}"
                                                data-src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt=""
                                                class="owl-lazy" width="350" height="450" style="opacity: 1;">
                                            <div class="info">
                                                <small style="font-size: 8px">
                                                    {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}
                                                </small>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-6" style="padding-left: 0; margin-left: 0;">
                                {{-- <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}"
                                    style="color: cadetblue;text-transform: uppercase;font-size: 10px; padding-top: 0; margin-top: 0;font-weight: 900; ">{{$item->judul}}
                                </a> --}}
                                <div class="col s6">
                                    <div class="contents">
                                        <h6 style="font-size: 12px"><a style="color: rgb(48, 49, 49)" href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}">{{$item->judul}}</a></h6>
                                    </div>
                                    <hr>
                                    <div class="contents">
                                        <h6 style="font-size: 12px">{{$item->kategoriposting->name}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="container" style="margin-bottom: 20px;">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <a href="/media/{{ $jenis_berita->slug }}" class="btn btn-info text-uppercase"
                                style="width: 100%; border-radius: 20px;background: linear-gradient(to right, #3369ff 0%, #99ffb3 100%); max-height: 80px;; font-size: 10px">{{ $jenis_berita->name }}
                                SELENGKAPNYA...</a>
                        </div>
                        <div class="col-md-6 col-6">
                            <a href="/media/{{ $jenis_artikel->slug }}" class="btn btn-info text-uppercase"
                                style="width: 100%; border-radius: 20px;background: linear-gradient(to right, #3369ff 0%, #99ffb3 100%); max-height: 80px; font-size: 10px">{{ $jenis_artikel->name }}
                                SELENGKAPNYA...</a>
                        </div>
                    </div>

                </div>


            </div>
            {{-- <section class="listing_details_top" style="padding: 0;display: none" id="jadwal_sholat_mobile">
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
            </div> --}}
        </div>
    </section>
    <!--Latest Properties Three End-->

    <section class="featured_properties jarallax" data-jarallax data-speed="0.2" data-imgPosition="20% 0%"
        style="display: none;background-image: url({{ asset('asset/images/gedung.png') }});">
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
    {{-- <section class="blog_one" style="padding-bottom: 60px; ">
        <div class="container" style="margin-top: 50px">
            <div class="row">
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
    </section> --}}
@endsection

@section('script')
@endsection
