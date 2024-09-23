<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $project->name }}</h1>
    <dl class="flex flex-col gap-4 bg-slate-50 p-4">
        <div>
            <dt class="font-bold">Name</dt>
            <dd>{{ $project->name }}</dd>
            <dt class="font-bold">Description</dt>
            <dd>{{ $project->description }}</dd>
        </div>
    </dl>
</x-layouts.main>
