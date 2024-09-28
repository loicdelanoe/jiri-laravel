@props(['contact'])

<form {{ $attributes }} method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
    @method('PATCH')
    @csrf
    <x-form.input
        label="First name"
        type="text"
        name="first_name"
        placeholder="Jon"
        :value="$contact->first_name"
    />
    <x-form.input
        label="Last name"
        type="text"
        name="last_name"
        placeholder="Doe"
        :value="$contact->last_name"
    />
    <x-form.input
        label="Email"
        type="text"
        name="email"
        placeholder="jon@doe.com"
        :value="$contact->email"
    />
    <div>
        <x-buttons.main>{{ __("Save") }}</x-buttons.main>
    </div>
</form>
