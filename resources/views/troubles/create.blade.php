@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h2 class="trouble">TROUBLE×YOU</h2>
        <hr>
        <div class="title">
                    <h5>あなたのTROUBLEをシェアしましょう</h5>
        </div>
        <a href="{{ url('troubles') }}" class="btn btn-primary" id="my_travels_botton">投稿一覧</a>
        <hr>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label>タイトル</label>
                    <input type="text" class="form-control" placeholder="トラブルのタイトル" name="title">
                </div>  
                <div class="form-group">
                    <label>国</label>
                    <input type="text" class="form-control" placeholder="トラブルが起こった旅先の国を入力" name="country">
                </div>  
                <div class="form-group">
                    <label for="exampleFormControlSelect1">カテゴリー</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>宿泊先 (ホテル・Airbnbなど)</option>
                    <option>レストラン</option>
                    <option>交通機関</option>
                    <option>ショッピング</option>
                    <option>治安</option>
                    <option>その他</option>
                    </select>
                </div>   
                <div class="form-group">
                    <label for="exampleFormControlFile1">写真</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                </div>
                <div class="form-group">
                    <label>本文</label>
                    <textarea class="form-control" rows="10" name="content"></textarea>
                </div>
                
                <br>
                <button type="submit" class="btn btn-primary" value="upload">投稿</button>
                <hr>
            </form>
        </div>
    </div>
</div>
@endsection