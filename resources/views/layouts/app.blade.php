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
    .card-header {
        font-family: Oswald;
    }
    .register-wrapper {
        padding: 50px;
    }
    .slider-wrapper {
        position: relative;
    }
    .slider-wrapper img {
        max-width: 100%;
    }
    .logo-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        padding: 20% 10%;
    }
    .logo-wrapper button {
        margin-top: 15px;
    }
    .main-logo {
        font-family: Oswald;
        color: black;
        font-size: 40px;
        line-height: 25px;
    }
    .catchcopy {
        font-family: Oswald;
        color: white;
        font-size: 14px;
    }
    .intro-wrapper {
        padding-bottom: 50px;
        background-color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .intro-wrapper p {
        text-align: center;
    }
    .intro-wrapper img {
        width: 100%;
    }
    .top-header {
        font-family: Oswald;
        font-size: 40px;
        text-align: center;
        padding: 30px;
    }
    .box {
        display: flex;
        align-items: center;
    }
    .instruction-row {
        width: 50%;
        box-sizing: border-box;
        padding: 10px;
    }
    .instruction-row img {
        width: 100%;
        box-shadow : 15px 15px 37px gray;
    }
    .panel {
        position: relative;
    }
    .panel-in {
        padding: 15px 15px;
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
    }
    .panel-main {
        padding: 20px;
        z-index: 30;
        position: relative;
        margin-bottom: 0;
        border: solid 1px rgba(255,255,255,0.4);
        background: rgba(255,255,255,0.6);
    }
    .instruction-wrapper {
        line-height: 25px;
        background-image: url("{{ asset('images/bremen.jpg') }}");
        background-size: 100%;
    }
    .row-text {
        font-size: 30px;
        font-family: Oswald;
        padding-bottom: 14px;
    }
    .row-text p {
        padding-top: 10px;
        font-size: 14px;
    }
    .header-sub {
        font-size: 18px;
        padding-top: 10px;
    }
    .page-wrapper {
        padding-top: 20px;
        padding-bottom: 40px;
    }
    .page-wrapper h4 {
        font-weight: bold;
    }
    .header-title {
        font-family: Oswald;
        color: turquoise;
    }
    .comment-area {
        padding-top: 30px;
    }
    .comment-header {
        font-weight: bold;
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
    .post-img {
        padding-top: 100px;
    }
    footer {
        background-color: white;
    }
    .footer-row {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    .footer-title {
        padding-top: 40px;
        padding-bottom: 40px;
        font-family: Oswald;
        font-size: 30px;
        line-height: 25px;
    }
    .footer-title a {
        color: black;
    }
    footer a:hover {
        text-decoration: none;
        color: gray;
    }
    .footer-menu a {
        color: black;
        padding: 20px;
    }
    .footer-catchcopy {
        font-size: 14px;
    }
    .js-fadein {
        opacity: 0; 
        visibility: hidden;
        transform: translateY(40px);
        transition: all 1s;
    }
    .js-fadein.is-show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0px);
    }
    .badge {
        color: white;
    }
    .card-info {
        padding-top: 10px;
    }
    .post-date {
        font-size: 11px;
        padding-bottom: 20px;
    }
    span {
        display: inline-block;
    }

    @media screen and (max-width: 1026px) {
        .logo-wrapper {
            padding:15% 10%;
        }
        .instruction-row {
            width: 100%;
            box-sizing: border-box;
        }
        footer {
            padding-bottom: 20px;
        }
        .footer-row {
            font-size: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            text-align: center;
        }
        .footer-title {
            padding-top: 20px;
            padding-bottom: 20px;
            font-family: Oswald;
            font-size: 30px;
            line-height: 25px;
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
        .slider-wrapper img {
            max-width: 100%;
	        height: auto;
        }
        .logo-wrapper {
            padding:10% 5%;
        }
        .main-logo {
            font-family: Oswald;
            color: black;
            font-size: 20px;
            line-height: 20px;
        }
        .catchcopy {
            font-family: Oswald;
            color: white;
            font-size: 7px;
        }
        .logo-wrapper button {
            width: 90px;
            height: 30px;
            font-size: 7px;
        }
        .top-header {
            font-family: Oswald;
            font-size: 30px;
            text-align: center;
            padding-top: 40px;
        }
        .row-text {
            font-size: 20px;
            padding-bottom: 0px;
        }
        .header-sub {
            font-size: 15px;
        }
        .row-text p {
            font-size: 12px;
        }
        .intro {
            font-size: 12px;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 40px;
        }
        .intro-wrapper p {
            font-size: 14px;
        }
        .box {
            flex-direction: column;
        }
        .order1 {
            order: 1;
        }
        .order2 {
            order: 2;
        }
        .order3 {
            order: 3;
        }
        .order4 {
            order: 4;
        }
        .order5 {
            order: 5;
        }
        .order6 {
            order: 6;
        }
        .footer-title {
            padding-top: 20px;
            padding-bottom: 20px;
            font-family: Oswald;
            font-size: 20px;
            line-height: 25px;
            text-align: center;
        }
        .footer-catchcopy {
            font-size: 10px;
        }
        .footer-menu a {
            color: black;
            padding: 5px;
        }
        .register-wrapper {
            padding: 10px 5px;
        }
        .register-wrapper btn-btn-primary {
            margin: 0 auto;
        }
    }
}
    
</style>

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

<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>

<script>
function showElementAnimation() {
                    
    var element = document.getElementsByClassName('js-fadein');
    if(!element) return; // 要素がなかったら処理をキャンセル
                        
    var showTiming = window.innerHeight > 768 ? 200 : 300; // 要素が出てくるタイミングはここで調整
    var scrollY = window.pageYOffset; //スクロール量を取得
    var windowH = window.innerHeight; //ブラウザウィンドウのビューポート(viewport)の高さを取得
                        
    for(var i=0;i<element.length;i++) { 
        var elemClientRect = element[i].getBoundingClientRect(); 
        var elemY = scrollY + elemClientRect.top; 
        if(scrollY + windowH - showTiming > elemY) {
        element[i].classList.add('is-show');
        } else if(scrollY + windowH < elemY) {
        // 上にスクロールして再度非表示にする場合はこちらを記述
        element[i].classList.remove('is-show');
        }
    }
    }
    showElementAnimation();
    window.addEventListener('scroll', showElementAnimation);
</script>

<noscript>
<style>
    .js-fadein {
    opacity: 1;
    visibility: visible;
    transform: translateY(0px);
    }
</style>
</noscript>  

