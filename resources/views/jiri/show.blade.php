<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $jiri->name }}</h1>
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
    </dl>
    <div class="flex gap-2">
        <a class="bg-slate-700 font-bold text-white rounded-md py-4 px-6 self-start inline-block hover:bg-slate-900 transition" href="/jiris/{{ $jiri->id }}/edit">{{ __("Edit this Jiri") }}</a>
        <form action="/jiris/{{ $jiri->id }}" method="post">
            @method('DELETE')
            @csrf
            <x-buttons.red>{{ __("Delete this Jiri") }}</x-buttons.red>
        </form>
    </div>
</x-layouts.main>
