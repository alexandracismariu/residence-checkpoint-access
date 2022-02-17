<x-app-layout>
    <x-slot name="header">
        @include('partials.header', [
            'title' => 'Edit user',
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
            action="{{ route('users.update', $user) }}"
            method="POST"
            autocomplete="off"
        >
            @csrf
            @method('PUT')

            <div class="space-y-4">
                <!-- User name -->
                <div class="space-y-1">
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="w-full block"
                        type="text"
                        name="name"
                        :value="old('name', $user->name)" required autofocus
                    />
                </div>

                <!-- Email Address -->
                <div class="space-y-1">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="w-full block"
                        type="email"
                        name="email"
                        :value="old('email', $user->email)" required autofocus
                    />
                </div>

                <div class="flex justify-end">
                    <x-button>
                        {{ __('Edit') }}
                    </x-button>
                </div>
            </div>

         </form>
    </x-auth-card>

</x-app-layout>
