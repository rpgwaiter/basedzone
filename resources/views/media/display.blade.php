<?php
$media = App\Models\Media::find($id);
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl m-auto sm:px-6 lg:px-8">
        <livewire:welcome-banner />
        <div class="justify-center mt-8 bg-teal-500 dark:bg-gray-800 shadow-lg sm:rounded-lg">
            @if($media)
            <livewire:media.display-full :media="$media"/>
            @else
            <h1 class="content-start text-4xl text-center">😿 No media found 😿</h1>
            @endif

        </div>
    </div>
</x-app-layout>
