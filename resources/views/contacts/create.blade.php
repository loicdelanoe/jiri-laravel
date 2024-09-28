<x-layouts.main>
    <h2 class="font-bold text-xl">{{ __("Create a new Contact") }}</h2>
    <a href="/contacts" class="underline">← {{ __("Back") }}</a>
    <x-form.contact.create action="/contacts"/>
</x-layouts.main>
