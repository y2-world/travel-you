@extends('layouts.app')
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="container">
      <h2>{{ $country->name  }}</h2>
      @if($posts->isEmpty())
      <p>まだ投稿がありません。</p>
      @endif 
      <h4 class="header-title">OUR TRAVELS</h4>
    </div>
    <div class="cards">
      @foreach ($posts as $rec)
      <div class="travel-card">
        <p class="card-user"><a href="{{ route('users.show', $rec->user_id)}}">{{ $rec->user_name }}</a></p>
        <p class="card-title">{{ $rec->title }}</a></p>
        <p class="card-date"> {{ $rec->date1 }} 〜 {{ $rec->date2 }}</p>
        <div class="travel-img">
          <a href="{{ route('posts.show', $rec->id) }}"><img src="{{ asset('storage/' . $rec->image) }}"></a>
        </div>
        <div class="card-info">
          <p class="card-diary"> {{ $rec->diary }}</p>
          <p class="post-date">{{ $rec->updated_at }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection

