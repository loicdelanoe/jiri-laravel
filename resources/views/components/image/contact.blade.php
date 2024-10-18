@props(['contact'])

@php
    $sizes = \Illuminate\Support\Facades\Config::get('photos.sizes');
    $search = array_keys($sizes)[0];
@endphp
<img src="{{ asset(str_replace($search, 'thumbnail', $contact->image)) }}" alt="{{ $contact->full_name }}"
     srcset="
             {{ asset(str_replace($search, 'medium', $contact->image)) }} {{ $sizes['medium'] }}w,
             {{ asset(str_replace($search, 'large', $contact->image)) }} {{ $sizes['large'] }}w,"
     loading="lazy"
     decoding="async"
     width="{{ $sizes['thumbnail'] }}"
     height="{{ $sizes['thumbnail'] }}"
     class="rounded-full min-w-24 w-24 h-24"
>
