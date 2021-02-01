@extends('layouts.app')　
@section('content')
<div class="container-fluid">
  <div class="mb-4">
  <h2>OUR TRAVELS</h2>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="card-header">
        <h4>TRAVEL DIARIES</h4>
    </div>
    @foreach ($posts as $post)
        <a href="{{ route('posts.show', $post->id) }}"><img class="card-img-bottom" src="{{ asset('storage/' . $post->image) }}" alt="Card image cap"></a>
      <li class="list-group-item">  
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text"> {{ $post->date1 }} 〜 {{ $post->date2 }}</p>
            by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a>
          </div>
      </li>
        <div class="card-footer">
          <small class="text-muted">{{ $post->updated_at }}</small>
        </div>
        <br>
        @endforeach
  </div>

  <div class="col-sm-4">
    <div class="card-header">
        <h4>TROUBLE×YOU</h4>
    </div>
      <li class="list-group-item">  
      <a href="#"><img class="card-img-bottom" src="#" alt="Card image cap"></a>
        <div class="card-body">
          <h5 class="card-title">スペインのAirbnbでは鍵に要注意！</h5>
          <p class="card-text"></p>
          by Yuki
        </div>
      </li>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
        <br>
    </li>
  </div>

  <div class="col-sm-4">
    <div class="card-header">
        <h4>Q & A</h4>
    </div>
    <li class="list-group-item">  
        <div class="card-body">
          <h5 class="card-title">2月にスペインに行く予定なのですが、寒いですか?</h5>
          by Mami
          <hr>
          <h5 class="card-title">Yukiさんの回答</h5>
          <p class="card-text">2月にスペインのバルセロナにに行ったことがありますが、暖かかったです。20℃くらいありました。防寒着は特に必要ではなく、上着があれば大丈夫だと思います。</h5>
        </div>  
    </li>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
  </div>
</div>
@endsection




