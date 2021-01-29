@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <div class="mb-4">
        <h2>{{ $user_name }}'s TRAVELS</h2>
    </div>

<div class="row">
    <div class="col-sm-6">
        <div class="card-header">
            <h4>MY TRAVELS</h4>
         </div>
        @foreach ($post as $post)
        <li class="list-group-item">
            <h6 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h6>
            <p class="card-date">{{ $post->date1 }} 〜 {{ $post->date2 }}</p>
            <a href="{{ route('posts.show', $post->id) }}"><img src="{{ asset('/' . $post->image) }}" width="100%"></a>
            <br>
            <br>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">編集</a>
        </li>
        @endforeach
    </div>
    <div class="col-sm-6">
        <div class="card-header">
        <h4>MY COUNTRIES</h4>
        </div>
        <li class="list-group-item">
        <h6 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->country}}</a></h6>
    </div>
</div>
@endsection
