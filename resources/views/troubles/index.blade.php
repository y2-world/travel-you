@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <h2 class="header-title">TROUBLE×YOU　<a href="{{ url('troubles/create') }}" class="btn btn-primary" id="my_travels_botton">NEW POST</a></h2>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-md-4">
            <form action="{{url('/search')}}" method="GET">
                <input type="text" class="form-control mb-2" placeholder="キーワード検索" type="search" value="{{request('keyword')}}" name="keyword" required>
            </form>
        </div>
        <div class="col-md-4">
            <select class="form-control mb-2" name="country_id" onChange="location.href=value;">
                <option hidden value="{{ url('countries') }}">国検索</option>
                @foreach ($troubles->unique('country_id') as $rec1)
                <option value="{{ url('countries', $rec1->country_id)}}">{{ optional($rec1->country)->name}}</option>
                @endforeach
            </select>
            <a href="{{ url('countries') }}" id="my_travels_botton">国別投稿一覧</a>
        </div>
        <div class="col-md-4">
            <select class="form-control mb-2" name="category_id" onChange="location.href=value;">
                <option hidden value="{{ url('categories') }}">カテゴリー検索</option>
                @foreach ($troubles->unique('category_id') as $rec2)
                <option value="{{ url('categories', $rec2->category_id)}}">{{ optional($rec2->category)->name}}</option>
                @endforeach
            </select>
            <a href="{{ url('categories') }}" id="my_travels_botton">カテゴリー別投稿一覧</a>
        </div>
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
@endsection



