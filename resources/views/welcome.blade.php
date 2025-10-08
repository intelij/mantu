<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="J4ekgNQ7VwmiJ21wo19Q36cK2mDJtnw2fmOhov9V">
    <link rel="shortcut icon" type="image/png" href="/images/default.png">
    <title>{{ setting('app_name') }} - Find traders near you with Which? Trusted Traders</title>
    <META NAME="Description" CONTENT="Find builders, electricians, plumbers, garages or other traders in your area that have been endorsed by Which? Trusted Traders. Our logo is a sign of reputation and trust, helping you to choose the right trader.">
    <META NAME="Keywords" CONTENT="Which,Find,Traders,Trusted,traders,area,been,builders,choose,electricians,endorsed,garages,have,helping,logo,near,other,plumbers,reputation,right,sign,trader,trust">
    <META NAME="news_keywords" CONTENT="Which,Find,Traders,Trusted,traders,area,been,builders,choose,electricians,endorsed,garages,have,helping,logo,near,other,plumbers,reputation,right,sign,trader,trust">

    <!-- bootstrap 5  -->
    <link rel="stylesheet" href="css/lib/bootstrap.min.css">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- lineawesome font -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/line-awesome.min.css">
    <!-- lightcase css -->
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/lib/countrySelect.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="css/lib/slick.css">
    <link rel="stylesheet" href="css/izitoast.min.css">
    <link rel="stylesheet" href="css/lib/select2.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/main.css">
    <style>
      #profit-table tr td {
        color: #fff;
      }
    </style>
    <link rel="stylesheet" href="css/color.php%3Fprimary_color=813FD6.css">
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
                <li class="nav-item">
                  <a href="#about.html" class="nav-link">About</a>
                </li>
              </ul>
              <div class="navbar-action">



                    @if (Auth::check())
                        <div class="header-auth-btn">
                            <i class="las la-sign-in-alt"></i>
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
                <div class="banner-top-title">Bulawayo&#039;s Trusted Traders Platform</div>
                <h2 class="banner-title">Connecting Homeowners with Skilled and Trusted Tradespeople</h2>
                <p class="text-white mt-3">We're on a mission to bring transparency to hiring tradespeople, connecting you with trusted professionals you can rely on. No hidden charges, no surprises—just upfront pricing and quality service every time.</p>
                <div class="d-sm-flex d-none flex-wrap align-items-center justify-content-lg-start justify-content-center mt-2">
                  <a href="#" class="btn main-btn me-3 mt-3">How It Works</a>
                <a href="assets/downloads/report.pdf" target="_blank" class="btn main-btn me-3 mt-3">View Sample Report</a>
                {{-- <a href="#" data-rel="lightcase:myCollection" class="banner-video-btn mt-3">
                  <i class="fas fa-play"></i>
                  <span>How To Send Money</span>
                </a> --}}
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 ps-xxl-4 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s"></div>
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
              <h2 class="counter-title text-white">Reliable &amp; Trusted Tradespeople Platform</h2>
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
          <div class="row justify-content-between gy-5">
            <div class="col-lg-5 pe-lg-5 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.5s">
              <h2 class="section-title">Get A Trusted Trader <br/>In A Heartbeat</h2>
              <div class="feature-item mt-4">
                <div class="icon">
                  <i class="fas fa-percent"></i>
                </div>
                <div class="content">
                  <h3 class="title">Affordable Rates </h4>
                    <p class="mt-2">Every Pound Saved Means More for Your Home or Property.</p>
                </div>
              </div>
              <div class="feature-item mt-4">
                <div class="icon">
                  <i class="fas fa-exchange-alt"></i>
                </div>
                <div class="content">
                  <h3 class="title">Hassle-free </h4>
                    <p class="mt-2">No Need to Call Around or Wait—Book From Anywhere, Anytime.</p>
                </div>
              </div>
              <div class="feature-item mt-4">
                <div class="icon">
                  <i class="fas fa-plane"></i>
                </div>
                <div class="content">
                  <h3 class="title">Fast </h4>
                    <p class="mt-2">Request Services Anytime. Our Tradespeople Are Ready to Start Within Hours.</p>
                </div>
              </div>
              <div class="feature-item mt-4">
                <div class="icon">
                  <i class="fab fa-hotjar"></i>
                </div>
                <div class="content">
                  <h3 class="title">Simple </h4>
                    <p class="mt-2">With Just a Few Clicks, We Assign  Qualified Professionals for Home Repairs or Maintenance in Over 45+ recognized suburbs and localities.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="0.5s">
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
                <span class="section-cation-title style-two mb-2">HOW IT WORKS</span>
                <h2 class="section-title text-white">Join the <span>thousands of users</span> worldwide trusting Mantu everyday </h2>
              </div>
            </div>
          </div>
          <div class="row gy-4 work-wrapper">
            <div class="col-lg-4 col-sm-6  wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
              <div class="work-item">
                <div class="work-img">
                  <img src="images/how_it_works/63ce5e17766491674468887.png" alt="image">
                </div>
                <h4 class="title text-white">Create a Free Account</h4>
                <p class="text-white mt-2">From Anywhere In The World</p>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6  wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
              <div class="work-item">
                <div class="work-img">
                  <img src="images/how_it_works/63ce5e21da29f1674468897.png" alt="image">
                </div>
                <h4 class="title text-white">Request a Service</h4>
                <p class="text-white mt-2">Whatever you need done, we got you covered</p>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6  wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
              <div class="work-item">
                <div class="work-img">
                  <img src="images/how_it_works/63ce5e27af7411674468903.png" alt="image">
                </div>
                <h4 class="title text-white">We deploy trusted Trades people</h4>
                <p class="text-white mt-2">Get realtime updates on your project</p>
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
                <h2 class="section-title">The Trusted Way to Find Skilled Tradespeople for Your Property.</h2>
              </div>
              <div class="row gy-4">
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                  <div class="choose-item">
                    <h4 class="title">Fast, Easy, and Reliable Trades Services</h4>
                    <p>Mantu makes it simple to connect with certified tradespeople for all your home repair and maintenance needs. From plumbing to painting, find trusted experts quickly and hassle-free.</p>
                  </div>
                </div>
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                  <div class="choose-item">
                    <h4 class="title">Transparent Pricing, No Surprises</h4>
                    <p>We value transparency. Use our platform to get upfront quotes from tradespeople, so you always know the cost before work begins. No hidden fees, no unexpected charges—just honest pricing.</p>
                  </div>
                </div>
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                  <div class="choose-item">
                    <h4 class="title">Quality Services for Landlords Abroad</h4>
                    <p>Manage your property with ease from anywhere in the world. Mantu connects you with local, reliable tradespeople to handle repairs and renovations, so your investment stays in great shape, no matter where you are.</p>
                  </div>
                </div>
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                  <div class="choose-item">
                    <h4 class="title">Hire Tradespeople for Any Job</h4>
                    <!-- <p>You Always Get The Real Exchange Rate. You&#039;ll Only Pay A Small Fee To Convert The Money In Your Account Into Another Currency.</p> -->
                    <p>Need to fix a leaky roof, upgrade your kitchen, or tackle electrical repairs? Mantu helps you find the right professional for the job, ensuring quality service and peace of mind every step of the way.</p>
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
        <div class="container">
          <div class="row gy-4 justify-content-between">
            <div class="col-xl-5 col-lg-6 ps-xl-5  wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.5s">
              <h2 class="section-title">Book Skilled Tradespeople with Confidence</h2>
              <p class="mt-3 fs--18px">All tradespeople on Mantu are vetted for reliability and professionalism. Whether you're a landlord managing multiple properties or a homeowner in need of repairs, you can trust Mantu to deliver the right expertise.</p>
              <div class="row gy-4 mt-4">
                <div class="col-lg-10">
                  <div class="faq-item">
                    <h4 class="title">Committed to Transparency</h4>
                    <p>At Mantu, we ensure every booking comes with clear expectations. If your tradesperson doesn’t deliver as promised, we’ll make it right—guaranteed.</p>
                  </div>
                </div>
                <div class="col-lg-10">
                  <div class="faq-item">
                    <h4 class="title">Around-the-Clock Support</h4>
                    <p>Our platform uses cutting-edge technology to safeguard your bookings and payments, and our support team is here 24/7 to assist you whenever you need help.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6  wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="0.5s">
              <div class="faq-wrapper">
                <div class="accordion" id="accordionExample">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapseSix"> How does Mantu ensure quality services? </button>
                      </h2>
                      <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p> Mantu is a company built on expertise. All our tradespeople are fully qualified, experienced, and vetted to deliver professional and reliable services. Our team ensures every job is handled with the highest standards of quality and care.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseSix"> Are all Mantu tradespeople licensed?</button>
                      </h2>
                      <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p> Yes, all tradespeople under Mantu are certified professionals with the qualifications and experience to handle your home repairs and maintenance needs. You&#039; hiring experts you can trust every time.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseSix"> Can I rely on Mantu if I live abroad? </button>
                      </h2>
                      <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p> Absolutely! Mantu is the perfect solution for landlords or homeowners abroad. With our team of qualified tradespeople, you can confidently manage repairs and maintenance remotely, knowing your property is in expert hands.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseSix"> What happens if I&#039; not happy with the work? </button>
                      </h2>
                      <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p> At Mantu, customer satisfaction is our top priority. If a job doesn&#039;t meet our quality standards, our team will address your concerns promptly and ensure the issue is resolved by a qualified expert.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseSix"> How quickly can I get a qualified tradesperson? </button>
                      </h2>
                      <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p> With Mantu, you have access to a network of qualified and experienced tradespeople. Bookings are quick and easy, and many professionals are ready to start work within hours.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
              <p class="mt-3">In home maintenance and repairs, finding trusted tradespeople is essential to ensure every project is completed professionally and meets the highest quality standards possible.</p>
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
    <!-- main js -->
    <script src="js/app.js"></script>

  </body>
</html>
