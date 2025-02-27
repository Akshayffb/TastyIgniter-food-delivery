
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo e(App::getLocale()); ?>">

<head>
    <?php echo controller()->renderPartial('head'); ?>
</head>

<body class="d-flex flex-column h-100 <?php echo e($this->page->bodyClass); ?>">

    <header class="header">
        <?php echo controller()->renderPartial('layout/header', ['items' => $mainMenu->menuItems()]); ?>
    </header>
    <div id="notification">
        <?php echo controller()->renderPartial('flash'); ?>
    </div>
    
    <div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div id="page-wrapper" class="content-area">
        <?php echo controller()->renderPage(); ?>
    </div>

    <footer id="page-footer mt-auto">
        <?php echo controller()->renderPartial('footer'); ?>
    </footer>

    <script type="text/javascript" src="<?php echo e(asset('app/admin/assets/js/admin.js')); ?>" id="app-js"></script>
    <?php echo get_script_tags(); ?>


    <?php
    $jsPath = rtrim(theme_url('demo/assets/js'), '/') . '/';
    $jsFiles = [
    'vendor/jquery-3.6.0.min.js',
    'swiper-bundle.min.js',
    'bootstrap.min.js',
    'jquery.magnific-popup.min.js',
    'jquery.counterup.min.js',
    'jquery-ui.min.js',
    'imagesloaded.pkgd.min.js',
    'isotope.pkgd.min.js',
    'main.js'
    ];
    ?>

    <?php $__currentLoopData = $jsFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script src="<?php echo e($jsPath . $file); ?>"></script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html>