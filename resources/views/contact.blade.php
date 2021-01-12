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
                <textarea style="width:100%; height:25px;"></textarea>
                お問い合わせ内容&nbsp;&nbsp;
                <br>
                <textarea style="width:100%; height:100px;"></textarea>
                <br>
                <button type="submit">送信</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
