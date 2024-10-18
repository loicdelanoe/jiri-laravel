<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $contact->full_name }}</h1>
    <a href="/contacts" class="underline">← {{ __("Back") }}</a>
    <div class="flex w-full gap-4 bg-slate-50 p-4">
        @if($contact->image)
            <img class="w-24 h-24 rounded-full" src="{{ asset($contact->image) }}" alt="">
        @else
            <div class="w-24 h-24 rounded-full bg-slate-200"></div>
        @endif
        <dl class="flex flex-col">
            <div>
                <dt class="font-bold">{{ __("Full name") }}</dt>
                <dd>{{ $contact->full_name }}</dd>
                <dt class="font-bold">{{ __("Email") }}</dt>
                <dd>{{ $contact->email }}</dd>
            </div>
        </dl>
    </div>
    <div class="flex gap-2">
        <a class="bg-slate-700 font-bold text-white rounded-md py-4 px-6 self-start inline-block hover:bg-slate-900 transition"
           href="/contacts/{{ $contact->id }}/edit">{{ __("Edit this Contact") }}</a>
        <x-form.contact.delete :$contact/>
    </div>
</x-layouts.main>
