@props(['contacts'])

<ul>
    @foreach($contacts as $contact)
        <li><a class="underline text-blue-500" href="/contacts/{{ $contact->id }}">{{ $contact->firstname }} {{ $contact->lastname }}</a></li>
    @endforeach
</ul>
