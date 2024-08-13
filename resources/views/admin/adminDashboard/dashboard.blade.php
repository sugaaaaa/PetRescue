<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- rich text editor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>


    {{-- style for current menu --}}
    <style>
        .active {
            color: #d0802b;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="antialiased dark:bg-gray-900">
        {{-- Nav --}}
        <x-dash-menu-top />

        <!-- Sidebar -->
        <x-dash-manu-left />

        <main class="p-4 md:ml-64 h-auto pt-20">
            @yield('content')
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    {{-- current menu --}}
    <script src="{{asset('javaScript/currentMenu.js')}}"></script>
</body>

</html>
     


