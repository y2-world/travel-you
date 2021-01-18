@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('お問い合わせ') }}</div>

                <div class="card-body">
                お名前
                <br>
                <input type="text" name="name" value=""><br><br>
                メールアドレス
                <br>
                <input type="text" name="email" value=""><br><br>
                件名
                <br>
                <input type="text" class="form-control" name="name"><br>
                お問い合わせ内容
                <textarea class="form-control" rows="6" name="content"></textarea>
                <br>
                <button type="submit" class="btn btn-primary">投稿</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
