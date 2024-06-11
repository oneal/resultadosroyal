<!DOCTYPE html>
<html lang="es">
<head>
    @include('web.layouts.partials.metas')
    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&Montserrat:wght@400;700&family=Crete+Round:ital@0;1&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?t={{time()}}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}?t={{time()}}">
    <link rel="stylesheet" href="{{ asset('css/medical-icons.css') }}?t={{time()}}">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}?t={{time()}}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{{asset('css/medical.css')}}?t={{time()}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}?t={{time()}}">


    <link rel="icon" type="image/jpg" href="{{ Voyager::image('fav.png') }}"/>
</head>

<body class="stretched page-transition">

<!-- Document Wrapper
============================================= -->
<div id="wrapper">
    @include('web.layouts.partials.header')
    @yield('content')
    @include('web.layouts.partials.footer')
</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="uil uil-angle-up rounded-circle"></div>

<!-- JavaScripts
============================================= -->
<script src="{{ asset('js/plugins.min.js') }}"></script>
<script src="{{ asset('js/functions.bundle.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@yield('javascript')
</body>
</html>
