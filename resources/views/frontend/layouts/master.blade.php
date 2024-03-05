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

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('assets/frontend/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Home Page</title>

    <!-- MOBILE SPECIFIC -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- BOOTSTRAP STYLE SHEET -->
    <link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLE SHEET -->
    <link href="{{asset('assets/frontend/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Feather STYLE SHEET -->
    <link href="{{asset('assets/frontend/css/feather.css')}}" rel="stylesheet" />
    <!-- FLATICON STYLE SHEET -->
    <link href="{{asset('assets/frontend/css/flaticon.min.css')}}" rel="stylesheet" />
    <!-- WOW ANIMATE STYLE SHEET -->
    <link href="{{asset('assets/frontend/css/animate.css')}}" rel="stylesheet" />
    <!-- WOW CAROUSEL STYLE SHEET -->
    <link href="{{asset('assets/frontend/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link href="{{asset('assets/frontend/css/magnific-popup.min.css')}}" rel="stylesheet" />
    <!-- Lc light box popup -->
    <link href="{{asset('assets/frontend/css/lc_lightbox.css')}}" rel="stylesheet" />
    <!-- MAIN STYLE SHEET -->
    <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet" />
    <!-- REVOLUTION SLIDER CSS -->

    <!-- REVOLUTION SLIDER CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/frontend/plugins/revolution/revolution/css/settings.css')}}"
    />
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/frontend/plugins/revolution/revolution/css/navigation.css')}}"
    />
  </head>

  <body>
    <!-- LOADING AREA START ===== -->
    @include('frontend.partials.layouts.loading')
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">
      
      @include('frontend.partials.layouts.header')
     

      <!-- CONTENT START -->
      <div class="page-content">
        <!-- SLIDER START -->
        @include('frontend.partials.layouts.sidebar')
        <!-- SLIDER END -->

        <!-- About Section -->
        <section class="aon-about-area">
          <div class="site-top-line"></div>
          <div class="container">
            <!--Title Section Start-->
            <div class="section-head center">
              <span class="aon-sub-icon"
                ><img src="{{asset('assets/frontend/images/icon.')}}png" alt=""
              /></span>
              <h2 class="aon-title aon-title-line">
                Welcome to <span>Milcandy</span> Farm
              </h2>
              <p>
                Fusce sollicitudin eros id ex maximus gravida non vitae ante.
                Cras ac mi a dolor suscipit rutrum ut vitae mi. Morbi eget magna
                mauris. Pellentesque id ornare augue. Duis dictum dui quis neque
                fringilla, in dignissim purus sodales. Etiam volutpat mattis t
                urpis
              </p>
            </div>
            <!--Title Section End-->

            <div class="section-content">
              <div
                class="about-year-top d-flex justify-content-center align-items-center"
              >
                <div class="about-year-since">Since 1975</div>
                <div class="about-year-pic">
                  <img src="{{asset('assets/frontend/images/about.png')}}" alt="" />
                </div>
                <div class="about-year-sign">
                  <img src="{{asset('assets/frontend/images/sign.png')}}" alt="" />
                </div>
              </div>

              <div class="aon-med-team-section m-t50">
                <div class="row">
                  <!-- Column 1 -->
                  <div
                    class="col-lg-3 col-md-6 wow fadeInDown"
                    data-wow-duration="1000ms"
                  >
                    <div class="aon-about-box aon-icon-effect">
                      <div class="aon-about-icon">
                        <i class="flaticon-milk-2 aon-icon"></i>
                      </div>
                      <div class="aon-about-circle"></div>
                      <h4 class="aon-about-title">Milk Online Sales System.</h4>
                      <p class="aon-about-text">
                        Mauris iaculis urna eget est euismod, in auctor dui
                        porta. Mauris non porta lacus.
                      </p>
                      <a class="aon-about-btn" href="javascript:;"
                        ><i class="fa fa-angle-right"></i
                      ></a>
                    </div>
                  </div>
                  <!-- Column 2 -->
                  <div
                    class="col-lg-3 col-md-6 wow fadeInDown"
                    data-wow-duration="2000ms"
                  >
                    <div class="aon-about-box aon-icon-effect">
                      <div class="aon-about-icon">
                        <i class="flaticon-fruit aon-icon"></i>
                      </div>
                      <div class="aon-about-circle"></div>
                      <h4 class="aon-about-title">Milk Online Sales System.</h4>
                      <p class="aon-about-text">
                        Mauris iaculis urna eget est euismod, in auctor dui
                        porta. Mauris non porta lacus.
                      </p>
                      <a class="aon-about-btn" href="javascript:;"
                        ><i class="fa fa-angle-right"></i
                      ></a>
                    </div>
                  </div>
                  <!-- Column 3 -->
                  <div
                    class="col-lg-3 col-md-6 wow fadeInDown"
                    data-wow-duration="3000ms"
                  >
                    <div class="aon-about-box aon-icon-effect">
                      <div class="aon-about-icon">
                        <i class="flaticon-paint-palette aon-icon"></i>
                      </div>
                      <div class="aon-about-circle"></div>
                      <h4 class="aon-about-title">Milk Online Sales System.</h4>
                      <p class="aon-about-text">
                        Mauris iaculis urna eget est euismod, in auctor dui
                        porta. Mauris non porta lacus.
                      </p>
                      <a class="aon-about-btn" href="javascript:;"
                        ><i class="fa fa-angle-right"></i
                      ></a>
                    </div>
                  </div>
                  <!-- Column 4 -->
                  <div
                    class="col-lg-3 col-md-6 wow fadeInDown"
                    data-wow-duration="4000ms"
                  >
                    <div class="aon-about-box aon-icon-effect">
                      <div class="aon-about-icon">
                        <i class="flaticon-dairy-products aon-icon"></i>
                      </div>
                      <div class="aon-about-circle"></div>
                      <h4 class="aon-about-title">Milk Online Sales System.</h4>
                      <p class="aon-about-text">
                        Mauris iaculis urna eget est euismod, in auctor dui
                        porta. Mauris non porta lacus.
                      </p>
                      <a class="aon-about-btn" href="javascript:;"
                        ><i class="fa fa-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--Welcome Pic Circle-->
            <div class="aon-welcome-pic animate-v">
              <img src="{{asset('assets/frontend/images/circle-pic.png')}}" alt="" />
            </div>
          </div>
          <div class="site-bot-line"></div>
        </section>
        <!-- About Section End -->

        <!-- About 2 Section -->
        <section class="aon-about-area">
          <div class="container">
            <div class="section-content">
              <div class="row">
                <!-- Column 1 -->
                <div class="col-lg-6">
                  <div
                    class="aon-product-left2 wow fadeInDown"
                    data-wow-duration="2000ms"
                  >
                    <div class="aon-pro-pic">
                      <img src="{{asset('assets/frontend/images/about2.png')}}" alt="" />
                      <div class="aon-pro-get-to d-flex align-items-center">
                        <div class="aon-pro-get-left">
                          <span>Call to get us.</span>
                          <strong>+880 916 3266</strong>
                        </div>
                        <div class="aon-pro-get-right">
                          <div class="aon-pro-get-icon">
                            <i class="flaticon-telephone"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column 2 -->
                <div class="col-lg-6">
                  <div
                    class="aon-product-right2 wow fadeInDown"
                    data-wow-duration="2000ms"
                  >
                    <span class="aon-sub-title">Why Choose Us ?</span>
                    <h2 class="aon-pro-title">
                      We are very skilled in dairy farming.
                    </h2>
                    <div class="aon-pro-tagline2">
                      Duis a pellentesque velit, et amet sodales lacus. Etiam
                      lobortis ligula vel enim pellentesque
                    </div>
                    <p>
                      Nullam et neque luctus lacus feugiat mattis ac id risus.
                      In ut pulvinar quam. Integer suscipit non massa quis
                      eleifend. Aliquam eu lobortis nibh, in venenatis tortor.
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Maecenas nunc justo, laoreet non orci nec, maximus
                      interdum massa. Mauris quis blandit ex. Mauris laoreet
                      libero nisl, vel massa, in pellentesque erat aliquet sed.
                    </p>
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="aon-pro-box">
                          <div class="aon-pro-icon">
                            <i class="flaticon-fruit aon-icon"></i>
                          </div>
                          <h4 class="aon-pro-title2">Organic <br />Food.</h4>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="aon-pro-box">
                          <div class="aon-pro-icon">
                            <i class="flaticon-milk-1 aon-icon"></i>
                          </div>
                          <h4 class="aon-pro-title2">Natural <br />Milk..</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="site-bot-line"></div>
        </section>

        <!-- About 2 Section -->
        <section
          class="aon-vodeo-area position-relative"
          style="background-image: url({{asset('assets/frontend/images/background/bg1.jpg)')}}"
        >
          <div class="aon-overlay-area"></div>
          <div class="container">
            <!--Title Section Start-->
            <div class="aon-vodeo-section text-center">
              <h2 class="aon-vodeo-title">Dairy Farm Matters To The Future.</h2>
              <div class="play-now-statice">
                <a
                  href="https://www.youtube.com/watch?v=c1XNqw2gSbU"
                  class="mfp-video play-now-video play-now-statice"
                >
                  <i class="icon fa fa-play"></i>
                  <span class="ripple"></span>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- Video Section End -->

        <!-- Services Section -->
        <section class="aon-service-area">
          <div class="site-top-line"></div>
          <div class="container">
            <!--Title Section Start-->
            <div class="section-head center">
              <span class="aon-sub-title">Our Great Services</span>
              <h2 class="aon-title">Services we Offer</h2>
            </div>
            <!--Title Section End-->

            <div class="section-content">
              <div class="aon-service-section">
                <div class="owl-carousel aon-services-slider aon-owl-arrow">
                  <!-- COLUMNS 1 -->
                  <div class="item">
                    <div
                      class="aon-service-box shine-hover wow fadeInDown"
                      data-wow-duration="2000ms"
                    >
                      <div class="aon-service-content">
                        <h4 class="aon-service-title">Oraganic Butter</h4>
                        <p>
                          Mauris iaculis urna eget est euismod, in auctor dui
                          porta. Mauris non porta lacus. Mauris non porta lacus.
                        </p>
                      </div>
                      <div class="aon-service-pic shine-box">
                        <img src="{{asset('assets/frontend/images/services/img1.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- COLUMNS 2 -->
                  <div class="item">
                    <div
                      class="aon-service-box shine-hover wow fadeInDown"
                      data-wow-duration="3000ms"
                    >
                      <div class="aon-service-content">
                        <h4 class="aon-service-title">Oraganic Butter</h4>
                        <p>
                          Mauris iaculis urna eget est euismod, in auctor dui
                          porta. Mauris non porta lacus. Mauris non porta lacus.
                        </p>
                      </div>
                      <div class="aon-service-pic shine-box">
                        <img src="{{asset('assets/frontend/images/services/img2.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- COLUMNS 3 -->
                  <div class="item">
                    <div
                      class="aon-service-box wow fadeInDown"
                      data-wow-duration="2000ms"
                    >
                      <div class="aon-service-content">
                        <h4 class="aon-service-title">Oraganic Butter</h4>
                        <p>
                          Mauris iaculis urna eget est euismod, in auctor dui
                          porta. Mauris non porta lacus. Mauris non porta lacus.
                        </p>
                      </div>
                      <div class="aon-service-pic">
                        <img src="{{asset('assets/frontend/images/services/img3.png')}}" alt="" />
                      </div>
                    </div>
                  </div>

                  <!-- COLUMNS 4 -->
                  <div class="item">
                    <div
                      class="aon-service-box shine-hover wow fadeInDown"
                      data-wow-duration="3000ms"
                    >
                      <div class="aon-service-content">
                        <h4 class="aon-service-title">Oraganic Butter</h4>
                        <p>
                          Mauris iaculis urna eget est euismod, in auctor dui
                          porta. Mauris non porta lacus. Mauris non porta lacus.
                        </p>
                      </div>
                      <div class="aon-service-pic shine-box">
                        <img src="{{asset('assets/frontend/images/services/img1.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- COLUMNS 5 -->
                  <div class="item">
                    <div
                      class="aon-service-box shine-hover wow fadeInDown"
                      data-wow-duration="2000ms"
                    >
                      <div class="aon-service-content">
                        <h4 class="aon-service-title">Oraganic Butter</h4>
                        <p>
                          Mauris iaculis urna eget est euismod, in auctor dui
                          porta. Mauris non porta lacus. Mauris non porta lacus.
                        </p>
                      </div>
                      <div class="aon-service-pic shine-box">
                        <img src="{{asset('assets/frontend/images/services/img2.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- COLUMNS 6 -->
                  <div class="item">
                    <div
                      class="aon-service-box shine-hover wow fadeInDown"
                      data-wow-duration="3000ms"
                    >
                      <div class="aon-service-content">
                        <h4 class="aon-service-title">Oraganic Butter</h4>
                        <p>
                          Mauris iaculis urna eget est euismod, in auctor dui
                          porta. Mauris non porta lacus. Mauris non porta lacus.
                        </p>
                      </div>
                      <div class="aon-service-pic shine-box">
                        <img src="{{asset('assets/frontend/images/services/img3.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="site-bot-line"></div>
        </section>
        <!-- Services Section End -->

        <!-- Pricing Section -->
        <section
          class="aon-pricing-area"
          style="background-image: url({{asset('assets/frontend/images/about-bg.png)')}}"
        >
          <div
            class="aone-bg-cow"
            style="background-image: url({{asset('assets/frontend/images/cow.png)')}}"
          ></div>
          <div class="container">
            <!--counter-->
            <div
              class="aon-count-area wow fadeInDown"
              data-wow-duration="2000ms"
            >
              <div class="aon-count-area-mid">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="aon-count-area-block">
                      <div class="counter-area">
                        <span class="counter">2.5</span>+
                      </div>
                      <h4 class="aon-static-name">Happy Client</h4>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="aon-count-area-block">
                      <div class="counter-area">
                        <span class="counter">269</span>+
                      </div>
                      <h4 class="aon-static-name">Total Project</h4>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="aon-count-area-block">
                      <div class="counter-area">
                        <span class="counter">65</span>+
                      </div>
                      <h4 class="aon-static-name">Award Winner</h4>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="aon-count-area-block">
                      <div class="counter-area">
                        <span class="counter">25</span>+
                      </div>
                      <h4 class="aon-static-name">Branch Shor</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--Pricing-->
            <div class="pricing-block-outer">
              <!--Title Section Start-->
              <div class="section-head center">
                <span class="aon-sub-title">Pricing Table</span>
                <h2 class="aon-title">Our Best Package</h2>
              </div>
              <!--Title Section End-->

              <div class="section-content">
                <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 m-b30">
                    <div
                      class="aon-pricing-box wow fadeInDown"
                      data-wow-duration="2000ms"
                    >
                      <div class="aon-pricing-top">
                        <div class="aon-price-left">
                          <h4 class="aon-p-title">Daily Package</h4>
                          <div class="p-price">$06<span>/L</span></div>
                        </div>
                        <div class="aon-price-right">
                          <i class="flaticon-milk-1"></i>
                        </div>
                      </div>

                      <div class="aon-pricing-list">
                        <ul>
                          <li>Getting always liquid raw milk</li>
                          <li>Here all kinds of natural products</li>
                          <li>You can get all our products online</li>
                          <li class="disable">
                            We always have packet products
                          </li>
                          <li class="disable">
                            Organic foods are well processed
                          </li>
                        </ul>
                      </div>
                      <div class="aon-pricing-btn">
                        <a href="about-1.html" class="site-button-link"
                          >Buy Now<i
                            class="btn-arrow-icon fa fa-angle-right"
                          ></i
                        ></a>
                      </div>
                      <div class="circle-bg">
                        <div class="aon-icon-circle"></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 aon-pricing-box-active m-b30">
                    <div
                      class="aon-pricing-box wow fadeInDown"
                      data-wow-duration="2000ms"
                    >
                      <div class="aon-pricing-top">
                        <div class="aon-price-left">
                          <h4 class="aon-p-title">Daily Package</h4>
                          <div class="p-price">$07<span>/L</span></div>
                        </div>
                        <div class="aon-price-right">
                          <i class="flaticon-milk-2"></i>
                        </div>
                      </div>

                      <div class="aon-pricing-list">
                        <ul>
                          <li>Getting always liquid raw milk</li>
                          <li>Here all kinds of natural products</li>
                          <li>You can get all our products online</li>
                          <li class="disable">
                            We always have packet products
                          </li>
                          <li class="disable">
                            Organic foods are well processed
                          </li>
                        </ul>
                      </div>
                      <div class="aon-pricing-btn">
                        <a href="about-1.html" class="site-button-link"
                          >Buy Now<i
                            class="btn-arrow-icon fa fa-angle-right"
                          ></i
                        ></a>
                      </div>
                      <div class="circle-bg">
                        <div class="aon-icon-circle"></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 m-b30">
                    <div
                      class="aon-pricing-box wow fadeInDown"
                      data-wow-duration="2000ms"
                    >
                      <div class="aon-pricing-top">
                        <div class="aon-price-left">
                          <h4 class="aon-p-title">Daily Package</h4>
                          <div class="p-price">$09<span>/L</span></div>
                        </div>
                        <div class="aon-price-right">
                          <i class="flaticon-milk-box"></i>
                        </div>
                      </div>

                      <div class="aon-pricing-list">
                        <ul>
                          <li>Getting always liquid raw milk</li>
                          <li>Here all kinds of natural products</li>
                          <li>You can get all our products online</li>
                          <li class="disable">
                            We always have packet products
                          </li>
                          <li class="disable">
                            Organic foods are well processed
                          </li>
                        </ul>
                      </div>
                      <div class="aon-pricing-btn">
                        <a href="about-1.html" class="site-button-link"
                          >Buy Now<i
                            class="btn-arrow-icon fa fa-angle-right"
                          ></i
                        ></a>
                      </div>
                      <div class="circle-bg">
                        <div class="aon-icon-circle"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--testimonial-->
            <div class="aon-testi-area1">
              <div
                class="aon-testi-area-section wow fadeInDown"
                data-wow-duration="2000ms"
              >
                <div class="owl-carousel aon-testi-one-carousel aon-owl-arrow">
                  <!-- COLUMNS 1 -->
                  <div class="item">
                    <div class="aon-testi-block text-center">
                      <div class="aon-testi-block-quote">
                        <img src="{{asset('assets/frontend/images/quote.png')}}" alt="" />
                      </div>
                      <h3 class="aon-testi-talk">
                        Nulla efficitur nulla in enim suscipit, pellentesque
                        aliquam nulla. Cras eu ex eget quis am on neque varius
                        rutrum vitae amet on id lacus.
                      </h3>
                      <div class="aon-df2-rating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star text-gray"></span>
                        <span class="fa fa-star text-gray"></span>
                      </div>
                      <div class="aon-testi-block-name">Madison Hazel</div>
                      <div class="aon-testi-block-position">
                        Owner Of Business & President.
                      </div>
                    </div>
                  </div>
                  <!-- COLUMNS 2 -->
                  <div class="item">
                    <div class="aon-testi-block text-center">
                      <div class="aon-testi-block-quote">
                        <img src="{{asset('assets/frontend/images/quote.png')}}" alt="" />
                      </div>
                      <h3 class="aon-testi-talk">
                        Nulla efficitur nulla in enim suscipit, pellentesque
                        aliquam nulla. Cras eu ex eget quis am on neque varius
                        rutrum vitae amet on id lacus.
                      </h3>
                      <div class="aon-df2-rating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star text-gray"></span>
                        <span class="fa fa-star text-gray"></span>
                      </div>
                      <div class="aon-testi-block-name">Madison Hazel</div>
                      <div class="aon-testi-block-position">
                        Owner Of Business & President.
                      </div>
                    </div>
                  </div>
                  <!-- COLUMNS 3 -->
                  <div class="item">
                    <div class="aon-testi-block text-center">
                      <div class="aon-testi-block-quote">
                        <img src="{{asset('assets/frontend/images/quote.png')}}" alt="" />
                      </div>
                      <h3 class="aon-testi-talk">
                        Nulla efficitur nulla in enim suscipit, pellentesque
                        aliquam nulla. Cras eu ex eget quis am on neque varius
                        rutrum vitae amet on id lacus.
                      </h3>
                      <div class="aon-df2-rating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star text-gray"></span>
                        <span class="fa fa-star text-gray"></span>
                      </div>
                      <div class="aon-testi-block-name">Madison Hazel</div>
                      <div class="aon-testi-block-position">
                        Owner Of Business & President.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Pricing Section End -->

        <!-- Team Section -->
        <section class="aon-team2-area">
          <div class="site-top-line"></div>
          <div class="container">
            <!--Title Section Start-->
            <div class="section-head center">
              <span class="aon-sub-title">Our Great Teem</span>
              <h2 class="aon-title">Meet Our Farmer</h2>
            </div>
            <!--Title Section End-->

            <div class="section-content">
              <div class="aon-team-section">
                <div class="row">
                  <!-- Column 1 -->
                  <div class="col-lg-4 col-md-6">
                    <div
                      class="aon-team-box text-center wow fadeInDown"
                      data-wow-duration="1000ms"
                    >
                      <div class="aon-team-pic">
                        <img src="{{asset('assets/frontend/images/team/pic1.png')}}" alt="" />
                        <div class="aon-team-social">
                          <i class="aon-social-circle feather-plus"></i>
                          <div class="social-icons">
                            <a class="social-icon social-icon--twitter">
                              <i class="fa fa-twitter"></i>
                              <div class="tooltip">Twitter</div>
                            </a>
                            <a class="social-icon social-icon--linkedin">
                              <i class="fa fa-linkedin"></i>
                              <div class="tooltip">LinkedIn</div>
                            </a>
                            <a class="social-icon social-icon--facebook">
                              <i class="fa fa-facebook"></i>
                              <div class="tooltip">Facebook</div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <h4 class="aon-team-name">Daniel Samuel</h4>
                      <span class="aon-team-positopn"
                        >Field Farmer Maintanancer</span
                      >
                    </div>
                  </div>
                  <!-- Column 2 -->
                  <div class="col-lg-4 col-md-6">
                    <div
                      class="aon-team-box text-center wow fadeInDown"
                      data-wow-duration="2000ms"
                    >
                      <div class="aon-team-pic">
                        <img src="{{asset('assets/frontend/images/team/pic2.png')}}" alt="" />
                        <div class="aon-team-social">
                          <i class="aon-social-circle feather-plus"></i>
                          <div class="social-icons">
                            <a class="social-icon social-icon--twitter">
                              <i class="fa fa-twitter"></i>
                              <div class="tooltip">Twitter</div>
                            </a>
                            <a class="social-icon social-icon--linkedin">
                              <i class="fa fa-linkedin"></i>
                              <div class="tooltip">LinkedIn</div>
                            </a>
                            <a class="social-icon social-icon--facebook">
                              <i class="fa fa-facebook"></i>
                              <div class="tooltip">Facebook</div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <h4 class="aon-team-name">Daniel Samuel</h4>
                      <span class="aon-team-positopn"
                        >Field Farmer Maintanancer</span
                      >
                    </div>
                  </div>
                  <!-- Column 3 -->
                  <div
                    class="col-lg-4 col-md-6 wow fadeInDown"
                    data-wow-duration="3000ms"
                  >
                    <div class="aon-team-box text-center">
                      <div class="aon-team-pic">
                        <img src="{{asset('assets/frontend/images/team/pic3.png')}}" alt="" />
                        <div class="aon-team-social">
                          <i class="aon-social-circle feather-plus"></i>
                          <div class="social-icons">
                            <a class="social-icon social-icon--twitter">
                              <i class="fa fa-twitter"></i>
                              <div class="tooltip">Twitter</div>
                            </a>
                            <a class="social-icon social-icon--linkedin">
                              <i class="fa fa-linkedin"></i>
                              <div class="tooltip">LinkedIn</div>
                            </a>
                            <a class="social-icon social-icon--facebook">
                              <i class="fa fa-facebook"></i>
                              <div class="tooltip">Facebook</div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <h4 class="aon-team-name">Daniel Samuel</h4>
                      <span class="aon-team-positopn"
                        >Field Farmer Maintanancer</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="aon-insta-gallery">
            <div class="row">
              <!--block 1-->
              <div class="col-lg-4 col-md-6">
                <div
                  class="aon-insta-block wow fadeInDown"
                  data-wow-duration="1000ms"
                >
                  <img src="{{asset('assets/frontend/images/insta-gallery/img-1.png')}}" alt="" />
                  <div class="aon-insta-overlay">
                    <a
                      class="elem"
                      href="images/insta-gallery/img-1.png"
                      title="Nh-16 Highway Bridge"
                      data-lcl-thumb="images/insta-gallery/img-1.png"
                    >
                      <i class="feather-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!--block 2-->
              <div class="col-lg-4 col-md-6">
                <div
                  class="aon-insta-block wow fadeInDown"
                  data-wow-duration="2000ms"
                >
                  <img src="{{asset('assets/frontend/images/insta-gallery/img-2.png')}}" alt="" />
                  <div class="aon-insta-overlay">
                    <a
                      class="elem"
                      href="images/insta-gallery/img-2.png"
                      title="Nh-16 Highway Bridge"
                      data-lcl-thumb="images/insta-gallery/img-2.png"
                    >
                      <i class="feather-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!--block 3-->
              <div class="col-lg-4 col-md-6">
                <div
                  class="aon-insta-block wow fadeInDown"
                  data-wow-duration="3000ms"
                >
                  <img src="{{asset('assets/frontend/images/insta-gallery/img-3.png')}}" alt="" />
                  <div class="aon-insta-overlay">
                    <a
                      class="elem"
                      href="images/insta-gallery/img-3.png"
                      title="Nh-16 Highway Bridge"
                      data-lcl-thumb="images/insta-gallery/img-3.png"
                    >
                      <i class="feather-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="site-bot-line"></div>
        </section>
        <!-- Team Section End -->

        <!-- Blog Section -->
        <section
          class="aon-blog-area"
          style="background-image: url({{asset('assets/frontend/images/about-bg.png)')}}"
        >
          <div
            class="aone-bg-cow-lb"
            style="background-image: url({{asset('assets/frontend/images/cow.png)')}}"
          ></div>
          <div
            class="aone-bg-cow-tr"
            style="background-image: url({{asset('assets/frontend/images/cow-small.png)')}}"
          ></div>
          <div class="container">
            <div class="section-content">
              <!--Title Section Start-->
              <div class="section-head center">
                <span class="aon-sub-title">News and blogs</span>
                <h2 class="aon-title">Our Latest News</h2>
              </div>
              <!--Title Section End-->

              <div class="aon-farm-blog-section">
                <div class="row d-flex justify-content-center">
                  <!-- COLUMNS 1 -->
                  <div class="col-lg-4 col-md-6">
                    <div
                      class="aon-farm-blog-1 shine-hover wow fadeInDown"
                      data-wow-duration="2000ms"
                    >
                      <div class="post-bx">
                        <div class="post-thum shine-box">
                          <img
                            title="title"
                            alt=""
                            src="images/blog/blog-grid/img-1.jpg"
                          />
                        </div>
                        <div class="post-info">
                          <div class="aon-post-date">
                            <i class="flaticon-calendar-1"></i>
                            <span class="date-dd">18</span>
                            <span class="date-mm">Aug,</span>
                            <span class="date-yy">2022</span>
                          </div>

                          <div class="post-text">
                            <h4 class="post-title">
                              <a href="blog-detail.html"
                                >Farm improvement depends on Their farm plan.</a
                              >
                            </h4>
                          </div>

                          <div class="post-meta">
                            <ul>
                              <li class="post-author">
                                <img
                                  src="images/blog/blog-grid/thumb/thumb-1.png"
                                  alt=""
                                />
                                By <a href="#">Creativemela</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- COLUMNS 2 -->
                  <div class="col-lg-4 col-md-6">
                    <div
                      class="aon-farm-blog-1 shine-hover wow fadeInDown"
                      data-wow-duration="2000ms"
                    >
                      <div class="post-bx">
                        <div class="post-thum shine-box">
                          <img
                            title="title"
                            alt=""
                            src="images/blog/blog-grid/img-2.jpg"
                          />
                        </div>
                        <div class="post-info">
                          <div class="aon-post-date">
                            <i class="flaticon-calendar-1"></i>
                            <span class="date-dd">18</span>
                            <span class="date-mm">Aug,</span>
                            <span class="date-yy">2022</span>
                          </div>

                          <div class="post-text">
                            <h4 class="post-title">
                              <a href="blog-detail.html"
                                >We are keen to give you Origin natural
                                products.</a
                              >
                            </h4>
                          </div>

                          <div class="post-meta">
                            <ul>
                              <li class="post-author">
                                <img
                                  src="images/blog/blog-grid/thumb/thumb-2.png"
                                  alt=""
                                />
                                By <a href="#">Creativemela</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- COLUMNS 3 -->
                  <div class="col-lg-4 col-md-6">
                    <div
                      class="aon-farm-blog-1 shine-hover wow fadeInDown"
                      data-wow-duration="2000ms"
                    >
                      <div class="post-bx">
                        <div class="post-thum shine-box">
                          <img
                            title="title"
                            alt=""
                            src="images/blog/blog-grid/img-3.jpg"
                          />
                        </div>
                        <div class="post-info">
                          <div class="aon-post-date">
                            <i class="flaticon-calendar-1"></i>
                            <span class="date-dd">18</span>
                            <span class="date-mm">Aug,</span>
                            <span class="date-yy">2022</span>
                          </div>

                          <div class="post-text">
                            <h4 class="post-title">
                              <a href="blog-detail.html"
                                >Farms caretakers are the main tool farm
                                improvement.</a
                              >
                            </h4>
                          </div>

                          <div class="post-meta">
                            <ul>
                              <li class="post-author">
                                <img
                                  src="images/blog/blog-grid/thumb/thumb-3.png"
                                  alt=""
                                />
                                By <a href="#">Creativemela</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="row align-items-center justify-content-center wow fadeInDown"
                data-wow-duration="3000ms"
              >
                <!-- Column 1 -->
                <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <img src="{{asset('assets/frontend/images/clients/logo1.png')}}" alt="" />
                </div>
                <!-- Column 2 -->
                <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <img src="{{asset('assets/frontend/images/clients/logo2.png')}}" alt="" />
                </div>
                <!-- Column 3 -->
                <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <img src="{{asset('assets/frontend/images/clients/logo3.png')}}" alt="" />
                </div>
                <!-- Column 4 -->
                <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <img src="{{asset('assets/frontend/images/clients/logo4.png')}}" alt="" />
                </div>
                <!-- Column 5 -->
                <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <img src="{{asset('assets/frontend/images/clients/logo5.png')}}" alt="" />
                </div>
                <!-- Column 6 -->
                <div class="mb-4 col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <img src="{{asset('assets/frontend/images/clients/logo6.png')}}" alt="" />
                </div>
              </div>
            </div>
          </div>
          <div class="site-bot-line2"></div>
        </section>
        <!-- Blog Section End -->
      </div>
      <!-- CONTENT END -->

      <!-- FOOTER START -->
      @include('frontend.partials.layouts.footer')
      <!-- FOOTER END -->

      <!-- BUTTON TOP START -->
      <button class="scroltop">
        <span class="fa fa-angle-up relative" id="btn-vibrate"></span>
      </button>

      <!-- Header Woo Cart START -->
      <div class="aon-woocart-wrap">
        <div class="aon-woocart-close">
          <i class="fa fa-close feather-x"></i>
        </div>
        <div class="aon-woocart-inner">
          <div class="aon-woocart-header">
            <div class="aon-woocart-head-left"><h4>Booking Summery</h4></div>
            <div class="aon-woocart-head-right">
              Clear All <i class="feather-x"></i>
            </div>
          </div>
          <div class="aon-woocart-body">
            <div class="aon-woocart-body-mini-cart-scroll">
              <ul class="woocommerce-mini-cart cart_list product_list_widget">
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#" class="remove remove_from_cart_button">×</a>
                  <a class="woocommerce-price-title" href="#"
                    ><img src="{{asset('assets/frontend/images/cart/Img-1.jpg" alt="" />')}}Synergistic
                    Marble Lamp</a
                  >
                  <span class="quantity"
                    >1 ×
                    <span class="woocommerce-price-amount amount">
                      <bdi
                        ><span class="woocommerce-Price-currencySymbol">$</span
                        >336.39</bdi
                      >
                    </span>
                  </span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#" class="remove remove_from_cart_button">×</a>
                  <a class="woocommerce-price-title" href="#"
                    ><img src="{{asset('assets/frontend/images/cart/Img-1.jpg" alt="" />')}}Synergistic
                    Marble Lamp</a
                  >
                  <span class="quantity"
                    >1 ×
                    <span class="woocommerce-price-amount amount">
                      <bdi
                        ><span class="woocommerce-Price-currencySymbol">$</span
                        >336.39</bdi
                      >
                    </span>
                  </span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#" class="remove remove_from_cart_button">×</a>
                  <a class="woocommerce-price-title" href="#"
                    ><img src="{{asset('assets/frontend/images/cart/Img-1.jpg" alt="" />')}}Synergistic
                    Marble Lamp</a
                  >
                  <span class="quantity"
                    >1 ×
                    <span class="woocommerce-price-amount amount">
                      <bdi
                        ><span class="woocommerce-Price-currencySymbol">$</span
                        >336.39</bdi
                      >
                    </span>
                  </span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#" class="remove remove_from_cart_button">×</a>
                  <a class="woocommerce-price-title" href="#"
                    ><img src="{{asset('assets/frontend/images/cart/Img-1.jpg" alt="" />')}}Synergistic
                    Marble Lamp</a
                  >
                  <span class="quantity"
                    >1 ×
                    <span class="woocommerce-price-amount amount">
                      <bdi
                        ><span class="woocommerce-Price-currencySymbol">$</span
                        >336.39</bdi
                      >
                    </span>
                  </span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#" class="remove remove_from_cart_button">×</a>
                  <a class="woocommerce-price-title" href="#"
                    ><img src="{{asset('assets/frontend/images/cart/Img-1.jpg" alt="" />')}}Synergistic
                    Marble Lamp</a
                  >
                  <span class="quantity"
                    >1 ×
                    <span class="woocommerce-price-amount amount">
                      <bdi
                        ><span class="woocommerce-Price-currencySymbol">$</span
                        >336.39</bdi
                      >
                    </span>
                  </span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#" class="remove remove_from_cart_button">×</a>
                  <a class="woocommerce-price-title" href="#"
                    ><img src="{{asset('assets/frontend/images/cart/Img-1.jpg" alt="" />')}}Synergistic
                    Marble Lamp</a
                  >
                  <span class="quantity"
                    >1 ×
                    <span class="woocommerce-price-amount amount">
                      <bdi
                        ><span class="woocommerce-Price-currencySymbol">$</span
                        >336.39</bdi
                      >
                    </span>
                  </span>
                </li>
              </ul>
            </div>
          </div>
          <div class="aon-woocart-footer">
            <div class="aon-woocart-foo-top">
              <div class="aon-woocart-foo-top-left">Subtotal :</div>
              <div class="aon-woocart-foo-top-right">$255</div>
            </div>
            <div class="aon-woocart-foo-bot">
              <div class="aon-woocart-foo-bot-left">
                <button
                  class="site-button-amore site-button-secondry btn-animate-one"
                >
                  Add More
                </button>
              </div>
              <div class="aon-woocart-foo-bot-right">
                <button
                  class="site-button-chechout site-button btn-animate-one"
                >
                  CheckOut
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{asset('assets/frontend/js/jquery-3.6.1.min.js')}}"></script>
    <!-- JQUERY.MIN JS -->
    <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
    <!-- POPPER.MIN JS -->
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset('assets/frontend/js/wow.js')}}"></script>
    <!-- WOW JS -->
    <script src="{{asset('assets/frontend/js/jquery.bootstrap-touchspin.js')}}"></script>
    <!-- FORM JS -->
    <script src="{{asset('assets/frontend/js/magnific-popup.min.js')}}"></script>
    <!-- MAGNIFIC-POPUP JS -->
    <script src="{{asset('assets/frontend/js/waypoints.min.js')}}"></script>
    <!-- WAYPOINTS JS -->
    <script src="{{asset('assets/frontend/js/counterup.min.js')}}"></script>
    <!-- COUNTERUP JS -->
    <script src="{{asset('assets/frontend/js/waypoints-sticky.min.js')}}"></script>
    <!-- STICKY HEADER -->
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <!-- OWL  SLIDER  -->
    <script src="{{asset('assets/frontend/js/theia-sticky-sidebar.js')}}"></script>
    <!-- STICKY SIDEBAR  -->
    <script src="{{asset('assets/frontend/js/lc_lightbox.lite.js')}}"></script>
    <!-- IMAGE POPUP -->
    <script src="{{asset('assets/frontend/js/custom.js')}}"></script>
    <!-- CUSTOM FUCTIONS  -->

    <!-- REVOLUTION JS FILES -->

    <script src="{{asset('assets/frontend/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/frontend/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset('assets/frontend/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="{{asset('assets/frontend/js/rev-script-2.js')}}"></script>
  </body>
</html>
