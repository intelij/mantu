<!DOCTYPE html>
<html lang="en">
  <!-- =========================================================
     MANTU – Qualified Trades & Home Services Platform
     Optimized for Local & Regional Discovery in Matabeleland, Zimbabwe
    ========================================================== -->
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="application-name" content="{{ setting('app_name') }}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="{{ url('assets/img/icons/mstile-144x144.png') }}">

    <title>{{ setting('app_name') }} | Qualified Tradespeople & Home Services in Matabeleland, Zimbabwe</title>

    <title>Mantu | Professional Solar & Electrical Services in Matabeleland, Zimbabwe</title>

    <!-- =========================================================
        SEO Meta Tags
    ========================================================== -->
    <meta name="description" content="Mantu provides trusted solar and electrical solutions across Matabeleland — from solar system installation and battery storage to full electrical wiring, maintenance, and fault repairs. Serving homes, businesses, and diaspora clients with professional, reliable service.">
    <meta name="keywords" content="Mantu solar, electrical installation Zimbabwe, solar panels Bulawayo, inverter systems, off-grid solar, electrical wiring, power backup, energy solutions, Matabeleland electricians, Mantu energy, solar maintenance">
    <meta name="author" content="Mantu">
    <meta name="robots" content="index, follow">
    <meta name="news_keywords" content="solar installation, electrical wiring, inverter systems, energy backup, solar maintenance, electricians, Matabeleland, Zimbabwe, Bulawayo, diaspora energy solutions">
    <!-- Canonical URL -->
    <link rel="canonical" href="https://mantu.co.zw/solar-electricals">

    <!-- =========================================================
        Icons & Favicons
    ========================================================== -->
    <link rel="shortcut icon" type="image/png" href="http://mantu.co.zw.test/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://mantu.co.zw.test/assets/img/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://mantu.co.zw.test/assets/img/icons/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="http://mantu.co.zw.test/assets/img/icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="http://mantu.co.zw.test/assets/img/icons/favicon-16x16.png" sizes="16x16">

    <!-- =========================================================
        Open Graph / Facebook
    ========================================================== -->
    <meta property="og:title" content="Mantu – Reliable Solar & Electrical Experts in Matabeleland, Zimbabwe">
    <meta property="og:description" content="Mantu provides certified solar and electrical services for homes and businesses — from installation to maintenance, including off-grid and hybrid power systems.">
    <meta property="og:image" content="https://mantu.co.zw/images/mantu-social-banner.jpg">
    <meta property="og:url" content="https://mantu.co.zw/solar-electricals">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Mantu">

    <!-- =========================================================
        Twitter Card
    ========================================================== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mantu – Professional Solar & Electrical Services in Zimbabwe">
    <meta name="twitter:description" content="Reliable solar and electrical installation, maintenance, and power backup services in Matabeleland. Trusted by homes, businesses, and the diaspora.">
    <meta name="twitter:image" content="https://mantu.co.zw/images/mantu-social-banner.jpg">

    <!-- =========================================================
        Structured Data (JSON-LD)
    ========================================================== -->
    @verbatim
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Mantu Solar & Electricals",
        "image": "https://mantu.co.zw/images/mantu-social-banner.jpg",
        "url": "https://mantu.co.zw/solar-electricals",
        "telephone": "+263783930023",
        "email": "info@mantu.co.zw",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Ground Floor Albion Court, Crn Fort Street & 13th Avenue",
          "addressLocality": "Bulawayo",
          "addressCountry": "ZW"
        },
        "description": "Mantu provides professional solar and electrical services including solar panel installation, inverter systems, electrical wiring, maintenance, and energy audits for residential and commercial properties across Matabeleland.",
        "openingHours": ["Mo-Fr 08:00-18:00", "Sa 08:00-13:00"],
        "areaServed": "Matabeleland, Zimbabwe",
        "sameAs": ["https://www.facebook.com/mantuzw", "https://www.instagram.com/mantuzw", "https://www.linkedin.com/company/mantu-zimbabwe"]
      }
    </script>
    @endverbatim

    <!-- =========================================================
        Stylesheets
    ========================================================== -->
    <link rel="stylesheet" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/line-awesome.min.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/lib/countrySelect.css">
    <link rel="stylesheet" href="css/lib/slick.css">
    <link rel="stylesheet" href="css/izitoast.min.css">
    <link rel="stylesheet" href="css/lib/select2.min.css">
    <link rel="stylesheet" href="css/main.css">
  </head>

  <body>
    <!-- back-to-top start -->
    <div class="back-to-top">
      <i class="las la-arrow-up"></i>
    </div>
    <!-- back-to-top end -->
    <div class="preloader-holder">
      <div class="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <header class="header">
      <div class="header-bottom">
        <div class="container">
          <nav class="navbar navbar-expand-xl p-0 align-items-center">
            <a class="site-logo site-title" href="/">
              <img src="images/logo/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="menu-toggle"></span>
            </button>
            <div class="collapse navbar-collapse mt-lg-0 mt-3" id="mainNavbar">
              <ul class="nav navbar-nav main-menu ms-auto me-3">
                <li class="nav-item">
                  <a href="/" class="nav-link">Home</a>
                </li>

                {{-- Drop down menu start --}}
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="servicesDropdown"  style="background: #17081e;">
                    <li><a class="dropdown-item" href="/borehole"></a></li>
                    <li><a class="dropdown-item" href="/borehole">Borehole Drilling</a></li>
                    <li><a class="dropdown-item" href="/construction">Construction & Building</a></li>
                    <li><a class="dropdown-item" href="/kitchens">Kitchens & Renovations</a></li>
                    <li><a class="dropdown-item" href="/plumbing">Plumbing Services</a></li><li><a class="dropdown-item" href="/swimming-pool">Swimming Pools</a></li>li><a class="dropdown-item" href="/hampers">Hampers & Gifts</a></li>
                    <li><a class="dropdown-item" href="/shuttle">Shuttle & Transport</a></li>
                    <li><a class="dropdown-item" href="/solar-electricals">Solar & Electricals</a></li>
                    <li><a class="dropdown-item" href="/trucks">Trucks & Logistics</a></li>
                </ul>
                </li>
                {{-- Drop down menu end --}}
                <li class="nav-item">
                  <a href="/" class="nav-link">About</a>
                </li>


              </ul>
              <div class="navbar-action">

                    @if (Auth::check())
                        <div class="header-auth-btn" style="background-color: #f29f24;">
                            <i class="las la-sign-in-alt"></i>
                            <a href="{{ route('dashboard') }}" class="h-login">My Account &nbsp;</a>
                        </div>
                    @else
                        <div class="header-auth-btn">
                            <i class="las la-sign-in-alt"></i>
                            <a href="{{ route('login') }}" class="h-login">Login</a>
                            <span>/</span>
                            <a href="{{ route('register') }}" class="h-register">Signup</a>
                        </div>
                    @endif

              </div>
          </nav>
        </div>
      </div>
      <!-- header__bottom end -->
    </header>
    <!-- header-section end  -->
    <main class="main-wrapper">
      <section class="banner-section has-bimg" style="background-image: url(' images/banner/solar.jpg ');">
        <div class="banner-line-wrapper">
          <span class="banner-line"></span>
          <span class="banner-line"></span>
          <span class="banner-line"></span>
          <span class="banner-line"></span>
          <span class="banner-line"></span>
          <span class="banner-line"></span>
          <span class="banner-line"></span>
          <span class="banner-line"></span>
        </div>
        <div class="container">
          <div class="row gy-5 justify-content-between align-items-center">

            <div class="col-lg-7 text-lg-start text-center">
              <div class="banner-content wow fadeInUp">
                <div class="banner-top-title">Matabeleland’s Trusted Solar & Electrical Experts</div>
                <h2 class="banner-title">Powering Homes & Businesses with Reliable Energy Solutions</h2>
                <p class="text-white mt-3">
                  From complete solar installations and battery storage systems to electrical wiring and maintenance, Mantu provides safe, efficient, and sustainable power solutions. We help you reduce energy costs, stay powered during outages, and ensure electrical safety for your property.
                </p>
                <div class="d-sm-flex flex-wrap align-items-center mt-2">
                  <a href="assets/downloads/solar-system-guide.pdf" target="_blank" class="btn main-btn me-3 mt-3">Download Solar System Guide</a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 ps-xxl-5 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
              <div class="banner-transfer">
                <h4 class="title">Let us Talk </h4>
                <form method="POST" action="http://mantu.co.zw.test/contact" id="lets-talk">
                  <input type="hidden" name="_token" value="EACPfLXe6uEqHALcDjUsNC2nfZnN2FzGN4ObdPpj" autocomplete="off">
                  <div class="single-transfer">
                    <div class="custom-transfer-field">
                      <span class="caption">Your Name</span>
                      <input type="text" name="first_name" class="form-control sender" placeholder="Full Name" style="margin-bottom: 20px; font-size: 16px;" required="">
                    </div>
                    <div class="custom-transfer-field">
                      <span class="caption">Your Email</span>
                      <input type="email" name="email" class="form-control sender" placeholder="you@example.com" style="margin-bottom: 20px; font-size: 16px;">
                    </div>
                    <div class="custom-transfer-field">
                      <span class="caption">WhatsApp Enable Number</span>
                      <input type="text" name="phone_number" class="form-control sender" placeholder="+44 79 1234 5678" style="margin-bottom: 20px; font-size: 16px;">
                    </div>
                    <div class="custom-transfer-field">
                      <select name="service_type" id="service_type" class="form-control input-solid" style="margin-bottom: 20px; padding-top: 0rem; font-size: 16px;" required="">
                        <option value="" selected="">Select the type of service</option>
                        <option value="construction">Construction / Building</option>
                        <option value="carpentry">Carpentry</option>
                        <option value="plumbing">Plumbing</option>
                        <option value="electrical">Electrical Work</option>
                        <option value="cleaning">Cleaning</option>
                        <option value="shuttle">Shuttle / Car Hire</option>
                        <option value="borehole">Borehole Drilling</option>
                        <option value="errands">Errands / Small Tasks</option>
                        <option value="property_management">Property Management</option>
                        <option value="other">Other Professional Services</option>
                      </select>
                    </div>
                    <div class="custom-transfer-field">
                      <span class="caption">Detailed Information</span>
                      <textarea name="description" class="form-control sender" placeholder="Provide more details about your service request" style="margin-bottom: 20px; font-size: 16px;"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn main-btn w-100 mt-4">Send Now</button>
                </form>
              </div>
            </div>
            <div class="col-12 d-sm-none">
              <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center mt-2">
                <a href="#" class="btn main-btn me-3 mt-3">How It Works</a>
                <a href="#sample-report" class="btn main-btn me-3 mt-3">View Sample Report</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- counter section start -->
      <div class="counter-section">
        <div class="counter-shape"></div>
        <div class="container">
          <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;">
              <h2 class="counter-title text-white" style="text-align: center">
                Mantu delivers dependable solar and electrical solutions for homes, offices, farms, and businesses — built on safety, quality, and sustainability.
            </div>
          </div>
        </div>
      </div>
      <!-- counter section start -->
      <section class="feature-section pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-between gy-5 align-items-center">

            <!-- Left Column: Mantu Features -->
            <div class="col-lg-5 pe-lg-5 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;">
                <h2 class="title text-purple">Solar System Installation</h2>
              <p>We design and install solar systems tailored to your energy needs — from small home setups to large commercial off-grid systems. Every project is tested for efficiency and reliability.</p>

              <h2 class="title text-purple pt-4">Inverters, Batteries & Backup Power</h2>
              <p>Enjoy uninterrupted power with Mantu’s inverter and battery solutions. We integrate hybrid systems to ensure consistent electricity supply even during load shedding.</p>

              <h2 class="title text-purple pt-4">Electrical Wiring & Maintenance</h2>
              <p>Our certified electricians handle full electrical installations, repairs, and maintenance — ensuring safety compliance, durability, and professional finishing for all property types.</p>

              <h2 class="title text-purple pt-4">Energy Audits & Efficiency Upgrades</h2>
              <p>We assess energy usage and provide smart upgrades to lower consumption and reduce costs, helping you transition to more sustainable, cost-effective power systems.</p>

              <h2 class="title text-purple pt-4">Trusted by Diaspora Property Owners</h2>
              <p>For clients abroad, we provide detailed installation reports, remote updates, and transparent cost tracking — ensuring peace of mind and trusted delivery back home.</p>

            </div>

            <!-- Right Column: How Mantu Supports Clients in the Diaspora -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInRight;">
                <div class="feature-thumb">
                    <img src="images/banner/solar.jpg" alt="Plumbing">
                </div>
                </div>

            </div>
        </div>
    </section>
      <!-- choose us section end -->
      <!-- cta section end -->



    </main>
    <footer class="footer-section">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-5">
            <div class="col-lg-4 pe-xl-5">
              <a href="/" class="footer-logo">
                <img src="/images/logo/logo-white.png" alt="image">
              </a>
              <p class="mt-3">Mantu provides in-house trades and project delivery services across Matabeleland. We guarantee accountable delivery and clear documentation for diaspora and local clients.</p>
              <div class="footer-payment mt-3">
                <h6 class="text-white mb-2">Payment Methods:</h6>
                <img src="images/footer/631c5dc0100391662803392.png" alt="">
              </div>
            </div>
            <div class="col-lg-2 col-6">
              <h5 class="footer-title">About Company</h5>
              <ul class="footer-menu justify-content-center">
                <li>
                  <a href="#privacy.html">Privacy Policy</a>
                </li>
                <li>
                  <a href="#terms.html">Terms &amp; Conditions</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-2 col-6">
              <h5 class="footer-title">More Links</h5>
              <ul class="footer-menu justify-content-center">
                <li>
                  <a href="/">Home</a>
                </li>
                <li>
                  <a href="#about.html">About</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h5 class="footer-title">Contact</h5>
              <ul class="footer-info-list">
                <li>
                  <i class="fas fa-map-marked-alt"></i>
                  <span>Albion Court, Fort St &amp; 14th Ave, Bulawayo</span>
                </li>
                <li>
                  <i class="fas fa-phone-square-alt"></i>
                  <span>+263 78 393 0023</span>
                </li>
                <li>
                  <a href="https://wa.me/447983951875" target="_blank" style="color: #25D366;">
                    <i class="fab fa-whatsapp fa-2x"></i>
                  </a>
                  <span>+44 79 8395 1875</span>
                </li>
                <li>
                  <i class="fas fa-envelope"></i>
                  <span>Info@mantu.co.zw</span>
                </li>
              </ul>
              <h6 class="text-white fs--16px mb-3 mt-4">Subscribe To Our Newsletter</h6>
              <form class="subscribe-form" id="subscribe">
                <input type="email" name="email" class="form-control subscribe-email" placeholder="Your email" autocomplete="off">
                <button type="submit">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row gy-2">
            <div class="col-lg-8 text-lg-start text-center">
              <p> Copyright © 2025 Mantu. All Rights Reserved. </p>
            </div>
            <div class="col-lg-4">
              <ul class="social-media-links justify-content-lg-end justify-content-center">
                <li>
                  <a href="Http://www.facebook.com" target="_blank" class="twitter">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="Http://www.linkedin.com" target="_blank" class="twitter">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
                <li>
                  <a href="Http://www.twitter.com" target="_blank" class="twitter">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="Http://www.pinterest.com" target="_blank" class="twitter">
                    <i class="fab fa-pinterest-p"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/lib/jquery-3.6.0.min.js"></script>
    <!-- bootstrap 5 js -->
    <script src="js/lib/bootstrap.bundle.min.js"></script>
    <!-- slick  slider js -->
    <script src="js/lib/slick.min.js"></script>
    <script src="js/lib/lightcase.js"></script>
    <div id="speechify-global-notifications"></div>
    <script src="js/lib/countrySelect.js"></script>
    <!-- wow js  -->
    <script src="js/lib/wow.min.js"></script>
    <script src="js/izitoast.min.js"></script>
    <script src="js/lib/select2.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-DRP5CLRML0"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-DRP5CLRML0');
    </script>
    <!-- main js -->
    <script src="js/app.js"></script>
  </body>
</html>
