@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-emerald-300 focus:border-pink-500 focus:ring-pink-500 rounded-md shadow-sm']) !!}>
