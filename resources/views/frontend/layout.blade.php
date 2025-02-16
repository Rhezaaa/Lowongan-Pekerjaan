<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Job board HTML-5 Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href= "{{ asset('joblisting/assets/img/favicon.ico')}}"
    />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/price_rangs.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/slicknav.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/slick.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('joblisting/assets/css/custom.css')}}" />
  </head>

  <body>
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
            <img src="assets/img/logo/logo.png" alt="" />
          </div>
        </div>
      </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
      <!-- Header Start -->
      <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 col-md-2">
                <!-- Logo -->
                <div class="logo">
                  <a href="index.html"
                    ><img src="{{ asset('joblisting/assets/img/logo/logo.png') }}" alt=""
                  /></a>
                </div>
              </div>
              <div class="col-lg-9 col-md-9">
                <div class="menu-wrapper" style="justify-content: flex-end">
                  <!-- Main-menu -->
                  <div class="main-menu">
                    <nav class="d-none d-lg-block">
                      <ul id="navigation">
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li><a href="{{ route('jobs') }}">Find a Jobs </a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                      </ul>
                    </nav>
                  </div>
                  <!-- Header-btn -->
                </div>
              </div>
              <!-- Mobile Menu -->
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->
    </header>
    @yield('content')
    <footer>
      <!-- Footer Start-->
      <div class="footer-area footer-bg footer-padding">
        <div class="container">
          <div class="row d-flex justify-content-between">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <div class="single-footer-caption mb-50">
                <div class="single-footer-caption mb-30">
                  <div class="footer-tittle">
                    <h4>About Us</h4>
                    <div class="footer-pera">
                      <p>
                        lorem ipsum
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>Contact Info</h4>
                  <ul>
                    <li>
                      <p>Address :Your address goes here, your demo address.</p>
                    </li>
                    <li><a href="#">Phone : +081234567788</a></li>
                    <li><a href="#">Email : info@info.com</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>Important Link</h4>
                  <ul>
                    <li><a href="#"> View Project</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Testimonial</a></li>
                    <li><a href="#">Proparties</a></li>
                    <li><a href="#">Support</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>Newsletter</h4>
                  <div class="footer-pera footer-pera2">
                    <p>
                      lorem ipsum
                    </p>
                  </div>
                  <!-- Form -->
                  <div class="footer-form">
                    <div id="mc_embed_signup">
                      <form
                        target="_blank"
                        action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get"
                        class="subscribe_form relative mail_part"
                      >
                        <input
                          type="email"
                          name="email"
                          id="newsletter-form-email"
                          placeholder="Email Address"
                          class="placeholder hide-on-focus"
                          onfocus="this.placeholder = ''"
                          onblur="this.placeholder = ' Email Address '"
                        />
                        <div class="form-icon">
                          <button
                            type="submit"
                            name="submit"
                            id="newsletter-submit"
                            class="email_icon newsletter-submit button-contactForm"
                          >
                            <img src="assets/img/icon/form.png" alt="" />
                          </button>
                        </div>
                        <div class="mt-10 info"></div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="row footer-wejed justify-content-between">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <!-- logo -->
              <div class="footer-logo mb-20">
                <a href="index.html"
                  ><img src="assets/img/logo/logo2_footer.png" alt=""
                /></a>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
              <div class="footer-tittle-bottom">
                <span>5000+</span>
                <p>Talented Hunter</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
              <div class="footer-tittle-bottom">
                <span>451</span>
                <p>Talented Hunter</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
              <!-- Footer Bottom Tittle -->
              <div class="footer-tittle-bottom">
                <span>568</span>
                <p>Talented Hunter</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer-bottom area -->
      <div class="footer-bottom-area footer-bg">
        <div class="container">
          <div class="footer-border">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-xl-10 col-lg-10">
                <div class="footer-copy-right">
                  <p>
                    Copyright &copy;
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    All rights reserved
                  </p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2">
                <div class="footer-social f-right">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fas fa-globe"></i></a>
                  <a href="#"><i class="fab fa-behance"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset ('joblisting/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset ('joblisting/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset ('joblisitng/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset ('joblisting/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset ('joblisting/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset ('joblisting/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset ('joblisting/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset ('joblisting/assets/js/price_rangs.js') }}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset ('joblisting/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset ('joblisting/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset ('joblisting/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset ('joblisting/assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset ('joblisting/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset ('joblisting/assets/js/jquery.sticky.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset ('joblisting/assets/js/plugins.js') }}"></script>
    <script src="{{ asset ('joblisting/assets/js/main.js') }}"></script>
  </body>
</html>