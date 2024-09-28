<x-layouts.main>
    <h2 class="font-bold text-xl">{{ __("Create a new Jiri") }}</h2>
    <a href="/jiris" class="underline">← {{ __("Back") }}</a>
    <x-form.jiri.create action="/jiris"/>
</x-layouts.main>
