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

            <h1 class="subhead">{{ __('auth.confirm_passwords.title') }}</h1>

            @error('password')
            <aside class="pure-message message-error">
                <p><strong>ERROR</strong>: {{ $message }}</p>
            </aside>
            @enderror

            <form method="POST" action="{{ route('password.confirm') }}" class="pure-form pure-form-stacked">
                @csrf
                <fieldset>

                    <label for="password">{{ __('Password') }}</label>
                    <input type="password" name="password" placeholder="{{ __('Password') }}" class="pure-input-1" required autocomplete="current-password" value="">

                    @if ($errors->has('password'))
                        <span class="error invalid-feedback">{{ $errors->first('password') }}</span>
                    @endif
                    <button type="submit" class="pure-button button-success">{{ __('auth.confirm_password') }}</button>

                    <p>
                        <a href="{{ route('password.request') }}">{{ __('auth.confirm_passwords.forgot_your_password') }}</a>
                    </p>
                </fieldset>
            </form>
                </div>

                <div class="footer">
                    <div class="pure-menu pure-menu-horizontal">
                        Copyright&copy;{{ config('app.name') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
