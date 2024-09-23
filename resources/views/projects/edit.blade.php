<x-layouts.main>
    <h2 class="font-bold text-xl">{{ __("Edit this Project") }}</h2>
    <a href="/projects/{{ $project->id }}" class="underline">← {{ __("Back") }}</a>
    <form action="/projects/{{ $project->id }}" method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
        @method('PATCH')
        @csrf
        <div class="flex flex-col gap-2">
            <label class="font-bold mb-0 pb-1" for="name">{{ __("Name") }}</label>
            <input class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                   type="text"
                   name="name"
                   id="name"
                   placeholder="Portfolio"
                   value="{{ $project->name }}">
            @error('name')
            <span class="block text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-bold mb-0 pb-1" for="starting-at">{{ __("Description") }}</label>
            <textarea class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                      type="text"
                      name="description"
                      id="description"
                      placeholder="This project is about..."
                      cols="30"
                      rows="10"
            >{{ $project->description }}</textarea>
            @error('description')
            <span class="block text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <x-buttons.main>{{ __("Save") }}</x-buttons.main>
        </div>
    </form>
</x-layouts.main>
