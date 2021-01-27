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
            <img src="{{ asset('storage/app/' . $post->image) }}" width="80%">
            </li>
            @endforeach
        </div>
    </div>
</div>
@endsection


