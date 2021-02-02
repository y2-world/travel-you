@extends('layouts.app')　
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="trouble">TROUBLE×YOU</h2>
        <div class="col-sm">
        <hr>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="card-img" src="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><h5 class="card-title">タイトル</h5></a></h5>
                            <p>国 : </p>
                            <p>カテゴリー : </p>
                            <br>
                            <p>本文</p>
                            by ゲスト
                        </div>
                    </div>
                    <div class="container">
                        <p>投稿日時：</p> 
                        <a href="{{ url('troubles') }}" class="btn btn-secondary">BACK</a>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection