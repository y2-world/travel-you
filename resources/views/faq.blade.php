@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('FAQ') }}</div>

                    <div class="card-body">
                    <b>Q. このサイトでは何ができますか？</b><br>
                    A. あなたが今までしてきた旅の記録ができます。<br>
                        <br>
                        ・TRAVEL DIARIES<br>
                        旅行記などを通してあなたの旅をシェアできます。
                        旅先で撮った写真も投稿可能です。
                        <br>
                        <br>
                        ・TROUBLE×YOU<br>
                        あなたの旅行で起こった問題、その解決方法をシェアすることができます。
                        <br>
                        <br>
                        ・Q&A (知恵袋)<br>
                        旅行する予定の国や都市に関する質問を投稿したり、回答したりすることができます。
                        <br>
                        <br>
                        また、MY TRAVELページ上であなたが訪れた国、都市の一覧の表示ができます。
                        <br>
                        <br>
                        <b>Q. SNSなどでも旅のシェアはできますか？</b><br>
                        A.各投稿の詳細ページからTwitterでシェアできます。
                        <br>
                        <br>
                        <b>Q. 国内の旅も投稿することができますか？</b><br>
                        A. このサイトは国外の旅の記録を投稿することを想定して作られていますが、今後のアップデートで国内の旅の記録も投稿することができます。
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
