<!doctype html>
<html lang="en">
<head>
	
	<title>Home Page 3</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nurul Falah</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('tumb.jpeg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('tumb.jpeg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('tumb.jpeg')}}">
    <link rel="manifest" href="{{asset('asset/images/favicons/site.webmanifes')}}t">
    <meta name="_token" content="{{ csrf_token() }}">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- URL Theme Color untuk Chrome, Firefox OS, Opera dan Vivaldi -->
	<meta name="theme-color" content="92B4EC" />
	<!-- URL Theme Color untuk Windows Phone -->
	<meta name="msapplication-navbutton-color" content="92B4EC" />
	<!-- URL Theme Color untuk iOS Safari -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="92B4EC" />

	<link rel="stylesheet" href="{{asset('utama/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('utama/css/fontawesome-all.css')}}">
	<link rel="stylesheet" href="{{asset('utama/css/flaticon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('utama/css/meanmenu.css')}}">
	<link rel="stylesheet" href="{{asset('utama/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('utama/css/video.min.css')}}">
	<link rel="stylesheet" href="{{asset('utama/css/lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('utama/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('utama/css/progess.css')}}">
	<link rel="stylesheet" href="{{asset('utama/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('utama/css/responsive.css')}}">

	<link rel="stylesheet"  href="{{asset('utama/css/colors/switch.css')}}">
	<link href="{{asset('utama/css/colors/color-2.css')}}" rel="alternate stylesheet" type="text/css" title="color-2">
	<link href="{{asset('utama/css/colors/color-3.css')}}" rel="alternate stylesheet" type="text/css" title="color-3">
	<link href="{{asset('utama/css/colors/color-4.css')}}" rel="alternate stylesheet" type="text/css" title="color-4">
	<link href="{{asset('utama/css/colors/color-5.css')}}" rel="alternate stylesheet" type="text/css" title="color-5">
	<link href="{{asset('utama/css/colors/color-6.css')}}" rel="alternate stylesheet" type="text/css" title="color-6">
	<link href="{{asset('utama/css/colors/color-7.css')}}" rel="alternate stylesheet" type="text/css" title="color-7">
	<link href="{{asset('utama/css/colors/color-8.css')}}" rel="alternate stylesheet" type="text/css" title="color-8">
	<link href="{{asset('utama/css/colors/color-9.css')}}" rel="alternate stylesheet" type="text/css" title="color-9">

</head>

<body>

	{{-- <div id="preloader"></div> --}}

	{{-- <div id="switch-color" class="color-switcher">
		<div class="open"><i class="fas fa-cog fa-spin"></i></div>
		<h4>COLOR OPTION</h4>
		<ul>
			<li><a class="color-2" onclick="setActiveStyleSheet('color-2'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-3" onclick="setActiveStyleSheet('color-3'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-4" onclick="setActiveStyleSheet('color-4'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-5" onclick="setActiveStyleSheet('color-5'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-6" onclick="setActiveStyleSheet('color-6'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-7" onclick="setActiveStyleSheet('color-7'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-8" onclick="setActiveStyleSheet('color-8'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-9" onclick="setActiveStyleSheet('color-9'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
		</ul>
		<button class="switcher-light">WIDE </button>
		<button class="switcher-dark">BOX </button>
		<a class="rtl-v" href="RTL_Genius/index.html">RTL </a>
	</div> --}}

	<!-- Start of Header section
		============================================= -->
		<header>
			<div id="main-menu"  class="main-menu-container header-style-2">
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="header-top-text">
									<span class="text-uppercase">Pesantren Al Quran Nurul Falah Surabaya</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="header-top-bar ul-li">
									<ul>
										<li><i class="fas fa-phone-square text-muted" ><a href="tel:0318281278" style="font-weight: 300"> 031 8281278 </a></i></li>
										
										<li><a data-toggle="modal" data-target="#myModal" href="#">Log In</a>
											<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">

														<!-- Modal Header -->
														<div class="modal-header backgroud-style">
															<div class="gradient-bg"></div>
															<div class="popup-logo">
																<img src="{{asset('nf_logo.png')}}" alt="">
															</div>
															<div class="popup-text text-center">
																<h2> <span>Login</span> Your Account.</h2>
																<p>Login to our website, or <span>REGISTER</span></p>
															</div>
														</div>

														<!-- Modal body -->
														<div class="modal-body">
															<div class="facebook-login">
																<a href="#">
																	<div class="log-in-icon">
																		<i class="fab fa-facebook-f"></i>
																	</div>
																	<div class="log-in-text text-center">
																		Login with Facebook
																	</div>
																</a>
															</div>
															<div class="alt-text text-center"><a href="#">OR SIGN IN</a> </div>
															<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
																<div class="contact-info">
																	<input class="name" name="Email" type="email" placeholder="Your@email.com*">
																</div>
																<div class="contact-info">
																	<input class="email" name="name" type="text" placeholder="Your name*">
																</div>
																<div class="nws-button text-center white text-capitalize">
																	<button type="submit" value="Submit">LOg in Now</button> 
																</div> 
															</form>
															<div class="log-in-footer text-center">
																<p>* Denotes mandatory field.</p>
																<p>** At least one telephone number is required.</p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</li>
										<li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div  class="main-menu">
					<div class="container">
						<div class="navbar-default">
							<div class="navbar-header float-left">
								<a class="navbar-brand text-uppercase" href="#"><img src="{{asset('logo-crop.png')}}" style="max-width: 120px" alt="logo"></a>
							</div><!-- /.navbar-header -->
							<div class="cart-search float-right ul-li">
								<ul>
									<li>
										<button type="button" class="toggle-overlay search-btn">
											<i class="fas fa-search"></i>
										</button>

										<div class="search-body">
											<div class="search-form">
												<form action="#">
													<input class="search-input" type="search" placeholder="Search Here">
													<div class="outer-close toggle-overlay">
														<button type="button" class="search-close">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<nav class="navbar-menu float-right">
								<div class="nav-menu ul-li">
									<ul>
										<li class="menu-item-has-children ul-li-block">
											<a href="#">Home</a>
										</li>
										<li><a href="#">Berita</a></li>
										<li><a href="#">Artikel</a></li>
										<li><a href="#">Product</a></li>
										<li><a href="#">Pelatihan</a></li>
										<li><a href="{{route('contact_page')}}">Contact Us</a></li>
										<li class="menu-item-has-children ul-li-block">
											<a href="#!">Information</a>
											<ul class="sub-menu">
												<li><a href="#">Bidang</a></li>
												<li><a href="#">Susunan Anggota</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</nav>

							<div class="mobile-menu">
								<div class="logo"><a href="index-1.html"><img src="utama/img/logo/logo.png" alt="Logo"></a></div>
								<nav>
									<ul>
										<li><a href="index-1.html">Home</a>
										</li>
										<li><a href="about.html">About</a></li>
										<li><a href="blog.html">Blog</a>
											<ul>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="blog-single.html">Blog sinlge</a></li>
											</ul>
										</li>
										<li><a href="shop.html">Shop</a>
										</li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="#">Pages</a>
											<ul>
												<li><a href="course.html">Course</a></li>
												<li><a href="course-details.html">course sinlge</a></li>
												<li><a href="teacher.html">teacher</a></li>
												<li><a href="teacher-details.html">teacher details</a></li>
												<li><a href="faq.html">FAQ</a></li>
												<li><a href="check-out.html">Check Out</a></li>
											</ul>
										</li>
									</ul>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
 	<!-- Start of Header section
 		============================================= -->


		<!-- Start of slider section
			============================================= -->
			<section id="slide" class="slider-section pt150">
				<div id="slider-item" class="slider-item-details">
					<div  class="slider-area relative-position">
						<img src="{{asset('slider.jpg')}}" alt="">
					</div>
				</div>
			</section>
	<!-- End of slider section
		============================================= -->

	<!-- Start latest section
		============================================= -->
		<section id="latest-area" class="latest-area-section home-page-three">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left "  >
								<h2>Berita <span>Terkini.</span></h2>
							</div>
							<div class="latest-news-posts">
								<div class="blog-post-img-content">
									<div class="blog-img-date relative-position">
										<div class="blog-thumnile">
											<img src="{{ asset('img_thumbnail/' . $berita->thumbnail) }}" alt="">
										</div>
										<div class="course-price text-center gradient-bg">
											<span>26 April 2018</span>
										</div>
									</div>
									<div class="blog-title-content headline">
										<h3>
											<a href="#">
												@if (strlen(strip_tags($berita->judul)) > 20)
												{{ substr(strip_tags($berita->judul), 0, 20) }}..
												@else
												{!! $berita->judul !!}
												@endif
											</a>
										</h3>
										<div class="blog-content">
											@if (strlen(strip_tags($berita->deskripsi)) > 150)
											{{ substr(strip_tags($berita->deskripsi), 0, 150) }}..
											@else
											{!! $berita->deskripsi !!}
											@endif
										</div>

										<div class="view-all-btn bold-font">
											<a href="/post/{{ $berita->jenisposting->slug }}/{{ $berita->slug }}">Read More <i class="fas fa-chevron-circle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /latest-news -->
					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left "  >
								<h2>Seputar <span>Nurul Falah.</span></h2>
							</div>
							<div class="latest-news-posts">
								@foreach ($beritas as $item)
									<div class="latest-news-area "  >
										<div class="latest-news-thumbnile relative-position">
											<img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt="">
											<div class="hover-search">
												<i class="fas fa-search"></i>
											</div>
											<div class="blakish-overlay"></div>
										</div>
										<div class="date-meta">
											<i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}
										</div>
										<h3 class="latest-title bold-font">
											<a href="#">
												@if (strlen(strip_tags($item->judul)) > 20)
												{{ substr(strip_tags($item->judul), 0, 20) }}..
												@else
												{!! $item->judul !!}
												@endif
											</a>
										</h3>
										<div class="course-viewer ul-li">
											<ul>
												<li><a href=""><i class="fas fa-eye"></i> 1.220</a></li>
												<li><a href=""><i class="fas fa-comment-dots"></i> - </a></li>
											</ul>
										</div>
									</div>
								@endforeach
								<div class="view-all-btn bold-font "  style="margin-top: 12px">
									<a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left "  >
								<h2>Upcoming <span>Events.</span></h2>
							</div>
							<div class="latest-events "  >
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">22</span>
										April 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">Fully Responsive Web Design & Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="latest-events "  >
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">07</span>
										August 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">Introduction to Mobile Application Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="latest-events "  >
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">30</span>
										Sept 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">IOS Apps Programming & Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="view-all-btn bold-font "  >
								<a  href="#">Check Calendar   <i class="fas fa-calendar-alt"></i></a>
							</div>
						</div>
					</div>
					<!-- /events -->

					<div class="col-md-4" style="display: none">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left "  >
								<h2>Video <span>Profil.</span></h2>
							</div>
							<div class="latest-video-poster relative-position mb20 "  >
								<img src="{{asset('gambar1.png')}}" alt="">
								<div class="video-play-btn text-center gradient-bg">
									<a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=OPzTZ0A0gDc"><i class="fas fa-play"></i></a>
								</div>
							</div>
							<h3 class="latest-title bold-font "  ><a href="#">Pesantren Al Quran Nurul Falah.</a></h3>
							<p class="mb25 "  >Simak profile singkat mengenai Pesantren Al Quran Nurul Falah Surabaya berikut ini.</p>
							<div class="view-all-btn bold-font "  >
								<a href="https://www.youtube.com/channel/UC1Xkdp_DKN0hJL85UWxH_Gg/playlists" target="_blank">View All Youtube <i class="fas fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /. -->
				</div>
			</div>
		</section>
	<!-- End latest section
		============================================= -->

	<!-- Start why choose section
		============================================= -->
		
		{{-- <section id="why-choose" class="why-choose-section backgroud-style"> --}}
			<section id="why-choose" class="backgroud-style">
				<img src="{{asset('utama_hilmi.jpg')}}" alt="">
			</section>
			
	<!-- End why choose section
		============================================= -->

	<!-- Start popular course
		============================================= -->
		<section id="popular-course" class="popular-course-section popular-three">
			<div class="container">
				<div class="section-title mb45 headline text-left "  >
					<span class="subtitle text-uppercase">SEPUTAR NURUL FALAH</span>
					<h2><span>Artikel</span> Terbaru.</h2>
				</div>
				
				<div id="course-slide-item" class="course-slide">
					@foreach ($artikels as $item)
						<div class="course-item-pic-text">
							<div class="course-pic relative-position mb25 "  >
								<img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}" alt="">
								<div class="course-price text-center gradient-bg">
									<span>{{$item->kategoriposting->name}}</span>
								</div>
								<div class="course-details-btn">
									<a href="#">Selengkapnya <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="course-item-text">
								<div class="course-meta">
									<span class="course-category"><a href="#" class="text-capitalize">{{$item->sumberposting->name}}</a></span>
									<span class="course-author bold-font"><a href="#">{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</a></span>
									<div class="course-rate">
										<span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span>
									</div>
								</div>
								<div class="course-title mt10 headline pb45 relative-position">
									<h3>
										<a href="#" class="text-uppercase">
											@if (strlen($item->judul) > 20)
												{{ substr($item->judul, 0, 20) }}..
											@else
												{{ $item->judul }}
											@endif
										</a> 
									</h3>
								</div>
								
								<div class="course-viewer ul-li">
									<ul>
										<li style="width: 25%"><a href=""><i class="fas fa-eye"></i> 1.220</a></li>
										<li style="width: 25%"><a href=""><i class="fas fa-comment-dots"></i> 0</a></li>
										<li style="width: 47%">
											<div class="view-all-btn bold-font" >
												<a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}">Read More <i class="fas fa-chevron-circle-right"></i></a>
											</div>
										</li>
									</ul>
								</div>
								
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section>
	<!-- End popular course
		============================================= -->



	<!-- Start of best course
		============================================= -->
		<section id="best-course" class="best-course-section best-course-v2">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">DIKLAT / PELATIHAN</span>
					<h2>Diklat / Pelatihan<span> Mendatang.</span></h2>
				</div>
				<div class="best-course-area mb45">
					<div class="row">
						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="utama/img/course/bc-1.jpg" alt="">
									<div class="trend-badge-2 text-center text-uppercase">
										<i class="fas fa-bolt"></i>
										<span>Trending</span>
									</div>
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right" ></i></a>
									</div>
									<div class="blakish-overlay"></div>
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
						<!-- /course -->
					</div>
				</div>
				<div class="container">
					<div class="best-product-section third-home-version">
						<div class="section-title-2 mb65 headline text-left "  >
							<h2>Best <span>Products.</span></h2>
						</div>
						<div id="best-product-slide-item" class="best-product-slide">
							<div class="product-img-text "  >
								<div class="product-img text-center mb20">
									<img src="https://tilawati.id/cdn/uploads/120210303143020.jpg" alt="">
								</div>
								<div class="product-text-content relative-position">
									<div class="best-title-price float-left">
										<div class="course-title headline">
											<h3><a href="#">Quran Waqof & Ibtida'</a></h3>
										</div>
										<div class="price-start">
											Rp -
										</div>
									</div>
									<div class="add-cart text-center">
										<i class="fas fa-cart-plus"></i>
									</div>
								</div>
							</div>
	
							<div class="product-img-text "  >
								<div class="product-img text-center mb20">
									<img src="https://tilawati.id/cdn/uploads/120210303142945.jpg" alt="">
								</div>
								<div class="product-text-content relative-position">
									<div class="best-title-price float-left">
										<div class="course-title headline">
											<h3><a href="#">Tilawati Hard Cover.</a></h3>
										</div>
										<div class="price-start">
											Rp -
										</div>
									</div>
									<div class="add-cart text-center">
										<i class="fas fa-cart-plus"></i>
									</div>
								</div>
							</div>
							<div class="product-img-text "  >
								<div class="product-img text-center mb20">
									<img src="https://tilawati.id/cdn/uploads/120210303143001.jpg" alt="">
								</div>
								<div class="product-text-content relative-position">
									<div class="best-title-price float-left">
										<div class="course-title headline">
											<h3><a href="#">Panduan 7 Lagu tartil.</a></h3>
										</div>
										<div class="price-start">
											Rp -
										</div>
									</div>
									<div class="add-cart text-center">
										<i class="fas fa-cart-plus"></i>
									</div>
								</div>
							</div>
							<div class="product-img-text "  >
								<div class="product-img text-center mb20">
									<img src="https://tilawati.id/cdn/uploads/120210303142916.jpg" alt="">
								</div>
								<div class="product-text-content relative-position">
									<div class="best-title-price float-left">
										<div class="course-title headline">
											<h3><a href="#">Terjemah Lafdziyah.</a></h3>
										</div>
										<div class="price-start">
											Rp -
										</div>
									</div>
									<div class="add-cart text-center">
										<i class="fas fa-cart-plus"></i>
									</div>
								</div>
							</div>
							<div class="product-img-text "  >
								<div class="product-img text-center mb20">
									<img src="https://tilawati.id/cdn/uploads/120210303143201.jpg" alt="">
								</div>
								<div class="product-text-content relative-position">
									<div class="best-title-price float-left">
										<div class="course-title headline">
											<h3><a href="#">VCD Lagu Ros Juz 1.</a></h3>
										</div>
										<div class="price-start">
											Rp -
										</div>
									</div>
									<div class="add-cart text-center">
										<i class="fas fa-cart-plus"></i>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</section>
	<!-- End of best course
		============================================= -->

		
	<!-- Start of genius teacher v2
		============================================= -->
		<section id="genius-teacher-2" class="genius-teacher-section-2">
			
		</section>
	<!-- End of genius teacher v2
		============================================= -->


	

		
	<!-- Start of sponsor section
		============================================= -->
		{{-- <section id="sponsor" class="sponsor-section">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left">
					<h2>Genius <span>Sponsors.</span></h2>
				</div>
				
			</div>
		</section> --}}
	<!-- End of sponsor section
		============================================= -->		

	<!-- Start of contact area
		============================================= -->
		<section id="contact-area" class="contact-area-section backgroud-style">
			<div class="container">
				<div class="contact-area-content">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-left-content">
								<div class="section-title  mb45 headline text-left">
									<span class="subtitle ml42  text-uppercase">CONTACT US</span>
									<h2><span>Nurul Falah</span></h2>
									<h5 class="text-white">
										Anda dapat menghubungi kami melalui kontak yang tertera dibawah ini.
									</h5>
								</div>

								<div class="contact-address">
									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Utama: </span>Jl. Ketintang Timur PTT VB, Pesantren Nurul Falah.</li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-phone"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><a href="tel:0318281278"><span>Utama: </span>(031) 8281278</a></li>
												<li><a href="tel:081235761862"><span>Kedua: </span>(+62) 81235761862</a></li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><a href="mailto:pes_nf@yahoo.co.id"><span>Utama: </span>pes_nf@yahoo.co.id</a></li>
												<li><a href="mailto:nurulfalah_2017@gmail.com"><span>Kedua: </span>nurulfalah_2017@gmail.com</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a href="#">Contact Us <i class="fas fa-caret-right"></i></a>
							</div>
						</div>

						<div class="col-md-6">
							<div id="contact-map" class="contact-map-section">
								<div id="google-map">
									{{-- <div id="googleMaps" class="google-map-container"></div> --}}
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3669660483256!2d112.72820171530392!3d-7.312607873930874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb12ae9aeeb3%3A0xf64b5d223ef0d319!2sPesantren%20Al-Qur&#39;an%20Nurul%20Falah!5e0!3m2!1sid!2sid!4v1652858211547!5m2!1sid!2sid" width="820" height="590" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div><!-- /#google-map-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of contact area
		============================================= -->



 	<!-- Start of footer section
 		============================================= -->
 		<footer>
 			<section id="footer-area" class="footer-area-section">
 				<div class="container">
 					<div class="footer-content pb10">
 						<div class="row">
 							<div class="col-md-3">
 								<div class="footer-widget "  >
 									<div class="footer-logo mb35">
 										<img src="{{asset('nf_logo.png')}}" alt="">
 									</div>
 									<div class="footer-about-text">
 										<p>Pesantren Alquran Nurul Falah berdiri pada tahun 2000 M, didirikan oleh yayasan
											Nurul Falah atas inisiatif Hasan Sadzili dengan tujuan untuk menarik minat
											masyarakat khususnya masyarakat kota Surabaya untuk belajar Alquran.
										</p>
 										
 									</div>
 								</div>
 							</div>
 							<div class="col-md-6">
 								<div class="footer-widget "  >
 									<div class="footer-menu ul-li-block">
 										<h2 class="widget-title">Useful Links</h2>
 										<ul>
 											<li><a href="#"><i class="fas fa-caret-right"></i>Berita</a></li>
 											<li><a href="#"><i class="fas fa-caret-right"></i>Artikel</a></li>
 											<li><a href="#"><i class="fas fa-caret-right"></i>Product</a></li>
 											<li><a href="#"><i class="fas fa-caret-right"></i>Graphic Design</a></li>
 											<li><a href="#"><i class="fas fa-caret-right"></i>Pelatihan</a></li>
											<li><a href="#"><i class="fas fa-caret-right"></i>Contact</a></li>
 										</ul>
 									</div>
 								</div>
 								<div class="footer-menu ul-li-block "  >
 									<h2 class="widget-title">Account Info</h2>
 									<ul>
 										<li><a href="#"><i class="fas fa-caret-right"></i>Setting Account</a></li>
 										<li><a href="#"><i class="fas fa-caret-right"></i>Login & Register</a></li>
 										<li><a href="#"><i class="fas fa-caret-right"></i>Contact Us</a></li>
 										<li><a href="#"><i class="fas fa-caret-right"></i>Graphic Design</a></li>
 										<li><a href="#"><i class="fas fa-caret-right"></i>Mobile Apps</a></li>
 										<li><a href="#"><i class="fas fa-caret-right"></i>Responsive Website</a></li>
 									</ul>
 								</div>
 							</div>
 							<div class="col-md-3">
 								<div class="footer-widget "  >
 									<h2 class="widget-title">Photo Gallery</h2>
 									<div class="photo-list ul-li">
 										<ul>
 											<li> 
 												<img src="{{asset('slider.jpg')}}" alt="">
 												<div class="blakish-overlay"></div>
 												<div class="pop-up-icon">
 													<a href="{{asset('slider.jpg')}}" data-lightbox="roadtrip">
 														<i class="fas fa-search"></i>
 													</a>
 												</div>
 											</li>
											 <li>
												<img src="{{asset('ngaji.jpg')}}" alt="">
												<div class="blakish-overlay"></div>
												<div class="pop-up-icon">
													<a href="{{asset('ngaji.jpg')}}" data-lightbox="roadtrip">
														<i class="fas fa-search"></i>
													</a>
												</div>
											</li>
 											{{-- <li>
 												<img src="utama/img/gallery/g-2.jpg" alt="">
 												<div class="blakish-overlay"></div>
 												<div class="pop-up-icon">
 													<a href="utama/img/gallery/g-2.jpg" data-lightbox="roadtrip">
 														<i class="fas fa-search"></i>
 													</a>
 												</div>
 											</li>
 											<li>
 												<img src="utama/img/gallery/g-3.jpg" alt="">
 												<div class="blakish-overlay"></div>
 												<div class="pop-up-icon">
 													<a href="utama/img/gallery/g-3.jpg" data-lightbox="roadtrip">	<i class="fas fa-search"></i></a>
 												</div>
 											</li>
 											<li>
 												<img src="utama/img/gallery/g-4.jpg" alt="">
 												<div class="blakish-overlay"></div>
 												<div class="pop-up-icon">
 													<a href="utama/img/gallery/g-4.jpg" data-lightbox="roadtrip">	<i class="fas fa-search"></i></a>
 												</div>
 											</li>
 											<li>
 												<img src="utama/img/gallery/g-5.jpg" alt="">
 												<div class="blakish-overlay"></div>
 												<div class="pop-up-icon">
 													<a href="utama/img/gallery/g-5.jpg" data-lightbox="roadtrip">	<i class="fas fa-search"></i></a>
 												</div>
 											</li>
 											<li>
 												<img src="utama/img/gallery/g-6.jpg" alt="">
 												<div class="blakish-overlay"></div>
 												<div class="pop-up-icon">
 													<a href="utama/img/gallery/g-6.jpg" data-lightbox="roadtrip">	<i class="fas fa-search"></i></a>
 												</div>

 											</li> --}}
 										</ul>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div> 
 					<!-- /footer-widget-content -->
 					<div class="footer-social-subscribe mb65">
 						<div class="row">
 							<div class="col-md-3">
 								<div class="footer-social ul-li "  >
 									<h2 class="widget-title">Social Network</h2>
 									<ul>
 										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
 										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
 										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
 									</ul>
 								</div>
 							</div>
 							<div class="col-md-9">
 								<div class="subscribe-form "  >
 									<h2 class="widget-title">Subscribe Newsletter</h2>

 									<div class="subs-form relative-position">
 										<form action="#" method="post">
 											<input class="course" name="course" type="email" placeholder="Email Address.">
 											<div class="nws-button text-center  gradient-bg text-uppercase">
 												<button type="submit" value="Submit">Subscribe now</button> 
 											</div>
 										</form>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>

 					<div class="copy-right-menu">
 						<div class="row">
 							<div class="col-md-6">
 								<div class="copy-right-text">
 									<p>© 2018 - www.nurulfalah.org.</p>
 								</div>
 							</div>
 							<div class="col-md-6">
 								<div class="copy-right-menu-item float-right ul-li">
 									<ul>
 										<li><a href="#">Kebijakan</a></li>
 										<li><a href="#">Privasi</a></li>
 									</ul>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</section>
 		</footer>
	<!-- End of footer section
		============================================= -->



		<!-- For Js Library -->
		<script src="{{asset('utama/js/jquery-2.1.4.min.js')}}"></script>
		<script src="{{asset('utama/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('utama/js/popper.min.js')}}"></script>
		<script src="{{asset('utama/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('utama/js/jarallax.js')}}"></script>
		<script src="{{asset('utama/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('utama/js/lightbox.js')}}"></script>
		<script src="{{asset('utama/js/jquery.meanmenu.js')}}"></script>
		<script src="{{asset('utama/js/scrollreveal.min.js')}}"></script>
		<script src="{{asset('utama/js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('utama/js/waypoints.min.js')}}"></script>
		<script src="{{asset('utama/js/jquery-ui.js')}}"></script>
		<script src="{{asset('utama/js/gmap3.min.js')}}"></script>
		<script src="{{asset('utama/js/switch.js')}}"></script>
		{{-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script> --}}

		<script src="{{asset('utama/js/script.js')}}"></script>
	</body>
	</html>