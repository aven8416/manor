<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>{{$title}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/favicon.png')}}" type="image/png"/>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap-filestyle.min.js')}}"></script>

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




</head>
<body>

<header id="header_wrapper">
    @yield('header')


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</header>
@yield('content')
</body>
</html>
