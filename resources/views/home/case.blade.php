@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')
<script type="text/javascript">
    $(function(){
    var display = function(){
        if($(this).scrollTop() > 100) {
            $("#sideInfo").fadeIn();
        } else {
            $("#sideInfo").fadeOut();
        }
    };
    $(window).on("scroll", display);
    $('#sideInfo .close').click(function(){
        $('#sideInfo').fadeOut();
        $(window).off("scroll", display);
    });
});
</script>
<style>
    #owl-demo .item, #owl-demo-1 .item{
        background: #3fbf79;
        padding: 30px 0px;
        margin: 10px;
        color: #FFF;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        text-align: center;
        width: 190px;
    }
    .customNavigation{
        text-align: center;
    }
    .customNavigation a{
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
</style>

@endsection
@section('content')

  

    <div class="p-3 bg-orange text-white row justify-content-md-center">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <img width="100%" src="{{ asset('assets/images/need_reason.png')}}"/>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <!-- Page Content -->
<div class="container">
        <!-- About Section -->
        <div class="home-main">
            <div class="row">
                <div id="breadcrumbs">
            <ul class="clearfix">
                <li><a href="./">HOME</a></li>
                <li>事例紹介</li>
            </ul>
            <div class="homeBtnList">
    <div class="fL"><a href="./kojin/"><img src="./guide/guid_files/btn_kojin.gif" alt="個人のお客様HOME" width="180" height="30"></a></div>
    <div class="fR"><a href="./houjin/"><img src="./guide/guid_files/btn_houjin.gif" alt="法人のお客様HOME" width="180" height="30"></a></div>
</div>
        </div>
                <div class="col-lg-3 col-md-5">
                    @include('home._leftside')
                </div>
                <div class="col-lg-9 col-md-7">
                   
                    <div class="card mt-3">
                        <div id="sideInfo" style="display: block;">
    <div class="head">
        <p class="close"><img src="./guide/guid_files/icon-close.png" alt="閉じる"></p>
    </div>
    <div class="cont">
        <p class="mB10"><a href="./mizukiri/"><img src="./guide/guid_files/ban_side_mizukiri.gif" alt="金属オーダー鏡始めました"></a></p>
        <p><a href="./bend/bend_draft.html?id=14"><img src="./guide/guid_files/ban_side_punch.gif" alt="パンチング始めました"></a></p>
    </div>
</div>
                      <div id="main">
                        <h2 class="comTtl mB8">事例紹介</h2>
                        
                        <!--検索-->
                        <div class="searchCont">
                            <form class="search" action="sozai/" method="GET">
                                <dl class="caseSearchCont">
                                    <dt>キーワード</dt>
                                    <dd>
                                        <input type="text" name="keyword" value="">
                                        <input type="submit" value="検索">
                                    </dd>
                                </dl>
                                <div class="caseSearchContSub">
                                    <dl class="mB5">
                                        <dt>素材</dt>
                                        <dd>
                                            <input type="radio" id="sort_sozai0" name="sort_sozai" value="0"><label for="sort_sozai0">すべて</label>
                                            <input type="radio" id="sort_sozai1" name="sort_sozai" value="1"><label for="sort_sozai1">アルミ</label>
                                            <input type="radio" id="sort_sozai2" name="sort_sozai" value="2"><label for="sort_sozai2">ステンレス</label>
                                            <input type="radio" id="sort_sozai3" name="sort_sozai" value="3"><label for="sort_sozai3">鉄</label>
                                        </dd>
                                    </dl>
                                </div>
                            </form>
                        </div>

                        <!--事例リスト-->
                        <div class="jireiList">
    <div class="kojin">
        <h3 class="kojinTtl">個人のお客様向けの事例</h3>
        <ul style="padding:0px; list-style-type: none;">
            <li><a href="./case/kojin/?kbn=0&amp;cate=11"><img src="./guide/guid_files/btn-sain.png" alt="サイン"></a></li>
            <li><a href="./case/kojin/?kbn=0&amp;cate=12"><img src="./guide/guid_files/btn-kitchen.png" alt="キッチン"></a></li>
            <li><a href="./case/kojin/?kbn=0&amp;cate=13"><img src="./guide/guid_files/btn-diy.png" alt="diy"></a></li>
            <li><a href="./case/kojin/?kbn=0&amp;cate=14"><img src="./guide/guid_files/btn-car.png" alt="自動車・バイク"></a></li>
            <li><a href="./case/kojin/?kbn=0&amp;cate=15"><img src="./guide/guid_files/btn-pc.png" alt="パソコン・オーディオ"></a></li>
            <li><a href="./case/kojin/?kbn=0&amp;cate=16"><img src="./guide/guid_files/btn-box.png" alt="箱・棚・台"></a></li>
            <li><a href="./case/kojin/?kbn=0&amp;cate=17"><img src="./guide/guid_files/btn-slope.png" alt="スロープ"></a></li>
            <li><a href="./case/kojin/?kbn=0&amp;cate=18"><img src="./guide/guid_files/btn-sonota.png" alt="その他"></a></li>
        </ul>
    </div>
    <div class="houjin">
        <h3 class="houjinTtl">法人のお客様向けの事例</h3>
        <ul style="padding:0px; list-style-type: none;>
            <li><a href="./case/houjin/?kbn=1&amp;cate=21"><img src="./guide/guid_files/btn-kanban.png" alt="看板"></a></li>
            <li><a href="./case/houjin/?kbn=1&amp;cate=22"><img src="./guide/guid_files/btn-rehome.png" alt="リフォーム"></a></li>
            <li><a href="./case/houjin/?kbn=1&amp;cate=23"><img src="./guide/guid_files/btn-sun.png" alt="太陽光"></a></li>
            <li><a href="./case/houjin/?kbn=1&amp;cate=24"><img src="./guide/guid_files/btn-kanagu.png" alt="金具・部品"></a></li>
            <li><a href="./case/houjin/?kbn=1&amp;cate=25"><img src="./guide/guid_files/btn-car.png" alt="自動車・バイク"></a></li>
            <li><a href="./case/houjin/?kbn=1&amp;cate=26"><img src="./guide/guid_files/btn-box.png" alt="箱・棚・台"></a></li>
            <li><a href="./case/houjin/?kbn=1&amp;cate=27"><img src="./guide/guid_files/btn-livewell.png" alt="ライブウェル"></a></li>
            <li><a href="./case/houjin/?kbn=1&amp;cate=28"><img src="./guide/guid_files/btn-sonota.png" alt="その他"></a></li>
        </ul>
    </div>
</div>

                        <!--ハッシュタグ-->
                        
<div class="hashtag">
    <h3 class="hashtagTtl">人気のハッシュタグ</h3>
    <ul class="hashtagList">
        
        <li><a href="./?kbn=&amp;keyword=水切り">#水切り</a></li>
        
        <li><a href="./?kbn=&amp;keyword=コンロ隙間">#コンロ隙間</a></li>
        
        <li><a href="./?kbn=&amp;keyword=縞板">#縞板</a></li>
        
        <li><a href="./?kbn=&amp;keyword=パンチング">#パンチング</a></li>
        
        <li><a href="./?kbn=&amp;keyword=浴室グレーチング">#浴室グレーチング</a></li>
        
        <li><a href="./?kbn=&amp;keyword=食洗器台">#食洗器台</a></li>
        
        <li><a href="./?kbn=&amp;keyword=天板">#天板</a></li>
        
    </ul>
</div>

                        
                        <h3 class="newCaseTtl">新着の事例</h3>
                        <div class="mainIn">
                            <div class="caseList">
                                <div class="sozaiCaseList mB15">
                                    
                                    <ul class="clearfix itemList">
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1508"><img src="./guide/guid_files/273dddccdd555b4f38cfacfb4309e39b.jpg" alt="" width="150" height="168" style="left:0px; top:-9px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1508">ガステーブル目隠しカバー</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1507"><img src="./guide/guid_files/5fbf0d9df513c28622864b622552c0d4.jpg" alt="" width="150" height="151" style="left:0px; top:-0.5px; position:relative;"></a>
                                                <div class="caseType">
                                                    <div class="kbn alumi">アルミ</div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1507">HDDを置く台</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1506"><img src="./guide/guid_files/1c63ae6784a92641cdc4d8758d619230.jpg" alt="" width="163" height="150" style="left:-6.5px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1506">外部門扉の敷居レール</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1505"><img src="./guide/guid_files/e15bf3449cf55a716ac9a28f9f84725f.jpg" alt="" width="151" height="150" style="left:-0.5px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1505">レンジ奥隙間のカバー</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1504"><img src="./guide/guid_files/05a17a03d94d7c3789f0a9be301338ac.jpg" alt="" width="152" height="150" style="left:-1px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1504">インターホン設置パネル</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1503"><img src="./guide/guid_files/776b864280c2d4d016295388fe2e5aa9.jpg" alt="" width="150" height="160" style="left:0px; top:-5px; position:relative;"></a>
                                                <div class="caseType">
                                                    <div class="kbn alumi">アルミ</div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1503">アルミ格子ドアの隙間をふさぐ板</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1502"><img src="./guide/guid_files/424303e374eff99fd27e7d751973a312.jpg" alt="" width="150" height="152" style="left:0px; top:-1px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    
                                                    <div class="kbn iron">鉄</div>
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1502">薪ストーブの下に敷く板</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1501"><img src="./guide/guid_files/517c174868a035fd75475f4ff9ca2758.jpg" alt="" width="150" height="150" style="left:0px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1501">膳板補修パーツ板</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1500"><img src="./guide/guid_files/f37467943757a5d6909996fb3f5f99ba.jpg" alt="" width="150" height="151" style="left:0px; top:-0.5px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1500">ベランダの鉢置き</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1499"><img src="./guide/guid_files/53349febd253dfd172fbe5c48a7a7fd6.jpg" alt="" width="151" height="150" style="left:-0.5px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1499">食洗機を置くためのシンクをまたぐ台</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1498"><img src="./guide/guid_files/2331f64ef7be352e4b88e70849ff16d8.jpg" alt="" width="163" height="150" style="left:-6.5px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    <div class="kbn alumi">アルミ</div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1498">車のオリジナルエンブレムプレート</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1495"><img src="./guide/guid_files/94b46ee0d32debfef2a2c79cd75723ec.jpg" alt="" width="153" height="150" style="left:-1.5px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1495">廻り階段のカドの壁補強アングル</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1494"><img src="./guide/guid_files/ef042564bac3f4935cd203ca62d87ba4.jpg" alt="" width="150" height="154" style="left:0px; top:-2px; position:relative;"></a>
                                                <div class="caseType">
                                                    <div class="kbn alumi">アルミ</div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1494">瞬間湯沸かし器の上部木製戸棚遮熱板</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1493"><img src="./guide/guid_files/c6bedb39ac60512870d3c4e5282a35df.jpg" alt="" width="152" height="150" style="left:-1px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1493">当り傷防止板</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1492"><img src="./guide/guid_files/8b0d2104172e02d3a89442686a616d73.jpg" alt="" width="151" height="150" style="left:-0.5px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1492">食洗機の台</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1491"><img src="./guide/guid_files/dbda0d253dfc9e20a28824421d39029b.jpg" alt="" width="166" height="150" style="left:-8px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1491">ガス台奥の隙間埋め</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1490"><img src="./guide/guid_files/c1cd14b9bb971cfb7aac50fa391a28f1.jpg" alt="" width="160" height="150" style="left:-5px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    <div class="kbn alumi">アルミ</div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1490">オーブンレンジの天板</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1489"><img src="./guide/guid_files/1f71f6d435229e451dc649990cc4db52.jpg" alt="" width="150" height="160" style="left:0px; top:-5px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1489">コンロガード</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1488"><img src="./guide/guid_files/6867e6f1b72b2553ea3c3100868fe51e.jpg" alt="" width="150" height="159" style="left:0px; top:-4.5px; position:relative;"></a>
                                                <div class="caseType">
                                                    <div class="kbn alumi">アルミ</div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1488">鮮魚の冷却用板</a>
                                            </div>
                                        </li>
                                        
                                        <li class="heightLine" style="height: 200px;">
                                            <div class="caseImg">
                                                <a href="./case/sozai/entry.html?eid=1487"><img src="./guide/guid_files/34ce348638503fa430b19579934b7998.jpg" alt="" width="156" height="150" style="left:-3px; top:0px; position:relative;"></a>
                                                <div class="caseType">
                                                    
                                                    <div class="kbn stain">ステンレス</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <a href="./case/sozai/entry.html?eid=1487">風呂の排水溝カバー</a>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        

                    </div> 
                   
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="p-2 bg-secondary col-12 text-white text-center"><b>ご注文の流れ</b></div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <img width="100%" src="{{ asset('assets/images/useflow.png')}}">
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>


    <!-- /.container -->

@endsection
