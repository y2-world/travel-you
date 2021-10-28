@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <h2>カテゴリー別投稿一覧</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>カテゴリー名</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td></td>
                    <td><a href="{{ url('categories', $category->id)}}">{{ $category->name }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
