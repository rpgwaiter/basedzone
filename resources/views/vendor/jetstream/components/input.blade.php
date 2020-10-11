@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-input shadow-lg appearance-none block w-full bg-gray-800 text-gray-300 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none']) !!}>
