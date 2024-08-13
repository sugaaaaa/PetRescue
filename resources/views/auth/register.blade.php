<x-guest-layout>
    <section class="container max-w-screen-2xl mx-auto drop-shadow-2xl sm:bg-[#F9F6E5] mt-10 rounded-xl lg:rounded-[50px]">
        <div class="grid sm:grid-cols-2">
            <div class="place-self-center">
                <img src="{{asset('image/loginimage.png')}}" alt="" class="w-0 sm:w-full">
                <h1 class="text-2xl font-semibold text-center">Adopt love, adopt joy</h1>
                <p class="text-center">Give a pets a forever home today!</p>
            </div>

            {{-- form register --}}
            <div class="bg-white p-5 lg:py-20 lg:px-20 rounded-xl lg:rounded-[50px] mt-5 sm:mt-0">
                <form method="POST" action="{{ route('register') }}">
                    <h1 class="text-xl sm:text-4xl mb-4 sm:mb-10 font-semibold">Register</h1>
                    @csrf
            
                    <!-- Name -->
                    <div>
                        <div class="flex justify-between items-center">
                            <x-input-label for="name" :value="__('Name')" />
                            <h1 class="text-sm"> Already have an account?
                                <a class="text-sm text-blue-500 underline hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            </h1>
                        </div>
                        <x-text-input id="name" class="block mt-1 w-full px-5 py-2.5" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
            
                    <!-- Email Address -->
                    <div class="mt-4 sm:mt-10">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full px-5 py-2.5" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
            
                    <!-- Password -->
                    <div class="mt-4 sm:mt-10">
                        <x-input-label for="password" :value="__('Password')" />
            
                        <x-text-input id="password" class="block mt-1 w-full px-5 py-2.5"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" placeholder="Password"/>
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
            
                    <!-- Confirm Password -->
                    <div class="mt-4 sm:mt-10">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            
                        <x-text-input id="password_confirmation" class="block mt-1 w-full px-5 py-2.5"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" placeholder="Cnfirm password"/>
            
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    {{-- checkbox --}}
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">I agree to the <a href="#" class="text-blue-500 underline">terms of service</a> and <a href="#" class="text-blue-500 underline">privacy policy</a></span>
                        </label>
                    </div>
                    
                    {{-- Button register --}}
                    <div class="mt-4 sm:mt-10">
                        <x-primary-button class="w-full text-center">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>

                    {{-- Register with socail medea --}}
                    <div class="mb-5 flex justify-between items-center">
                        <hr class="sm:w-[35%] w-[25%]">
                        <p class="text-sm">Or Sign Up with</p>
                        <hr class="sm:w-[35%] w-[25%]">
                    </div>
                    <div class="grid lg:grid-cols-3 gap-2 place-content-center">
                        <a href="#" class="w-full">
                            <div class="items-center justify-center gap-3 flex border rounded-md lg:w-[150px] h-[50px] hover:bg-[#F9F6E5]">
                                <i class="fa-brands fa-google text-2xl"></i>
                                <label for="google" class="font-semibold">Google</label>
                            </div>
                        </a>
                        <a href="#" class="w-full">
                            <div class="items-center justify-center gap-3 flex border rounded-md lg:w-[150px] h-[50px] hover:bg-[#F9F6E5]">
                                <i class="fa-brands fa-facebook text-2xl"></i>
                                <label for="google" class="font-semibold">Facebook</label>
                            </div>
                        </a>
                        <a href="#" class="w-full">
                            <div class="items-center justify-center gap-3 flex border rounded-md lg:w-[150px] h-[50px] hover:bg-[#F9F6E5]">
                                <i class="fa-brands fa-apple text-2xl"></i>
                                <label for="google" class="font-semibold">Apple Id</label>
                            </div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>