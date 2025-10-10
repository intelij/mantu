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

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('assets/img/icons/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url('assets/img/icons/apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png" href="{{ url('assets/img/icons/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ url('assets/img/icons/favicon-16x16.png') }}" sizes="16x16" />
    <meta name="application-name" content="{{ setting('app_name') }}"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ url('assets/img/icons/mstile-144x144.png') }}" />

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


      <!-- counter section start -->
      <div class="counter-section">
        <div class="counter-shape"></div>
        <div class="container">
          <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-4 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.5s">
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





                <div class="card-body p-4">
                    <h3 class="mb-4 text-center">@lang('Request a Runner or Property Service')</h3>

                    <form action=" route('enquiries.store') " method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>@lang('Full Name')</label>
                            <input type="text" name="full_name" id="full_name"
                                   class="form-control input-solid"
                                   placeholder="@lang('Your full name')"
                                   value="{{ old('full_name') }}" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Phone Number')</label>
                            <input type="text" name="phone" id="phone"
                                   class="form-control input-solid"
                                   placeholder="@lang('e.g. +263 78 393 0023')"
                                   value="{{ old('phone') }}" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Email (optional)')</label>
                            <input type="email" name="email" id="email"
                                   class="form-control input-solid"
                                   placeholder="@lang('you@example.com')"
                                   value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('Preferred Contact Method')</label>
                            <select name="preferred_contact" id="preferred_contact"
                                    class="form-control input-solid" required>
                                <option value="">@lang('Select contact method')</option>
                                <option value="phone" {{ old('preferred_contact') == 'phone' ? 'selected' : '' }}>@lang('Phone Call')</option>
                                <option value="whatsapp" {{ old('preferred_contact') == 'whatsapp' ? 'selected' : '' }}>@lang('WhatsApp')</option>
                                <option value="email" {{ old('preferred_contact') == 'email' ? 'selected' : '' }}>@lang('Email')</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>@lang('Service Type')</label>
                            <select name="service_type" id="service_type"
                                    class="form-control input-solid" required>
                                <option value="">@lang('Select the type of service')</option>
                                <option value="construction" {{ old('service_type') == 'construction' ? 'selected' : '' }}>@lang('Construction / Building')</option>
                                <option value="carpentry" {{ old('service_type') == 'carpentry' ? 'selected' : '' }}>@lang('Carpentry')</option>
                                <option value="plumbing" {{ old('service_type') == 'plumbing' ? 'selected' : '' }}>@lang('Plumbing')</option>
                                <option value="electrical" {{ old('service_type') == 'electrical' ? 'selected' : '' }}>@lang('Electrical Work')</option>
                                <option value="cleaning" {{ old('service_type') == 'cleaning' ? 'selected' : '' }}>@lang('Cleaning')</option>
                                <option value="shuttle" {{ old('service_type') == 'shuttle' ? 'selected' : '' }}>@lang('Shuttle / Car Hire')</option>
                                <option value="borehole" {{ old('service_type') == 'borehole' ? 'selected' : '' }}>@lang('Borehole Drilling')</option>
                                <option value="errands" {{ old('service_type') == 'errands' ? 'selected' : '' }}>@lang('Errands / Small Tasks')</option>
                                <option value="property_management" {{ old('service_type') == 'property_management' ? 'selected' : '' }}>@lang('Property Management')</option>
                                <option value="other" {{ old('service_type') == 'other' ? 'selected' : '' }}>@lang('Other')</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>@lang('Describe what you need done')</label>
                            <textarea name="description" id="description"
                                      class="form-control input-solid"
                                      rows="4"
                                      placeholder="@lang('Briefly describe your request')"
                                      required>{{ old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>@lang('Location')</label>
                            <input type="text" name="location" id="location"
                                   class="form-control input-solid"
                                   placeholder="@lang('e.g. Bulawayo, Morningside')"
                                   value="{{ old('location') }}" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Preferred Date')</label>
                            <input type="date" name="preferred_date" id="preferred_date"
                                   class="form-control input-solid"
                                   value="{{ old('preferred_date') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('Estimated Budget (optional)')</label>
                            <input type="text" name="budget" id="budget"
                                   class="form-control input-solid"
                                   placeholder="@lang('e.g. USD 200')"
                                   value="{{ old('budget') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('Attach Photos (optional)')</label>
                            <input type="file" name="photo[]" multiple
                                   class="form-control-file"
                                   accept="image/*">
                            <small class="text-muted">@lang('You can upload photos of the site or items if applicable.')</small>
                        </div>

                        {{-- Optional ToS --}}
                        @if (setting('tos'))
                            <div class="custom-control custom-checkbox my-3">
                                <input type="checkbox" class="custom-control-input" name="tos" id="tos" value="1" required>
                                <label class="custom-control-label font-weight-normal" for="tos">
                                    @lang('I accept')
                                    <a href="#tos-modal" data-toggle="modal" class="font-weight-bold site-color">@lang('Terms of Service')</a>
                                </label>
                            </div>
                        @endif

                        {{-- Optional Captcha --}}
                        @if (setting('registration.captcha.enabled'))
                            <div class="form-group my-4">
                                {!! app('captcha')->display() !!}
                            </div>
                        @endif

                        <button class="btn main-btn w-100 mt-4" type="submit">
                            <i class="fas fa-paper-plane"></i> @lang('Submit Request')
                        </button>
                    </form>
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


        <div class="container">
        {{-- @section('content') --}}

        </div>

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

    <!-- Simple Alpine.js or Vanilla JS for dynamic fields -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const serviceSelect = document.getElementById('service_type');
    const otherService = document.getElementById('other-service-field');
    const ownership = document.getElementsByName('ownership');
    const otherPerson = document.getElementById('other-person-field');
    const jobDate = document.getElementById('job_date');
    const dateField = document.getElementById('date-field');
    const budgetOption = document.getElementsByName('budget_option');
    const budgetField = document.getElementById('budget-field');

    // Show "Other service"
    serviceSelect.addEventListener('change', () => {
        otherService.classList.toggle('hidden', serviceSelect.value !== 'other');
    });

    // Show "Other person"
    ownership.forEach(radio => {
        radio.addEventListener('change', () => {
            otherPerson.classList.toggle('hidden', radio.value !== 'someone_else' || !radio.checked);
        });
    });

    // Show date picker
    jobDate.addEventListener('change', () => {
        dateField.classList.toggle('hidden', jobDate.value !== 'later');
    });

    // Show budget field
    budgetOption.forEach(radio => {
        radio.addEventListener('change', () => {
            budgetField.classList.toggle('hidden', radio.value !== 'yes' || !radio.checked);
        });
    });
});
</script>

  </body>
</html>
