<x-layouts.main>
    <h2 class="font-bold text-xl">{{ __("Edit this Contact") }}</h2>
    <a href="/contacts/{{ $contact->id }}" class="underline">← {{ __("Back") }}</a>
    <form action="/contacts/{{ $contact->id }}" method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
        @method('PATCH')
        @csrf
        <div class="flex flex-col gap-2">
            <label class="font-bold mb-0 pb-1" for="name">{{ __("First name") }}</label>
            <input class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                   type="text"
                   name="firstname"
                   id="firstname"
                   placeholder="Jon"
                   value="{{ $contact->firstname }}">
            @error('firstname')
            <span class="block text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-bold mb-0 pb-1" for="name">{{ __("Last name") }}</label>
            <input class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                   type="text"
                   name="lastname"
                   id="lastname"
                   placeholder="Doe"
                   value="{{ $contact->lastname }}">
            @error('lastname')
            <span class="block text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-bold mb-0 pb-1" for="name">{{ __("Email") }}</label>
            <input class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                   type="text"
                   name="email"
                   id="email"
                   placeholder="jon@doe.com"
                   value="{{ $contact->email }}">
            @error('email')
            <span class="block text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <x-buttons.main>{{ __("Save") }}</x-buttons.main>
        </div>
    </form>
</x-layouts.main>
