@extends('layouts.app')
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
      <div class="container">
        <h2 class="header-title">Q & A　<a href="{{ url('questions/create') }}" class="btn btn-outline-primary" id="my_travels_botton">NEW POST</a></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="{{url('/search')}}" method="GET">
            <input type="text" class="form-control mb-2" placeholder="キーワード検索" type="search" value="{{request('keyword')}}" name="keyword" required>
          </form>
        </div>
        <div class="col-md-6">
          <select class="form-control mb-2" name="category_id" onChange="location.href=value;">
              <option hidden value="none">カテゴリー検索</option>
              @foreach ($questions->unique('category_id') as $rec)
                <option value="{{ url('categories', $rec->category_id)}}">{{ optional($rec->category)->name}}</option>
              @endforeach
          </select>
          <a href="{{ url('categories') }}" id="my_travels_botton">カテゴリー別投稿一覧</a>
      </div>
      @if($questions->isEmpty())
        <p>まだ投稿がありません。</p>
      @endif 
    </div>
    <div class="cards">
      @foreach ($questions as $question)
      <div class="travel-card">
        <p class="card-user"><a href="{{ route('users.show', $question->user_id)}}">{{ $question->user_name }}</a></p>
        <p class="card-title">{{ $question->title }}</a></p>
        <p class="card-diary">{{ $question->body }}</p>
        <div class="card-info-question">    
          <p class="post-date-question">{{ $question->updated_at }}</p>  
          <div class="answer-btn">
            <a class="btn btn-primary btn-sm" href="{{ route('questions.show', $question->id) }}">回答する</a>    
          </div>
        </div>
      </div>
      @endforeach
    </div> 
  </div>  
</div>   


@endsection



