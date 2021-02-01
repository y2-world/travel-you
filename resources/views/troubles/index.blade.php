@extends('layouts.app')　
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h2 class="trouble">TROUBLE×YOU</h2>
        <hr>
        <div class="col-sm-12">
        @foreach ($troubles as $trouble)
          <a href="#" ><img class="card-img-bottom" src="{{ asset('storage/' . $trouble->image) }}" width="100%" alt="Card image cap"></a>
            <li class="list-group-item">  
              <div class="card-body">
                <h5 class="card-title">{{ $trouble->title }}</h5>
                by&nbsp;<a href="{{ route('users.show', $trouble->user_id)}}">{{ $trouble->user_name }}</a>
              </div>
            </li>
              <div class="card-footer">
                <small class="text-muted">{{ $trouble->updated_at }}</small>
              </div>
              <br>
              @endforeach
        </div>
        <br>
    </li>
  </div>

@endsection



