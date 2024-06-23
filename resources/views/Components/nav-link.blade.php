@props(['active' => false, 'type' => 'anchor'])

@php
    if($type === 'anchor') {
        $pretag = '<a';
        $endtag = '</a>';
    } else {
        $pretag = '<button';
        $endtag = '</button>';
    }
@endphp

{!! $pretag !!} {{ $attributes }} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
{!! $endtag !!}