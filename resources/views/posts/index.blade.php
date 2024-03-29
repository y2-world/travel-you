@extends('layouts.app')
@section('content')
<div class="page-wrapper">
  <div class="container">
    <h2 class="header-title">OUR TRAVELS　<a href="{{ url('posts/create') }}" class="btn btn-primary" id="my_travels_botton">NEW POST</a></h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="{{url('/search')}}" method="GET">
          <input type="text" class="form-control mb-2" placeholder="キーワード検索" type="search" value="{{request('keyword')}}" name="keyword" required>
        </form>
      </div>
      <div class="col-md-6">
        <select class="form-control mb-2" onChange="location.href=value;">
          <option hidden value="{{ url('countries') }}">国検索</option>
          @foreach ($posts->unique('country_id') as $rec)
          <option value="{{ url('countries', $rec->country_id)}}">{{ optional($rec->country)->name}}</option>
          @endforeach
        </select>
        <a href="{{ url('countries') }}" id="my_travels_botton">国別投稿一覧</a>
      </div>
    </div>
    @if($posts->isEmpty())
    <p>まだ投稿がありません。</p>
    @endif 
  </div>
  <div class="cards">
    @foreach ($posts as $post)
    <div class="travel-card">
      <p class="card-user"><a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a></p>
      <p class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></p>
      <p class="card-date"> {{ $post->date1->format('Y-m-d') }} 〜 {{ $post->date2 }}</p>
      <div class="travel-img">
        <a href="{{ route('posts.show', $post->id) }}"><img src="{{ asset('storage/' . $post->image) }}"></a>
      </div>
      <div class="card-info">
        <p class="card-diary"> {{ $post->diary }}</p>
        <p class="post-date">{{ $post->updated_at }}</p>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection









