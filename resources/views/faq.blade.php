@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="header-title">FAQ</h2>
                <dl>
                    <div class="faq">
                        <dt>このサイトでは何ができますか？</dt>
                        <dd>あなたが今までしてきた旅の記録ができます。<br><br>
                        各ページで以下のことができます。<br>
                        TRAVEL×YOU<br>
                        ・写真、旅行記の投稿<br>
                        ・コメント投稿<br><br>
                        MY TRAVELS (マイページ)<br>
                        ・今まで訪れた国の一覧、数の表示<br>
                        ・過去の投稿一覧、表示<br><br>
                        TROUBLE×YOU<br>
                        ・旅先でのトラブルの投稿<br>
                        ・コメント投稿<br><br>
                        Q&A<br>
                        ・旅に関する質問の投稿<br>
                        ・回答の投稿<br>
                        </dd>
                    </div>
                    <div class="faq">
                        <dt>このサイトはどんな人に向けて作られたものですか？</dt>
                        <dd>旅行を趣味にしている方やバックパッカー向けのサイトです。もちろん海外旅行初心者の方も大歓迎です。</dd>
                    </div>
                    <div class="faq">
                        <dt>コロナウイルスの影響で現在海外旅行が難しいですが、なぜこのようなサイトを作ることにしたのですか？</dt>
                        <dd>コロナ禍だからこそ今までの旅を振り返ってみて、旅先での様々な経験やトラブルをシェアすることによって、コロナウィルスが終息した時に旅行をもっと楽しいものにするために制作しました。</dd>
                    </div>
                    <div class="faq">
                        <dt>現在コロナ禍ですが、どのような使い方ができますか？</dt>
                        <dd>今は海外に気軽に行けない状況なので、少しでも旅行している気分になれるように投稿を眺めてみるのもいいかもしれません。</dd>
                    </div>
                    <div class="faq">
                        <dt>SNSなどでも旅のシェアはできますか？</dt>
                        <dd>各投稿の詳細ページからTwitterでシェアできます。</dd>
                    </div>
                    <div class="faq">
                        <dt>国内の旅も投稿することができますか？</dt>
                        <dd>このサイトは国外の旅の記録を投稿することを想定して作られていますが、今後のアップデートで国内の旅の記録も投稿することができます。</dd>
                    </div>
                    <div class="faq">
                        <dt>一つの旅行で2ヵ国以上の国に行ったのですが、どのように投稿すればよいでしょうか？</dt>
                        <dd>現在のバージョンでは、一つの旅行につき一ヵ国のみ登録となっているため、国ごとの投稿をお願いいたします。</dd>
                    </div>
                    <div class="faq">
                        <dt>公式リリースはいつになりますか？</dt>
                        <dd>サービス自体は2021年11月から開始予定ですが、リリースは来年以降を予定しております。</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>
@endsection
