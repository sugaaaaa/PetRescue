<nav x-data="{ open: false }">
    <div>
        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="flex items-center space-x-3 rtl:space-x-reverse">
                <a href="{{ url('/') }}">
                    <img src="{{asset('image/logo.jpg')}}" class="h-8 sm:h-16 rounded-full" alt="PetsRescue Logo">
                </a>
                @if(Auth::check())
                    @if(Auth::user()->hasRole('Admin'))
                        <x-nav-link :href="url('admin/adminDashboard/overView/index')" :active="request()->routeIs('admin/adminDashboard/overView/index')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    @else
                        <a href="/">
                            <span class="self-center text-sm sm:text-2xl font-semibold whitespace-nowrap dark:text-white">PetsRescue</span>
                        </a>
                    @endif
                @else
                    <a href="/">
                        <span class="self-center text-sm sm:text-2xl font-semibold whitespace-nowrap dark:text-white">PetsRescue</span>
                    </a>
                @endif
            </div>
            <div class="flex items-center lg:order-2 space-x-3 lg:space-x-0 rtl:space-x-reverse">
                @if (Route::has('login'))
                    @auth
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full lg:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="{{asset('/image/logo.jpg')}}" alt="user photo">
                        </button>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-center font-semibold text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
            
                                        <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                            Log Out
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @else
                            <div>
                                <a href="{{ route('login') }}" class="rounded-lg text-sm sm:text-lg sm:px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>

                                @if (Route::has('register'))

                                <a href="{{ route('register') }}" class="rounded-lg text-sm sm:text-lg sm:px-3 pl-2 sm:pl-0 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Register
                                </a>
                            </div>
                        @endif
                    @endauth
                @endif
                <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-user">
                <ul class="flex flex-col bg-gray-200 lg:bg-white rounded-lg font-medium p-4 lg:p-0 mt-4 lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0">
                    <li id="menu-home-page">
                        <a href="/" class="block py-2 px-3 text-sm sm:text-lg rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#d0802b] lg:p-0">
                            Home
                        </a>
                    </li>
                    <li id="menu-about-page">
                        <a href="/about" class="block py-2 px-3 text-sm sm:text-lg rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#d0802b] lg:p-0">
                            About Us
                        </a>
                    </li>
                    <li id="menu-pets-page">
                        <a href="/pages/pets-show/petsPage" class="block py-2 px-3 text-sm sm:text-lg rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#d0802b] lg:p-0">
                            Pets
                        </a>
                    </li>
                    <li id="menu-blog-page">
                        <a href="/pages/blogPage" class="block py-2 px-3 text-sm sm:text-lg rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#d0802b] lg:p-0">
                            Blogs
                        </a>
                    </li>
                    <li id="menu-petcare-page">
                        <a href="/petCar" class="block py-2 px-3 rounded text-sm sm:text-lg hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#d0802b] lg:p-0">
                            Pets Care
                        </a>
                    </li>
                    <li id="menu-contact-page">
                        <a href="/pages/contactPage" class="block py-2 px-3 text-sm sm:text-lg rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#d0802b] lg:p-0">
                            Contect
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>