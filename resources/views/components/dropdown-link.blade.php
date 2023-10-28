@props(['active' => false])
@php
$classes = "block text-sm px-3 text-left w-full hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white ";
if ($active) $classes .= "bg-blue-500 text-white";
@endphp


<a
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</a>
