@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h4>あなたの旅をシェアしましょう</h4>
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
                        <label>タイトル</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <input type="text" class="form-control" placeholder="旅のタイトル" name="title">
                    </div>  
                    <div class="form-group">
                        <label>期間&nbsp;<span class="badge bg-danger">必須</span></label><br>
                        <input type="date" placeholder="yyyy-mm-dd" name="date1">
                    〜
                    <input type="date" placeholder="yyyy-mm-dd" name="date2">
                    </div> 
                    <div class="form-group">
                        <label for="exampleFormControlFile1">カバー写真</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                    <div class="form-group">
                        <label>国</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <input type="text" class="form-control" placeholder="訪れた国を入力" name="country">
                    </div>     
                    <div class="form-group">
                        <label>都市</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <input type="text" class="form-control" placeholder="訪れた都市を入力" name="city">
                    </div>
                    <div class="form-group">
                        <label>TRAVEL DIARY</label>
                        <textarea class="form-control" rows="10" name="diary"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">写真1</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image1" multiple>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">写真2</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image2" multiple>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">写真3</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image3" multiple>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">写真4</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image4" multiple>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" value="upload">投稿</button>
                    <hr>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection