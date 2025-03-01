---
description: ''
---
<header class="th-header header-layout1">
  <div class="header-top">
    <div class="container">
      <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
        <div class="col-auto d-none d-lg-block">
          <p class="header-notice">Orders of $50 or more qualify for free shipping!</p>
        </div>
        <div class="col-auto">
          <div class="header-links">
            <ul>
              <li class="d-none d-sm-inline-block"><i class="fal fa-location-dot"></i><a
                  href="https://www.google.com/maps">8502 Preston Rd. Inglewood, Maine 98380</a>
              </li>
              <li>
                <div class="social-links">
                  <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                  <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sticky-wrapper">
    <div class="menu-area">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto">
            <div class="header-logo">
              @partial('layout/logo')
            </div>
          </div>

          <div class="col-auto">
            @partial('layout/menu', ['items' => $mainMenu->menuItems()])
            <button type="button" class="th-menu-toggle d-block d-lg-none">
              <i class="far fa-bars"></i>
            </button>
          </div>

          <div class="col-auto d-none d-xl-block">
            <div class="header-button">
              <!-- <button type="button" class="simple-icon searchBoxToggler">
                <i class="far fa-search"></i>
              </button> -->
              <button type="button" class="simple-icon sideMenuToggler">
                <span class="badge">5</span>
                <i class="fa-regular fa-cart-shopping"></i>
              </button>

              @php
              $menuItems = collect($mainMenu->menuItems());
              $viewMenuItem = $menuItems->firstWhere('code', 'view-menu');
              @endphp

              @if ($viewMenuItem)
              <a href="{{ $viewMenuItem->url }}" class="th-btn style4">
                Order Now <i class="fas fa-chevron-right ms-2"></i>
              </a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>