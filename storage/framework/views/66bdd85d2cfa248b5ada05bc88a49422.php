<?php if(count($featuredMenuItems)): ?>
<?php $__currentLoopData = $featuredMenuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featuredItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="th-product product-grid">
  <div class="product-img">
    <?php if($featuredItem->hasMedia()): ?>
    <img src="<?php echo e($featuredItem->getThumb([
                        'width' => $featuredWidth,
                        'height' => $featuredHeight,
                    ])); ?>" alt="<?php echo e($featuredItem->getBuyableName()); ?>">
    <?php endif; ?>
    <span class="product-tag">Hot</span>
    <div class="actions">
      <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
      <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
      <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
    </div>
  </div>
  <div class="product-content">
    <a href="shop-details.html" class="product-category">Fresh Fruits</a>
    <h3 class="product-title"><a href="shop-details.html"><?php echo e($featuredItem->getBuyableName()); ?></a></h3>
    <span class="price"><?php echo e(currency_format($featuredItem->getBuyablePrice())); ?></span>
    <div class="woocommerce-product-rating">
      <span class="count">(120 Reviews)</span>
      <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer
          rating</span>
      </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>