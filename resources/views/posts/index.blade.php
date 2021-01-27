@extends('layouts.app')　
@section('content')
<div class="container mt-4">
    <div class="row">   
        <div class="col-sm">
        <div class="card-header">
            <h4>OUR TRAVELS</h4>
        </div>
        <div class="col-sm-4">
            @foreach ($posts as $post)
            <li class="list-group-item">
            <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            <br>
            {{ $post->date1 }} 〜 {{ $post->date2 }}
            <br>
            by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</td>
            <br>
            <img src="{{ asset('storage/app/' . $post->image) }}" width="50%">
            </li>
            @endforeach
        </div>
    </div>
</div>
@endsection


