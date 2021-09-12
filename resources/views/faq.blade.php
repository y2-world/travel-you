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
                        ・コメント投稿<br>
                        MY TRAVELS (マイページ)<br>
                        ・今まで訪れた国の一覧、数の表示<br>
                        ・過去の投稿一覧、表示<br>
                        TROUBLE×YOU<br>
                        ・旅先でのトラブルの投稿<br>
                        ・コメント投稿<br>
                        Q&A<br>
                        ・旅に関する質問の投稿<br>
                        ・回答の投稿<br>
                    </dd>
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
                </dl>
            </div>
        </div>
    </div>
</div>
@endsection
