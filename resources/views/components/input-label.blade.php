@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-textbase']) }}>
    {{ $value ?? $slot }}
</label>
