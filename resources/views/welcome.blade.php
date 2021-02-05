@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="https://image.jimcdn.com/app/cms/image/transf/dimension=1820x10000:format=jpg/path/s5a88878547331ed3/image/i2c57e1f196495190/version/1612517728/image.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="https://image.jimcdn.com/app/cms/image/transf/dimension=1820x10000:format=jpg/path/s5a88878547331ed3/image/i4407b9d73cf86d02/version/1612517741/image.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="https://image.jimcdn.com/app/cms/image/transf/dimension=1820x10000:format=jpg/path/s5a88878547331ed3/image/i1de98c24c0075c47/version/1612517754/image.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="https://image.jimcdn.com/app/cms/image/transf/dimension=1820x10000:format=jpg/path/s5a88878547331ed3/image/ib7ed541ae1c05fa3/version/1612517764/image.jpg" alt="Forth slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <hr>
    <div class="menu">
        <a class="menu" href="{{ route('login.guest') }}"><span>ゲストログイン</span></a>
        <a class="menu" href="{{ url('/faq') }}"><span>FAQ</span></a>
        <a class="menu" href="{{ url('/contact') }}"><span>お問い合わせ</span></a>
        <a class="menu" href="http://54.249.81.67"><span>NIPPO</span></a>
        <a class="menu" href="https://y2world.github.io/home/" target="_blank"><span>YUKI OFFICIAL</span></a>
    </div>
    <hr>
    <div style="text-align:center;">
    今までのあなたの旅の歴史を記録し、<br>
    <span>さらにこれからのあなたの旅を</span><span>より楽しいものにするツールです。</span><br>
    旅行記を作ったり、<br>
    旅行先でのトラブルをシェアしたり、<br>
    疑問に思ったことを質問したり... <br>
    楽しみ方は何通りもあります。<br>
    さぁ、一緒に旅に出かけましょう！
    </div>
    <hr>
</div>

@endsection
