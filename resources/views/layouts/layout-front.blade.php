<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/home-page-test-3.css') }}">
{{--    <script type="text/javascript" src="{{ URL::to('js/jquery-3.5.1.min.js') }}"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $("#test").CreateMultiCheckBox({ width: '230px', defaultText : 'Select Below', height:'250px' });--}}
{{--        });--}}
{{--    </script>--}}



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
{{--    <link rel="stylesheet" href="public/css/bootstrap.css">--}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body {{--style="background: url('image/47.jpg') no-repeat; background-size: 100% auto;"--}} style="margin: 0;">
<div id="app">
    <section class="main" {{--style="margin-left: 15%; margin-right: 15%;"--}}>
        @include('layouts.left-sidebar')
        @include('layouts.nav-header')
        <div class="content">
            @yield('content')
        </div>
    </section>
    <script !src="">
        var sidebarwidth = document.getElementById("nav-left");
        var headerwidth = document.getElementById("header_redesigned");
        var mainpage = document.getElementsByClassName("content");
        mainpage[0].style['margin-left'] = getComputedStyle(sidebarwidth).width;
        mainpage[0].style['margin-top'] = getComputedStyle(headerwidth).height;
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
</div>
</body>
</html>
