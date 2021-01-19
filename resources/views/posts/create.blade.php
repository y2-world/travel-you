@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="title">
                    <h4>あなたの旅をシェアしましょう</h4>
        </div>
        <hr>
        <form action="{{ route('posts.store') }}" method="POST">
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
            <form action="{{ route('posts.store') }}" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label>タイトル</label>
                    <input type="text" class="form-control" placeholder="旅のタイトル" name="title">
                </div>
                <div class="form-group">
                    <label>期間&nbsp;&nbsp;</label>
                    <input type="date" placeholder="yyyy-mm-dd" name="date1">
                    〜
                    <input type="date" placeholder="yyyy-mm-dd" name="date2">
                    <br>
                    <br>
                    <div class="form-group">
                    <label for="exampleInputFile">カバー写真を選択</label>
                    <br>
                    <input type="file" id="exampleInputFile">
                    </div>
                    <div class="form-group">
                    <label>国</label>
                    <input type="text" class="form-control" placeholder="訪れた国を入力" name="country">
                    <br>
                    <div class="form-group">
                    <label>都市</label>
                    <input type="text" class="form-control" placeholder="訪れた都市を入力" name="city">
                </div>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">投稿</button>
                <hr>
            </form>
        </div>
    </div>
</div>
@endsection