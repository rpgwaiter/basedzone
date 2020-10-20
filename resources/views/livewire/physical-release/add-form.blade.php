<form wire:submit.prevent="submit" class="flex-1 max-w-lg my-3 mx-auto" enctype="multipart/form-data">
    @csrf

    <div class="flex flex-wrap mb-6 mt-6">
        <div class="w-full px-3 mt-6 md:mb-0">
            <x-jet-label for="imdb_id" value="{{ __('IMDB ID of Media') }}" />
            <x-jet-input wire:model="imdb_id" id="imdb_id" type="text" name="name" placeholder="tt0086567" required autofocus />
        </div>

        <div class="w-full md:w-1/3 px-3">
            <p>
        </div>
    </div>

    <div class="flex flex-wrap mb-2">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <x-jet-label for="year" value="{{ __('Release Year') }}" />
            <x-jet-input wire:model="year" id="year" type="number" name="year" placeholder="1983" required />
        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <x-jet-label for="media_type" value="{{ __('Release Type') }}" />
            <div class="relative">
                <select wire:model="release_type" name="release_type" class="shadow-lg block appearance-none w-full bg-gray-800 border border-gray-200 text-gray-300 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500">
                    <option value="dvd">DVD</option>
                    <option value="vhs">VHS</option>
                    <option value="ld">LaserDisc</option>
                    <option value="ced">CED</option>
                    <option value="beta">Betamax</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-200">
                    <livewire:svg.down-arrow />
                </div>
            </div>
        </div>
        <div class="border-b-2 w-full mb-2 mt-4 px-3 justify-evenly">
            <p class="text-xl text-center">Upload scans, photos of the covers, discs, etc.</p>
        </div>

        <div class="w-full w-1/3 px-3 md:mb-0">
            <input wire:model="scans" type="file" name="scans" multiple>
            <x-jet-button class="mt-3 mb-6">
                {{ __('Add Media!') }}
            </x-jet-button>
        </div>

    </div>
</form>

