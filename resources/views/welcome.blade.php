@extends('layouts.app')

@section('content')
<div class="top_slider">
    <img src="{{ asset('images/top_slider_img.jpg') }}">
        <div class="title_area">
            <div class="top_title">      
                TRAVEL×YOU<br>
                <span class="top_subtitle">旅とあなたをつなぐプラットフォーム</span>
            </div>  
            <a href="{{ url('/register') }}"><button type="button" class="btn btn-light">今すぐ始める</button></a>
        </div>
    </div>
</div>

<div class="top_intro">
    <div class="top_header">WHAT'S TRAVEL×YOU?</div>     
    <div class="intro">
    今までのあなたの旅の歴史を記録し、<br>
    <span>さらにこれからのあなたの旅を</span><span>より楽しいものにするツールです。</span><br>
    旅行記を作ったり、<br>
    旅行先でのトラブルをシェアしたり、<br>
    疑問に思ったことを質問したり... <br>
    楽しみ方は何通りもあります。<br>
    さぁ、一緒に旅に出かけましょう！
    </div>
</div>

<div class="top_instruction">
    <div class="panel">
        <div class="panel-in">
            <div class="panel-main">
            <div class="top_header">WHAT CAN I DO?</div> 
                <div class="container">
                    <div class="top_instruction_row">
                        <div class="row">
                            <div class="col-md-6 my-auto">
                                <div class="row_header">TRAVEL×YOU<br><span class="header_sub">旅の記録ができる<span></div>
                                <p>旅先で撮った写真、ちょっとした日記をシェアすることができます。さらに、あなたが今まで訪れた国が一覧で見れます。</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('images/paris.jpg') }}" width="100%">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('images/lille.jpg') }}" width="100%">
                            </div>
                            <div class="col-md-6 my-auto">
                                <div class="trouble-you_row">
                                    <div class="row_header">TROUBLE×YOU<br><span class="header_sub">旅先のトラブルをシェアできる</div>
                                    <p>あなたの旅行で起こった問題、<span>その解決方法をシェアすることができます。</span></p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 my-auto">
                                <div class="row_header">Q&A<br><span class="header_sub">旅についての質問ができる</div>
                                <p>旅行する予定の国や都市に関する質問を投稿したり、回答したりすることができます。</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('images/hollywood.jpg') }}" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
