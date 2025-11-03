<!DOCTYPE html>
<html lang="en">
  <!--
    MANTU – The Diaspora Companion
    Production-ready homepage (Bootstrap 5)
    Brand colors: deep royal purple #4B0082, gold #C5A000, white
  -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="application-name" content="{{ setting('app_name') }}" />

    <title>{{ setting('app_name') }} | Mantu — The Diaspora Companion</title>

    <!-- SEO -->
    <meta name="description" content="Mantu is a hands-on service provider in Matabeleland: builders, plumbers, electricians, borehole drillers, transport and logistics teams. We act as the Diaspora Companion—delivering trusted, accountable work and protecting clients overseas from rogue contractors and failed projects.">
    <meta name="keywords" content="Mantu, Diaspora companion, tradespeople Zimbabwe, builders Bulawayo, plumbers Matabeleland, electricians Zimbabwe, borehole drilling, shuttle services, trucks logistics, kitchen renovations">
    <meta name="author" content="Mantu">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="Mantu — The Diaspora Companion (Trusted Trades & Project Delivery)">
    <meta property="og:description" content="Mantu provides in-house trades and project delivery services across Matabeleland. We ensure accountability and professional delivery for clients living abroad.">
    <meta property="og:image" content="https://mantu.co.zw/images/mantu-social-banner.jpg">
    <meta property="og:url" content="https://mantu.co.zw/">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Mantu — The Diaspora Companion" />
    <meta name="twitter:description" content="Accountable, skilled tradespeople delivering construction, plumbing, electrical, borehole drilling, transport and logistics services in Matabeleland." />
    <meta name="twitter:image" content="https://mantu.co.zw/images/mantu-social-banner.jpg" />

    <!-- Canonical -->
    <link rel="canonical" href="https://mantu.co.zw/" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png" />

    <!-- Bootstrap (CDN for production replaceable with local files) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional icon fonts -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.css">

    <style>
      :root{
        --mantu-purple: #4B0082;
        --mantu-gold: #C5A000;
        --mantu-white: #ffffff;
        --muted: #f7f6fb;
      }

      html,body{height:100%;}
      body{
        font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        color: rgba(0,0,0,0.8);
        background: var(--muted);
        -webkit-font-smoothing:antialiased;
      }

      /* Header */
      .navbar{
        padding: 1rem 0;
      }
      .site-logo img{height:48px;}

      /* Hero */
      .hero{
        background: linear-gradient(180deg, rgba(75,0,130,0.9) 0%, rgba(75,0,130,0.85) 60%), url('images/hero-placeholder.jpg') center/cover no-repeat;
        color: var(--mantu-white);
        padding: 6rem 0;
        position: relative;
      }
      .hero .badge-ghost{
        display:inline-block;
        background: rgba(197,160,0,0.12);
        color: var(--mantu-gold);
        border: 1px solid rgba(197,160,0,0.18);
        padding: .35rem .7rem;
        border-radius: 999px;
        font-weight:600;
        font-size:.9rem;
      }
      .hero h1{font-size:2.25rem; line-height:1.05; font-weight:700;}
      .hero p.lead{font-size:1.05rem; opacity: .95; margin-top:1rem;}

      /* Services */
      .service-card{
        border-radius: .5rem;
        background: #fff;
        padding:1.25rem;
        box-shadow: 0 6px 20px rgba(75,0,130,0.06);
        transition: transform .18s ease, box-shadow .18s ease;
      }
      .service-card:hover{ transform: translateY(-6px); box-shadow: 0 12px 34px rgba(75,0,130,0.08); }

      /* CTA */
      .btn-mantu {
        background: linear-gradient(90deg,var(--mantu-gold), #f0c832);
        color: #12020b;
        font-weight:700;
        border-radius: .6rem;
        padding: .6rem 1.1rem;
      }

      /* Footer */
      .footer{background: var(--mantu-purple); color: #f7f6fb; padding:3rem 0;}
      .footer a{color: #fff; text-decoration: none;}
      .accent-gold{color: var(--mantu-gold);}

      /* Responsive tweaks */
      @media(min-width:992px){
        .hero h1{font-size:3.25rem;}
      }
    </style>


  </head>

  <body>
    <!-- Header -->
    <header class="shadow-sm bg-white">
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
    </header>

    <!-- Hero -->
    <section class="hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 text-start">
            <span class="badge-ghost">Mantu — The Diaspora Companion</span>
            <h1 class="mt-3">Trusted, Accountable Project Delivery from Our Skilled Trades Teams</h1>
            <p class="lead">
              We are not a marketplace — Mantu is a hands-on provider. Our builders, plumbers, electricians, borehole crews and transport teams deliver projects end-to-end for clients in the diaspora and locally. We protect your investment by ensuring transparent quotes, professional workmanship and documented progress at every stage.
            </p>

            <div class="mt-4 d-flex gap-2">
              <a class="btn btn-mantu shadow-sm" href="/contact">Request a Quote</a>
              <a class="btn btn-outline-light" href="/about" style="background:transparent;border:1px solid rgba(255,255,255,0.18);color:#fff">About Mantu</a>
            </div>

            <ul class="list-unstyled mt-4 text-white-50">
              <li><strong class="accent-gold">Accountability:</strong> Photos, receipts and progress reports for every job.</li>
              <li><strong class="accent-gold">In-house teams:</strong> Skilled tradespeople employed and managed by Mantu.</li>
              <li><strong class="accent-gold">Diaspora-friendly:</strong  > Projects managed on behalf of clients overseas with clear guarantees.</li>
            </ul>
          </div>

          <div class="col-lg-5 text-center">
            <!-- Replace with your own hero image -->
            <img src="images/hero-your-image.jpg" alt="Mantu — The Diaspora Companion" class="img-fluid rounded shadow-lg" style="max-height:420px; object-fit:cover;">
          </div>
        </div>
      </div>
    </section>

    <!-- Quick Services -->
    <section class="py-5">
      <div class="container">
        <div class="row mb-4 align-items-center">
          <div class="col-md-8">
            <h3 class="mb-0">Our Core Services</h3>
            <p class="text-muted mb-0">End-to-end delivery by Mantu teams — we supply materials, manage works, and sign off quality checks.</p>
          </div>
          <div class="col-md-4 text-md-end">
            <a href="/services" class="text-decoration-none">View all services →</a>
          </div>
        </div>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="service-card">
              <h5>Construction & Building</h5>
              <p class="small text-muted mb-0">Foundations, extensions, structural repairs and full builds — managed by Mantu site teams.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-card">
              <h5>Kitchens, Tiling & Ceilings</h5>
              <p class="small text-muted mb-0">Design, carpentry, tiling and ceiling installations for durable and beautiful interiors.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-card">
              <h5>Plumbing & Borehole Drilling</h5>
              <p class="small text-muted mb-0">From leaks and reticulation to boreholes—Mantu provides certified plumbers and drilling crews.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-card">
              <h5>Solar & Electricals</h5>
              <p class="small text-muted mb-0">Design and install solar systems, power upgrades and certified electrical work.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-card">
              <h5>Shuttle & Transport</h5>
              <p class="small text-muted mb-0">Safe shuttle hire and transport for crew and materials in Matabeleland.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-card">
              <h5>Trucks & Logistics</h5>
              <p class="small text-muted mb-0">Reliable haulage and logistics support for construction materials and relocations.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- How it works (diaspora-friendly) -->
    <section class="py-5 bg-white">
      <div class="container">
        <div class="row align-items-center gy-4">
          <div class="col-lg-6">
            <h4>How Mantu Supports Clients in the Diaspora</h4>
            <ol class="mt-3">
              <li><strong>Consultation & Quotation:</strong> We assess remotely or on-site, then provide a transparent written quote.</li>
              <li><strong>Dedicated Project Team:</strong> Mantu assigns a team and a single point of contact who manages progress and quality.</li>
              <li><strong>Verified Procurement:</strong> We source and supply materials with receipts and warranties where applicable.</li>
              <li><strong>Regular Reporting:</strong> Progress photos, milestones and financial records shared with clients abroad.</li>
              <li><strong>Completion & Handover:</strong> Final inspections and a documented sign-off guarantee completion to spec.</li>
            </ol>
          </div>
          <div class="col-lg-6">
            <div class="p-4 rounded" style="background:linear-gradient(180deg, rgba(75,0,130,0.03), rgba(197,160,0,0.03));">
              <h5>Why this matters</h5>
              <p class="text-muted">Many clients living overseas have experienced project failures or poor workmanship from rogue contractors. Mantu removes risk by being the accountable service provider — employing, supervising and delivering the work ourselves, and keeping you informed every step of the way.</p>
              <a href="/about" class="btn btn-outline-secondary">Learn about our guarantees</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-8">
            <h4>Client Testimonials</h4>
            <p class="text-muted">Stories from homeowners and diaspora clients who trusted Mantu to deliver.</p>
          </div>
        </div>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="service-card">
              <p class="mb-2">“Mantu managed my renovation while I was overseas — photos, receipts and regular updates made everything transparent. The job finished on time and to specification.”</p>
              <small class="d-block text-muted">— Karen, UK (Landlord)</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <p class="mb-2">“They completed our borehole and installed the reticulation. Professional crew and clear invoicing — I felt secure handing the project over to them.”</p>
              <small class="d-block text-muted">— Themba, Bulawayo</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-card">
              <p class="mb-2">“The kitchen fit was excellent and the tilers left a clean, perfect finish. Great communication throughout.”</p>
              <small class="d-block text-muted">— Nandi, South Africa</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact / Request form -->
    <section class="py-5 bg-white">
      <div class="container">
        <div class="row g-4 align-items-start">
          <div class="col-lg-6">
            <h4>Request a Quote</h4>
            <p class="text-muted">Tell us about your project — we’ll respond with a transparent proposal and next steps.</p>

            <form method="POST" action="{{ route('contact.store') }}">
              @csrf
              <div class="mb-3">
                <label class="form-label">Your name</label>
                <input class="form-control" name="first_name" required placeholder="Full name">
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" type="email" placeholder="you@example.com">
              </div>

              <div class="mb-3">
                <label class="form-label">Phone / WhatsApp</label>
                <input class="form-control" name="phone_number" placeholder="+263 78 393 0023">
              </div>

              <div class="mb-3">
                <label class="form-label">Service</label>
                <select class="form-select" name="service_type" required>
                  <option value="">Select a service</option>
                  <option value="construction">Construction / Building</option>
                  <option value="kitchens">Kitchens / Tiling / Ceilings</option>
                  <option value="plumbing">Plumbing / Borehole</option>
                  <option value="electrical">Solar & Electricals</option>
                  <option value="shuttle">Shuttle / Transport</option>
                  <option value="trucks">Trucks & Logistics</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div class="mb-3">
                <label class="form-label">Project details</label>
                <textarea class="form-control" name="description" rows="4" placeholder="Provide a brief description and preferred start date"></textarea>
              </div>

              <button class="btn btn-mantu" type="submit">Send Request</button>
            </form>
          </div>

          <div class="col-lg-6">
            <div class="p-4 rounded" style="background:#fcfbff;">
              <h5>Contact & Support</h5>
              <p class="mb-1"><strong>Phone:</strong> +263 78 393 0023</p>
              <p class="mb-1"><strong>Email:</strong> info@mantu.co.zw</p>
              <p class="mb-0"><strong>Address:</strong> Albion Court, Fort St &amp; 14th Ave, Bulawayo</p>
              <hr>
              <p class="small text-muted">If you are based overseas and worried about contractor reliability or project misuse, Mantu will act as your accountable partner — managing procurement, workmanship and sign-off on your behalf.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gy-4">
          <div class="col-md-4">
            <img src="/images/logo/logo-white.png" alt="Mantu" style="height:48px;">
            <p class="mt-3 small">Mantu provides in-house trades and project delivery services across Matabeleland. We guarantee accountable delivery and clear documentation for diaspora and local clients.</p>
            <p class="small mb-0">© {{ date('Y') }} Mantu. All rights reserved.</p>
          </div>

          <div class="col-md-2">
            <h6>Company</h6>
            <ul class="list-unstyled small">
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>
              <li><a href="/terms">Terms</a></li>
            </ul>
          </div>

          <div class="col-md-3">
            <h6>Services</h6>
            <ul class="list-unstyled small">
              <li><a href="/construction">Construction</a></li>
              <li><a href="/kitchens">Kitchens & Renovations</a></li>
              <li><a href="/plumbing">Plumbing</a></li>
              <li><a href="/borehole">Borehole</a></li>
            </ul>
          </div>

          <div class="col-md-3">
            <h6>Contact</h6>
            <p class="small mb-1">Albion Court, Fort St &amp; 14th Ave, Bulawayo</p>
            <p class="small mb-1">+263 78 393 0023</p>
            <p class="small mb-0">info@mantu.co.zw</p>
            <div class="mt-3">
              <a href="#" class="me-2 text-white"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="me-2 text-white"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
