<x-app-layout>
    <x-slot name="header">
        @include('partials.header', [
            'title' => 'Create user',
            'route' => 'users.create'
        ])
    </x-slot>

    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

         <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form
            action="{{ route('users.store') }}"
            method="POST"
            autocomplete="off"
        >
            @csrf

            <div class="space-y-4">
                <!-- User name -->
                <div class="space-y-1">
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="w-full block"
                        type="text"
                        name="name"
                        :value="old('name')" required autofocus
                    />
                </div>

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

                <!-- Confirm Password -->
                <div class="space-y-1">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="w-full block"
                        type="password"
                        name="password_confirmation" required
                    />
                </div>

                <div class="flex justify-end">
                    <x-button>
                        {{ __('Create') }}
                    </x-button>
                </div>
            </div>

         </form>
    </x-auth-card>

</x-app-layout>
