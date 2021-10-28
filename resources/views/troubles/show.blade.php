@extends('layouts.app')　
@section('content')
<div class="page-wrapper">
    <div class="container">
        <h2 class="header-title">TROUBLE×YOU</h2>
        <div class="travel-card-show">
            <div class="row">
                <div class="col-md-6">
                    <div class="post-img">
                        <img class="card-img" src="{{ asset('storage/' . $trouble->image) }}" alt="travel-img">
                        <div class="btn-edit">
                            <a href="{{ route('troubles.edit', $trouble->id) }}" class="btn btn-secondary btn-sm">編集</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-info">
                        <p class="card-user"><a href="{{ route('users.show', $trouble->user_id)}}">{{ $trouble->user_name }}</a></p>
                        <p class="card-title">{{ $trouble->title }}</p>
                        <small>国 : <a href="{{ url('countries', $trouble->country_id)}}">{{optional($trouble->country)->name}}</a></small><br>
                        <small>カテゴリー : <a href="{{ url('categories', $trouble->category_id)}}">{{optional($trouble->category)->name}}</a></small>
                        <p class="card-diary">{{ $trouble->content }}</p>
                        <p class="post-date">投稿日時：{{ $trouble->created_at }}</p> 
                    </div>
                    <hr>
                    <div class="comment-area">
                        <p class="card-diary">コメント</p>
                        <form action="{{ route('trouble_comments.store') }}" method="POST">
                        {{csrf_field()}}
                            <input type="hidden" name="trouble_id" value="{{ $trouble->id }}">
                            <div class="form-group">
                                @foreach ($trouble->trouble_comments as $trouble_comment)
                                    <div class="comment-info">
                                        <div class="comment-user"><a href="{{ route('users.show', $trouble->user_id)}}">{{ $trouble_comment->user->name }}</a>&emsp;&emsp;
                                        {{ $trouble_comment->body }}</div>
                                        <div class="comment-date">{{ $trouble_comment->created_at }}</div>
                                    </div>
                                @endforeach
                                <br>
                                <textarea class="form-control" rows="1" name="body"></textarea>
                            </div>
                            <div class="btn-show">
                                <button type="submit" class="btn btn-primary btn-sm">コメントする</button>
                                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        <form>
                    </div>
                </div>
            </div>
        </div>
        <div class="back">
            <a href="{{ url('/troubles') }}" class="btn btn-secondary btn-sm">BACK</a>
        </div>
    </div>  
</div>
@endsection