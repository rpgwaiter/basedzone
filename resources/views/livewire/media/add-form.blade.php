<form class="flex-1 max-w-lg my-3 mx-auto" method="POST" enctype="multipart/form-data" action="{{ route('media.store') }}">
@csrf

    <div class="flex flex-wrap mb-6">
        <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" name="name" placeholder="WarGames" required autofocus />
        </div>

        <div class="w-full md:w-1/3 px-3">
            <div class="w-full px-3">
                <x-jet-label for="imdb_id" value="{{ __('imdb id') }}" />
                <x-jet-input id="imdb_id" type="text" name="imdb_id" placeholder="tt0086567" />
                <p class="text-gray-800 text-xs italic">You can get this from the media's imdb url.</p>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <x-jet-label for="year" value="{{ __('Year') }}" />
            <x-jet-input id="year" type="number" name="year" placeholder="1983" required />
        </div>

        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <x-jet-label for="media_type" value="{{ __('Media Type') }}" />
            <div class="relative">
                <select name="media_type" class="shadow-lg block appearance-none w-full bg-gray-800 border border-gray-200 text-gray-300 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500">
                    <option>Anime Movie</option>
                    <option>Anime OVA</option>
                    <option>Anime Series</option>
                    <option>Movie</option>
                    <option>TV Series</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-200">
                    <livewire:svg.down-arrow />
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <x-jet-label for="cover_image" value="{{ __('Cover Image') }}" />
            <!--livewire:upload-photo /-->
            <input type="file" name="cover_image">
        </div>
        <x-jet-button class="m-auto mt-2">
            {{ __('Add Media!') }}
        </x-jet-button>
    </div>
</form>
