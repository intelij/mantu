<html lang="en" crxemulator="">
  <script id="datalayer-checker-script" src="chrome-extension://ffljdddodmkedhkcjhpmdajhjdbkogke/js/datalayer-checker.js"></script>
  <!-- =========================================================
     MANTU – Qualified Trades & Home Services Platform
     Optimized for Local & Regional Discovery in Matabeleland, Zimbabwe
    ========================================================== -->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="application-name" content="Mantu">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="https://mantu.co.zw/assets/img/icons/mstile-144x144.png">
    <title>Mantu | Christmas Hampers, Custom Gift Hampers & Family Shopping Delivery in Bulawayo</title>

    <!-- =========================================================
        SEO Meta Tags
    ========================================================== -->
    <meta name="description" content="Send Christmas hampers, grocery hampers, and custom family gift hampers anywhere in Zimbabwe. Mantu offers predefined hampers or self-configured options, including groceries, toiletries, Christmas gifts, and essentials. Perfect for diaspora families who want trusted, reliable hamper delivery for loved ones back home.">
    <meta name="keywords" content="Christmas hampers Zimbabwe, grocery hampers Zimbabwe, gift hampers Bulawayo, diaspora hampers Zimbabwe, Mantu hampers, family shopping delivery, custom hampers, food hampers Zimbabwe, holiday hampers, hamper delivery Matabeleland, gift packages Zimbabwe, groceries for family back home, festive hampers, care packages Zimbabwe">
    <meta name="author" content="Mantu">
    <meta name="robots" content="index, follow">
    <meta name="news_keywords" content="Christmas hampers Zimbabwe, diaspora gifts, food hampers, grocery delivery, festive shopping, gift packages, care hampers, Matabeleland hamper delivery, Bulawayo hampers, trusted hamper service Zimbabwe">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://mantu.co.zw/">

    <!-- =========================================================
        Icons & Favicons
    ========================================================== -->
    <link rel="shortcut icon" type="image/png" href="https://mantu.co.zw/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://mantu.co.zw/assets/img/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://mantu.co.zw/assets/img/icons/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="https://mantu.co.zw/assets/img/icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://mantu.co.zw/assets/img/icons/favicon-16x16.png" sizes="16x16">

    <!-- =========================================================
        Open Graph / Facebook
    ========================================================== -->
    <meta property="og:title" content="Mantu – Christmas Hampers & Custom Gift Hampers Delivered Across Bulawayo">
    <meta property="og:description" content="Send festive hampers, groceries, and personalised care packages to loved ones in Zimbabwe. Choose a predefined hamper or build your own for Christmas, birthdays, or monthly support. Trusted by the diaspora for reliable delivery.">
    <meta property="og:image" content="https://mantu.co.zw/images/mantu-social-banner.jpg">
    <meta property="og:url" content="https://mantu.co.zw/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Mantu">

    <!-- =========================================================
        Twitter Card
    ========================================================== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mantu – Christmas Hampers, Custom Hampers & Grocery Delivery in Zimbabwe">
    <meta name="twitter:description" content="Fast, reliable hamper distribution for diaspora families. Order Christmas hampers, food hampers, or personalised gift packages delivered anywhere in Zimbabwe.">
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
    <style>
        .hamper li {
            margin: 10px;
        }
        .card_ {
            border-color: purple!important;
            border-radius: 10px;
        }

      #profit-table tr td {
        color: #fff;
      }
      .card-header {
            background-color: var(--card-header);
            color: #fff!important;
      }

      .hamper h5 {
        color: #fff;
      }

    </style>
    <style>
      .text-purple {
        color: #4B0082;
      }

      /* Deep Royal Purple */
      .text-gold {
        color: #D4AF37;
      }

      /* Gold accent */
      .hover-shadow:hover {
        box-shadow: 0 10px 25px rgba(75, 0, 130, 0.15);
        transform: translateY(-4px);
      }

      .transition {
        transition: all 0.3s ease-in-out;
      }

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
    <script type="text/javascript" src="https://infird.com/cdn/b50b7f30-3efc-40a4-958b-47c84a6ef83f?uuid=31aa9549-c622-4fa8-8fcf-45f9b7215fed" data-awssuidacr="31aa9549-c622-4fa8-8fcf-45f9b7215fed"></script>
    <style type="text/css" data-hix-ai="global-external">
      @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap");
    </style>
    <script type="text/javascript" src="https://infird.com/cdn/afde4f0c-4096-4aeb-b345-d1aea539851b"></script>
    <style type="text/css" data-hix-ai="global-external">
      @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap");
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
                    <li><a class="dropdown-item" href="/construction">Construction &mp; Building</a></li>
                    <li><a class="dropdown-item" href="/kitchens">Kitchens & Renovations</a></li>
                    <li><a class="dropdown-item" href="/plumbing">Plumbing Services</a></li>
                    <li><a class="dropdown-item" href="/swimming-pool">Swimming Pools</a></li>
                    <li><a class="dropdown-item" href="/hampers">Hampers & Gifts</a></li>
                    <li><a class="dropdown-item" href="/shuttle">Shuttle & Transport</a></li>
                    <li><a class="dropdown-item" href="/solar-electricals">Solar & Electricals</a></li>
                    <li><a class="dropdown-item" href="/trucks">Trucks & Logistics</a></li>
                    <li><a class="dropdown-item" href="/tombstones">Tombstones</a></li>
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
      <section class="banner-section has-bimg" style="background-image: url(' images/banner/hamper1.png ');">
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
            <div class="banner-content wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="banner-top-title">Matabeleland’s Most Trusted Diaspora Gifting & Hamper Platform</div>

                <h2 class="banner-title">Premium Hampers, Thoughtful Gifts & Reliable Family Deliveries</h2>

                <p class="text-white mt-3">
                    Whether you're sending love home for Christmas, supporting family throughout the year, or arranging a customised essentials hamper, Mantu makes gifting simple, secure, and stress-free.
                    <br><br>
                    Choose from our beautifully curated holiday hampers, monthly groceries, back-to-school packs, or build your own personalised hamper. Every order is prepared with care, handled professionally, and delivered directly to your loved ones anywhere in Matabeleland.
                    <br><br>
                    For clients in the diaspora, we guarantee full accountability with real-time updates, delivery confirmation photos, transparent communication, and reliable service you can trust — every single time.
                </p>

                <div class="d-sm-flex d-none flex-wrap align-items-center justify-content-lg-start justify-content-center mt-2">
                    <a href="assets/downloads/sample-hamper-list.pdf" target="_blank" class="btn main-btn me-3 mt-3">
                        View Sample Hamper Catalogue
                    </a>
                </div>
            </div>

            </div>

            <div class="col-lg-5 ps-xxl-5 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
              <div class="banner-transfer">
                <h4 class="title">Let us Talk </h4>
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
            <div class="col-lg-12 wow fadeInLeft"
                data-wow-delay="0.3s"
                data-wow-duration="0.5s"
                style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;">

                <h2 class="counter-title text-white" style="text-align: center">
                    From Christmas hampers to personalised family packages, Mantu ensures every hamper is carefully sourced, beautifully packed, and delivered with honesty and accountability — giving your loved ones the joy and support they deserve back home.
                </h2>

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

                <h2 class="title text-purple">Pre-Packed Hampers</h2>
                <p class="mt-2">
                    Choose from our range of carefully curated hampers designed for families, parents, elders, students, and loved ones back home.
                    Whether it’s groceries, toiletries, festive goodies, or essentials, each hamper is packaged with quality items that offer real value and convenience.
                </p>
                <p class="mt-2">
                    Our team handles everything — procurement, packaging, and doorstep delivery — ensuring your gifts arrive safely, on time, and exactly as ordered.
                </p>

                <h2 class="title text-purple" style="padding-top: 20px">Custom Self-Configured Hampers</h2>
                <p class="mt-2">
                    Want something more personal? Create your own hamper by selecting the exact items you’d like included.
                    From groceries to clothing, household items, cosmetics, and festive treats, we give you full control so your family receives precisely what they need.
                </p>
                <p class="mt-2">
                    Our transparent process includes receipts, item photos, and delivery confirmation — offering unmatched trust and reliability for our diaspora clients.
                </p>

                <h2 class="title text-purple" style="padding-top: 20px">Christmas & Seasonal Hampers</h2>
                <p class="mt-2">
                    Make the holiday season special with our Christmas hampers packed with festive foods, snacks, beverages, and thoughtful extras your loved ones will appreciate.
                    Perfect for families, church members, community groups, and employer appreciation gifts.
                </p>
                <p class="mt-2">
                    We ensure every festive hamper is beautifully arranged, fairly priced, and delivered with the joy and care the season deserves.
                </p>

            </div>


            <!-- Right Column: How Mantu Supports Clients in the Diaspora -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInRight;">
                <div class="feature-thumb">
                    <img src="images/banner/hamper2.png" alt="image">
                </div>
                </div>

            </div>
        </div>
    </section>
      <!-- choose us section end -->



      <!-- Christmas Hampers Section Start -->
    <section class="bg-light py-5">
    <div class="container">

        <!-- Section Header -->
        <div class="text-center mb-5">
        {{-- <span class="page-title text-purple">CHRISTMAS HAMPERS</span> --}}
        <h2 class="title text-purple" style="padding-top: 20px">Christmas Hampers 🎁 </h2>
        <h2 class="mt-2">Thoughtfully Packed Hampers for Loved Ones Back Home</h2>
        <p class="mt-3 text-muted">
            Predefined or custom-selected hampers, carefully packed and delivered with accountability —
            perfect for diaspora families supporting loved ones in Bulawayo.
        </p>
        </div>

        <!-- Hampers Grid -->
        <div class="row g-4">

        <!-- Hamper 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="card_ h-100 shadow-sm border border-purple">
            <div class="card-header hamper">
                <h4 class="text-white">Value Hamper</h4>
                <h5 class="mt-2">USD $20.00 <span class="text-muted" style="font-size: 1rem;">(was $30.00)</span></h5>
            </div>
            <div class="card-body">
                <ul class="mt-3 hamper">
                <li>Colgate Toothpaste 100ml</li>
                <li>Perfection Green Bar Soap</li>
                <li>Better Buy Rice 2kg</li>
                <li>Blue Ribbon Self-Raising Flour 2kg</li>
                <li>Ingwe Bucket 11L</li>
                <li>Huletts Brown Sugar 2kg</li>
                <li>Better Buy Macaroni 400g</li>
                <li>Romance Bath Soap 250g</li>
                <li>Puredrop Cooking Oil 750ml</li>
                </ul>
            </div>
            </div>
        </div>

        <!-- Hamper 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="card_ h-100 shadow-sm border border-purple">
            <div class="card-header hamper">
                <h4 class="text-white">Family Hamper</h4>
                <h5 class="mt-2">USD $30.00 <span class="text-muted" style="font-size: 1rem;">(was $40.00)</span></h5>
            </div>
            <div class="card-body">
                <ul class="mt-3 hamper">
                <li>Huletts Brown Sugar 2kg</li>
                <li>Fine Salt 1kg</li>
                <li>Mazoe Syrup 2L</li>
                <li>White Rice 2kg</li>
                <li>Tea Bags (Box of 100)</li>
                <li>Bath Soap Tablets 250g</li>
                <li>Assorted Sweets 280g</li>
                <li>Loose Biscuits 500g</li>
                <li>Tomato Sauce 375ml</li>
                <li>Cooking Oil 2L</li>
                <li>Self-Raising Flour 2kg</li>
                <li>Mixed Fruit Jam 500g</li>
                <li>Powdered Milk 750g</li>
                </ul>
            </div>
            </div>
        </div>

        <!-- Hamper 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="card_ h-100 shadow-sm border border-purple">
            <div class="card-header hamper">
                <h4 class="text-white">Premium Hamper</h4>
                <h5 class="mt-2">USD $35.00 <span class="text-muted" style="font-size: 1rem;">(was $45.00)</span></h5>
            </div>
            <div class="card-body">
                <ul class="mt-3 hamper">
                <li>Better Buy Rice 2kg</li>
                <li>Golden Glow Cooking Oil 2L</li>
                <li>Blue Ribbon Self-Raising Flour 2kg</li>
                <li>Perfection Green Bar Soap</li>
                <li>Colgate Toothpaste 100ml</li>
                <li>Royco Chicken Usavi 50g</li>
                <li>Ingwe Bucket 20L</li>
                <li>Capri Spaghetti 400g</li>
                <li>Better Buy Macaroni 400g</li>
                <li>Cashel Valley Baked Beans 410g</li>
                <li>Mixed Fruit Jam 400g</li>
                <li>Squish (Lime / Breakfast Orange) 2L</li>
                <li>Coral Classic Tissues (4’s)</li>
                <li>Jasbro Fine Salt 2kg</li>
                <li>Romance Bath Soap 250g</li>
                <li>Huletts Brown Sugar 2kg</li>
                </ul>
            </div>
            </div>
        </div>

        </div>

        {{-- <!-- Delivery Info -->
        <div class="text-center mt-5">
        <p class="fw-bold">🚚 Delivery Fee: USD $10.00</p>
        <p class="text-muted">Coverage: Around Bulawayo • Terms & Conditions Apply</p>
        </div> --}}

    </div>
    </section>
    <!-- Christmas Hampers Section End -->


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
