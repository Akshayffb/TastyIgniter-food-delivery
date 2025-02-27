<?php echo get_metas(); ?>

<title><?php echo e(sprintf(lang('main::lang.site_title'), lang(get_title()), setting('site_name'))); ?></title>
<link rel="stylesheet" href="<?php echo e(asset('app/admin/assets/css/admin.css')); ?>" id="flame-css">
<?php echo get_style_tags(); ?>

<link rel="stylesheet" href="<?php echo e(theme_url('demo/assets/css/demo.css')); ?>" id="demo-css">

<?php
$faviconPath = rtrim(theme_url('demo/assets/img/favicons'), '/') . '/';

$icons = array_merge(
array_map(fn($size) => ['type' => 'apple-touch-icon', 'size' => $size], [57, 60, 72, 76, 114, 120, 144, 152, 180]),
array_map(fn($size) => ['type' => 'icon', 'size' => $size, 'mime' => 'image/png'], [192, 32, 96, 16])
);

$stylePath = rtrim(theme_url('demo/assets/css'), '/') . '/';
$cssFiles = ['bootstrap.min.css', 'fontawesome.min.css', 'magnific-popup.min.css', 'swiper-bundle.min.css',
'style.css'];
?>

<?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<link rel="<?php echo e($icon['type']); ?>" sizes="<?php echo e($icon['size']); ?>x<?php echo e($icon['size']); ?>"
  href="<?php echo e(sprintf('%s%s-%dx%d.png', $faviconPath, $icon['type'] === 'icon' ? 'favicon' : 'apple-icon', $icon['size'], $icon['size'])); ?>"
  <?php if(isset($icon['mime'])): ?> type="<?php echo e($icon['mime']); ?>" <?php endif; ?>>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
<link
  href="https://fonts.googleapis.com/css2?family=Akshar:wght@300..700&family=DM+Sans:wght@100..1000&family=Shadows+Into+Light+Two&display=swap"
  rel="stylesheet">

<?php $__currentLoopData = $cssFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<link rel="stylesheet" href="<?php echo e($stylePath); ?><?php echo e($file); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<link rel="manifest" href="<?php echo e($faviconPath); ?>manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo e($faviconPath); ?>ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">