<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | {{ __('auth.reset_password.title') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="main" class="pure-g">
        <div class="sidebar pure-u-1-2 pure-u-md-1-2">
            <div class="header-large">
                <h1>{{ config('app.name') }}</h1>
                <h2>{{ __('auth.reset_password.reset_pwd_btn') }}</h2>
            </div>
        </div>

        <div class="content pure-u-1-2 pure-u-md-1-2">
            <div class="header-medium">

                    <h1 class="subhead">{{ __('auth.reset_password.title') }}</h1>

                    @error('email')
                    <aside class="pure-message message-error">
                        <p><strong>ERROR</strong>: {{ $errors->first('email') }}</p>
                    </aside>
                    @enderror

                    @error('password')
                    <aside class="pure-message message-error">
                        <p><strong>ERROR</strong>: {{ $errors->first('password') }}</p>
                    </aside>
                    @enderror

                    @error('password_confirmation')
                    <aside class="pure-message message-error">
                        <p><strong>ERROR</strong>: {{ $errors->first('password_confirmation') }}</p>
                    </aside>
                    @enderror

                    <form action="{{ route('password.update') }}" method="POST" class="pure-form pure-form-stacked">
                        @csrf
                        @php
                            if (!isset($token)) {
                                $token = \Request::route('token');
                            }
                        @endphp

                        <input type="hidden" name="token" value="{{ $token }}">
                        <fieldset>

                            <label for="email">{{ __('auth.email') }}</label>
                            <input type="email" name="email" placeholder="{{ __('auth.email') }}" class="pure-input-1" value="{{ old('email') }}">

                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" name="password" placeholder="{{ __('Password') }}" class="pure-input-1" value="">

                            <label for="password">{{ __('auth.confirm_password') }}</label>
                            <input type="password" name="password_confirmation" placeholder="{{ __('auth.confirm_password') }}" class="pure-input-1" value="">

                            <button type="submit" class="pure-button button-success">{{ __('auth.reset_password.reset_pwd_btn') }}</button>

                            <p>
                                <a href="{{ route('login') }}" class="text-center">{{ __('auth.sign_in') }}</a>
                            </p>
                        </fieldset>
                    </form>
                </div>

                <div class="footer">
                    <div class="pure-menu pure-menu-horizontal">
                        <h3>Copyright &copy; 2022 <a href="{{ url('/') }}">{{ config('app.name') }}</a>. All rights reserved.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
