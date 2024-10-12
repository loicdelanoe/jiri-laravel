<x-layouts.main>
    @dump($projects)
    <form action="{{ route('assignements.store') }}" method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
        @csrf
{{--        @foreach($projects as $project)--}}
{{--            <div>--}}
{{--                <label for="{{ $project->name }}">{{ $project->name }}</label>--}}
{{--                <input type="checkbox" name="projects[]" id="{{ $project->id }}">--}}
{{--            </div>--}}
{{--        @endforeach--}}
        <x-buttons.main>Add</x-buttons.main>
    </form>

</x-layouts.main>
