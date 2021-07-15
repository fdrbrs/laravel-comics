

<header id="site_header">

<div class="topnav">
    DC POWER ADDITIONAL SITES
</div>

<div class="main_menu">
    main menu

    <nav>
        @foreach(config('comics.menu') as $item)
            <li>
                <a href="{{ route($item['href']) }}" class="{{ Route::currentRouteName() === $item['href'] ? 'active' : '' }}">
                    {{ $item['text']}}
                </a>
            </li>
        @endforeach
    </nav>
</div>
</header>