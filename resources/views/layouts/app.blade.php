<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

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

    <link media="all" type="text/css" rel="stylesheet" href="{{ url(mix('assets/css/vendor.css')) }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ url(mix('assets/css/app.css')) }}">

    @yield('styles')

    @hook('app:styles')
</head>
<body>
    @include('partials.navbar')

    <div class="container-fluid">
        <div class="row">
            @include('partials.sidebar.main')

            <div class="content-page">
                <main role="main" class="px-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DRP5CLRML0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DRP5CLRML0');
    </script>

    <script src="{{ url(mix('assets/js/vendor.js')) }}"></script>
    <script src="{{ url('assets/js/as/app.js') }}"></script>
    @yield('scripts')

    @hook('app:scripts')
</body>
</html>
