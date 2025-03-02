<nav class="main-menu d-none d-lg-inline-block">
    <ul>
        @foreach ($items as $navItem)
        @continue(Auth::isLogged() && in_array($navItem->code, ['login', 'register']))
        @continue(!Auth::isLogged() && in_array($navItem->code, ['account', 'recent-orders']))
        <li class="menu-item-has-children">
            <a href="{{ $navItem->items ? '#' : $navItem->url }}" @if ($navItem->items) class="dropdown-toggle"
                data-bs-toggle="dropdown" @endif>
                @lang($navItem->title)
            </a>
            @if ($navItem->items)
            <ul class="sub-menu">
                @foreach ($navItem->items as $subItem)
                <li @class(['menu-item-has-children'=> $subItem->items])>
                    <a href="{{ $subItem->items ? '#' : $subItem->url }}" @if ($subItem->items) class="dropdown-toggle"
                        data-bs-toggle="dropdown" @endif>
                        @lang($subItem->title)
                    </a>
                    @if ($subItem->items)
                    <ul class="sub-menu">
                        @foreach ($subItem->items as $childItem)
                        <li>
                            <a href="{{ $childItem->url }}">@lang($childItem->title)</a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
    </ul>
</nav>