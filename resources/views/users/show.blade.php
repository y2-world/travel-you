@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <div class="mb-4">
        <h2>{{ $user_name }}'s TRAVELS</h2>
    </div>

<div class="list-group list-group-flush">
    <div class="card-header">
        <b>MY TRAVELS</b>
    </div>
    @foreach ($post as $post)
    <li class="list-group-item">
        <h6 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h6>
        <p class="card-date">{{ $post->date1 }} 〜 {{ $post->date2 }}</p>
    </div>
    @endforeach
    <div class="container mt-4">
        <div class="card-header">
        <b>MY COUNTRIES</b>
    </div>
        <li class="list-group-item">
        <h6 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->country}}</a></h6>
    </div>
    </div>
</div>
@endsection
