<nav id="main-menu"
     class="flex w-full">
    <h2 class="sr-only">{{ $title }}</h2>
    <ul class="flex flex-col w-full">
        @foreach($links as $link)
            <li>
                <a class="text-white uppercase py-2 px-4 inline-block w-full"
                   href="{{ $link['url'] }}">{{ $link['name'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
