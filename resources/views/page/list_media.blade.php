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


        @media (min-width:701px) {
            .floating-container {
                position: fixed;
                width: 100px;
                height: 100px;
                bottom: 50px;
                right: 0;
                margin: 15px 10px;
            }

            .floating-container:hover {
                height: 300px;
            }

            .floating-container:hover .floating-button {
                box-shadow: 0 10px 25px rgba(44, 179, 240, 0.6);
                -webkit-transform: translatey(5px);
                transform: translatey(5px);
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
            }

            .floating-container:hover .element-container .float-element:nth-child(1) {
                -webkit-animation: come-in 0.4s forwards 0.2s;
                animation: come-in 0.4s forwards 0.2s;
            }

            .floating-container:hover .element-container .float-element:nth-child(2) {
                -webkit-animation: come-in 0.4s forwards 0.4s;
                animation: come-in 0.4s forwards 0.4s;
            }

            .floating-container:hover .element-container .float-element:nth-child(3) {
                -webkit-animation: come-in 0.4s forwards 0.6s;
                animation: come-in 0.4s forwards 0.6s;
            }

            .floating-container .floating-button {
                position: absolute;
                width: 50px;
                height: 50px;
                background: #2cb3f0;
                bottom: 0;
                border-radius: 50%;
                left: 0;
                right: 0;
                margin: auto;
                color: white;
                line-height: 50px;
                text-align: center;
                font-size: 23px;
                z-index: 100 !important;
                box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
                cursor: pointer;
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
            }

            .floating-container .float-element {
                position: relative;
                display: block;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                margin: 15px auto;
                color: white;
                font-weight: 500;
                text-align: center;
                line-height: 50px;
                z-index: 0;
                opacity: 0;
                -webkit-transform: translateY(100px);
                transform: translateY(100px);
            }

            .floating-container .float-element .material-icons {
                vertical-align: middle;
                font-size: 16px;
            }

            .floating-container .float-element:nth-child(1) {
                background: #42A5F5;
                box-shadow: 0 20px 20px -10px rgba(66, 165, 245, 0.5);
            }

            .floating-container .float-element:nth-child(2) {
                background: #4CAF50;
                box-shadow: 0 20px 20px -10px rgba(76, 175, 80, 0.5);
            }

            .floating-container .float-element:nth-child(3) {
                background: #FF9800;
                box-shadow: 0 20px 20px -10px rgba(255, 152, 0, 0.5);
            }
        }

        @media (max-width:700px) {}

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
                            </ul>
                        </div>
                    </div>
                    <div class="listing_details_bottom_right">
                        <div class="listing_details_bottom_right_btn">
                            <a href="https://tabungamal.id" target="_blank" aria-disabled="true"><i
                                    class="fa fa-arrow-right"></i> Lazis Nurul Falah</a>
                            <a href="/contact"><i class="fa fa-envelope"></i>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cities_one" style="padding-top: 20px; min-height: 300px; background-color: #ececec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <input type="text" style="width: 100%;" class="form-control"
                        placeholder="Cari {{ $jenis->name }} disini ...">
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12" style="display: none">
                    <div class="card"
                        style="background-color: darkslategrey; color: white; padding: 20px; border-radius: 10px; font-size: 20px">
                        {{ $jenis->name }} tidak ditemukan</div>
                </div>
            </div>
            <div class="row " style="padding: 0;">
                @foreach ($post as $item)
                <div class="container">
                    <div class="card col-12 col-md-6" style="background-color: rgb(255, 255, 255); box-shadow: 5px 10px #c4bcbc; margin-top: 20px; border-radius: 10px">
                        <div class="row" style="padding-top: 10px; padding-bottom: 10px">
                            <div class="col-md-6 col-6">
                                <img style="max-width: 100%; border-radius: 10px" src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt="">
                            </div>
                            <div class="col-md-6 col-6">
                                <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}"
                                    style="color: cadetblue;text-transform: uppercase; font-weight: 900; padding: 0; margin: 0;">{{ substr($item->judul, 0, 25) }}
                                    @if (strlen($item->judul) > 35)
                                        ...
                                    @endif
                                </a><br>
                                <span class="badge badge-info"
                                    style="opacity: 0.85; font-size: 10px">{{ $item->kategoriposting->name }}</span><br>
                                <small>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </section>
@endsection
