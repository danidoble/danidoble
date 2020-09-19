<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'danidoble') }}</title>

        <!-- Fonts -->
        <!--link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet"-->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased leading-normal tracking-normal gradient">
        <div class="min-h-screen">
            @livewire('navigation-dropdown')

            @if(isset($header))
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ isset($slot) ? $slot : '' }}
                @yield('content')
            </main>
            @include('layouts.footer')
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
