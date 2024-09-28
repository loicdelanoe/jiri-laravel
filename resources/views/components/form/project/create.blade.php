<form {{ $attributes }} method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
    @csrf
    <x-form.input
        label="Name"
        type="text"
        name="name"
        placeholder="Jon Doe"
    />
    <x-form.textarea
        label="Description"
        name="description"
        placeholder="This project is about..."
    />
    <div>
        <x-buttons.main>{{ __("Create this Project") }}</x-buttons.main>
    </div>
</form>
