<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Meta Tag -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="copyright" content="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Title Tag  -->
  <title>Eshop - eCommerce HTML5 Template.</title>
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
  <!-- Web Font -->
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
    rel="stylesheet" />

  <!-- StyleSheet -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
  <!-- Fancybox -->
  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" />
  <!-- Themify Icons -->
  <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="{{ asset('css/niceselect.css') }}" />
  <!-- Animate CSS -->
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
  <!-- Flex Slider CSS -->
  <link rel="stylesheet" href="{{ asset('css/flex-slider.min.css') }}" />
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}" />
  <!-- Slicknav -->
  <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" />

  <!-- Eshop StyleSheet -->
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

  <!-- Color CSS -->
  <link rel="stylesheet" href="{{ asset('css/color/color2.css') }}">


  <link rel="stylesheet" href="#" id="colors" />
</head>

<body class="js">
  <!-- Preloader -->
  <div class="preloader">
    <div class="preloader-inner">
      <div class="preloader-icon">
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- End Preloader -->

  <!-- Eshop Color Plate -->
  <div class="color-plate">
    <a class="color-plate-icon"><i class="ti-paint-bucket"></i></a>
    <h4>Eshop Colors</h4>
    <p>Here is some awesome color's available on Eshop Template.</p>
    <span class="color1"></span>
    <span class="color2"></span>
    <span class="color3"></span>
    <span class="color4"></span>
    <span class="color5"></span>
    <span class="color6"></span>
    <span class="color7"></span>
    <span class="color8"></span>
    <span class="color9"></span>
    <span class="color10"></span>
    <span class="color11"></span>
    <span class="color12"></span>
  </div>
  <!-- /End Color Plate -->

  <!-- Include Header -->
  @include('partials.header')

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row"></div>
      <div class="col-12">
        <div class="bread-inner">
          <ul class="bread-list">
            <li>
              <a href="{{ route('home') }}">Startseite<i class="ti-arrow-right"></i></a>
            </li>
            <li class="active"><a>Anmeldung</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- End Breadcrumbs -->

  <!-- Shop Login -->
  <section class="shop login section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-12">
          <div class="login-form">
            <h2>Anmeldung</h2>
            <p>Bitte registrieren Sie sich, um schneller auszuchecken</p>
            <!-- Form -->
            <form class="form" method="post" action="#">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label>Ihre E-Mail<span>*</span></label>
                    <input type="email" name="email" placeholder="" required="required" />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Ihr Passwort<span>*</span></label>
                    <input type="password" name="password" placeholder="" required="required" />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group login-btn">
                    <button class="btn" type="submit">Anmelden</button>
                    <a href="{{ route('register') }}" class="btn">Registrieren</a>
                  </div>
                  <div class="checkbox">
                    <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox" />Erinnere
                      mich</label>
                  </div>
                  <a href="#" class="lost-pass">Passwort vergessen?</a>
                </div>
              </div>
            </form>
            <!--/ End Form -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ End Login -->

  <!-- Include Footer -->
  @include('partials.footer')

  <!-- Jquery -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
  <!-- Popper JS -->
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- Color JS -->
  <script src="{{ asset('js/colors.js') }}"></script>
  <!-- Slicknav JS -->
  <script src="{{ asset('js/slicknav.min.js') }}"></script>
  <!-- Owl Carousel JS -->
  <script src="{{ asset('js/owl-carousel.js') }}"></script>
  <!-- Magnific Popup JS -->
  <script src="{{ asset('js/magnific-popup.js') }}"></script>
  <!-- Fancybox JS -->
  <script src="{{ asset('js/facnybox.min.js') }}"></script>
  <!-- Waypoints JS -->
  <script src="{{ asset('js/waypoints.min.js') }}"></script>
  <!-- Countdown JS -->
  <script src="{{ asset('js/finalcountdown.min.js') }}"></script>
  <!-- Nice Select JS -->
  <script src="{{ asset('js/nicesellect.js') }}"></script>
  <!-- Ytplayer JS -->
  <script src="{{ asset('js/ytplayer.min.js') }}"></script>
  <!-- Flex Slider JS -->
  <script src="{{ asset('js/flex-slider.js') }}"></script>
  <!-- ScrollUp JS -->
  <script src="{{ asset('js/scrollup.js') }}"></script>
  <!-- Onepage Nav JS -->
  <script src="{{ asset('js/onepage-nav.min.js') }}"></script>
  <!-- Easing JS -->
  <script src="{{ asset('js/easing.js') }}"></script>
  <!-- Active JS -->
  <script src="{{ asset('js/active.js') }}"></script>
  <!-- Include HTML -->
  <script src="{{ asset('js/include-html.js') }}"></script>
</body>

</html>