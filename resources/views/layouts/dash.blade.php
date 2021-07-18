<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body class="font-sans antialiased">
<x-jet-banner />

<div class="min-h-screen bg-gray-100 dark:bg-gray-800">
    @include('layouts.sidebar')
</div>

@stack('modals')

@livewireScripts

<script>
    btn_switch_theme = document.querySelectorAll('.btn-switch-theme');
    for(let i=0;i<btn_switch_theme.length;i++){
        btn_switch_theme[i].addEventListener('click',(e)=>{
            let htmlClasses = document.querySelector('html').classList;
            if(localStorage.theme === 'dark'){
                htmlClasses.remove('dark');localStorage.removeItem('theme');
                document.getElementById('btn-sun-theme').classList.add('hidden');
                document.getElementById('btn-moon-theme').classList.remove('hidden');
            }
            else{
                htmlClasses.add('dark');localStorage.theme = 'dark';
                document.getElementById('btn-sun-theme').classList.remove('hidden');
                document.getElementById('btn-moon-theme').classList.add('hidden');
            }
        });
    }
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.getElementById('btn-sun-theme').classList.remove('hidden');
        document.getElementById('btn-moon-theme').classList.add('hidden');
    } else {
        document.getElementById('btn-sun-theme').classList.add('hidden');
        document.getElementById('btn-moon-theme').classList.remove('hidden');
    }
</script>
<script src="{{ asset(mix('js/custom.js')) }}" defer></script>
</body>
</html>
