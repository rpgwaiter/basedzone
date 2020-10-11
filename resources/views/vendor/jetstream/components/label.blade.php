@props(['value'])

<label {{ $attributes->merge(['class' => 'uppercase font-medium text-md text-gray-300 block tracking-wide text-gray-800 text-xs font-bold mb-2']) }}>
    {{ $value ?? $slot }}
</label>
