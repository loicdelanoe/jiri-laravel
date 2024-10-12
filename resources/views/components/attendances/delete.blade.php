@props(['attendance'])

<form action="/jiris/{{ $jiri->id }}" method="post">
    @method('DELETE')
    @csrf
    <x-buttons.delete>{{ __("Delete this Jiri") }}</x-buttons.delete>
</form>
