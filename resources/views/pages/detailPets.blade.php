<x-app-layout>
    <section class="mt-10">
        <div class="max-w-screen-xl mx-auto">
            <div class="grid sm:grid-cols-2 gap-5 px-5">
                <div class="">
                    <img  src="{{ asset('/images/' . $petdetail->images) }}" alt="Pet Image" class="w-full h-[600px] rounded-2xl object-cover">
                </div>
                <div class="sm:p-10">
                    <ul>
                        <li class="mt-5"><strong>Name: </strong>{{ $petdetail->name }}</li>
                        <li class="mt-5"><strong>Age: </strong>{{ $petdetail->age }}</li>
                        <li class="mt-5"><strong>Sex: </strong>{{ $petdetail->sex }}</li>
                        <li class="mt-5"><strong>Vaccine: </strong>{{ $petdetail->vaccine }}</li>
                        <li class="mt-5">
                           <div class="flex">
                                <div>
                                @if($adoption)
                                    @if($adoption->status == 'approved')
                                        <div class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-2 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg px-4 py-1 sm:px-5 sm:py-1.5 text-center inline-flex items-center me-2 mb-2">
                                            Pet has been adopted
                                        </div>
                                    @elseif($adoption->status == 'pending')
                                        <div class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-2 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg px-4 py-1 sm:px-5 sm:py-1.5 text-center inline-flex items-center me-2 mb-2">
                                            Pending Adoption - Waiting for Adopter
                                        </div>
                                    @elseif($adoption->status == 'rejected')
                                        <div class="flex justify-center">
                                            <button type="button" id="defaultModalButton" data-modal-target="defaultModal1" data-modal-toggle="defaultModal1" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-2 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg px-4 py-1 sm:px-5 sm:py-1.5 text-center inline-flex items-center me-2 mb-2">
                                                Adopt
                                            </button>
                                        </div>
                                    @endif
                                @else
                                    <div class="flex justify-center">
                                        @if (auth()->check())
                                            <button type="button" id="defaultModalButton" data-modal-target="adoptionModal" data-modal-toggle="adoptionModal" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-2 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg px-4 py-1 sm:px-5 sm:py-1.5 text-center inline-flex items-center me-2 mb-2">
                                                Adopt
                                            </button>
                                        @else
                                            <a href="{{ route('login') }}" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-2 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg px-4 py-1 sm:px-5 sm:py-1.5 text-center inline-flex items-center me-2 mb-2">
                                                Adopt
                                            </a>
                                        @endif
                                    </div>
                                @endif
                                </div>
                                @if (auth()->check())
                                    <!-- Main modal -->
                                    <div id="adoptionModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-5 w-full max-w-screen-xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <!-- Modal header -->
                                                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                        ADOPT A RESCUE CAT/DOG
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="adoptionModal">
                                                        <i class="fa-solid fa-xmark"></i>                                                        
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <h1 class="font-bold text-rose-600 text-center mt-4">Please read the privacy policy before proceeding to the adoption questionnaire!!</h1>
                                                <br>
                                                <p>Adopting is a great way to give a dog or cat a second chance by providing a loving fur-ever home. All animals in our center come with a fully disclosed medical history, and are ready to join your family. They are vaccinated, microchipped, spayed/neutered, and have had preventative parasite treatments.</p>
                                                <h1 class="font-bold text-center mt-4">Love pets but cannot commit forever?</h1>
                                                <p> If you would like to care for an animal but you’re not in a position to adopt one, then fostering is ideal for you! By opening your home to foster an animal, you will make space at our center for other animals that need us. Some animals need a foster home for just a few weeks, some are looking for a more permanent solution (up to a year).</p>
                                                <h1 class="font-bold text-center mt-4">Are you unsure about which animal to adopt? Read up here on our “foster-to-adopt” options.</h1>
                                                <p>We often have more animals available than listed on our website, so don’t worry if you don’t immediately find a match here. When you visit our shelter, our staff will introduce you to the animals and you will have time to get to know them. We will also ask you to join an adoption interview during which you ask any questions you may have.</p>
                                                <p class="mb-5">To find the perfect animal for you, please complete this questionnaire, and our Adoption & Foster Coordinator will get back to you shortly!</p>
                                                <a href="{{ route('adoption.create', ['pet' => $petdetail->id]) }}" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Proceed to Questionnaire</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div>
                                    <button id="donateButton" data-modal-target="donationModal" data-modal-toggle="donationModal" class="text-gray-900 hover:text-white border border-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-2 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg px-4 py-1 sm:px-5 sm:py-1.5 text-center me-2 mb-2">
                                        Donate
                                    </button>
                                    
                                    <div id="donationModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4">
                                                
                                                {{-- Donation form --}}
                                                <div class="lg:w-[700px] rounded-lg sm:rounded-3xl bg-white p-5 mt-5 sm:p-10 lg:px-10 lg:py-10 shadow-[1px_0px_25px_0px_#cbcbcb]">
                                                    <div class="text-end">
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl p-1.5 ml-auto inline-flex items-center" 
                                                            data-modal-toggle="donationModal">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </div>

                                                    <form id="donation-form" action="{{ route('donate.store') }}" method="POST" enctype="multipart/form-data">
                                                        <div>
                                                            <h1 class="text-4xl font-bold text-[#F4C38F] text-center pb-5">Make a Donation!</h1>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="flex gap-5 ">
                        <h1 class="text-xl">Share to your:</h1>
                        {!! $shareComponent !!}
                    </div>
                    <hr class="h-px my-4 sm:my-8 bg-gray-200 border-0 dark:bg-gray-700">
                    <div>
                        <p>{{ $petdetail->content }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Adoption 3-3-3 Rule --}}
        <div class="max-w-screen-xl mx-auto sm:mt-20 mt-5">
            <h1 class="text-2xl sm:text-3xl font-bold text-center">Adoption 3-3-3 Rule</h1>
            <div class="grid sm:grid-cols-3 mt-5 sm:mt-10 gap-5 px-5">
                {{-- 3 days --}}
                <div style="background-image: url({{ url('image/cat-item-1.jpeg') }})" class="h-[500px] flex flex-col items-center py-20 text-white w-full bg-center bg-no-repeat bg-gray-600 bg-blend-multiply rounded-2xl">
                    <h1 class="text-3xl font-semibold text-center">3 Days</h1>
                    <ul class="list-decimal text-xl">
                        <li class="mt-4">Feeling overwhelmed</li>
                        <li class="mt-4">Unsettled & uncomfortable</li>
                        <li class="mt-4">May want to hide</li>
                        <li class="mt-4">May not eat or drink much</li>
                    </ul>
                </div>
                {{-- 3 weeks --}}
                <div style="background-image: url({{ url('image/cat-item-1.jpeg') }})" class="h-[500px] flex flex-col items-center py-20 text-white w-full bg-center bg-no-repeat bg-gray-600 bg-blend-multiply rounded-2xl">
                    <h1 class="text-3xl font-semibold text-center">3 Weeks</h1>
                    <ul class="list-decimal text-xl">
                        <li class="mt-4">Starting to settle in</li>
                        <li class="mt-4">Feeling more comfortable</li>
                        <li class="mt-4">Learning home environment & routine</li>
                        <li class="mt-4">Letting guard down</li>
                    </ul>
                </div>

                {{-- 3 months --}}
                <div style="background-image: url({{ url('image/cat-item-1.jpeg') }})" class="h-[500px] flex flex-col items-center py-20 text-white w-full bg-center bg-no-repeat bg-gray-600 bg-blend-multiply rounded-2xl">
                    <h1 class="text-3xl font-semibold text-center">3 Months</h1>
                    <ul class="list-decimal text-xl">
                        <li class="mt-4">Finally completely comfortable</li>
                        <li class="mt-4">Built trust and bond</li>
                        <li class="mt-4">Gained sense of security and family</li>
                        <li class="mt-4">Set in routine</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- About Pet --}}
        <div class="max-w-screen-xl mx-auto mt-5 sm:mt-20 px-5">
            <h1 class="text-xl sm:text-3xl font-bold">About Mufasa(Name)</h1>
            <p class="mt-3 text-sm sm:text-lg">
                This handsome boy has a heart as big as his paws!
                He's a real sweetheart who can't resist a cozy cuddle and will jump at the chance to play fetch with you. He's the kind of dog who knows how to enjoy life to the fullest whatever that might look like with his new family.
            </p>
            <div class="mt-2 sm:mt-10">
                <iframe class="w-[360px] h-[215px] sm:w-[805px] sm:h-[500px] lg:w-[1024px] rounded-lg" src="https://www.youtube.com/embed/o8-a2XiZdG4?si=1MFIwnv3muwPCuXO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <p class="mt-2 sm:mt-10 text-sm sm:text-lg">
                In Mufasa's dream home, he'd be the only dog, enjoying the spotlight all to himself. You see, he lived in a home with two other dogs previously, but now we think he deserves pure, undivided attention because he truly deserves to be someone's one and only apple of the eye.🍎 No more sharing his beloved ball!
            </p>
            <p class="mt-2 sm:mt-5 text-sm sm:text-lg"> 
                Mufasa is a strong and sturdy fellow, so he's looking for a guardian with experience in handling large dogs who will teach him. He's already a pro at the "sit" command and is house-trained but he's ready to learn more and will thrive with some ongoing training so he can become the goodest boy for his new family.
            </p>
        </div>

        {{-- Our friends who are looking for a home --}}
        <section class="mt-5 sm:mt-10">
            <h1 class="text-lg sm:text-3xl text-center font-bold">You may Like</h1>

            {{-- for card --}}
            <div class="max-w-screen-2xl mx-auto grid sm:grid-cols-2 lg:grid-cols-4 gap-2 sm:gap-4 mt-4 sm:mt-10 px-4 sm:px-5">
                {{-- loop here --}}
                <div class="bg-[#F9F6E5] rounded-2xl max-w-sm">
                    <a href="#">
                        <img class="rounded-t-[1rem] rounded-b-[50%] w-full h-[400px] object-cover" src="{{asset('image/cat-item-1.jpeg')}}" alt=""/>
                    </a>
                    <div class="pt-5 pb-10 grid justify-items-center">
                        <a href="#" >
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> July </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">2 Year, American curl</p>
                        <a href="#" class="border border-[#F4C38F] px-5 py-1.5 rounded-full text-sm text-gray-500">Read more</a>
                    </div>
                </div>
            </div>

        </section>
    </section>
    <script>
        $(document).ready(function() {
            $('#adoptButton').click(function() {
                $.ajax({
                    url: '{{ route("login") }}',
                    type: 'GET',
                    success: function(response) {
                        if (response.success) {
                            alert('You can now proceed to adopt!');
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
        const modalButton = document.getElementById('defaultModalButton');
        const modal = document.getElementById('defaultModal');
        const closeButton = modal.querySelector('[data-modal-toggle]');

        modalButton.addEventListener('click', function () {
            modal.classList.remove('hidden');
        });

        closeButton.addEventListener('click', function () {
            modal.classList.add('hidden');
        });
    });
    </script>
</x-app-layout>