@extends('layouts.app')

@section('content')
<div class="element js-fadein">
    <div class="slider-wrapper">
        <img src="{{ asset('images/top_slider_img.jpg') }}">
            <div class="logo-wrapper">
                <div class="main-logo">      
                    TRAVEL×YOU<br>
                    <span class="catchcopy">旅とあなたをつなぐプラットフォーム</span>
                </div>  
                <a href="{{ url('/register') }}"><button type="button" class="btn btn-light">今すぐ始める</button></a>
            </div>
        </div>
    </div>
</div>
<div class="intro-wrapper">
    <div class="intro-text">
        <div class="element js-fadein">
            <div class="top-header">WHAT'S TRAVEL×YOU?</div>   
            <div class="intro-img">
                <div class="click-img">
                    <img src="{{ asset('images/click.png') }}" alt="click">  
                </div>
                <div class="world-img">
                    <div id="open">
                        <img src="{{ asset('images/world.jpg') }}" class="world-img" alt="map img" id="trigger" title="訪れた国をクリック！"> 
                    </div> 
                </div> 
                <div class="element js-fadein">
                    <p id="target" class="intro-text">あなたが訪れた国はどこですか？</p>
                </div>
            
                <div id="mask" class="hidden"></div>
                <section id="modal" class="hidden">
                    <div id="close">
                        <i class="fas fa-times fa-lg"></i>
                    </div>
                    <p>
                    今までのあなたの旅の歴史を記録し、<br>
                    さらにこれからのあなたの旅をより楽しいものにするツールです。<br>
                    旅行記を作ったり、旅行先でのトラブルをシェアしたり、<br>
                    疑問に思ったことを質問したり... <br>
                    楽しみ方は何通りもあります。<br>
                    さぁ、一緒に旅に出かけましょう！
                    </p>
                </section>
                <p class="scroll">
                    SCROLL<br>
                    ⌵
                </div>
            </div>
        </div>
    </div>
</div>
<div class="instruction-wrapper">
    <div class="panel">
        <div class="panel-in">   
            <div class="panel-main">
                <div class="top-header">TRAVEL×YOU</div> 
                    <div class="box">
                        <div class="instruction-row order1">
                            <div class="row-text">
                                TRAVEL×YOU
                                <div class="header-sub">旅の記録ができる</div>
                                <p>旅先で撮った写真、ちょっとした日記をシェアすることができます。さらに、あなたが今まで訪れた国が一覧で見れます。</p>
                            </div>
                        </div>
                        <div class="instruction-row order2">
                            <div class="element js-fadein">
                                <img src="{{ asset('images/paris.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="instruction-row order4">
                            <div class="element js-fadein">
                                <img src="{{ asset('images/lille.jpg') }}">
                            </div>
                        </div>
                        <div class="instruction-row order3">
                            <div class="row-text">
                                TROUBLE×YOU
                                <div class="header-sub">旅先のトラブルをシェアできる</div>
                                <p>あなたの旅行で起こった問題、その解決方法をシェアすることができます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="instruction-row order5">
                            <div class="row-text">Q&A
                                <div class="header-sub">旅についての質問ができる</div>
                                <p>旅行する予定の国や都市に関する質問を投稿したり、回答したりすることができます。</p>
                            </div>
                        </div>
                        <div class="instruction-row order6">
                            <div class="element js-fadein">
                                <img src="{{ asset('images/hollywood.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id='footer'>
    <div class="container">
        <div class="footer-row">    
            <div class="footer-title">      
                <a href="{{ url('/') }}">TRAVEL×YOU<br>
                <span class="footer-catchcopy">旅とあなたをつなぐプラットフォーム</span></a><br>
            </div> 
            <div class="footer-menu">
                <a href="{{ route('login.guest') }}"><span>ゲストログイン</span></a>|
                <a href="{{ url('/faq') }}"><span>FAQ</span></a>|
                <a href="{{ url('/contact') }}"><span>お問い合わせ</span></a>|
                <a href="http://y2-world.com" target="_blank"><span>YUKI OFFICIAL</span></a>|
                <a href="#" target="_blank"><span>LIVE×YOU</span></a>
            </div>
        </div> 
    </div>
</footer>

@endsection
