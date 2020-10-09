<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Add Media') }}
        </h2>
    </x-slot>

    <div class="container flex flex-col items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container w-1/2">
            <livewire:welcome-banner />
        </div>

        <div class="container w-1/2 justify-center mt-8 bg-teal-500 dark:bg-gray-800 shadow sm:rounded-lg">
            <livewire:media.add-form />
        </div>

    </div>

</x-app-layout>
