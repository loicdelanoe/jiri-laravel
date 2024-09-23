<x-layouts.main>
    <h2 class="font-bold text-xl">{{ __("Create a new Contact") }}</h2>
    <a href="/contacts" class="underline">← {{ __("Back") }}</a>
    <form action="/contacts" method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
        @csrf
        <div class="flex flex-col gap-2">
            <label class="font-bold mb-0 pb-1" for="name">{{ __("First name") }}</label>
            <input class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                   type="text"
                   name="firstname"
                   id="firstname"
                   placeholder="Jon"
                   value="{{ old('firstname') }}">
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
                   value="{{ old('lastname') }}">
            @error('lastname')
            <span class="block text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-bold mb-0 pb-1" for="name">{{ __("First name") }}</label>
            <input class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                   type="text"
                   name="email"
                   id="email"
                   placeholder="jon@doe.com"
                   value="{{ old('email') }}">
            @error('email')
            <span class="block text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <x-buttons.main>{{ __("Create this Contact") }}</x-buttons.main>
        </div>
    </form>
</x-layouts.main>
