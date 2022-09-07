@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('css')
@endsection

@section('javascript')
@endsection

@section('content')

@include('home._slider')
<div class="p-2 bg-ruam text-white row justify-content-md-center">
    <div class="col-md-auto">
        <img class="home-middle-logo" width="100px" src="{{ asset('assets')}}/images/website_logo.png" alt="logo" />
    </div>
    <div class="col col-lg-4">
        <h4>金属加工.comが選べる理由</h4>
    </div>
</div>
<div class="p-3 bg-orange text-white row justify-content-md-center">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <img width="100%" src="{{ asset('assets/images/need_reason.png')}}" />
        </div>
        <div class="col-1"></div>
    </div>
</div>
<!-- Page Content -->
<div class="container">
    <!-- About Section -->
    <div class="home-main">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                @include('home._leftside')
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="card mt-3">
                    <div class="blog-main">
                        <div class="container">
                            <div id="sideInfo" style="display: block;">
                                <div class="head">
                                    <p class="close"><img
                                            src="https://www.itamage.com/themes/itamage/common_img/icon-close.png"
                                            alt="閉じる"></p>
                                </div>
                                <div class="cont">
                                    <p class="mB10"><a href="https://www.itamage.com/mizukiri/"><img
                                                src="https://www.itamage.com/themes/itamage/common_img/ban_side_mizukiri.gif"
                                                alt="金属オーダー鏡始めました"></a></p>
                                    <p><a href="https://www.itamage.com/bend/bend_draft.html?id=14"><img
                                                src="https://www.itamage.com/themes/itamage/common_img/ban_side_punch.gif"
                                                alt="パンチング始めました"></a></p>
                                </div>
                            </div>
                            <div id="breadcrumbs">
                                <ul class="clearfix">
                                    <li><a href="../">HOME</a></li>
                                    <li>カートを確認</li>
                                </ul>
                                <div class="homeBtnList">
                                    <div class="fL"><a href="https://www.itamage.com/kojin/"><img
                                                src="https://www.itamage.com/themes/itamage/common_img/btn_kojin.gif"
                                                alt="個人のお客様HOME" width="180" height="30"></a></div>
                                    <div class="fR"><a href="https://www.itamage.com/houjin/"><img
                                                src="https://www.itamage.com/themes/itamage/common_img/btn_houjin.gif"
                                                alt="法人のお客様HOME" width="180" height="30"></a></div>
                                </div>
                            </div>
                        </div>

                        <div id="main">
                            <h2 class="comTtl">カートを確認</h2>
                            <div class="mainIn">
                                <div class="mB20"><img src="https://www.itamage.com/themes/itamage/bend/img/p_step3.gif"
                                        alt="ステップ3 カートを確認" width="660" height="70"></div>
                                <h3 class="comSTtl mB10">カート</h3>

                                <div class="pT15 mB30">
                                    カートには何も入っていません
                                </div>
                                <div class="bendEstimateBtn clearfix">
                                    <div class="fL mR20"><a href="https://www.itamage.com/bend/"><img
                                                src="https://www.itamage.com/themes/itamage/bend/img/btn_back_bend.gif"
                                                alt="他の定型曲げを選ぶ" width="180" height="52"></a></div>
                                    <div class="fL mR20">
                                        <form action="attachment.html" method="post"><input type="image"
                                                src="https://www.itamage.com/themes/itamage/bend/img/btn_option2.gif"
                                                alt="付属品を追加する"><input type="hidden" name="item_ren" value="null"></form>
                                    </div>
                                </div>


                                <ul class="chooseList">
                                    <li><a href="https://www.itamage.com/mirror/">金属鏡を選ぶ</a></li>
                                    <li><a href="https://www.itamage.com/pipe/">アルミ大径管を選ぶ</a></li>
                                    <li><a href="https://www.itamage.com/alumiboard/">アルミ複合板を選ぶ</a></li>
                                    <li><a href="https://www.itamage.com/polycarbonate/">ポリカーボネート板を選ぶ</a></li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @include('home._stepside')
        <!-- /.row -->
    </div>
</div>


<!-- /.container -->

@endsection