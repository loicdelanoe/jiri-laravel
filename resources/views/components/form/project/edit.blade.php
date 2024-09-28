@props(['project'])

<form {{ $attributes }} method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
    @method('PATCH')
    @csrf
    <x-form.input
        label="Name"
        type="text"
        name="name"
        placeholder="Jon Doe"
        :value="$project->name"
    />
    <x-form.textarea
        label="Description"
        name="description"
        placeholder="This project is about..."
    >{{ $project->description }}</x-form.textarea>
    <div>
        <x-buttons.main>{{ __("Create this Project") }}</x-buttons.main>
    </div>
</form>
