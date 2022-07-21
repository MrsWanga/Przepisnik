<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Przepiśnik') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css" type="text/css" />
</head>
<body>
    <div class="container">
        <header>
            <div class="picture">
                <img src="/Images/zdjecie1.jpg" alt="" height="300px" >
            </div>
            <img src="/Images/logo.png" alt="Przepiśnik. Rodzinne receptury" height="300px" width="300px">
            <div class="picture">
                <img src="/Images/zdjecie.jpg" alt="" height="300px" >
            </div>
        </header>

        <nav>
            <a href="/index">
                <div class="option">
                    <img src="/Images/home.png" alt="" height="25px">
                    <br>Strona główna
                </div>
            </a>
            <a href="/create">
                <div class="option">
                    <img src="/Images/add.png" alt="" height="25px">
                    <br>Dodaj przepis
                </div>
            </a>
            <a href="/random">
                <div class="option">
                    <img src="/Images/los.png" alt="" height="25px">
                    <br>Losuj przepis
                </div>
            </a>
            <a href="/about">
                <div class="option">
                    <img src="/Images/about.png" alt="" height="25px">
                    <br>O przepiśniku
                </div>
            </a>
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                        <a href="{{ route('login') }}">
                            <div class="option">
                                    <img src="/Images/key.png" alt="" height="25px">
                                    <br>Zaloguj się
                            </div>
                        </a>
                @endif

            @else
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <div class="option">
                                <b>{{ Auth::user()->name }}</b>
                                <br>Wyloguj się
                            </div>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
            @endguest
        </nav>

        <div style="clear: both;"></div>

        <div id="app">
            <div class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">

                        </ul>
                    </div>
                </div>
            </div>

            <main class="py-4">
                @yield('content')
            </main>

        </div>
    </div>
    <footer>
        &copy; Copyright by MrsWanga 2022. Wszelkie prawa zastrzeżone.
    </footer>
</body>
</html>
