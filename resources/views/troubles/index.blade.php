@extends('layouts.app')　
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h2 class="trouble">TROUBLE×YOU</h2>
        <div class="col-sm">
        <a href="{{ url('troubles/create') }}" class="btn btn-primary" id="my_travels_botton">新規投稿</a>
        <hr>
    </li>
  </div>

  @foreach ($troubles as $trouble)
  <div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4 my-auto">
            <img class="card-img" src="{{ asset('storage/' . $trouble->image) }}">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"> <h5 class="card-title">{{ $trouble->title }}</h5></a></h5>
                <p>{{Str::limit($trouble->content, 100, '…' )}}</p>
                <a class="btn btn-primary btn-sm" href="{{ route('troubles.show', $trouble->id) }}">More</a>
                <br>
                <br>
                by&nbsp;<a href="{{ route('users.show', $trouble->user_id)}}">{{ $trouble->user_name }}</a>
                
            </div>
        </div>
    </div>
        <div class="card-footer">
          <small class="text-muted">{{ $trouble->updated_at }}</small>
        </div>
  </div>
  @endforeach
</div>     


@endsection



