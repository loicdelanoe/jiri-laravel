@props(['contacts'])

<ul>
    @foreach($contacts as $contact)
        <li><a class="underline text-blue-500" href="/contacts/{{ $contact->id }}">{{ $contact->first_name }} {{ $contact->last_name }}</a></li>
    @endforeach
</ul>
