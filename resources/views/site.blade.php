@extends('common.layout')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-primary">{{ $site->name }}</h1>
            </div>
            <div class="row mt-2">
                <div class="col-12 col-md-4 offset-md-1 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            手語つルしい百大ノト就係一チ画改フだ員能リと宮学ッろれし松系れくゃぴ行都ざ治掲よ本平ノ却記そ場政せイあゃ詳安ひてー他開ハ給初四あそせ。3注ヲ時62北ヘニ賞告ヨメリ聞類れよき方越じ見件ネツウロ身離レケヘ祭負機いこげご強購ら対億ミ密看割あー王誕構ヒツウニ海別ぜすごト。61除夫補59堂ネミ能内度水はする年不辞キタカヱ必禁熱ル闘級ムツ戒活ぴるえ道独ドぎす要張花飛宝とドのん。
                            亀エモラ美排せみう堂写れ向漢レふつへ昼自チケ満済ルハヒエ録長そみぴ狩稿男あドレ言本60演北作19省授浮絵ッほ。日じス市載重来ソスオシ金8竹メ本速ぎ確無ょしっ域購そる働購歩ネオ都認マフヲ内班で。後しちれぽ海2読ワスナ処会はゅが天文禁ミヱ軒授ヱハリオ集期でラ一平マケヨカ量議ごふ家変ト捕読ア星報ト港1無民いひてび十秋幅ー。                            
                            越セ東予ゆ話食クネ値京ふぽ申座リケヒ彼内ネナ資速クナノヤ盛北道にぜび芸震モネミ重岸ぽにさ知奇ざう。伊ヤエ久山ヌワ第長モテ戒建てイはド記継ラヌネ策軒ンよは臣近ぶしおわ戦備ほ隆問半てクもさ応殺78球族ヒヱチ導持よ。日ぼご芸新タ給歳でが若流ナヌサセ顔掲器エ期況ね北主げづだ平政ラ始9禁とく際1者注来ヱホ属万ゆがまぴ印困摘臓え。
                            得陶けお学我カケツ非入クずぐだ清康ヌク活転漂つずゅだ無般ナオチヤ告用ハマチイ見抜オホコ新武ご秋教ぶどみ切紹フラロ答同ぽくざ新手ケソ児牟就モ人冠ユ猛済育テシロ果協側ばぶ。政なぼー話康多楽ニウ果育ぼらよ検都ず式開ゅ離門関わ休林ハロワキ率済んゃぎ度冠っ毎逃ヨ均解ぞてクぎ校気めいッふ京実クぴるえ極4株帳んば意49陸似抑ざぶねど。
                            暮るじげか経気増青クラぱ船購キトハ弾独ホシキト店政セタロフ航報て摘術しゅす催備モロ一下レ位分ぎや情必ら尾協必がぼ時模ネヘヲロ司18投テエム木視隊けちリ。年質中何りろば与転エミヒホ実治14下8経ヤ速38更じ奈雇世ッび。演ニ齢家ヤニ断毎りとッ飛誓ヱミヨ広併ぴみ倍美イ犯81戸うひク作写人ょ万書フこリ済日まぴス幕小ひ薦面ト長名ーあ達応ノヒヘナ崖息曲燃へみイあ。
                            部サ演身ヱクハキ条東ンうぐ迎7離ほね姿境スぜぎ科光京ちドフが歌47触載シヤキ性事ワルリ込象づけリ病動法か都館大末昇スけ。音望ヘサ同戦ごトにち命抑載きにで勝開スハ洗独ざべだレ書績ぐド際督ッ意球よりふン究入ヌ理逆トぎーえ和径猶聡駄きて。百ソワ立86比映うるスし前能ウモワ庫織ヱ祖民ヤ言磐タ待雑ひ決7大分ケキヤス贅協ぴスレ開用ヘヨ接能もドや分碁ヒハミ近響表連こフへ全指夢巻為はと。
                        </div>
                    </div>
                </div>

                {{-- ad banner demo --}}
                <div class="col-12 col-md-6">
                    @foreach ($ads as $ad)
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="card adClicks" data-id={{ $ad->id }} data-href={{ route('result', [$site->id, $ad->id]) }}>
                                    <div class="card-body">
                                        <a href="#" style="text-decoration: none" id="ads-{{ $ad->id }}">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h3 class="font-weight-bold text-dark">{{ $ad->title }}</h3>
                                                    <p class="text-dark">{{ $ad->started_date}} - {{ $ad->ended_date }}</p>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="position-relative">
                                                        <img src="{{ asset('asset/images/advertisement/' . $ad->image) }}" class="w-100" alt="">
                                                        <div class="live-info badge badge-success">Live</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- modal --}}
                        <div class="modal" tabindex="-1" role="dialog" id="modal-{{$ad->id}}">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="font-weight-bold text-dark">{{ $ad->title }}</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="row modal-body">
                                    <div class="col-lg-8">
                                        <p class="text-dark">{{ $ad->started_date}} - {{ $ad->ended_date }}</p>
                                        <div class="d-lg-flex align-items-baseline mb-3">
                                            <h5 class="text-dark font-weight-bold">{{ $ad->store->name }}</h5>
                                            <p class="text-muted ml-3">{{ $ad->product->title }}</p>
                                        </div>
                                        <p>{{ $ad->content }}</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="position-relative">
                                            <img src="{{ asset('asset/images/advertisement/' . $ad->image) }}" class="w-100" alt="">
                                            <div class="live-info badge badge-success">Live</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
