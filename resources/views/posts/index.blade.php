@extends('layouts.app')　
@section('content')
<div class="container">
    <div class="d-flex flex-column">
        <div class="p-2">
            <div class="card-header">
                <b>OUR TRAVELS</b>
            </div>
            @foreach ($posts as $post)
            <div class="card-body">
                <h6 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h6>
                <p class="card-date">{{ $post->date1 }} 〜 {{ $post->date2 }}</p>
                <div>
                <p class="card-category">by&nbsp;<a href="">{{ $post->user_name }}</p>
                </div>
            </div>
            <div class="card-footer text-muted">
                {{ $post->created_at }}
            </div>
            @endforeach
        </div>
        </div>
    </div>
</div>
@endsection
