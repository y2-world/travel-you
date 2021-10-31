@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="container">
            <h2 class="header-title">OUR TRAVELS　<a href="{{ url('posts/create') }}" class="btn btn-outline-primary" id="my_travels_botton">NEW POST</a></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{url('/search')}}" method="GET">
                    <input type="text" class="form-control mb-2" placeholder="キーワード検索" type="search" value="{{request('keyword')}}" name="keyword" required>
                    </form>
                </div>
                <div class="col-md-6">
                    <select class="form-control mb-2" onChange="location.href=value;">
                    <option hidden value="none">国検索</option>
                    @foreach ($posts->unique('country_id') as $rec)
                    <option value="{{ url('countries', $rec->country_id)}}">{{ optional($rec->country)->name}}</option>
                    @endforeach
                    </select>
                    <a href="{{ url('countries') }}" id="my_travels_botton">国別投稿一覧</a>
                    <br><br>
                </div>
            </div>
            <h5>検索結果 : {{$keyword}}</h5>
            @if($data->isEmpty())
            <p>検索結果がありません。</p>
            @endif
            <div class="user-cards">
                @foreach ($data as $result)
                <div class="travel-card">
                    <p class="card-user"><a href="{{ route('users.show', $result->user_id)}}">{{ $result->user_name }}</a></p>
                    <p class="card-title-trouble">{{ $result->title }}</a></p>
                    <div class="travel-img">
                        <a href="{{ route('troubles.show', $result->id) }}"><img src="{{ asset('storage/' . $result->image) }}"></a>
                    </div>
                    <p class="card-diary">{{Str::limit($result->content, 90, '…' )}}</p>
                    <div class="trouble-row">
                        <p class="post-date">{{ $result->updated_at }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="back">
                <a href="{{ url('/posts') }}" class="btn btn-secondary btn-sm">BACK</a>
            </div>
        </div>
    </div>
</div>
@endsection
