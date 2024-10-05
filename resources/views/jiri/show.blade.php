<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $jiri->name }}</h1>
    <a href="/jiris" class="underline">← {{ __("Back") }}</a>
    <dl class="flex flex-col gap-4 bg-slate-50 p-4">
        <div>
            <dt class="font-bold">{{ __("Jiri name") }}</dt>
            <dd>{{ $jiri->name }}</dd>
        </div>
        <div>
            <dt class="font-bold">{{ __("Starting at") }}</dt>
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
                <h3 class="font-bold mb-2">Students</h3>
                <ul>
                    @foreach($jiri->students as $student)
                        <li>{{ $student->full_name }}</li>
                    @endforeach
                </ul>
            </article>
            <article>
                <h3 class="font-bold mb-2">Evaluators</h3>
                <ul>
                    @foreach($jiri->evaluators as $evaluator)
                        <li>{{ $evaluator->full_name }}</li>
                    @endforeach
                </ul>
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
