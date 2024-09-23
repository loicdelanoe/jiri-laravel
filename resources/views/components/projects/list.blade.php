@props(['projects'])

<ul>
    @foreach($projects as $project)
        <li><a class="underline text-blue-500" href="/projects/{{ $project->id }}">{{ $project->name }}</a></li>
    @endforeach
</ul>
