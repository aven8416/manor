<!DOCTYPE html>

<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Усадьба Бохвицей</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/css/swiper.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>

    <!-- THEME STYLES -->
    <link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style/style.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/favicon.png')}}" type="image/png"/>
</head>

<!-- END HEAD -->

<!-- BODY -->
<body id="body" data-spy="scroll" data-target=".header">

<!--========== HEADER ==========-->
<header class="header navbar-fixed-top">
@yield('header')
</header>
<!--========== END HEADER ==========-->

@yield('content')
    <!--========== FOOTER ==========-->
    <footer class="footer">

@yield('footer')

    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Наверх</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="{{ asset('assets/vendor/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/vendor/jquery.easing.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery.back-to-top.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery.smooth-scroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery.wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/swiper/js/swiper.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/masonry/jquery.masonry.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/masonry/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/js/layout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/components/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/components/swiper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/components/maginific-popup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/components/maginific-popup.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/components/masonry.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/components/gmap.min.js') }}" type="text/javascript"></script>

</body>
<!-- END BODY -->
</html>