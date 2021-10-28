@extends('layouts.app')
@section('content')
<br>
<div class="container">
    <h4>検索結果 : {{$keyword}}</h4>
    <form action="{{url('/search')}}" method="GET">
        <input type="text" class="form-control mb-2" placeholder="{{$keyword}}" type="search" value="{{request('keyword')}}" name="keyword" required>
    </form>
    @if($data->isEmpty())
        <p>検索結果がありません。</p>
    @endif
    @foreach ($data as $result)
    <div class="user-cards">
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
</div>
@endsection
