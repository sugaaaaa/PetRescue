<x-app-layout>
    <section>
        <div class="w-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.770586988398!2d104.88811507615046!3d11.568297144086483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109519fe4077d69%3A0x20138e822e434660!2sRoyal%20University%20of%20Phnom%20Penh!5e0!3m2!1sen!2skh!4v1711656488781!5m2!1sen!2skh" 
                class="w-full h-[200px] sm:h-[500px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>

            {{-- form --}}
            <div class="max-w-screen-2xl mx-auto grid sm:grid-cols-2 gap-10 relative sm:top-[-100px] mt-5 sm:mt-0 px-5 mb-10 sm:mb-0">
                <div class="bg-[#F4C38F] p-5 sm:p-20 rounded-3xl sm:rounded-tr-[100px]">
                    {{-- location --}}
                    <div> 
                        <div class="border-b border-[#CBA173] flex items-center gap-5">
                            <i class="fa-solid fa-location-dot sm:text-xl gap-5"></i>
                            <h1 class="text-sm">Our Store</h1>
                        </div>
                        <h4 class="sm:mt-5 mt-2 text-sm font-bold">Phnom Penh, Cambodia</h4>
                    </div>

                    {{-- time --}}
                    <div class="sm:mt-10 mt-5">
                        <div class="border-b border-[#CBA173] flex items-center gap-5">
                            <i class="fa-solid fa-clock sm:text-xl"></i>
                            <h1 class="text-sm">Hour of Operation</h1>
                        </div>
                        <h4 class="sm:mt-5 mt-2 text-sm font-bold">Monday - Saturday : 8 AM - 6 PM Sunday : Close</h4>
                    </div>

                    {{-- phone --}}
                    <div class="sm:mt-10 mt-5">
                        <div class="border-b border-[#CBA173] flex items-center gap-5">
                            <i class="fa-solid fa-phone sm:text-xl"></i>
                            <h1 class="text-sm">Phone</h1>
                        </div>
                        <h4 class="sm:mt-5 mt-2 text-sm font-bold">014 417 125 | 097 339 985</h4>
                    </div>

                    {{-- email --}}
                    <div class="sm:mt-10 mt-5">
                        <div class="border-b border-[#CBA173] flex items-center gap-5">
                            <i class="fa-solid fa-envelope sm:text-xl"></i>
                            <h1 class="text-sm">Email</h1>
                        </div>
                        <h4 class="sm:mt-5 mt-2 text-sm font-bold">example@gamil.com</h4>
                    </div>

                    {{-- Socail media --}}
                    <div class="sm:mt-10 mt-5">
                        <h1 class="text-xl sm:text-2xl">Follow us: </h1>
                        <div class="flex gap-4 sm:mt-5 mt-2">
                            <a href="#">
                                <i class="fa-brands fa-facebook text-xl sm:text-4xl hover:text-white"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram text-xl sm:text-4xl hover:text-white"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-telegram text-xl sm:text-4xl hover:text-white"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-tiktok text-xl sm:text-4xl hover:text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                 {{-- form to send message --}}
                 <div class="sm:mt-48">
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded relative" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <h1 class="text-2xl mb-2 font-bold">Leave us a Message</h1>
                        <hr class="w-full">

                        <div class="sm:flex gap-4 sm:mt-10 mt-5">
                            <div class="w-full">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="border w-full px-4 py-2 mt-2 rounded-lg" placeholder="Your name" required>
                            </div>
                            <div class="w-full mt-4 sm:mt-0">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="border w-full px-4 py-2 mt-2 rounded-lg" placeholder="example@gmail.com" required>
                            </div>
                        </div>

                        <div class="mt-5 sm:mt-10">
                            <label for="message">Your message</label>
                            <div class="mt-2">
                              <textarea id="message" name="message" rows="7" placeholder="Write your message here!" required class="block w-full rounded-lg border-0 py-2 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6"></textarea>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-10 relative">
                            <button type="submit" class="bg-[#2F4BC9] hover:bg-[#455ECD] text-white px-5 py-3 absolute right-0 rounded-lg">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>