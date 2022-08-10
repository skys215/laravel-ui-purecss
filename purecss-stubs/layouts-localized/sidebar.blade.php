<div class="sidebar pure-u-1-6 pure-u-md-3-24">
    <div>
        <a href="{{ route('home') }}" class="logo">
            <h2>{{ config('app.name') }}</h2>
        </a>
    </div>

    <div id="menu">
        <div class="pure-menu">
            <p class="pure-menu-heading">
                {{ Auth::user()->name }}
                <a href="{{ route('logout') }}" class="pure-button button-xxsmall" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('auth.sign_out') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </p>

            <ul class="pure-menu-list">
                @include('layouts.menu')
            </ul>
        </div>
    </div>
</div>
