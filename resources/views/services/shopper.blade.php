<!DOCTYPE html>
<html lang="en">
  <!-- =========================================================
     MANTU – Personal Shopper & Grocery Delivery Service
     Optimized for Local & Regional Discovery in Matabeleland, Zimbabwe
    ========================================================== -->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="application-name" content="{{ setting('app_name') }}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="{{ url('assets/img/icons/mstile-144x144.png') }}">

    <title>{{ setting('app_name') }} | Personal Shopper & Grocery Delivery in Matabeleland, Zimbabwe</title>

    <!-- =========================================================
        SEO Meta Tags
    ========================================================== -->
    <meta name="description" content="Need groceries or essentials delivered? Mantu offers a trusted personal shopping service in Bulawayo and surrounding areas. We do the shopping, pickups, and deliveries so you can save time and stay stress-free.">
    <meta name="keywords" content="Mantu, personal shopper, grocery delivery Bulawayo, errands Zimbabwe, shopping assistant, same-day delivery, buy groceries online, Bulawayo delivery service, Zimbabwe errands, Mantu shopper">
    <meta name="author" content="Mantu">
    <meta name="robots" content="index, follow">
    <meta name="news_keywords" content="Mantu, personal shopper, grocery delivery, Bulawayo, Matabeleland, Zimbabwe, shopping, errands, courier, delivery service">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://mantu.co.zw/personal-shopper">

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
    <meta property="og:title" content="Mantu – Personal Shopper & Grocery Delivery Service in Matabeleland, Zimbabwe">
    <meta property="og:description" content="Order groceries and essentials with ease. Mantu’s personal shoppers handle the queues, shopping, and delivery to your home or workplace across Bulawayo and Matabeleland.">
    <meta property="og:image" content="https://mantu.co.zw/images/personal-shopper-banner.jpg">
    <meta property="og:url" content="https://mantu.co.zw/personal-shopper">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Mantu">

    <!-- =========================================================
        Twitter Card
    ========================================================== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mantu – Personal Shopper & Grocery Delivery in Zimbabwe">
    <meta name="twitter:description" content="Mantu connects you with reliable personal shoppers to buy and deliver groceries, essentials, and more—saving you time and effort.">
    <meta name="twitter:image" content="https://mantu.co.zw/images/personal-shopper-banner.jpg">

    <!-- =========================================================
        Structured Data (JSON-LD)
    ========================================================== -->
    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Mantu Personal Shopper Service",
        "image": "https://mantu.co.zw/images/personal-shopper-banner.jpg",
        "url": "https://mantu.co.zw/personal-shopper",
        "telephone": "+263783930023",
        "email": "info@mantu.co.zw",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Ground Floor Albion Court, Crn Fort Street & 13th Avenue",
            "addressLocality": "Bulawayo",
            "addressCountry": "ZW"
        },
        "description": "Mantu offers a trusted personal shopper and grocery delivery service in Bulawayo and Matabeleland. We shop for your groceries, household items, and essentials, delivering them to your doorstep on time.",
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
  </head>

  <body>
    <header class="header">
      <div class="header-bottom">
        <div class="container">
          <nav class="navbar navbar-expand-xl p-0 align-items-center">
            <a class="site-logo site-title" href="/">
              <img src="images/logo/logo.png" alt="Mantu Logo">
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
              <span class="menu-toggle"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
              <ul class="nav navbar-nav main-menu ms-auto me-3">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
              </ul>
              <div class="navbar-action">
                @if (Auth::check())
                  <div class="header-auth-btn" style="background-color: #f29f24;">
                    <i class="las la-user"></i>
                    <a href="{{ route('dashboard') }}" class="h-login">My Account</a>
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
            </div>
          </nav>
        </div>
      </div>
    </header>

    <main class="main-wrapper">
      <section class="banner-section has-bimg" style="background-image: url('images/banner/personal-shopper.jpg');">
        <div class="container">
          <div class="row gy-5 align-items-center">
            <div class="col-lg-7">
              <div class="banner-content">
                <div class="banner-top-title">Your Trusted Personal Shopper</div>
                <h2 class="banner-title">We Do the Shopping & Deliver Right to Your Door</h2>
                <p class="text-white mt-3">Whether it’s groceries, toiletries, or household essentials — Mantu personal shoppers handle everything. Avoid queues, save fuel, and get your shopping delivered where you need it, when you need it.</p>
                <a href="#how-it-works" class="btn main-btn mt-3">How It Works</a>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="banner-transfer">
                <h4 class="title">Request a Personal Shopper</h4>
                <form method="POST" action="{{ route('contact.store') }}" id="shopper-form">
                  @csrf
                  <div class="custom-transfer-field">
                    <span class="caption">Your Name</span>
                    <input type="text" name="first_name" class="form-control" placeholder="Your full name" required>
                  </div>
                  <div class="custom-transfer-field">
                    <span class="caption">WhatsApp or Phone</span>
                    <input type="text" name="phone_number" class="form-control" placeholder="+263 78 000 0000" required>
                  </div>
                  <div class="custom-transfer-field">
                    <span class="caption">Shopping List / Details</span>
                    <textarea name="description" class="form-control" placeholder="List groceries or items you want purchased" required></textarea>
                  </div>
                  <button type="submit" class="btn main-btn w-100 mt-4">Submit Request</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- How It Works -->
      <section id="how-it-works" class="how-work-section pt-100 pb-100">
        <div class="container text-center text-white">
          <h2 class="section-title mb-5">How It Works</h2>
          <div class="row gy-5">
            <div class="col-lg-4">
              <h4>1. Send Your Shopping List</h4>
              <p>Message or fill out our form with the items you want.</p>
            </div>
            <div class="col-lg-4">
              <h4>2. We Shop & Confirm</h4>
              <p>Your dedicated personal shopper visits trusted stores to purchase items on your behalf.</p>
            </div>
            <div class="col-lg-4">
              <h4>3. We Deliver to You</h4>
              <p>Groceries and goods are safely delivered to your door or preferred location on time.</p>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
