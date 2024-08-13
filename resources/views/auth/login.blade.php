<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="container max-w-screen-2xl mx-auto drop-shadow-2xl sm:bg-[#F9F6E5] mt-10 rounded-lg lg:rounded-[50px]">
        <div class="grid sm:grid-cols-2">
            <div class="place-self-center">
                <img src="{{asset('image/loginimage.png')}}" alt="" class="w-0 sm:w-full">
                <h1 class="text-2xl font-semibold text-center">Adopt love, adopt joy</h1>
                <p class="text-center">Give a pets a forever home today!</p>
            </div>

            {{-- form --}}
            <div class="lg:p-20 bg-white lg:rounded-[50px] rounded-lg p-5 mt-5 sm:mt-0">
                <form method="POST" action="{{ route('login') }}">
                    <h1 class="text-xl sm:text-4xl mb-4 sm:mb-10 font-semibold">Login</h1>
                    @csrf
            
                    <!-- Email Address -->
                    <div>
                        <div class="flex justify-between">
                            <x-input-label for="email" :value="__('Email')" />
                            <h1 class="text-sm">Do not have an account?
                                <a class="text-sm underline text-blue-500 hover:text-gray-900" href="{{ route('register') }}">
                                    {{ __('registered') }}
                                </a>
                            </h1>
                        </div>
                        <x-text-input id="email" class="block mt-1 w-full px-5 py-2.5" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
            
                    <!-- Password -->
                    <div class="mt-4 sm:mt-10">
                        <x-input-label for="password" :value="__('Password')" />
            
                        <x-text-input id="password" class="block mt-1 w-full px-5 py-2.5"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" placeholder="Password"/>
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
            
                    
                    <div class="flex justify-between">
                        <!-- Remember Me -->
                        <div class="block mt-2 sm:mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        {{-- forgot password --}}
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-blue-500 underline hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    {{-- Submit --}}
                    <x-primary-button class="mt-4 sm:mt-10 w-full">
                        {{ __('Log in') }}
                    </x-primary-button>

                    {{-- Register with socail medea --}}
                    <div class="mb-5 flex justify-between items-center">
                        <hr class="sm:w-[35%] w-[25%]">
                        <p class="text-sm">Or Sign Up with</p>
                        <hr class="sm:w-[35%] w-[25%]">
                    </div>
                    <div class="grid lg:grid-cols-3 justify-items-center gap-2">
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