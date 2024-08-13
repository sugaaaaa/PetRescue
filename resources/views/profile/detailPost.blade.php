<x-app-layout>
    <div class="max-w-screen-lg mx-auto mt-10">
        <div class="shadow-[1px_0px_25px_0px_#cbcbcb] rounded-3xl">
            <div class="grid grid-cols-2">
                <div>
                    <img src="/userImage/{{ $post->images }}" alt="" class=" w-[510px] h-full object-cover rounded-l-3xl">
                </div>
                <div class="p-10">
                    <div class="flex gap-5">
                        <div class="hover:bg-gray-200 hover:rounded-full h-10 w-10 flex items-center justify-center">
                            <a href="{{ asset('/userImage/' . $post->images) }}" download id="downloadHoverButton" data-dropdown-toggle="downloadHover" data-dropdown-trigger="hover" >
                                <i class="fa-solid fa-download text-xl"></i>
                            </a>
                                
                            <!-- Dropdown menu -->
                            <div id="downloadHover" class="z-10 hidden">
                                <ul aria-labelledby="downloadHoverButton">
                                    <li class="bg-gray-900 px-4 py-2 rounded-lg">
                                        <a href="{{asset('image/cat-item-1.jpeg')}}" download class="text-sm text-white">Download Image</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                        <div class="hover:bg-gray-200 hover:rounded-full h-10 w-10 flex items-center justify-center">
                            <a href="#" id="editHoverButton" data-dropdown-toggle="editHover" data-dropdown-trigger="hover">
                                <i class="fa-solid fa-pen-to-square text-xl"></i>
                            </a>
                                
                            <!-- Dropdown menu -->
                            <div id="editHover" class="z-10 hidden">
                                <ul aria-labelledby="editHoverButton">
                                    <li class="bg-gray-900 px-4 py-2 rounded-lg">
                                        <a href="#" download class="text-sm text-white">Edit post</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h1 class="text-2xl font-bold"> {{ $post->title }}</h1>
                        <p class="mt-3">{{ $post->description }}</p>

                        {{-- User Info--}}
                        <div class="mt-4">
                            <a href="#" class="flex items-center gap-3">
                                <img src="{{asset('/image/logo.jpg')}}" alt="image user" class="h-12 w-12 object-cover rounded-full">
                                <h1 class="font-semibold">{{ Auth::user()->name }}</h1>
                            </a>
                        </div>
                    </div>

                    <div class="mt-20">
                        <h1>Comments</h1>
                        <p class="text-sm text-gray-500 mt-2">This pets is so cute <:3333</p>
                        <hr class="w-full h-2 mt-5">
                        <div class="flex justify-between items-center mt-5">
                            <h1 class="text-xl font-bold">What do you think?</h1>
                            <div class="flex gap-3 items-center">
                                <h1>80</h1>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mt-5">
                            <div class="h-[50px] w-[59px]">
                                <img src="{{asset('image/cat-item-1.jpeg')}}" alt="" class="h-full w-full object-cover rounded-full">
                            </div>
                            <form class="w-full">   
                                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                        </svg>
                                    </div>
                                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Add a comment" required />
                                    <button type="button" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>