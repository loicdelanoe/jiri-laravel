@props(['contacts'])

<ul class="grid grid-cols-4 gap-6">
    @foreach($contacts as $contact)
        <li class="relative">
            <div class="flex flex-col items-center gap-2">
                @if($contact->image)
                    <x-image.contact :$contact/>
                @else
                    <x-placeholder.contact/>
                @endif
                <p class="font-bold">{{ $contact->full_name }}</p>
            </div>
            <a class="absolute inset-0" href="/contacts/{{ $contact->id }}"><span class="sr-only">{{ $contact->full_name }}</span></a>
        </li>
    @endforeach
</ul>
