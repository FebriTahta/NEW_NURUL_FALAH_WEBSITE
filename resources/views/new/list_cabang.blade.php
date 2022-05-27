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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('css')
<style>
    /* desktop */
    @media (min-width: 501px) {
       

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
                    <li class="breadcrumb-item active"> Daftar Cabang</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <section id="blog-item" class="blog-item-post">
        <div class="container">
            <div class="blog-content-details">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-post-content">
                            <div class="short-filter-tab">
                                <div class="tab-button blog-button ul-li text-center">
                                    <div class="side-bar-search">
                                        <form action="#" method="get">
                                            <input type="text" class="" placeholder="Cari Cabang">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="genius-post-item">
                                <div class="tab-container">

                                    <div id="tab2" class="tab-content-1 pt35" style="display: none;">
                                        <div class="blog-list-view">
                                            <div class="row">
                                                @foreach ($cabang['data']['data'] as $item)
                                                <div class="col-md-6" >
                                                    <div class="list-blog-item" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="blog-post-img-content">
                                                                    <div class="blog-img-date relative-position">
                                                                        <div class="blog-thumnile">
                                                                            <img src="{{asset('utama/img/blog/bp-1.jpg')}}" style="min-height: 170px; width: 100%" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="blog-title-content headline" style="padding: 5%">
                                                                    <h3 style="font-size: 14px; margin-bottom: 5px; padding-bottom: 0;"><a href="#">{{$item['name']}} ({{$item['nama']}}).</a></h3>
                                                                    <div class="blog-content" style="font-size: 13px; padding: 0;">
                                                                        {{$item['alamat']}}
                                                                    </div>
                                                                    <i class="fas fa-phone"></i> / <i class="fa fa-whatsapp"></i><a href="#" class="bold-font" style="font-size: 14px"> {{$item['telp']}}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div><!-- 2nd tab -->
                                </div>
                            </div>


                            <div class="couse-pagination text-center ul-li">
                                <ul>
                                    @foreach ($cabang['data']['links'] as $item)
                                        
                                        @if (substr($item['url'], -1) == 1)
                                            
                                        @else
                                        <li 
                                            @if (substr($item['url'], -1) == $this_page)
                                            class="active"
                                            @endif
                                        ><a href="/cabang/page/{{substr($item['url'], -1)}}">{{substr($item['url'], -1)}}</a></li>
                                        @endif
                                    @endforeach
                                    {{-- <li class="pg-text"><a href="#">PREV</a></li>
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li class="active"><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">15</a></li>
                                    <li class="pg-text"><a href="#">NEXT</a></li> --}}
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
                                <h2 class="widget-title text-capitalize">blog <span>Categories.</span></h2>
                                <div class="post-categori ul-li-block">
                                    <ul>
                                        @foreach ($kategori as $item)
                                        <li class="cat-item"><a href="#">{{$item->kategori_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="side-bar-widget">
                                <h2 class="widget-title text-capitalize"><span>Related </span>News.</h2>
                                <div class="latest-news-posts">

                                    @foreach ($berita as $item)
                                    <div class="latest-news-area">
                                        <div class="latest-news-thumbnile relative-position">
                                            <img src="{{$item->thumbnail}}" alt="">
                                            <div class="hover-search">
                                                <i class="fas fa-search"></i>
                                            </div>
                                            <div class="blakish-overlay"></div>
                                        </div>
                                        <div class="date-meta">
                                            <i class="fas fa-calendar-alt"></i> {{$item->tanggal}}
                                        </div>
                                        <h3 class="latest-title bold-font"><a href="#">{{$item->judul}}.</a></h3>
                                    </div>
                                    @endforeach
                                    
                                    <div class="view-all-btn bold-font">
                                        <a href="/">View All News <i class="fas fa-chevron-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="side-bar-widget">
                                <h2 class="widget-title text-capitalize">Popular <span>Tag's.</span></h2>
                                <div class="tag-clouds ul-li">
                                    <ul>
                                        @foreach ($kategori as $item)
                                        <li><a href="#">{{$item->kategori_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="side-bar-widget">
                                <h2 class="widget-title text-capitalize"><span>Featured</span> Course.</h2>
                                <div class="featured-course">
                                    <div class="best-course-pic-text relative-position">
                                        <div class="best-course-pic relative-position">
                                            <img src="assets/img/blog/fb-1.jpg" alt="">
                                            <div class="trend-badge-2 text-center text-uppercase">
                                                <i class="fas fa-bolt"></i>
                                                <span>Trending</span>
                                            </div>
                                        </div>
                                        <div class="best-course-text">
                                            <div class="course-title mb20 headline relative-position">
                                                <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                            </div>
                                            <div class="course-meta">
                                                <span class="course-category"><a href="#">Web Design</a></span>
                                                <span class="course-author"><a href="#">250 Students</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection