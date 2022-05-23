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
                    <h5 style="color: red; font-weight: 650"><i class="fab fa-youtube"></i> NURUL FALAH MEDIA</h5>
                    <a href="https://www.youtube.com/channel/UC1Xkdp_DKN0hJL85UWxH_Gg/videos" target="_blank"
                        class="" style="color: #5ea06e">KUNJUNGI YOUTUBE</a>
                </div>
                {{-- <div class="owl-carousel owl-theme carousel_4" style="padding-bottom: 0;">
                    @foreach ($youtube as $item)
                        <div class="item">
                            <div class="strip">
                                <figure>
                                    <img src="https://i.ytimg.com/vi/{{ substr($item->link, 32, 11) }}/maxresdefault.jpg"
                                        alt="">
                                    <a href="{{ $item->link }}" target="_blank" class="strip_info"></a>
                                </figure>
                                <ul>
                                    <li><i class="fa fa-fw"></i><span class="text-uppercase" style="font-weight: 600; color: #5ea06e"> {{ $item->name }}</span> </li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div> --}}
                <div class="owl-carousel owl-theme carousel_4" style="padding-bottom: 0;">
                    @foreach ($beritas as $item)
                        <div class="item">
                            <div class="strip">
                                <figure>
                                    <img src="{{$item->beritas}}"
                                        alt="">
                                    <a href="#" target="_blank" class="strip_info"></a>
                                </figure>
                                <ul>
                                    <li><i class="fa fa-fw"></i><span class="text-uppercase" style="font-weight: 600; color: #5ea06e"> {{ $item->name }}</span> </li>
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
    {{-- <section class="latest_properties three" style="background-color: white">
        <div class="container">
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
                                                        <h3 style="font-size: 10px">{{ $item->kategoriposting->name }}
                                                        </h3>
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
                <div class="container" style="padding-top: 20px; padding-bottom: 20px">
                    <hr style="background: linear-gradient(to right, #3369ff 0%, #99ffb3 100%)">
                </div>
                @foreach ($berita_mobile as $item)
                    <div class="container" style="margin-bottom: 20px; background-color: white">
                        <div class="row" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-6 col-6">
                                <div class="item_version_2">
                                    <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}">
                                        <figure>
                                            <span>{{ $key }}</span>
                                            <img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}"
                                                data-src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt=""
                                                class="owl-lazy" width="350" height="450" style="opacity: 1;">
                                            <div class="info">
                                                <small style="font-size: 8px; float: left">
                                                    {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}
                                                </small>
                                                <small style="font-size: 8px; float: right">
                                                    {{ $item->kategoriposting->name }}
                                                </small>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-6" style="padding-left: 0; margin-left: 0;">
                                <div class="col s6">
                                    <div class="contents">
                                        <h6 style="font-size: 16px; font-weight: 700" class="text-uppercase"><a
                                                style="color: rgb(48, 49, 49)"
                                                href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}">{{ $item->judul }}</a>
                                        </h6>
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
        </div>
    </section> --}}
    <!--Latest Properties Three End-->
    <!--Are You Ready Start-->
    
@endsection

@section('script')
@endsection
