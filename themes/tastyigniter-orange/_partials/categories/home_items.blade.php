<div class="filter-menu indicator-active filter-menu-active mb-0">
    <button data-filter="*" class="th-btn tab-btn active" type="button">ALL</button>

    @foreach ($categories as $category)
        @continue(in_array($category->getKey(), $hiddenCategories))
        @continue($hideEmptyCategory && $category->count_menus < 1)

        <a href="{{ page_url('local/menus', ['category' => $category->permalink_slug]) }}">
            <button data-filter=".{{ $category->permalink_slug }}" class="th-btn tab-btn" type="button">
                @if ($category->hasMedia('thumb'))
                    <img class="link-cat-product-img" src="{{ $category->getThumb() }}" alt="{{ $category->name }}">
                @endif
                {{ $category->name }}
            </button>
        </a>
    @endforeach
</div>
