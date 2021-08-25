@extends('layouts.app')　
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="header-title">Q & A</h2>
            <div class="col-sm">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><h5 class="card-title">{{ $question->title }}</h5></a></h5>
                                by&nbsp;<a href="{{ route('users.show', $question->user_id)}}">{{ $question->user_name }}</a>
                                <div class="card-info">
                                    <small>カテゴリー : {{ $question->category }}</small><br>
                                    <small>投稿日時：{{ $question->created_at }}</small> 
                                </div>
                                <hr>
                                <p>Q : {{ $question->body }}</p>
                                @foreach ($question->answers as $answer)
                                    <hr>
                                    <small>投稿者：<a href="{{ route('users.show', $question->user_id)}}">{{ $answer->user->name }}</small></a>
                                    <small>{{ $answer->created_at }}</small><br>
                                    A : {{ $answer->body }}</p>
                                @endforeach
                                <form action="{{ route('answers.store') }}" method="POST">
                                    {{csrf_field()}}
                                <input type="hidden" name="question_id" value="{{ $question->id }}">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" name="body"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">回答する</button>
                                </form>
                            <hr>
                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            <br>
                            <br>
                            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-secondary btn-sm">編集</a>
                            <a href="{{ url('/questions') }}" class="btn btn-secondary btn-sm">BACK</a>
                            <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection