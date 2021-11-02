@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="header-title">
            <h2>{{ $user_name }}'s TRAVELS</h2>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="user-header">
                    <h4>MY TRAVELS&emsp;<a href="{{ url('posts/create') }}" class="btn btn-outline-primary" id="my_travels_botton">NEW POST</a></h4>
                </div>
                @if($post->isEmpty())
                <p class="user-title">まだ投稿がありません。</p>
                @endif 
                <ul class="user-cards">
                    @foreach ($post as $rec)
                    <li class="travel-card">
                        <p class="user-title"><a href="{{ route('posts.show', $rec->id) }}">{{ $rec->title }}</a></p>
                        <p class="card-date">{{ $rec->date1 }} 〜 {{ $rec->date2 }}</p>
                        <div class="travel-img">
                            <a href="{{ route('posts.show', $rec->id) }}"><img src="{{ asset('storage/' . $rec->image) }}"></a>
                        </div>
                        <p class="user-post-date">{{ $rec->updated_at }}</p>
                    </li>
                    @endforeach
                </ul>
                <hr>
                <div class="user-header">
                    <h4>TROUBLE×YOU&emsp;<a href="{{ url('troubles/create') }}" class="btn btn-outline-primary" id="my_travels_botton">NEW POST</a></h4>
                </div>
                @if($trouble->isEmpty())
                <p class="user-title">まだ投稿がありません。</p>
                @endif 
                <ul class="user-cards">
                    @foreach ($trouble as $rec)
                    <li class="travel-card">
                        <p class="user-title"><a href="{{ route('troubles.show', $rec->id) }}">{{ $rec->title }}</a></p>
                        <p class="card-diary">{{Str::limit($rec->content, 90, '…' )}}</p>
                        <div class="travel-img">
                            <a href="{{ route('troubles.show', $rec->id) }}"><img src="{{ asset('storage/' . $rec->image) }}"></a>
                        </div>
                        <p class="user-post-date">{{ $rec->updated_at }} </p>
                    </li>
                    @endforeach
                </ul>
                <hr>
                <div class="user-header">
                    <h4>MY Q&A&emsp;<a href="{{ url('questions/create') }}" class="btn btn-outline-primary" id="my_travels_botton">NEW POST</a></h4>
                </div>
                @if($question->isEmpty())
                <p class="user-title">まだ投稿がありません。</p>
                @endif 
                <ul class="user-cards">
                    @foreach ($question as $rec)
                    <li class="travel-card">
                        <p class="user-title"><a href="{{ route('questions.show', $rec->id) }}">{{ $rec->title }}</a> </p>
                        <p class="card-diary">{{ $rec->body }}</p>
                        <p class="post-date">{{ $rec->updated_at }} </p>
                    </li>
                    @endforeach
                </ul>
                <hr>
            </div>
            <div class="col-md-5">
                <div class="user-header">
                    <h4>MY MAP</h4>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12541698.638610173!2d-12.716311725758255!3d39.87562343338272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc42e3783261bc8b%3A0xa6ec2c940768a3ec!2z44K544Oa44Kk44Oz!5e0!3m2!1sja!2sjp!4v1611992075084!5m2!1sja!2sjp" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                <hr>
                <div class="user-header">
                    <h4>MY COUNTRIES</h4>
                </div>
                <div class="number-boxes">
                    <div class="number-box">
                        <div class="country-number">{{ \App\Post::distinct()->count() }}</div>
                        <p>COUNTRIES</p>
                    </div>
                    <div class="number-box">
                        <div class="country-number">{{ \App\Post::count() }}</div>
                        <p>TRAVELS</p>
                    </div>
                </div>
                <div class="country-card">
                    @if($post->isEmpty())
                    <p class="no-country">まだ訪れた国が登録されていません。</p>
                    @endif 
                    <ul>
                        @foreach ($country->unique('country_id') as $rec) 
                        <div class="country-list">
                            <li>.　<a href="{{ url('countries', $rec->country_id) }}">{{ optional($rec->country)->name}}</a></li>
                        </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




