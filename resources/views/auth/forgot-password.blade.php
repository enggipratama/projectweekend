<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center p-10 sm:pt-0">
        <div class="card lg:card-side shadow-xl bg-base">
            <div class="card-body bg-textbase rounded-xl">
                <h1 class="text-2xl font-bold text-base">Reset your password</h1>
                <div class="card-body flex flex-col sm:justify-center items-center">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-32 h-32 lg:w-64 lg:h-64 ">
                </div>
                <div class="divider">
                    <h1 class="text-sm font-bold text-base">Already registered?</h1>
                    <a class="text-sm font-bold text-base underline" href="{{ route('login') }}">Login</a>
                </div>
            </div>
            <div class="card-body justify-center w-96">
                <h1 class="text-sm font-bold text-textbase mb-4" style="word-wrap: break-word;">
                    Forgot your password? No problem. Just let us know your email address and we will email you a
                    password reset link that will allow you to choose a new one.
                </h1>


                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-start mt-4">
                        <x-primary-button>
                            {{ __('Reset Password') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
