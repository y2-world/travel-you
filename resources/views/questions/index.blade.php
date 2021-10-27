@extends('layouts.app')
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
      <div class="container">
        <h2 class="header-title">Q & A　<a href="{{ url('questions/create') }}" class="btn btn-outline-primary" id="my_travels_botton">NEW POST</a></h2>
        @if($questions->isEmpty())
        <p>まだ投稿がありません。</p>
        @endif 
      </div>
    </div>
    <div class="container">
      <form>
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="form-control mb-2" placeholder="キーワード検索">
          </div>
          <div class="col-md-6">
            <select class="form-control mb-2" name="category">
                <option value="none">カテゴリー検索</option>
                <option value="宿泊先">宿泊先 (ホテル・Airbnbなど)</option>
                <option value="レストラン">レストラン</option>
                <option value="交通機関">交通機関</option>
                <option value="ショッピング">ショッピング</option>
                <option value="治安">治安</option>
                <option value="その他">その他</option>
            </select>
        </div>
        </div>
      </form>
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



