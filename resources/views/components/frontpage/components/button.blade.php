<button {{ $attributes->merge(['class' => $bgcolor . ' ' . $rounded . ' ' . $textcolor . ' py-1 px-3']) }}>
    {{ $slot }}
</button>