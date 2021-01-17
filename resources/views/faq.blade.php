@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('FAQ') }}</div>

                <div class="card-body">
                <b>Q. このサイトでは何ができますか？</b><br>
                A. あなたが今までしてきた旅の記録をすることができます。<br>
                    ・旅行記<br>
                    ・TIPS<br>
                    ・写真の投稿<br>
                    ・YouTubeの動画のリンク投稿<br>
                    などを通してあなたの旅をシェアできます。
                    <br>
                    <br>
                    ・TROUBLE×YOU<br>
                    ではあなたの旅行で起こった問題、その解決法をシェアすることができます。
                    <br>
                    <br>
                    ・Q&A (知恵袋)<br>
                    では旅行する予定の国や都市に関する質問を投稿したり、回答したりすることができます。
                    <br>
                    <br>
                    また、MY TRAVELページ上であなたが訪れた国、都市の一覧の表示ができます。
                    <br>
                    <br>
                    <b>Q. SNSなどでも旅のシェアはできますか？</b><br>
                    A.今後のアップデートでTRAVEL×YOUで投稿した旅の記録をSNSでシェアすることができるようになります。
                    <br>
                    <br>
                    <b>Q. 国内の旅も投稿することができますか？</b><br>
                    A. このサイトは国外の旅の記録を投稿することを想定して作られていますが、もちろん国内の旅の記録も投稿することができます。
                    <br>
                    <br>
                    <b>Q. 一つの旅行で複数の国、都市に訪れた場合はどうすればいいですか？</b><br>
                    A. 今後のアップデートでフォームにて国の追加、都市の追加、旅の記録をグループ化して表示することができるようになります。
                    <br>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
