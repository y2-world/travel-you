@extends('layouts.app')　
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="trouble">Q & A</h2>
            <div class="col-sm">
            <hr>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><h5 class="card-title">{{ $question->title }}</h5></a></h5>
                                <p class="card-category">by&nbsp;<a href="{{ route('users.show', $question->user_id)}}">{{ $question->user_name }}</a>
                                <br>
                                <br>
                                <sm>カテゴリー : {{ $question->category }}</sm>
                                <br>
                                <hr>
                                <p>{{ $question->body }}</p>
                                <hr>
                                <small>投稿日時：{{ $question->created_at }}</small> 
                                <br>
                                <br>
                                <form action="{{ route('answers.store') }}" method="POST">
                                    {{csrf_field()}}
                                        <input type="hidden" name="question_id" value="{{ $question->id }}">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" name="body"></textarea>
                                            </div>
                                        <a class="btn btn-primary btn-sm" value="upload">回答する</a>
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