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
                <div class="max-w-screen-xl mx-auto">
                    <div class="flex flex-col items-center mt-10">
                        <img src="{{ asset('/image/logo.jpg') }}" alt="image user" class="w-24 mb-2 rounded-full">
                        <div class="text-4xl font-semibold">{{ Auth::user()->name }}</div>
                        <div class="text-lg text-gray-700">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-5 mb-10">
                        <div class="max-w-7xl mx-auto flex justify-center items-center">
                            {{-- Profile Information --}}
                            <div>
                                <!-- Modal toggle -->
                                <div class="flex justify-center m-5">
                                    <button id="profileInformationButton" data-modal-target="profileInformationdModal" data-modal-toggle="profileInformationdModal" class="block bg-gray-100 hover:bg-gray-200 font-medium rounded-full text-lg px-5 py-2.5 text-center" type="button">
                                        Profile Information
                                    </button>
                                </div>
                                <!-- Main modal -->
                                <div id="profileInformationdModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                            <!-- Modal header -->
                                            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                <div>
                                                    <h1 class="text-xl font-medium text-gray-900">Profile Information</h1>
                                                </div>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-xl p-1.5 ml-auto inline-flex items-center" data-modal-toggle="profileInformationdModal">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            @include('profile.partials.update-profile-information-form')
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Update Password --}}
                            <div>
                                <!-- Modal toggle -->
                                <div class="flex justify-center m-5">
                                    <button id="updatePasswordButton" data-modal-target="updatePasswordModal" data-modal-toggle="updatePasswordModal" class="block bg-gray-100 hover:bg-gray-200 font-medium rounded-full text-lg px-5 py-2.5 text-center" type="button">
                                        Update Password
                                    </button>
                                </div>
                                <!-- Main modal -->
                                <div id="updatePasswordModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                            <!-- Modal header -->
                                            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                <div>
                                                    <h1 class="text-xl font-medium text-gray-900">Update Password</h1>
                                                </div>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-xl p-1.5 ml-auto inline-flex items-center" data-modal-toggle="updatePasswordModal">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            @include('profile.partials.update-password-form')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(!Auth::user()->hasRole('Admin'))
                        <div class="flex justify-center gap-5 text-lg">
                            <div>
                                <a href="/profile/userPost" class="underline">
                                    <h1>Post</h1>
                                </a>       
                            </div>
                            <div>
                                <a href="/profile/createPost">
                                    <h1>Create</h1>
                                </a>       
                            </div>
                            <div>
                                <a href="/profile/favorites">
                                    <h1>Favorites</h1>
                                </a>       
                            </div>
                            <div>
                                <a href="/profile/history">
                                    <h1>History</h1>
                                </a>       
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="max-w-screen-2xl mx-auto px-5">
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

