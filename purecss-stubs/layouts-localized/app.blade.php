<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>{{ config('app.name') }}</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @stack('third_party_stylesheets')

    @stack('page_css')
</head>
<body>
    <div id="layout" class="pure-g">
        @include('layouts.sidebar')

        <div class="content pure-u-5-6 pure-u-md-21-24">
            <div class="header-small content-wrapper">
                <h1 class="subhead">@yield('title', __('Dashboard'))</h1>

                @yield('content')
            </div>

            <!-- Main Footer -->
            <div class="header-small footer">
                <h3>Copyright &copy; 2022 <a href="{{ url('/') }}">{{ config('app.name') }}</a>. All rights reserved.</h3>
            </div>
        </div>

    </div>


    <script src="{{ mix('js/app.js') }}"></script>

    @stack('third_party_scripts')

    @stack('page_scripts')
</body>
</html>
