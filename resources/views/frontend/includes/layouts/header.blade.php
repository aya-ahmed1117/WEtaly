<!-- HEADER START -->
<header class="site-header header-style-2 mobile-sider-drawer-menu">
    <div class="top-bar site-bg-primary">
      <div class="container">
        <div class="d-flex flex-wrap justify-content-between">
          <div class="aon-topbar-left d-flex flex-wrap">
            <ul class="aon-topbar-info d-flex flex-wrap">
              <li class="aon-tb-tagline">
                We provide <span class="text-primary">100%</span> fresh
                service to our customers.
              </li>
              <li class="aon-tb-email">Email: info.dairy@gmail.com</li>
              <li class="aon-tb-phone">Phone : +122 555 444 22</li>
            </ul>
          </div>

          <div class="aon-topbar-right d-flex flex-wrap">
            <ul class="topbar-social-icons list-unstyled m-0">
              <li>
                <a href="javascript:void(0);" class="fa fa-facebook"></a>
              </li>
              <li>
                <a href="javascript:void(0);" class="fa fa-twitter"></a>
              </li>
              <li>
                <a href="javascript:void(0);" class="fa fa-vimeo"></a>
              </li>
              <li>
                <a href="javascript:void(0);" class="fa fa-skype"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
      <div class="main-bar">
        <div class="container clearfix">
          <!--Logo section start-->
          <div class="logo-header">
            <div class="logo-header-inner logo-header-one">
              <a href="index.html">
                <img src="{{asset('assets/frontend/images/wetaly/186-removebg-preview.png')}}" alt="" />
              </a>
            </div>
          </div>
          <!--Logo section End-->

          <!-- NAV Toggle Button -->
          <button
            id="mobile-side-drawer"
            data-target=".header-nav"
            data-toggle="collapse"
            type="button"
            class="navbar-toggler collapsed">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar icon-bar-first"></span>
            <span class="icon-bar icon-bar-two"></span>
            <span class="icon-bar icon-bar-three"></span>
          </button>

          <!-- MAIN Vav -->
          <div
            class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center"
          >
            <ul class="nav navbar-nav">
              <li class="has-child current-menu-item">
                <a href="javascript:;">Home</a>
                <ul class="sub-menu">
                  <li><a href="index.html">Home 1</a></li>
                  <li><a href="index-2.html">Home 2</a></li>
                </ul>
              </li>
              <li><a href="about-1.html">About us</a></li>
              <li class="has-child">
                <a href="javascript:;">Services</a>
                <ul class="sub-menu">
                  <li><a href="service-page.html">Services</a></li>
                  <li><a href="service-detail.html">Service detail</a></li>
                </ul>
              </li>

              <li class="has-child">
                <a href="javascript:;">Pages</a>
                <ul class="sub-menu">
                  <li><a href="faq.html">Faq</a></li>
                  <li><a href="testimonials.html">Testimonial</a></li>
                  <li><a href="our-team.html">Our Team</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                </ul>
              </li>

              <li class="has-child">
                <a href="javascript:;">Product</a>
                <ul class="sub-menu">
                  <li><a href="product-grid.html">Product grid</a></li>
                  <li>
                    <a href="product-grid-sidebar.html"
                      >Product grid sidebar</a
                    >
                  </li>
                  <li>
                    <a href="product-list-sidebar.html"
                      >Product list sidebar</a
                    >
                  </li>
                  <li><a href="shop-detail.html">Shop detail</a></li>
                  <li>
                    <a href="shop-detail-sidebar.html">Shop detail</a>
                  </li>
                  <li><a href="cart.html">Cart</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                </ul>
              </li>

              <li class="has-child">
                <a href="javascript:;">Blog</a>
                <ul class="sub-menu">
                  <li><a href="blog-grid.html">Blog grid</a></li>
                  <li>
                    <a href="blog-grid-sidebar.html">Blog grid sidebar</a>
                  </li>
                  <li><a href="blog-list.html">Blog list</a></li>
                  <li><a href="blog-detail.html">Blog Detail</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>

          <!-- Header Right Section-->
          {{-- <div class="extra-nav header-2-nav">
            <div class="extra-cell">
              <!--Sign up-->
              <div class="cart-add-btn">
                <a href="#" class="aon-btn-search">
                  <i class="flaticon-search"></i>
                </a>
                <!-- SITE Search -->
               <div id="search">
                  <span class="aon-seach-close"></span>
                  <form
                    role="search"
                    id="searchform"
                    action="/search"
                    method="get"
                    class="radius-xl"
                  >
                    <input
                      class="form-control"
                      value=""
                      name="q"
                      type="search"
                      placeholder="Type to search"
                    />
                    <span class="input-group-append">
                      <button type="button" class="search-btn">
                        <i class="flaticon flaticon-search"></i>
                      </button>
                    </span>
                  </form>
                </div>
              </div>
              <!--Add Listing up-->
              <div class="cart-add-btn aon-btn-woocart">
                <span class="cart-add-pic">
                  <i class="flaticon-shopping-cart"></i>
                </span>
                <span class="cart-add-num">0</span>
              </div>
            </div>
          </div>--}}
        </div>
      </div>
    </div>
  </header>
<!-- HEADER END -->