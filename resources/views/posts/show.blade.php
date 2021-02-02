@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="trouble">TRAVEL DIARY</h2>
        <div class="col-sm">
        <hr>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="card-img" src="{{ asset('storage/' . $post->image) }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><h5 class="card-title">{{ $post->title }}</h5></a></h5>
                            <p class="card-category">by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</a>
                            <p>国 : {{ $post->country }}</p>
                            <p>都市 : {{ $post->city }}</p>
                            <hr>
                            <p>{{ $post->diary }}</p>
                            <hr>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/' . $post->image1) }}" width="50%">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $post->image2) }}" width="50%">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $post->image3) }}" width="50%">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $post->image4) }}" width="50%">
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
                    <br>
                            <p>投稿日時：{{ $post->created_at }}</p> 
                        <a href="{{ url('/posts') }}" class="btn btn-secondary">BACK</a>
                        <br>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection