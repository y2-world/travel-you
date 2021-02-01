@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="title">
                    <h4>あなたの旅をシェアしましょう</h4>
        </div>
        <a href="{{ route('users.show', Auth::user()->id )}}" class="btn btn-primary" id="my_travels_botton">MY TRAVELS</a>
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
                    <input type="text" class="form-control" placeholder="旅のタイトル" name="title">
                </div>  
                <div class="form-group">
                    <label>期間&nbsp;&nbsp;</label>
                    <input type="date" placeholder="yyyy-mm-dd" name="date1">
                〜
                <input type="date" placeholder="yyyy-mm-dd" name="date2">
                </div> 
                <div class="form-group">
                    <label for="exampleFormControlFile1">カバー写真</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                </div>
                <div class="form-group">
                    <label>国</label>
                    <input type="text" class="form-control" placeholder="訪れた国を入力" name="country">
                </div>     
                <div class="form-group">
                    <label>都市</label>
                    <input type="text" class="form-control" placeholder="訪れた都市を入力" name="city">
                </div>
                <div class="form-group">
                    <label>TRAVEL DIARY</label>
                    <textarea class="form-control" rows="25" name="diary"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">写真①</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">写真②</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">写真③</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image3">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">写真④</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image4">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" value="upload">投稿</button>
                <hr>
            </form>
        </div>
    </div>
</div>
@endsection