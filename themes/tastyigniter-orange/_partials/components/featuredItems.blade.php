@if (count($featuredMenuItems))
@foreach ($featuredMenuItems as $featuredItem)
<div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat5 cat2">
    <div class="th-product product-grid featured-item">
        <div class="product-img">
            @if ($featuredItem->hasMedia())
            <img src="{{ $featuredItem->getThumb(['width' => $featuredWidth, 'height' => $featuredHeight]) }}"
                alt="{{ $featuredItem->getBuyableName() }}">
            @endif
            <span class="product-tag">New</span>
            <div class="actions">
                <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                <a href="{{page_url('local/menus', ['location' => optional($featuredItem->locations->first())->permalink_slug])}}?menuId={{ $featuredItem->getBuyableIdentifier() }}" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                <a href="{{page_url('local/menus', ['location' => optional($featuredItem->locations->first())->permalink_slug])}}?menuId={{ $featuredItem->getBuyableIdentifier() }}" class="icon-btn"><i class="far fa-heart"></i></a>
            </div>
        </div>
        <div class="product-content">
            <a href="{{page_url('local/menus', ['location' => optional($featuredItem->locations->first())->permalink_slug])}}?menuId={{ $featuredItem->getBuyableIdentifier() }}"
                class="product-category">{{ $featuredItem->locations->implode('location_name', ',') }}</a>
            <h3 class="product-title">
                <a href="{{page_url('local/menus', ['location' => optional($featuredItem->locations->first())->permalink_slug])}}?menuId={{ $featuredItem->getBuyableIdentifier() }}">{{ $featuredItem->getBuyableName() }}</a>
            </h3>
            <span class="price">{{ currency_format($featuredItem->getBuyablePrice()) }}</span>
            <div class="woocommerce-product-rating">
                <span class="count">(120 Reviews)</span>
                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span>
                        customer rating</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif