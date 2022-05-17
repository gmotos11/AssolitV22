<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assolit SL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/img/favicon/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!--<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
  <link href="assets/css/gm.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Day - v4.7.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <a class="navbar-brand" href="#"><img src="assets/img/assolit.png" style="margin-top: 10px"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#carouselExampleIndicators">{{trans('multi_leng.home')}}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{trans('multi_leng.about')}}</a></li>
          <li><a class="nav-link scrollto" href="#services">{{trans('multi_leng.service')}}</a></li>
          <li><a class="nav-link scrollto disabled">{{trans('multi_leng.projects')}}</a></li>
          <li><a class="nav-link scrollto" href="#contact">{{trans('multi_leng.contact')}}</a></li>
         

@if ($idioma=='español')
          <li class="dropdown"><a href="#"><span>{{trans('multi_leng.ES_arriba')}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a  href="/ca" ><img class="Macedpoomoi" src="{{trans('multi_leng.idioma_img_CA')}}"  width="20" height="10">{{trans('multi_leng.idioma_CA')}}</a></li>
              <li><a href="/en"><img  src="{{trans('multi_leng.idioma_img_EN')}}" class="idioma_mrg" width="20" height="10">{{trans('multi_leng.idioma_EN')}}</a></li>
            </ul>
          </li>
@endif

@if ($idioma=='catala')
          <li class="dropdown"><a href="#"><span>{{trans('multi_leng.CA_arriba')}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/"><img  src="{{trans('multi_leng.idioma_img_ES')}}" width="20" height="10">{{trans('multi_leng.idioma_ES')}}</a></li>
              <li><a href="/en"><img src="{{trans('multi_leng.idioma_img_EN')}}" width="20" height="10">{{trans('multi_leng.idioma_EN')}}</a></li>
            </ul>
          </li>
@endif

@if ($idioma=='english')
          <li class="dropdown"><a href="#"><span>{{trans('multi_leng.EN_arriba')}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="/"><img class="Macedpoomoi" src="{{trans('multi_leng.idioma_img_ES')}}" width="20" height="10">{{trans('multi_leng.idioma_ES')}}</a></li>
            <li><a href="/ca"><img src="{{trans('multi_leng.idioma_img_CA')}}" width="20" height="10">{{trans('multi_leng.idioma_CA')}}</a></li>
            </ul>
          </li>
@endif



          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <body>

  <div class="container">

  <h2>AVISO LEGAL</h2>

  <H3>I. INFORMACIÓN GENERAL</H3>

  </div>




    <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div>
              <img class="img-footer" src="assets/img/assolit.png" />
              <p>C/ Sant Josep Obrer 23</p>
              <p>08640 Olesa de Montserrat, Barcelona.</p>
              <br>
              <p>© ASSOLIT S.L</p>
            </div>
            <!--<div class="footer-info">
              <h3>Day</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>-->
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#about">{{trans('multi_leng.footer_aboutus')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/legal_notice">{{trans('multi_leng.footer_advice')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{trans('multi_leng.footer_policy')}}</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#services">{{trans('multi_leng.footer_services')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#portfolio">{{trans('multi_leng.footer_projects')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#contact">{{trans('multi_leng.footer_contact')}}</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <img class="ecoxpert-img" src="assets/img/ecoxpert.png">
            <!--<div class="ecoxpert-img">
            </div>-->
            <!--<h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>-->
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!--<div id="cookie">-->
    @include('cookie-consent::index')
    <!--<input type="button" value="Deny Cookies">-->
  <!--</div>-->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajaxs/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>