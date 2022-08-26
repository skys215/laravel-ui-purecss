<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | {{ __('auth.register') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="main" class="pure-g">
        <div class="sidebar pure-u-1-2 pure-u-md-1-2">
            <div class="header-large">
                <h1>{{ config('app.name') }}</h1>
                <h2>{{ __('auth.register') }}</h2>

                <nav class="nav">
                    <ul>
                        <li>
                            <a class="pure-button" href="{{ route('login') }}">{{ __('auth.sign_in') }}</a>
                            <a class="pure-button active" href="{{ route('register') }}">{{ __('auth.register') }}</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="content pure-u-1-2 pure-u-md-1-2">
            <div class="header-medium">

                <h1 class="subhead">{{ __('auth.register') }}</h1>

                @error('name')
                <aside class="pure-message message-error">
                    <p><strong>ERROR</strong>: {{ $message }}</p>
                </aside>
                @enderror
                @error('email')
                <aside class="pure-message message-error">
                    <p><strong>ERROR</strong>: {{ $message }}</p>
                </aside>
                @enderror
                @error('password')
                <aside class="pure-message message-error">
                    <p><strong>ERROR</strong>: {{ $message }}</p>
                </aside>
                @enderror
                <form action="{{ route('register') }}" method="POST" class="pure-form pure-form-stacked">
                    @csrf
                    <fieldset>
                        <label for="name">{{ __('auth.name') }}</label>
                        <input type="text" name="name" placeholder="{{ __('auth.full_name') }}" class="pure-input-1" value="{{ old('name') }}">

                        <label for="email">{{ __('auth.email') }}</label>
                        <input type="email" name="email" placeholder="{{ __('auth.email') }}" class="pure-input-1" value="{{ old('email') }}">

                        <label for="password">{{ __('Password') }}</label>
                        <input type="password" name="password" placeholder="{{ __('Password') }}" class="pure-input-1" value="">

                        <label for="password">{{ __('auth.confirm_password') }}</label>
                        <input type="password" name="password_confirmation" placeholder="{{ __('auth.confirm_password') }}" class="pure-input-1" value="">

                        <label for="agreeTerms">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            {{ __('auth.registration.i_agree') }} <a href="#">{{ __('auth.registration.terms') }}</a>
                        </label>

                        <button type="submit" class="pure-button button-success">{{ __('auth.register') }}</button>

                        <p class="mb-0">
                            <a href="{{ route('login') }}" class="text-center">{{ __('auth.sign_in') }}</a>
                        </p>
                    </fieldset>
                </form>

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
