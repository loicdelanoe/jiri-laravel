@props(['contact', 'jiri'])

<form action="{{ route('attendances.update', $contact->pivot->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <input type="hidden" name="role" value="{{ \App\Enums\ContactRole::Student->value }}">
    <x-buttons.main>Changer le rôle</x-buttons.main>
</form>
