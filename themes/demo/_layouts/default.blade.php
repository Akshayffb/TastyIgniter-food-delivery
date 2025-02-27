---
description: Default layout

'[session]':
    security: all

'[staticMenu mainMenu]':
    code: main-menu

'[staticMenu footerMenu]':
    code: footer-menu

'[newsletter]': {  }

'[account]': { }

'[cartBox]':

checkStockCheckout: 1
showCartItemThumb: 1
pageIsCheckout: 0
pageIsCart: 0

'[contact]': { }

'[localBox]':
paramFrom: location
showLocalThumb: 0

---
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ App::getLocale() }}">

<head>
    @partial('head')
</head>

<body class="d-flex flex-column h-100 {{ $this->page->bodyClass }}">

    <header class="header">
        @partial('layout/header', ['items' => $mainMenu->menuItems()])
    </header>
    <div id="notification">
        @partial('flash')
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
        @page
    </div>

    <footer id="page-footer mt-auto">
        @partial('footer')
    </footer>

    <script type="text/javascript" src="{{ asset('app/admin/assets/js/admin.js') }}" id="app-js"></script>
    {!! get_script_tags() !!}

    @php
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
    @endphp

    @foreach ($jsFiles as $file)
    <script src="{{ $jsPath . $file }}"></script>
    @endforeach
</body>

</html>