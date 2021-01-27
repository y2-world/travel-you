@extends('layouts.app')　
@section('content')
<div class="container">
<div class="card-header">
        <b>OUR TRAVELS</b>
</div>
            @foreach ($posts as $post)
            <div class="list-group-item">
                <h6 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h6>
                <p class="card-date">{{ $post->date1 }} 〜 {{ $post->date2 }}</p>
                <div>
                <p class="card-category">by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</p>
                </div>
            </div>
            @endforeach
        </div>
</div>
@endsection
