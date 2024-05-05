<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-danger border border-transparent rounded-md font-bold text-xs text-textbase uppercase tracking-widest hover:bg-danger active:bg-danger focus:outline-none focus:ring-2 focus:ring-danger focus:ring-offset-2 dark:focus:ring-offset-textbase transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
