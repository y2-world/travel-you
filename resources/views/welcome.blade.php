<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TRAVEL×YOU - TOP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Oswald', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
                color: turquoise;
                float:center;
            }

            .start {
                font-size: 30px;
            }

            .btn-square-little-rich {
                position: relative;
                display: inline-block;
                padding: 0.25em 0.5em;
                text-decoration: none;
                color: #FFF;
                background: #03A9F4;/*色*/
                border: solid 1px #0f9ada;/*線色*/
                border-radius: 4px;
                box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
                text-shadow: 0 1px 0 rgba(0,0,0,0.2);
            }

            .btn-square-little-rich:active {
                /*押したとき*/
                border: solid 1px #03A9F4;
                box-shadow: none;
                text-shadow: none;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .platform {
                font-size: 20px;
            }

            .text {
                font-size: 12px;
                text-align: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            @media screen and (max-width: 480px) {
                .photo {
                    width: 100%;
                }

                .title {
                font-size: 40px;
                color: turquoise;
                }

                .platform {
                font-size: 20px;
                }
            }
                .links > a {
                color: #636b6f;
                padding: 0 10px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                }
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/posts') }}">OUR TRAVELS</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                
                <br>
                <img class="photo" src="https://image.jimcdn.com/app/cms/image/transf/dimension=1820x10000:format=jpg/path/s5a88878547331ed3/image/i70dfb84374674fa8/version/1610957637/image.jpg" width="50%">
                <br>

                <div class="title">
                    TRAVEL×YOU
                </div>
    
                <div class="platform">
                <b>旅とあなたをつなぐプラットフォーム</b><br>
                <div class="text">
                <br>
                今までのあなたの旅の歴史を記録し、<br>
                さらにこれからのあなたの旅をより楽しいものにするツールです。<br>
                旅行で撮った写真を投稿したり、旅行記を作ったり、<br>
                これから旅行する人のためにTIPSを投稿したり... <br>
                楽しみ方は何通りもあります。<br>
                さぁ、一緒に旅に出かけましょう！
                </div>
                <br>
                <div class="links">
                    <a href="{{ url('/faq') }}">FAQ</a>
                    <a href="{{ url('/contact') }}">お問い合わせ</a>
                    <a href="http://54.249.81.67">NIPPO</a>
                    <a href="https://y2world.github.io/home/">YUKI OFFICIAL</a>
                </div>

            </div>
        </div>
    </body>
</html>
