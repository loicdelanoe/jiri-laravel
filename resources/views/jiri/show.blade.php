<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $jiri->name }}</h1>
    <a href="/jiris" class="underline">← {{ __("Back") }}</a>
    <dl class="flex flex-col gap-4 bg-slate-50 p-4">
        <div>
            <dt class="font-bold text-xl mb-4">{{ __("Jiri name") }}</dt>
            <dd>{{ $jiri->name }}</dd>
        </div>
        <div>
            <dt class="font-bold text-xl mb-4">{{ __("Starting at") }}</dt>
            <dd>
                {{ $jiri->starting_at->diffForHumans() }}
            </dd>
            <dd>
                <time datetime="{{ $jiri->starting_at }}">
                    {{ __("The") }} {{ $jiri->starting_at->format('d M Y') }} {{ __("at") }} {{ $jiri->starting_at->format('H:i') }}
                </time>
            </dd>
        </div>
        <div class="flex gap-6">
            <article>
                <h3 class="font-bold mb-4 text-xl">{{ __("Students") }}</h3>
                <ul class="flex flex-col gap-2">
                    @foreach($jiri->students as $student)
                        <li class="flex items-center gap-6 justify-between">
                            <div>
                                <p class="font-bold">{{ $student->full_name }}</p>
                                <small>{{ $student->email }}</small>
                            </div>
                            <form action="{{ route('attendances.update', $student->pivot->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="role" value="{{ \App\Enums\ContactRole::Evaluator->value }}">
                                <x-buttons.thin>{{ __("Change role") }}</x-buttons.thin>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </article>
            <article>
                <h3 class="font-bold mb-4 text-xl">{{ __("Evaluators") }}</h3>
                <ul class="flex flex-col gap-2">
                    @foreach($jiri->evaluators as $evaluator)
                        <li class="flex items-center gap-6 justify-between">
                            <div>
                                <p class="font-bold">{{ $evaluator->full_name }}</p>
                                <small>{{ $evaluator->email }}</small>
                            </div>
                            <form action="{{ route('attendances.update', $evaluator->pivot->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="role" value="{{ \App\Enums\ContactRole::Student->value }}">
                                <x-buttons.thin>{{ __("Change role") }}</x-buttons.thin>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </article>
            <article>
                <h3 class="font-bold mb-4 text-xl">{{ __("Assignements") }}</h3>
                <ul class="flex flex-col gap-2">
                    @foreach($jiri->projects as $project)
                        <li class="flex items-center gap-6 justify-between">
                            {{ $project->name }}
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('assignements.create', $jiri) }}">{{ __("Add assignement(s)") }}</a>
            </article>
        </div>
    </dl>
    <div class="flex gap-2">
        @can('update', $jiri)
            <a class="bg-slate-700 font-bold text-white rounded-md py-4 px-6 self-start inline-block hover:bg-slate-900 transition"
               href="/jiris/{{ $jiri->id }}/edit">{{ __("Edit this Jiri") }}</a>
        @endcan
        @can('delete', $jiri)
            <x-form.jiri.delete :$jiri/>
        @endcan
    </div>
</x-layouts.main>
