@extends('layouts.app')
@section('content')

<div class="page-wrapper">
    <div class="container-fruid">
        <div class="container">
            <h2 class="header-title">TROUBLE×YOU　<a href="{{ url('troubles/create') }}" class="btn btn-outline-primary" id="my_travels_botton">NEW POST</a></h2>
            @if($troubles->isEmpty())
            <p>まだ投稿がありません。</p>
            @endif 
        </div>
        <div class="cards">
        @foreach ($troubles as $trouble)
            <div class="travel-card">
                <p class="card-user"><a href="{{ route('users.show', $trouble->user_id)}}">{{ $trouble->user_name }}</a></p>
                <p class="card-title-trouble">{{ $trouble->title }}</a></p>
                <div class="travel-img">
                    <a href="{{ route('troubles.show', $trouble->id) }}"><img src="{{ asset('storage/' . $trouble->image) }}"></a>
                </div>
                <p class="card-diary">{{Str::limit($trouble->content, 90, '…' )}}</p>
                <div class="trouble-row">
                    <p class="post-date">{{ $trouble->updated_at }}</p>
                    <div class="trouble-more"><a class="btn btn-primary btn-sm" href="{{ route('troubles.show', $trouble->id) }}">MORE</a></div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>    
@endsection



