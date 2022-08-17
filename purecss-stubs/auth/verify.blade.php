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
                <h2>Verify Your Email Address</h2>
            </div>
        </div>

        <div class="content pure-u-1-2 pure-u-md-1-2">
            <div class="header-medium">

                <h1 class="subhead">Verify</h1>

                @if (session('resent'))
                    <div class="pure-message message-success" role="alert">A fresh verification link has been sent to
                        your email address
                    </div>
                @endif

                <p>Before proceeding, please check your email for a verification link.If you did not receive
                            the email,
                    <a href="#"
                       onclick="event.preventDefault(); document.getElementById('resend-form').submit();">
                        click here to request another.
                    </a>
                </p>
                <form id="resend-form" action="{{ route('verification.resend') }}" method="POST" class="d-none">
                    @csrf
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
