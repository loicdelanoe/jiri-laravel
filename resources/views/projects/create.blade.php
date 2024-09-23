<x-layouts.main>
    <h2 class="font-bold text-xl">{{ __("Create a new Project") }}</h2>
    <form action="/projects" method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
        @csrf
        <div class="flex flex-col gap-2">
            <label class="font-bold mb-0 pb-1" for="name">{{ __("Name") }}</label>
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
            <label class="font-bold mb-0 pb-1" for="description">{{ __("Description") }}</label>
            <textarea class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                      type="text"
                      name="description"
                      id="description"
                      placeholder="{{ __("This project is about...") }}">{{ old('description') }}</textarea>
            @error('description')
            <span class="block text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <x-buttons.main>{{ __("Create this Project") }}</x-buttons.main>
        </div>
    </form>
</x-layouts.main>
