<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ __("Your Projects") }}</h1>
    <section>
        <x-projects.list :$projects />
    </section>
    <a class="bg-slate-700 font-bold text-white rounded-md py-4 px-6 self-start inline-block hover:bg-slate-900 transition" href="/projects/create">{{ __("Create a Project") }}</a>
</x-layouts.main>
