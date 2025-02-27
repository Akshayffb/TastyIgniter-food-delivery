<nav class="main-menu d-none d-lg-inline-block">
    <ul>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Auth::isLogged() && in_array($navItem->code, ['login', 'register'])) continue; ?>
        <?php if(!Auth::isLogged() && in_array($navItem->code, ['account', 'recent-orders'])) continue; ?>
        <li class="menu-item-has-children">
            <a href="<?php echo e($navItem->items ? '#' : $navItem->url); ?>" <?php if($navItem->items): ?> class="dropdown-toggle"
                data-bs-toggle="dropdown" <?php endif; ?>>
                <?php echo app('translator')->get($navItem->title); ?>
            </a>
            <?php if($navItem->items): ?>
            <ul class="sub-menu">
                <?php $__currentLoopData = $navItem->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['menu-item-has-children'=> $subItem->items]) ?>">
                    <a href="<?php echo e($subItem->items ? '#' : $subItem->url); ?>" <?php if($subItem->items): ?> class="dropdown-toggle"
                        data-bs-toggle="dropdown" <?php endif; ?>>
                        <?php echo app('translator')->get($subItem->title); ?>
                    </a>
                    <?php if($subItem->items): ?>
                    <ul class="sub-menu">
                        <?php $__currentLoopData = $subItem->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e($childItem->url); ?>"><?php echo app('translator')->get($childItem->title); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</nav>