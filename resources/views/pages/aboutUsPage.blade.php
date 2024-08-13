<x-app-layout>
    <section class="">
        {{-- Banner --}}
        <div class="bg-[#F9F6E5] pt-10 pb-10 lg:py-20 text-center">
            <div class="flex justify-center items-center gap-5">
                <h1 class="text-xl lg:text-3xl font-bold border-r-2 border-gray-900 px-5">About Us</h1>
                <a href="/">
                    <h2 class="text-md lg:text-xl">Home</h2>
                </a>
            </div>
            <p class="mt-5">Help Improve Animal Welfare in Cambodia!</p>
        </div>

        {{-- body --}}
        {{-- Pets Rescue --}}
        <div class="w-full py-4 sm:py-10 mt-5 sm:mt-0">
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
        </div>

        {{-- mission --}}
        <div class="max-w-screen-2xl mx-auto lg:mt-20">
            <div class="grid sm:grid-cols-3 gap-4 sm:px-5 px-5">
                <div class="bg-gray-100">
                    <img src="{{asset('image/mission-item1.png')}}" alt="" class="rounded-xl w-0 sm:w-full sm:h-full object-cover">
                </div>
                <div class="sm:col-span-2 sm:place-self-end">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-4 lg:px-5">
                        <div class="sm:col-span-2">
                            <h1 class="text-lg lg:text-3xl font-bold text-center">Our mission is to provide a lifeline for these vulnerable animals, offering them a second chance at happiness.</h1>
                        </div>
                        <div class="bg-gray-100 p-4 sm:p-4 lg:p-10 rounded-xl hover:bg-[#F9F6E5]">
                            <h1 class="text-md font-medium">Rescue and Shelter</h1>
                            <p class="mt-4 text-gray-500 text-sm">We strive to rescue cats and dogs from situations of neglect, abuse, or abandonment, providing them with a safe and nurturing environment in our shelters.</p>
                        </div>
                        <div class="bg-gray-100 p-4 sm:p-4 lg:p-10 rounded-xl hover:bg-[#F9F6E5]">
                            <h1 class="text-md font-medium">Compassionate Care</h1>
                            <p class="mt-4 text-gray-500 text-sm">Our commitment is to provide comprehensive care for every animal, encompassing veterinary treatment, nutritious food, enrichment activities, and love and attention.</p>
                        </div>
                        <div class="bg-gray-100 p-4 sm:p-4 lg:p-10 rounded-xl hover:bg-[#F9F6E5]">
                            <h1 class="text-md font-medium">Community Education and Outreach</h1>
                            <p class="mt-4 text-gray-500 text-sm">Education is crucial in preventing animal homelessness and neglect. Community outreach programs, workshops, and resources raise awareness about responsible pet ownership, spaying/neutering, and adoption value.</p>
                        </div>
                        <div class="bg-gray-100 p-4 sm:p-4 lg:p-10 rounded-xl hover:bg-[#F9F6E5]">
                            <h1 class="text-md font-medium">Adoption and Rehoming</h1>
                            <p class="mt-4 text-gray-500 text-sm">Our adoption process is thorough and compassionate, prioritizing the welfare of each animal and ensuring a well-suited match between pet and owner.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQs --}}
        <div class="max-w-screen-2xl mx-auto mt-5 lg:mt-20 px-5">
            <div class="grid lg:grid-cols-2 p-5 lg:p-20 bg-[#F9F6E5] rounded-2xl lg:rounded-tl-[100px] lg:rounded-br-[100px]">
                <div class="flex flex-col justify-center">
                    <a href="#" class="text-sm text-blue-900 font-bold">FAQs</a>
                    <h1 class="text-md lg:text-3xl font-semibold py-5">Frequently Asked Question</h1>
                    <p class="text-sm">Explore our frequently asked question to find the information you need.</p>
                </div>

                {{-- answer and question --}}
                <div class="mt-4">
                    <div id="faq-collapse" data-accordion="collapse" class="text-sm">
                        <h2 id="faq-collapse-heading-1">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-900 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#faq-collapse-body-1" aria-expanded="true" aria-controls="faq-collapse-body-1">
                                <span>What is Pets Rescue and what do you do?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="faq-collapse-body-1" class="hidden" aria-labelledby="faq-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-900 dark:text-gray-400">Pets Rescue is a platform dedicated to rescuing and assisting abandoned or homeless cats and dogs in Cambodia. We provide shelter, food, and veterinary care to these animals with the ultimate goal of finding them loving forever homes.</p>
                            </div>
                        </div>

                        <h2 id="faq-collapse-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#faq-collapse-body-2" aria-expanded="false" aria-controls="faq-collapse-body-2">
                                <span>Do you accept donations?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="faq-collapse-body-2" class="hidden" aria-labelledby="faq-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Yes, we greatly appreciate donations from generous individuals and organizations. Donations help us cover the costs of food, shelter, veterinary care, and other essential supplies for our animals. You can donate online through our website or contact us to inquire about other donation options.
                                </p>
                            </div>
                        </div>

                        <h2 id="faq-collapse-heading-3">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#faq-collapse-body-3" aria-expanded="false" aria-controls="faq-collapse-body-3">
                                <span>How can I adopt a pet from Pets Rescue?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="faq-collapse-body-3" class="hidden" aria-labelledby="faq-collapse-heading-3">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">If you're interested in adopting a pet from Pets Rescue, you can browse our available animals on our website or visit our shelter in person. Once you've found a pet you're interested in, you can fill out an adoption application form. Our team will review your application and arrange a meet-and-greet with the pet. If everything goes well, we'll finalize the adoption process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Team work --}}
        <div class="max-w-screen-2xl mx-auto mt-5 lg:my-20 px-5">
            <div class="grid lg:grid-cols-2">
                <div>
                    <h1 class="text-md lg:text-3xl font-bold text-center">This Website</h1>
                    <ul class="mt-2 lg:mt-10">
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            07/09/2023: Start UI
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            07/09/2023: Start Create This Website
                        </li>
                    </ul>
                </div>

                {{-- team member --}}
                <div class="mt-5">
                    <h1 class="text-md lg:text-3xl font-bold text-center">Our Team</h1>
                    <div class="grid gap-4 lg:gap-16 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 mt-2 lg:mt-10">
                        <div class="text-center py-10 text-gray-500 dark:text-gray-400 bg-gray-100 rounded-xl">
                            <img class="mx-auto mb-4 w-52 h-52 rounded-full" src="{{asset('image/pean-sovann.png')}}" alt="Pean Sovann">
                            <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <a href="#">Sovann PEAN</a>
                            </h3>
                            <p>Front-End Developer<br>and UX/UI</p>
                            <ul class="flex justify-center mt-4 space-x-4">
                                <li>
                                    <a href="https://www.facebook.com/sovann.pean.fe" target="_blank" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                                        <i class="fa-brands fa-facebook text-2xl"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://t.me/Sovann_T" target="_blank" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                                        <i class="fa-brands fa-telegram text-2xl"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/sovann-pean-0a2a04266/" target="_blank" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                        <i class="fa-brands fa-linkedin text-2xl"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center py-10 text-gray-500 dark:text-gray-400 bg-gray-100 rounded-xl">
                            <img class="mx-auto mb-4 w-52 h-52 rounded-full object-cover" src="{{asset('image/dalin.jpg')}}" alt="Bonnie Avatar">
                            <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <a href="#">Dalin RA</a>
                            </h3>
                            <p>Back-End and <br> Project Management</p>
                            <ul class="flex justify-center mt-4 space-x-4">
                                <li>
                                    <a href="https://www.facebook.com/measvutha.radalin.7" target="_blank" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                                        <i class="fa-brands fa-facebook text-2xl"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://t.me/ah_p0r" target="_blank" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                                        <i class="fa-brands fa-telegram text-2xl"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/ra-dalin-a86a4128a/" target="_blank" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                        <i class="fa-brands fa-linkedin text-2xl"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>