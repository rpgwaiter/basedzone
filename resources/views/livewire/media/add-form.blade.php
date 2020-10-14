<form wire:submit.prevent="submit" class="flex-1 max-w-lg my-3 mx-auto" method="post" action="{{ route('media.store') }}" enctype="multipart/form-data">
@csrf

    <div class="flex flex-wrap mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input wire:model="name" id="name" type="text" name="name" placeholder="WarGames" required autofocus />
        </div>

        <div class="w-full md:w-1/3 px-3">
            <livewire:media.omdb-lookup />
        </div>
    </div>

    <div class="flex flex-wrap mb-2">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <x-jet-label for="year" value="{{ __('Year') }}" />
            <x-jet-input wire:model="year" id="year" type="number" name="year" placeholder="1983" required />
        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <x-jet-label for="media_type" value="{{ __('Media Type') }}" />
            <div class="relative">
                <select wire:model="media_type" name="media_type" class="shadow-lg block appearance-none w-full bg-gray-800 border border-gray-200 text-gray-300 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500">
                    <option value="anime_movie">Anime Movie</option>
                    <option value="anime_ova">Anime OVA</option>
                    <option value="anime_series">Anime Series</option>
                    <option value="movie">Movie</option>
                    <option value="tv_series">TV Series</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-200">
                    <livewire:svg.down-arrow />
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <x-jet-label for="cover_art" value="{{ __('Cover Art') }}" />
            <input wire:model="cover_art" type="file" name="cover_art">
        </div>
        <x-jet-button class="m-auto mt-2">
            {{ __('Add Media!') }}
        </x-jet-button>
    </div>
</form>
