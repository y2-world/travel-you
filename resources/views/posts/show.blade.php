@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm">
            <h2 class="header-title">TRAVEL DIARY</h2>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-5 my-auto">
                            <img class="card-img-bottom" src="{{ asset('storage/' . $post->image) }}" alt="travel-img"></a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <div class="card-title"><h5>{{ $post->title }}</h5> 
                                by <a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a></div>
                                <div class="card-date">{{ $post->date1 }}&nbsp;〜&nbsp;{{ $post->date2 }}</div>
                                <div class="card-info">
                                    <small>国 : {{ $post->country }}</small><br>
                                    <small>都市 : {{ $post->city }}</small>
                                </div>
                                <hr>
                                <p>{{ $post->diary }}</p>
                                <hr>
                                <div class="post-date">投稿日時：{{ $post->created_at }}</div> 
                                <form action="{{ route('comments.store') }}" method="POST">
                                {{csrf_field()}}
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <div class="form-group">
                                        <label>コメント</label>
                                        <textarea class="form-control" rows="3" name="body"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">コメントする</button>
                                    <hr>
                                </form>
                                @foreach ($post->comments as $comment)
                                    <hr>
                                    <small>投稿者：<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user->name }}</small></a>
                                    <small>{{ $post->created_at }}</small><br>
                                    {{ $post->body }}</p>
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
    </div>  
</div> 

@endsection