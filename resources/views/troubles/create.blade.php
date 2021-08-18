@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4>あなたのTROUBLEをシェアしましょう　<a href="{{ url('troubles') }}" class="btn btn-primary" id="my_travels_botton">投稿一覧</a></H4>
                <form action="{{ route('troubles.store') }}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" placeholder="トラブルのタイトル" name="title">
                        </div>  
                        <div class="form-group">
                            <label>国</label>&nbsp;<span class="badge bg-danger">必須</span>
                            <input type="text" class="form-control" placeholder="トラブルが起こった旅先の国を入力" name="country">
                        </div>  
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">カテゴリー</label>&nbsp;<span class="badge bg-danger">必須</span>
                            <select class="form-control" id="exampleFormControlSelect1" select name="category">
                            <option value="宿泊先">宿泊先 (ホテル・Airbnbなど)</option>
                            <option value="レストラン">レストラン</option>
                            <option value="交通機関">交通機関</option>
                            <option value="ショッピング">ショッピング</option>
                            <option value="治安">治安</option>
                            <option>その他</option>
                            </select>
                        </div>   
                        <div class="form-group">
                            <label for="exampleFormControlFile1">写真</label>&nbsp;<span class="badge bg-danger">必須</span>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                        </div>
                        <div class="form-group">
                            <label>本文</label>&nbsp;<span class="badge bg-danger">必須</span>
                            <textarea class="form-control" rows="10" name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" value="upload">投稿</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection