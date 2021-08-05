@extends('layouts.app')

@section('content')
<div class="top_paris">
    <img src="{{ asset('images/top_img.jpg') }}" width="100%">
        <div class="title_area">
            <div class="top_title">      
                TRAVEL×YOU<br>
                <span class="top_subtitle">旅とあなたをつなぐプラットフォーム</span><br>
            </div>  
            <button type="button" class="btn btn-light">今すぐ始める</button>
        </div>
    </div>
</div>
<div class="container">
    <br>
    <div class="menu">
        <a class="menu" href="{{ route('login.guest') }}"><span>ゲストログイン</span></a>
        <a class="menu" href="{{ url('/faq') }}"><span>FAQ</span></a>
        <a class="menu" href="{{ url('/contact') }}"><span>お問い合わせ</span></a>
        <a class="menu" href="http://54.249.81.67" target="_blank"><span>NIPPO</span></a>
        <a class="menu" href="http://y2-world.com" target="_blank"><span>YUKI OFFICIAL</span></a>
    </div>
    <div style="text-align:center;">
    今までのあなたの旅の歴史を記録し、<br>
    <span>さらにこれからのあなたの旅を</span><span>より楽しいものにするツールです。</span><br>
    旅行記を作ったり、<br>
    旅行先でのトラブルをシェアしたり、<br>
    疑問に思ったことを質問したり... <br>
    楽しみ方は何通りもあります。<br>
    さぁ、一緒に旅に出かけましょう！
    </div>
</div>

@endsection
