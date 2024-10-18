<x-layouts.main>
    <h1 class="font-bold text-2xl mb-6">{{ __("Your Contacts") }}</h1>
    <section>
        <x-contacts.list :$contacts />
    </section>
    <a class="bg-slate-700 font-bold text-white rounded-md py-4 px-6 self-start inline-block hover:bg-slate-900 transition" href="/contacts/create">{{ __("Create a Contact") }}</a>
</x-layouts.main>
