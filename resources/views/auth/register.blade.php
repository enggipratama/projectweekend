<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center p-6 sm:pt-0">
        <div class="card lg:card-side shadow-xl bg-base">
            <div class="card-body bg-textbase rounded-xl">
                <h1 class="text-2xl font-bold text-base">Welcome!</h1>
                <div class="card-body flex flex-col sm:justify-center items-center">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-32 h-32 lg:w-64 lg:h-64 ">
                </div>
                <div class="divider">
                    <h1 class="text-sm font-bold text-base">Already registered?</h1>
                    <a class="text-sm font-bold text-base underline" href="{{ route('login') }}">Login</a>
                </div>
            </div>
            <div class="card-body justify-center">
                <form method="POST" action="{{ route('register') }}">
                    <div class="divider">
                        <h1 class="text-2xl font-bold text-textbase mb-4">Register</h1>
                    </div>
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Phone -->
                    <div class="mt-4">
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone"
                            :value="old('phone')" required autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 flex lg:flex-row gap-2">
                        <div class="text-left">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <!-- Confirm Password -->
                        <div class="text-left">
                            <x-input-label for="password_confirmation" :value="__('Confirm Pass')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>


                    <div class="flex flex-col lg:flex-row gap-2 mt-4 items-center justify-center">
                        <x-primary-button class="">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
