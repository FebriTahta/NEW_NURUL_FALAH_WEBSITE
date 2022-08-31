<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika"> --}}
	@yield('judul')

    <!-- Favicons-->
    {{-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png"> --}}

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <link href="{{asset('asset_form/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('asset_form/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('asset_form/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('asset_form/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('asset_form/css/custom.css')}}" rel="stylesheet">
	
	<!-- MODERNIZR MENU -->
	<script src="{{asset('asset_form/js/modernizr.js')}}"></script>
	@yield('style')
</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	
	{{-- <nav>
		<ul class="cd-primary-nav">
			<li><a href="index.html" class="animated_link">Version 1</a></li>
			<li><a href="index-2.html" class="animated_link">Version 2</a></li>
			<li><a href="index-3.html" class="animated_link">Version 3</a></li>
			<li><a href="index-4.html" class="animated_link">File Attachment demo</a></li>
			<li><a href="about.html" class="animated_link">About Us</a></li>
			<li><a href="contacts.html" class="animated_link">Contact Us</a></li>
			<li><a href="#0" class="animated_link">Purchase Template</a></li>
		</ul>
	</nav> --}}
	<!-- /menu -->
	
	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-xl-4 col-lg-4 content-left">
	            <div class="content-left-wrapper">
	                {{-- <a href="index.html" id="logo"><img src="img/logo.png" alt="" width="45" height="45"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
	                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
	                        <li><a href="#0"><i class="icon-google"></i></a></li>
	                        <li><a href="#0"><i class="icon-linkedin"></i></a></li>
	                    </ul>
	                </div> --}}
	                <!-- /social -->
					@yield('info')
	                
	            </div>
	            <!-- /content-left-wrapper -->
	        </div>