<x-layouts.main>
    <h2 class="font-bold text-xl">Create a new Jiri</h2>
    <form action="/jiris" method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
        @csrf
        <div class="flex flex-col gap-2">
            <label class="font-bold mb-0 pb-1" for="name">Name</label>
            <input class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                   type="text"
                   name="name"
                   id="name"
                   placeholder="Jon Doe"
                   value="{{ old('name') }}">
            @error('name')
            <span class="block text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-bold mb-0 pb-1" for="starting-at">Starting at</label>
            <input class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                   type="text"
                   name="starting_at"
                   id="starting_at"
                   placeholder="{{ now() }}"
                   value="{{ old('starting_at') }}">
            @error('starting_at')
            <span class="block text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <x-buttons.main>Create</x-buttons.main>
        </div>
    </form>
</x-layouts.main>
