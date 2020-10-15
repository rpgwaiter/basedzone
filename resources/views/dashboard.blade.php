<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <livewire:welcome-banner />

        <div class="container justify-center mt-8 bg-teal-500 dark:bg-gray-800 shadow sm:rounded-lg">
            <h1 class="content-start text-4xl text-center">Latest Movies</h1>
            <div class="mx-auto w-1/5">
                <livewire:media.add-movie />
            </div>

            <div class="flex border-solid border-4 border-pink-600">
                <livewire:dash.latest-movies />
            </div>
        </div>
    </div>
</x-app-layout>
