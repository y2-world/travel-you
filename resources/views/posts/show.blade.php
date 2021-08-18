@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="header-title">TRAVEL DIARY</h2>
                <div class="card-header">
                    <a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a> 
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><h5 class="card-title">{{ $post->title }}</h5>
                        <div class="card-date">{{ $post->date1 }}&nbsp;〜&nbsp;{{ $post->date2 }}</div>
                        <img class="card-img-bottom" src="{{ asset('storage/' . $post->image) }}" alt="travel-img"></a><br>
                        <div class="card-sub">
                            <sm>国 : {{ $post->country }}</sm>&emsp;
                            <sm>都市 : {{ $post->city }}</sm><br>
                        </div>
                        <small>投稿日時：{{ $post->created_at }}</small> 
                        <hr>
                        <p>{{ $post->diary }}</p>
                        <hr>
                        <form action="{{ route('comments.store') }}" method="POST">
                        {{csrf_field()}}
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="form-group">
                                <label>コメント</label>
                                <textarea class="form-control" rows="3" name="body"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">コメントする</button>
                        </form>
                            @foreach ((array)$post->comments as $comment)
                            <div class="card mt-3">
                                <h5 class="card-header">投稿者：{{ $comment->user->name }}</h5>
                                <div class="card-body">
                                    <h5 class="card-title">投稿日時：{{ $comment->created_at }}</h5>
                                    <p class="card-text">内容：{{ $comment->body }}</p>
                                </div>
                            </div>
                            @endforeach
                        <hr>
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <br>
                        <br>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary btn-sm">編集</a>
                        <a href="{{ url('/posts') }}" class="btn btn-secondary btn-sm">BACK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div> 

@endsection