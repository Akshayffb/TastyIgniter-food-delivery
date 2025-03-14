{!! get_metas() !!}
<title>{{ sprintf(lang('main::lang.site_title'), lang(get_title()), setting('site_name')) }}</title>
<link rel="stylesheet" href="{{ asset('app/admin/assets/css/admin.css') }}" id="flame-css">
{!! get_style_tags() !!}
<link rel="stylesheet" href="{{ theme_url('demo/assets/css/demo.css') }}" id="demo-css">

@php
$faviconPath = rtrim(theme_url('demo/assets/img/favicons'), '/') . '/';

$icons = array_merge(
array_map(fn($size) => ['type' => 'apple-touch-icon', 'size' => $size], [57, 60, 72, 76, 114, 120, 144, 152, 180]),
array_map(fn($size) => ['type' => 'icon', 'size' => $size, 'mime' => 'image/png'], [192, 32, 96, 16])
);

$stylePath = rtrim(theme_url('demo/assets/css'), '/') . '/';
$cssFiles = ['bootstrap.min.css', 'fontawesome.min.css', 'magnific-popup.min.css', 'swiper-bundle.min.css',
'style.css'];
@endphp

@foreach ($icons as $icon)
<link rel="{{ $icon['type'] }}" sizes="{{ $icon['size'] }}x{{ $icon['size'] }}"
  href="{{ sprintf('%s%s-%dx%d.png', $faviconPath, $icon['type'] === 'icon' ? 'favicon' : 'apple-icon', $icon['size'], $icon['size']) }}"
  @if(isset($icon['mime'])) type="{{ $icon['mime'] }}" @endif>
@endforeach

<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
<link
  href="https://fonts.googleapis.com/css2?family=Akshar:wght@300..700&family=DM+Sans:wght@100..1000&family=Shadows+Into+Light+Two&display=swap"
  rel="stylesheet">

@foreach ($cssFiles as $file)
<link rel="stylesheet" href="{{ $stylePath }}{{ $file }}">
@endforeach

<link rel="manifest" href="{{ $faviconPath }}manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ $faviconPath }}ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">