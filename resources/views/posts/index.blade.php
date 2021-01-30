@extends('layouts.app')　
@section('content')
<div class="container mt-4">
        <div class="mb-4">
        <h2>OUR TRAVELS</h2>
</div>

  
    <div class="card" style="width: 22rem;">
        @foreach ($posts as $post)
      <a href="{{ route('posts.show', $post->id) }}"><img class="card-img-top" src="{{ asset('storage/' . $post->image) }}" alt="Card image cap"></a>
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text"> {{ $post->date1 }} 〜 {{ $post->date2 }}</p>
          by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a>
        </div>
        @endforeach
    </div>
  
</div>
@endsection




