@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4>旅について質問してみましょう　<a href="{{ url('questions') }}" class="btn btn-primary" id="my_travels_botton">投稿一覧</a></h4>
                <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if ($errors->any()) 
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label>タイトル</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <input type="text" class="form-control" placeholder="質問のタイトル" name="title">
                    </div>    
                    <div class="form-group">
                        <label>カテゴリー</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <select class="form-control" select name="category_id">
                            <option hidden>カテゴリーを選択</option>
                            <option value="7">基本情報</option>
                            <option value="8">チップ・マナー</option>
                            <option value="1">宿泊先 (ホテル・Airbnbなど)</option>
                            <option value="9">観光地</option>
                            <option value="2">レストラン</option>
                            <option value="3">交通機関</option>
                            <option value="4">ショッピング</option>
                            <option value="10">お土産</option>
                            <option value="5">治安</option>
                            <option value="6">その他</option>
                        </select>
                    </div>   
                    <div class="form-group">
                        <label>本文</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <textarea class="form-control" rows="10" name="body"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" value="upload">投稿</button>
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection