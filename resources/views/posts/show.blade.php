@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
    <h2 class="header-title">TRAVEL DIARY</h2>
        <div class="travel-card-show">
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <img class="post-img" src="{{ asset('storage/' . $post->image) }}" alt="travel-img">
                        <div class="btn-edit">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary btn-sm">編集</a>
                        </div>          
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-info">
                        <p class="card-user"><a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a></p>   
                        <p class="card-title">{{ $post->title }}</p> 
                        <p class="card-date">{{ $post->date1->format('Y-m-d') }}&nbsp;〜&nbsp;{{ $post->date2 }}</p>
                        <small>国 : <a href="{{ url('countries', $post->country_id)}}">{{ optional($post->country)->name }}</a></small><br>
                        <small>都市 : {{ $post->city }}</small>
                        <p class="card-diary">{{ $post->diary }}</p>
                        <p class="post-date">投稿日時：{{ $post->created_at }}</p> 
                    </div>
                    <hr>
                    <div class="comment-area">
                        <p class="card-diary">コメント</p>
                        <form action="{{ route('comments.store') }}" method="POST">
                        {{csrf_field()}}
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="form-group">
                                @foreach ($post->comments as $comment)
                                    <div class="comment-info">
                                        <div class="comment-user"><a href="{{ route('users.show', $comment->user_id)}}">{{ optional($comment->user)->name }}</a>&emsp;&emsp;
                                        {{ $comment->body }}</div>
                                        <div class="comment-date">{{ $comment->created_at }}</div>
                                    </div>
                                    <!-- <div class="delete">     
                                        <form action='{{ route('comments.destroy', $post->id) }}' method='post'>
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type='submit' value='削除' class="btn btn-danger btn-sm" onclick='return confirm("削除しますか？");'>
                                        </form>
                                    </div> -->
                                @endforeach
                                <br>
                                <textarea class="form-control" rows="1" name="body"></textarea>
                            </div>
                            <div class="btn-show">
                                <button type="submit" class="btn btn-primary btn-sm">コメントする</button>
                                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="back">
            <a href="{{ url('/posts') }}" class="btn btn-secondary btn-sm">BACK</a>
        </div>
    </div>  
</div> 

@endsection