<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Estrellas del Poker</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link rel="stylesheet" href="{{asset('assets/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fonts/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />

        <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#home">
                                                <img src="{{asset('assets/images/logo.png')}}"/>
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="#">INICIO</a></li>
                                            </ul>
                                            @yield('contenido')

                                        </div>

                                    </div>
                                </nav>
                            </div>  
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->





            <section id="home" class="home">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>Estrellas del Poker</h1>
                                      
                                        </div>
                                    </div>
          
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>Estrellas del Poker</h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_service_area">
                                <div class="main_service_content">
                                    <div class="service_tabe">
                                        <!-- Nav tabs -->
                                        <ul class="service_tabe_menu nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#webdesign" aria-controls="webdesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />Cantina</a></li>
                                            <li role="presentation"><a href="#appdesign" aria-controls="appdesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />Billar</a></li>
                                            <li role="presentation"><a href="#graphicdesign" aria-controls="graphicdesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />Pozo</a></li>
                                            <li role="presentation"><a href="#gamedesign" aria-controls="gamedesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />Compra de productos</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>













        </div>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="{{asset('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('assets/js/jquery.masonry.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="{{asset('assets/js/gmaps.min.js')}}"></script>


        <script>

                                            function showmap() {
                                                var mapOptions = {
                                                    zoom: 8,
                                                    scrollwheel: false,
                                                    center: new google.maps.LatLng(-34.397, 150.644),
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                };
                                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                                            }
        </script>

        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>

    </body>
</html>
