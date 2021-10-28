@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>編集</h2>
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
                        <label>タイトル</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <input type="text" class="form-control" value="{{ $question->title }}" name="title">
                    </div>
                    <div class="form-group">
                        <label>カテゴリー</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <select class="form-control" select name="category_id">
                            <option value="{{ $question->category }}">{{ $question->category->name }} (選択済み)</option>
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