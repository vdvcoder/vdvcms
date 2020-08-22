<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title') @yield('title') | @endif {{ config('app.name') }}</title>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src=" {{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="{{  asset('fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="{{  asset('css/ui.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="{{  asset('js/script.js') }}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('js/semantic/semantic.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    @yield('header')

</head>

<body>

    @include('vdvwebshop.includes.header')

    @yield('content')

    @include('vdvwebshop.includes.footer')

    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/semantic/semantic.min.js')}}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @yield('footer')
</body>
</html>
