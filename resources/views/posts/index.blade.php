@extends('layouts.app')　
@section('content')
<div class="page-wrapper">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="header-title">OUR TRAVELS</h2>
        <a href="{{ url('posts/create') }}" class="btn btn-primary" id="my_travels_botton">新規投稿</a>
        <hr>
        <div class="card-header">
          <h4>TRAVEL DIARIES</h4>
        </div>
        @foreach ($posts as $post)
        <div class="card mb-3">
          <div class="row no-gutters">
            <a href="{{ route('posts.show', $post->id) }}"><img class="card-img-bottom" src="{{ asset('storage/' . $post->image) }}" alt="Card image cap"></a>
            <div class="col-md-12">
              <div class="card-body">
                  <h5 class="card-title"> <h5 class="card-title">{{ $post->title }}</h5></a></h5>
                  <p class="card-text"> {{ $post->date1 }} 〜 {{ $post->date2 }}</p>
                  by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a> 
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row no-gutters">
              <div class="col-md-12 my-auto">
                <small class="text-muted">{{ $post->updated_at }}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection








