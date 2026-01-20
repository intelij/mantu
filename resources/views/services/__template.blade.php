<!DOCTYPE html>
<html lang="en">
  <!-- =========================================================
     MANTU – Skilled Trades & Home Services (Provider)
     Modern homepage — Matabeleland, Zimbabwe
    ========================================================== -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="application-name" content="{{ setting('app_name') }}" />

    <title>{{ setting('app_name') }} | Mantu — Skilled Trades & Home Services, Matabeleland</title>

    <!-- SEO -->
    <meta name="description" content="Mantu is a professional trade entity in Matabeleland. We supply skilled builders, plumbers, electricians, kitchen fitters, borehole drillers, truck & logistics teams, shuttle drivers, tilers, ceiling installers and personal shoppers — delivering reliable, timely and high-quality solutions for homes and businesses." />
    <meta name="keywords" content="Mantu, tradespeople, builders Bulawayo, plumbers Matabeleland, electricians Zimbabwe, kitchen fitters, tiling, ceiling installation, borehole drilling Bulawayo, truck hire, shuttle services, personal shopper, logistics" />
    <meta name="author" content="Mantu" />
    <meta name="robots" content="index, follow" />
    <meta name="news_keywords" content="Mantu, builders, plumbers, electricians, kitchen fitters, borehole drilling, trucks, shuttle, personal shopper, Matabeleland, Bulawayo" />

    <!-- Canonical -->
    <link rel="canonical" href="https://mantu.co.zw/" />

    <!-- Favicons / icons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png" />
    <link rel="icon" href="{{ url('assets/img/icons/favicon-32x32.png') }}" sizes="32x32" />

    <!-- Open Graph -->
    <meta property="og:title" content="Mantu — Skilled Trades & Home Services in Matabeleland" />
    <meta property="og:description" content="Mantu is a full-service trades entity delivering construction, plumbing, electrical, kitchens, borehole drilling, transport and logistics, tiling, ceiling installation and personal shopper services in Matabeleland." />
    <meta property="og:image" content="https://mantu.co.zw/images/mantu-social-banner.jpg" />
    <meta property="og:url" content="https://mantu.co.zw/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Mantu" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Mantu — Skilled Trades & Home Services" />
    <meta name="twitter:description" content="Professional tradespeople and solutions: construction, plumbing, electrical, kitchens, borehole drilling, trucks, shuttle, tiling, ceiling, and personal shopper services across Matabeleland." />
    <meta name="twitter:image" content="https://mantu.co.zw/images/mantu-social-banner.jpg" />

    <!-- Structured data (LocalBusiness) -->
    @verbatim
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Mantu",
      "url": "https://mantu.co.zw",
      "telephone": "+263783930023",
      "email": "info@mantu.co.zw",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Ground Floor Albion Court, Crn Fort Street & 13th Avenue",
        "addressLocality": "Bulawayo",
        "addressCountry": "ZW"
      },
      "description": "Mantu is a full-service trade entity: we directly provide skilled builders, plumbers, electricians, kitchen fitters, tilers, ceiling installers, borehole drillers, truck and shuttle teams, and personal shopper services across Matabeleland.",
      "openingHours": ["Mo-Fr 08:00-18:00","Sa 08:00-13:00"],
      "areaServed": "Matabeleland, Zimbabwe",
      "sameAs": [
        "https://www.facebook.com/mantuzw",
        "https://www.instagram.com/mantuzw",
        "https://www.linkedin.com/company/mantu-zimbabwe"
      ]
    }
    </script>
    @endverbatim

    <!-- Styles (existing libraries; keep these) -->
    <link rel="stylesheet" href="css/lib/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/main.css" />

    <!-- Inline theme overrides for brand colours (purple / gold / white) -->
    <style>
      :root{
        --mantu-purple: #4b2b7f;
        --mantu-gold: #f29f24;
        --mantu-white: #ffffff;
        --muted: #f4f2f8;
      }

      body { background: #faf7fd; color: #222; font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; }

      /* Header */
      .header { background: var(--mantu-white); border-bottom: 1px solid rgba(75,43,127,0.06); }
      .site-logo img { height: 46px; }

      /* Primary buttons */
      .btn.main-btn { background: linear-gradient(90deg,var(--mantu-purple), #6b3aa8); color: var(--mantu-white); border-radius: 10px; padding: 10px 18px; border: none; box-shadow: 0 8px 18px rgba(75,43,127,0.12); }
      .btn.main-btn:hover { transform: translateY(-1px); }

      /* Accent */
      .site-color { color: var(--mantu-gold) !important; }

      /* Banner */
      .banner-section { padding: 80px 0; color: var(--mantu-white); position: relative; }
      .banner-top-title { color: rgba(255,255,255,0.9); letter-spacing: 0.6px; font-weight: 600; }
      .banner-title { font-size: 34px; line-height: 1.15; margin-top: 8px; font-weight: 700; }
      .banner-content p { opacity: 0.95; }

      .banner-transfer { background: var(--mantu-white); border-radius: 12px; padding: 24px; box-shadow: 0 10px 30px rgba(16,10,40,0.06); color: #111; }
      .banner-transfer h4 { margin-bottom: 16px; color: var(--mantu-purple); }

      /* Dropdown menu styling */
      .dropdown-menu { min-width: 220px; border-radius: 8px; border: 0; padding: 8px; background: white; box-shadow: 0 12px 30px rgba(16,10,40,0.08); }
      .dropdown-item:hover { background: rgba(75,43,127,0.04); color: var(--mantu-purple); }

      /* Simple responsive tweaks */
      @media (max-width: 991px){
        .banner-title { font-size: 26px; }
      }

      footer { background: var(--mantu-purple); color: var(--mantu-white); padding: 36px 0; }
      footer a { color: rgba(255,255,255,0.9); }
      .footer-logo img { height: 40px; }
    </style>
  </head>

  <body>
    <!-- back-to-top -->
    <div class="back-to-top" style="display:none;">
      <i class="las la-arrow-up"></i>
    </div>

    <!-- Header -->
    <header class="header">
      <div class="header-bottom">
        <div class="container">
          <nav class="navbar navbar-expand-xl p-0 align-items-center">
            <a class="site-logo site-title me-3" href="/">
              <img src="images/logo/logo.png" alt="Mantu logo" />
            </a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="menu-toggle"></span>
            </button>

            <div class="collapse navbar-collapse mt-lg-0 mt-3" id="mainNavbar">
              <ul class="nav navbar-nav main-menu ms-auto me-3 align-items-center">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

                <!-- Services dropdown (we are the provider) -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <li><a class="dropdown-item" href="/construction">Construction &amp; Building</a></li>
                    <li><a class="dropdown-item" href="/kitchens">Kitchens &amp; Renovations</a></li>
                    <li><a class="dropdown-item" href="/tiling">Tiling</a></li>
                    <li><a class="dropdown-item" href="/ceiling">Ceiling Installation</a></li>
                    <li><a class="dropdown-item" href="/plumbing">Plumbing Services</a></li><li><a class="dropdown-item" href="/swimming-pool">Swimming Pools</a></li><li><a class="dropdown-item" href="/hampers">Hampers & Gifts</a></li>
                    <li><a class="dropdown-item" href="/solar-electricals">Solar &amp; Electricals</a></li>
                    <li><a class="dropdown-item" href="/borehole">Borehole Drilling</a></li>
                    <li><a class="dropdown-item" href="/trucks">Trucks &amp; Logistics</a></li>
                    <li><a class="dropdown-item" href="/shuttle">Shuttle &amp; Transport</a></li>
                    <li><a class="dropdown-item" href="/personal-shopper">Personal Shopper (Groceries & Deliveries)</a></li>
                  </ul>

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

                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item d-none d-xl-block"><a class="nav-link" href="/projects">Projects</a></li>
              </ul>

              <div class="navbar-action d-flex align-items-center">
                @if (Auth::check())
                  <div class="header-auth-btn" style="background:var(--mantu-gold); border-radius:8px; padding:6px 10px;">
                    <i class="las la-user"></i>
                    <a href="{{ route('dashboard') }}" class="h-login" style="color:#111; font-weight:600; text-decoration:none;">My Account</a>
                  </div>
                @else
                  <div class="header-auth-btn">
                    <a href="{{ route('login') }}" class="h-login me-2">Login</a>
                    <a href="{{ route('register') }}" class="h-register">Signup</a>
                  </div>
                @endif
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <!-- Main -->
    <main class="main-wrapper">
      <!-- Hero / Banner -->
      <section class="banner-section" style="background: linear-gradient(180deg, rgba(75,43,127,0.9), rgba(75,43,127,0.8)), url('images/banner/abstract-purple.jpg') center/cover no-repeat; padding:72px 0;">
        <div class="container">
          <div class="row align-items-center gy-4">
            <div class="col-lg-7 text-lg-start text-center">
              <div class="banner-content">
                <div class="banner-top-title">Mantu — Skilled Trades & Complete Solutions</div>
                <h1 class="banner-title">We are the team who build, fix, supply and deliver — trusted across Matabeleland</h1>
                <p class="mt-3 mb-4" style="opacity:0.95; max-width: 640px;">
                  Mantu is a full-service trades entity. From large builds and kitchen renovations to plumbing, solar installations, borehole drilling, transport & logistics, tiling, ceiling work and personal shopper deliveries — our in-house teams deliver quality workmanship, prompt communication and fair, transparent pricing.
                </p>

                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2">
                  <a class="btn main-btn" href="#services">Our Services</a>
                  <a class="btn" style="background: transparent; border:1px solid rgba(255,255,255,0.14); color: var(--mantu-white);" href="/projects">Our Projects</a>
                </div>
              </div>
            </div>

            <div class="col-lg-5">
              <div class="banner-transfer">
                <h4 class="title">Request a Quote</h4>

                @if (session('success'))
                  <div class="alert alert-success mt-2">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" id="request-quote">
                  @csrf
                  <div class="mb-2">
                    <label class="form-label small">Your Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Sam Bhoqo" required />
                  </div>
                  <div class="mb-2">
                    <label class="form-label small">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="you@example.com" />
                  </div>
                  <div class="mb-2">
                    <label class="form-label small">Phone (WhatsApp enabled preferred)</label>
                    <input type="text" name="phone_number" class="form-control" placeholder="+263 7X XXX XXXX" />
                  </div>

                  <div class="mb-2">
                    <label class="form-label small">Service</label>
                    <select name="service_type" id="service_type" class="form-control" required>
                      <option value="">Select a service</option>
                      <option value="construction">Construction & Building</option>
                      <option value="kitchens">Kitchens & Renovations</option>
                      <option value="tiling">Tiling</option>
                      <option value="ceiling">Ceiling Installation</option>
                      <option value="plumbing">Plumbing</option>
                      <option value="electrical">Solar & Electricals</option>
                      <option value="borehole">Borehole Drilling</option>
                      <option value="trucks">Trucks & Logistics</option>
                      <option value="shuttle">Shuttle & Transport</option>
                      <option value="personal_shopper">Personal Shopper (Groceries & Delivery)</option>
                      <option value="other">Other</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label small">Project details</label>
                    <textarea name="description" rows="4" class="form-control" placeholder="Give a short description of the job, location and any deadlines"></textarea>
                  </div>

                  <button type="submit" class="btn main-btn w-100">Send Request</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services overview -->
      <section id="services" class="pt-80 pb-80">
        <div class="container">
          <div class="section-header text-center mb-4">
            <h2 class="section-title">Services we deliver — directly</h2>
            <p class="text-muted" style="max-width:800px; margin:auto;">Our teams are employees and trusted partners — not a third-party directory. We take responsibility for quality, safety and delivery.</p>
          </div>

          <div class="row g-4">
            <div class="col-md-6 col-lg-4">
              <div class="card p-4 h-100 border-0 shadow-sm">
                <div class="mb-3"><i class="fas fa-hard-hat fa-2x" style="color:var(--mantu-purple)"></i></div>
                <h5>Construction & Building</h5>
                <p class="small text-muted">New builds, additions, structural repairs and site management — end-to-end project delivery by our builders.</p>
                <a href="/construction" class="small">Learn more →</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card p-4 h-100 border-0 shadow-sm">
                <div class="mb-3"><i class="fas fa-utensils fa-2x" style="color:var(--mantu-purple)"></i></div>
                <h5>Kitchens & Renovations</h5>
                <p class="small text-muted">Design, cabinetry, countertops and full kitchen refits carried out by experienced fitters and carpenters.</p>
                <a href="/kitchens" class="small">Learn more →</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card p-4 h-100 border-0 shadow-sm">
                <div class="mb-3"><i class="fas fa-project-diagram fa-2x" style="color:var(--mantu-purple)"></i></div>
                <h5>Tiling & Flooring</h5>
                <p class="small text-muted">Precision tiling, floor preparation and grouting — bathrooms, kitchens and floors with professional finishes.</p>
                <a href="/tiling" class="small">Learn more →</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card p-4 h-100 border-0 shadow-sm">
                <div class="mb-3"><i class="fas fa-columns fa-2x" style="color:var(--mantu-purple)"></i></div>
                <h5>Ceiling Installation</h5>
                <p class="small text-muted">Suspended ceilings, plasterboard, insulation and finishing — compliant and tidy installations.</p>
                <a href="/ceiling" class="small">Learn more →</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card p-4 h-100 border-0 shadow-sm">
                <div class="mb-3"><i class="fas fa-wrench fa-2x" style="color:var(--mantu-purple)"></i></div>
                <h5>Plumbing</h5>
                <p class="small text-muted">Leaks, new installations, hot water systems, bathroom fit-outs, and ongoing maintenance from qualified plumbers.</p>
                <a href="/plumbing" class="small">Learn more →</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card p-4 h-100 border-0 shadow-sm">
                <div class="mb-3"><i class="fas fa-bolt fa-2x" style="color:var(--mantu-purple)"></i></div>
                <h5>Solar & Electricals</h5>
                <p class="small text-muted">System design, installation and repairs — certified electricians and solar installers to keep your property powered.</p>
                <a href="/solar-electricals" class="small">Learn more →</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card p-4 h-100 border-0 shadow-sm">
                <div class="mb-3"><i class="fas fa-water fa-2x" style="color:var(--mantu-purple)"></i></div>
                <h5>Borehole Drilling</h5>
                <p class="small text-muted">Site surveys, drilling, pump installation and commissioning — trusted local borehole teams.</p>
                <a href="/borehole" class="small">Learn more →</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card p-4 h-100 border-0 shadow-sm">
                <div class="mb-3"><i class="fas fa-truck-moving fa-2x" style="color:var(--mantu-purple)"></i></div>
                <h5>Trucks & Logistics</h5>
                <p class="small text-muted">Materials transport, site deliveries and haulage — secure fleet and experienced drivers.</p>
                <a href="/trucks" class="small">Learn more →</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card p-4 h-100 border-0 shadow-sm">
                <div class="mb-3"><i class="fas fa-shuttle-van fa-2x" style="color:var(--mantu-purple)"></i></div>
                <h5>Shuttle & Transport</h5>
                <p class="small text-muted">Passenger shuttles, staff transport and short-term vehicle hire with driver options.</p>
                <a href="/shuttle" class="small">Learn more →</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card p-4 h-100 border-0 shadow-sm">
                <div class="mb-3"><i class="fas fa-shopping-bag fa-2x" style="color:var(--mantu-purple)"></i></div>
                <h5>Personal Shopper & Delivery</h5>
                <p class="small text-muted">Grocery shopping, errands and doorstep delivery — we shop and deliver to your chosen address with care.</p>
                <a href="/personal-shopper" class="small">Learn more →</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Why choose Mantu -->
      <section class="pt-80 pb-80" style="background:var(--muted);">
        <div class="container">
          <div class="row align-items-center gy-4">
            <div class="col-lg-6">
              <h3>Why Mantu?</h3>
              <ul class="list-unstyled mt-3">
                <li class="mb-2"><strong>We deliver — not match:</strong> Our teams are Mantu employees or verified company partners. We manage performance and take responsibility.</li>
                <li class="mb-2"><strong>Transparent pricing:</strong> Clear, written quotes and scope so there are no surprises.</li>
                <li class="mb-2"><strong>Quality guaranteed:</strong> Qualified tradespeople, site supervision and workmanship warranties on many jobs.</li>
                <li class="mb-2"><strong>Local & dependable:</strong> Proudly serving Matabeleland with rapid response and local knowledge.</li>
              </ul>
            </div>
            <div class="col-lg-6 text-center">
              <img src="images/feature/modern-team.jpg" alt="Mantu team" class="img-fluid rounded" style="max-height:320px; object-fit:cover;">
            </div>
          </div>
        </div>
      </section>

      <!-- How it works -->
      <section class="pt-80 pb-80">
        <div class="container">
          <div class="section-header text-center mb-4">
            <h2>How it works</h2>
            <p class="text-muted">Three simple steps from request to completion.</p>
          </div>

          <div class="row g-4 text-center">
            <div class="col-md-4">
              <div class="p-4">
                <div class="mb-3"><i class="fas fa-pencil-alt fa-2x" style="color:var(--mantu-gold)"></i></div>
                <h5>1. Tell us what you need</h5>
                <p class="small text-muted">Use the form, call or WhatsApp — give location, scope and any images.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="p-4">
                <div class="mb-3"><i class="fas fa-calendar-check fa-2x" style="color:var(--mantu-gold)"></i></div>
                <h5>2. We schedule & quote</h5>
                <p class="small text-muted">Our team visits if required, provides a clear quote and timeframe.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="p-4">
                <div class="mb-3"><i class="fas fa-hands fa-2x" style="color:var(--mantu-gold)"></i></div>
                <h5>3. We deliver & guarantee</h5>
                <p class="small text-muted">Work completed by Mantu teams with follow-up support and warranties where applicable.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonials -->
      <section class="pt-80 pb-80" style="background: linear-gradient(180deg,#fff, #fbfbfd);">
        <div class="container">
          <div class="section-header text-center mb-4">
            <h2>What clients say</h2>
            <p class="text-muted">Real customers. Real projects. Trusted results.</p>
          </div>

          <div class="row g-4">
            <div class="col-md-4">
              <blockquote class="p-4 border rounded" style="background:#fff;">
                <p class="small">“Mantu renovated our kitchen and installed new solar — perfect finish and professional crew. Communication was excellent.”</p>
                <footer class="mt-2 small text-muted">— Karen, Homeowner</footer>
              </blockquote>
            </div>
            <div class="col-md-4">
              <blockquote class="p-4 border rounded" style="background:#fff;">
                <p class="small">“We used their trucks and crew to deliver construction materials across town with no fuss. On time and well-managed.”</p>
                <footer class="mt-2 small text-muted">— Tawanda, Builder</footer>
              </blockquote>
            </div>
            <div class="col-md-4">
              <blockquote class="p-4 border rounded" style="background:#fff;">
                <p class="small">“Personal shopper service saved us a trip abroad — they purchased and delivered exactly what we asked for.”</p>
                <footer class="mt-2 small text-muted">— Thembekile, Landlord</footer>
              </blockquote>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="footer-section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4">
            <a href="/" class="footer-logo">
              <img src="/images/logo/logo-white.png" alt="Mantu" />
            </a>
            <p class="mt-3">Mantu is a trades entity delivering construction, plumbing, electrical, kitchens, borehole drilling, transport, logistics and delivery services across Matabeleland.</p>
            <div class="mt-3">
              <strong>Payment methods</strong>
              <div><img src="images/footer/payment-icons.png" alt="payment icons" style="max-width:220px;"></div>
            </div>
          </div>

          <div class="col-lg-2">
            <h6>Company</h6>
            <ul class="list-unstyled">
              <li><a href="/about">About</a></li>
              <li><a href="/projects">Projects</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2">
            <h6>Services</h6>
            <ul class="list-unstyled">
              <li><a href="/kitchens">Kitchens</a></li>
              <li><a href="/plumbing">Plumbing</a></li>
              <li><a href="/personal-shopper">Personal Shopper</a></li>
            </ul>
          </div>

          <div class="col-lg-4">
            <h6>Contact</h6>
            <ul class="list-unstyled footer-info-list">
              <li><i class="fas fa-map-marker-alt me-2"></i>Albion Court, Fort St & 14th Ave, Bulawayo</li>
              <li><i class="fas fa-phone me-2"></i>+263 78 393 0023</li>
              <li><i class="fab fa-whatsapp me-2"></i><a href="https://wa.me/263783930023" style="color:inherit;">WhatsApp +263 78 393 0023</a></li>
              <li><i class="fas fa-envelope me-2"></i>info@mantu.co.zw</li>
            </ul>

            <h6 class="mt-3">Newsletter</h6>
            <form class="subscribe-form d-flex">
              <input type="email" name="email" class="form-control me-2" placeholder="Your email" />
              <button class="btn main-btn" type="submit">Subscribe</button>
            </form>
          </div>
        </div>

        <div class="footer-bottom mt-4 pt-3 border-top" style="border-color: rgba(255,255,255,0.06);">
          <div class="row align-items-center">
            <div class="col-md-8">
              <p class="mb-0">Copyright &copy; {{ date('Y') }} Mantu. All Rights Reserved.</p>
            </div>
            <div class="col-md-4 text-md-end">
              <a href="https://facebook.com/mantuzw" class="me-2"><i class="fab fa-facebook-f"></i></a>
              <a href="https://instagram.com/mantuzw" class="me-2"><i class="fab fa-instagram"></i></a>
              <a href="https://linkedin.com/company/mantu-zimbabwe"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="js/lib/jquery-3.6.0.min.js"></script>
    <script src="js/lib/bootstrap.bundle.min.js"></script>
    <script src="js/lib/slick.min.js"></script>
    <script src="js/app.js"></script>

    <script>
      // small UX: close navbar on link click (mobile)
      document.querySelectorAll('.main-menu a').forEach(function(a){
        a.addEventListener('click', function(){ var bs = new bootstrap.Collapse(document.getElementById('mainNavbar')); bs.hide(); });
      });
    </script>
  </body>
</html>
