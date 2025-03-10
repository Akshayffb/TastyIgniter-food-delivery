<ul class="nav navbar-nav">
    @foreach ($items as $navItem)
        @continue(Auth::isLogged() && in_array($navItem->code, ['login', 'register']))
        @continue(!Auth::isLogged() && in_array($navItem->code, ['account', 'recent-orders']))
        @continue(!$this->theme->enable_history && in_array($navItem->code, ['history']))
        <li
            class="ps-3 nav-item{{
                ($navItem->items ? ' dropdown' : '').(($navItem->isActive || $navItem->isChildActive) ? ' active' : '')
            }}"
        >
            <a
                class="nav-link{{ ($navItem->items ? ' dropdown-toggle' : '') }}"
                href="{{ $navItem->items ? '#' : $navItem->url }}"
                @if ($navItem->items) data-bs-toggle="dropdown" @endif
                {!! $navItem->extraAttributes !!}
            >@lang($navItem->title) @if ($navItem->items) <span class="caret"></span> @endif</a>
            @if ($navItem->items)
                <div
                    class="dropdown-menu"
                    aria-labelledby="navbar-{{ $navItem->code }}"
                    role="menu"
                >
                    @foreach ($navItem->items as $item)
                        <a
                            class="dropdown-item{{ ($item->isActive ? ' active' : '') }}"
                            href="{{ $item->url }}"
                            {!! $item->extraAttributes !!}
                        >@lang($item->title)</a>
                    @endforeach
                </div>
            @endif
        </li>
    @endforeach
</ul>
