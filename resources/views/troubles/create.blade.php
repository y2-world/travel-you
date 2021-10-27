@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4>あなたのTROUBLEをシェアしましょう　<a href="{{ url('troubles') }}" class="btn btn-primary" id="my_travels_botton">投稿一覧</a></H4>
                <form action="{{ route('troubles.store') }}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" placeholder="トラブルのタイトル" name="title">
                        </div>  
                        <div class="form-group">
                            <label>国</label>&nbsp;<span class="badge bg-danger">必須</span>
                            <select class="form-control" name="country">
                                <option hidden>訪れた国を選択</option>
                                <option value="1">アイスランド</option>
                                <option value="2">アイルランド</option>
                                <option value="3">アゼルバイジャン</option>
                                <option value="4">アフガニスタン</option>
                                <option value="5">アメリカ</option>
                                <option value="6">アラブ首長国連邦</option>
                                <option value="7">アルジェリア</option>
                                <option value="8">アルゼンチン</option>
                                <option value="9">アルバニア</option>
                                <option value="10">アルメニア</option>
                                <option value="11">アンギラ</option>
                                <option value="12">アンゴラ</option>
                                <option value="13">アンティグア・バーブーダ</option>
                                <option value="14">アンドラ</option>
                                <option value="15">イエメン</option>
                                <option value="16">イギリス</option>
                                <option value="17">イスラエル</option>
                                <option value="18">イタリア</option>
                                <option value="19">イラク</option>
                                <option value="20">イラン</option>
                                <option value="21">インド</option>
                                <option value="22">インドネシア</option>
                                <option value="23">ウガンダ</option>
                                <option value="24">ウクライナ</option>
                                <option value="25">ウズベキスタン</option>
                                <option value="26">ウルグアイ</option>
                                <option value="27">エクアドル</option>
                                <option value="28">エジプト</option>
                                <option value="29">エストニア</option>
                                <option value="30">エスワティニ</option>
                                <option value="31">エチオピア</option>
                                <option value="32">エリトリア</option>
                                <option value="33">エルサルバドル</option>
                                <option value="34">オーストラリア</option>
                                <option value="35">オーストリア</option>
                                <option value="36">オマーン</option>
                                <option value="37">オランダ</option>
                                <option value="38">ガーナ</option>
                                <option value="39">ガーボベルデ</option>
                                <option value="40">ガイアナ</option>
                                <option value="41">カザフスタン</option>
                                <option value="42">カタール</option>
                                <option value="43">カナダ</option>
                                <option value="44">ガボン</option>
                                <option value="45">カメルーン</option>
                                <option value="46">韓国</option>
                                <option value="47">ガンビア</option>
                                <option value="48">カンボジア</option>
                                <option value="49">北朝鮮</option>
                                <option value="50">北マケドニア</option>
                                <option value="51">ギニア</option>
                                <option value="52">ギニアビサウ</option>
                                <option value="53">キプロス</option>
                                <option value="54">キューバ</option>
                                <option value="55">ギリシャ</option>
                                <option value="56">キリバス</option>
                                <option value="57">キルギス</option>
                                <option value="58">グアテマラ</option>
                                <option value="59">クウェート</option>
                                <option value="60">グレナダ</option>
                                <option value="61">クロアチア</option>
                                <option value="62">ケニア</option>
                                <option value="63">コートジボワール</option>
                                <option value="64">コスタリカ</option>
                                <option value="65">コモロ</option>
                                <option value="66">コロンビア</option>
                                <option value="67">コンゴ共和国</option>
                                <option value="68">コンゴ民主共和国</option>
                                <option value="69">サウジアラビア</option>
                                <option value="70">サモア</option>
                                <option value="71">サントメ・プリンシペ</option>
                                <option value="72">ザンビア</option>
                                <option value="73">サンマリノ</option>
                                <option value="74">サンマルタン</option>
                                <option value="75">シエラレオネ</option>
                                <option value="76">ジブチ</option>
                                <option value="77">ジャマイカ</option>
                                <option value="78">ジョージア</option>
                                <option value="79">シリア</option>
                                <option value="80">シンガポール</option>
                                <option value="81">ジンバブエ</option>
                                <option value="82">スイス</option>
                                <option value="83">スウェーデン</option>
                                <option value="84">スーダン</option>
                                <option value="85">スペイン</option>
                                <option value="86">スリナム</option>
                                <option value="87">スリランカ</option>
                                <option value="88">スロバキア</option>
                                <option value="89">スロベニア</option>
                                <option value="90">セーシェル</option>
                                <option value="91">赤道ギニア</option>
                                <option value="92">セネガル</option>
                                <option value="93">セルビア</option>
                                <option value="94">セントクリストファー・ネーヴィス</option>
                                <option value="95">セントビンセント・グレナディーン</option>
                                <option value="96">セントヘレナ</option>
                                <option value="97">セントルシア</option>
                                <option value="98">ソマリア</option>
                                <option value="99">ソロモン諸島</option>
                                <option value="100">タイ</option>
                                <option value="101">台湾</option>
                                <option value="102">タジキスタン</option>
                                <option value="103">タンザニア</option>
                                <option value="104">チェコ</option>
                                <option value="105">チャド</option>
                                <option value="106">中央アフリカ</option>
                                <option value="107">中国</option>
                                <option value="108">チュニジア</option>
                                <option value="109">チリ</option>
                                <option value="110">ツバル</option>
                                <option value="111">デンマーク</option>
                                <option value="112">ドイツ</option>
                                <option value="113">トーゴ</option>
                                <option value="114">ドミニカ</option>
                                <option value="115">ドミニカ共和国</option>
                                <option value="116">トリニダード・トバゴ</option>
                                <option value="117">トルクメニスタン</option>
                                <option value="118">トルコ</option>
                                <option value="119">トンガ</option>
                                <option value="120">ナイジェリア</option>
                                <option value="121">ナウル</option>
                                <option value="122">ナミビア</option>
                                <option value="123">ニカラグア</option>
                                <option value="124">ニジェール</option>
                                <option value="125">日本</option>
                                <option value="126">ニュージーランド</option>
                                <option value="127">ネパール</option>
                                <option value="128">ノルウェー</option>
                                <option value="129">バーミューダ</option>
                                <option value="130">バーレーン</option>
                                <option value="131">ハイチ</option>
                                <option value="132">パキスタン</option>
                                <option value="133">バチカン市国</option>
                                <option value="134">パナマ</option>
                                <option value="135">バヌアツ</option>
                                <option value="136">バハマ</option>
                                <option value="137">パプアニューギニア</option>
                                <option value="138">パラオ</option>
                                <option value="139">パラグアイ</option>
                                <option value="140">バルバドス</option>
                                <option value="141">ハンガリー</option>
                                <option value="142">バングラデシュ</option>
                                <option value="143">東ティモール</option>
                                <option value="144">フィジー</option>
                                <option value="145">フィリピン</option>
                                <option value="146">フィンランド</option>
                                <option value="147">ブータン</option>
                                <option value="148">ブラジル</option>
                                <option value="149">フランス</option>
                                <option value="150">ブルガリア</option>
                                <option value="151">ブルキナファソ</option>
                                <option value="152">ブルネイ</option>
                                <option value="153">ブルンジ</option>
                                <option value="154">ベトナム</option>
                                <option value="155">ペナン</option>
                                <option value="156">ベネズエラ</option>
                                <option value="157">ベラルーシ</option>
                                <option value="158">ベリーズ</option>
                                <option value="159">ペルー</option>
                                <option value="160">ベルギー</option>
                                <option value="161">ポーランド</option>
                                <option value="162">ボスニア・ヘルツェゴビナ</option>
                                <option value="163">ボツワナ</option>
                                <option value="164">ボリビア</option>
                                <option value="165">ポルトガル</option>
                                <option value="166">ホンジュラス</option>
                                <option value="167">マーシャル諸島</option>
                                <option value="168">マダガスカル</option>
                                <option value="169">マラウイ</option>
                                <option value="170">マリ</option>
                                <option value="171">マルタ</option>
                                <option value="172">マレーシア</option>
                                <option value="173">ミクロネシア</option>
                                <option value="174">南アフリカ</option>
                                <option value="175">南スーダン</option>
                                <option value="176">ミャンマー</option>
                                <option value="177">メキシコ</option>
                                <option value="178">モーリシャス</option>
                                <option value="179">モーリタニア</option>
                                <option value="180">モザンビーク</option>
                                <option value="181">モナコ</option>
                                <option value="182">モルディブ</option>
                                <option value="183">モルドバ</option>
                                <option value="184">モロッコ</option>
                                <option value="185">モンゴル</option>
                                <option value="186">モンテネグロ</option>
                                <option value="187">モントセラト</option>
                                <option value="188">ヨルダン</option>
                                <option value="189">ラオス</option>
                                <option value="190">ラトビア</option>
                                <option value="191">リトアニア</option>
                                <option value="192">リビア</option>
                                <option value="193">リヒテンシュタイン</option>
                                <option value="194">リベリア</option>
                                <option value="195">ルーマニア</option>
                                <option value="196">ルクセンブルク</option>
                                <option value="197">ルワンダ</option>
                                <option value="198">レソト</option>
                                <option value="199">レバノン</option>
                                <option value="200">ロシア</option>
                            </select>
                        </div>  
                        <div class="form-group">
                            <label>カテゴリー</label>&nbsp;<span class="badge bg-danger">必須</span>
                            <select class="form-control"　select name="category">
                                <option hidden>カテゴリーを選択</option>
                                <option value="宿泊先">宿泊先 (ホテル・Airbnbなど)</option>
                                <option value="レストラン">レストラン</option>
                                <option value="交通機関">交通機関</option>
                                <option value="ショッピング">ショッピング</option>
                                <option value="治安">治安</option>
                                <option>その他</option>
                            </select>
                        </div>   
                        <div class="form-group">
                            <label>写真</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <div class="form-group">
                            <label>本文</label>&nbsp;<span class="badge bg-danger">必須</span>
                            <textarea class="form-control" rows="10" name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" value="upload">投稿</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection