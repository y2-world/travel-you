@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <h3>国別投稿一覧</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>国名</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($countries as $country)
                <tr>
                    <td></td>
                    <td><a href="{{ url('countries', $country->id)}}">{{ $country->name }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
