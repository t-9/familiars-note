<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <v-app id="inspire">
            <v-app-bar
                app
                color="primary"
            >
                <v-app-bar-nav-icon></v-app-bar-nav-icon>

                <v-toolbar-title>{{ config('app.name', 'Laravel') }}</v-toolbar-title>
        
                <v-spacer></v-spacer>

                @guest
                    <v-btn text small color="secondary" href="{{ route('login') }}">{{ __('Login') }}</v-btn>
                @else
                    <v-btn text small color="secondary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}
                    </v-btn>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest

            </v-app-bar>

            <v-content>
                @yield('content')
            </v-content>

            <v-footer
                app
                color="primary"
            >
                <span>&copy; {{ now()->year }} {{ config('app.name', 'Familiars Note') }}</span>
            </v-footer>

        </v-app>
    </div>
</body>
</html>
