<nav id="main-menu"
     class="">
    <h2 class="sr-only">{{ $title }}</h2>
    <ul class="flex flex-col sm:flex-row items-center">
        @foreach($links as $link)
            <li>
                <a class="text-white uppercase px-3 py-1 inline-block"
                   href="{{ $link['url'] }}">{{ $link['name'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
