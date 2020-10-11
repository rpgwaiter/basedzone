<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <livewire:welcome-banner />

        <div class="container m-auto mt-8 bg-teal-500 dark:bg-gray-800 shadow sm:rounded-lg">
            <h1 class="text-4xl text-center">Latest Movies</h1>
            <div class="flex mx-auto">
                <a href="{{route('media.create') }}" class="justify-center mx-auto my-1 bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Add your own!</a>
            </div>
            <div class="flex border-solid border-4 border-pink-600">
                <livewire:dash.latest-movies :movies="$movies" />
            </div>
        </div>
    </div>
</x-app-layout>
