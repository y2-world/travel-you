@extends('layouts.app')
@section('content')

<div class="page-wrapper">
    <div class="container-fruid">
        <div class="container">
            <h2 class="header-title">TROUBLE×YOU　<a href="{{ url('troubles/create') }}" class="btn btn-primary" id="my_travels_botton">新規投稿</a></h2>
            @if($troubles->isEmpty())
            <p>まだ投稿がありません。</p>
            @endif 
        </div>
        <div class="cards">
        @foreach ($troubles as $trouble)
            <div class="trouble-card">
                <p class="card-user"><a href="{{ route('users.show', $trouble->user_id)}}">{{ $trouble->user_name }}</a></p>
                <p class="card-title">{{ $trouble->title }}</a></p>
                <img src="{{ asset('storage/' . $trouble->image) }}" width="100%">
                <p class="card-diary">{{Str::limit($trouble->content, 80, '…' )}}</p>
                <div class="trouble-row">
                    <p class="post-date">{{ $trouble->updated_at }}</p>
                    <a class="btn btn-primary btn-sm" href="{{ route('troubles.show', $trouble->id) }}">MORE</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>    
@endsection



