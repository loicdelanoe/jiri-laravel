<x-layouts.main>
    <h1 class="font-bold text-2xl">Your Jiris</h1>
    <div class="flex w-100 gap-6">
        <section class="gap-10 bg-slate-50 px-10 py-6 w-full rounded">
            <h2 class="font-bold text-2xl mb-2">Upcoming Jiris</h2>
            <x-jiris.list :jiris="$upcomingJiris"/>
        </section>
        <section class="gap-10 bg-slate-50 px-10 py-6 w-full rounded">
            <h2 class="font-bold text-2xl mb-2">Past Jiris</h2>
            <x-jiris.list :jiris="$pastJiris"/>
        </section>
    </div>
    <a class="bg-slate-700 font-bold text-white rounded-md py-4 px-6 self-start inline-block hover:bg-slate-900 transition" href="/jiris/create">Create
        a Jiri</a>
</x-layouts.main>
