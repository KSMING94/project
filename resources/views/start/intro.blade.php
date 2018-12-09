<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TRAVEL ALBUM - SERVICE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/start/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/start/icomoon.css') }}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{ asset('css/start/themify-icons.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/start/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/start/magnific-popup.css') }}">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="{{ asset('css/start/bootstrap-datetimepicker.min.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('css/start/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/start/owl.theme.default.min.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/start/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('js/start/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	<div id="page">

	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="{{ url('/') }}">旅行アルバム <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="{{ url('intro') }}">紹介</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url({{ asset('css/images/img_bg_1.jpg') }})" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">写真と思い出を共有しよう！</span>
							<h1 class="cursive-font">思い出。そして、保存。</h1>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font">紹介</h2>
					<p>旅行の思い出と写真を公有しながら、人と一緒に話を作って行ける所です！</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-thought"></i>
						</span>
						<h3>思い出</h3>
						<p>旅行しながら自分が経験したことを皆んなと公有して、お互いの思い出を思い出せます。</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
						<h3>幸せ</h3>
						<p>自分が好きな観光地や楽しかった経験とか体験について人に自慢しながら、その時の幸せな時間をもう一度思い出せます。</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-thought"></i>
						</span>
						<h3>公有</h3>
						<p>一人だけでなく同じところでも人それぞれ持ってる思い出と経験したことが違うから自分の話を聞かせらせることろです。</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url({{ asset('css/images/img_bg_1.jpg') }})"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>&ldquo; 今、私だけの思い出を作ります。&rdquo;</h1>
					<p>&mdash; 自分の過去と未来を作って行きます。</p>
				</div>	
			</div>
		</div>
	</div>

		<footer id="gtco-footer" role="contentinfo" style="background-image: url({{ asset('css/images/img_bg_1.jpg') }})" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">
			</div>
		</div>
	</footer
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('js/start/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/start/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/start/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/start/jquery.waypoints.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset('js/start/owl.carousel.min.js') }}"></script>
	<!-- countTo -->
	<script src="{{ asset('js/start/jquery.countTo.js') }}"></script>

	<!-- Stellar Parallax -->
	<script src="{{ asset('js/start/jquery.stellar.min.js') }}"></script>

	<!-- Magnific Popup -->
	<script src="{{ asset('js/start/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/start/magnific-popup-options.js') }}"></script>
	
	<script src="{{ asset('js/start/moment.min.js') }}"></script>
	<script src="{{ asset('js/start/bootstrap-datetimepicker.min.js') }}"></script>

	<!-- Main -->
	<script src="{{ asset('js/start/main.js') }}"></script>

	</body>
</html>

