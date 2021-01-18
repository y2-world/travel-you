@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h5>{{ $post->title }}</h5>
                <p class="card-date">{{ $post->date1 }}&nbsp;〜&nbsp;{{ $post->date2 }}</p>
                <p class="card-category">by&nbsp;<a href="">{{ $post->user_name }}</a>
            </div>
            <div class="card-body">
                <p class="card-country">国 : {{ $post->country }}</p>
                <p class="card-city">都市 : {{ $post->city }}</p>
                <p>投稿日時：{{ $post->created_at }}</p> 
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">編集</a>
                <br>
                <form action='{{ route('posts.destroy', $post->id) }}' method='post'>
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input type='submit' value='削除' class="btn btn-danger" onclick='return confirm("削除しますか？");'>
        
    </form>
</div>
            </div>
    </form>
</div>
        </div>
    </div>
</div>
@endsection