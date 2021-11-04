@extends('layouts.app')
@section('content')
<div class="page-wrapper">
  <div class="container">
    <h3>{{ $country->name  }}</h3>
    <hr>
    <h4 class="header-title">OUR TRAVELS</h4>
    @if($posts->isEmpty())
    <p>まだ投稿がありません。</p>
    @endif 
    <div class="user-cards">
      @foreach ($posts as $rec)
      <div class="travel-card">
        <p class="card-user"><a href="{{ route('users.show', $rec->user_id)}}">{{ $rec->user_name }}</a></p>
        <p class="card-title">{{ $rec->title }}</a></p>
        <p class="card-date"> {{ $rec->date1->format('Y-m-d') }} 〜 {{ $rec->date2 }}</p>
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
    <hr>
    <h4 class="header-title">TROUBLE×YOU</h4>
    @if($troubles->isEmpty())
    <p>まだ投稿がありません。</p>
    @endif 
    <div class="user-cards">
      @foreach ($troubles as $rec)
      <div class="travel-card">
        <p class="card-user"><a href="{{ route('users.show', $rec->user_id)}}">{{ $rec->user_name }}</a></p>
        <p class="card-title-trouble">{{ $rec->title }}</a></p>
        <div class="travel-img">
            <a href="{{ route('troubles.show', $rec->id) }}"><img src="{{ asset('storage/' . $rec->image) }}"></a>
        </div>
        <p class="card-diary">{{Str::limit($rec->content, 90, '…' )}}</p>
        <div class="trouble-row">
            <p class="post-date">{{ $rec->updated_at }}</p>
        </div>
      </div>
      @endforeach
    </div>
    <div class="back">
      <a href="javascript:void(0);" onclick="history.go(-1);" class="btn btn-secondary btn-sm">BACK</a>
    </div>
  </div>
</div>
@endsection

