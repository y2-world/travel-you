@extends('layouts.app')
@section('content')
<div class="page-wrapper">
  <div class="container">
    <h3>カテゴリー : {{ $category->name  }}</h3>
    <hr>
    <h4 class="header-title">TROUBLE × YOU</h4>
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
    <hr>
    <h4 class="header-title">Q & A</h4>
    @if($questions->isEmpty())
    <p>まだ投稿がありません。</p>
    @endif 
    <div class="user-cards">
      @foreach ($questions as $rec)
      <div class="travel-card">
        <p class="card-user"><a href="{{ route('users.show', $rec->user_id)}}">{{ $rec->user_name }}</a></p>
        <p class="card-title"><a href="{{ route('questions.show', $rec->id) }}">{{ $rec->title }}</a></p>
        <p class="card-diary">{{ $rec->body }}</p>
        <div class="card-info-question">    
          <p class="post-date-question">{{ $rec->updated_at }}</p>  
          <div class="answer-btn">
          </div>
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

