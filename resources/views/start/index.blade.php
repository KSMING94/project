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
    <title>TRAVEL_ALBUM_日本旅行</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="GetTemplates.co" />

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
                        <div id="gtco-logo"><a href="{{ url('/') }}">旅行アルバム<em>&nbsp;.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li><a href="{{ url('intro') }}">紹介</a></li>
                           
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url({{ asset('css/images/img_bg_1.jpg') }} )" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">
                        <div class="row row-mt-15em">
                            <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">

                                <h1 class="cursive-font">日本旅行</h1>
                                <span id="main-font" class="intro-text-small"></br>&nbsp;&nbsp;&nbsp;真の旅行とは</br></br>&nbsp;&nbsp;&nbsp;新しい景色を眺めるのではなく</br></br>&nbsp;&nbsp;&nbsp;新しい目を持つことにある。</br></br> <a href="http://gettemplates.co" target="_blank"></a></span>
                            </div>
                            <div class="col-md-4 col-md-push-1 animate-box" 。data-animate-effect="fadeInRight">
                                <div class="form-wrap">
                                    <div class="tab">
                                        <div class="tab-content">
                                            <div class="tab-content-inner active" data-content="signup">
                                                <!--    <<h3 class="cursive-font">LOGIN</h3>-->
                                                @if(!Session::get('uid'))
                                                <form action="{{ route('login') }}" method="post">
                                                        @csrf
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="date-start">アイディ<input type="text" name="id" class="form-control"></label>

                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="date-start">パスワード<input type="password" name="pw" class="form-control"></label>

                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                           
                                                                <input type="submit" class="btn btn-primary btn-block" value="LOGIN">
                                                                <input type="button" class="btn btn-primary btn-block" onclick="location.href='{{ route('register.get') }}'" value="JOIN">
                                                           
                                                        </div>
                                                    </div>
                                                </form>
                                                @else
                                                <div class="tab-content">
                                                    <div class="tab-content-inner active" data-content="signup">
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <input type="submit" class="btn btn-primary btn-block" value="{{Session::get('name')}}님 환영합니다"> 
                                                                <input type="submit" class="btn btn-primary btn-block" onclick="location.href='{{ url('main') }}'" value="START">
                                                                <input type="button" class="btn btn-primary btn-block" onclick="location.href='{{ route('logout') }}'" value="LOGOUT">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

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
