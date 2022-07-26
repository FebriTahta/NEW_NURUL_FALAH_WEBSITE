@extends('new_layouts.master')

@section('meta')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Product</title>
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('tumb.jpeg')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('tumb.jpeg')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('tumb.jpeg')}}">
<link rel="manifest" href="{{asset('asset/images/favicons/site.webmanifes')}}t">
<meta name="_token" content="{{ csrf_token() }}">
<meta name="theme-color" content="#8CC0DE">


@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .alert {
      padding: 20px;
      background-color: #86c6fa;
      color: white;
    }
    .alert2 {
      padding: 20px;
      background-color: #d88c8c;
      color: white;
    }
    
    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }
    
    .closebtn:hover {
      color: black;
    }
    </style>
  
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

        .card {
        position: relative;
        /* width: 320px;
        height: 420px; */
        /* background: #122936; */
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        border: none;

        }

        .card::before
        {
            content: '';
            position: absolute;
            top: -50%;
            width: 100%;
            height: 100%;
            background: #86c6fa;
            transform: skewY(345deg);
            transition: 0.5s;
        }

        .card:hover::before {
            top: -70%;
            transform: skewY(390deg);
        }

        .card::after {
            /* content: 'Nurul Falah'; */
            position: absolute;
            bottom: 40%;
            left: 11%;
            font-weight: 500;
            font-size: 3em;
            color: rgba(0,0,0,0.1);
            text-align: center;
        }

        .imgBox {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
            z-index: 1;
        }

        .card .imgBox img 
        {
            max-width: 100%;
            transition: 0.5s;
        }

        .card:hover .imgBox img 
        {
            max-width: 95%;
        }

        .card .contentBox 
        {
            position: relative;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 1;
        }

        .card .contentBox h3 {
            font-size: 18px;
            color: #86c6fa;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .card .contentBox .buy
        {
            position: relative;
            padding: 10px 30px;
            /* top: 10px; */
            opacity: 0;
            /* margin-top: 15px; */
            color: #ffffff;
            text-decoration: none;
            background: #86c6fa;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: 0.5s; 
        }

        .card:hover .contentBox .buy 
        {
            top: 0;
            opacity: 1;

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

        .card {
        position: relative;
        /* width: 320px;
        height: 420px; */
        /* background: #122936; */
        background: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        border: none;

        }

        .card::before
        {
            content: '';
            position: absolute;
            top: -70%;
            width: 100%;
            height: 100%;
            background: #86c6fa;
            transform: skewY(345deg);
            transition: 0.5s;
        }

        .card:hover::before {
            top: -80%;
            transform: skewY(390deg);
        }

        .card::after {
            /* content: 'Nurul Falah'; */
            position: absolute;
            bottom: 40%;
            left: 11%;
            font-weight: 500;
            font-size: 3em;
            color: rgba(0,0,0,0.1);
            text-align: center;
        }

        .imgBox {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
            z-index: 1;
        }

        .card .imgBox img 
        {
            max-width: 100%;
            transition: 0.5s;
        }

        .card:hover .imgBox img 
        {
            max-width: 95%;
        }

        .card .contentBox 
        {
            position: relative;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 1;
        }

        .card .contentBox h3 {
            font-size: 12px;
            color: #132e49;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .card .contentBox .buy
        {
            position: relative;
            padding: 5px 10px;
            /* top: 10px; */
            opacity: 0;
            /* margin-top: 15px; */
            color: #ffffff;
            text-decoration: none;
            font-size: 10px;
            background: #86c6fa;
            border-radius: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: 0.5s; 
        }

        .card:hover .contentBox .buy 
        {
            top: 0;
            opacity: 1;

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
                    <li class="breadcrumb-item active"> Daftar Product</li>
                </ul>
            </div>
        </div>
    </div>
</section>


{{-- <div class="container" > --}}
    <section id="blog-item" class="blog-item-post" style="margin-top: -50px">
        <div class="container">
            <div class="blog-content-details">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-post-content">
                            <div class="short-filter-tab">
                                <div class="tab-button blog-button ul-li text-center">
                                    <div class="side-bar-search">
                                        <form action="/product" method="get">
                                            <input type="text" class="" name="search" placeholder="Cari Product" required>
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @if (count($product) > 0)
                                @if ($search !== 'null')
                                    <div class="alert">
                                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                        Menemukan Total <strong>{{count($product)}} Product</strong>
                                    </div>
                                @endif
                            <b style="color: blue; margin-top: 20px; margin-bottom: 20px"></b>
                            <div class="genius-post-item">
                                <div class="tab-container">
                                    <div id="tab2" class="tab-content-1 pt35" style="display: none;">
                                        
                                        <div class="blog-list-view">
                                            <div class="row">
                                                @foreach ($product as $item)
                                                <div class=" col-sm-6 col-md-4 col-xl-4 col-lg-4 col-6 ">
                                                    <div class="card">
                                                        <div class="imgBox">
                                                            <img src="{{asset('product_img/'.$item->product_img)}}" alt="">
                                                        </div>
                                                        <div class="contentBox">
                                                            <h3>{{$item->product_name}}</h3>
                                                            <a href="#" class="buy"> Order Now</a>
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
                                <li style="list-style: none">
                                    <a href="">{{$product->links()}}</a>
                                </li>
                            </div>
                            
                            @else
                            <div class="alert2">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                @if ($search !== 'null')
                                    <strong>Product {{$search}} tidak ditemukan</strong>
                                @else
                                <strong>Product tersebut tidak ditemukan</strong>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="side-bar">
                            <div class="side-bar-search">
                                <form action="#" method="get">
                                    <input type="text" class="" placeholder="Cari Apapun Disini">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="modal_kontak" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content">
            
            <div class="modal-body" style="padding-bottom: 0;">
                <div class="row">
                    <div class="form-group col-xl-12 text-center">
                        <h5 class="text-uppercase" id="cabang"></h5>
                    </div>
                    <div class="form-group col-xl-6">
                        <a href="" id="telp" target="_blank" class="btn btn-primary text-white" style="width: 100%"> <i class="fa fa-phone"></i> Telephone</a>
                    </div>
                    <div class="form-group col-xl-6">
                        <a href="" id="wa" target="_blank" class="btn btn-success text-white" style="width: 100%"> <i class="fa fa-whatsapp"></i> Whatsapp</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="padding-top: 10px;">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
      
        </div>
      </div>
{{-- </div> --}}


@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        console.log('hei');
        $('#modal_kontak').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var telp = button.data('telp')
                var cabang = button.data('cabang')
                
                var telp_wa = telp.substring(1)
                var modal = $(this)
                modal.find('.modal-body #cabang').html(cabang);
                var tel = document.getElementById('telp');
                tel.href = "tel:"+telp;
                var wa = document.getElementById('wa');
                wa.href = 'https://wa.me/62'+telp;
            })
    })
   
</script>
@endsection