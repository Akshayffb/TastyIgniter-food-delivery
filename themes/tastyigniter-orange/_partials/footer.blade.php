<!--==============================
	Footer Area
==============================-->
<div class="bg-white">
    <div class="container z-index-common">
        <div class="newsletter-wrap">
            <div class="newsletter-content">
                <h4 class="newsletter-title">Sign Up to Get Updates & News About Us.</h4>
            </div>
            @if(has_component('newsletter'))
            @component('newsletter')
            @endif
        </div>
    </div>
</div>

<footer class="footer-wrapper footer-layout1"
    data-bg-src="/themes/tastyigniter-orange/assets/custom/img/bg/footer-bg.jpg">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                @partial('nav/logo')
                            </div>
                            <p class="about-text">We provide specialized winterization services to safeguard your
                                pool during the off-season, and when spring arrives, we handle the thorough opening
                                process.</p>
                            <div class="th-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">
                            <img src="/themes/tastyigniter-orange/assets/custom/img/theme-img/title_icon.svg" alt="Icon">
                            Quick Links
                        </h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                @foreach ($footerMenu->menuItems() as $navItem)
                                @foreach (collect($navItem->items)->sortBy('title') as $item)
                                @if ($item->title !== 'Privacy Policy')
                                <li>
                                    <a href="{{ $item->url }}" {!! $item->extraAttributes !!}>
                                        @lang($item->title)
                                    </a>
                                </li>
                                @endif
                                @endforeach
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title"><img
                                src="/themes/tastyigniter-orange/assets/custom/img/theme-img/title_icon.svg"
                                alt="Icon">Contact
                            Us</h3>
                        <div class="th-widget-contact">
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fas fa-location-dot"></i>
                                </div>
                                <p class="info-box_text">8502 Preston Rd. Inglewood, Maine 98380</p>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <p class="info-box_text">
                                    <a href="tel:+16326543564" class="info-box_link">+(163)-2654-3564</a>
                                    <a href="tel:+16326545432" class="info-box_link">+(163)-2654-5432</a>
                                </p>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <p class="info-box_text">
                                    <a href="mailto:help24/7@frutin.com" class="info-box_link">help24/7@frutin.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title"><img
                                src="/themes/tastyigniter-orange/assets/custom/img/theme-img/title_icon.svg"
                                alt="Icon">Instagram
                        </h3>
                        <div class="sidebar-gallery">
                            <div class="gallery-thumb">
                                <img src="/themes/tastyigniter-orange/assets/custom/img/widget/gallery_1_1.jpg"
                                    alt="Gallery Image">
                                <a href="/themes/tastyigniter-orange/assets/custom/img/widget/gallery_1_1.jpg"
                                    class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="/themes/tastyigniter-orange/assets/custom/img/widget/gallery_1_2.jpg"
                                    alt="Gallery Image">
                                <a href="/themes/tastyigniter-orange/assets/custom/img/widget/gallery_1_2.jpg"
                                    class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="/themes/tastyigniter-orange/assets/custom/img/widget/gallery_1_3.jpg"
                                    alt="Gallery Image">
                                <a href="/themes/tastyigniter-orange/assets/custom/img/widget/gallery_1_3.jpg"
                                    class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="/themes/tastyigniter-orange/assets/custom/img/widget/gallery_1_4.jpg"
                                    alt="Gallery Image">
                                <a href="/themes/tastyigniter-orange/assets/custom/img/widget/gallery_1_4.jpg"
                                    class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row gy-2 align-items-center">
                <div class="col-md-6">

                    <p class="copyright-text">
                        Copyright {!! sprintf(
                        lang('main::lang.site_copyright'),
                        date('Y'),
                        '<a href="'.url('/').'">'.setting('site_name').'</a>'
                        ) !!} All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        @foreach ($footerMenu->menuItems() as $navItem)
                        @foreach ($navItem->items as $item)
                        @if (in_array($item->title, ['Privacy Policy', 'Terms and Conditions']))
                        <li class="list-inline-item">
                            <a href="{{ $item->url }}" class="text-white" {!! $item->extraAttributes !!}>
                                @lang($item->title)
                            </a>
                        </li>
                        @endif
                        @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>