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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">

<style>
    html, body {
        font-family: helvetica;
    }
    .navbar-brand {
        color: turquoise;
        font-family: Oswald;
    }
    .mb-4,.trouble {
        color: turquoise;
        font-family: Oswald;
    }
    .card-header {
        font-family: Oswald;
    }
   
    .gmap {
    height: 0;
    overflow: hidden;
    padding-bottom: 56.25%;
    position: relative;
    }

    .gmap iframe {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    }  

    .avbarDropdown {
        font-family: Oswald;
    }

    .diary {
        font-family: Oswald;
    }

    @media screen and (max-width: 640px) {
    .carousel-inner {
        width:100%
        }
    }

    .menu {
    color: silver;
    text-align: center;
    font-size: 20px;
    font-family: "Oswald";  
    padding : 0 30px;
    }

    a:hover {
        text-decoration: none;
    }

    @media screen and (max-width: 640px) {
    .menu {
    color: silver;
    text-align: center;
    font-size: 15px;
    font-family: "Oswald";  
    text-decoration:none;
    padding : 0 10px;
    }
    
    .menu-profile {
    color: turquoise;
    text-decoration: none;}
    }

    span {
   display: inline-block;
   }
}

    
    
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id )}}">
                                        {{ __('MY TRAVELS') }}
                                    <a class="dropdown-item" href="{{ url('posts') }}">
                                        {{ __('OUR TRAVELS') }}
                                    <a class="dropdown-item" href="{{ url('troubles') }}">
                                        {{ __('TROUBLE×YOU') }}
                                    <a class="dropdown-item" href="{{ url('questions') }}">
                                        {{ __('Q&A') }}
                                    <a class="dropdown-item" href="{{ url('faq') }}">
                                        {{ __('FAQ') }}
                                    <a class="dropdown-item" href="{{ url('contact') }}">
                                        {{ __('お問い合わせ') }}
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ url('http://54.249.81.67/') }}">
                                        {{ __('NIPPO') }}
                                    <a class="dropdown-item" href="http://y2-world.com/">
                                        {{ __('YUKI OFFICIAL') }}
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
