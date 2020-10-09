<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Add Media') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @include('includes.welcome-banner')

        <div class="container flex justify-center m-auto mt-8 bg-teal-500 dark:bg-gray-800 shadow sm:rounded-lg">
            @include('media.create-form.php')

            <x-jet-form-section />
        </div>
    </div>

</x-app-layout>
