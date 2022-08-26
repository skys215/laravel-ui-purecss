<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="main" class="pure-g">
        <div class="sidebar pure-u-1-2 pure-u-md-1-2">
            <div class="header-large">
                <h1>{{ config('app.name') }}</h1>
            </div>
        </div>

        <div class="content pure-u-1-2 pure-u-md-1-2">
            <div class="header-medium">

                <h1 class="subhead">{{ __('auth.forgot_password.title') }}</h1>

                @if (session('status'))
                    <div class="pure-message message-success">
                        <p><strong>SUCCESS</strong>: {{ session('status') }}</p>
                    </div>
                @endif

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

                <form method="POST" action="{{ route('password.email') }}" class="pure-form pure-form-stacked">
                    @csrf
                    <fieldset>

                        <label for="email">{{ __('auth.email') }}</label>
                        <input type="email" name="email" placeholder="{{ __('auth.email') }}" class="pure-input-1" value="{{ old('email') }}">

                        <button type="submit" class="pure-button button-success">{{ __('auth.forgot_password.send_pwd_reset') }}</button>

                        <p>
                            <a href="{{ route("login") }}">{{ __('auth.sign_in') }}</a>
                        </p>
                        <p>
                            <a href="{{ route("register") }}">{{ __('auth.register') }}</a>
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
