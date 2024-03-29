<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="flex items-center my-4 text-lg font-bold">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                <p>Residence checkpoint acces</p>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="space-y-4">
                <!-- Name -->
                <div class="space-y-1">
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="w-full block" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="space-y-1">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="w-full block" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="space-y-1">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="w-full block"
                        type="password"
                        name="password"
                        required autocomplete="new-password"
                    />
                </div>

                <!-- Confirm Password -->
                <div class="space-y-1">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="w-full block"
                        type="password"
                        name="password_confirmation" required
                    />
                </div>

                <div class="flex items-center justify-end space-x-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button>
                        {{ __('Register') }}
                    </x-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
