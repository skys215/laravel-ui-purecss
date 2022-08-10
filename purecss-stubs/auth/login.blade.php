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
                <h2>Sign in to start your session</h2>

                <nav class="nav">
                    <ul>
                        <li>
                            <a class="pure-button active" href="{{ route('login') }}">Login</a>
                            <a class="pure-button" href="{{ route('register') }}">Register</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="content pure-u-1-2 pure-u-md-1-2">
            <div class="header-medium">

                <h1 class="subhead">Login</h1>

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
                <form action="{{ route('login') }}" method="POST" class="pure-form pure-form-stacked">
                    @csrf
                    <fieldset>
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email" class="pure-input-1" value="{{ old('email') }}">

                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" class="pure-input-1" value="">

                        <label for="remember" class="pure-checkbox">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Remember me</label>
                        </label>

                        <button type="submit" class="pure-button button-success">Sign in</button>

                        <p class="mb-1">
                            <a href="{{ route('password.request') }}">Forgot your password?</a>
                        </p>
                        <p class="mb-0">
                            <a href="{{ route('register') }}" class="text-center">Register</a>
                        </p>
                    </fieldset>
                </form>

                <div class="footer">
                    <div class="pure-menu pure-menu-horizontal">
                        <h3>Copyright &copy; 2014-2022 <a href="{{ url('/') }}">{{ config('app.name') }}</a>. All rights reserved.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
