<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&amp;display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&amp;display=swap" rel="stylesheet">
        <!-- Font -->

        <!--build:css-->
        <link rel="stylesheet" href="{{ asset('web/css/main.css') }}">
        <!-- endbuild -->

        <!--custom css start-->
        <link rel="stylesheet" href="{{ asset('web/css/custom.css') }}">
        <!--custom css end-->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
    </head>
    <body>
        <!--preloader start-->
        <div id="preloader" class="bg-light-subtle">
            <div class="preloader-wrap">
                <img src="{{ asset('web/img/Desysapp.png') }}" alt="logo" class="img-fluid preloader-icon w-100">
                <div class="loading-bar"></div>
            </div>
        </div>
        <!--preloader end-->
        <div class="main-wrapper">

            @include('layouts.web.partials.header')

            {{ $slot }}

            @include('layouts.web.partials.footer')
        </div>

        <script src="{{ asset('web/js/vendors/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('web//js/vendors/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('web/js/vendors/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('web/js/vendors/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('web/js/vendors/parallax.min.js') }}"></script>
        <script src="{{ asset('web/js/vendors/aos.js') }}"></script>
        <script src="{{ asset('web/js/vendors/massonry.min.js') }}"></script>
        <script src="{{ asset('web/js/app.js') }}"></script>

    </body>
</html>
