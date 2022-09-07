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
                        <h2 class="comTtl">アルミ大径パイプ</h2>
                        <div class="mainIn">
                            <div class="mB20"><img src="guide/guid_files/main.jpg" alt="軽くて丈夫なアルミ大径管をお届けします 丸パイプ 丸レール付パイプ 角レール付パイプ" width="660"></div>
                            <div class="pipeTopDesc">
                                <p class="pipeTopDescImg"><img src="guide/guid_files/img_pipe_desc.png" alt=""></p>
                                <dl class="pipeTopDescEm">
                                    <dt>おまかせください！</dt>
                                    <dd>アルミパイプのご購入も、板曲げ.com</dd>
                                </dl>
                                <p>
                                    お客様にあったサイズのものをご提供いたします。<br>
                                    豊富な種類をご用意しております。<br>
                                    <span class="txtRed">※</span>色指定、長さ指定をご希望の場合は、お問い合わせください。<br>
                                    <span class="txtRed">※</span>ご不明な点がございましたらお気軽にお問い合わせください。
                                </p>
                            </div>
                            <div class="pipeTopColor">
                                <p class="colorTtl">カラーバリエーション</p>
                                <div class="inner">
                                    <p class="colorEm">陽極酸化膜&amp;透明合成樹脂塗装（ツヤ消し）</p>
                                    <ul class="colorList">
                                        <li>
                                            <p class="img"><img src="guide/guid_files/img_color1.jpg" alt="シルバー"></p>
                                            <p class="txt">シルバー</p>
                                        </li>
                                        <li>
                                            <p class="img"><img src="guide/guid_files/img_color2.jpg" alt="ステンカラー"></p>
                                            <p class="txt">ステンカラー</p>
                                        </li>
                                        <li>
                                            <p class="img"><img src="guide/guid_files/img_color3.jpg" alt="ブロンズ"></p>
                                            <p class="txt">ブロンズ<br><span>（受注生産）</span></p>
                                        </li>
                                        <li>
                                            <p class="img"><img src="guide/guid_files/img_color4.jpg" alt="ブラック"></p>
                                            <p class="txt">ブラック<br><span>（受注生産）</span></p>
                                        </li>
                                    </ul>
                                    <p class="colorCaution">※焼付（アクリル・フッ素）をご希望される場合にはお問合せください。</p>
                                </div>
                            </div>
                            <div class="pipeTopDiff">
                                <p class="diffTxt">アルミはその軽さから、重量あたりの強度が高く航空機・船舶・建築物に幅広く使用されています。また、鉄・ステンレスと比べ、陽極酸化被膜を施した外表面の耐食性は、すでに実証されています。</p>
                                <div class="diffImg">
                                    <p class="diffImgL"><img src="guide/guid_files/img_diff1.jpg" alt="強靭な一体型押出形材 重量あたりの強度（比強度）"></p>
                                    <p class="diffImgR"><img src="guide/guid_files/img_diff2.jpg" alt="比重の比較 同じ体積ならアルミの方がずっと軽い"></p>
                                </div>
                            </div>
                            <div class="pipeTopList pipeType1">
                                <div class="pipeTopListIn">
                                    <div class="pipeListImg"><img src="guide/guid_files/img_pipe_type1.jpg" alt=""></div>
                                    <div class="pipeListTxt">
                                        <h3 class="ttl">丸パイプ</h3>
                                        <p class="txt">一般的な丸型パイプ（管）です。サイズは60φ、89φ、114φ、140φ、165φの5種類取り揃えております。在庫はシルバーとステンカラーの2色です。一体型押出成型によるアルミ形材のため軽くて丈夫な素材となっており、建材、エクステリア、園芸用などに利用されております。</p>
                                    </div>
                                </div>
                                <div class="pipeTopListBtn"><a href="list.html?id=1">丸パイプ一覧へ</a></div>
                            </div>
                            <div class="pipeTopList pipeType2">
                                <div class="pipeTopListIn">
                                    <div class="pipeListImg"><img src="guide/guid_files/img_pipe_type2.jpg" alt=""></div>
                                    <div class="pipeListTxt">
                                        <h3 class="ttl">丸レール付きパイプ</h3>
                                        <p class="txt">レール付の丸型パイプ（管）です。サイズは60φ、89φ、114φ、140φ、165φ、216φの6種類になります。在庫はシルバーとステンカラーの2色（216φは除く）です。建材、エクステリア、園芸用などに利用されておりますが、レールが付いていることで色んな場所に取付けが可能になり用途が広がります。</p>
                                    </div>
                                </div>
                                <div class="pipeTopListBtn"><a href="list.html?id=2">丸レール付きパイプ一覧へ</a></div>
                            </div>
                            <div class="pipeTopList pipeType1">
                                <div class="pipeTopListIn">
                                    <div class="pipeListImg"><img src="guide/guid_files/img_pipe_type5.jpg" alt=""></div>
                                    <div class="pipeListTxt">
                                        <h3 class="ttl">角パイプ</h3>
                                        <p class="txt">一般的な正方形のパイプ（管）です。サイズは75角、100角、125角、150角の4種類を取り揃えております。在庫はシルバーとステンカラーの2色（75角、125角、150角は除く）です。建材、エクステリア、園芸用などに利用されております。</p>
                                    </div>
                                </div>
                                <div class="pipeTopListBtn"><a href="list.html?id=5">角パイプ一覧へ</a></div>
                            </div>
                            <div class="pipeTopList pipeType2">
                                <div class="pipeTopListIn">
                                    <div class="pipeListImg"><img src="guide/guid_files/img_pipe_type3.jpg" alt=""></div>
                                    <div class="pipeListTxt">
                                        <h3 class="ttl">角レール付きパイプ</h3>
                                        <p class="txt">レール付の正方形のパイプ（管）です。サイズは75角、100角、125角、150角の4種類を取り揃えております。在庫はシルバーとステンカラーの2色（75角、125角、150角は除く）です。建材、エクステリア、園芸用などに利用されておりますが、レールが付いていることで色んな場所に取付けが可能になり用途が広がります。</p>
                                    </div>
                                </div>
                                <div class="pipeTopListBtn"><a href="list.html?id=3">角レール付きパイプ一覧へ</a></div>
                            </div>
                            
                            <div class="bnnerBox">
                                <a href="guide/guid_files/contact/"><img src="guide/guid_files/bn-accessories.jpg" alt="付属品、その他の素材をご希望の方はお気軽にお問い合わせください!!"></a>
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
