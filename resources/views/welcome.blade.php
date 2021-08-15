@extends('layouts.app')

@section('content')
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

<div class="intro-wrapper">
    <div class="top-header">WHAT'S TRAVEL×YOU?</div>     
    <p>今までのあなたの旅の歴史を記録し、<br>
    <span>さらにこれからのあなたの旅を</span><span>より楽しいものにするツールです。</span><br>
    旅行記を作ったり、<br>
    旅行先でのトラブルをシェアしたり、<br>
    疑問に思ったことを質問したり... <br>
    楽しみ方は何通りもあります。<br>
    さぁ、一緒に旅に出かけましょう！</p>
</div>

<div class="instruction-wrapper">
    <div class="panel">
        <div class="panel-in">   
            <div class="panel-main">
                <div class="top-header">WHAT CAN I DO?</div> 
                    <div class="box">
                        <div class="instruction-row order1">
                            <div class="row-text">
                                TRAVEL×YOU
                                <div class="header-sub">旅の記録ができる</div>
                                <p>旅先で撮った写真、ちょっとした日記をシェアすることができます。さらに、あなたが今まで訪れた国が一覧で見れます。</p>
                            </div>
                        </div>
                        <div class="instruction-row order2">
                            <img src="{{ asset('images/paris.jpg') }}">
                        </div>
                    </div>
                    <div class="box">
                        <div class="instruction-row order4">
                            <img src="{{ asset('images/lille.jpg') }}">
                        </div>
                        <div class="instruction-row order3">
                            <div class="row-text">TROUBLE×YOU<br><div class="header-sub">旅先のトラブルをシェアできる</div>
                                <p>あなたの旅行で起こった問題、その解決方法をシェアすることができます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="instruction-row order5">
                            <div class="row-text">Q&A<br><div class="header-sub">旅についての質問ができる</div>
                                <p>旅行する予定の国や都市に関する質問を投稿したり、回答したりすることができます。</p>
                            </div>
                        </div>
                        <div class="instruction-row order6">
                            <img src="{{ asset('images/hollywood.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
