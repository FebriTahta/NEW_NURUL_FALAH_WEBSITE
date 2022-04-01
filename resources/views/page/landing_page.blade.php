@extends('layouts.master')

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

    <div class="bg_gray">
        <div class="container" id="youtube" style="padding: 20px">
            <div class="">
                <div class="main_title">
                    <h5 style="color: red"><i class="fab fa-youtube"></i> NURUL FALAH MEDIA</h5>
                    <a href="https://www.youtube.com/channel/UC1Xkdp_DKN0hJL85UWxH_Gg/videos" target="_blank"
                        class="muted">Kunjungi YouTube</a>
                </div>
                <div class="owl-carousel owl-theme carousel_4">
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <iframe class="yt" width="380" height="200"
                                    src="https://www.youtube.com/embed/j2rVkTHTOIw" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <a href="https://www.youtube.com/embed/j2rVkTHTOIw" target="_blank"
                                    class="strip_info"></a>
                            </figure>
                            <ul>
                                <li><i class="fa fa-fw"></i><span>Tarhib Ramadhan</span> </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <iframe class="yt" width="380" height="200"
                                    src="https://www.youtube.com/embed/T7pnFWi3W7k" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <a href="https://www.youtube.com/embed/j2rVkTHTOIw" target="_blank"
                                    class="strip_info"></a>
                            </figure>
                            <ul>
                                <li><i class="fa fa-fw"></i><span>Kajian Kitab Nashoihul Ibad</span> </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <iframe class="yt" width="380" height="200"
                                    src="https://www.youtube.com/embed/qn5BmYqQEYk" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <a href="https://www.youtube.com/embed/j2rVkTHTOIw" target="_blank"
                                    class="strip_info"></a>
                            </figure>
                            <ul>
                                <li><i class="fa fa-fw"></i><span>Menjaga Kesehatan di Masa Pandemi</span> </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <iframe class="yt" width="380" height="200"
                                    src="https://www.youtube.com/embed/PTEeJ9G0vW4" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <a href="https://www.youtube.com/embed/j2rVkTHTOIw" target="_blank"
                                    class="strip_info"></a>
                            </figure>
                            <ul>
                                <li><i class="fa fa-fw"></i><span>Al Mulk Irama Rost Tilawati</span> </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <iframe class="yt" width="380" height="200"
                                    src="https://www.youtube.com/embed/2UJk7MSWGBM" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <a href="https://www.youtube.com/embed/j2rVkTHTOIw" target="_blank"
                                    class="strip_info"></a>
                            </figure>
                            <ul>
                                <li><i class="fa fa-fw"></i><span>Podcast Lasiz Nurul Falah</span> </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Latest Properties Three Start-->
    <section class="latest_properties three" style="margin-top: 50px">
        <div class="container">
            <div class="block-title text-center">
                <h4>Nurul Falah News</h4>
                <h2>BERITA TERKINI</h2>
            </div>
            <div class="row mobile-berita">
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="blog_one_image_box">
                                <div class="blog_one_img">
                                    <img src="b1.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 text-muted" style="padding: 0; margin: 0;">
                            <p style="text-transform: uppercase; font-weight: 900; padding: 0; margin: 0;">TARHIB RAMADHAN
                                1443 H PESANTREN ...</p>
                            <span class="badge badge-info" style="opacity: 0.85; font-size: 10px">Nurul Falah</span><br>
                            <small>Senin 12 Agustus 2020</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="blog_one_image_box">
                                <div class="blog_one_img">
                                    <img src="b2.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 text-muted" style="padding: 0; margin: 0;">
                            <p style="text-transform: uppercase; font-weight: 900; padding: 0; margin: 0;">LAZIS NURUL FALAH
                                DAN BKPRMI JATIM ...</p>
                            <span class="badge badge-info" style="opacity: 0.85; font-size: 10px">Lazis NF</span><br>
                            <small>Senin 12 Agustus 2020</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="blog_one_image_box">
                                <div class="blog_one_img">
                                    <img src="b3.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 text-muted" style="padding: 0; margin: 0;">
                            <p style="text-transform: uppercase; font-weight: 900; padding: 0; margin: 0;">PEMBINAAN GURU
                                NGAJI METODE ...</p>
                            <span class="badge badge-info" style="opacity: 0.85; font-size: 10px">Nurul Falah</span><br>
                            <small>Senin 12 Agustus 2020</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="blog_one_image_box">
                                <div class="blog_one_img">
                                    <img src="b4.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 text-muted" style="padding: 0; margin: 0;">
                            <p style="text-transform: uppercase; font-weight: 900; padding: 0; margin: 0;">PAWAI RAJABIYAH
                                SANTRI KAMPUNG ...</p>
                            <span class="badge badge-info" style="opacity: 0.85; font-size: 10px">Nurul Falah</span><br>
                            <small>Senin 12 Agustus 2020</small>
                        </div>
                    </div>
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
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <div class="latest_properties_single">
                        <div class="latest_properties_img_carousel owl-theme owl-carousel">
                            <div class="latest_properties_img">
                                <img src="b1.jpeg" alt="">
                                <div class="featured_and_sale_btn">
                                    <a href="#" class="sale_btn">Nurul Falah</a>
                                </div>
                            </div>
                        </div>
                        <div class="latest_properties_content" style="padding: 5%;">
                            <div class="latest_properties_top_content" style="text-align: justify">
                                <p style="text-transform: uppercase; font-weight: 900">TARHIB RAMADHAN 1443 H PESANTREN
                                    AL-QUR’AN NURUL FALAH SURABAYA
                                </p>
                                <p>Nurulfalah.org - Kajian Akbar tarhib ramadhan bersama ustadz KH. Moh Abdul Mughis, M.Pd
                                    pengasuh Madin Hidayatul Mubtadiin Menandai dimulainya serangkaian...</p>
                            </div>
                            <div class="latest_properties_bottom_content">
                                <ul class="list-unstyled">
                                    <li><a href="/" style="font-weight: 900" class="text-info"><span
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

                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="latest_properties_single">
                        <div class="latest_properties_img_carousel owl-theme owl-carousel">
                            <div class="latest_properties_img">
                                <img src="b2.jpeg" alt="">
                                <div class="featured_and_sale_btn">
                                    <a href="#" class="sale_btn">Lasiz NF</a>
                                </div>
                            </div>
                        </div>
                        <div class="latest_properties_content" style="padding: 5%;">
                            <div class="latest_properties_top_content" style="text-align: justify">
                                <p style="text-transform: uppercase; font-weight: 900">LAZIS NURUL FALAH DAN BKPRMI JATIM
                                    ADAKAN DIKLAT GURU NGAJI PENYINTAS SEMERU
                                </p>
                                <p>Nurulfalah.org – Dampak awan panas dan guguran erupsi Gunung Semeru di Lumajang masih
                                    menyisihkan dampak yang cukup besar bagi masyarakat....</p>
                            </div>
                            <div class="latest_properties_bottom_content">
                                <ul class="list-unstyled">
                                    <li><a href="/" style="font-weight: 900" class="text-info"><span
                                                class="fa fa-arrow-right text-info"></span>Selengkapnya</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="latest_properties_single">
                        <div class="latest_properties_img_carousel owl-theme owl-carousel">
                            <div class="latest_properties_img">
                                <img src="b3.jpeg" alt="">
                                <div class="featured_and_sale_btn">
                                    <a href="#" class="sale_btn">Nurul Falah</a>
                                </div>
                            </div>
                        </div>
                        <div class="latest_properties_content" style="padding: 5%;">
                            <div class="latest_properties_top_content" style="text-align: justify">
                                <p style="text-transform: uppercase; font-weight: 900">PEMBINAAN GURU NGAJI METODE TILAWATI
                                    DAN SANTUNAN ANAK YATIM
                                </p>
                                <p>Nurulfalah.org – Memuliakan anak yatim termasuk dalam perintah Allah SWT yang terdapat di
                                    Al-Qur’an surah Al-Baqarah ayat 220 yang berbunyi,...</p>
                            </div>
                            <div class="latest_properties_bottom_content">
                                <ul class="list-unstyled">
                                    <li><a href="/" style="font-weight: 900" class="text-info"><span
                                                class="fa fa-arrow-right text-info"></span>Selengkapnya</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Latest Properties Three End-->



    <section class="featured_properties jarallax" data-jarallax data-speed="0.2" data-imgPosition="20% 0%"
        style="background-image: url(assets/images/gedung.png)">
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
                    <div class="col-lg-12" style="margin-bottom: 15px">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="1.jpeg" alt="">
                                        <small>Senin 12 Agustus 2020</small><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 text-muted" style="padding: 0; margin: 0;">
                                {{-- <small>Senin 12 Agustus 2020</small><br> --}}
                                <small class="badge badge-primary" style="opacity: 0.5; font-size: 10px; margin: 0;">Kajian
                                    Kontemporer</small>
                                <p style="text-transform: uppercase; font-weight: 900">Selamat datang bulan suci ramadhan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" style="margin-bottom: 15px">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="3.jpeg" alt="">
                                        <small>Senin 12 Agustus 2020</small><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 text-muted" style="padding: 0; margin: 0;">

                                <span class="badge badge-primary" style="opacity: 0.5; font-size: 10px">Kajian Al
                                    Quran</span>
                                <p style="text-transform: uppercase; font-weight: 900">Ramadhan menjadi ladang pahala
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" style="margin-bottom: 15px">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="2.jpeg" alt="">
                                        <small>Senin 12 Agustus 2020</small><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 text-muted" style="padding: 0; margin: 0;">
                                <span class="badge badge-primary" style="opacity: 0.5; font-size: 10px">Hikmah</span>
                                <p style="text-transform: uppercase; font-weight: 900">MERENUNGI KEHIDUPAN, MENGHITUNG
                                    AMAL
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12" style="margin-bottom: 15px">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="4.jpeg" alt="">
                                        <small>Senin 12 Agustus 2020</small><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 text-muted" style="padding: 0; margin: 0;">
                                <span class="badge badge-primary" style="opacity: 0.5; font-size: 10px">Hikmah</span>
                                <p style="text-transform: uppercase; font-weight: 900">Berebut ikut masuk surga
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 desktop-artikel">
                    <div class="blog_one_right">
                        <div class="blog_one_carousel owl-theme owl-carousel">
                            <!--Blog One Single-->
                            <div class="blog_one_single">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="1.jpeg" alt="">
                                    </div>
                                    <div class="blog_one_date_box">
                                        <p>Kajian Kontemporer</p>
                                    </div>
                                </div>
                                <div class="blog_one_content_box">
                                    <h3 style="text-transform: uppercase"><a href="#">Selamat datang bulan suci ramadhan</a>
                                    </h3>
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><span>/</span></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 0
                                                Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Blog One Single-->
                            <div class="blog_one_single">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="3.jpeg" alt="">
                                    </div>
                                    <div class="blog_one_date_box">
                                        <p>Kajian Al Quran</p>
                                    </div>
                                </div>
                                <div class="blog_one_content_box">
                                    <h3 style="text-transform: uppercase"><a href="#">Ramadhan menjadi ladang pahala</a>
                                    </h3>
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><span>/</span></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 0
                                                Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Blog One Single-->
                            <div class="blog_one_single">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="2.jpeg" alt="">
                                    </div>
                                    <div class="blog_one_date_box">
                                        <p>Hikmah</p>
                                    </div>
                                </div>
                                <div class="blog_one_content_box">
                                    <h3 style="text-transform: uppercase"><a href="#">MERENUNGI KEHIDUPAN, MENGHITUNG
                                            AMAL</a></h3>
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><span>/</span></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 0
                                                Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Blog One Single-->
                            <div class="blog_one_single">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="4.jpeg" alt="">
                                    </div>
                                    <div class="blog_one_date_box">
                                        <p>Hikmah</p>
                                    </div>
                                </div>
                                <div class="blog_one_content_box">
                                    <h3 style="text-transform: uppercase"><a href="#">Berebut ikut masuk surga</a></h3>
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><span>/</span></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 0
                                                Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Blog One Single-->
                            <div class="blog_one_single">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="5.jpeg" alt="">
                                    </div>
                                    <div class="blog_one_date_box">
                                        <p>Konsultasi Fiqih</p>
                                    </div>
                                </div>
                                <div class="blog_one_content_box">
                                    <h3 style="text-transform: uppercase"><a href="#">SHALAT DALAM KEADAAN PAKAIAN BERNAJIS
                                            DI...</a></h3>
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><span>/</span></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 0
                                                Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Blog One Single-->
                            <div class="blog_one_single">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="6.jpeg" alt="">
                                    </div>
                                    <div class="blog_one_date_box">
                                        <p>Konsultasi Pembelajaran</p>
                                    </div>
                                </div>
                                <div class="blog_one_content_box">
                                    <h3 style="text-transform: uppercase"><a href="#">AGAR SANTRI KERASAN DI KELAS</a></h3>
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><span>/</span></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 0
                                                Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Two End-->
    <section class="listing_details_bottom" style="margin-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="listing_details_bottom_left">
                        <div class="listing_details_bottom_left_content">
                            <ul class="post_rating_and_view_list list-unstyled">
                                <li><i class="fa fa-heart"></i>Ber'Amal dan Ber'Sedekah Bersama LAZIS NURUL FALAH</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Are You Ready Start-->
    <section class="are_you_ready two jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url({{asset('sedekah.jpg')}})" id="beramal">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="are_you_ready_content" style="align-self: center; align-content: center; align-items: center; text-align: center">
                        <div class="are_you_ready_shape"><img src="assets/images/shapes/are_you_ready_shape.png" alt="">
                        </div>
                        <h2>Ramadhan Bersama <br> Al Qur'an</h2>
                        <a href="https://tabungamal.id/ramadhan/" target="_blank" class="thm-btn">KUNJUNGI</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="beramal-mobile">
        <img src="{{asset('ramdan2.png')}}" style="max-width: 100%" alt="">
        <div class="container" style="text-align: center; font-size: 30px; font-weight: 200">
            <h5 style="font-weight: 900">MARI SEMPURNAKAN IBADAH DI BULAN SUCI RAMADHAN DENGAN BERAMAL DAN BERSEDEKAH</h5>
            <br>
            <a href="https://tabungamal.id/ramadhan/" target="_blank" class="thm-btn">KUNJUNGI</a>
            <br>
        </div>
    </section>
    <!--Are You Ready End--> 

    <!--Brand One Start-->
    <div class="brand_one" style="padding: 20px; margin-top: 20px">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 1000 }, "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 5
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 5
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 5
                            },
                            "767": {
                                "spaceBetween": 50,
                                "slidesPerView": 5
                            },
                            "991": {
                                "spaceBetween": 50,
                                "slidesPerView": 5
                            },
                            "1199": {
                                "spaceBetween": 100,
                                "slidesPerView": 5
                            }
                        }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide mitra">
                        <img src="act.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide mitra">
                        <img src="behaestex.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide mitra">
                        <img src="bg.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide mitra">
                        <img src="bri.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide mitra">
                        <img src="bulog.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide mitra">
                        <img src="foz.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide mitra">
                        <img src="jtv.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide mitra">
                        <img src="kemenag.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide mitra">
                        <img src="pln.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide mitra">
                        <img src="pt.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide mitra">
                        <img src="Ybm.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </div>
@endsection
