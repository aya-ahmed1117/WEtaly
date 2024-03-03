<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cakes - Template</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href={{asset('assets/img/favicon.ico')}}>

    <link rel="stylesheet" href={{asset('assets/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/slicknav.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/progressbar_barfiller.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/gijgo.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/animate.min.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/animated-headline.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/magnific-popup.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/fontawesome-all.min.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/themify-icons.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/slick.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/nice-select.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
    <script nonce="5542a1c6-9782-4d18-af57-d81f3cbd8477">
        try {
            (function(w, d) {
                ! function(ct, cu, cv, cw) {
                    ct[cv] = ct[cv] || {};
                    ct[cv].executed = [];
                    ct.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    ct.zaraz.q = [];
                    ct.zaraz._f = function(cx) {
                        return async function() {
                            var cy = Array.prototype.slice.call(arguments);
                            ct.zaraz.q.push({
                                m: cx,
                                a: cy
                            })
                        }
                    };
                    for (const cz of ["track", "set", "debug"]) ct.zaraz[cz] = ct.zaraz._f(cz);
                    ct.zaraz.init = () => {
                        var cA = cu.getElementsByTagName(cw)[0],
                            cB = cu.createElement(cw),
                            cC = cu.getElementsByTagName("title")[0];
                        cC && (ct[cv].t = cu.getElementsByTagName("title")[0].text);
                        ct[cv].x = Math.random();
                        ct[cv].w = ct.screen.width;
                        ct[cv].h = ct.screen.height;
                        ct[cv].j = ct.innerHeight;
                        ct[cv].e = ct.innerWidth;
                        ct[cv].l = ct.location.href;
                        ct[cv].r = cu.referrer;
                        ct[cv].k = ct.screen.colorDepth;
                        ct[cv].n = cu.characterSet;
                        ct[cv].o = (new Date).getTimezoneOffset();
                        if (ct.dataLayer)
                            for (const cG of Object.entries(Object.entries(dataLayer).reduce(((cH, cI) => ({ ...cH[1],
                                    ...cI[1]
                                })), {}))) zaraz.set(cG[0], cG[1], {
                                scope: "page"
                            });
                        ct[cv].q = [];
                        for (; ct.zaraz.q.length;) {
                            const cJ = ct.zaraz.q.shift();
                            ct[cv].q.push(cJ)
                        }
                        cB.defer = !0;
                        for (const cK of [localStorage, sessionStorage]) Object.keys(cK || {}).filter((cM => cM.startsWith("_zaraz_"))).forEach((cL => {
                            try {
                                ct[cv]["z_" + cL.slice(7)] = JSON.parse(cK.getItem(cL))
                            } catch {
                                ct[cv]["z_" + cL.slice(7)] = cK.getItem(cL)
                            }
                        }));
                        cB.referrerPolicy = "origin";
                        cB.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(ct[cv])));
                        cA.parentNode.insertBefore(cB, cA)
                    };
                    ["complete", "interactive"].includes(cu.readyState) ? zaraz.init() : ct.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src={{asset('assets/img/wetaly/124.jpg')}} alt>
                </div>
            </div>
        </div>
    </div>
    

    <header>

        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="left-content d-flex align-items-center">
                            <div class="logo">
                                <a href="index.html"><img src={{asset('assets/img/wetaly/186.jpg')}} alt></a>
                            </div>

                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="product.html">Product</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="buttons">
                            <ul>
                                <li class="button-header">
                                    <a href="#" class="header-btn mr-25"> <i class="fas fa-phone-alt"></i>
                                         +20 (11)16993330</a>
                                    <a href="#" class="btn header-btn2">Order Online</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Include the slicknav JavaScript file -->
<script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

<script>
    // Wait for the document to be ready
    $(document).ready(function() {
        // Initialize slicknav on the navigation menu
        $('#navigation').slicknav({
            prependTo: '.mobile_menu'
        });
    });
</script>
