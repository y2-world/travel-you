@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="header-title">お問い合わせ</h2>
                <div class="contact-card">
                    <div class="card-body">
                        お名前
                        <br>
                        <input type="text" class="form-control" name="name"><br>
                        メールアドレス
                        <br>
                        <input type="text" class="form-control" name="email"><br>
                        件名
                        <br>
                        <input type="text" class="form-control" name="title"><br>
                        お問い合わせ内容
                        <textarea class="form-control" rows="6" name="content"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary">送信</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
