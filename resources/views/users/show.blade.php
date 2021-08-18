@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="trouble">
        <h2>{{ $user_name }}'s TRAVELS</h2>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card-header">
                <h4>MY TRAVELS&emsp;<a href="{{ url('posts/create') }}" class="btn btn-primary" id="my_travels_botton">新規投稿</a></h4>
            </div>
            @foreach ($post as $rec)
            <li class="list-group-item">
                <a href="{{ route('posts.show', $rec->id) }}">{{ $rec->title }}</a>
                <br>
                {{ $rec->date1 }} 〜 {{ $rec->date2 }}
                <br>
                <br>
                <a href="{{ route('posts.show', $rec->id) }}"><img src="{{ asset('storage/' . $rec->image) }}" width="100%"></a>
            </li>
            @endforeach
            <br>
            <div class="card-header">
                <h4>TROUBLE×YOU&emsp;<a href="{{ url('troubles/create') }}" class="btn btn-primary" id="my_travels_botton">新規投稿</a></h4>
            </div>
            @foreach ($trouble as $rec)
            <li class="list-group-item"> 
            <a href="{{ route('troubles.show', $rec->id) }}">{{ $rec->title }}</a>
            <br>
            {{ $rec->updated_at }} 
            </li>
            @endforeach
            <br>
            <div class="card-header">
                <h4>MY QUESTIONS&emsp;<a href="{{ url('questions/create') }}" class="btn btn-primary" id="my_travels_botton">新規投稿</a></h4>
            </div>
            @foreach ($question as $rec)
            <li class="list-group-item">
            <a href="{{ route('questions.show', $rec->id) }}">{{ $rec->title }}</a>  
            <br>
            {{ $rec->updated_at }} 
            </li>
            @endforeach
            <div class="card-header">
                <h4>MY ANSWERS</h4>
            </div>
            <li class="list-group-item">
                ここに自分がした回答が入ります。
            </li>
        </div>
        <div class="col-sm-6">
            <div class="card-header">
                <h4>MY MAP</h4>
                </div>
            <li class="list-group-item">
                <div class="gmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12541698.638610173!2d-12.716311725758255!3d39.87562343338272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc42e3783261bc8b%3A0xa6ec2c940768a3ec!2z44K544Oa44Kk44Oz!5e0!3m2!1sja!2sjp!4v1611992075084!5m2!1sja!2sjp" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div><!--gmap-->        
            </li>
            <div class="card-header">
                <h4>MY COUNTRIES</h4>
            </div>
            <li class="list-group-item">
                <ol>
                @foreach ($post as $rec) 
                <li><a href="{{ route('posts.show', $rec->id) }}">{{$rec->country}}</a>
                    <br>
                    ({{ $rec->date1 }} 〜 {{ $rec->date2 }})
                </li>
                @endforeach
                </ol>
            </li>
                
        </div>
    </div>
</div>
@endsection




