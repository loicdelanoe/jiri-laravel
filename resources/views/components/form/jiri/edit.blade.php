@props(['jiri'])

<form {{ $attributes }} method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
    @method("PATCH")
    @csrf
    <x-form.input
        label="Name"
        type="text"
        name="name"
        placeholder="Jon Doe"
        :value="$jiri->name"
    />
    <x-form.input
        label="Starting at"
        type="text"
        name="starting_at"
        placeholder="Jon Doe"
        :value="$jiri->starting_at->format('Y-m-d H:i')"
    />
    <div>
        <x-buttons.main>{{ __("Save") }}</x-buttons.main>
    </div>
</form>
