@extends('layouts.app')
@section('content')
<div class="page-wrapper">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
          <h2 class="header-title">Q & A　<a href="{{ url('questions/create') }}" class="btn btn-primary" id="my_travels_botton">新規投稿</a></h2>
          <div class="col-sm">
            @if($questions->isEmpty())
            <p>まだ投稿がありません。</p>
            @endif 
      </li>
    </div>

    @foreach ($questions as $question)
    <div class="card mb-3">
      <div class="row no-gutters">
          <div class="col-md-10">
              <div class="card-body">
                  <h5 class="card-title"> <h5 class="card-title">{{ $question->title }}</h5></a></h5>
                  <p>{{ $question->body }}</p>
                  by&nbsp;<a href="{{ route('users.show', $question->user_id)}}">{{ $question->user_name }}</a> 
              </div>
          </div>
          <div class="col-md-2 my-auto">
              <div class="card-body">
                  <a class="btn btn-primary btn-sm" href="{{ route('questions.show', $question->id) }}"><span>回答</span><span>する</span></a>
              </div>
          </div>
      </div>
          <div class="card-footer">
            <div class="row no-gutters">
              <div class="col-md-12 my-auto">
                <small class="text-muted">{{ $question->updated_at }}</small>
              </div>
            </div>
          </div>
    </div>
    @endforeach
  </div>  
</div>   


@endsection



