<nav id="main-menu"
     class="flex w-full">
    <h2 class="sr-only">{{ $title }}</h2>
    <ul class="flex flex-col w-full">
        @auth
            @foreach($links as $link)
                <li>
                    <a class="text-white uppercase py-2 px-4 inline-block w-full"
                       href="{{ $link['url'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
            @if(Route::has('logout'))
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-white uppercase py-2 px-4 inline-block w-full" type="submit">{{ __("Logout") }}</button>
                        </form>
                    </li>
            @endif
            @if(Route::has('profile'))
                <li><a class="text-white uppercase py-2 px-4 inline-block w-full"
                       href="{{ route('profile.edit') }}">{{ __("Profile") }}</a></li>
            @endif
        @else
            @if(Route::has('login'))
                <li><a class="text-white uppercase py-2 px-4 inline-block w-full"
                       href="{{ route('login') }}">{{ __("Login") }}</a></li>
            @endif
            @if(Route::has('register'))
                <li><a class="text-white uppercase py-2 px-4 inline-block w-full"
                       href="{{ route('register') }}">{{ __("Register") }}</a></li>
            @endif
        @endauth
    </ul>
</nav>
