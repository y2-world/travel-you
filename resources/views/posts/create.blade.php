@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h4>あなたの旅をシェアしましょう　<a href="{{ route('users.show', Auth::user()->id )}}" class="btn btn-primary" id="my_travels_botton">MY TRAVELS</a></h4>
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                @if ($errors->any()) 
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="form-group">
                        <label>タイトル</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <input type="text" class="form-control" placeholder="旅のタイトル" name="title">
                    </div>  
                    <div class="form-group">
                        <label>期間&nbsp;<span class="badge bg-danger">必須</span></label><br>
                        <input type="date" placeholder="yyyy-mm-dd" name="date1">
                    〜
                    <input type="date" placeholder="yyyy-mm-dd" name="date2">
                    </div> 
                    <div class="form-group">
                        <label>カバー写真</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <input type="file" class="form-control-file"name="image">
                    </div>
                    <div class="form-group">
                        <label>国</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <select class="form-control" name="country">
                            <option hidden>訪れた国を選択</option>
                            <option value="アイスランド">アイスランド</option>
                            <option value="アイルランド">アイルランド</option>
                            <option value="アゼルバイジャン">アゼルバイジャン</option>
                            <option value="アフガニスタン">アフガニスタン</option>
                            <option value="アメリカ">アメリカ</option>
                            <option value="アラブ首長国連邦">アラブ首長国連邦</option>
                            <option value="アルジェリア">アルジェリア</option>
                            <option value="アルゼンチン">アルゼンチン</option>
                            <option value="アルバニア">アルバニア</option>
                            <option value="アルメニア">アルメニア</option>
                            <option value="アンギラ">アンギラ</option>
                            <option value="アンゴラ">アンゴラ</option>
                            <option value="アンティグア・バーブーダ">アンティグア・バーブーダ</option>
                            <option value="アンドラ">アンドラ</option>
                            <option value="イエメン">イエメン</option>
                            <option value="イギリス">イギリス</option>
                            <option value="イスラエル">イスラエル</option>
                            <option value="イタリア">イタリア</option>
                            <option value="イラク">イラク</option>
                            <option value="イラン">イラン</option>
                            <option value="インド">インド</option>
                            <option value="インドネシア">インドネシア</option>
                            <option value="ウガンダ">ウガンダ</option>
                            <option value="ウクライナ">ウクライナ</option>
                            <option value="ウズベキスタン">ウズベキスタン</option>
                            <option value="ウルグアイ">ウルグアイ</option>
                            <option value="エクアドル">エクアドル</option>
                            <option value="エジプト">エジプト</option>
                            <option value="エストニア">エストニア</option>
                            <option value="エスワティニ">エスワティニ</option>
                            <option value="エチオピア">エチオピア</option>
                            <option value="エリトリア">エリトリア</option>
                            <option value="エルサルバドル">エルサルバドル</option>
                            <option value="オーストラリア">オーストラリア</option>
                            <option value="オーストリア">オーストリア</option>
                            <option value="オマーン">オマーン</option>
                            <option value="オランダ">オランダ</option>
                            <option value="ガーナ">ガーナ</option>
                            <option value="ガーボベルデ">ガーボベルデ</option>
                            <option value="ガイアナ">ガイアナ</option>
                            <option value="カザフスタン">カザフスタン</option>
                            <option value="カタール">カタール</option>
                            <option value="カナダ">カナダ</option>
                            <option value="ガボン">ガボン</option>
                            <option value="カメルーン">カメルーン</option>
                            <option value="韓国">韓国</option>
                            <option value="ガンビア">ガンビア</option>
                            <option value="カンボジア">カンボジア</option>
                            <option value="北朝鮮">北朝鮮</option>
                            <option value="北マケドニア">北マケドニア</option>
                            <option value="ギニア">ギニア</option>
                            <option value="ギニアビサウ">ギニアビサウ</option>
                            <option value="キプロス">キプロス</option>
                            <option value="キューバ">キューバ</option>
                            <option value="ギリシャ">ギリシャ</option>
                            <option value="キリバス">キリバス</option>
                            <option value="キルギス">キルギス</option>
                            <option value="グアテマラ">グアテマラ</option>
                            <option value="クウェート">クウェート</option>
                            <option value="グレナダ">グレナダ</option>
                            <option value="クロアチア">クロアチア</option>
                            <option value="ケニア">ケニア</option>
                            <option value="コートジボワール">コートジボワール</option>
                            <option value="コスタリカ">コスタリカ</option>
                            <option value="コモロ">コモロ</option>
                            <option value="コロンビア">コロンビア</option>
                            <option value="コンゴ共和国">コンゴ共和国</option>
                            <option value="コンゴ民主共和国">コンゴ民主共和国</option>
                            <option value="サウジアラビア">サウジアラビア</option>
                            <option value="サモア">サモア</option>
                            <option value="サントメ・プリンシペ">サントメ・プリンシペ</option>
                            <option value="ザンビア">ザンビア</option>
                            <option value="サンマリノ">サンマリノ</option>
                            <option value="サンマルタン">サンマルタン</option>
                            <option value="シエラレオネ">シエラレオネ</option>
                            <option value="ジブチ">ジブチ</option>
                            <option value="ジャマイカ">ジャマイカ</option>
                            <option value="ジョージア">ジョージア</option>
                            <option value="シリア">シリア</option>
                            <option value="シンガポール">シンガポール</option>
                            <option value="ジンバブエ">ジンバブエ</option>
                            <option value="スイス">スイス</option>
                            <option value="スウェーデン">スウェーデン</option>
                            <option value="スーダン">スーダン</option>
                            <option value="スペイン">スペイン</option>
                            <option value="スリナム">スリナム</option>
                            <option value="スリランカ">スリランカ</option>
                            <option value="スロバキア">スロバキア</option>
                            <option value="スロベニア">スロベニア</option>
                            <option value="セーシェル">セーシェル</option>
                            <option value="赤道ギニア">赤道ギニア</option>
                            <option value="セネガル">セネガル</option>
                            <option value="セルビア">セルビア</option>
                            <option value="セントクリストファー・ネーヴィス">セントクリストファー・ネーヴィス</option>
                            <option value="セントビンセント・グレナディーン">セントビンセント・グレナディーン</option>
                            <option value="セントヘレナ">セントヘレナ</option>
                            <option value="セントルシア">セントルシア</option>
                            <option value="ソマリア">ソマリア</option>
                            <option value="ソロモン諸島">ソロモン諸島</option>
                            <option value="タイ">タイ</option>
                            <option value="台湾">台湾</option>
                            <option value="タジキスタン">タジキスタン</option>
                            <option value="タンザニア">タンザニア</option>
                            <option value="チェコ">チェコ</option>
                            <option value="チャド">チャド</option>
                            <option value="中央アフリカ">中央アフリカ</option>
                            <option value="中国">中国</option>
                            <option value="チュニジア">チュニジア</option>
                            <option value="チリ">チリ</option>
                            <option value="ツバル">ツバル</option>
                            <option value="デンマーク">デンマーク</option>
                            <option value="ドイツ">ドイツ</option>
                            <option value="トーゴ">トーゴ</option>
                            <option value="ドミニカ">ドミニカ</option>
                            <option value="ドミニカ共和国">ドミニカ共和国</option>
                            <option value="トリニダード・トバゴ">トリニダード・トバゴ</option>
                            <option value="トルクメニスタン">トルクメニスタン</option>
                            <option value="トルコ">トルコ</option>
                            <option value="トンガ">トンガ</option>
                            <option value="ナイジェリア">ナイジェリア</option>
                            <option value="ナウル">ナウル</option>
                            <option value="ナミビア">ナミビア</option>
                            <option value="ニカラグア">ニカラグア</option>
                            <option value="ニジェール">ニジェール</option>
                            <option value="日本">日本</option>
                            <option value="ニュージーランド">ニュージーランド</option>
                            <option value="ネパール">ネパール</option>
                            <option value="ノルウェー">ノルウェー</option>
                            <option value="バーミューダ">バーミューダ</option>
                            <option value="バーレーン">バーレーン</option>
                            <option value="ハイチ">ハイチ</option>
                            <option value="パキスタン">パキスタン</option>
                            <option value="バチカン市国">バチカン市国</option>
                            <option value="パナマ">パナマ</option>
                            <option value="バヌアツ">バヌアツ</option>
                            <option value="バハマ">バハマ</option>
                            <option value="パプアニューギニア">パプアニューギニア</option>
                            <option value="パラオ">パラオ</option>
                            <option value="パラグアイ">パラグアイ</option>
                            <option value="バルバドス">バルバドス</option>
                            <option value="ハンガリー">ハンガリー</option>
                            <option value="バングラデシュ">バングラデシュ</option>
                            <option value="東ティモール">東ティモール</option>
                            <option value="フィジー">フィジー</option>
                            <option value="フィリピン">フィリピン</option>
                            <option value="フィンランド">フィンランド</option>
                            <option value="ブータン">ブータン</option>
                            <option value="ブラジル">ブラジル</option>
                            <option value="フランス">フランス</option>
                            <option value="ブルガリア">ブルガリア</option>
                            <option value="ブルキナファソ">ブルキナファソ</option>
                            <option value="ブルネイ">ブルネイ</option>
                            <option value="ブルンジ">ブルンジ</option>
                            <option value="ベトナム">ベトナム</option>
                            <option value="ペナン">ペナン</option>
                            <option value="ベネズエラ">ベネズエラ</option>
                            <option value="ベラルーシ">ベラルーシ</option>
                            <option value="ベリーズ">ベリーズ</option>
                            <option value="ペルー">ペルー</option>
                            <option value="ベルギー">ベルギー</option>
                            <option value="ポーランド">ポーランド</option>
                            <option value="ボスニア・ヘルツェゴビナ">ボスニア・ヘルツェゴビナ</option>
                            <option value="ボツワナ">ボツワナ</option>
                            <option value="ボリビア">ボリビア</option>
                            <option value="ポルトガル">ポルトガル</option>
                            <option value="ホンジュラス">ホンジュラス</option>
                            <option value="マーシャル諸島">マーシャル諸島</option>
                            <option value="マダガスカル">マダガスカル</option>
                            <option value="マラウイ">マラウイ</option>
                            <option value="マリ">マリ</option>
                            <option value="マルタ">マルタ</option>
                            <option value="マレーシア">マレーシア</option>
                            <option value="ミクロネシア">ミクロネシア</option>
                            <option value="南アフリカ">南アフリカ</option>
                            <option value="南スーダン">南スーダン</option>
                            <option value="ミャンマー">ミャンマー</option>
                            <option value="メキシコ">メキシコ</option>
                            <option value="モーリシャス">モーリシャス</option>
                            <option value="モーリタニア">モーリタニア</option>
                            <option value="モザンビーク">モザンビーク</option>
                            <option value="モナコ">モナコ</option>
                            <option value="モルディブ">モルディブ</option>
                            <option value="モルドバ">モルドバ</option>
                            <option value="モロッコ">モロッコ</option>
                            <option value="モンゴル">モンゴル</option>
                            <option value="モンテネグロ">モンテネグロ</option>
                            <option value="モントセラト">モントセラト</option>
                            <option value="ヨルダン">ヨルダン</option>
                            <option value="ラオス">ラオス</option>
                            <option value="ラトビア">ラトビア</option>
                            <option value="リトアニア">リトアニア</option>
                            <option value="リビア">リビア</option>
                            <option value="リヒテンシュタイン">リヒテンシュタイン</option>
                            <option value="リベリア">リベリア</option>
                            <option value="ルーマニア">ルーマニア</option>
                            <option value="ルクセンブルク">ルクセンブルク</option>
                            <option value="ルワンダ">ルワンダ</option>
                            <option value="レソト">レソト</option>
                            <option value="レバノン">レバノン</option>
                            <option value="ロシア">ロシア</option>
                        </select>
                    </div>     
                    <div class="form-group">
                        <label>都市</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <input type="text" class="form-control" placeholder="訪れた都市を入力" name="city">
                    </div>
                    <div class="form-group">
                        <label>TRAVEL DIARY</label>&nbsp;<span class="badge bg-danger">必須</span>
                        <textarea class="form-control" rows="5" name="diary"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" value="upload">投稿</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection