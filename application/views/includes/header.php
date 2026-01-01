<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
   <meta charset="utf-8" />
   <title>India's Largest Leading Weight Loss Program</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />

   <!-- Correct CSS Paths -->
   <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


   <!-- Favicon -->
   <link rel="shortcut icon" href="<?php echo base_url('assets/images/fav-icon.jpg'); ?>">
   <!-- Meta Pixel Code -->
   <script>
      !function (f, b, e, v, n, t, s) {
         if (f.fbq) return; n = f.fbq = function () {
            n.callMethod ?
               n.callMethod.apply(n, arguments) : n.queue.push(arguments)
         };
         if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
         n.queue = []; t = b.createElement(e); t.async = !0;
         t.src = v; s = b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
         'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '25080837304906150');
      fbq('track', 'PageView');
   </script>
   <noscript><img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=25080837304906150&ev=PageView&noscript=1" /></noscript>
   <!-- End Meta Pixel Code -->


   <!-- Glide CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">

   <!-- Optional Theme -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">



</head>

<body>

   <!-- WhatsApp Floating Button Start -->
   <!-- WhatsApp Floating Widget -->
   <!-- WhatsApp Floating Button -->
   <div class="whatsapp-widget">
      <a href="https://wa.me/917869916282" target="_blank">
         <div class="whatsapp-icon">
            <!-- SVG ICON HIGH QUALITY -->
            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
               <path fill="#FFFFFF"
                  d="M16.001 3C9.374 3 4 8.373 4 15c0 2.64.815 5.088 2.209 7.112L4 29l7.118-2.202A11.88 11.88 0 0 0 16.001 27C22.627 27 28 21.627 28 15S22.627 3 16.001 3zm0 21c-2.07 0-3.996-.639-5.59-1.735l-.4-.265-4.224 1.306 1.31-4.118-.273-.424A8.946 8.946 0 0 1 7 15c0-4.962 4.037-9 9.001-9C20.964 6 25 10.038 25 15s-4.036 9-8.999 9zm5.174-6.671c-.283-.141-1.676-.828-1.936-.923-.259-.096-.448-.142-.637.142-.19.283-.732.923-.897 1.112-.165.19-.33.212-.614.07-.283-.141-1.195-.44-2.276-1.404-.841-.75-1.408-1.677-1.573-1.96-.165-.283-.018-.435.124-.576.128-.127.283-.33.425-.495.142-.165.189-.283.283-.472.095-.189.047-.354-.024-.495-.07-.142-.637-1.536-.873-2.106-.229-.55-.463-.475-.637-.483l-.546-.01c-.189 0-.495.07-.754.354s-.99.968-.99 2.362.999 2.741 1.137 2.93c.142.189 1.963 2.997 4.747 4.204.664.286 1.18.456 1.582.585.664.212 1.268.182 1.744.111.532-.079 1.676-.684 1.912-1.344.236-.661.236-1.228.165-1.344-.07-.118-.259-.189-.542-.33z" />
            </svg>
         </div>
         <span>Talk to us?</span>
      </a>
   </div>
   <!-- WhatsApp Floating Button End -->
   <div id="preloader">
      <div id="status">
         <img src="<?php echo base_url('assets/images/Loading_icon.gif'); ?>" id="preloader_image" alt="loader">
      </div>
   </div>
   <!-- top to return -->
   <a href="javascript:;" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
   <!-- header start -->
   <div class="main-header-wrapper float_left">
      <div class="sb-main-header">
         <div class="top-header-section">
            <div class="container">
               <div class="top-header-row d-flex align-items-center justify-content-between flex-wrap">

                  <!-- Gmail -->
                  <div class="header-item">
                     <a href="mailto:mohakbariatric@gmail.com">
                        <i class="fas fa-envelope"></i> mohakbariatric@gmail.com
                     </a>
                  </div>

                  <!-- Phone Numbers -->
                  <div class="header-item compact-numbers">
                     <a href="tel:+917869916282" class="top-item animate-blink">+91-7869916282</a>
                     <span class="sep">|</span>
                     <a href="tel:+919589772177" class="top-item animate-blink">+91-9589772177</a>
                  </div>

                  <!-- BMI + Appointment -->
                  <div class="header-item compact-buttons">
                     <a onclick="openBmiPopup()" class="top-btn animate-flow compact-btn" style="cursor:pointer;">
                        BMI Calculator
                     </a>


                     <a href="<?php echo base_url('appointment'); ?>"
                        class="top-btn animate-flow compact-btn compact-btn-right">Appointment</a>
                  </div>

                  <!-- Follow Us + Social Icons -->
                  <div class="header-item compact-social">
                     <span class="follow-text">Follow Us:</span>
                     <a href="https://www.facebook.com/IndiaObesity" target="_blank"><i
                           class="fab fa-facebook-f"></i></a>
                     <a href="https://x.com/mohakbariatrics" target="_blank"><i class="fab fa-twitter"></i></a>
                     <a href="https://www.instagram.com/mohakbariatrics/" target="_blank"><i
                           class="fab fa-instagram"></i></a>
                     <a href="https://www.youtube.com/c/indiaobesity" target="_blank"><i class="fab fa-youtube"></i></a>
                  </div>

               </div>
            </div>
         </div>

         <div class="mid-header-section d-xl-block d-lg-block d-md-block d-sm-none d-none">
            <div class="container">
               <div class="row align-items-center">

                  <!-- LOGO -->
                  <div class="col-lg-3 col-md-3">
                     <div class="sb_logo_wrapper">
                        <a href="<?php echo base_url(); ?>">
                           <img src="<?php echo base_url('assets/images/mohak-cropped.jpg'); ?>" alt="logo"
                              class="site-logo">
                        </a>
                     </div>
                  </div>

                  <!-- THREE COMPACT ITEMS -->
                  <div class="col-lg-9 col-md-9">
                     <div class="sb-mid-right-section compact-header-info">
                        <ul class="header-info-list d-flex justify-content-between align-items-center">

                           <li class="header-info-item">

                              <i class="fas fa-map-marker-alt"></i>
                              <span>Mohak Hi-Tech Hospital, Sanwer Road, Indore<br>INDORE, INDIA</span>
                           </li>

                           <li class="header-info-item">
                              <i class="fas fa-phone"></i>
                              <span>Call Us 24/7<br>+91 7869916282</span>
                           </li>

                           <li class="header-info-item">
                              <i class="fas fa-clock"></i>
                              <span>Mon - Fri: 8:00 - 20:00<br>Sat - Sun: 9:00 - 16:00</span>
                           </li>

                        </ul>
                     </div>
                  </div>

               </div>
            </div>
         </div>

         <div class="menu-items-wrapper d-xl-block d-lg-block d-md-none d-sm-none d-none ">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-6">
                     <nav class="navbar navbar-expand-lg">
                        <!-- center nav using mx-auto -->
                        <ul class="navbar-nav mx-auto">
                           <li class="nav-item ps-rel">
                              <a class="nav-link" href="<?php echo base_url(); ?>">Home
                                 <span><i class="fas fa-chevron-right"></i></span>
                              </a>

                           </li>

                           <li class="nav-item">
                              <a class="nav-link" href="javascript:;">About
                                 <span><i class="fas fa-chevron-right"></i></span>
                              </a>
                              <ul class="dropdown-items">
                                 <li><a href="<?php echo base_url('about_us'); ?>"> Know About Us</a></li>
                                 <li><a href="<?php echo base_url('meet-our-doctors'); ?>">Meet Our Doctors</a></li>
                                 <li><a href="<?php echo base_url('doctor-mohit'); ?>">Dr.Mohit Bhandari</a></li>

                                 <!--
<li><a href="<?php echo base_url('dr-mahak-bhandari'); ?>">Dr.Mahak Bhandari</a></li>
<li><a href="<?php echo base_url('dr-mathias-fobi'); ?>">Dr Mathias Fobi</a></li>
<li><a href="<?php echo base_url('dr-manoel-galvao-neto'); ?>">Dr. Manoel Galvao Neto</a></li>
-->

                                 <li><a href="<?php echo base_url('why-us'); ?>">Why Choose Us</a></li>
                                 <li><a href="<?php echo base_url('training-center'); ?>">Training Center</a></li>
                                 <li><a href="<?php echo base_url('our-institutes'); ?>">Our Institutes</a></li>
                                 <li><a href="<?php echo base_url('appointment'); ?>">Appointment</a></li>
                                 <li><a href="<?php echo base_url('doctors'); ?>">Management Profile</a></li>
                              </ul>
                           </li>

                           <li class="nav-item ps-rel">
                              <a class="nav-link" href="javascript:;">Surgical Weight Loss
                                 <span><i class="fas fa-chevron-right"></i></span>
                              </a>
                              <div class="dropdown-items mega-menu">
                                 <ul>
                                    <li><a href="<?php echo base_url('sleeve-gastrectomy'); ?>">Sleeve Gastrectomy</a>
                                    </li>
                                    <li><a href="<?php echo base_url('roux-en-y-gastric-bypass'); ?>">Roux-en-Y Gastric
                                          Bypass</a></li>
                                    <li><a href="<?php echo base_url('mini-gastric-bypass'); ?>">Mini Gastric Bypass</a>
                                    </li>
                                    <li><a href="<?php echo base_url('single-incision-lap-sleeve'); ?>">Single Incision
                                          Lap Sleeve</a></li>
                                 </ul>
                                 <ul>
                                    <li><a href="<?php echo base_url('banded-gastric-bypass'); ?>">Banded Gastric
                                          Bypass</a></li>
                                    <li><a href="<?php echo base_url('duodenal-jejunal-bypass'); ?>">Duodenal Jejunal
                                          Bypass</a></li>
                                    <li><a href="<?php echo base_url('obesity-and-covid19'); ?>">Obesity and Covid19</a>
                                    </li>
                                    <li><a href="<?php echo base_url('reconstructive-surgery'); ?>">Reconstructive
                                          Surgery</a></li>
                                 </ul>
                              </div>
                           </li>

                           <li class="nav-item ps-rel">
                              <a class="nav-link" href="javascript:;">Non–surgical Weight Loss
                                 <span><i class="fas fa-chevron-right"></i></span>
                              </a>
                              <ul class="dropdown-items">
                                 <li><a href="<?php echo base_url('allurion'); ?>">Allurion</a></li>
                                 <li><a href="<?php echo base_url('medical-weight-loss-program'); ?>">Medical Weight
                                       Loss Program</a></li>

                              </ul>
                           </li>

                           <li class="nav-item ps-rel">
                              <a class="nav-link" href="javascript:;">Know More
                                 <span><i class="fas fa-chevron-right"></i></span>
                              </a>
                              <ul class="dropdown-items">
                                 <li><a href="blog">Blog</a></li>
                                 <li><a href="appointment">Appointments</a></li>
                                 <li><a href="<?php echo base_url('testimonials'); ?>">Our Testimonials</a></li>
                              </ul>
                           </li>

                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('contact-us'); ?>">Contact Us</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
                  <!--
<div class="col-lg-4 col-md-6">
   <form class="d-flex justify-content-end ps-rel">
      <input class="" placeholder="Search">
      <span><i class="fas fa-search"></i></span>
   </form>
</div>
-->

               </div>
            </div>
         </div>
         <!-- mobile menu -->
         <!-- Update mobile sidebar: removed Media and Delhi and aligned dropdowns -->
         <!-- MOBILE HEADER (PERFECT RESPONSIVE VERSION) -->
         <!-- MOBILE HEADER (FINAL WORKING VERSION) -->
         <div class="mobile-header d-xl-none d-lg-none d-md-block d-sm-block d-block">
            <div class="container">
               <div class="mobile-header-row d-flex align-items-center justify-content-between">

                  <!-- LEFT: LOGO -->
                  <div class="mobile-logo">
                     <a href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url('assets/images/mohak-cropped.jpg'); ?>" alt="logo">
                     </a>
                  </div>

                  <!-- CENTER: CALL BUTTON -->
                  <div class="mobile-call-btn">
                     <a href="tel:+917869916282">
                        <i class="fas fa-phone"></i> Call Now
                     </a>
                  </div>

                  <!-- RIGHT: HAMBURGER -->
                  <div class="mobile-menu-icon" id="sidebar-toggle">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>

               </div>
            </div>
         </div>

         <!-- SIDEBAR MENU -->
         <div id="sidebar">
            <div class="sidebar_logo">
               <a href="<?php echo base_url(); ?>">
                  <img src="<?php echo base_url('assets/images/mohak-cropped.jpg'); ?>" alt="img">
               </a>
            </div>

            <div id="toggle_close">&times;</div>

            <div id='cssmenu'>
               <!-- your menu list stays the same -->
               <?php /* your original sidebar <ul> code remains exactly as it is */ ?>
            </div>
         </div>


      </div>
   </div>


   <!-- header end -->
   <!-- banner sction start -->
   <script>
      document.getElementById("sidebar-toggle").addEventListener("click", function () {
         document.getElementById("sidebar").classList.toggle("active");
      });

      document.getElementById("toggle_close").addEventListener("click", function () {
         document.getElementById("sidebar").classList.remove("active");
      });
   </script>