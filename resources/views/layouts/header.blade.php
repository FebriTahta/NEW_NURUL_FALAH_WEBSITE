<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nurul Falah</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('nf.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('nf.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('nf.png')}}">
    <link rel="manifest" href="{{asset('asset/images/favicons/site.webmanifes')}}t">

    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">



    <!-- Css-->
    <link rel="stylesheet" href="{{asset('asset/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/jarallax.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/vegas.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/nouislider.pips.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/tolips.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/jquery-ui.css')}}">
    <!-- Template styles -->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">

    {{-- <link href="{{asset('assets3/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets3/css/home.css')}}" rel="stylesheet"> --}}
    

    @yield('head')
    <style>
        @media (min-width: 501px) {
            #logo {
                max-height: 29px;
            }
            .banner-one {
                height: 900px;
            }
            .mitra {
                max-width: 100px;
            }
            #mobile_img {
                display: none;
            }
            .mobile-artikel {
                display: none;
            }
            .mobile-berita {
                display: none;
            }
            #jadwal_sholat_mobile {
                display: none;
            }
            #beramal-mobile {
                display: none;
            }
            .maps {
                width: 380px;
            }
            #tabungamal-mobile {
                display: none;
            }
            #nav-menu {
                display: none;
            }
            .strip figure {
				margin-bottom: 5px;
				overflow: hidden;
				position: relative;
				height: 210px !important;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				-ms-border-radius: 5px;
				border-radius: 5px;
				background-color: #ededed;
			}
            .phone_mobile_footer{
                display: none;
            }
        }

        @media (max-width:500px) {
            .desktop-berita {
                display: none;   
            }
            #logo {
                max-width: 100px;
            }
            #display_img {
                display: block;
            }
            #top_event {
                display: none;
            }
            
            .strip figure {
				margin-bottom: 5px;
				overflow: hidden;
				position: relative;
				height: 140px !important;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				-ms-border-radius: 5px;
				border-radius: 5px;
				background-color: #ededed;
			}
            #logo_img {
                display: none;
            }
            .mitra {
                max-width: 100px;
            }
            .desktop-artikel {
                display: none;
            }
            .artikel-text {
                display: none;
            }
            #beramal {
                display: none;
            }
            #logo-ramdan {
                margin-top: 50px;
            }
            #section-ramdan-mobile {
                display: none;
            }
            .maps {
                width: 290px;
            }
            #text-cabang {
                display: none;
            }
            #section-tabungamal {
                display: none;
            }
            #section-tabungamal2 {
                display: none;
            }
            .bottom-tabungamal {
                display: none;
            }
            .mobile_foot_hide {
                display: none;
            }
            .site_footer{
                bottom: 0;
            }
            .phone_mobile_footer{
                display: block;
            }
            .hidden_post_mobile {
                display: none;
            }
        }
        
    </style>
    <link rel="stylesheet" href="{{asset('mobilemenu/assets/css/styles.css')}}">
</head>

<body>

    {{-- <div class="preloader">
        <img src="{{asset('nf.png')}}" class="preloader__image" alt="">
    </div> --}}
    

    <div class="site-header__header-one-wrap clearfix">

        <div class="site-header__header-one-wrap clearfix">

            <div class="header_top_one">
                <div class="container">
                    <div class="header_top_one_inner clearfix">
                        <div class="header_top_one_logo_box float-left">
                            <div class="header_top_one_logo" id="logo_img">
                                <a href="/"><img  src="{{asset('logo-crop.png')}}" alt="" style="width: 120px; padding-top: 10px"></a>
                            </div>
                        </div>
                        <div class="header_top_one_content_box float-right">
                            <div class="header_top_one_content_box_top clearfix">
                                <div class="header_top_one_content_box_top_left float-left">
                                    <p>Welcome To Nurul Falah Surabaya</p>
                                </div>
                                <div class="header_top_one_content_box_top_right float-right">
                                    <ul class="list-unstyled header_top_one_content_box_top_right_list">
                                        <li><a href="{{route('contact_page')}}">Contact<span>/</span></a></li>
                                        <li><a href="#">Product<span>/</span></a></li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header_top_one_content_box_bottom">
                                <div class="header_top_one_content_box_bottom_inner clearfix">
                                    <div class="header_top_one_content_box_bottom__social_box">
                                        <div class="header_top_one_content_box_bottom__social">
                                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="header_top_one_content_box_bottom_contact_info">
                                        <ul
                                            class="header_top_one_content_box_bottom_contact_info_list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-phone-call"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Call Center</p>
                                                    <a href="tel:0318281278">(031) 8281278</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-message"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Send Email</p>
                                                    <a href="mailto:pes_nf@yahoo.co.id">pes_nf@yahoo.co.id</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav container">
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="/" class="nav__link {{ (request()->is('/')) ? 'active-link' : '' }} ">
                                <i class="fa fa-home"></i>
                                <span class="nav__name">Home</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="/media" class="nav__link {{ (request()->is('media')) ? 'active-link' : '' }}">
                                <i class='fa fa-video-camera'></i>
                                <span class="nav__name">Media</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="http://tilawati.id" target="_blank" class="nav__link">
                                <i class='fa fa-book'></i>
                                <span class="nav__name">Produk</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="/cabang" class="nav__link {{ (request()->is('/cabang')) ? 'active-link' : '' }}  ">
                                <i class='fa fa-user-circle'></i>
                                <span class="nav__name">Cabang</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <header class="main-nav__header-one">
                
                <div class="container">
                    <nav class="header-navigation one stricky">
                        <div class="container-box clearfix">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="main-nav__left main-nav__left_one float-left">
                                <a href="#" class="side-menu__toggler">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <div class="main-nav__main-navigation one clearfix">
                                    <ul class="main-nav__navigation-box float-left">
                                        <li>
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="{{ (request()->is('profile')) ? 'current' : '' }}">
                                            <a href="{{route('profile_page')}}">Profile</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Media</a>
                                            <ul>
                                                <li><a href="listing-1.html">Berita</a></li>
                                                <li><a href="listing-2.html">Artikel</a></li>
                                                <li><a href="listing-details.html">Majalah</a></li>
                                            </ul><!-- /.sub-menu -->
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Cabang</a>
                                            <ul>
                                                <li><a href="{{route('cabang_page')}}">Tilawati</a></li>
                                            </ul><!-- /.sub-menu -->
                                        </li>

                                        <li class="{{ (request()->is('product-list')) ? 'current' : '' }}">

                                            <a href="https://tilawati.id" target="_blank">Product</a>
                                           
                                        </li>

                                        <li >
                                            <a href="https://tabungamal.id" target="_blank">Ayo Donasi</a>
                                           
                                        </li>
                                        <li class="{{ (request()->is('contact')) ? 'current' : '' }}">
                                            <a href="{{route('contact_page')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div>
                            <div class="main-nav__right main-nav__right_one float-right">
                                <div class="header_btn_1">
                                    <a href="#" id="top_event" class="thm-btn">Events</a>
                                    <a href="/"><img id="mobile_img" src="{{asset('logo-crop.png')}}" style="width: 100px; margin-top: 5px;" alt=""></a>
                                </div>
                                <div class="icon_search_box">
                                    <a href="#" class="main-nav__search search-popup__toggler">
                                        <i class="icon-magnifying-glass"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
    </div>