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
                <li>水切りプレート</li>
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
                        <h2 class="comTtl">水切りプレート</h2>
                        <div class="mainIn">
                            <p class="mainv"><img src="https://www.itamage.com/themes/itamage/mizukiri/img/mainv.png" alt="水切りプレート"></p>
                            <div class="mirrorCont">
                                <h3 class="sTtl">水切りプレートの特徴</h3>
                                <p class="read">
                                    ステンレスのため丈夫で錆びません。<br>
                                    水切りとしてだけでなく、調理場の拡張や蓋としてもご利用できます。<br>
                                    お客様のシンクにぴったりの商品をお届けします。<br>
                                    穴なしの対応も可能です。
                                </p><p>
                            </p></div>
                            <div class="mirrorCont">
                                <h3 class="sTtl">水切りプレートの種類</h3>
                                <!-- <p class="read"></p> -->
                                <div class="itemCont">
                                    <ul class="itemList">
                                        <li>
                                            <p class="typeTxt">板タイプ</p>
                                            <img src="https://www.itamage.com/themes/itamage/mizukiri/img/img-mizukiri1.png" alt="">
                                        </li>
                                        <li>
                                            <p class="typeTxt">全周曲げタイプ</p>
                                            <img src="https://www.itamage.com/themes/itamage/mizukiri/img/img-mizukiri2.png" alt="">
                                        </li>
                                        <li>
                                            <p class="typeTxt">オーダータイプ</p>
                                            <img src="https://www.itamage.com/themes/itamage/mizukiri/img/img-mizukiri3.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="sTtl">見積依頼書ダウンロード</h3>
                                <div class="itemCont">
                                    <ul class="fileList">
                                        <li>
                                            <img src="https://www.itamage.com/themes/itamage/mizukiri/img/img_mitsumori1.png" alt="Aタイプ">
                                            <a href="/themes/itamage/mizukiri/file/mitsumori1.xlsx">ダウンロード</a>
                                        </li>
                                        <li>
                                            <img src="https://www.itamage.com/themes/itamage/mizukiri/img/img_mitsumori2.png" alt="Bタイプ">
                                            <a href="/themes/itamage/mizukiri/file/mitsumori2.xlsx">ダウンロード</a>
                                        </li>
                                    </ul>
                                    <div class="btn btn1">
                                        <a href="/contact/">
                                            <dl>
                                                <dt><img src="https://www.itamage.com/themes/itamage/mizukiri/img/icon-pc.png" alt="アイコン"></dt>
                                                <dd>見積依頼、お問い合わせはこちら</dd>
                                            </dl>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="comSTtl mB10">水切りプレート事例紹介</h3>
                            <div class="kojinCaseList">
                                <div class="bx-wrapper"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 200px;"><ul class="js-bxslider2" style="width: 1505%; position: relative; transition-duration: 0s; transform: translate3d(-1330px, 0px, 0px);"><li class="heightLine bx-clone" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1303"><img src="https://www.itamage.com/archives/ecf3d751ba78936dd3c3f340d7bfc529.jpg" alt="" width="150" height="200" style="left:0px; top:-25px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1303">キッチンシンクの水切り網</a>
                                        </div>
                                    </li><li class="heightLine bx-clone" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=32"><img src="https://www.itamage.com/archives/2012.10.10_FB006_1.jpg" alt="" width="200" height="150" style="left:-25px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=32">水切りプレート</a>
                                        </div>
                                    </li><li class="heightLine bx-clone" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1309"><img src="https://www.itamage.com/archives/e589c1feb395c12d866eae6ccc7c657a.jpg" alt="" width="150" height="150" style="left:0px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1309">キッチンシンクカバー</a>
                                        </div>
                                    </li><li class="heightLine bx-clone" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1278"><img src="https://www.itamage.com/archives/2c86446eadb1f7e3da224244a88aa109.jpg" alt="" width="150" height="150" style="left:0px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1278">キッチンシンクプレート</a>
                                        </div>
                                    </li>
                                    <li class="heightLine" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/kojin/entry.html?eid=1157"><img src="https://www.itamage.com/archives/IMG_2116.jpg" alt="" width="200" height="150" style="left:-25px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1157">シンクの蓋</a>
                                        </div>
                                    </li>
                                    <li class="heightLine" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/kojin/entry.html?eid=1345"><img src="https://www.itamage.com/archives/a97cbd1b7dbb0d7ecbc1e0ea65bad775.jpg" alt="" width="180" height="150" style="left:-15px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1345">シンク洗剤ラック</a>
                                        </div>
                                    </li>
                                    <li class="heightLine" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/kojin/entry.html?eid=1389"><img src="https://www.itamage.com/archives/79ece2a28e64ae484eb68e4c78d7ce0e.jpg" alt="" width="189" height="150" style="left:-19.5px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn alumi">アルミ</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1389">キッチンシンクの蓋</a>
                                        </div>
                                    </li>
                                    <li class="heightLine" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1303"><img src="https://www.itamage.com/archives/ecf3d751ba78936dd3c3f340d7bfc529.jpg" alt="" width="150" height="200" style="left:0px; top:-25px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1303">キッチンシンクの水切り網</a>
                                        </div>
                                    </li>
                                    <li class="heightLine" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=32"><img src="https://www.itamage.com/archives/2012.10.10_FB006_1.jpg" alt="" width="200" height="150" style="left:-25px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=32">水切りプレート</a>
                                        </div>
                                    </li>
                                    <li class="heightLine" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1309"><img src="https://www.itamage.com/archives/e589c1feb395c12d866eae6ccc7c657a.jpg" alt="" width="150" height="150" style="left:0px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1309">キッチンシンクカバー</a>
                                        </div>
                                    </li>
                                    <li class="heightLine" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1278"><img src="https://www.itamage.com/archives/2c86446eadb1f7e3da224244a88aa109.jpg" alt="" width="150" height="150" style="left:0px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1278">キッチンシンクプレート</a>
                                        </div>
                                    </li>
                                <li class="heightLine bx-clone" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/kojin/entry.html?eid=1157"><img src="https://www.itamage.com/archives/IMG_2116.jpg" alt="" width="200" height="150" style="left:-25px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1157">シンクの蓋</a>
                                        </div>
                                    </li><li class="heightLine bx-clone" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/kojin/entry.html?eid=1345"><img src="https://www.itamage.com/archives/a97cbd1b7dbb0d7ecbc1e0ea65bad775.jpg" alt="" width="180" height="150" style="left:-15px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1345">シンク洗剤ラック</a>
                                        </div>
                                    </li><li class="heightLine bx-clone" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/kojin/entry.html?eid=1389"><img src="https://www.itamage.com/archives/79ece2a28e64ae484eb68e4c78d7ce0e.jpg" alt="" width="189" height="150" style="left:-19.5px; top:0px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn alumi">アルミ</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1389">キッチンシンクの蓋</a>
                                        </div>
                                    </li><li class="heightLine bx-clone" style="height: 200px; float: left; list-style: none; position: relative; width: 161.25px; margin-right: 5px;">
                                        <div class="caseImg">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1303"><img src="https://www.itamage.com/archives/ecf3d751ba78936dd3c3f340d7bfc529.jpg" alt="" width="150" height="200" style="left:0px; top:-25px; position:relative;"></a>
                                            <div class="caseType">
                                                <div class="kbn stain">ステンレス</div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <a href="https://www.itamage.com/case/sozai/entry.html?eid=1303">キッチンシンクの水切り網</a>
                                        </div>
                                    </li></ul></div></div>
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
