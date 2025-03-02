---
description: Default layout

'[session]':
    security: all

'[staticMenu mainMenu]':
    code: main-menu

'[staticMenu footerMenu]':
    code: footer-menu

'[newsletter]': {  }
---
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ App::getLocale() }}" class="h-100">
<head>
    @partial('head')
</head>
<body class="d-flex flex-column h-100 {{ $this->page->bodyClass }}">

    <header class="header">
        @partial('header')
    </header>

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

    <main role="main" class="p-0">
        <div id="page-wrapper">
            @page
        </div>
    </main>

    <footer class="footer mt-auto">
        @partial('footer')
    </footer>
    <div id="notification">
        @partial('flash')
    </div>
    @partial('eucookiebanner')
    @partial('scripts')

    @php
    $jsPath = rtrim(theme_url('tastyigniter-orange/assets/custom/js'), '/') . '/';
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
    @endphp

    @foreach ($jsFiles as $file)
    <script src="{{ $jsPath . $file }}"></script>
    @endforeach
</body>
</html>
