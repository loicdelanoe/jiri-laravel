<form {{ $attributes }} method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
    @csrf
    <x-form.input
        label="First name"
        type="text"
        name="first_name"
        placeholder="Jon"
    />
    <x-form.input
        label="Last name"
        type="text"
        name="last_name"
        placeholder="Doe"
    />
    <x-form.input
        label="Email"
        type="text"
        name="email"
        placeholder="jon@doe.com"
    />
    <div>
        <x-buttons.main>{{ __("Create this Contact") }}</x-buttons.main>
    </div>
</form>
