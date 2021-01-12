@extends('layouts.app')　
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card text-center">
            <div class="card-header">
                OUR TRAVELS
            </div>
            @foreach ($posts as $post)
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-date">{{ $post->date1 }} 〜 {{ $post->date2 }}</p>
                <p class="card-user">by {{ Auth::user()->name }}</p>
                <a href="{{ route('posts.show', auth()->user()->id) }}" class="btn btn-primary">詳細</a>
            </div>
            <div class="card-footer text-muted">
                {{ $post->created_at }}
            </div>
            @endforeach
        </div>
        </div>
    </div>
</div>
@endsection