<x-layouts.main>
    <h2 class="font-bold text-xl">{{ __("Edit this Project") }}</h2>
    <a href="/projects/{{ $project->id }}" class="underline">← {{ __("Back") }}</a>
    <x-form.project.edit action="/projects/{{ $project->id }}" :$project />
</x-layouts.main>
