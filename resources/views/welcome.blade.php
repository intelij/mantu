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

    <!-- =========================================================
        SEO Meta Tags
    ========================================================== -->
    <meta name="description" content="Mantu provides professional construction, carpentry, plumbing, electrical work, cleaning, shuttle services, borehole drilling, errands, and property management across Matabeleland. Our qualified experts deliver reliable, transparent, and affordable home and commercial services.">
    <meta name="keywords" content="Mantu, qualified tradespeople Zimbabwe, builders Bulawayo, electricians Matabeleland, plumbers Zimbabwe, carpenters Bulawayo, cleaning services Zimbabwe, borehole drilling Bulawayo, car hire Zimbabwe, shuttle services Matabeleland, property management Bulawayo, home repairs, maintenance contractors, handyman Bulawayo, construction companies Zimbabwe, verified professionals, small tasks, errands, renovation experts, trusted contractors Zimbabwe">
    <meta name="author" content="Mantu">
    <meta name="robots" content="index, follow">
    <meta name="news_keywords" content="Mantu, trusted tradespeople, builders, electricians, plumbers, carpenters, cleaning, borehole drilling, property management, Matabeleland, Bulawayo, Zimbabwe, home services, contractors, renovation, repairs, handyman">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://mantu.co.zw/">

    <!-- =========================================================
        Icons & Favicons
    ========================================================== -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('assets/img/icons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url('assets/img/icons/apple-touch-icon-152x152.png') }}">
    <link rel="icon" type="image/png" href="{{ url('assets/img/icons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ url('assets/img/icons/favicon-16x16.png') }}" sizes="16x16">

    <!-- =========================================================
        Open Graph / Facebook
    ========================================================== -->
    <meta property="og:title" content="Mantu – Qualified Trades & Reliable Home Services in Matabeleland, Zimbabwe">
    <meta property="og:description" content="Hire qualified builders, electricians, plumbers, carpenters, cleaners, and property managers. Mantu provides trusted local professionals for all home and commercial needs across Matabeleland.">
    <meta property="og:image" content="https://mantu.co.zw/images/mantu-social-banner.jpg">
    <meta property="og:url" content="https://mantu.co.zw/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Mantu">

    <!-- =========================================================
        Twitter Card
    ========================================================== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mantu – Qualified Tradespeople & Home Services in Zimbabwe">
    <meta name="twitter:description" content="Mantu connects you with verified builders, plumbers, electricians, carpenters, and cleaners. Trusted professionals serving homes and businesses in Matabeleland.">
    <meta name="twitter:image" content="https://mantu.co.zw/images/mantu-social-banner.jpg">

    <!-- =========================================================
        Structured Data (JSON-LD)
    ========================================================== -->
    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Mantu",
        "image": "https://mantu.co.zw/images/mantu-social-banner.jpg",
        "url": "https://mantu.co.zw",
        "telephone": "+263783930023",
        "email": "info@mantu.co.zw",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Ground Floor Albion Court, Crn Fort Street & 13th Avenue",
            "addressLocality": "Bulawayo",
            "addressCountry": "ZW"
        },
        "description": "Mantu provides all-in-one trade and home services through qualified builders, electricians, plumbers, carpenters, cleaners, and property managers across Matabeleland, Zimbabwe. We ensure vetted professionals, fair pricing, and dependable results.",
        "openingHours": ["Mo-Fr 08:00-18:00", "Sa 08:00-13:00"],
        "areaServed": "Matabeleland, Zimbabwe",
        "sameAs": [
            "https://www.facebook.com/mantuzw",
            "https://www.instagram.com/mantuzw",
            "https://www.linkedin.com/company/mantu-zimbabwe"
        ]
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

    <style>
        #profit-table tr td {
        color: #fff;
        }
    </style>
    <style>
        .text-purple { color: #4B0082; } /* Deep Royal Purple */
        .text-gold { color: #D4AF37; } /* Gold accent */
        .hover-shadow:hover {
            box-shadow: 0 10px 25px rgba(75, 0, 130, 0.15);
            transform: translateY(-4px);
        }
        .transition { transition: all 0.3s ease-in-out; }

        .header-auth-btn-register {
            background-color: #f8a522;
            display: inline-flex;
            align-items: center;
            color: #fff;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
        }

        </style>
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
                    <li><a class="dropdown-item" href="/plumbing">Plumbing Services</a></li>
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
      <section class="banner-section has-bimg" style="background-image: url(' images/banner/63ce5b76a15741674468214.jpg ');">
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
              <div class="banner-content wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                <div class="banner-top-title">Matebeleland&#039;s Trusted Diaspora Companion Platform</div>
                <h2 class="banner-title">A Service Built to Restore Trust After Years of Disappointment</h2>
                <p class="text-white mt-3">For years, many in the diaspora have faced disappointment — missed deadlines, lost money, poorly executed work, and broken promises from unreliable relatives and unqualified workers. Mantu was created to bring an end to that frustration and rebuild trust where it has been lost.</p>
                <div class="d-sm-flex d-none flex-wrap align-items-center justify-content-lg-start justify-content-center mt-2">
                  {{-- <a href="#" class="btn main-btn me-3 mt-3">How It Works</a> --}}
                <a href="assets/downloads/report.pdf" target="_blank" class="btn main-btn me-3 mt-3">View Sample Report</a>
                {{-- <a href="#" data-rel="lightcase:myCollection" class="banner-video-btn mt-3">
                  <i class="fas fa-play"></i>
                  <span>How To Send Money</span>
                </a> --}}
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 ps-xxl-5 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
              <div class="banner-transfer">
                <h4 class="title">Let us Talk </h4>

                @if (session('success'))
                    <div class="alert alert-success mt-3">{{ session('success') }}</div>
                @endif

               <form method="POST" action="{{ route('contact.store') }}" id="lets-talk">
                    @csrf

                    <div class="single-transfer">
                        <div class="custom-transfer-field">
                            <span class="caption">Your Name</span>
                            <input type="text" name="first_name" class="form-control sender"
                                placeholder="Sam Bhoqo" style="margin-bottom: 20px; font-size: 16px;" required>
                        </div>

                        <div class="custom-transfer-field">
                            <span class="caption">Your Email</span>
                            <input type="email" name="email" class="form-control sender"
                                placeholder="you@example.com" style="margin-bottom: 20px; font-size: 16px;">
                        </div>

                        <div class="custom-transfer-field">
                            <span class="caption">WhatsApp Enable Number</span>
                            <input type="text" name="phone_number" class="form-control sender"
                                placeholder="+44 79 1234 5678" style="margin-bottom: 20px; font-size: 16px;">
                        </div>

                        <div class="custom-transfer-field">
                            <select name="service_type" id="service_type" class="form-control input-solid"
                                    style="margin-bottom: 20px; padding-top: 0rem; font-size: 16px;" required>
                                <option value="" selected>Select the type of service</option>
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
                            <textarea name="description" class="form-control sender"
                                    placeholder="Provide more details about your service request"
                                    style="margin-bottom: 20px; font-size: 16px;"></textarea>
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
                {{-- <a href="#" data-rel="lightcase:myCollection" class="banner-video-btn mt-3">
                  <i class="fas fa-play"></i>
                  <span>How To Send Money</span>
                </a> --}}
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
            <div class="col-lg-4 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.5s">
              <h2 class="counter-title text-white">Reliable &amp; Trusted Trades people Portal</h2>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="0.5s">
              <div class="counter-wrapper">
                <div class="row gy-3">
                  <div class="col-md-3 col-6">
                    <div class="counter-item">
                      <h3 class="title site-color">2K+</h3>
                      <p class="text-white">Active Users</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="counter-item">
                      <h3 class="title site-color">100+</h3>
                      <p class="text-white">Jobs Completed</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="counter-item">
                      <h3 class="title site-color">56+</h3>
                      <p class="text-white">Suburbs Covered</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="counter-item">
                      <h3 class="title site-color">15+</h3>
                      <p class="text-white">Service Providers</p>
                    </div>
                  </div>
                </div>
              </div>
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
            <h2 class="section-title text-purple">Why Choose Mantu</h2>
            <p class="mt-3">As your trusted Diaspora Companion, Mantu delivers reliable, professional, and transparent services for every home or property project.</p>

            <div class="feature-item mt-4">
            <div class="icon"><i class="fas fa-tools"></i></div>
            <div class="content">
                <h3 class="title">Professional Tradesmen</h3>
                <p class="mt-2">Our skilled in-house team handles every project — no outsourcing, no middlemen, just expert craftsmanship.</p>
            </div>
            </div>

            <div class="feature-item mt-4">
            <div class="icon"><i class="fas fa-handshake"></i></div>
            <div class="content">
                <h3 class="title">Trust & Transparency</h3>
                <p class="mt-2">We keep you informed with verified updates, photos, and clear documentation at every stage of your project.</p>
            </div>
            </div>

            <div class="feature-item mt-4">
            <div class="icon"><i class="fas fa-clock"></i></div>
            <div class="content">
                <h3 class="title">Accountable & Timely Delivery</h3>
                <p class="mt-2">From consultation to completion, we manage your project efficiently — ensuring quality, speed, and accountability.</p>
            </div>
            </div>
        </div>

        <!-- Right Column: How Mantu Supports Clients in the Diaspora -->
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInRight;">
              <div class="feature-thumb">
                <img src="images/feature/63ce5c179e03d1674468375.jpg" alt="image">
              </div>
            </div>

        </div>
    </div>
    </section>





      <section class="how-work-section pt-100 pb-100">
        <div class="container">
          <div class="section-header">
            <div class="row">
              <div class="col-xxl-7 col-lg-10">
                <span class="section-cation-title style-two mb-2">How it works</span>
                <h2 class="section-title text-white">Join the <span>thousands of users</span> worldwide trusting Mantu everyday </h2>
              </div>
            </div>
          </div>
          <div class="row gy-4 work-wrapper">

            <div class="col-lg-12 col-sm-12  wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
              <div class="work-item">
                <h4 class="title text-white">Why this matters</h4>
                <p class="text-white mt-2">Many clients living overseas have experienced project failures or poor workmanship from rogue contractors. Mantu removes risk by being the accountable service provider — employing, supervising and delivering the work ourselves, and keeping you informed every step of the way.</p>
              </div>
            </div>


          </div>
        </div>
      </section>
      <section class="choose-section pt-100 pb-100">
        <div class="choose-us-img" style="background-image: url('images/why_choose_us/63ce5b9a5e2851674468250.jpg');"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 pe-xl-5">
                <div class="section-header">
                    <h2 class="section-title">Your Trusted Diaspora Companion for Reliable Project Delivery</h2>
                </div>
                <div class="row gy-4">

                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                    <div class="choose-item">
                        <h4 class="title">Consultation &amp; Quotation</h4>
                        <p>We assess your project remotely or on-site and provide a clear, transparent written quote before any work begins.</p>
                    </div>
                    </div>

                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                    <div class="choose-item">
                        <h4 class="title">Dedicated Project Team</h4>
                        <p>Mantu assigns a skilled team with a single point of contact who manages every phase of your project—ensuring accountability and consistent communication.</p>
                    </div>
                    </div>

                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                    <div class="choose-item">
                        <h4 class="title">Verified Procurement</h4>
                        <p>All materials are sourced and supplied directly by Mantu, complete with receipts, supplier verification, and applicable warranties.</p>
                    </div>
                    </div>

                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                    <div class="choose-item">
                        <h4 class="title">Regular Reporting</h4>
                        <p>Clients abroad receive detailed progress updates including milestone photos, expense reports, and transparent financial tracking throughout the project.</p>
                    </div>
                    </div>

                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                    <div class="choose-item">
                        <h4 class="title">Completion &amp; Handover</h4>
                        <p>We conduct a final inspection and documented handover to guarantee every detail matches your specifications—delivered on time and to standard.</p>
                    </div>
                    </div>

                </div>
                </div>


          </div>
        </div>
      </section>
      <!-- choose us section end -->

      <!-- cta section end -->
      <section class="faq-section pt-100 pb-100 section-bg">


        {{-- <section class="py-100 bg-light"> --}}
        <div class="container">
            <div class="row mb-5 align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-7 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.5s">
                <h2 class="section-title text-dark">Our Core Services</h2>
                <p class="mt-3 fs--18px text-muted">
                End-to-end delivery by Mantu teams — we supply materials, manage works, and complete
                quality sign-offs to the highest standards. Every project is handled by qualified professionals
                ensuring reliability and transparency.
                </p>
            </div>
            {{-- <div class="col-lg-4 text-lg-end wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.5s">
                <a href="/services" class="btn btn-outline-dark rounded-pill px-4">
                View All Services →
                </a>
            </div> --}}
            </div>

            <div class="row gy-4">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.5s">
                <div class="service-card p-4 h-100 bg-white rounded-4 shadow-sm hover-shadow transition">
                <h4 class="text-purple mb-3">Construction &amp; Building</h4>
                <p class="text-muted mb-3 small">
                    Foundations, extensions, structural repairs and full builds — managed by Mantu site teams from start to finish.
                </p>
                <a href="/construction" class="text-decoration-none text-gold fw-semibold">Read More →</a>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                <div class="service-card p-4 h-100 bg-white rounded-4 shadow-sm hover-shadow transition">
                <h4 class="text-purple mb-3">Kitchens, Tiling &amp; Ceilings</h4>
                <p class="text-muted mb-3 small">
                    Design, carpentry, tiling and ceiling installations for durable, modern, and beautiful interiors built to last.
                </p>
                <a href="/kitchens" class="text-decoration-none text-gold fw-semibold">Read More →</a>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.5s">
                <div class="service-card p-4 h-100 bg-white rounded-4 shadow-sm hover-shadow transition">
                <h4 class="text-purple mb-3">Plumbing &amp; Borehole Drilling</h4>
                <p class="text-muted mb-3 small">
                    From leaks and reticulation to full water solutions — Mantu provides certified plumbers and borehole drilling crews.
                </p>
                <a href="/plumbing" class="text-decoration-none text-gold fw-semibold">Read More →</a>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
                <div class="service-card p-4 h-100 bg-white rounded-4 shadow-sm hover-shadow transition">
                <h4 class="text-purple mb-3">Solar &amp; Electricals</h4>
                <p class="text-muted mb-3 small">
                    Design and installation of solar power systems, electrical upgrades, and certified wiring for homes and businesses.
                </p>
                <a href="/solar-electricals" class="text-decoration-none text-gold fw-semibold">Read More →</a>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.5s">
                <div class="service-card p-4 h-100 bg-white rounded-4 shadow-sm hover-shadow transition">
                <h4 class="text-purple mb-3">Shuttle, Transport &amp; Logistics</h4>
                <p class="text-muted mb-3 small">
                    Safe shuttle and transport solutions for crew, materials, and client errands across Matabeleland and beyond.
                </p>
                {{-- <a href="/services/transport" class="text-decoration-none text-gold fw-semibold">Read More →</a> --}}
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.5s">
                <div class="service-card p-4 h-100 bg-white rounded-4 shadow-sm hover-shadow transition">
                <h4 class="text-purple mb-3">Swimming Pool Construction & Repair</h4>
                <p class="text-muted mb-3 small">
                    From custom-designed pools to precision repairs, we bring your vision to life and keep your pool in perfect condition all year round.
                </p>
                <a href="/swimming-pool" class="text-decoration-none text-gold fw-semibold">Read More →</a>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.5s">
                <div class="service-card p-4 h-100 bg-white rounded-4 shadow-sm hover-shadow transition">
                <h4 class="text-purple mb-3">Christmas Hampers</h4>
                <p class="text-muted mb-3 small">
                    Delight your loved ones or clients with bespoke Christmas hampers carefully sourced, beautifully packaged, and delivered on time by Mantu.
                </p>
                <a href="/hampers" class="text-decoration-none text-gold fw-semibold">Read More →</a>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.5s">
                <div class="service-card p-4 h-100 bg-white rounded-4 shadow-sm hover-shadow transition">
                <h4 class="text-purple mb-3">Ondemand Personal Shopper</h4>
                <p class="text-muted mb-3 small">
                    Reliable haulage, logistics, and relocation support for materials and equipment, delivered efficiently by Mantu.
                </p>
                {{-- <a href="/services/logistics" class="text-decoration-none text-gold fw-semibold">Read More →</a> --}}
                </div>
            </div>
            </div>
        </div>
        {{-- </section> --}}
      </section>
      <section class="testimonial-section pt-120 pb-5">
        <div class="testimonial-shape"></div>
        <div class="container">
          <div class="section-header wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
            <div class="row justify-content-between align-items-end gy-3">
              <div class="col-lg-6 col-sm-8">
                <span class="section-cation-title style-two">TESTIMONIAL</span>
                <h2 class="section-title text-white">Our Happy Clients</h2>
                <p class="mt-3 text-white"> Each move conveys a conveyance guarantee. We convey your exchange on time. </p>
              </div>
              <div class="col-lg-2 col-sm-4">
                <div class="testimonial-nav justify-content-end">
                  <button type="button" class="prev-btn">
                    <i class="las la-long-arrow-alt-left"></i>
                  </button>
                  <button type="button" class="next-btn">
                    <i class="las la-long-arrow-alt-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
              <div class="testimonial-slider">
                <div class="single-slide">
                  <div class="testimonial-item">
                    <div class="client">
                      <div class="thumb">
                        <img src="images/testimonial/62fb2d2f0767b1660628271.jpg" alt="image">
                      </div>
                      <div class="content">
                        <h6 class="name">Thembekile</h6>
                        <p class="designation">Landlord &amp; Homeowner</p>
                      </div>
                    </div>
                    <p class="testimonial-dsc"> Mantu connected me with a skilled plumber who fixed my leaky kitchen sink in no time. I&#039;m so happy with how simple and reliable the platform is. Highly recommend!</p>
                  </div>
                </div>
                <div class="single-slide">
                  <div class="testimonial-item">
                    <div class="client">
                      <div class="thumb">
                        <img src="images/testimonial/62fb2d16507ac1660628246.jpg" alt="image">
                      </div>
                      <div class="content">
                        <h6 class="name">Karen</h6>
                        <p class="designation">Homeowner</p>
                      </div>
                    </div>
                    <p class="testimonial-dsc"> As a landlord living abroad, finding trustworthy tradespeople was tough, but Mantu made it seamless. They repaired my property quickly and professionally.</p>
                  </div>
                </div>
                <div class="single-slide">
                  <div class="testimonial-item">
                    <div class="client">
                      <div class="thumb">
                        <img src="images/testimonial/62fb2d10119d01660628240.jpg" alt="image">
                      </div>
                      <div class="content">
                        <h6 class="name">Nhlanhla</h6>
                        <p class="designation">Homeowner</p>
                      </div>
                    </div>
                    <p class="testimonial-dsc"> I needed an electrician urgently, and Mantu delivered! The entire process was smooth, and the electrician was both friendly and efficient. Amazing service!</p>
                  </div>
                </div>
                <div class="single-slide">
                  <div class="testimonial-item">
                    <div class="client">
                      <div class="thumb">
                        <img src="images/testimonial/62fb2cfe2f9fe1660628222.jpg" alt="image">
                      </div>
                      <div class="content">
                        <h6 class="name">Lungisani</h6>
                        <p class="designation">Homeowner</p>
                      </div>
                    </div>
                    <p class="testimonial-dsc"> Mantu saved me so much hassle! I booked a painter for my Airbnb cottage, and the work was completed perfectly. Transparent pricing and no hidden fees.</p>
                  </div>
                </div>
              </div>
              <!-- testimonial-slider end -->
            </div>
          </div>
        </div>
      </section>

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
              <p> Copyright &copy; {{ date('Y')}} Mantu. All Rights Reserved. </p>
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
    <script src="js/lib/countrySelect.js"></script>
    <!-- wow js  -->
    <script src="js/lib/wow.min.js"></script>
    <script src="js/izitoast.min.js"></script>
    <script src="js/lib/select2.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DRP5CLRML0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DRP5CLRML0');
    </script>

    <!-- main js -->
    <script src="js/app.js"></script>

  </body>
</html>
