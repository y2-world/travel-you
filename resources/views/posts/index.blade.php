@extends('layouts.app')　
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <h2 class="trouble">OUR TRAVELS</h2>
        <div class="col-sm">
        <a href="{{ url('posts/create') }}" class="btn btn-primary" id="my_travels_botton">新規投稿</a>
        <hr>
    </li>
  </div>
  <div class="card-header">
        <h4>TRAVEL DIARIES</h4>
  </div>
  @foreach ($posts as $post)
  <div class="card mb-3">
    <div class="row no-gutters">
    <a href="{{ route('posts.show', $post->id) }}"><img class="card-img-bottom" src="{{ asset('storage/' . $post->image) }}" alt="Card image cap"></a>
        <div class="col-md-9">
            <div class="card-body">
                <h5 class="card-title"> <h5 class="card-title">{{ $post->title }}</h5></a></h5>
                <p class="card-text"> {{ $post->date1 }} 〜 {{ $post->date2 }}</p>
            </div>
        </div>
        <div class="col-md-3 my-auto">
            <div class="card-body">
            <br>
            by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a> 
            </div>
        </div>
    </div>
        <div class="card-footer">
          <div class="row no-gutters">
            <div class="col-md-11 my-auto">
              <small class="text-muted">{{ $post->updated_at }}</small>
            </div>
            <div class="col-md-1">
              <small class="card-body">
                ❤️
              </small>
            </div>
          </div>
        </div>
  </div>
  @endforeach
</div>     
@endsection