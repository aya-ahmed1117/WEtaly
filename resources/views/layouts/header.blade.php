<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- META -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <link rel="icon" href={{asset('assets/img/wetaly/124.jpg')}} type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href={{asset('assets/img/favicon.png')}} />

    <!-- PAGE TITLE HERE -->
    <title>Milcandy Template | Home Page Style 1</title>

    <!-- MOBILE SPECIFIC -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"    />

    <!-- BOOTSTRAP STYLE SHEET -->
    <link href={{asset('assets/css/bootstrap.min.css')}} rel="stylesheet" />
    <!-- FONTAWESOME STYLE SHEET -->
    <link href={{asset('assets/css/font-awesome.min.css')}} rel="stylesheet" />
    <!-- Feather STYLE SHEET -->
    <link href={{asset('assets/css/feather.css')}} rel="stylesheet" />
    <!-- FLATICON STYLE SHEET -->
    <link href={{asset('assets/css/flaticon.min.css')}} rel="stylesheet" />
    <!-- WOW ANIMATE STYLE SHEET -->
    <link href={{asset('assets/css/animate.css')}} rel="stylesheet" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link href={{asset('assets/css/owl.carousel.min.css')}} rel="stylesheet" />
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link href={{asset('assets/css/magnific-popup.min.css')}} rel="stylesheet" />
    <!-- Lc light box popup -->
    <link href={{asset('assets/css/lc_lightbox.css')}} rel="stylesheet" />
    <!-- MAIN STYLE SHEET -->
    <link href={{asset('assets/css/style.css')}} rel="stylesheet" />

    <!-- REVOLUTION SLIDER CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset('assets/plugins/revolution/revolution/css/settings.css')}}
    />
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset('assets/plugins/revolution/revolution/css/navigation.css')}}
    />
  </head>

  <body>
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
      <div class="loading-box"></div>
      <div class="loading-pic">
        <div id="cssload-cupcake" class="cssload-box">
          <span class="cssload-letter">L</span>
          <div class="cssload-cupcakeCircle cssload-box">
            <div class="cssload-cupcakeInner cssload-box">
              <div class="cssload-cupcakeCore cssload-box"></div>
            </div>
          </div>
          <span class="cssload-letter cssload-box">A</span>
          <span class="cssload-letter cssload-box">D</span>
          <span class="cssload-letter cssload-box">I</span>
          <span class="cssload-letter cssload-box">N</span>
          <span class="cssload-letter cssload-box">G</span>
        </div>
      </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">
      <!-- HEADER START -->
      <header class="site-header header-style-2 mobile-sider-drawer-menu">
        <!--Top bar section start-->
        <div class="top-bar site-bg-primary">
          <div class="container">
            <!--Top bar left section start-->
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
              <!--Top bar right section start-->
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
        <!--Top bar section End-->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
          <div class="main-bar">
            <div class="container clearfix">
              <!--Logo section start-->
              <div class="logo-header">
                <div class="logo-header-inner logo-header-one">
                  <a href="index.html">
                    <img src={{asset('assets/img/logo.png')}} alt="" />
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
                class="navbar-toggler collapsed" >
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
              <div class="extra-nav header-2-nav">
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
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER END -->
<!-- CONTENT START -->
<div class="page-content">
    <!-- SLIDER START -->
    <div class="slider-outer">
      <div
        id="welcome_wrapper"
        class="rev_slider_wrapper fullscreen-container"
        data-alias="goodnews-header"
        data-source="gallery"
      >
        <div
          id="aon-slide-one"
          class="rev_slider fullscreenbanner"
          style="display: none"
          data-version="5.4.3.1"
        >
          <ul>
            <!-- SLIDE 1 -->
            <li
              data-index="rs-901"
              data-transition="fade"
              data-slotamount="default"
              data-hideafterloop="0"
              data-hideslideonmobile="off"
              data-easein="default"
              data-easeout="default"
              data-masterspeed="default"
              data-thumb={{asset('assets/img/main-slider/slider-1/image-1.jpg')}}
              data-rotate="0"
              data-fstransition="fade"
              data-fsmasterspeed="300"
              data-fsslotamount="7"
              data-saveperformance="off"
              data-title="Slide Title"
              data-param1="1"
              data-param2=""
              data-param3=""
              data-param4=""
              data-param5=""
              data-param6=""
              data-param7=""
              data-param8=""
              data-param9=""
              data-param10=""
              data-description=""
            >
              <!-- MAIN IMAGE -->

              <img
                src={{asset('assets/img/main-slider/slider-1/image-1.jpg')}}
                alt=""
                data-lazyload={{asset('assets/img/main-slider/slider-1/image-1.jpg')}}
                data-bgposition="center center"
                data-kenburns="on"
                data-duration="10000"
                data-ease="Power1.easeOut"
                data-scalestart="110"
                data-scaleend="100"
                data-rotatestart="0"
                data-rotateend="0"
                data-offsetstart="0 0"
                data-offsetend="0 0"
                class="rev-slidebg xyz"
                data-no-retina
              />

              <!-- LAYER NR. 1 [ for overlay ] -->
              <div
                class="tp-caption tp-shape tp-shapewrapper"
                id="slide-901-layer-1"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['0','0','0','0']"
                data-width="full"
                data-height="full"
                data-whitespace="nowrap"
                data-type="shape"
                data-basealign="slide"
                data-responsive_offset="off"
                data-responsive="off"
                data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="
                  z-index: 1;
                  background-color: rgba(255, 255, 255, 0);
                  border-color: rgba(0, 0, 0, 0);
                  border-width: 0px;
                "
              ></div>

              <!-- LAYER NR. 2 [ for title ] -->
              <div
                class="tp-caption tp-resizeme"
                id="slide-901-layer-2"
                data-x="['left','left','center','center']"
                data-hoffset="[50','50','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['-100','-100','-200','-200']"
                data-fontsize="['84','52','42','38']"
                data-lineheight="['84','52','42','38']"
                data-width="['800','600','600','480']"
                data-height="['none','none','none','none']"
                data-whitespace="['normal','normal','normal','normal']"
                data-type="text"
                data-responsive_offset="on"
                data-frames='[
                        {"from":"y:100px(R);opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                        ]'
                data-textAlign="['left','left','center','center']"
                data-paddingtop="[5,5,5,5]"
                data-paddingright="[0,0,0,20]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,20]"
                style="
                  z-index: 11;
                  white-space: normal;
                  font-weight: 900;

                  border-width: 0px;
                  font-family: 'Cormorant';
                "
              >
                <span class="site-text-white"
                  >We Provide You With All Natural Milk.</span
                >
              </div>

              <!-- LAYER NR. 3 [ for paragraph] -->
              <div
                class="tp-caption tp-resizeme"
                id="slide-901-layer-3"
                data-x="['left','left','center','center']"
                data-hoffset="['50','50','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['50','20','-70','-100']"
                data-fontsize="['19','19','18','16']"
                data-lineheight="['28','28','28','22']"
                data-width="['800','600','600','480']"
                data-height="['none','none','none','none']"
                data-whitespace="['normal','normal','normal','normal']"
                data-type="text"
                data-responsive_offset="on"
                data-frames='[
                        {"from":"y:100px(R);opacity:0;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                        ]'
                data-textAlign="['left','left','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,30]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,30]"
                style="
                  z-index: 11;
                  font-weight: 400;
                  color: #fff;
                  border-width: 0px;
                  font-family: 'Heebo', sans-serif;
                "
              >
                Nulla efficitur nulla in enim suscipit, pellentesque aliquam
                odio efficitur. In in aliquet nulla. Cras eu ex eget neque
                varius rutrum vitae id lacus. Pellentesque quis.
              </div>

              <!-- LAYER NR. 4 [ for see all service botton ] -->
              <div
                class="tp-caption tp-resizeme"
                id="slide-901-layer-4"
                data-x="['left','left','center','center']"
                data-hoffset="['50','50','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['150','150','60','0']"
                data-lineheight="['none','none','none','none']"
                data-width="['300','300','300','300']"
                data-height="['none','none','none','none']"
                data-whitespace="['normal','normal','normal','normal']"
                data-type="text"
                data-responsive_offset="on"
                data-frames='[ 
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                data-textAlign="['left','left','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 13; text-transform: uppercase"
              >
                <a href="contact-1.html" class="site-button btn-animate-one"
                  >discover More
                  <i class="btn-arrow-icon fa fa-angle-right"></i
                ></a>
              </div>

              <!-- LAYER NR. 5 [ VIDEO ICON ] -->
              <div
                class="tp-caption"
                id="slide-901-layer-5"
                data-x="['left','left','center','center']"
                data-hoffset="['350','350','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['150','150','150','100']"
                data-width="['300','300','300','300']"
                data-height="['none','none','none','none']"
                data-type="text"
                data-responsive_offset="on"
                data-frames='[ 
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":3000,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                data-textAlign="['left','left','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 14"
              >
                <div class="video-play-btn-banner-wrap white">
                  <div class="video-play-btn-banner">
                    <a
                      class="mfp-video"
                      href="https://www.youtube.com/watch?v=fgExvIUYg5w"
                      ><i class="fa fa-play"></i
                    ></a>
                    <div class="vid-text">
                      Watch Now <br />Companey Details
                    </div>
                  </div>
                </div>
              </div>

              <!-- LAYER NR. 6  Img -->
              <div
                class="tp-caption tp-resizeme"
                id="slide-901-layer-6"
                data-x="['right','right','center','center']"
                data-hoffset="['-150','0','0','0']"
                data-y="['bottom','bottom','bottom','bottom']"
                data-voffset="['120','120','50','50']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image"
                data-responsive_offset="off"
                data-frames='[{"from":"x:right;","speed":1200,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                data-textAlign="['right','right','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 13; border-width: 0px"
              >
                <div class="animate-v">
                  <img
                    src={{asset('assets/img/main-slider/slider-1/milk.png')}}
                    alt=""
                    data-ww="['491px','380px','150px','150px']"
                    data-hh="['580px','449px','175px','175px']"
                    width="537"
                    height="691"
                    data-no-retina
                  />
                </div>
              </div>

              <!-- LAYER NR. 7  Img Cow -->
              <div
                class="tp-caption tp-resizeme"
                id="slide-901-layer-7"
                data-x="['left','left','center','center']"
                data-hoffset="['-250','0','0','0']"
                data-y="['bottom','bottom','bottom','bottom']"
                data-voffset="['0','0','0','0']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-basealign="slide"
                data-type="image"
                data-responsive_offset="off"
                data-frames='[{"from":"x:left;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                data-textAlign="['right','right','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 1; border-width: 0px"
              >
                <div class="aon-banner-top-left-pic">
                  <img src={{asset('assets/img/main-slider/slider-1/cow.png')}} alt="" />
                  <div class="aon-banner-top-left-circle animte-plus"></div>
                </div>
              </div>
            </li>

            <!-- SLIDE 2 -->
            <li
              data-index="rs-902"
              data-transition="fade"
              data-slotamount="default"
              data-hideafterloop="0"
              data-hideslideonmobile="off"
              data-easein="default"
              data-easeout="default"
              data-masterspeed="default"
              data-thumb={{asset('assets/img/main-slider/slider-2/image-2.jpg')}}
              data-rotate="0"
              data-fstransition="fade"
              data-fsmasterspeed="300"
              data-fsslotamount="7"
              data-saveperformance="off"
              data-title="Slide Title"
              data-param1="1"
              data-param2=""
              data-param3=""
              data-param4=""
              data-param5=""
              data-param6=""
              data-param7=""
              data-param8=""
              data-param9=""
              data-param10=""
              data-description=""
            >
              <!-- MAIN IMAGE -->

              <img
                src={{asset('assets/img/main-slider/slider-1/image-2.jpg')}}
                alt=""
                data-lazyload={{asset('assets/img/main-slider/slider-1/image-2.jpg')}}
                data-bgposition="center center"
                data-kenburns="on"
                data-duration="10000"
                data-ease="Power1.easeOut"
                data-scalestart="110"
                data-scaleend="100"
                data-rotatestart="0"
                data-rotateend="0"
                data-offsetstart="0 0"
                data-offsetend="0 0"
                class="rev-slidebg xyz"
                data-no-retina
              />

              <!-- LAYER NR. 1 [ for overlay ] -->
              <div
                class="tp-caption tp-shape tp-shapewrapper"
                id="slide-902-layer-1"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['0','0','0','0']"
                data-width="full"
                data-height="full"
                data-whitespace="nowrap"
                data-type="shape"
                data-basealign="slide"
                data-responsive_offset="off"
                data-responsive="off"
                data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="
                  z-index: 1;
                  background-color: rgba(255, 255, 255, 0);
                  border-color: rgba(0, 0, 0, 0);
                  border-width: 0px;
                "
              ></div>

              <!-- LAYER NR. 2 [ for title ] -->
              <div
                class="tp-caption tp-resizeme"
                id="slide-902-layer-2"
                data-x="['left','left','center','center']"
                data-hoffset="[50','50','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['-100','-100','-200','-200']"
                data-fontsize="['84','52','42','38']"
                data-lineheight="['84','52','42','38']"
                data-width="['800','600','600','480']"
                data-height="['none','none','none','none']"
                data-whitespace="['normal','normal','normal','normal']"
                data-type="text"
                data-responsive_offset="on"
                data-frames='[
                        {"from":"y:100px(R);opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                        ]'
                data-textAlign="['left','left','center','center']"
                data-paddingtop="[5,5,5,5]"
                data-paddingright="[0,0,0,20]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,20]"
                style="
                  z-index: 11;
                  white-space: normal;
                  font-weight: 900;

                  border-width: 0px;
                  font-family: 'Cormorant';
                "
              >
                <span class="site-text-white"
                  >We Provide You With All Natural Milk.</span
                >
              </div>

              <!-- LAYER NR. 3 [ for paragraph] -->
              <div
                class="tp-caption tp-resizeme"
                id="slide-902-layer-3"
                data-x="['left','left','center','center']"
                data-hoffset="['50','50','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['50','20','-70','-100']"
                data-fontsize="['19','19','18','16']"
                data-lineheight="['28','28','28','22']"
                data-width="['800','600','600','480']"
                data-height="['none','none','none','none']"
                data-whitespace="['normal','normal','normal','normal']"
                data-type="text"
                data-responsive_offset="on"
                data-frames='[
                        {"from":"y:100px(R);opacity:0;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                        ]'
                data-textAlign="['left','left','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,30]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,30]"
                style="
                  z-index: 11;
                  font-weight: 400;
                  color: #fff;
                  border-width: 0px;
                  font-family: 'Heebo', sans-serif;
                "
              >
                Nulla efficitur nulla in enim suscipit, pellentesque aliquam
                odio efficitur. In in aliquet nulla. Cras eu ex eget neque
                varius rutrum vitae id lacus. Pellentesque quis.
              </div>

              <!-- LAYER NR. 4 [ for see all service botton ] -->
              <div
                class="tp-caption tp-resizeme"
                id="slide-902-layer-4"
                data-x="['left','left','center','center']"
                data-hoffset="['50','50','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['150','150','60','0']"
                data-lineheight="['none','none','none','none']"
                data-width="['300','300','300','300']"
                data-height="['none','none','none','none']"
                data-whitespace="['normal','normal','normal','normal']"
                data-type="text"
                data-responsive_offset="on"
                data-frames='[ 
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                data-textAlign="['left','left','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 13; text-transform: uppercase"
              >
                <a href="contact-1.html" class="site-button btn-animate-one"
                  >discover More
                  <i class="btn-arrow-icon fa fa-angle-right"></i
                ></a>
              </div>

              <!-- LAYER NR. 5 [ VIDEO ICON ] -->
              <div
                class="tp-caption"
                id="slide-902-layer-5"
                data-x="['left','left','center','center']"
                data-hoffset="['350','350','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['150','150','150','100']"
                data-width="['300','300','300','300']"
                data-height="['none','none','none','none']"
                data-type="text"
                data-responsive_offset="on"
                data-frames='[ 
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":3000,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 14"
              >
                <div class="video-play-btn-banner-wrap white">
                  <div class="video-play-btn-banner">
                    <a
                      class="mfp-video"
                      href="https://www.youtube.com/watch?v=fgExvIUYg5w"
                      ><i class="fa fa-play"></i
                    ></a>
                    <div class="vid-text">
                      Watch Now <br />Companey Details
                    </div>
                  </div>
                </div>
              </div>

              <!-- LAYER NR. 6  Img -->
              <div
                class="tp-caption tp-resizeme"
                id="slide-902-layer-6"
                data-x="['right','right','center','center']"
                data-hoffset="['-150','0','0','0']"
                data-y="['bottom','bottom','bottom','bottom']"
                data-voffset="['120','120','50','50']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image"
                data-responsive_offset="off"
                data-frames='[{"from":"x:right;","speed":1200,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                data-textAlign="['right','right','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 13; border-width: 0px"
              >
                <div class="animate-v">
                  <img
                    src={{asset('assets/img/main-slider/slider-1/milk.png')}}
                    alt=""
                    data-ww="['491px','380px','150px','150px']"
                    data-hh="['580px','449px','175px','175px']"
                    width="537"
                    height="691"
                    data-no-retina
                  />
                </div>
              </div>

              <!-- LAYER NR. 7  Img Cow -->
              <div
                class="tp-caption tp-resizeme"
                id="slide-902-layer-7"
                data-x="['left','left','center','center']"
                data-hoffset="['-100','0','0','0']"
                data-y="['bottom','bottom','bottom','bottom']"
                data-voffset="['0','0','0','0']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-basealign="slide"
                data-type="image"
                data-responsive_offset="off"
                data-frames='[{"from":"x:left;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                data-textAlign="['left','left','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 1; border-width: 0px"
              >
                <div class="aon-banner-top-left-pic">
                  <img src={{asset('assets/img/main-slider/slider-1/cow2.png')}} alt="" />
                  <div class="aon-banner-top-left-circle animte-plus"></div>
                </div>
              </div>
            </li>
          </ul>
          <div
            class="tp-bannertimer tp-bottom"
            style="visibility: hidden !important"
          ></div>
        </div>
      </div>
    </div>
    <!-- SLIDER END -->