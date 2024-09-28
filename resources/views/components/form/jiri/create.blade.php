<form {{ $attributes }} method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
    @csrf
    <x-form.input
        label="Name"
        type="text"
        name="name"
        placeholder="Jon Doe"
    />
    <x-form.input
        label="Starting at"
        type="text"
        name="starting_at"
        :placeholder="now()"
    />
    <div>
        <x-buttons.main>{{ __("Create this Jiri") }}</x-buttons.main>
    </div>
</form>
