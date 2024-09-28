<x-layouts.main>
    <h2 class="font-bold text-xl">{{ __("Edit this Contact") }}</h2>
    <a href="/contacts/{{ $contact->id }}" class="underline">← {{ __("Back") }}</a>
    <x-form.contact.edit action="/contacts/{{ $contact->id }}" :$contact/>
</x-layouts.main>
