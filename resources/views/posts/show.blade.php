@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="trouble">TRAVEL DIARY</h2>
        <div class="col-sm">
        <hr>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/' . $post->image) }}" width="100%">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/' . $post->image1) }}" width="100%">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/' . $post->image2) }}" width="100%">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/' . $post->image3) }}" width="100%">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/' . $post->image4) }}" width="100%">
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><h5 class="card-title">{{ $post->title }}</h5></a></h5>
                            <p class="card-date">{{ $post->date1 }}&nbsp;〜&nbsp;{{ $post->date2 }}</p>
                            <p class="card-category">by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a>
                            <p>国 : {{ $post->country }}</p>
                            <p>都市 : {{ $post->city }}</p>
                            <hr>
                            <p>{{ $post->diary }}</p>
                            <hr>
                    <p>投稿日時：{{ $post->created_at }}</p> 
                    <hr>
                    <div class="row">
                    <div class="col-md-8">
                        <form action="{{ route('comments.store') }}" method="POST">
                        {{csrf_field()}}
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="form-group">
                                <label>コメント</label>
                                <textarea class="form-control" placeholder="内容" rows="5" name="body"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">コメントする</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        @foreach ((array)$post->comments as $comment)
                        <div class="card mt-3">
                            <h5 class="card-header">投稿者：{{ $comment->user->name }}</h5>
                            <div class="card-body">
                                <h5 class="card-title">投稿日時：{{ $comment->created_at }}</h5>
                                <p class="card-text">内容：{{ $comment->body }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
                <hr>
                        <a href="{{ url('/posts') }}" class="btn btn-secondary btn-sm">BACK</a>
                        <br>
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