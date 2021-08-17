@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="trouble">TROUBLE×YOU</h2>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('troubles.update', $trouble->id) }}" method="POST">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                    <div class="form-group">
                        <label>タイトル</label>
                        <input type="text" class="form-control" value="{{ $trouble->title }}" name="title">
                    </div>
                    <div class="form-group">
                        <label>国</label>
                        <input type="text" class="form-control" value="{{ $trouble->country }}" name="country">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">カテゴリー</label>
                        <select class="form-control" id="exampleFormControlSelect1" select name="category">
                        <option value="宿泊先">宿泊先 (ホテル・Airbnbなど)</option>
                        <option value="レストラン">レストラン</option>
                        <option value="交通機関">交通機関</option>
                        <option value="ショッピング">ショッピング</option>
                        <option value="治安">治安</option>
                        <option value="その他">その他</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>本文</label>
                        <textarea class="form-control" rows="10" name="content">{{$trouble->content}}</textarea>
                    </div>
                    <div class="update">
                    <button type="submit" class="btn btn-primary">更新する</button>
                    </div>
                </form>    
                    <br> 
                <div class="delete">     
                <form action='{{ route('troubles.destroy', $trouble->id) }}' method='post'>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type='submit' value='削除' class="btn btn-danger" onclick='return confirm("削除しますか？");'>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection