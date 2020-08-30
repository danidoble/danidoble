<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Danidoble') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">

    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            /*background: linear-gradient(90deg, #d53369 0%, #daae51 100%);*/
            background: linear-gradient(90deg, #0c788c 0%, #b375de 100%);
            /*background: linear-gradient(90deg, #000000 0%, #757575 100%);*/
        }
    </style>
</head>
<body class="leading-normal tracking-normal gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <div id="app">
        @include('layouts.menu')
        <div class="mx-auto mt-24 md:mt-18">
            @yield('content')

        </div>
    </div>
    @include('layouts.footer')

    <script src="{{ asset('js/all.js') }}" defer></script>
    @yield('scripts')
</body>
</html>
