<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 54, 'stickySetTop': '-54px', 'stickyChangeLogo': false}">
  <div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
    <div class="header-top header-top-small-minheight header-top-simple-border-bottom">
      <div class="container py-2">
        <div class="header-row justify-content-between">
          <div class="header-column col-auto px-0">
            <div class="header-row">
              <div class="header-nav-top">
                <ul class="nav nav-pills position-relative">
                  <li class="nav-item d-none d-sm-block">
                    <span class="d-flex align-items-center font-weight-medium ws-nowrap text-3 ps-0"><a href="mailto:info@garirgarage.com" class="text-decoration-none text-color-dark text-color-hover-primary"><i class="icons icon-envelope font-weight-bold position-relative text-4 top-3 me-1"></i> info@garirgarage.com</a></span>
                  </li>
                  <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                    <span class="d-flex align-items-center font-weight-medium text-color-dark ws-nowrap text-3"><i class="icons icon-clock font-weight-bold position-relative text-3 top-1 me-2"></i> 24/7, 365</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="header-column justify-content-end col-auto px-0 d-none d-md-flex">
            <div class="header-row">
              <nav class="header-nav-top">
                <ul class="nav nav-pills">
                  <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                  <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                </ul>
                <ul class="header-social-icons social-icons social-icons-clean social-icons-icon-gray social-icons-medium custom-social-icons-divider">
                  <li class="social-icons-facebook">
                    <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="social-icons-twitter">
                    <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="social-icons-linkedin">
                    <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-container container">
      <div class="header-row">
        <div class="header-column w-100">
          <div class="header-row justify-content-between">
            <div class="header-logo z-index-2 col-lg-2 px-0">
              <a href="/">
                <img alt="GarirGarage" width="123" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="84" src="{{asset('Frontend/img/demos/auto-services/logo.png')}}">
              </a>
            </div>
            <div class="header-nav header-nav-links justify-content-end pe-lg-4 me-lg-3">
              <div class="header-nav-main header-nav-main-arrows header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1">
                <nav class="collapse">
                  <ul class="nav nav-pills" id="mainNav">
                    <li><a href="#" class="nav-link active">Home</a></li>
                    <li><a href="#" class="nav-link">About</a></li>
                    <li class="dropdown">
                      <a href="#" class="nav-link dropdown-toggle">Services</a>
                      <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Brake Repair</a></li>
                        <li><a href="#" class="dropdown-item">Check Engine</a></li>
                        <li><a href="#" class="dropdown-item">Suspension Repair</a></li>
                        <li><a href="#" class="dropdown-item">Transmission Repair</a></li>
                        <li><a href="#" class="dropdown-item">A/C Repair</a></li>
                      </ul>
                    </li>
                    <li><a href="#" class="nav-link">Products</a></li>
                    <li><a href="#" class="nav-link">Blog</a></li>
                    <li><a href="#" class="nav-link">Appointment</a></li>
                    <li><a href="#" class="nav-link">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <ul class="header-extra-info custom-left-border-1 d-none d-xl-block">
              <li class="d-none d-sm-inline-flex ms-0">
                <div class="header-extra-info-icon">
                  <i class="icons icon-phone text-3 text-color-dark position-relative top-3"></i>
                </div>
                <div class="header-extra-info-text line-height-2">
                  <span class="text-1 font-weight-semibold text-color-default">CALL US NOW</span>
                  <strong class="text-4"><a href="tel:+1234567890" class="text-color-hover-primary text-decoration-none">+123 4567 890</a></strong>
                </div>
              </li>
            </ul>
            <div class="d-flex col-auto pe-0 ps-0 ps-xl-3">
              <div class="header-nav-features ps-0 ms-1">
                <div class="header-nav-feature header-nav-features-search d-inline-flex position-relative top-3 border border-top-0 border-bottom-0 custom-remove-mobile-border-left px-4 me-2">
                  <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch">
                    <i class="icons icon-magnifier header-nav-top-icon text-5 font-weight-bold position-relative top-3"></i>
                  </a>
                  <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0" id="headerTopSearchDropdown">
                    <form role="search" action="page-search-results.html" method="get">
                      <div class="simple-search input-group">
                        <input class="form-control text-1 rounded" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                        <button class="btn" type="submit">
                          <i class="icons icon-magnifier header-nav-top-icon"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ms-2">
                  <a href="#" class="header-nav-features-toggle">
                    <img src="{{asset('Frontend/img/icons/icon-cart-big.svg')}}" height="30" alt="" class="header-nav-top-icon-img">
                    <span class="cart-info">
                      <span class="cart-qty">1</span>
                    </span>
                  </a>
                  <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                    <ol class="mini-products-list">
                      <li class="item">
                        <a href="#" title="Product Short Name" class="product-image"><img src="{{asset('Frontend/img/demos/auto-services/products/product-1.jpg')}}" alt="Product Short Name"></a>
                        <div class="product-details">
                          <p class="product-name">
                            <a href="#">Product Short Name </a>
                          </p>
                          <p class="qty-price">
                             1X <span class="price">$49</span>
                          </p>
                          <a href="#" title="Remove This Item" class="btn-remove"><i class="fas fa-times"></i></a>
                        </div>
                      </li>
                    </ol>
                    <div class="totals">
                      <span class="label">Total:</span>
                      <span class="price-total"><span class="price">$49</span></span>
                    </div>
                    <div class="actions">
                      <a class="btn btn-dark" href="#">View Cart</a>
                      <a class="btn btn-primary" href="#">Checkout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn header-btn-collapse-nav ms-4" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
              <i class="fas fa-bars"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
