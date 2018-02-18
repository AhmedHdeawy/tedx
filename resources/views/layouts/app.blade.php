<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'TEDxAzharUniversity') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('front/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
</head>
<body>
    <div id="app">
       
        

        @yield('content')

        

    </div>

    
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>
</body>
</html>
