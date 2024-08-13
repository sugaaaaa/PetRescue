<x-app-layout>
    <section>
        {{-- Banner --}}
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
                            <a href="#" class="bg-[#F4C38F] px-4 py-2 text-gray-800 rounded-full">All pets</a>
                        </li>
                        <li>
                            <a href="#" class="bg-[#F4C38F] hover:bg-[#F9F6E5] px-4 py-2 text-gray-800 rounded-full">Dogs</a>
                        </li>
                        <li>
                            <a href="#" class="bg-[#F4C38F] px-4 py-2 text-gray-800 rounded-full">Cats</a>
                        </li>
                    </ul>
                </div>
                {{-- search --}}
                <div>
                    <form>   
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-[250px] px-4 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-[#F7CEA3] focus:border-[#F7CEA3]" placeholder="Search" required />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- pets --}}
        <section class="sm:my-20">
            {{-- for card --}}
            <div class="max-w-screen-2xl mx-auto grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5 sm:mt-10 px-5">
                {{-- loop here --}}
                @foreach($pagepet as $pet)
                <div class="bg-[#F9F6E5] rounded-2xl max-w-sm">
                    <a href="{{ url('/pages/detailPets', $pet->id) }}">
                        <img class="rounded-t-[1rem] rounded-b-[50%] w-full h-[400px] object-cover" src="{{ asset('/images/' . $pet->images) }}" alt=""/>
                    </a>
                    <div class="pt-5 pb-10 grid justify-items-center">
                        <a href="{{ url('/pages/detailPets', $pet->id) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pet->name }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $pet->age . " year old" }}, {{ $pet->sex }}</p>
                        <a href="{{ url('/pages/detailPets', $pet->id) }}" class="border border-[#F4C38F] px-5 py-1.5 rounded-full text-sm text-gray-500">Read more</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </section>
</x-app-layout>

