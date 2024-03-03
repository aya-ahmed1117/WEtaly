<style>
    @keyframes wave {
  0% {
    d: path("M0,192L21.8,160C43.6,128,87,64,131,53.3C174.5,43,218,85,262,133.3C305.5,181,349,235,393,256C436.4,277,480,267,524,250.7C567.3,235,611,213,655,224C698.2,235,742,277,785,272C829.1,267,873,213,916,181.3C960,149,1004,139,1047,128C1090.9,117,1135,107,1178,101.3C1221.8,96,1265,96,1309,112C1352.7,128,1396,160,1418,176L1440,192L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z");
  }
  50% {
    d: path("M0,256L21.8,245.3C43.6,235,87,213,131,186.7C174.5,160,218,128,262,106.7C305.5,85,349,75,393,90.7C436.4,107,480,149,524,149.3C567.3,149,611,107,655,101.3C698.2,96,742,128,785,128C829.1,128,873,96,916,101.3C960,107,1004,149,1047,165.3C1090.9,181,1135,171,1178,154.7C1221.8,139,1265,117,1309,117.3C1352.7,117,1396,139,1418,149.3L1440,160L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z");
  }
  100% {
    d: path("M0,192L21.8,160C43.6,128,87,64,131,53.3C174.5,43,218,85,262,133.3C305.5,181,349,235,393,256C436.4,277,480,267,524,250.7C567.3,235,611,213,655,224C698.2,235,742,277,785,272C829.1,267,873,213,916,181.3C960,149,1004,139,1047,128C1090.9,117,1135,107,1178,101.3C1221.8,96,1265,96,1309,112C1352.7,128,1396,160,1418,176L1440,192L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z");
  }
}

.path {
  animation: wave 3s linear infinite;
}
.waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
}

</style>

 @include('layout.contact')
 @yield('contact')
<footer>
    <div class="footer-wrapper">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">

                                <div class="footer-logo mb-35">
                                    <a href="index.html">
                                        <img src={{asset('assets/img/wetaly/186.jpg')}} alt></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Land behold it created good saw after she'd Our set living. Signs midst dominion creepeth morning laboris nisi ufsit aliquip.</p>
                                    </div>

                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                                        <a href="https://bit.ly/sai4ull">
                                            <i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-8 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Cakes</h4>
                                <ul>
                                    <li><a href="#">Blackforest</a></li>
                                    <li><a href="#">Bodhubon</a></li>
                                    <li><a href="#">Rongdhonu</a></li>
                                    <li><a href="#">Meghrong</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle mb-20">
                                <h4>Contact Us</h4>
                                <p>76/A, Green Lane, Dhanmondi, NYC</p>
                            </div>
                            <ul class="mb-20">
                                <li class="number"><a href="#">+20 1212909211</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> 
                                    All rights reserved | This template is made with 
                                    <i class="fa fa-heart color-danger" aria-hidden="true">
                                        </i> by <a href="https://colorlib.com" 
                                        target="_blank" rel="nofollow noopener">Colorlib</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax" fill="#ffffff">
                  <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.9)" />
                  <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.7)" />
                  <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.5)" />
                  <use xlink:href="#gentle-wave" x="48" y="7" fill="#0099ff" />
                </g>
              </svg>
              
        </div>
    </div>
    
</footer>

<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>


<script src={{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}></script>
<script src={{asset('assets/js/vendor/jquery-1.12.4.min.js')}}></script>
<script src={{asset('assets/js/popper.min.js')}}></script>
<script src={{asset('assets/js/bootstrap.min.js')}}></script>

<script src={{asset('assets/js/wow.min.js')}}></script>
<script src={{asset('assets/js/animated.headline.js')}}></script>
<script src={{asset('assets/js/jquery.magnific-popup.js')}}></script>
<script src={{asset('assets/js/owl.carousel.min.js')}}></script>
<script src={{asset('assets/js/slick.min.js')}}></script>

<script src={{asset('assets/js/gijgo.min.js')}}></script>
<script src={{asset('assets/js/jquery.slicknav.min.js')}}></script>
<script src={{asset('assets/js/jquery.nice-select.min.js')}}></script>
<script src={{asset('assets/js/jquery.barfiller.js')}}></script>

<script src={{asset('assets/js/jquery.counterup.min.js')}}></script>
<script src={{asset('assets/js/waypoints.min.js')}}></script>
<script src={{asset('assets/js/jquery.countdown.min.js')}}></script>
<script src={{asset('assets/js/hover-direction-snake.min.js')}}></script>

<script src={{asset('assets/js/contact.js')}}></script>
<script src={{asset('assets/js/jquery.form.js')}}></script>
<script src={{asset('assets/js/jquery.validate.min.js')}}></script>
<script src={{asset('assets/js/mail-script.js')}}></script>
<script src={{asset('assets/js/jquery.ajaxchimp.min.js')}}></script>

<script src={{asset('assets/js/plugins.js')}}></script>
<script src={{asset('assets/js/main.js')}}></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer 
src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
 integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3F
 jR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" 
 data-cf-beacon='{"rayId":"85d7bb97081311b8",
 "version":"2024.2.1","token":"cd0b4b3a733644fc843ef0b185f98241"}'crossorigin="anonymous"></script>
</body>

</html>