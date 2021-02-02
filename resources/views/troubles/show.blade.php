@extends('layouts.app')　
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="trouble">TROUBLE×YOU</h2>
        <div class="col-sm">
        <hr>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4 my-auto">
                        <img class="card-img" src="{{ asset('storage/' . $trouble->image) }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><h5 class="card-title">{{ $trouble->title }}</h5></a></h5>
                            <p class="card-category">by&nbsp;<a href="{{ route('users.show', $trouble->user_id)}}">{{ $trouble->user_name }}</a>
                            <p>国 : {{ $trouble->country }}</p>
                            <p>カテゴリー : {{ $trouble->category }}</p>
                            <hr>
                            <p>{{ $trouble->content }}</p>
                            <hr>
                            <p>投稿日時：{{ $trouble->created_at }}</p> 
                        <a href="{{ route('troubles.edit', $trouble->id) }}" class="btn btn-secondary">編集</a>
                        <a href="{{ url('/troubles') }}" class="btn btn-secondary">BACK</a>
                        <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection