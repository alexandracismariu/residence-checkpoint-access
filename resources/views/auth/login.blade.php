<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="flex items-center my-4 text-lg font-bold">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                <p>Residence checkpoint acces</p>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="space-y-4">
                <!-- Email Address -->
                <div class="space-y-1">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="w-full block"
                        type="email"
                        name="email"
                        :value="old('email')" required autofocus
                    />
                </div>

                <!-- Password -->
                <div class="space-y-1">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="w-full block"
                        type="password"
                        name="password"
                        required autocomplete="current-password"
                    />
                </div>

                <!-- Remember Me -->
                <div class="block">
                    <label for="remember_me" class="inline-flex items-center space-x-2">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end space-x-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button>
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
