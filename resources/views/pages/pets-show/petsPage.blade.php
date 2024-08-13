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
                <section>
                    {{-- banner --}}
                    <div class="bg-[#F9F6E5] pt-20 pb-20 lg:py-20 text-center">
                        <div class="flex justify-center items-center gap-5">
                            <h1 class="text-xl lg:text-3xl font-bold border-r-2 border-gray-900 px-5">Pets</h1>
                            <a href="/">
                                <h2 class="text-md lg:text-xl">Home</h2>
                            </a>
                        </div>
                        <p class="mt-5">Our Friends Who Are Looking for A Home</p>
                    </div>
            
                    {{-- Find your favorite pets --}}
                    <div class="max-w-screen-2xl mx-auto px-5">
                        <div class="flex-col justify-center gap-5 flex sm:flex-row sm:justify-between items-center py-4 sm:px-20 bg-white shadow-[1px_0px_25px_0px_#cbcbcb] rounded-2xl mt-[-40px]">
                            <h1 class="text-sm">Find your favorite pets</h1>
                            <div>
                                <ul class="flex gap-5">
                                    <li>
                                        <a id="all-pets" href="/pages/pets-show/petsPage" class="bg-[#F4C38F] px-4 py-2 text-gray-800 rounded-full">All pets</a>
                                    </li>
                                    <li>
                                        <a id="dogs" href="/pages/pets-show/dogs" class="bg-[#F4C38F] hover:bg-[#F9F6E5] px-4 py-2 text-gray-800 rounded-full">Dogs</a>
                                    </li>
                                    <li>
                                        <a id="cats" href="/pages/pets-show/cats" class="bg-[#F4C38F] px-4 py-2 text-gray-800 rounded-full">Cats</a>
                                    </li>
                                </ul>
                                
                            </div>
                            {{-- search --}}
                            <div>
                               <form action="{{ route('pets.search') }}" method="GET">
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                        </svg>
                                    </div>
                                    <input type="search" name="query" id="default-search" class="block w-[250px] px-4 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-[#F7CEA3] focus:border-[#F7CEA3]" placeholder="Search" required />
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- body --}}
                @yield('content')
            </main>
        
            {{-- Footer --}}
            <x-footer />
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        {{-- current menu --}}
        <script src="{{asset('javaScript/currentMenu.js')}}"></script>
    </body>
</html>
