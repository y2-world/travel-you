@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-8">
         <div class="card-body">
            <h4>{{ $post->title }}</h4>
            <p class="card-date">{{ $post->date1 }}&nbsp;〜&nbsp;{{ $post->date2 }}</p>
            <p class="card-category">by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a>
        </div>
        <li class="list-group-item">
            <img src="{{ asset('storage/' . $post->image) }}" width="100%">
            <br>
            <br>
            <p class="card-country">国 : {{ $post->country }}</p>
            <p class="card-city">都市 : {{ $post->city }}</p>
            <hr>
            <h4 class="diary">TRAVEL DIARY</h4>
            <p class="card-city">{{ $post->diary }}</p>
            <hr>
            <h4 class="diary">PHOTOS</h4>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/' . $post->image1) }}" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $post->image2) }}" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $post->image3) }}" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $post->image4) }}" width="100%">
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            <br>
            <hr>
            <p>投稿日時：{{ $post->created_at }}</p> 
            <br>
            <a href="{{ url('/posts') }}" class="btn btn-secondary">BACK</a>
        </li>
    </div>
</div>
            
@endsection