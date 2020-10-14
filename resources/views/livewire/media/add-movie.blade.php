<form wire:submit.prevent="submit" class="flex">
    <x-jet-input wire:model="imdb_id" placeholder="IMDB ID (ex. tt0086567)" />
    <x-jet-button class="py-2 my-3">
        {{__('Add!')}}
    </x-jet-button>
</form>
