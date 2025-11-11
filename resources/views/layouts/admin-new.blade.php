<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    
    {{-- Navbar Component --}}
    @include('partials.navbar')

    {{-- Sidebar Component --}}
    @include('partials.sidebar')

    {{-- Main Content --}}
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            {{ $slot }}
        </div>
    </div>

    {{-- JavaScript --}}
    @include('partials.scripts')
    
    {{-- Custom Scripts Stack --}}
    @stack('scripts')
    
    {{-- Livewire Scripts --}}
    @livewireScripts
</body>
</html>
