@extends('layouts.app')　
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="header-title">TROUBLE×YOU</h2>
            <div class="col-sm">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-5 my-auto">
                            <img class="card-img" src="{{ asset('storage/' . $trouble->image) }}">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title"><h5 class="card-title">{{ $trouble->title }}</h5></a></h5>
                                <div class="card-date">by&nbsp;<a href="{{ route('users.show', $trouble->user_id)}}">{{ $trouble->user_name }}</a>
                                <div class="card-info">
                                    <small>国 : {{ $trouble->country }}</small><br>
                                    <small>カテゴリー : {{ $trouble->category }}</small>
                                </div>
                                <hr>
                                <p>{{ $trouble->content }}</p>
                                <hr>
                                <div class="post-date">投稿日時：{{ $trouble->created_at }}</div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="{{ route('comments.store') }}" method="POST">
                                        {{csrf_field()}}
                                            <input type="hidden" name="post_id" value="#">
                                            <div class="form-group">
                                                <label>コメント</label>
                                                <textarea class="form-control" rows="3" name="body"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">コメントする</button>
                                        </form>
                                    </div>
                                    <hr>
                                </div>
                                <hr>
                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            <br>
                            <br>
                            <a href="{{ route('troubles.edit', $trouble->id) }}" class="btn btn-secondary btn-sm">編集</a>
                            <a href="{{ url('/troubles') }}" class="btn btn-secondary btn-sm">BACK</a>
                            <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection