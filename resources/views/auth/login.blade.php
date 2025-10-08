{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="J4ekgNQ7VwmiJ21wo19Q36cK2mDJtnw2fmOhov9V">

    <link rel="shortcut icon" type="image/png" href="asset/images/default.png">

    <title>
                    Mantu-
                Login Page
    </title>

    <link rel="stylesheet" href="css/lib/bootstrap.min.css">

    <link rel="stylesheet" href="css/all.min.css">
    <!-- lineawesome font -->
    <link rel="stylesheet" href="css/line-awesome.min.css">
    <!-- lightcase css -->
    <link rel="stylesheet" href="css/lightcase.css">

    <link rel="stylesheet" href="css/lib/countrySelect.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="css/lib/slick.css">

    <link rel="stylesheet" href="css/izitoast.min.css">

    <link rel="stylesheet" href="css/custom.css">

    <!-- main css -->
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet"
        href="css/color.php%3Fprimary_color=813FD6.css">
</head>


<body> --}}


@extends('layouts.auth')

@section('page-title', trans('Login'))

@section('content')


            <div class="logo">
                <a href="/"><img src="images/logo/logo.png" alt="image"></a>
            </div>
            <div class="content">
                <h2 class="title">We work with Trusted Traders we've endorsed for your peace of mind.</h2>
                {{-- <h3>Every trader you find on this site has passed the rigorous assessment set by our trading standards professionals, and every customer review you read here is verified genuine by our moderators.</h3> --}}





            </div>
        </div>

        <div class="form-wrapper">
            <div class="inner-wrapper">
                <div class="text-center">
                    <h2 class="title">Welcome To Mantu CRM Portal</h2>
                    <p class="mt-2">New To Mantu? <a href="register" class="site-color">Sign Up</a></p>
                </div>

                @include('partials.messages')

                <form role="form" action="<?= url('login') ?>" method="POST" id="login-form" autocomplete="off" class="mt-3 account-form">

                    <input type="hidden" value="<?= csrf_token() ?>" name="_token">
                    @if (Request::has('to'))
                        <input type="hidden" value="{{ Request::get('to') }}" name="to">
                    @endif

                    <label>@lang('Email or Username')</label>
                    <div class="custom-icon-field mb-3">
                        <input type="text"
                                name="username"
                                id="username"
                                class="form-control input-solid"
                                placeholder="@lang('Email or Username')"
                                value="{{ old('username') }}">
                        <i class="las la-envelope"></i>
                    </div>
                    <label>@lang('Password')</label>
                    <div class="custom-icon-field mb-3">
                        <input type="password"
                               name="password"
                               id="password"
                               class="form-control input-solid"
                               placeholder="@lang('Password')">
                        <i class="las la-lock"></i>
                    </div>

                    <div class="d-flex flex-wrap justify-content-between">

                        @if (setting('remember_me'))
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="remember" id="remember" value="1"/>
                                <label class="custom-control-label font-weight-normal" for="remember">
                                    @lang('Remember me?')
                                </label>
                            </div>
                        @endif

                        @if (setting('forgot_password'))
                            <a href="<?= route('password.request') ?>" class="forgot mb-2 site-color">@lang('I forgot my password')</a>
                        @endif

                    </div>
                    <button class="btn main-btn w-100 mt-4" type="submit">@lang('Log In')</button>
                </form>

            </div>

@stop

@section('scripts')
    <script src="{{ asset('assets/js/as/login.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Auth\LoginRequest', '#login-form') !!}
@stop
