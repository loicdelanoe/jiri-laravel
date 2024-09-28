<x-layouts.main>
    <h2 class="font-bold text-xl">{{ __("Create a new Project") }}</h2>
    <a href="/projects" class="underline">← {{ __("Back") }}</a>
    <x-form.project.create action="/projects"/>
</x-layouts.main>
