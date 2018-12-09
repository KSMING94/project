<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Title -->
        <title>TRVEL ALBUM_MAIN</title>
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
        <link rel="stylesheet" href="{{ asset('css/start/style_1.css') }}">
        <!-- Modernizr JS -->
        <script src="{{ asset('js/start/modernizr-2.6.2.min.js') }}"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
        <!-- Bootstrap bootstrap-touch-slider Slider Main Style Sheet -->
        <link href="{{ asset('css/main/bootstrap-touch-slider.css') }}" rel="stylesheet" media="all">
    </head>

    <body>

        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- Third Slide -->
                <div class="item active">

                    <!-- Slide Background -->
                    <img src="{{ asset('css/images/slide1.jpg') }}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_left">
                                <h1 data-animation="animated zoomInRight">日本の観光地</h1>
                                <p data-animation="animated fadeInLeft">日本の色んなところについて</p>
                                <a href="{{ url('page1') }}" class="btn btn-default" data-animation="animated fadeInLeft">クリック</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="{{ asset('css/images/slide2.jpg') }}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated flipInX">日本の食べ物</h1>
                        <p data-animation="animated lightSpeedIn">美味しい食べ物と和食について</p>
                        <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">クリック</a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="{{ asset('css/images/slide3.jpg') }}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="animated zoomInLeft">日本の文化体験</h1>
                        <p data-animation="animated fadeInRight">普通な大学生の日常生活について</p>
                        <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">クリック</a>
                    </div>
                </div>
                <!-- End of Slide -->


            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
        

        <!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
        <script src="{{ asset('css/main/bootstrap-touch-slider.js') }}"></script>
        
        <script type="text/javascript">
            $('#bootstrap-touch-slider').bsTouchSlider();
        </script>

    </body>

</html>

<!-- End -->