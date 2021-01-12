@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h5>タイトル：{{ $post->title }}</h5>
            </div>
            <div class="card-body">
                <p class="card-date">{{ $post->date1 }} 〜 {{ $post->date2 }}</p>
                <p class="card-country">{{ $post->country }}</p>
                <p class="card-city">{{ $post->country }}</p>
                <p>投稿日時：{{ $post->created_at }}</p>
            </div>
        </div>
    </div>
</div>
@endsection