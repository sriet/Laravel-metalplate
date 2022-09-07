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
                <li>アルミ複合板</li>
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
                        <h2 class="comTtl">アルミ複合板</h2>
                        <div class="mainIn">
                            <p class="mainv"><img src="guide/guid_files/mainv.png" alt="アルミ複合板" style="width:100%"></p>
                            <div class="itemContent">
                                <h3 class="sTtl">アルミ複合板とは</h3>
                                <p class="read">表面にアルミニウム、芯材に樹脂を使用した3層からなるアルミ樹脂複合板です。</p>
                            </div>
                            <div class="itemContent">
                                <h3 class="sTtl">特徴</h3>
                                <p class="read">
                                    ・芯材に比重の軽い材料使用することで軽量化が図れます。
                                    <br>・金属と樹脂のサンドイッチ構造で高い平滑性を発揮します。
                                    <br>・木材や鉄などに比べて軽量で腐食に強く、水廻りでも十分使用可能です。
                                    <br>・表面にコーティングが施されているため、耐食性、耐候性優れています。
                                    <br>・不燃材料の認定も取得しており、防火基準もクリアしております。
                                </p>
                            </div>
                            <div class="itemContent">
                                <h3 class="sTtl">用途</h3>
                                <p class="read">看板、内装材、目隠し、キッチンパネル、ドア面材、間仕切板、カーポート、桁カバーなど</p>
                            </div>
                            <div class="itemContent">
                                <h3 class="sTtl">商品紹介</h3>
                                <div class="itemList">
                                    <h4 class="itemListTtl">メタリックステン</h4>
                                    <div class="itemListIn">
                                        <div class="img"><img src="guide/guid_files/img-alumi1.png" alt=""></div>
                                        <div class="cont">
                                            <!-- <p class="txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> -->
                                            <table class="tbl">
                                                <tbody><tr>
                                                    <th>注文可能サイズ</th>
                                                    <td>200mm×200mm〜<br>1,000mm×2,000mm</td>
                                                </tr>
                                                <tr>
                                                    <th>注文可能板厚</th>
                                                    <td>4.0mm</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p class="price">参考価格<span>14,100円</span></p>
                                                        <p class="ref">長さ1,000mm × 幅1,000mm × 板厚4.0mm</p>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                            <p class="btn"><a href="list.html?aid=1">自動見積（サイズ入力画面から見積り）</a></p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="itemList">
                                    <h4 class="itemListTtl">シャンペンメタリック</h4>
                                    <div class="itemListIn">
                                        <div class="img"><img src="guide/guid_files/img-alumi2.png" alt=""></div>
                                        <div class="cont">
                                            <!-- <p class="txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> -->
                                            <table class="tbl">
                                                <tbody><tr>
                                                    <th>注文可能サイズ</th>
                                                    <td>200mm×200mm〜<br>1,000mm×2,000mm</td>
                                                </tr>
                                                <tr>
                                                    <th>注文可能板厚</th>
                                                    <td>4.0mm</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p class="price">参考価格<span>14,100円</span></p>
                                                        <p class="ref">長さ1,000mm × 幅1,000mm × 板厚4.0mm</p>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                            <p class="btn"><a href="list.html?aid=2">自動見積（サイズ入力画面から見積り）</a></p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="itemList">
                                    <h4 class="itemListTtl">都営アイボリー</h4>
                                    <div class="itemListIn">
                                        <div class="img"><img src="guide/guid_files/img-alumi3.png" alt=""></div>
                                        <div class="cont">
                                            <!-- <p class="txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> -->
                                            <table class="tbl">
                                                <tbody><tr>
                                                    <th>注文可能サイズ</th>
                                                    <td>200mm×200mm〜<br>1,000mm×2,000mm</td>
                                                </tr>
                                                <tr>
                                                    <th>注文可能板厚</th>
                                                    <td>4.0mm</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p class="price">参考価格<span>14,100円</span></p>
                                                        <p class="ref">長さ1,000mm × 幅1,000mm × 板厚4.0mm</p>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                            <p class="btn"><a href="list.html?aid=3">自動見積（サイズ入力画面から見積り）</a></p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="itemList">
                                    <h4 class="itemListTtl">アイボリー</h4>
                                    <div class="itemListIn">
                                        <div class="img"><img src="guide/guid_files/img-alumi4.png" alt=""></div>
                                        <div class="cont">
                                            <!-- <p class="txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> -->
                                            <table class="tbl">
                                                <tbody><tr>
                                                    <th>注文可能サイズ</th>
                                                    <td>200mm×200mm〜<br>1,000mm×2,000mm</td>
                                                </tr>
                                                <tr>
                                                    <th>注文可能板厚</th>
                                                    <td>4.0mm</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p class="price">参考価格<span>14,100円</span></p>
                                                        <p class="ref">長さ1,000mm × 幅1,000mm × 板厚4.0mm</p>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                            <p class="btn"><a href="list.html?aid=4">自動見積（サイズ入力画面から見積り）</a></p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="itemList">
                                    <h4 class="itemListTtl">ダークベージュ</h4>
                                    <div class="itemListIn">
                                        <div class="img"><img src="guide/guid_files/img-alumi5.png" alt=""></div>
                                        <div class="cont">
                                            <!-- <p class="txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> -->
                                            <table class="tbl">
                                                <tbody><tr>
                                                    <th>注文可能サイズ</th>
                                                    <td>200mm×200mm〜<br>1,000mm×2,000mm</td>
                                                </tr>
                                                <tr>
                                                    <th>注文可能板厚</th>
                                                    <td>4.0mm</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p class="price">参考価格<span>14,100円</span></p>
                                                        <p class="ref">長さ1,000mm × 幅1,000mm × 板厚4.0mm</p>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                            <p class="btn"><a href="list.html?aid=5">自動見積（サイズ入力画面から見積り）</a></p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="itemList">
                                    <h4 class="itemListTtl">クールグレー</h4>
                                    <div class="itemListIn">
                                        <div class="img"><img src="guide/guid_files/img-alumi6.png" alt=""></div>
                                        <div class="cont">
                                            <!-- <p class="txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> -->
                                            <table class="tbl">
                                                <tbody><tr>
                                                    <th>注文可能サイズ</th>
                                                    <td>200mm×200mm〜<br>1,000mm×2,000mm</td>
                                                </tr>
                                                <tr>
                                                    <th>注文可能板厚</th>
                                                    <td>4.0mm</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p class="price">参考価格<span>14,100円</span></p>
                                                        <p class="ref">長さ1,000mm × 幅1,000mm × 板厚4.0mm</p>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                            <p class="btn"><a href="list.html?aid=6">自動見積（サイズ入力画面から見積り）</a></p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="itemList">
                                    <h4 class="itemListTtl">シルキーホワイト</h4>
                                    <div class="itemListIn">
                                        <div class="img"><img src="guide/guid_files/img-alumi7.png" alt=""></div>
                                        <div class="cont">
                                            <!-- <p class="txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> -->
                                            <table class="tbl">
                                                <tbody><tr>
                                                    <th>注文可能サイズ</th>
                                                    <td>200mm×200mm〜<br>1,000mm×2,000mm</td>
                                                </tr>
                                                <tr>
                                                    <th>注文可能板厚</th>
                                                    <td>4.0mm</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p class="price">参考価格<span>14,100円</span></p>
                                                        <p class="ref">長さ1,000mm × 幅1,000mm × 板厚4.0mm</p>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                            <p class="btn"><a href="list.html?aid=7">自動見積（サイズ入力画面から見積り）</a></p>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="mB10"><a href="./bend/bend_draft.html?id=11"><img src="guide/guid_files/btn_size_n.gif" alt="サイズ入力画面から見積り" width="100%" height="70"></a></p>
                                <ul class="mB20 clearfix">
                                    <li class="fL"><a href="./themes/itamage/alumiboard/fax_quotation.pdf" target="_blank"><img src="guide/guid_files/btn_fax.gif" alt="FAXで見積り" width="100%" height="70"></a></li>
                                    <li class="fR"><a href="cad.html"><img src="guide/guid_files/btn_cad.gif" alt="CADデータで見積り" width="100%" height="70"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
    </div>

</div>
    <!-- /.container -->

@endsection
