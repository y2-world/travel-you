@extends('layouts.app')

@section('content')
<div class="element js-fadein">
    <div class="slider-wrapper">
        <img class="pc" src="{{ asset('images/pc_slider.jpg') }}">
        <img class="sp" src="{{ asset('images/sp_slider.jpg') }}">
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
    <div class="element js-fadein">
        <div class="top-header">WHAT'S TRAVEL×YOU?</div>   
        <div class="click-img">
            <img src="{{ asset('images/click.png') }}" alt="click">  
        </div>
        <div class="sp">
            <p class="scroll">
                TAP THE MAP
            </div>
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
            <span>今までのあなたの旅の歴史を記録し、</span><br>
            <span>さらにこれからのあなたの旅を</span><span>より楽しいものにするツールです。</span><br>
            <span>旅行記を作ったり、</span><span>旅行先でのトラブルをシェアしたり、</span><br>
            <span>疑問に思ったことを質問したり... </span><br>
            <span>楽しみ方は何通りもあります。</span><br>
            <span>さぁ、一緒に旅に出かけましょう！</span><br>
            </p>
        </section>
        <p class="scroll">
            SCROLL<br>
            ⌵
        </div>
    </div>
</div>
<div class="demo-wrapper">
    <div class="element js-fadein">
        <div class="demo-header">TRAVEL×YOU</div>  
        <div class="demo-paragraph">旅の記録ができる</div>
        <p>
            <span>今まで何ヵ国行ったかな...？ そう思うことはないでしょうか？</span><br>
            <span>TRAVEL×YOUでは、今までの旅の記録を</span>
            <span>投稿することでそれが一目で分かります。</span><br>
            <span>また、あなたのかけがえのない旅の記録をシェアすることができます。</span>
        </p>
    </div>
</div>
<ul class="top-cards">
    @foreach ($posts as $post)
    <li class="travel-card">
        <p class="card-user"><a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a></p>
        <p class="card-title">{{ $post->title }}</a></p>
        <p class="card-date"> {{ $post->date1 }} 〜 {{ $post->date2 }}</p>
        <div class="travel-img">
          <a href="{{ route('posts.show', $post->id) }}"><img src="{{ asset('storage/' . $post->image) }}"></a>
        </div>
        <div class="card-info">
            <p class="card-diary"> {{ $post->diary }}</p>
            <p class="post-date">{{ $post->updated_at }}</p>
        </div>
    </li>
    @endforeach
</ul>
<div class="more">
    <a href="{{ url('posts') }}" id="my_travels_botton">MORE ></a>
</div>
<div class="demo-wrapper">
    <div class="element js-fadein">
        <div class="demo-header">TROUBLE×YOU</div>  
        <div class="demo-paragraph">旅先でのトラブルをシェアできる</div>
        <p>
            <span>あなたは旅先でトラブルに巻き込まれたことはありますか？</span><br>
            <span>TROUBLE×YOUでは、事前に知っておくべきことや</span>
            <span>実際に旅先で起こったトラブルをシェアできます。</span><br>
            <span>トラブルを未然に防ぎ、これからの旅をより良いものにしましょう！</span>
        </p>
    </div>
</div>
<ul class="top-cards"> 
    @foreach ($troubles as $trouble)
    <li class="travel-card">
        <p class="card-user"><a href="{{ route('users.show', $trouble->user_id)}}">{{ $trouble->user_name }}</a></p>
        <p class="card-title-trouble">{{ $trouble->title }}</a></p>
        <div class="travel-img">
            <a href="{{ route('troubles.show', $trouble->id) }}"><img src="{{ asset('storage/' . $trouble->image) }}"></a>
        </div>
        <p class="card-diary">{{Str::limit($trouble->content, 90, '…' )}}</p>
        <div class="trouble-row">
            <p class="post-date">{{ $trouble->updated_at }}</p>
            <div class="trouble-more"><a class="btn btn-primary btn-sm" href="{{ route('troubles.show', $trouble->id) }}">MORE</a></div>
        </div>
    </li>
    @endforeach
</ul>
<div class="more">
    <a href="{{ url('troubles') }}" id="my_travels_botton">MORE ></a>
</div>
<div class="demo-wrapper">
    <div class="element js-fadein">
        <div class="demo-header">Q&A</div>  
        <div class="demo-paragraph">旅についての質問ができる</div>
        <p>旅について不安なことがあったら何でも質問してしまいましょう！<br>
            旅のベテランが答えてくれます。
        </p>
    </div>
</div>
<ul class="top-cards"> 
    @foreach ($questions as $question)
    <li class="travel-card">
      <p class="card-user"><a href="{{ route('users.show', $question->user_id)}}">{{ $question->user_name }}</a></p>
      <p class="card-title">{{ $question->title }}</a></p>
      <p class="card-diary">{{ $question->body }}</p>
      <div class="card-info-question">    
        <p class="post-date-question">{{ $question->updated_at }}</p>  
        <div class="answer-btn">
          <a class="btn btn-primary btn-sm" href="{{ route('questions.show', $question->id) }}">回答する</a>    
        </div>
      </div>
    </li>
    @endforeach
</ul> 
<div class="more">
    <a href="{{ url('questions') }}" id="my_travels_botton">MORE ></a>
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
