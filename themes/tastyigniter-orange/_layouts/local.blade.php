---
description: 'Local layout'

'[session]':
    security: all

'[staticMenu mainMenu]':
    code: main-menu

'[staticMenu footerMenu]':
    code: footer-menu

'[newsletter]': {  }

'[localSearch]':

'[localBox]':
    paramFrom: location
    showLocalThumb: 0

'[categories]':

'[cartBox]':
    checkStockCheckout: 1
    showCartItemThumb: 1
    pageIsCheckout: 0
    pageIsCart: 0

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

    <main role="main" class="p-0">
        <div id="page-wrapper">
            <div class="container">
                <div class="row py-4">
                    <div class="col-lg-2 d-none d-lg-inline-block">
                        <div class="categories affix-categories">
                            @component('categories')
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="content">
                            @partial('localBox::container')

                            @page
                        </div>
                    </div>

                    <div class="col-lg-4">
                        @partial('cartBox::container')
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer mt-auto d-none d-lg-block">
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
