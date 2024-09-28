<x-layouts.main>
    <h2 class="font-bold text-xl">{{ __("Edit this Jiri") }}</h2>
    <a href="/jiris/{{ $jiri->id }}" class="underline">← {{ __("Back") }}</a>
    <x-form.jiri.edit action="/jiris/{{ $jiri->id }}" :$jiri/>
</x-layouts.main>
