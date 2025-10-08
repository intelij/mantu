@extends('layouts.auth')

@section('page-title', __('Sign Up'))

@if (setting('registration.captcha.enabled'))
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endif

@section('content')


            <div class="logo">
                <a href="/"><img src="images/logo/logo.png" alt="image"></a>
            </div>
            <div class="content">
                <h2 class="title">We work with Trusted Traders we've endorsed for your peace of mind.</h2>
            </div>
        </div>

        <div class="form-wrapper">
            <div class="inner-wrapper">
                <div class="text-center">
                    <h2 class="title">Welcome To Mantu CRM Portal</h2>
                     @if (setting('reg_enabled'))
                        <p class="mt-2">@lang('Already have an account?') <a class="font-weight-bold site-color" href="<?= url("login") ?>">@lang('Login')</a></p>
                    @endif
                </div>

                @include('partials.messages')

                @include('partials/messages')

                    <form role="form" action="<?= url('register') ?>" method="post" id="registration-form" autocomplete="off" class="mt-3">
                        <input type="hidden" value="<?= csrf_token() ?>" name="_token">
                        <div class="form-group">
                            <label>@lang('Email')</label>
                            <input type="email"
                                   name="email"
                                   id="email"
                                   class="form-control input-solid"
                                   placeholder="@lang('Email')"
                                   value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('Username')</label>
                            <input type="text"
                                   name="username"
                                   id="username"
                                   class="form-control input-solid"
                                   placeholder="@lang('Username')"
                                   value="{{ old('username') }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('Password')</label>
                            <input type="password"
                                   name="password"
                                   id="password"
                                   class="form-control input-solid"
                                   placeholder="@lang('Password')">
                        </div>
                         <div class="form-group">
                            <label>@lang('Confirm Password')</label>
                            <input type="password"
                                   name="password_confirmation"
                                   id="password_confirmation"
                                   class="form-control input-solid"
                                   placeholder="@lang('Confirm Password')">
                        </div>


                        @if (setting('tos'))
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="tos" id="tos" value="1"/>
                                <label class="custom-control-label font-weight-normal" for="tos">
                                    @lang('I accept')
                                    <a href="#tos-modal" data-toggle="modal" class="font-weight-bold site-color">@lang('Terms of Service')</a>
                                </label>
                            </div>
                        @endif

                        {{-- Only display captcha if it is enabled --}}
                        @if (setting('registration.captcha.enabled'))
                            <div class="form-group my-4">
                                {!! app('captcha')->display() !!}
                            </div>
                        @endif
                        {{-- end captcha --}}

                        <button class="btn main-btn w-100 mt-4" type="submit">@lang('Register')</button>


                    </form>

            </div>


            @if (setting('tos'))
                <div class="modal fade" id="tos-modal" tabindex="-1" role="dialog" aria-labelledby="tos-label">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tos-label">@lang('Terms of Service')</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @include('auth.tos')
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    @lang('Close')
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

@stop

@section('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\Auth\RegisterRequest', '#registration-form') !!}
@stop
