<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="min-h-screen flex flex-col sm:justify-center items-center p-6 sm:pt-0">
        <div class="card lg:card-side shadow-xl bg-base">
            <div class="card-body bg-textbase rounded-xl">
                <h1 class="text-2xl font-bold text-base">Welcome!</h1>
                <div class="card-body flex flex-col sm:justify-center items-center">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-32 h-32 lg:w-64 lg:h-64 ">
                </div>
                <div class="divider">
                    <h1 class="text-sm font-bold text-base">Not a member yet?</h1>
                    <a class="text-sm font-bold text-base underline" href="{{ route('register') }}">Register Now</a>
                </div>
            </div>
            <div class="card-body justify-center w-96">
                <form method="POST" action="{{ route('login') }}">
                    <div class="divider">
                        <h1 class="text-2xl font-bold text-textbase mb-4">Log in.</h1>
                    </div>
                    @csrf
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>


                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-textbase shadow-sm focus:ring-textbase dark:focus:ring-textbase dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-textbase dark:text-textbase">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="flex justify-center mt-4">
                        <x-primary-button class="">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-textbase hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
