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

    .top_slider {
        position: relative;
    }
    .top_slider img {
        width: 100%;
    }
    .title_area {
        position: absolute;
        top: 0;
        left: 0;
        padding: 20% 10%;
    }
    .title_area button {
        margin-top: 15px;
    }
    .top_title {
        font-family: Oswald;
        color: black;
        font-size: 40px;
        line-height: 25px;
    }
    .top_subtitle {
        font-family: Oswald;
        color: white;
        font-size: 14px;
    }

    .top_intro {
        background-color: aliceblue;
        padding: 40px;
    }
    .top_header {
        font-family: Oswald;
        font-size: 40px;
        text-align: center;
        padding-bottom: 20px;
    }
    .intro {
        text-align: center;
    }

    .header_title {
        padding-top: 20px;
        font-family: Oswald;
        color: turquoise;
    }
    .panel {
        position: relative;
    }
    .panel-in {
        padding: 100px 100px;
        position: relative;
    }
    .panel-main {
        padding: 20px;
        z-index: 30;
        position: relative;
        margin-bottom: 0;
        border: solid 1px rgba(255,255,255,0.4);
        background: rgba(255,255,255,0.6);
    }

    .top_instruction {
        line-height: 25px;
        background-image: url("{{ asset('images/bremen.jpg') }}");
        background-size: 100%;
    }
    .top_instruction img {
        width: 100%;
    }
    .top_instruction_row {
        padding-top: 20px;
        padding-bottom: 40px;
    }
    .row_header {
        font-size: 30px;
        font-family: Oswald;
        padding-bottom: 14px;
    }
    .header_sub {
        font-size: 18px;
    }
    .trouble-you_row {
        text-align: right;
    }

    .header {
        font-size: 40px;
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

    .page_wrapper {
        padding-bottom: 40px;
    }

    footer {
        background-color: white;
    }

    .footer_title {
        padding-top: 40px;
        padding-bottom: 40px;
        font-family: Oswald;
        font-size: 40px;
        line-height: 25px;
    }

    .footer_title a {
        color: black;
    }

    footer a:hover {
        text-decoration: none;
        color: gray;
    }

    .footer_menu {
        display: flex;
        flex-direction: row;
    }

    .footer_menu a {
        padding: 20px;
        color: black;
    }

    .footer_subtitle {
        font-size: 14px;
    }
    span {
        display: inline-block;
    }

    @media screen and (max-width: 1026px) {
        .title_area {
            padding:15% 10%;
        }
        .panel-in {
            padding: 50px 50px;
            position: relative;
        }
        .footer_menu a {
            padding: 10px;
            color: black;
        }
        span {
            display: inline-block;
        }
    }

    @media screen and (max-width: 640px) {
        .title_area {
            padding:10% 5%;
        }
        .top_title {
            font-family: Oswald;
            color: black;
            font-size: 20px;
            line-height: 20px;
        }
        .top_subtitle {
            font-family: Oswald;
            color: white;
            font-size: 7px;
        }
        .title_area button {
            width: 90px;
            height: 30px;
            font-size: 7px;
        }
        .top_header {
            font-family: Oswald;
            font-size: 30px;
            text-align: center;
            padding-top: 40px;
        }
        .row_header {
            font-size: 20px;
            padding-bottom: 10px;
        }
        .header_sub {
            font-size: 15px;
        }
        .top_instruction p {
            font-size: 12px;
            line-height: 12px;
        }
        .panel-in {
            padding: 15px 15px;
            position: relative;
        }
        .intro {
            font-size: 12px;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 40px;
        }
        .trouble-you_row {
            text-align: left;
        }
        .footer_title {
            padding-top: 20px;
            padding-bottom: 20px;
            font-family: Oswald;
            font-size: 20px;
            line-height: 25px;
            text-align: center;
        }
        .footer_subtitle {
            font-size: 10px;
        }
        .footer_menu a {
            display: none;
        }
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
                                    <a class="dropdown-item" href="http://y2-world.com/" target="_blank">
                                        {{ __('YUKI OFFICIAL') }}
                                    <a class="dropdown-item" href="#" target="_blank">
                                    {{ __('LIVE×YOU') }}
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
    </div>
    @yield('content')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer_title">      
                        <a href="{{ url('/') }}">TRAVEL×YOU<br>
                        <span class="footer_subtitle">旅とあなたをつなぐプラットフォーム</span></a><br>
                    </div> 
                </div>
                <div class="col-md-7 my-auto">
                    <div class="footer_menu">
                        <a href="{{ route('login.guest') }}"><span>ゲストログイン</span></a>
                        <a href="{{ url('/faq') }}"><span>FAQ</span></a>
                        <a href="{{ url('/contact') }}"><span>お問い合わせ</span></a>
                        <a href="http://y2-world.com" target="_blank"><span>YUKI OFFICIAL</span></a>
                        <a href="#" target="_blank"><span>LIVE×YOU</span></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
