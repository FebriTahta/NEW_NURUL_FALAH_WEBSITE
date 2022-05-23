<!doctype html>
<html lang="en">
<head>
	
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

    @yield('css')
    
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
																<img src="{{asset('logo-crop.png')}}" style="max-width: 200px; margin-top: 40px" alt="">
															</div>
															<div class="popup-text text-center">
																<h2> <span>Login</span> Your Account.</h2>
																<p>Login to our website</p>
															</div>
														</div>

														<!-- Modal body -->
														<div class="modal-body">
															
															<div class="alt-text text-center"><a href="#">SIGN IN</a> </div>
															<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
																<div class="contact-info">
																	<input class="name" name="username" type="text" placeholder="Username">
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
											<a href="/">Home</a>
										</li>
										<li><a href="/list/berita">Berita</a></li>
										<li><a href="/list/artikel">Artikel</a></li>
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
								<div class="logo"><a href="/"><img src="{{asset('logo-crop.png')}}" alt="Logo"></a></div>
								<nav>
									{{-- <ul>
										<li><a href="#">Home</a>
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
									</ul> --}}

									<ul>
										<li class="menu-item-has-children ul-li-block">
											<a href="/">Home</a>
										</li>
										<li><a href="/list/berita">Berita</a></li>
										<li><a href="/list/artikel">Artikel</a></li>
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
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
 	<!-- Start of Header section
 		============================================= -->