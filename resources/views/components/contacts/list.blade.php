@props(['contacts'])

<ul>
    @foreach($contacts as $contact)
        <li><a class="underline text-blue-500" href="/contacts/{{ $contact->id }}">{{ $contact->full_name }}</a></li>
    @endforeach
</ul>
