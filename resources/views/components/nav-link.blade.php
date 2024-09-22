@props(['active' => false, 'element_type' => "a"])

@php
    $activeClass = $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
@endphp
<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

@if ($element_type === "a")
    <a {{ $attributes }} class="{{ $activeClass }} rounded-md px-3 py-2 text-sm font-medium text-white"
        aria-current="page">{{ $slot }}</a>
@else
    <button {{ $attributes }} class="{{ $activeClass }} rounded-md px-3 py-2 text-sm font-medium text-white"
        aria-current="page">{{ $slot }}</button>
@endif
