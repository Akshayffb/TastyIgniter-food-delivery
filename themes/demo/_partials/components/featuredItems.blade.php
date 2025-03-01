@if (count($featuredMenuItems))
@foreach ($featuredMenuItems as $featuredItem)
<div class="th-product product-grid">
  <div class="product-img">
    @if ($featuredItem->hasMedia())
    <img src="{{ $featuredItem->getThumb([
                        'width' => $featuredWidth,
                        'height' => $featuredHeight,
                    ]) }}" alt="{{ $featuredItem->getBuyableName() }}">
    @endif
    <span class="product-tag">Hot</span>
    <div class="actions">
      <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
      <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
      <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
    </div>
  </div>
  <div class="product-content">
    <a href="shop-details.html" class="product-category">Fresh Fruits</a>
    <h3 class="product-title"><a href="shop-details.html">{{ $featuredItem->getBuyableName() }}</a></h3>
    <span class="price">{{ currency_format($featuredItem->getBuyablePrice()) }}</span>
    <div class="woocommerce-product-rating">
      <span class="count">(120 Reviews)</span>
      <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer
          rating</span>
      </div>
    </div>
  </div>
</div>
@endforeach
@endif