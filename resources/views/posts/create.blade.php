@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="title">
                    <h3>あなたの旅をシェアしましょう</h3>
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
                    <label>国&nbsp;&nbsp;
                    <input type="text" name="country">
                    <br>
                    <label>都市&nbsp;&nbsp;
                    <input type="text" name="city">
                </div>
                <button type="submit" class="btn btn-primary">投稿</button>
                <hr>
            </form>
        </div>
    </div>
</div>
@endsection