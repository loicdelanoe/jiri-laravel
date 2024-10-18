<form {{ $attributes }} method="post" enctype="multipart/form-data" class="flex flex-col gap-4 bg-slate-50 p-4">
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
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
    <x-form.input
        label="Image"
        type="file"
        name="image"
    />
    <div>
        <x-buttons.main>{{ __("Create this Contact") }}</x-buttons.main>
    </div>
</form>
