@props([
    'disabled' => false,
    'suffix'
])

<div class="relative mt-1 rounded-md shadow-sm">
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
        <span class="text-gray-500 sm:text-sm">{{ '@' . $suffix }}</span>
    </div>
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full border-emerald-300 pr-36 sm:pr-34 focus:border-pink-500 focus:ring-pink-500 rounded-md shadow-sm']) !!}>
</div>
