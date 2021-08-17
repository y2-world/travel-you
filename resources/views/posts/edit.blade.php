@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h2 class="trouble">TRAVEL DIARY</h2>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('posts.update', $post->id) }}" method="POST">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                    <div class="form-group">
                        <label>タイトル</label>
                        <input type="text" class="form-control" value="{{ $post->title }}" name="title">
                    </div>
                    <div class="form-group">
                        <label>期間&emsp; </label>
                        <input type="date" placeholder="yyyy-mm-dd" name="date1" value="{{ $post->date1 }}"> </textarea>
                        〜
                        <input type="date" placeholder="yyyy-mm-dd" name="date2" value="{{ $post->date2 }}"> </textarea>
                    </div>
                    <div class="form-group">
                        <label>国</label>
                        <input type="text" class="form-control" value="{{ $post->country }}" name="country">
                    </div>
                    <div class="form-group">
                        <label>都市</label>
                        <input type="text" class="form-control" value="{{ $post->city }}" name="city">
                    </div>
                    <div class="form-group">
                        <label>TRAVEL DIARY</label>
                        <textarea class="form-control" rows="10" name="diary">{{ $post->diary }}</textarea>
                    </div>
                    <div class="update">
                    <button type="submit" class="btn btn-primary">更新する</button>
                    </div>
                </form>    
                    <br> 
                <div class="delete">     
                <form action='{{ route('posts.destroy', $post->id) }}' method='post'>
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