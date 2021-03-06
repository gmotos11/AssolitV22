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
         

@if ($idioma=='espa??ol')
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
 <!-- ======= Carousel Section ======= -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" >
        <div class="carousel-item active">
          <img src="assets/img/slider/foto_slider_1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption-config carousel-caption" style="font-weight: bold">
            <h1 class="bigger">{{trans('multi_leng.titulo_slider')}}</h1>
            <h5>{{trans('multi_leng.cont_slider')}}</h5>
            <a class="btn-slider" href="#">{{trans('multi_leng.btn_slider')}}</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider/foto_slider_2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption-config carousel-caption">
            <h1 class="bigger">{{trans('multi_leng.titulo_slider2')}}</h1>
            <h5>{{trans('multi_leng.cont_slider2')}}</h5>
            <a class="btn-slider" href="#">{{trans('multi_leng.btn_slider2')}}</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider/foto_slider_3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption-config carousel-caption">
            <h1 class="bigger">{{trans('multi_leng.titulo_slider3')}}</h1>
            <a class="btn-slider" href="#">{{trans('multi_leng.btn_slider3')}}</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider/foto_slider_4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption-config carousel-caption">
            <h1 class="bigger">{{trans('multi_leng.titulo_slider4')}}</h1>
            <a class="btn-slider" href="#">{{trans('multi_leng.btn_slider4')}}</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  <!-- ======= End Carousel ======= --> 

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/body/Foto_Secci??n_Nosotros_Nosaltres_About.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>{{trans('multi_leng.QS_Title')}}</h3>
            <p class="fst-italic">
            {{trans('multi_leng.QS_firstP')}}<br>{{trans('multi_leng.QS_secondP')}}
            </p>
            
              <ul>
                <li class="text_large"><i class="bi bi-check-circle"></i>{{trans('multi_leng.QS_FirstTick')}}</li></ul>
             
          </div>
          
        </div>
        <div class="row">

        <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">

        <ul>
                <li><i class="bi bi-check-circle"></i>{{trans('multi_leng.QS_SecondTick')}}</li>
                <li><i class="bi bi-check-circle"></i>{{trans('multi_leng.QS_ThirdTick')}}</li>
              </ul> 
              <p>
              {{trans('multi_leng.QS_ThirdTick')}}
              </p>

</div>
</div>
</div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box">
              <span>01</span>
              <h4> {{trans('multi_leng.titulo_whyus')}}</h4>
              <p> {{trans('multi_leng.cont_whyus')}}</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>02</span>
              <h4> {{trans('multi_leng.titulo_whyus2')}}</h4>
              <p> {{trans('multi_leng.cont_whyus2')}}</p>
            </div>
          </div>
          
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>03</span>
              <h4> {{trans('multi_leng.titulo_whyus3')}}</h4>
              <p> {{trans('multi_leng.cont_whyus3')}}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->
    <!-- ======= Clients Section ======= -->
    
    <section id="clients" class="clients">
      <div data-aos="zoom-in">
    <div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img src="assets/img/clients/bacnet.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/clients/schneider.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/clients/knx.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/clients/lonworks.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/clients/modbus.png" class="img-fluid" alt="">
		</div>
		<div class="slide">
			<img src="assets/img/clients/apc.png" class="img-fluid" alt="">
		</div>
		<div class="slide">
			<img src="assets/img/clients/dali.png" class="img-fluid" alt="">
		</div>
		<div class="slide">
			<img src="assets/img/clients/enocean.png" class="img-fluid" alt="">
		</div>
		<div class="slide">
			<img src="assets/img/clients/intesis.png" class="img-fluid" alt="">
		</div>
		<div class="slide">
			<img src="assets/img/clients/mbus.png" class="img-fluid" alt="">
		</div>
		<div class="slide">
			<img src="assets/img/clients/kamstrup.png" class="img-fluid" alt="">
		</div>
		<div class="slide">
			<img src="assets/img/clients/wave.png" class="img-fluid" alt="">
		</div>
		<div class="slide">
			<img src="assets/img/clients/zigbee.png" class="img-fluid" alt="">
		</div>
    <div class="slide">
      <img src="assets/img/clients/wifi.png" class="img-fluid" alt="">
		</div>
		<div class="slide">
      <img src="assets/img/clients/bluetooth.png" class="img-fluid" alt="">
		</div>
	</div>
</div>
        </div>
    </section>
    <!-- End Clients Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">
    <div class="section-title">
      <span> {{trans('multi_leng.general_title')}} </span>
      <h2> {{trans('multi_leng.general_title')}}</h2>
      <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
        <div class="icon-box" onmouseout="ico1.style.color = 'white'" onmouseover="ico1.style.color = 'red'" 
        >
          <div class="icon"><i id="ico1" class="iconify"  data-icon="fa6-solid:building-user" data-width="30" data-height="30" style="color: white;"></i></div>
      
          <h4><a href="">{{trans('multi_leng.service_title1')}}</a></h4>
          <p>{{trans('multi_leng.service_desc1')}}</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
      <div class="icon-box" onmouseout="ico2.style.color = 'white'" onmouseover="ico2.style.color = 'red'" 
        >
          <div class="icon"><i id="ico2" class="iconify"  data-icon="carbon:license-maintenance" style="color: white;"  style="color: white;" data-width="30" data-height="30"></i></div>
          <h4><a href="">{{trans('multi_leng.service_title2')}}</a></h4>
          <p>{{trans('multi_leng.service_desc2')}}</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
      <div class="icon-box" onmouseout="ico3.style.color = 'white'" onmouseover="ico3.style.color = 'red'" 
        >
          <div class="icon"><i id="ico3" class="iconify" data-width="30" data-height="30"  data-icon="ic:baseline-speed" style="color: white;"  style="color: white;"></i></div>
          <h4><a href="">{{trans('multi_leng.service_title3')}}</a></h4>
          <p>{{trans('multi_leng.service_desc3')}}</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
      <div class="icon-box" onmouseout="ico4.style.color = 'white'"  onmouseover="ico4.style.color = 'red'" 
        >
          <div class="icon"><i id="ico4" class="iconify" data-width="30" data-height="30" data-icon="fa6-solid:boxes-packing" data-icon="eos-icons:system-image-outlined" style="color: white;"  style="color: white;"></i></div>
          <h4><a href="">{{trans('multi_leng.service_title4')}}</a></h4>
          <p>{{trans('multi_leng.service_desc4')}}</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
      <div class="icon-box" onmouseout="ico5.style.color = 'white'" onmouseover="ico5.style.color = 'red'" 
        >
          <div class="icon"><i id="ico5" class="iconify" data-icon="eos-icons:system-image-outlined" style="color: white;" style="color: white;" data-width="30" data-height="30"></i></div>
          <h4><a href="">{{trans('multi_leng.service_title5')}}</a></h4>
          <p>{{trans('multi_leng.service_desc5')}}</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
      <div class="icon-box" onmouseout="ico6.style.color = 'white'" onmouseover="ico6.style.color = 'red'" 
        >
          <div class="icon"><i id="ico6" class="iconify" data-icon="material-symbols:engineering-outline" style="color: white;" style="color: white;" data-width="30" data-height="30"></i></div>
          <h4><a href="">{{trans('multi_leng.service_title6')}}</a></h4>
          <p>{{trans('multi_leng.service_desc6')}}</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="text-center">
          <h3>{{trans('multi_leng.contactus_title')}}</h3>
          <p>{{trans('multi_leng.contactus_desc')}}</p>
          <a class="cta-btn" href="#">{{trans('multi_leng.contactus_btn')}}</a>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>{{trans('multi_leng.contact_section_title')}}</span>
          <h2>{{trans('multi_leng.contact_section_title')}}</h2>

          <p style="text-align: center;margin-left: 200px;
          margin-right: 200px;">{{trans('multi_leng.contact_below')}}</p>
        </div>

        <div class="row" data-aos="fade-up">
        </div>

        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 ">
            <form action="{{ url('form_contact')  }}" method="post" id="subForm" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <label><input type="checkbox" id="cbox1" value="first_checkbox"> {{trans('multi_leng.privacity_confirm')}}&nbsp;&nbsp;<a href="#" data-toggle="modal" style="margin-left: -20px; color:red"  data-target="#cookiePrivacity" class="nav-link">
                {{trans('multi_leng.privacity_text_contact')}}</a></label>

              <label><input type="checkbox" id="cbox1" value="first_checkbox"> {{trans('multi_leng.check_msg')}}</label>
             

            <p style="font-size: 14px;"><b>{{trans('multi_leng.spam_contact')}}</b></p>
            

              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center" class="col-12" >
              
         
  <label id="ebcaptchatext"></label>
  <input type="text" class="textbox" id="ebcaptchainput"/>
              </div>
              <div class="my-1 mt-3">
              <div class="text-center"><button type="submit">Send Message</button></div>

          </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
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
              <p>?? ASSOLIT S.L</p>
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