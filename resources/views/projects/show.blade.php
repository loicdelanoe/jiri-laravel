<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $project->name }}</h1>
    <a href="/projects" class="underline">← {{ __("Back") }}</a>
    <dl class="flex flex-col gap-4 bg-slate-50 p-4">
        <div>
            <dt class="font-bold">{{ __("Name") }}</dt>
            <dd>{{ $project->name }}</dd>
            <dt class="font-bold">{{ __("Description") }}</dt>
            <dd>{{ $project->description }}</dd>
        </div>
    </dl>
    <div class="flex gap-2">
        <a class="bg-slate-700 font-bold text-white rounded-md py-4 px-6 self-start inline-block hover:bg-slate-900 transition" href="/projects/{{ $project->id }}/edit">{{ __("Edit this Project") }}</a>
        <x-form.project.delete :$project/>
    </div>
</x-layouts.main>
