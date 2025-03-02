{!! get_metas() !!}
<meta name="csrf-token" content="{{ csrf_token() }}">
@if (trim($favicon = $this->theme->favicon, '/'))
<link href="{{ uploads_url($favicon) }}" rel="shortcut icon" type="image/ico">
@else
{!! get_favicon() !!}
@endif
<title>{{ sprintf(lang('main::lang.site_title'), lang(get_title()), setting('site_name')) }}</title>
@if ($this->page->description)
<meta name="description" content="{{ $this->page->description }}">@endif
@if ($this->page->keywords)
<meta name="keywords" content="{{ $this->page->keywords }}">@endif
<link
    href="//fonts.googleapis.com/css?family=Amaranth|Titillium+Web:200,200i,400,400i,600,600i,700,700i|Droid+Sans+Mono"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@styles
@if (!empty($this->theme->custom_css))
<style type="text/css" id="custom-css">
    {
        ! ! $this->theme->custom_css ! !
    }
</style>
@endif

@php

$stylePath = rtrim(theme_url('tastyigniter-orange/assets/custom/css'), '/') . '/';
$cssFiles = ['bootstrap.min.css', 'fontawesome.min.css', 'magnific-popup.min.css', 'swiper-bundle.min.css',
'style.css'];
@endphp

<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
<link
    href="https://fonts.googleapis.com/css2?family=Akshar:wght@300..700&family=DM+Sans:wght@100..1000&family=Shadows+Into+Light+Two&display=swap"
    rel="stylesheet">

@foreach ($cssFiles as $file)
<link rel="stylesheet" href="{{ $stylePath }}{{ $file }}">
@endforeach