<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title') - {{ setting('app_name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/lib/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- lineawesome font -->
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}">
    <!-- lightcase css -->
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">

    <link rel="stylesheet" href="{{ asset('css/lib/countrySelect.css') }}">
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{ asset('css/lib/slick.css') }}">

    <link rel="stylesheet" href="{{ asset('css/izitoast.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    {{-- <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/fontawesome-all.min.css') }}" rel="stylesheet">

    @yield('header-scripts')

    @hook('auth:styles')
</head>
<body>

     <div class="back-to-top">
        <i class="las la-arrow-up"></i>
    </div>
            <!-- back-to-top start -->
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

    <div class="account-page">

        <div class="content-wrapper">

            @yield('content')


            <div class="copy-right-text">
                <p>Copyright &copy; {{ date('Y') }} Mantu. All Rights Reserved.</p>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/vendor.js') }}"></script>
    <script src="{{ asset('assets/js/as/app.js') }}"></script>
    <script src="{{ asset('assets/js/as/btn.js') }}"></script>

    <!-- jQuery library -->

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

    <!-- main js -->
    <script src="js/app.js"></script>

        <script>
        "use strict";

        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    "<span class='text-danger'>Captcha Field Is Required.</span>";
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>


    @yield('scripts')
    @hook('auth:scripts')

</body>


</html>

