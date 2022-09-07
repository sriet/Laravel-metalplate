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
                <li>板曲げ.comとは</li>
            </ul>
            <div class="homeBtnList">
              <div class="fL"><a href="./kojin/"><img src="guide/guid_files/btn_kojin.gif" alt="個人のお客様HOME" width="180" height="30"></a></div>
              <div class="fR"><a href=".//houjin/"><img src="./guide/guid_files/btn_houjin.gif" alt="法人のお客様HOME" width="180" height="30"></a></div>
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
        <p><a href=".//bend/bend_draft.html?id=14"><img src="./guide/guid_files/ban_side_punch.gif" alt="パンチング始めました"></a></p>
    </div>
</div>

                    <div id="main">
                        <h2 class="comTtl">板曲げ.comとは</h2>
                        <div id="about" class="mainIn">
                            <img src="./guide/guid_files/p_main.jpg" alt="" width="100%" height="240">
                            <p class="pT20 txtAC"><img src="./guide/guid_files/lead_about.gif" alt="60年余の知識と経験を備えた、金属加工の“プロフェッショナル”" width="504" height="74"></p>
                            <p class="pT20 mB20">私たちは1946年に福井県福井市で創業し、建築材料の調達と加工を事業として歩んで参りました。近年ではお客様のご希望に合わせて大型機械から小型サイズのご注文に対応しています。<br>金属加工に関するお困りごとは、60年余の知識と経験を備えた、金属加工の“プロフェッショナル”にご相談ください！</p>
                            <h3 class="comSTtl mB10">こんな製品が作れます！</h3>
                            <div class="kojinProductList mB20">
                                <ul class="clearfix mB10">
                                    <li><a href="../case/kojin/#11"><img src="./guide/guid_files/btn_plate.gif" alt="看板" width="325" height="70"></a></li>
                                    <li><a href="../case/kojin/#12"><img src="./guide/guid_files/btn_kitchen.gif" alt="キッチン" width="325" height="70"></a></li>
                                </ul>
                                <ul class="clearfix mB10">
                                    <li><a href="../case/kojin/#13"><img src="./guide/guid_files/btn_diy.gif" alt="DIY" width="325" height="70"></a></li>
                                    <li><a href="../case/kojin/#14"><img src="./guide/guid_files/btn_car.gif" alt="自動車・バイク" width="325" height="70"></a></li>
                                </ul>
                                <ul class="clearfix mB10">
                                    <li><a href="../case/kojin/#15"><img src="./guide/guid_files/btn_pc.gif" alt="看板" width="325" height="70"></a></li>
                                    <li><a href="../case/kojin/#16"><img src="./guide/guid_files/btn_box.gif" alt="キッチン" width="325" height="70"></a></li>
                                </ul>
                                <ul class="clearfix">
                                    <li><a href="../case/kojin/#17"><img src="./guide/guid_files/btn_slope.gif" alt="スロープ" width="325" height="70"></a></li>
                                    <li><a href="../case/kojin/#18"><img src="./guide/guid_files/btn_other.gif" alt="その他" width="325" height="70"></a></li>
                                </ul>
                            </div>
                            <h3 class="comSTtl mB10">加工技術に自信があります！</h3>
                            <div class="tech clearfix">
                                <h4><img src="./guide/guid_files/ttl_bend.gif" alt="曲げる" width="100" height="110"></h4>
                                <div class="fR">
                                    <p>わずか１辺10ミリのものを誤差やへこみなく、綺麗に曲げます。<br>もちろん厚みのあるもの（上限●ミリ）もOK。住宅のキッチンや店舗のフロアに合わせた天板のオーダーが好評です。</p>
                                    <ul class="tech_detail clearfix">
                                        <li><a href="../chie/process.html">板曲げ加工各種</a></li>
                                        <li><a href="../chie/case.html">曲げ加工例</a></li>
                                        <li><a href="../technology/">加工技術のご案内</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tech clearfix">
                                <h4><img src="./guide/guid_files/ttl_hole.gif" alt="空ける" width="100" height="110"></h4>
                                <div class="fR">
                                    <p>丸、三角、四角、楕円や幾何学的な模様など、スパッと、気持ちよく、穴を空けます。<br>データや図案をお持ちであれば、当店で取り込み、ご希望通りの位置と形にしてお渡しします。既存にはないビス穴やねじ穴の加工依頼を多くいただいております。</p>
                                    <div class="tech_detail">
                                        <p><a href="../chie/process.html">板曲げ加工各種</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tech clearfix">
                                <h4><img src="./guide/guid_files/ttl_welding.gif" alt="溶接する" width="100" height="110"></h4>
                                <div class="fR">
                                    <p>３辺をつなげて土台を作ったり、四辺をつなげて箱型にしたり、ご希望の形を実現するために溶接で対応します。使用頻度や用途にあわせて強度を測り、溶接の仕方も考慮します。<br>温水タンクや大型荷物運搬トレイなどの実績があります。一番人気は食器洗浄機を載せる台。お客様の自宅のキッチンサイズに合わせて作ります。</p>
                                    <div class="tech_detail">
                                        <p><a href="../chie/weld.html">アルミ板の溶接について</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tech clearfix">
                                <h4><img src="./guide/guid_files/ttl_cut.gif" alt="切る" width="100" height="110"></h4>
                                <div class="fR">
                                    <p>金属板をご希望のサイズにカットします。金属板のごく一部だけを切り落とすこともできます。データや図案をお持ちであれば、そのサイズでもカット可能。ご希望の寸法をお知らせください。</p>
                                    <div class="tech_detail">
                                        <p><a href="../chie/process.html">板曲げ加工各種</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tech clearfix">
                                <h4><img src="./guide/guid_files/ttl_paint.gif" alt="塗る" width="100" height="110"></h4>
                                <div class="fR">
                                    <p>金属板に“色”を付けることができます。当店では色見本を用意しております（ご希望の方はご連絡ください）。お客様のご指定の色でも塗ることができます。主にお店や建物の看板の下地として使われることがあります。</p>
                                    <div class="tech_detail">
                                        <p><a href="../guide/color.html">色・仕上げについて</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="pr clearfix">
                                <img src="./guide/guid_files/p_pr.jpg" alt="私たちにご相談ください！" width="100%" height="355">
                                <p><span class="txt_red">※</span>ご注文から納品の流れはこちらをご覧ください。　<span class="txt_blue">&gt;&gt;</span><a href="../flow">ご注文から納品までの流れ</a></p>
                            </div>
                            <h3 class="comSTtl mB10">当店がご用意している金属板はこちらです</h3>
                            <p>お客様の作りたい製品・商品に合わせて、当店で最適な金属板を選び、加工してお届けします。<br>金属板についてはこちらをご参考ください。 <span class="txt_blue">&gt;&gt;</span><a href="../bend/itazai.html">板材について</a></p>
                            <table class="aboutTb">
                                <tbody><tr>
                                    <th scope="row">&nbsp;</th>
                                    <td class="gray">材質</td>
                                    <td class="gray">特長</td>
                                </tr>
                                <tr>
                                    <th rowspan="2" class="alumi" scope="row">アルミ板</th>
                                    <td>A1100</td>
                                    <td>純度が99%以上のアルミニウム。強度は低め。溶接性や耐食性に優れ、成形性も良い材料。<br>電気器具や腐食への強さから各種容器、建材、台所などの器材、キャップなどに多く使用されています。</td>
                                </tr>
                                <tr>
                                    <td>A5052</td>
                                    <td>アルミ合金の中ではちょうど中間程度の強度を示す代表的な材料。<br>加工や工作に向いた材料。<br>自動車ホイール、船舶、車両材料、建材、飲料缶、板金などに多く使用されています。</td>
                                </tr>
                                <tr>
                                    <th rowspan="2" class="stainless" scope="row">ステンレス板</th>
                                    <td>SUS304</td>
                                    <td>ステンレスの中で最も一般的な素材。磁性は無し。用途に応じてヘアライン・鏡面・２B・縞板等の仕上が可能<br>建物の内外装材の他様々な用途で使用されています。</td>
                                </tr>
                                <tr>
                                    <td>SUS430</td>
                                    <td>SUS304と比較して価格は安いが耐食性や強度面では劣る。<br>磁性有り。建物の内装材を中心に使用されています。</td>
                                </tr>
                                <tr>
                                    <th rowspan="5" class="griddle" scope="row">鉄板</th>
                                    <td>SS400</td>
                                    <td>加工性、溶接性が良好な材料。</td>
                                </tr>
                                <tr>
                                    <td>SPCC</td>
                                    <td>最も一般的な冷間圧延鋼板。加工後は塗装やめっき処理を行わないと錆びます。</td>
                                </tr>
                                <tr>
                                    <td>SPHC</td>
                                    <td>一般的な汎用性の高い熱間圧延鋼板。強度が求められるような用途には向かない。</td>
                                </tr>
                                <tr>
                                    <td>SECC</td>
                                    <td>電機亜鉛めっき鋼板（通称：ボンデ鋼板）。</td>
                                </tr>
                                <tr>
                                    <td>SGCC</td>
                                    <td>溶融亜鉛めっき鋼板。めっき厚は多くなるが防錆力は大きい。</td>
                                </tr>
                            </tbody></table>
                            <div class="aboutAttention">
                                <p class="txt_strong">板の厚み、板のサイズ、板の仕上（ヘアライン・鏡面・縞板など）は、<br>各種取り揃えておりますのでお気軽にお問合せください。</p>
                                <p>※上記以外の材質につきましても対応可能な物もありますので、お気軽にお問合せください。</p>
                            </div>
                            <div class="aboutConsult clearfix">
                                <h2><img src="./guide/guid_files/ttl_consultation.gif" alt="まずは、お気軽にご相談ください。" width="780" height="69"></h2>
                                <p class="consultRead">例えば、こんなことでお困りの方はご相談ください。金属板のプロがお答えします。</p>
                                <ul class="consultList">
                                    <li>金属のオリジナルのパーツを作りたいが作り方がわからない。</li>
                                    <li>自分のキッチンにぴったりおさまる、天板や食洗機の設置台が欲しい。</li>
                                    <li>新商品の試作品を作りたい。</li>
                                </ul>
                                <div class="consultContact clearfix">
                                    <div class="tel">0776-27-8384<span>受付時間：平日9:00～17:00</span></div>
                                    <div class="fax">0776-27-2940</div>
                                    <div class="mail"><a href="../contact/"><img src="./guide/guid_files/btn_mail.gif" alt="メールフォーム" width="207" height="40"></a></div>
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
