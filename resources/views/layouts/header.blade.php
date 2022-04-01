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
    <link rel="manifest" href="{{asset('assets/images/favicons/site.webmanifes')}}t">

    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">



    <!-- Css-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jarallax.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vegas.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nouislider.pips.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/tolips.css')}}">
    <!-- Template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <link href="{{asset('assets3/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets3/css/home.css')}}" rel="stylesheet">
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
            #bermalam-mobile {
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
            .yt {
                width: 100% !important;
                height: 125px;
            }
            .strip figure {
				margin-bottom: 5px;
				overflow: hidden;
				position: relative;
				height: 125px !important;
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
            
        }
    </style>
</head>

<body>

    <div class="preloader">
        <img src="nf.png" class="preloader__image" alt="">
        {{-- <img src="assets/images/loader.png" class="preloader__image" alt=""> --}}
    </div><!-- /.preloader -->

    <div class="site-header__header-one-wrap clearfix">

        <div class="site-header__header-one-wrap clearfix">

            <div class="header_top_one">
                <div class="container">
                    <div class="header_top_one_inner clearfix">
                        <div class="header_top_one_logo_box float-left">
                            <div class="header_top_one_logo" id="logo_img">
                                <a href="/"><img  src="logo-crop.png" alt="" style="width: 120px; padding-top: 10px"></a>
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
                                        <li><a href="#">Login</a></li>
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
                                    <ul class=" main-nav__navigation-box float-left">
                                        <li>
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Profile</a>
                                            <ul>
                                                <li><a href="about.html">Sejarah</a></li>
                                                <li><a href="membership_plans.html">Visi Misi</a></li>
                                            </ul><!-- /.sub-menu -->
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
                                                <li><a href="members.html">Tilawati</a></li>
                                                <li><a href="members_details.html">Lazis NF</a></li>
                                            </ul><!-- /.sub-menu -->
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
                                    <a href="/"><img id="mobile_img" src="logo-crop.png" style="width: 100px; margin-top: 5px;" alt=""></a>
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