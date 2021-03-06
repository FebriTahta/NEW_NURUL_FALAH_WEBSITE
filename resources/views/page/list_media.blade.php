@extends('layouts.master')

@section('head')
    <style>
        .blog-card {
            position: absolute;
            height: 370px;
            width: 95%;
            max-width: 850px;
            margin: auto;
            border-radius: 25px;
            background: white;
            box-shadow: 0px 10px 50px rgba(252, 56, 56, .3);
        }

        .inner-part {
            position: absolute;
            display: flex;
            height: 360px;
            align-items: center;
            justify-content: center;
            padding: 0 25px;
        }

        #imgTap:checked~.inner-part {
            padding: 0;
            transition: .1s ease-in;
        }

        .inner-part .img {
            height: 260px;
            width: 260px;
            flex-shrink: 0;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 2px 3px 15px rgba(252, 56, 56, .1);
        }

        #imgTap:checked~.inner-part .img {
            height: 370px;
            width: 850px;
            z-index: 99;
            margin-top: 10px;
            transition: .3s .2s ease-in;
        }

        .img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            cursor: pointer;
            opacity: 0;
            transition: .6s;
        }

        #tap-1:checked~.inner-part .img-1,
        #tap-2:checked~.inner-part .img-2,
        #tap-3:checked~.inner-part .img-3 {
            opacity: 1;
            transition-delay: .2s;
        }

        .content {
            padding: 0 20px 0 35px;
            width: 530px;
            margin-left: 50px;
            opacity: 0;
            transition: .6s;
        }

        #imgTap:checked~.inner-part .content {
            display: none;
        }

        #tap-1:checked~.inner-part .content-1,
        #tap-2:checked~.inner-part .content-2,
        #tap-3:checked~.inner-part .content-3 {
            opacity: 1;
            margin-left: 0px;
            z-index: 100;
            transition-delay: .3s;
        }

        .content span {
            display: block;
            color: #7b7992;
            margin-bottom: 15px;
            font-size: 22px;
            font-weight: 500
        }

        .content .title {
            font-size: 30px;
            font-weight: 700;
            color: #0d0925;
            margin-bottom: 20px;
        }

        .content .text {
            color: #4e4a67;
            font-size: 19px;
            margin-bottom: 30px;
            line-height: 1.5em;
            text-align: justify;
        }

        .content button {
            display: inline-flex;
            padding: 15px 20px;
            border: none;
            font-size: 16px;
            text-transform: uppercase;
            color: #fff0e6;
            font-weight: 600;
            letter-spacing: 1px;
            border-radius: 50px;
            cursor: pointer;
            outline: none;
            border: 1px solid #fd3535;
            background: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
        }

        .content button:hover {
            background: linear-gradient(147deg, #fe791b 0%, #fd1c1c 74%);
        }

        .sliders {
            position: absolute;
            bottom: 25px;
            left: 65%;
            transform: translateX(-50%);
            z-index: 12;
        }

        #imgTap:checked~.sliders {
            display: none;
        }

        .sliders .tap {
            position: relative;
            height: 10px;
            width: 50px;
            background: #d9d9d9;
            border-radius: 5px;
            display: inline-flex;
            margin: 0 3px;
            cursor: pointer;
        }

        .sliders .tap:hover {
            background: #cccccc;
        }

        .sliders .tap:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            height: 100%;
            width: -100%;
            background: linear-gradient(147deg, #f6b323 0%, #f23b26 74%);
            border-radius: 10px;
            transform: scaleX(0);
            transition: transform .6s;
            transform-origin: left;
        }

        input[type="radio"],
        input[type="checkbox"] {
            display: none;
        }

        #tap-1:checked~.sliders .tap-1:before,
        #tap-2:checked~.sliders .tap-2:before,
        #tap-3:checked~.sliders .tap-3:before {
            transform: scaleX(1);
            width: 100%;
        }

    </style>
@endsection

@section('content')
    <section class="listing_details_bottom" style="background-color: rgb(32, 175, 175);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="listing_details_bottom_left">
                        <div class="listing_details_bottom_left_content">
                            <ul class="post_rating_and_view_list list-unstyled">
                                <li style="color: white; text-transform: uppercase"><i class="fas fa-video-camera"
                                        style="color: white"></i> Daftar {{ $jenis->name }}</li>
                                <small class="text-white" sty>Menampilkan total {{ $total }} {{ $jenis->name }} /
                                    cari pada kolom pencarian berikut</small>
                            </ul>
                        </div>
                    </div>
                    <div class="listing_details_bottom_right">
                        <div class="listing_details_bottom_right_btn">
                            {{-- <a href="https://tabungamal.id" target="_blank" aria-disabled="true"><i
                                    class="fa fa-arrow-right"></i> Lazis Nurul Falah</a>
                            <a href="/contact"><i class="fa fa-envelope"></i>Contact</a> --}}
                            <input type="text" style="width: 100%;" class="form-control" id="search" name="keyword"
                                    placeholder="Cari {{ $jenis->name }} disini ...">
                            <input type="hidden" style="width: 100%;" class="form-control" id="jenisposting_slug"
                                    value="{{$jenis->slug}}">
                                    {{ csrf_field() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cities_one" style="padding-top: 5px; min-height: 300px; background-color: #f0f0f0">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="display: none">
                    <div class="card"
                        style="background-color: darkslategrey; color: white; padding: 20px; border-radius: 10px; font-size: 20px">
                        {{ $jenis->name }} tidak ditemukan</div>
                </div>
            </div>
            <hr style="background: linear-gradient(to right, #3369ff 0%, #99ffb3 100%)">
            <div class="row" style="padding: 0;" id="section_append">
                <div class="scrolling-pagination" >
                    @foreach ($post as $item)
                        <div class="container section_list" style="margin-bottom: 20px">
                            <div class="card col-12 col-md-6"
                                style="background-color: rgb(255, 255, 255); box-shadow: 5px 10px #c4bcbc;border-radius: 10px">
                                <div class="row" style="padding-top: 10px; padding-bottom: 10px">
                                    <div class="col-md-6 col-6" style="padding-right: 0; margin-right: 0;">
                                        <img style="max-width: 100%; border-radius: 5px"
                                            src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt="">
                                    </div>
                                    <div class="col-md-6 col-6" style="padding-left: 10; margin-left: 10;">
                                        <div class="contents">
                                            <h6 ><a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}"
                                                style="color: cadetblue;text-transform: uppercase; font-weight: 900; padding: 0; margin: 0; font-size: 12px">{{ substr($item->judul, 0, 50) }}
                                                @if (strlen($item->judul) > 50)
                                                    ..
                                                @endif
                                            </a><h6><br>
                                            <span class="badge badge-info"
                                                style="opacity: 0.85; font-size: 10px">{{ $item->kategoriposting->name }}</span><br>
                                            <small>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $post->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.scrolling-pagination').jscroll({
                autoTrigger: true,
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.scrolling-pagination',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });
    </script>
    <script type="text/javascript">
    const myTimeout = setTimeout(mySearch, 3000);
    function mySearch(){
        $('#search').on('keyup', function() {
            $('.append').remove();
            var query = $(this).val();
            var jenis = $('#jenisposting_slug').val();
            var _token = $('input[name="_token"]').val();
                if (query.length > 0) {
                    if (query !== null) {
                        $.ajax({
                            url:"/search-media",
                            method:"POST",
                            data:{  
                                jenis:jenis,
                                query:query, 
                                _token:_token
                            },
                            success:function(data){
                                $.each(data.data, function( index, item ) {
                                    console.log(item.slug);
                                    var judul = item.judul.substring(0,30)
                                    
                                    $('.section_list').hide();
                                    if (item.judul.length > 30) {
                                        $('#section_append').prepend('<td class="append">'
                                            +'<div class="container" style="margin-bottom: 20px">'
                                                +'<div class="card col-12 col-md-6"'
                                                    +'style="background-color: rgb(255, 255, 255); box-shadow: 5px 10px #c4bcbc;border-radius: 10px">'
                                                    +'<div class="row" style="padding-top: 10px; padding-bottom: 10px">'
                                                        +'<div class="col-md-6 col-6">'
                                                            +'<img style="max-width: 100%; border-radius: 5px" src="https://nurulfalah.org/img_thumbnail/'+item.thumbnail+'" alt="">'
                                                        +'</div>'
                                                        +'<div class="col-md-6 col-6">'
                                                            +'<a href="/post/'+item.jenisposting.slug+'/'+item.slug+'"'
                                                                +'style="color: cadetblue;text-transform: uppercase; font-weight: 900; padding: 0; margin: 0; font-size: 14px">'+judul+'...'
                                                            +'</a><br>'
                                                            +'<span class="badge badge-info"'
                                                            +'style="opacity: 0.85; font-size: 10px">'+item.kategoriposting.name+'</span><br>'
                                                            +'<small></small>'
                                                        +'</div>'
                                                    +'</div>'
                                                +'</div>'
                                            +'</div>'
                                        +'</td>');
                                    }else{
                                        $('#section_append').prepend('<td class="append">'
                                            +'<div class="container" style="margin-bottom: 20px">'
                                                +'<div class="card col-12 col-md-6"'
                                                    +'style="background-color: rgb(255, 255, 255); box-shadow: 5px 10px #c4bcbc;border-radius: 10px">'
                                                    +'<div class="row" style="padding-top: 10px; padding-bottom: 10px">'
                                                        +'<div class="col-md-6 col-6">'
                                                            +'<img style="max-width: 100%; border-radius: 5px" src="https://nurulfalah.org/img_thumbnail/'+item.thumbnail+'" alt="">'
                                                        +'</div>'
                                                        +'<div class="col-md-6 col-6">'
                                                            +'<a href="/post/'+item.jenisposting.slug+'/'+item.slug+'"'
                                                                +'style="color: cadetblue;text-transform: uppercase; font-weight: 900; padding: 0; margin: 0; font-size: 14px">'+judul+''
                                                            +'</a><br>'
                                                            +'<span class="badge badge-info"'
                                                            +'style="opacity: 0.85; font-size: 10px">'+item.kategoriposting.name+'</span><br>'
                                                            +'<small></small>'
                                                        +'</div>'
                                                    +'</div>'
                                                +'</div>'
                                            +'</div>'
                                        +'</td>');
                                    }
                                });
                            }
                        });
                    }
                }else{
                    $('td').remove();
                    $('.section_list').show();
                }
        })
    }
        
        
    </script>
@endsection
