<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        {{-- logo --}}
        <link rel="shortcut icon" href="{{asset('image/logo.jpg')}}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- Icon --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <script src="https://cdn.tailwindcss.com"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/share.js') }}"></script>

        <script src="https://js.stripe.com/v3/"></script>

        {{-- style share --}}
        <style>
            div#social-links {
            margin: 0 auto;
            max-width: 500px;
            }
    
            div#social-links ul li {
                display: inline-block;
                padding-right: 10px
            }   
    
            div#social-links ul li a {
                margin: 1px;
                font-size: 25px;
                color: #d47612;
                
            }
            .active {
            color: #d0802b;
            font-weight: bold;
        }
        </style>
        
    </head>
    <body class="font-sans antialiased">

        <div class="min-h-screen">
            @include('layouts.navigation')
        
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
        
            <!-- Page Content -->
            <main>
                {{-- Banner --}}
                <div class="bg-[#F9F6E5] pt-20 pb-10 sm:pt-20 sm:pb-24 text-center">
                    <div class="flex justify-center items-center gap-5">
                        <h1 class="text-xl sm:text-3xl font-bold border-r-2 border-gray-900 px-5">Blog</h1>
                        <a href="/">
                            <h2 class="text-md sm:text-xl">Home</h2>
                        </a>
                    </div>
                    <p class="mt-5 text-sm">Our friends who are looking for a home</p>
                    <div class="flex gap-5 justify-center mt-5 text-sm">
                        <a href="/pages/blogPage" class="px-5 py-1 sm:px-10 sm:py-1.5 shadow-[1px_0px_25px_0px_#cbcbcb] rounded-full bg-white hover:bg-[#EBD8C4]">Blog</a>
                        <a href="/userpost" class="px-5 py-1 sm:px-10 sm:py-1.5 border border-[#F4C38F] rounded-full hover:bg-[#EBD8C4]">Post</a>
                    </div>
                </div> 

                <div>
                    @yield('content')
                </div>
            </main>
        
            {{-- Footer --}}
            <x-footer />
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        {{-- current menu --}}
        <script src="{{asset('javaScript/currentMenu.js')}}"></script>
    </body>
</html>
