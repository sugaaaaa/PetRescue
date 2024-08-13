<x-app-layout>
    <section>
        {{-- Banner --}}
        <div class="bg-[#F9F6E5] pt-28 pb-10 sm:pt-48 sm:pb-24 text-center">
            <div class="flex justify-center items-center gap-5">
                <h1 class="text-xl sm:text-3xl font-bold border-r-2 border-gray-900 px-5">Pet Parks</h1>
                <a href="/">
                    <h2 class="text-md sm:text-xl">Home</h2>
                </a>
            </div>
            <p class="mt-5">You can check the location of pet Parks nearest you in Cambodia!</p>
            <div class="flex gap-5 justify-center mt-5 text-sm">
                <a href="{{ url('pages/petTreatment') }}" class="px-5 py-1 sm:px-10 sm:py-1.5 border border-[#F4C38F] rounded-full hover:bg-[#EBD8C4]">Pet Treatment</a>
                <a href="{{ url('pages/petPark') }}" class="px-5 py-1 sm:px-10 sm:py-1.5 shadow-[1px_0px_25px_0px_#cbcbcb] rounded-full bg-white hover:bg-[#EBD8C4]">Pet Parks</a>
                <a href="{{ url('pages/petGrooming') }}" class="px-5 py-1 sm:px-10 sm:py-1.5 border border-[#F4C38F] rounded-full hover:bg-[#EBD8C4]">Pet Grooming</a>
                <a href="{{ url('pages/petShop') }}"  class="px-5 py-1 sm:px-10 sm:py-1.5 border border-[#F4C38F] rounded-full hover:bg-[#EBD8C4]">Pet shop</a>
            </div>
        </div>

               {{-- popular --}}
        <div class="mt-5 sm:mt-24 max-w-screen-xl mx-auto px-5">
            {{-- for card --}}
            <div class="grid lg:grid-cols-2 gap-2 sm:gap-4 mt-2 sm:mt-5 px-4 sm:px-5">
                {{-- loop here --}}
                @foreach($petPark as $pet)
                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-60 md:w-60 md:rounded-none md:rounded-s-lg" src="{{ asset('/PetPark/' . $pet->images) }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{ $pet->name }}</h5>
                        <div class="flex gap-2 items-center">
                            <i class="fa-regular fa-envelope"></i>
                            <p class="font-normal text-gray-700 dark:text-gray-400"> {{ $pet->email }}</p>
                        </div>
                        <div class="flex gap-2 items-center">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                            <p class="font-normal text-gray-700 dark:text-gray-400"> {{ $pet->phoneNumber }}</p>
                        </div>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $pet->address }},  {{ $pet->openDay }},  <br>{{ $pet->timeOpen }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>