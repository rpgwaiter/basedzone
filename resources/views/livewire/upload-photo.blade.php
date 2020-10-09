<form wire:submit.prevent="save">
    <input type="file" wire:model="photo">

    @error('photo') <p class="error">{{ $message }}</p> @enderror

</form>

