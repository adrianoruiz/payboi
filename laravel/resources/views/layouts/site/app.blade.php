<!doctype html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Construa Contatos - O seu App de construção </title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! asset('site/site/images/favicon.ico') !!}" type="image/x-icon">
	<link rel="icon" href="{!! asset('site/site/images/favicon.ico') !!}" type="image/x-icon">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700%7CLato:300,400,700,900" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{!! asset('site/css/bootstrap.min.css') !!}">
    <!-- Font Aweosme -->
    <link rel="stylesheet" href="{!! asset('site/css/font-awesome.min.css') !!}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{!! asset('site/css/owl.carousel.min.css') !!}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{!! asset('site/css/magnific-popup.css') !!}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{!! asset('site/css/animate.css') !!}">
	
	<!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{!! asset('site/css/normalize.css') !!}">
    <link rel="stylesheet" href="{!! asset('site/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('site/css/responsive.css') !!}">
    <script src="{!! asset('site/js/vendor/modernizr-2.8.3.min.js') !!}"></script>
	
	<!-- Color Switcher -->
	<link rel="stylesheet" href="{!! asset('site/css/colors/red.css') !!}" id="color-switch">
	<!-- teamplate colors -->
	<!-- <link rel="stylesheet" href="{!! asset('site/css/turquoise.css') !!}">-->
	<!-- <link rel="stylesheet" href="{!! asset('site/css/light-green.css') !!}"> -->

	<!-- CSS FOR DEMO - NOT INCLUDED IN MAIN FILES -->
    <link rel="stylesheet" href="{!! asset('site/demo/demo.css') !!}">
</head>
<body>
	<!-- Preloader -->
    <div class="preloader">
    	<div id="loader">
			<div id="box"></div>
			<div id="hill"></div>
		</div>
    </div>
    
    @include('layouts.site.navigation')

    @yield('content')

    @include('layouts.site.footer')
	
	<!-- ===================================================
		Javascript Files
	===================================================== -->
	<!-- jQuery Library -->
	<!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script> -->
	<script src="{!! asset('site/js/jquery-1.12.0.min.js') !!} "></script>
	<!-- Boostrap JS -->
    <script src="{!! asset('site/js/bootstrap.min.js') !!}"></script>
	<!-- Owl Carousel -->
    <script src="{!! asset('site/js/owl.carousel.min.js') !!}"></script>
	<!-- Sticky JS -->
    <script src="{!! asset('site/js/jquery.sticky.js') !!}"></script>
	<!-- Smooth Scroll -->
    <script src="{!! asset('site/js/smooth-scroll.js') !!}"></script>
	<!-- Magnific Popup -->
    <script src="{!! asset('site/js/jquery.magnific-popup.min.js') !!}"></script>
	<!-- Counter Up -->
    <script src="{!! asset('site/js/jquery.counterup.min.js') !!}"></script>
    <script src="{!! asset('site/js/waypoints.min.js') !!}"></script>
	<!-- SymoTimer -->
    <script src="{!! asset('site/js/jquery.syotimer.min.js') !!}"></script>
	<!-- WOW JS -->
    <script src="{!! asset('site/js/wow.min.js') !!}"></script>
	<!-- Mail JS -->
	<script src="{!! asset('site/js/mail.js') !!}"></script>
	<!-- Custom JS -->
    <script src="{!! asset('site/js/plugins.js') !!}"></script>
    <script src="{!! asset('site/js/custom.js') !!}"></script>
	
</body>
</html>
