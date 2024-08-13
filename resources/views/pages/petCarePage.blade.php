<x-app-layout>
    <section>
        {{-- Banner --}}
        <div class="bg-[#F9F6E5] pt-20 pb-10 sm:pt-20 sm:pb-24 text-center">
            <div class="flex justify-center items-center gap-5">
                <h1 class="text-xl sm:text-3xl font-bold border-r-2 border-gray-900 px-5">Pets Care</h1>
                <a href="/">
                    <h2 class="text-md sm:text-xl">Home</h2>
                </a>
            </div>
            <p class="mt-5">Help improve animal welfare in Cambodia!</p>
        </div>

        {{-- Pets Care With Love --}}
        <div class="max-w-screen-2xl mx-auto mt-5 sm:mt-10">
            <h1 class="text-lg sm:text-3xl text-center font-bold">Pets Care With Love</h1>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-2 sm:gap-4 sm:mt-5 sm:mt-10 px-4 sm:px-5">
                <div class="sm:place-self-center lg:col-span-3">
                    <p class="text-sm text-justify sm:text-lg lg:text-center">Many dogs, cats, and other animals do not have a home or a family who can care for them, a warm place for them, with the right people, family, or people who love animals to take them to their place and live with them, such as their family.</p>
                </div>
                <div>
                    <img src="{{asset('image/pet-care1.png')}}" alt="" class="rounded-xl w-full h-[300px] lg:h-full object-cover">
                </div>

                <div class="grid grid-rows-2 gap-2 sm:gap-4">
                    <div class="bg-gray-100 rounded-xl px-4 py-5 sm:p-5 lg:grid lg:justify-items-center lg:p-10 lg:py5">
                        <a href="{{ url('pages/petTreatment') }}">
                            <div class="flex justify-center">
                                <img src="{{asset('image/treatment-icon.png')}}" alt="" class="h-14 sm:h-20">
                            </div>
                            <h1 class="text-md text-center sm:text-2xl font-semibold sm:py-2 text-[#F4C38F]">Pet Treatment </h1>
                            <p class="text-gray-500 text-sm sm:text-lg text-center">Post-operative care includes pain medications, antibiotics, adequate nutrition, exercise restriction, and physiotherapy.</p>
                            <div class="sm:pt-5 text-[#F4C38F] text-sm sm:text-lg">
                                <a href="{{ url('pages/petTreatment') }}" class="flex items-end gap-2">
                                    <h1>Read More</h1>
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="bg-gray-100 rounded-xl px-4 py-5 sm:p-5 lg:grid lg:justify-items-center lg:p-10 lg:py5">
                        <a href="{{ url('pages/petGrooming') }}">
                            <div class="flex justify-center">
                                <img src="{{asset('image/grooming-icon.png')}}" alt="" class="h-14 sm:h-20">
                            </div>
                            <h1 class="text-md text-center sm:text-2xl font-semibold sm:py-2 text-[#F4C38F]">Pet Grooming</h1>
                            <p class="text-gray-500 text-sm sm:text-lg text-center">The act of bathing, brushing, clipping, or styling a pet , trimming a pet's nails, or providing analgland expression.</p>
                            <div class="sm:pt-5 text-[#F4C38F] text-sm sm:text-lg">
                                <a href="{{ url('pages/petGrooming') }}" class="flex items-end gap-2">
                                    <h1>Read More</h1>
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid grid-rows-2 gap-2 sm:gap-4">
                    <div class="bg-gray-100 rounded-xl px-4 py-5 sm:p-5 lg:grid lg:justify-items-center lg:p-10 lg:py5">
                        <a href="{{ url('pages/petPark') }}">
                            <div class="flex justify-center">
                                <img src="{{asset('image/parks-icon.png')}}" alt="" class="h-14 sm:h-20">
                            </div>
                            <h1 class="text-md text-center sm:text-2xl font-semibold sm:py-2 text-[#F4C38F]">Pet parks</h1>
                            <p class="text-gray-500 text-sm sm:text-lg text-center">Pet parks offer pets a chance to exercise, socialize, enjoy fresh air, practice training techniques, play games, and burn off energy.</p>
                            <div class="sm:pt-5 text-[#F4C38F] text-sm sm:text-lg">
                                <a href="{{ url('pages/petPark') }}" class="flex items-end gap-2">
                                    <h1>Read More</h1>
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="bg-gray-100 rounded-xl px-4 py-5 sm:p-5 lg:grid lg:justify-items-center lg:px-10 lg:py5">
                        <a href="{{ url('pages/petShop') }}">
                            <div class="flex justify-center">
                                <img src="{{asset('image/shop-icon.png')}}" alt="" class="h-14 sm:h-20">
                            </div>
                            <h1 class="text-md text-center sm:text-2xl font-semibold sm:py-2 text-[#F4C38F]">Pet shop </h1>
                            <p class="text-gray-500 text-sm sm:text-lg text-center">Browse through a variety of Pet Supplies for all your pet needs.</p>
                            <div class="sm:pt-5 text-[#F4C38F] text-sm sm:text-lg">
                                <a href="{{ url('pages/petShop') }}" class="flex items-end gap-2">
                                    <h1>Read More</h1>
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>