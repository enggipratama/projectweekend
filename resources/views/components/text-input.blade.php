@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-base dark:border-base dark:bg-gray-900 dark:text-textbase focus:border-textbase dark:focus:border-textbase focus:ring-textbase dark:focus:ring-textbase rounded-md shadow-sm']) !!}>
