<!doctype html>
<html lang="en">
<head>
	@yield('meta')
	{{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nurul Falah</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('tumb.jpeg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('tumb.jpeg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('tumb.jpeg')}}">
    <link rel="manifest" href="{{asset('asset/images/favicons/site.webmanifes')}}t">
    <meta name="_token" content="{{ csrf_token() }}"> --}}

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- URL Theme Color untuk Chrome, Firefox OS, Opera dan Vivaldi -->
	<meta name="theme-color" content="92B4EC" />
	<!-- URL Theme Color untuk Windows Phone -->
	<meta name="msapplication-navbutton-color" content="92B4EC" />
	<!-- URL Theme Color untuk iOS Safari -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="92B4EC" />
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2746417022295207" crossorigin="anonymous"></script>
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    @yield('css')
    <style>
	@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap");
/*=============== VARIABLES CSS ===============*/
	:root {

	/*========== Colors ==========*/
	--hue: 174;
	--sat: 63%;
	--first-color: hsl(var(--hue), var(--sat), 40%);
	--first-color-alt: hsl(var(--hue), var(--sat), 36%);
	--title-color: hsl(var(--hue), 12%, 15%);
	--text-color: hsl(var(--hue), 8%, 35%);
	--body-color: hsl(var(--hue), 100%, 99%);
	--container-color: #FFF;

	/*========== Font and typography ==========*/
	--body-font: 'Open Sans', sans-serif;
	--h1-font-size: 1.5rem;
	--normal-font-size: .938rem;
	--tiny-font-size: .625rem;
	}

	/*=============== BASE ===============*/
	* {
	box-sizing: border-box;
	padding: 0;
	margin: 0;
	}

	html {
	scroll-behavior: smooth;
	}

	body {
	/* margin: var(--header-height) 0 0 0;
	font-family: var(--body-font);
	font-size: var(--normal-font-size);
	background-color: var(--body-color);
	color: var(--text-color); */
	}

	ul {
	list-style: none;
	}

	a {
	text-decoration: none;
	}


	@media screen and (max-width: 767px) {
		.nav__menu {
			z-index: 999999;
			position: fixed;
			bottom: 0;
			left: 0;
			background-color: var(--container-color);
			box-shadow: 0 -1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);
			width: 100%;
			height: 4rem;
			padding: 0 1rem;
			display: grid;
			align-content: center;
			border-radius: 1.25rem 1.25rem 0 0;
			transition: .4s;
		}
	}

	.nav__list, 
	.nav__link {
	display: flex;
	}

	.nav__link {
	flex-direction: column;
	align-items: center;
	row-gap: 4px;
	color: var(--title-color);
	font-weight: 600;
	}

	.nav__list {
	justify-content: space-around;
	}

	.nav__name {
	font-size: var(--tiny-font-size);
	/* display: none;*/ /* Minimalist design, hidden labels */
	}

	.nav__icon {
	font-size: 1.5rem;
	margin-top: 15px;
	}

	/*Active link*/
	.active-link {
	position: relative;
	color: var(--first-color);
	transition: .3s;
	}

	/* Minimalist design, active link */
	/* .active-link::before{
	content: '';
	position: absolute;
	bottom: -.5rem;
	width: 4px;
	height: 4px;
	background-color: var(--first-color);
	border-radius: 50%;
	} */

	/* Change background header */
	.scroll-header {
	box-shadow: 0 1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);
	}

	/*=============== MEDIA QUERIES ===============*/
	/* For small devices */
	/* Remove if you choose, the minimalist design */
	@media screen and (max-width: 320px) {
	.nav__name {
		display: none;
	}
	}

	/* For medium devices */
	@media screen and (min-width: 576px) {
	.nav__list {
		justify-content: center;
		column-gap: 3rem;
	}
	}

	@media screen and (min-width: 767px) {
	body {
		margin: 0;
	}
	.section {
		padding: 7rem 0 2rem;
	}
	.nav {
		height: calc(var(--header-height) + 1.5rem); /* 4.5rem */
	}
	.nav__img {
		display: none;
	}
	.nav__icon {
		display: none;
	}
	.nav__name {
		font-size: var(--normal-font-size);
		/* display: block; */ /* Minimalist design, visible labels */
	}
	.nav__link:hover {
		color: var(--first-color);
	}

	/* First design, remove if you choose the minimalist design */
	.active-link::before {
		content: '';
		position: absolute;
		bottom: -.75rem;
		width: 4px;
		height: 4px;
		background-color: var(--first-color);
		border-radius: 50%;
	}

	/* Minimalist design */
	/* .active-link::before{
		bottom: -.75rem;
	} */
	}

	/* For large devices */
	@media screen and (min-width: 1024px) {
	.container {
		margin-left: auto;
		margin-right: auto;
	}
	}

	</style>
	<script>
		/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
	const sections = document.querySelectorAll('section[id]')

	function scrollActive(){
		const scrollY = window.pageYOffset

		sections.forEach(current =>{
			const sectionHeight = current.offsetHeight,
				sectionTop = current.offsetTop - 50,
				sectionId = current.getAttribute('id')

			if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
				document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
			}else{
				document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
			}
		})
	}
	window.addEventListener('scroll', scrollActive)


	/*=============== CHANGE BACKGROUND HEADER ===============*/
	function scrollHeader(){
		const header = document.getElementById('header')
		// When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
		// if(this.scrollY >= 80) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
	}
	window.addEventListener('scroll', scrollHeader)

	</script>
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
								{{-- <div class="header-top-text">
									<span class="text-uppercase">Pesantren Al Quran Nurul Falah Surabaya</span>
								</div> --}}
							</div>
							<div class="col-md-6">
								<div class="header-top-bar ul-li">
									<ul>
										{{-- <li><i class="fas fa-phone-square text-muted" >
												<a href="tel:0318281278" style="font-weight: 300"> 031 8281278 </a>
											</i>
										</li> --}}
										
										<li>
											{{-- <a data-toggle="modal" data-target="#myModal" href="#">Log In</a> --}}
											<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">

														<!-- Modal Header -->
														<div class="modal-header backgroud-style">
															<div class="gradient-bg"></div>
															<div class="popup-text text-center">
																<h2> <span>Login</span> Your Account.</h2>
																<p>Login to our website</p>
															</div>
														</div>

														<!-- Modal body -->
														<div class="modal-body">
															
															<div class="alt-text text-center"><a href="#">SIGN IN</a> </div>
															<form method="POST" action="{{ route('login') }}">@csrf
																<div class="contact-info">
																	<input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
																</div>
																<div class="contact-info">
																	<input class="form-control" type="password" name="password" placeholder="Password" required>
																</div>
																<div class="nws-button text-center white text-capitalize">
																	<button type="submit" value="Submit">LOg in Now</button> 
																</div> 
															</form>
															<div class="log-in-footer text-center">
																<p style="margin-top:20px">Pastikan Kedua Credential Benar</p>
																<p>@ {{date('Y')}} Nurul Falah Surabaya</p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</li>
										{{-- <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li> --}}
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
										<li><a href="/product">Product</a></li>
										<li><a href="/cabang">Cabang</a></li>
										<li><a href="/pelatihan">Pelatihan</a></li>
										<li><a href="{{route('contact_page')}}">Contact Us</a></li>
										<li class="menu-item-has-children ul-li-block">
											<a href="#!">Information</a>
											<ul class="sub-menu">
												<li><a href="#">Bidang</a></li>
												<li><a href="#">Susunan Anggota</a></li>
											</ul>
										</li>
										@auth
										<li><a href="/admin-dashboard"><b>Dash'b</b></a></li>
										@else
										<li><a data-toggle="modal" data-target="#myModal" href="#">Login</a></li>
										@endauth
										
									</ul>
								</div>
							</nav>

							<div class="mobile-menu">
								<div class="logo"><a href="/"><img src="{{asset('logo-crop.png')}}" alt="Logo"></a></div>
								<nav>
									<ul>
										<li class="menu-item-has-children ul-li-block">
											<a href="/">Home</a>
										</li>
										<li><a href="/list/berita">Berita</a></li>
										<li><a href="/list/artikel">Artikel</a></li>
										<li><a href="/product">Product</a></li>
										<li><a href="/cabang">Cabang</a></li>
										<li><a href="/pelatihan">Pelatihan</a></li>
										<li><a href="{{route('contact_page')}}">Contact Us</a></li>
										@auth
										<li><a href="/admin-dashboard"><b>Dash'b</b></a></li>
										@else
										<li><a href="/login">Login</a></li>
										@endauth
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