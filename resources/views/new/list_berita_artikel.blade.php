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
                    <li class="breadcrumb-item active"> Daftar {{$jenis}}</li>
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
                    <div class="blog-post-content">
                        <div class="short-filter-tab">
                            <div class="tab-button blog-button ul-li text-center">
                                <ul class="product-tab">
                                    <div class="side-bar-search">
                                        <form action="#" method="get">
                                            <input type="text" id="s_m" placeholder="Search">
                                            <input type="text" id="t_d" placeholder="Daftar Artikel" disabled>
                                            <button type="submit" id="b_m"><i class="fas fa-search" ></i></button>
                                        </form>
                                    </div>
                                </ul>
                            </div>
                        </div>

                        <div class="genius-post-item">
                            <div class="tab-container">
                                <div id="tab1" class="tab-content-1 pt35 tab1">
                                    <div class="row">
                                        @foreach ($beritas as $item)
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
                                                    <h3>
                                                        <a href="/post/{{ $item->jenisposting->jenis_slug }}/{{ $item->slug }}">
                                                            @if (strlen($item->judul) > 20)
                                                                {{ substr($item->judul, 0, 20) }}..
                                                            @else
                                                                {{ $item->judul }}
                                                            @endif
                                                        </a>
                                                    </h3>
                                                    <div class="blog-content">
                                                        @if (strlen(strip_tags($item->deskripsi)) > 120)
                                                        {{ substr(strip_tags($item->deskripsi), 0, 120) }}..
                                                        @else
                                                        {!! $item->deskripsi !!}
                                                        @endif
                                                    </div>

                                                    <div class="view-all-btn bold-font">
                                                        <a href="/post/{{ $item->jenisposting->jenis_slug }}/{{ $item->slug }}">Read More <i class="fas fa-chevron-circle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div><!-- 1st tab -->

                                <div id="tab2" class="tab-content-1 pt35 tab2" >
                                    <div class="blog-list-view">
                                        @foreach ($beritas as $item)
                                        <div class="latest-news-area "  >
                                            <div class="latest-news-thumbnile relative-position">
                                                <img src="{{$item->thumbnail}}" alt="">
                                                <div class="hover-search">
                                                    <i class="fas fa-search"></i>
                                                </div>
                                                <div class="blakish-overlay"></div>
                                            </div>
                                            <div class="date-meta">
                                                <i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}
                                            </div>
                                            <h3 class="latest-title bold-font">
                                                <a href="/post/{{ $item->jenisposting->jenis_slug }}/{{ $item->slug }}">
                                                    @if (strlen(strip_tags($item->judul)) > 40)
                                                    {{ substr(strip_tags($item->judul), 0, 40) }}..
                                                    @else
                                                    {!! $item->judul !!}
                                                    @endif
                                                </a>
                                            </h3>
                                            <div class="course-viewer ul-li">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fas fa-eye"></i>
                                                            @if ($item->views !== null)
                                                             {{$item->views}}        
                                                            @else
                                                            ~ 0 
                                                            @endif 
                                                        </a>
                                                    </li>
                                                    <li><a href=""><i class="fas fa-comment-dots"></i> - </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                </div><!-- 2nd tab -->
                            </div>
                        </div>


                        
                        <div class="couse-pagination text-center ul-li">
                            <ul>
                                {{$beritas->links()}}
                            </ul>
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
                            <h2 class="widget-title text-capitalize"><span>Event </span> Terbaru.</h2>
                            <div class="featured-course">
                                <div class="best-course-pic-text relative-position">
                                    <div class="best-course-pic relative-position">
                                        <img src="{{asset('gambar1.jpeg')}}" alt="">
                                        <div class="trend-badge-2 text-center text-uppercase">
                                            <i class="fas fa-bolt"></i>
                                            <span>Trending</span>
                                        </div>
                                    </div>
                                    {{-- <div class="best-course-text">
                                        <div class="course-title mb20 headline relative-position">
                                            <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                        </div>
                                        <div class="course-meta">
                                            <span class="course-category"><a href="#">Web Design</a></span>
                                            <span class="course-author"><a href="#">250 Students</a></span>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection