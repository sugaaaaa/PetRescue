<x-app-layout>
    <section>
        <section class="max-w-screen-2xl 2xl:mx-auto sm:h-[900px] lg:h-[700px] bg-[#F4C38F] ml-4 mr-4 sm:mx-5 lg:ml-5 lg:mr-5 rounded-xl sm:rounded-3xl px-3 sm:mt-5 sm:mb-32 pb-5 sm:pb-0">
            <div class="flex flex-col lg:justify-between sm:flex-col lg:flex-row sm:items-center sm:px-10 sm:pt-10">
                <div class="flex flex-col items-center sm:flex-row lg:flex-col lg:items-start">
                    <div class="mt-5">
                        <h1 class="text-center sm:text-start sm:text-3xl sm:text-xl font-bold lg:text-4xl">Adopt Love, Adopt Joy: <br>Give a Pet a Forever Home Today!</h1>
                        <h3 class="text-sm sm:text-xl text-gray-600 mt-2 sm:mt-5">Empowering homeless pets with love and <br> shelter, one pawprint at a time.</h3>
                    </div>
                    <div class="lg:mt-10 w-0 sm:w-full">
                        <img src="{{URL::asset('/image/img-banner.png')}}" alt="" >
                    </div>
                </div>
    
                {{-- Donation form --}}
                <div class="lg:w-[700px] rounded-lg sm:rounded-3xl bg-white p-5 mt-5 sm:p-10 lg:px-10 lg:py-10 shadow-[1px_0px_25px_0px_#cbcbcb]">
                    <form id="donation-form" action="{{ route('donate.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <h1 class="text-lg sm:text-4xl font-bold text-[#F4C38F] text-center sm:pb-5">Make a Donation!</h1>
                            <h3 class="text-sm sm:text-lg">Every donation, no matter how big or small, makes a significant difference to our cause. Thank you for doing your part to help.</h3>
                        </div>

                        {{-- name and email --}}
                        <div class="grid sm:grid-cols-2 gap-2">
                            <div class="mt-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="w-full bg-[#F9F6E5] py-0.5 px-3 sm:py-2 sm:px-4 mt-2 rounded-md sm:rounded-lg" placeholder="Your name" required>
                            </div>
                            <div class="mt-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="w-full bg-[#F9F6E5] py-0.5 px-3 sm:py-2 sm:px-4 mt-2 rounded-md sm:rounded-lg" placeholder="example@gmail.com" required>
                            </div>
                        </div>

                        {{-- donation amount --}}
                        <div class="mt-4">
                            <h1 class="mb-2 text-sm sm:text-lg">Donation amount</h1>
                            <div class="flex justify-between text-lg">
                                <div class="flex items-center">
                                    <input id="fiveDolarButton" data-modal-target="fiveDolarModal" data-modal-toggle="fiveDolarModal" type="radio" name="amount" value="5" class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="fiveDolarButton" class="text-sm sm:text-lg ms-2 text-gray-900 dark:text-gray-300">5$</label>
                                    <!-- Main modal -->
                                    <div id="fiveDolarModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <!-- Modal header -->
                                                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                        <h3 class="font-semibold">
                                                            $5 for donation
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="fiveDolarModal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('image/pay/five-dolar.jpg') }}" alt="" class="rounded-[22px]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="tenDolarButton" data-modal-target="tenDolarModal" data-modal-toggle="tenDolarModal" type="radio" name="amount" value="10" class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="tenDolarButton" class="text-sm sm:text-lg ms-2 text-gray-900 dark:text-gray-300">10$</label>
                                    <!-- Main modal -->
                                    <div id="tenDolarModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <!-- Modal header -->
                                                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                        <h3 class="font-semibold">
                                                            $10 for donation
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tenDolarModal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('image/pay/ten-dolar.jpg') }}" alt="" class="rounded-[22px]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="fifteenDolarButton" data-modal-target="fifteenDolarModal" data-modal-toggle="fifteenDolarModal" type="radio" name="amount" value="15" class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="fifteenDolarButton" class="text-sm sm:text-lg ms-2 text-gray-900 dark:text-gray-300">15$</label>
                                    <!-- Main modal -->
                                    <div id="fifteenDolarModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <!-- Modal header -->
                                                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                        <h3 class="font-semibold">
                                                            $15 for donation
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="fifteenDolarModal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('image/pay/fefteen-dollar.jpg') }}" alt="" class="rounded-[22px]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="twentyDolarButton" data-modal-target="twentyDolarModal" data-modal-toggle="twentyDolarModal" type="radio" name="amount" value="20" class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="twentyDolarButton" class="text-sm sm:text-lg ms-2 text-gray-900 dark:text-gray-300">20$</label>
                                    <!-- Main modal -->
                                    <div id="twentyDolarModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <!-- Modal header -->
                                                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                        <h3 class="font-semibold">
                                                            $20 for donation
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="twentyDolarModal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('image/pay/twenty-dollar.jpg') }}" alt="" class="rounded-[22px]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="grid sm:grid-cols-3 gap-2">
                                <div class="sm:col-span-2">
                                    <label for="remarks">Remarks</label>
                                    <input type="text" name="remarks" class="w-full mt-2 text-lg bg-[#F9F6E5] py-2 px-4 rounded-lg" placeholder="Remarks (optional)">
                                    <p class="mt-4">Screenshot your payment and upload here <i class="fa-solid fa-hand-point-right"></i></p>
                                </div>
                                <div class="flex items-center justify-center w-full">
                                    <label for="images" class="flex flex-col items-center justify-center w-full h-64 border cursor-pointer bg-gray-50 hover:bg-gray-100 rounded-lg">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full relative">
                                            <i class="fa-regular fa-image text-5xl text-gray-400"></i>
                                            <img src="" id="file-preview" class="absolute h-full object-scale-down rounded-lg">
                                            <p class="mb-2 text-gray-500 text-lg">Click to upload</p>
                                            <input class="form-control hidden" type="file" name="images" id="images" accept="image/*" onchange="showFile(event)">
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                            </div>
                            <div class="flex items-center mt-3">
                                <input id="default-checkbox" type="checkbox" name="subscribe" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="text-lg ms-2 text-gray-900">I would like to receive occasional updates via email</label>
                            </div>
                        </div>

                        <button type="submit" class="text-white bg-[#607856] hover:bg-[#81A073] w-full py-2 rounded-lg mt-10">Donate</button>
                    </form>
                </div>
            </div> 
        </section>
        {{-- Pets Rescue --}}
        <section class="w-full bg-[#F9F6E5] py-4 sm:py-10 mt-5 sm:mt-[200px]">
            <h1 class="text-center sm:text-3xl text-lg font-bold pb-2 sm:pb-4">Pets Rescue</h1>
            <p class="text-center text-sm sm:text-lg px-5">Cambodia's online pet adoption platform uniting millions of pet lovers with thousands of rescue <br> pets across the nation looking for a home.</p>

            <div class="flex sm:justify-center sm:gap-5 mt-4 sm:mt-10 px-4 sm:px-5">
                <div class="flex items-center gap-2 sm:gap-5">
                    <div class="w-[70px] sm:w-[200px]">
                        <img src="{{asset('image/stray-icon.png')}}" alt="" class="w-full">
                    </div>
                    <div>
                        <h1 class="text-md sm:text-3xl font-semibold">5<sup>+</sup> million</h1>
                        <p class="text-sm">Stray pets in Cambodia</p>
                    </div>
                </div>

                <div class="flex items-center gap-2 sm:gap-5">
                    <div class="w-[70px] sm:w-[200px]">
                        <img src="{{asset('image/homeless-icon.png')}}" alt="" class="w-full">
                    </div>
                    <div>
                        <h1 class="text-md sm:text-3xl font-semibold">1<sup>+</sup> million</h1>
                        <p class="text-sm">Homeless pets in Cambodia</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Our friends who are looking for a home --}}
        <section class="mt-5 sm:mt-10">
            <h1 class="text-lg sm:text-3xl text-center font-bold">Our friends who are looking <br> for a home</h1>
            
            <div class="mt-5 mb-5 sm:mb-0">
                <ul class="flex justify-center gap-5">
                    <li>
                        <a href="/pages/pets-show/petsPage" class="bg-[#F4C38F] px-4 py-2 text-gray-800 rounded-full">All pets</a>
                    </li>
                    <li>
                        <a href="/pages/pets-show/dogs" class="bg-[#F4C38F] hover:bg-[#F9F6E5] px-4 py-2 text-gray-800 rounded-full">Dogs</a>
                    </li>
                    <li>
                        <a href="/pages/pets-show/cats" class="bg-[#F4C38F] px-4 py-2 text-gray-800 rounded-full">Cats</a>
                    </li>
                </ul>
            </div>

            {{-- for card --}}
            <div class="max-w-screen-2xl mx-auto grid sm:grid-cols-2 lg:grid-cols-4 gap-2 sm:gap-4 mt-4 sm:mt-10 px-4 sm:px-5">
                {{-- loop here --}}
                @foreach($pethome->take(4) as $pet)
                    <div class="bg-[#F9F6E5] rounded-2xl max-w-sm">
                        <a href="{{ url('/pages/detailPets', $pet->id) }}">
                            <img class="rounded-t-[1rem] rounded-b-[50%] w-full h-[400px] object-cover" src="{{ asset('/images/' . $pet->images) }}" alt=""/>
                        </a>
                        <div class="pt-5 pb-10 grid justify-items-center">
                            <a href="{{ url('/pages/detailPets', $pet->id) }}" >
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{ $pet->name }} </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ "Age: " . $pet->age}}, {{ $pet->sex }}</p>
                            <a href="{{ url('/pages/detailPets', $pet->id) }}" class="border border-[#F4C38F] px-5 py-1.5 rounded-full text-sm text-gray-500">Read more</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>

        {{-- Pets Care With Love --}}
        <section class="max-w-screen-2xl mx-auto mt-5 sm:mt-10">
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
                                <a href="{{ url('pages/petTreatment') }}"class="flex items-end gap-2">
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
        </section>

        {{-- See homeless pets everywhere in Cambodia! --}}
        <div class="max-w-screen-lg mx-auto mt-5 sm:mt-10">
            <h1 class="text-lg sm:text-3xl px-5 font-bold text-center">See Homeless Pets Everywhere in Cambodia!</h1>
            <div class="text-center sm:mt-4 text-[#DE9D52] text-sm">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <div class="mt-2 sm:mt-5 sm:px-5 flex justify-center">
                <iframe class="w-[360px] h-[215px] sm:w-[805px] sm:h-[500px] lg:w-[1024px] rounded-lg" src="https://www.youtube.com/embed/QmwpW8kZD0Y?si=3uBrtGfrrPicsyDR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

        {{-- News about animals --}}
        {{-- News about animals --}}
<section class="mt-5 sm:mt-10 max-w-screen-2xl mx-auto">
    <div class="flex justify-between items-center px-4 sm:px-5">
        <h1 class="text-lg sm:text-3xl font-bold">News Blog about animals</h1>
        <a href="/pages/blogPage" class="text-blue-800 font-semibold text-sm sm:text-lg">See More</a>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
        @if($adminBlogs->isEmpty())
            <p>No user posts available.</p>
        @else
        {{-- loop here --}}
            @foreach($adminBlogs as $adminPost)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="/pages/detailBlogs/{{ $adminPost->id }}">
                        <img class="rounded-t-lg h-[350px] w-full object-cover" src="{{ asset('/blogs/' . $adminPost->images) }}" alt=""/>
                    </a>
                    <div class="p-5">
                        <p class="text-sm text-blue-500">{{ $adminPost->created_at->format('F d, Y') }}</p>
                        <a href="/pages/detailBlogs/{{ $adminPost->id }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-2">{{ $adminPost->title }}</h5>
                        </a>
                        <div class="mt-5">
                            <div class="flex justify-between items-center">
                                {{-- Favorite count --}}
                                <div>
                                    <button class="favorite-btn" data-blog-id="{{ $adminPost->id }}">
                                        <i class="fa-heart {{ $adminPost->is_favorited ? 'fa-solid text-red-500' : 'fa-regular text-gray-500' }}"></i> <span class="likes-count">{{ $adminPost->likes }}</span>
                                    </button>
                                </div>

                                {{-- Share button --}}
                                <div>
                                    {!! $shareComponent !!}
                                </div>
                            </div>
                        </div>
                        
                        <a href="/pages/detailBlogs/{{ $adminPost->id }}">
                            <div class="flex justify-between mt-5 items-end text-md text-blue-800">
                                <p>Read More</p>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>
    </section>
</x-app-layout>

<!-- Your JavaScript code -->
<script>
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
    var elements = stripe.elements();
    var style = {
        base: {
            fontSize: '20px',
            color: '#32325d',
            fontFamily:
                '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif',
            '::placeholder': {
                color: '#aab7c4',
            },
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a',
        },
    };
    var cardElement = elements.create('card', { style: style });
    cardElement.mount('#card-element');

    document.getElementById('pay-btn').addEventListener('click', function(ev) {
        document.getElementById('pay-btn').disabled = true;
        stripe.createToken(cardElement, {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value
        }).then(function(result) {
            if (result.error) {
                document.getElementById('pay-btn').disabled = false;
                alert(result.error.message);
            } else {
                document.getElementById('stripe-token-id').value = result.token.id;
                document.getElementById('checkout-form').submit();
            }
        });
    });
</script>
<script>
    function showFile(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function() {
            var dataURL = reader.result;
            var output = document.getElementById('file-preview');
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('donation-form').addEventListener('submit', function(e) {
            e.preventDefault();

            var imageInput = document.getElementById('images');
            if (imageInput.files.length === 0) {
                alert('Please upload an image of your donation');
                return;
            }

            var formData = new FormData(this);

            fetch(this.action, {
                method: this.method,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Success: ' + data.message);
                    // Reset the form
                    document.getElementById('donation-form').reset();
                    // Clear the image preview
                    document.getElementById('file-preview').src = '';
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error with your input email or your network. Please try your request again!');
            });
        });
    });
</script>
    <script>
        document.querySelectorAll('.favorite-btn').forEach(button => {
            button.addEventListener('click', function() {
                const blogId = this.dataset.blogId;
                const formData = new FormData();
                formData.append('blog_id', blogId);
                formData.append('_token', '{{ csrf_token() }}');

                fetch('{{ route("favorite.add") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        const heartIcon = this.querySelector('i');
                        const likesCount = this.querySelector('.likes-count');
                        // Toggle the heart icon class and likes count
                        if (heartIcon.classList.contains('fa-regular')) {
                            heartIcon.classList.remove('fa-regular', 'text-gray-500');
                            heartIcon.classList.add('fa-solid', 'text-red-500');
                        } else {
                            heartIcon.classList.remove('fa-solid', 'text-red-500');
                            heartIcon.classList.add('fa-regular', 'text-gray-500');
                        }
                        likesCount.textContent = ` ${data.likes}`;
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    </script>