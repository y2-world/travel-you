@extends('layouts.app')　
@section('content')
<div class="page-wrapper">
    <div class="container">
        <h2 class="header-title">Q & A</h2>
        <div class="travel-card-show">
            <div class="card-info-question">
                <p class="card-user-question"><a href="{{ route('users.show', $question->user_id)}}">{{ $question->user_name }}</a>
                <p class="card-title">{{ $question->title }}</a></p>
                <small>カテゴリー : {{ $question->category }}</small><br>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="question-header">Q</div>
                    <div class="question-text">{{ $question->body }}</span></div>
                    <p class="post-date">投稿日時：{{ $question->created_at }}</p>
                    <div class="btn-edit">
                        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-secondary btn-sm">編集</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="question-header">A</div>
                    @foreach ($question->answers as $answer)
                    <div class="answer-info">
                        <div class="question-text">{{ $answer->body }}</div>
                        <div class="comment-user"><a href="{{ route('users.show', $question->user_id)}}">{{ $answer->user->name }}</a>&emsp;&emsp;<span class="comment-date">{{ $answer->created_at }}</span></div>
                    </div>
                    @endforeach
                    <form action="{{ route('answers.store') }}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="question_id" value="{{ $question->id }}">
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="body"></textarea>
                        </div>
                        <div class="btn-show">
                            <button type="submit" class="btn btn-primary btn-sm">回答する</button>
                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="back">
            <a href="{{ url('/questions') }}" class="btn btn-secondary btn-sm">BACK</a>
        </div>
    </div>
</div>
@endsection