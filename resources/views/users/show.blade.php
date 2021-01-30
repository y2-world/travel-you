@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="mb-4">
    <h2>{{ $user_name }}'s TRAVELS</h2>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="card-header">
            <h4>MY TRAVELS</h4>
         </div>
        @foreach ($post as $post)
        <li class="list-group-item">
            <h6 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h6>
            <p class="card-date">{{ $post->date1 }} 〜 {{ $post->date2 }}</p>
            <a href="{{ route('posts.show', $post->id) }}"><img src="{{ asset('storage/' . $post->image) }}" width="100%"></a>
            <br>
            <br>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">編集</a>
        </li>
        @endforeach
    </div>
    <div class="col-sm-6">
        <div class="card-header">
            <h4>MY COUNTRIES</h4>
        </div>
        <li class="list-group-item">
            <ol>
            <li><a href="{{ route('posts.show', $post->id) }}">{{$post->country}}</a>
                <br>
                ({{ $post->date1 }} 〜 {{ $post->date2 }})</li> 
                </ol>
            </li>
        <div class="card-header">
            <h4>MY MAP</h4>
            </div>
        <li class="list-group-item">
            <div class="gmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12541698.638610173!2d-12.716311725758255!3d39.87562343338272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc42e3783261bc8b%3A0xa6ec2c940768a3ec!2z44K544Oa44Kk44Oz!5e0!3m2!1sja!2sjp!4v1611992075084!5m2!1sja!2sjp" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div><!--gmap-->        
        </li>
        <div class="card-header">
            <h4>MY QUESTIONS</h4>
        </div>
        <li class="list-group-item">
            ここに自分がした質問が入ります。
        <div><!--gmap-->        
        </li>
    </div>
</div>
@endsection




