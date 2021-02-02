@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-8">
         <div class="card-body">
            <h4>{{ $trouble->title }}</h4>
            <p class="card-category">by&nbsp;<a href="#"></a>
        </div>
        <li class="list-group-item">
            <img src="#" width="100%">
            <br>
            <br>
            <p class="card-country">国 : </p>
            <p class="card-city">カテゴリー : </p>
            <hr>
            <p class="card-city"></p>
            <hr>
            <p>投稿日時：</p> 
            <br>
            <a href="{{ url('/posts') }}" class="btn btn-secondary">BACK</a>
        </li>
    </div>
</div>
            
@endsection