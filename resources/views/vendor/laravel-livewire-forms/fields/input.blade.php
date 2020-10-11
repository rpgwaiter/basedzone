<div class="form-group row">
    <label for="{{ $field->name }}" class="font-bold col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>

    <div class="col-md">
        <input
            id="{{ $field->name }}"
            type="{{ $field->input_type }}"
            class="shadow-lg appearance-none block w-full bg-gray-800 text-gray-300 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none form-control @error($field->key) is-invalid @enderror"
            autocomplete="{{ $field->autocomplete }}"
            placeholder="{{ $field->placeholder }}"
            wire:model.lazy="{{ $field->key }}">

        @include('laravel-livewire-forms::fields.error-help')
    </div>
</div>
