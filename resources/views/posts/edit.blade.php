@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <input type="date" placeholder="yyyy-mm-dd" name="date1" value=""> </textarea>
                    〜
                    <input type="date" placeholder="yyyy-mm-dd" name="date2" value=""> </textarea>
                </div>
                <div class="form-group">
                    <label>国</label>
                    <input type="text" class="form-control" value="{{ $post->country }}" name="country">
                </div>
                <div class="form-group">
                    <label>都市</label>
                    <input type="text" class="form-control" value="{{ $post->city }}" name="city">
                </div>
                <button type="submit" class="btn btn-primary">更新する</button>
            </form>
        </div>
    </div>
</div>
@endsection