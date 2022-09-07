@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')

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
                <li><a href="/">HOME</a></li>
                <li>アルミ大径パイプ</li>
            </ul>
            <div class="homeBtnList">
    <div class="fL"><a href="guide/guid_files/kojin/"><img src="guide/guid_files/btn_kojin.gif" alt="個人のお客様HOME" width="180" height="30"></a></div>
    <div class="fR"><a href="guide/guid_files/houjin/"><img src="guide/guid_files/btn_houjin.gif" alt="法人のお客様HOME" width="180" height="30"></a></div>
 </div>
</div>
        <div class="col-lg-3 col-md-5">
                    @include('home._leftside')
        </div>
<div class="col-lg-9 col-md-7">
                   
 <div class="card mt-3">
    
            <div id="main">
                        <h2 class="comTtl">金属板のご購入</h2>
                        <div id="itazai" class="mainIn">
                            <img src="guide/guid_files/p_main_itazai.jpg" alt="" width="100%" height="240" class="mB20">
                            <ul class="itazaiTab">
                                <li class="top active"><p>金属板トップ</p><span class="arrow"><img src="guide/guid_files/arrow_itazai_tab1.gif" alt=""></span></li>
                                <li class="stain"><a href="itazai_stain.html">ステンレス板</a><span class="arrow"><img src="guide/guid_files/arrow_itazai_tab2.gif" alt=""></span></li>
                                <li class="alumi"><a href="itazai_alumi.html">アルミ板</a><span class="arrow"><img src="guide/guid_files/arrow_itazai_tab3.gif" alt=""></span></li>
                                <li class="iron"><a href="itazai_iron.html">鉄板</a><span class="arrow"><img src="guide/guid_files/arrow_itazai_tab4.gif" alt=""></span></li>
                            </ul>
                            <div class="itazaiCont">
                                <p class="mB20"><img src="guide/guid_files/lead_itazai2.gif" alt="おまかせください！ステンレス・アルミ・鉄の金属板のご購入なら、板曲げ.com"></p>
                                <p class="topEm">お客様のご指定の形・サイズのものをご提供いたします。<br>豊富な材料をご用意しております。</p>
                                <div class="topItaList">
                                    <dl class="topStain">
                                        <dt>ステンレス板</dt>
                                        <dd>
                                            <ul class="heightLine" style="height: 920px;">
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_stain1.jpg" alt="SUS304 HL" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_stain.html#s1" class="bl-bigger">SUS304 HL</a></p>
                                                        <p class="small">髪のように長く連続した研磨目をつけたもの。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_stain2.jpg" alt="SUS304 2B" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_stain.html#s2" class="bl-bigger">SUS304 2B</a></p>
                                                        <p class="small">No2仕上げ材に軽い冷間圧延をしたもの。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_stain3.jpg" alt="SUS304 鏡面#400" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_stain.html#s3" class="bl-bigger">SUS304 鏡面#400</a></p>
                                                        <p class="small">光沢仕上げの代表。2B素地を#400パフで研磨したもの。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_stain4.jpg" alt="SUS304 鏡面#600" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_stain.html#s4" class="bl-bigger">SUS304 鏡面#600</a></p>
                                                        <p class="small">2B素地を#600バフで研磨したもの。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_stain5.jpg" alt="SUS304 鏡面#800" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_stain.html#s5" class="bl-bigger">SUS304 鏡面#800</a></p>
                                                        <p class="small">細かい粒度の研磨剤で研磨後、鏡面用パフで研磨したもの。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_stain6.jpg" alt="SUS304 縞板" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_stain.html#s6" class="bl-bigger">SUS304 縞板</a></p>
                                                        <p class="small">表面に連続した滑り止め用の突起を付けたステンレス板</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_stain8.jpg" alt="SUS304 GP（ノンスリップ）" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_stain.html#s8" class="bl-bigger">SUS304 GP（ノンスリップ）</a></p>
                                                        <p class="small">ステンレス鋼板の表面に縞状の凹凸を施した製品です。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_stain7.jpg" alt="SUS430" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_stain.html#s7" class="bl-bigger">SUS430</a></p>
                                                        <p class="small">「18クロム・ステンレス鋼」と呼ばれ磁性がある。</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="btn"><a href="itazai_stain.html">ステンレス板詳細へ</a></p>
                                        </dd>
                                    </dl>
                                    <dl class="topAlumi">
                                        <dt>アルミ板</dt>
                                        <dd>
                                            <ul class="heightLine" style="height:920px;">
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_alumi1.jpg" alt="生地" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_alumi.html#a1" class="bl-bigger">A1100 生地</a></p>
                                                        <p class="small">仕上げを施していない素地の材料です。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_alumi2.jpg" alt="処理板シルバー" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_alumi.html#a2" class="bl-bigger">処理板シルバー</a></p>
                                                        <p class="small">板にすでにアルマイト処理を施してある材料です。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_alumi7.jpg" alt="処理板ステンカラー" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_alumi.html#a3" class="bl-bigger">処理板ステンカラー</a></p>
                                                        <p class="small">板にすでにアルマイト処理を施してある材料です。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_alumi8.jpg" alt="処理板ブラック" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_alumi.html#a8" class="bl-bigger">処理板ブラック</a></p>
                                                        <p class="small">板にすでにアルマイト処理を施してある材料です。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_alumi2.jpg" alt="電解シルバー" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_alumi.html#a4" class="bl-bigger">電解シルバー</a></p>
                                                        <p class="small">生地の板に後からアルマイト処理を施した材料です。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_alumi7.jpg" alt="電解ステンカラー" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_alumi.html#a5" class="bl-bigger">電解ステンカラー</a></p>
                                                        <p class="small">生地の板に後からアルマイト処理を施した材料です。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_alumi9.jpg" alt="パンチング" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_alumi.html#a10" class="bl-bigger">パンチング</a></p>
                                                        <p class="small">パンチングプレスの金型で穴開け加工をした板です。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_alumi5.jpg" alt="A5052 生地" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_alumi.html#a7" class="bl-bigger">A5052 生地</a></p>
                                                        <p class="small">アルミ合金の中で中程度の強度をもった代表的な材料。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_alumi6.jpg" alt="A5052縞板" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_alumi.html#a9" class="bl-bigger">A5052 縞板</a></p>
                                                        <p class="small">圧延によって表面に連続した滑り止め用の突起を付けたアルミ板。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_alumi4.jpg" alt="焼付" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_alumi.html#a6" class="bl-bigger">焼付</a></p>
                                                        <p class="small">生地の板に後から焼付塗装を施した材料です。</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="btn"><a href="itazai_alumi.html">アルミ板詳細へ</a></p>
                                        </dd>
                                    </dl>
                                    <dl class="topAlumi">
                                        <dt>鉄板</dt>
                                        <dd>
                                            <ul class="heightLine" style="height:920px;>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_iron1.jpg" alt="SPCC" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_iron.html#i1" class="bl-bigger">SPCC</a></p>
                                                        <p class="small">錆びやすいので、加工後はメッキや塗装が必要です。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_iron2.jpg" alt="SPHC-P" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_iron.html#i2" class="bl-bigger">SPHC-P</a></p>
                                                        <p class="small">SPCCと比べると、板厚精度・表面粗さが劣ります。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_iron3.jpg" alt="SECC" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_iron.html#i3" class="bl-bigger">SECC</a></p>
                                                        <p class="small">鉄板に電気を介して亜鉛メッキを行ったものです。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_iron3.jpg" alt="SEHC" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_iron.html#i7" class="bl-bigger">SEHC</a></p>
                                                        <p class="small">鉄板に電気を介して亜鉛メッキを行ったものです。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_iron4.jpg" alt="SGCC" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_iron.html#i4" class="bl-bigger">SGCC</a></p>
                                                        <p class="small">耐食・耐久性に優れている板です。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_iron4.jpg" alt="SGHC" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_iron.html#i8" class="bl-bigger">SGHC</a></p>
                                                        <p class="small">耐食・耐久性に優れている板です。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_iron5.jpg" alt="ZAM鋼板" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_iron.html#i5" class="bl-bigger">ZAM鋼板</a></p>
                                                        <p class="small">高耐食溶融メッキ鋼板のことで錆びに強い材料。</p>
                                                    </div>
                                                </li>
                                                <li class="js-biggerlink bl-hot" style="cursor: pointer;">
                                                    <p class="img"><img src="guide/guid_files/p_iron6.jpg" alt="縞鋼板" width="80"></p>
                                                    <div class="list">
                                                        <p class="ttl"><a href="itazai_iron.html#i6" class="bl-bigger">縞鋼板</a></p>
                                                        <p class="small">圧延によって表面に連続した滑り止め用の突起を付けた鋼板</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="btn"><a href="itazai_iron.html">鉄板詳細へ</a></p>
                                        </dd>
                                    </dl>
                                </div>
                                <ul class="topCaution">
                                    <li><span class="txtRed">※</span>材質・表面処理・サイズ・板厚はお気軽に「<a href="../contact/">お問い合わせフォーム</a>」よりお問い合わせください。</li>
                                    <li><span class="txtRed">※</span>切抜き・穴あけ（丸/角）・面取りのご要望、また大量のご注文の場合は、「<a href="../contact/">お問い合わせフォーム</a>」よりお見積をご依頼ください。</li>
                                </ul>
                            </div>
                            <div>
                                <p class="mB10"><a href="./bend/bend_draft.html?id=11"><img src="guide/guid_files/btn_size_n.gif" alt="サイズ入力画面から見積り" width="100%" height="70"></a></p>
                                <ul class="mB20 clearfix">
                                    <li class="fL"><a href="./themes/itamage/bend/fax_quotation.pdf" target="_blank"><img src="guide/guid_files/btn_fax.gif" alt="FAXで見積り" width="350" height="70"></a></li>
                                    <li class="fR"><a href="cad.html"><img src="guide/guid_files/btn_cad.gif" alt="CADデータで見積り" width="350" height="70"></a></li>
                                </ul>
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
