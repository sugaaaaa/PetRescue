<x-guest-layout>
    <div class="container max-w-screen-2xl mx-auto drop-shadow-2xl bg-[#F9F6E5] mt-10 rounded-[50px]">
        <div class="grid grid-cols-2">
            <div class="place-self-center">
                <img src="{{asset('image/loginimage.png')}}" alt="" class="w-full">
                <h1 class="text-2xl font-semibold text-center">Adopt love, adopt joy</h1>
                <p class="text-center">Give a pets a forever home today!</p>
            </div>

            {{-- form --}}
            <div class="bg-white p-20 rounded-[50px]">
                <div class="flex justify-center mb-10">
                    <img src="{{asset('image/logo.jpg')}}" alt="" class="w-32 rounded-lg">
                </div>
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
            
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
            
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
            
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full py-2 px-4" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
