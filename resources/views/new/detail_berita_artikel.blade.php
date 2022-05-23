@extends('new_layouts.master')

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
                    <li class="breadcrumb-item active"> Baca {{$jenis}}</li>
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
                            <div class="blog-detail-thumbnile mb35">
                                <img src="{{$post->thumbnail}}" alt="">
                            </div>
                            <h2>{{$post->judul}}</h2>

                            <div class="date-meta text-uppercase">
                                <span><i class="fas fa-calendar-alt"></i> {{$post->tanggal}}</span>
                                <span><i class="fas fa-user"></i> {{$post->sumberposting->sumber_name}}</span>
                                <span><i class="fas fa-comment-dots"></i> 15 COMMENTS</span>
                                {{-- <div class="float-right">
                                    <span>Share </span>
                                    <span><i class="fab fa-facebook-f"></i></span>
                                </div> --}}
                            </div>
                            <h3>{{$post->sumberposting->sumber_name}} </h3>
                            <div style="text-align: justify;">
                                <p>{!!$post->deskripsi!!}</p>
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
                        {{-- <div class="blog-category ul-li">
                            <ul>
                                <li><a href="#">fruits</a></li>
                                <li><a href="#">veegetable</a></li>
                                <li><a href="#">juices</a></li>
                            </ul>
                        </div> --}}
                        {{-- <div class="author-comment">
                            <div class="author-img">
                                <img src="assets/img/blog/ath.jpg" alt="">
                            </div>
                            <div class="author-designation-comment">
                                BY: <span>FRANK LAMPARD</span> 
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                </p>
                            </div>
                        </div> --}}
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