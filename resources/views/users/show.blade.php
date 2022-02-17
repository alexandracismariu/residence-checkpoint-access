<x-app-layout>
    <x-slot name="header">
        @include('partials.header', [
            'title' => 'User details',
            'route' => 'users.create'
        ])
    </x-slot>

    <div class="max-w-4xl mx-auto space-y-6 p-6 bg-gray-50 hover:bg-white rounded-md shadow-md">
        <div class="flex items-center space-x-2">
            <svg class="w-6 h-6 text-red-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>

            <p>{{ $user->name }}</p>
        </div>

        <div class="flex items-center space-x-2">
            <svg class="w-6 h-6 text-red-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>

            <p>{{ $user->email }}</p>
        </div>

        <div class="flex justify-between">
            <div class="flex items-center space-x-2">
                <svg class="w-6 h-6 text-red-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path></svg>

                <div>
                    @forelse ($user->cars as $car)
                        {{ $car->number }}
                    @empty
                        <div class="text-lg text-gray-500 italic">
                            No cars number
                        </div>
                    @endforelse
                </div>

                <a href="#"
                    class="self-center text-gray-500 hover:text-green-600 transform hover:scale-150"
                >
                <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>

        <div class="flex justify-end space-x-10 px-6">
            <a href="{{ route('users.edit', $user) }}"
                class="flex justify-end items-center focus:outline-none space-x-2 text-gray-500
                hover:text-blue-600 transform hover:scale-110"
            >
                <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>

                <span>Edit account</span>
            </a>

            <form action="{{ route('users.destroy', $user) }}" method="POST">
                @csrf
                @method('delete')

                <button
                    type="submit"
                    class="flex justify-end items-center focus:outline-none space-x-2 text-gray-500
                        hover:text-red-500 transform hover:scale-110"
                >
                    <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>

                    <span>Delete account</span>
                </button>
            </form>
        </div>

        <!-- Add Car number -->

    </div>
</x-app-layout>
