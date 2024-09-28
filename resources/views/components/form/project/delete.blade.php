@props(['project'])

<form action="/projects/{{ $project->id }}" method="post">
    @method('DELETE')
    @csrf
    <x-buttons.delete>{{ __("Delete this Project") }}</x-buttons.delete>
</form>
