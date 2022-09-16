@extends('new_layouts.master')

@section('meta')
    <title style="text-transform: capitalize">Privasi dan Kebijakan Tilawati Mobile</title>
    <meta property="og:title" content="{Privasi dan Kebijakan Tilawati Mobile" style="text-transform: capitalize" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://nurulfalah.org/post/privasi-kebijakan-penggunaan/tilawati-mobile" />
    <meta name="theme-color" content="#8CC0DE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary_large_image">
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
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
                    <li class="breadcrumb-item active"> Privasi & Kebijakan</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="blog-item" class="blog-item-post" style="margin-top: -50px">
    <div class="container">
        <div class="blog-content-details">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-details-content">
                        <div class="post-content-details">
                            
                            <h2>Privasi & Kebijakan Penggunaan Tilawati Mobile</h2>

                            <div style="text-align: justify;">
                                <p style="font-size: 12px">
                                
                                    Kebijakan Syarat Dan Ketentuan Penggunaan Aplikasi (INDONESIA & ENGLISH)
                                    
                                </p>
                                <ul style="font-size:12px">
                                    <li>
                                        - Aplikasi ini dapat digunakan oleh semua usia 
                                    </li>
                                    <li>
                                        - Aplikasi ini bertujuan untuk mempermudah dalam pembelajaran huruf hijaiyah metode Tilawati
                                    </li>
                                    <li>
                                        - Syarat penggunaan aplikasi ini diharuskan memasukkan data pribadi untuk mengakses fitur selanjutnya
                                    </li>
                                    <li>
                                        - kami jaga keamanan data pribadi pengguna
                                    </li>
                                    <li>
                                        - gunakan jaringan internet saat download aplikasi ini
                                    </li>
                                    <li>
                                        - This application can be used by all ages
                                    </li>
                                    <li>
                                        - This application aims to make it easier to learn hijaiyah letters using the Tilawati method
                                    </li>
                                    <li>
                                        - Terms of use of this application are required to enter personal data to access further features
                                    </li>
                                    <li>
                                        - we maintain the security of users' personal data
                                    </li>
                                    <li>
                                        - use the internet network when downloading this application
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-share-tag">
                            <div class="share-text float-left">
                                Share this news
                            </div>
                            <div class="share-social ul-li float-right">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="next-prev-post">
                            <div class="next-post-item float-left">
                                <a href="#"><i class="fas fa-arrow-circle-left"></i>Previous Post</a>
                            </div>

                            <div class="next-post-item float-right">
                                <a href="#">Next Post<i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog-recent-post about-teacher-2">
                        <div class="section-title-2  headline text-left">
                            <h2><span>Related</span> News</h2>
                        </div>
                        <div class="recent-post-item">
                            <div class="row">
                                @foreach ($related as $item)
                                <div class="col-md-6">
                                    <div class="blog-post-img-content">
                                        <div class="blog-img-date relative-position">
                                            <div class="blog-thumnile">
                                                <img src="{{$item->thumbnail}}" alt="">
                                            </div>
                                            <div class="course-price text-center gradient-bg">
                                                <span>{{$item->tanggal}}</span>
                                            </div>
                                        </div>
                                        <div class="blog-title-content headline">
                                            <h3><a href="/post/{{ $item->jenisposting->jenis_slug }}/{{ $item->slug }}">{{$item->judul}}</a></h3>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="side-bar">
                        <div class="side-bar-search">
                            <form action="#" method="get">
                                <input type="text" class="" placeholder="Search">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>

                        <div class="side-bar-widget">
                            <h2 class="widget-title text-capitalize">Kategori <span>{{$jenis}}.</span></h2>
                            <div class="post-categori ul-li-block">
                                <ul>
                                    @foreach ($kategori as $kategori)
                                        <li class="cat-item"><a href="#">{{$kategori->kategori_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="side-bar-widget">
                            <h2 class="widget-title text-capitalize">
                                <span>
                                @if ($jenis == 'berita')
                                    Artikel
                                @else
                                    Berita
                                @endif    
                                </span>
                                
                                Terbaru.</h2>
                            <div class="latest-news-posts">
                                @foreach ($terkini as $kini)
                                <div class="latest-news-area">
                                    <div class="latest-news-thumbnile relative-position">
                                        <img src="{{$kini->thumbnail}}" alt="">
                                        <div class="hover-search">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        <div class="blakish-overlay"></div>
                                    </div>
                                    <div class="date-meta">
                                        <i class="fas fa-calendar-alt"></i> {{$kini->tanggal}}
                                    </div>
                                    <h3 class="latest-title bold-font"><a href="/post/{{ $kini->jenisposting->jenis_slug }}/{{ $kini->slug }}">
                                        @if (strlen(strip_tags($kini->judul)) > 40)
                                        {{ substr(strip_tags($kini->judul), 0, 40) }}..
                                        @else
                                        {!! $kini->judul !!}
                                        @endif    
                                    </a></h3>
                                </div>
                                <!-- /post -->
                                @endforeach

                                <div class="view-all-btn bold-font">
                                    
                                    @if ($jenis == 'berita')
                                    <a href="/list/artikel">Daftar Artikel Selengkapnya <i class="fas fa-chevron-circle-right"></i></a>
                                    @else
                                    <a href="/list/berita">Daftar Berita Selengkapnya <i class="fas fa-chevron-circle-right"></i></a>
                                    @endif
                                   
                                </div>
                            </div>
                        </div>

                        <div class="side-bar-widget">
                            <h2 class="widget-title text-capitalize">Seluruh <span>Kategori.</span></h2>
                            <div class="tag-clouds ul-li">
                                <ul>
                                    @foreach ($allKategori as $allKat)
                                        <li><a href="#">{{$allKat->kategori_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="side-bar-widget">
                            <h2 class="widget-title text-capitalize"><span>Diklat / Pelatihan </span> Terbaru.</h2>
                            @if (count($diklat_online['data']) > 0)
                                @foreach ($diklat_online['data'] as $item)
                                    <div class="featured-course">
                                        <div class="best-course-pic-text relative-position">
                                            <div class="best-course-pic relative-position">
                                                <a href="https://registrasi.nurulfalah.org/{{$item['slug']}}">
                                                    <img src="https://admin.nurulfalah.org/image_flyer/{{$item['image']}}" alt="">
                                                </a>
                                                <div class="trend-badge-2 text-center text-uppercase">
                                                    <i class="fas fa-bolt"></i>
                                                    <span>Diklat</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                            <div class="featured-course">
                                <div class="best-course-pic-text relative-position">
                                    <div class="best-course-pic relative-position">
                                        <h5 style="color: red">Diklat Bulan Ini Sudah Ditutup / Belum Tersedia</h5>
                                        <p>Hubungi admin terkait jadwal Dikat / Pelatihan :</p>
                                        <a href="https://wa.me/6289523444715" id="wa" target="_blank" class="btn btn-success text-white" style="width: 100%"> <i class="fa fa-whatsapp"></i> Whatsapp</a>
                                        <p style="margin-top: 20px">Lihat Jadwal Diklat / Pelatihan Dibawah ini</p>
                                        <a href="/pelatihan" class="btn btn-primary text-white" style="width: 100%"><i class="fa fa-info"></i> Pelatihan</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection