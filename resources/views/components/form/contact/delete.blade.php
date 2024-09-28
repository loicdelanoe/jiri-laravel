@props(['contact'])

<form action="/contacts/{{ $contact->id }}" method="post">
    @method('DELETE')
    @csrf
    <x-buttons.delete>{{ __("Delete this Contact") }}</x-buttons.delete>
</form>
