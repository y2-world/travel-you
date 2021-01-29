@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-8">
         <div class="card-body">
            <h4>{{ $post->title }}</h4>
            <p class="card-date">{{ $post->date1 }}&nbsp;〜&nbsp;{{ $post->date2 }}</p>
            <p class="card-category">by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a>
            <br>
            <br>
            <a href="" class="btn btn-primary">旅行記</a>
            <a href="" class="btn btn-primary">TIPS</a>
        </div>
        <li class="list-group-item">
            <img src="{{ asset('/' . $post->image) }}" width="100%">
            <br>
            <br>
            <p class="card-country">国 : {{ $post->country }}</p>
            <p class="card-city">都市 : {{ $post->city }}</p>
            <p>投稿日時：{{ $post->created_at }}</p> 
            <br>
            <a href="{{ url('/posts') }}" class="btn btn-secondary">BACK</a>
        </li>
    </div>
</div>
            
@endsection