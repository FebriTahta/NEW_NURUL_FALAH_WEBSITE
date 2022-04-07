@extends('layouts.master')

@section('head')

    <meta property="og:title" content="{{$post->judul}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://nurulfalah.org/post/{{$post->jenisposting->slug}}/{{$post->slug}}" />
    {{-- <meta property="og:image" content="http://my.site.com/images/thumb.png" /> --}}
    <meta property="og:image" content="{{asset('img_thumbnail/'.$post->thumbnail)}}" />
    <meta property="og:description" content="{{substr($post->deskripsi,0,250)}}" />
    <meta name="theme-color" content="#FF0000">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include this to make the og:image larger -->
    <meta name="twitter:card" content="summary_large_image">

<link href="{{ asset('/assets3/css/detail-page.css') }}" rel="stylesheet">
<link href="{{ asset('/assets3/css/blog.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container margin_detail_2">
    <div class="row">
        <div class="col-lg-8">
            <div class="detail_page_head clearfix">
                {{-- <div class="rating">
                    <div class="score"><span>15 view</div>
                </div> --}}
                <div class="title">
                    <h1 style="text-transform: uppercase">{{$post->judul}}</h1>
                    {{Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM Y')}}
                    <ul style="list-style: none">
                        <li><a class="badge badge-info" style="color: white; padding: 5px">{{$post->kategoriposting->name}}</a></li>
                    </ul>
                </div>
            </div>
            <!-- /detail_page_head -->
            <h6 style="margin-top: 10px">{{$post->sumberposting->name}}</h6>
        </div>
        <div class="col-lg-4">
            <div class="pictures magnific-gallery clearfix">
                @foreach ($post->imageposting as $item)
                <figure>
                    <a href="{{asset('img_posting/'.$item->img)}}" title="Photo title" data-effect="mfp-zoom-in">
                        <img src="{{asset('img_posting/'.$item->img)}}" data-src="{{asset('img_posting/'.$item->img)}}" class="lazy loaded" alt="" data-was-processed="true">
                    </a>
                </figure>
                @endforeach
                {{-- <figure>
                    <a href="img/detail_gallery/detail_5.jpg" title="Photo title" data-effect="mfp-zoom-in">
                        <span class="d-flex align-items-center justify-content-center">+10</span>
                        <img src="img/thumb_detail_5.jpg" data-src="img/thumb_detail_5.jpg" class="lazy loaded" alt="" data-was-processed="true">
                    </a>
                </figure> --}}
            </div>
        </div>
    </div>
    <!-- /row -->
</div>

<nav class="secondary_nav sticky_horizontal" style="background: linear-gradient(to right, #33ccff 0%, #99ffb3 100%);">
    <div class="container">
        <ul id="secondary_nav" >
            <li><a href="https://tabungamal.id" target="_blank" style="background-color: white">Amil Zakat LAZIS NF</a></li>
        </ul>
    </div>
    <span></span>
</nav>

<div class="container margin_60_20">			
    <div class="row">
        <div class="col-lg-9">
            <div class="singlepost">
                <figure><img alt="" class="img-fluid" src="{{asset('img_thumbnail/'.$post->thumbnail)}}"></figure>
                <h1>{{$post->judul}}</h1>
                <div class="postmeta">
                    <ul>
                        <li><a href="#"><i class="icon_folder-alt"></i> {{$post->kategoriposting->name}}</a></li>
                        <li><a href="#"><i class="icon_pencil-edit"></i> {{$post->sumberposting->name}}</a></li>
                    </ul>
                </div>
                <!-- /post meta -->
                <div class="post-content" style="text-align: justify; max-width: 100%;">
                    <div class="dropcaps" style="max-width: 100%">
                        <p style="max-width: 100%">{!!$post->deskripsi!!}</p>
                    </div>
                </div>
                <!-- /post -->
            </div>
            <!-- /single-post -->

            {{-- <div id="comments">
                <h5>Comments</h5>
                <ul>
                    <li>
                        <div class="avatar">
                            <a href="#"><img src="img/avatar1.jpg" alt="">
                            </a>
                        </div>
                        <div class="comment_right clearfix">
                            <div class="comment_info">
                                By <a href="#">Anna Smith</a><span>|</span>25/3/2022<span>|</span><a href="#">Hapus</a>
                            </div>
                            <p>
                                Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                            </p>
                        </div>
                    </li>
                </ul>
            </div> --}}

            <hr>

            <br>
            {{-- <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" name="name" id="name2" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" name="email" id="email2" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <input type="text" name="email" id="website3" class="form-control" placeholder="Website">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="comments" id="comments2" rows="6" placeholder="Comment"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" id="submit2" class="btn btn-primary">TINGGALKAN KOMENTAR</button>
            </div> --}}

        </div>
        <!-- /col -->

        <aside class="col-lg-3">
            <div class="widget">
                <div class="widget-title first">
                    <h4>Latest Post</h4>
                </div>
                <ul class="comments-list">
                    @foreach ($latest as $item)
                    <li>
                        <div class="alignleft">
                            <a href="#0"><img src="{{asset('img_thumbnail/'.$item->thumbnail)}}" alt=""></a>
                        </div>
                        <small>{{$item->kategoriposting->name}} - {{Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y')}}</small>
                        <h3><a href="#" title="" style="text-transform: lowercase">{{ucwords($item->judul)}}</a></h3>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- /widget -->
            <div class="widget">
                <div class="widget-title">
                    <h4>Categories</h4>
                </div>
                <ul class="cats">
                    @foreach ($categories as $item)
                        @if ($item->posting->count() > 0)
                            <li><a href="#">{{$item->name}} <span>({{$item->posting->count()}})</span></a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <!-- /widget -->
            <div class="widget">
                <div class="widget-title">
                    <h4>Popular Tags</h4>
                </div>
                {{-- <div class="tags"> --}}
                    {{-- <a href="#">Food</a>
                    <a href="#">Bars</a>
                    <a href="#">Cooktails</a>
                    <a href="#">Shops</a>
                    <a href="#">Best Offers</a>
                    <a href="#">Transports</a>
                    <a href="#">Restaurants</a> --}}
                    <a href="https://tabungamal.id/ramadhan">
                        <img src="{{asset('bersamaquran.png')}}" style="max-width: 100%" alt="">
                    </a>
                    {{-- Ber Amal dan Ber Zakat bersama LAZIS Nurul Falah.
                    Click disini untuk <a class="text-primary" target="_blank" href="https://tabungamal.id/ramadhan/">zakat dibulan ramadhan</a>
                    atau click disini untuk <a class="text-primary" target="_blank" href="https://tabungamal.id">lebih detail tentang lazis Nurul Falah</a> --}}
                {{-- </div> --}}
            </div>
            <!-- /widget -->
        </aside>
        <!-- /aside -->
    </div>
    <!-- /row -->	
</div>
@endsection