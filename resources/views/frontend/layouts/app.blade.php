<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">
    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/favicon.png')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap v4.3.1 CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/lib/bootstrap/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/normalize.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/theme.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/lib/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/lib/slick/slick/slick-theme.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('assets')}}/lib/Magnific-Popup-master/dist/magnific-popup.css">
    <!-- Font Awesome Free 5.10.2 CSS JS -->
    <link href="{{asset('assets')}}/lib/fontawesome-free-5.10.2-web/css/all.css" rel="stylesheet">
    <script defer src="{{asset('assets')}}/lib/fontawesome-free-5.10.2-web/js/brands.js"></script>
    <script defer src="{{asset('assets')}}/lib/fontawesome-free-5.10.2-web/js/solid.js"></script>
    <script defer src="{{asset('assets')}}/lib/fontawesome-free-5.10.2-web/js/fontawesome.js"></script>

    @vite(['resources/css/app-frontend.css', 'resources/js/app-frontend.js'])


    @stack('after-styles')

    <x-google-analytics />
</head>

<body class="default">

    @include('frontend.includes.header')

    <main>
        <div id="content">
            @yield('content')
            <br>
            @include('frontend.includes.footer')
        </div>
    </main>

    <div class="overlay"></div>
</body>

<!-- Scripts -->
<!-- jQuery v3.4.1 -->
<script src="{{asset('assets')}}/lib/jquery/jquery-3.4.1.min.js"></script>
<!--  Bootstrap v4.3.1 JS -->
<script src="{{asset('assets')}}/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="{{asset('assets')}}/lib/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
<!-- Slick JS -->
<script src="{{asset('assets')}}/lib/slick/slick/slick.min.js"></script>
<!--  Custom JS -->
<script src="{{asset('assets')}}/js/theme.js"></script>
@stack('after-scripts')

</html>