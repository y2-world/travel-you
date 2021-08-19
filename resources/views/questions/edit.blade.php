@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="header-title">
                    <h2>編集</h2>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('questions.update', $question->id) }}" method="POST">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                    <div class="form-group">
                        <label>タイトル</label>
                        <input type="text" class="form-control" value="{{ $question->title }}" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">カテゴリー</label>
                        <select class="form-control" id="exampleFormControlSelect1" select name="category">
                        <option value="基本情報">基本情報</option>
                        <option value="チップ・マナー">チップ・マナー</option>
                        <option value="宿泊先">宿泊先 (ホテル・Airbnbなど)</option>
                        <option value="観光地">観光地</option>
                        <option value="レストラン">レストラン</option>
                        <option value="交通機関">交通機関</option>
                        <option value="ショッピング">ショッピング</option>
                        <option value="お土産">お土産</option>
                        <option value="治安">治安</option>
                        <option value="その他">その他</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>本文</label>
                        <textarea class="form-control" rows="10" name="body">{{$question->body}}</textarea>
                    </div>
                    <div class="update">
                    <button type="submit" class="btn btn-primary">更新する</button>
                    </div>
                </form>    
                    <br> 
                <div class="delete">     
                <form action='{{ route('questions.destroy', $question->id) }}' method='post'>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type='submit' value='削除' class="btn btn-danger" onclick='return confirm("削除しますか？");'>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection