@extends('layouts.app')　
@section('content')
<div class="container mt-4">
        <div class="mb-4">
        <h2>OUR TRAVELS</h2>
</div>

<div class="container mt-4">
    <div class="row">   
        <div class="col-sm-4">
            @foreach ($posts as $post)
            <li class="list-group-item">
            <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            <br>
            {{ $post->date1 }} 〜 {{ $post->date2 }}
            <br>
            by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a>
            <br>
            <br>
            <a href="{{ route('posts.show', $post->id) }}"><img src="{{ asset('/' . $post->image) }}" width="100%"></a>
            </li>
            @endforeach
        </div>
    </div>
</div>
@endsection


