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
                <li>ご注文の流れ</li>
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
                        <h2 class="comTtl">ご注文の流れ</h2>
                        <div class="mainIn">
                            <table class="flowTbl step1">
                                <tbody><tr>
                                    <th>STEP<em>1</em><span>お客様からの注文</span></th>
                                    <td>
                                        板曲げ.comよりお客様から注文が入りますと、弊社に注文受付メールが届きます。ご注文内容を確認し、板曲げ製作手配の準備に入ります。
                                        <br><a href="./guide/process.html">&gt;&gt;お見積り/ご注文の手順</a>
                                    </td>
                                </tr>
                            </tbody></table>
                            <div><img src="./guide/guid_files/arrow_pay.gif" alt="" width="230" height="100" class="arrow_pay"></div>
                            <table class="flowTbl step2">
                                <tbody><tr>
                                    <th>STEP<em>2</em><span>入金確認（前払い）<br>発送日のお知らせ</span></th>
                                    <td>前払いをご選択のお客様の場合は先にご入金の確認を行います。<br>ご入金確認後、お客様に正式発送日をお知らせするメールを送信します。後払いのお客様の場合はそのまま工場へ発注となります。<br><span class="txtRed">Webから会員登録されたお客様は、前払いのみとなります。後払いをご希望の場合は、ご相談ください。</span><br>
                                        <a href="./guide/payment.html">&gt;&gt;お支払いについて</a>&nbsp;&nbsp;
                                        <a href="./guide/postage.html">&gt;&gt;送料について</a>
                                    </td>
                                </tr>
                            </tbody></table>
                            <div><img src="./guide/guid_files/arrow_double.gif" alt="" width="185" height="20" class="arrow_double"></div>
                            <table class="flowTbl step3">
                                <tbody><tr>
                                    <th>STEP<em>3</em><span>工場へ発注</span></th>
                                    <td>作業指示書類（出荷手配書、板曲げ図面、梱包品チェックリスト）を作成し、工場へ手配します。<br>
                                    <a href="./factory/">&gt;&gt;加工工場のご案内</a></td>
                                </tr>
                            </tbody></table>
                            <div><img src="./guide/guid_files/arrow_down.gif" alt="" width="126" height="20"></div>
                            <table class="flowTbl step4">
                                <tbody><tr>
                                    <th>STEP<em>4</em><span>板曲げ製作・皮膜</span></th>
                                    <td>お客様の発注通りの板曲げを製作します。<br>板曲げ加工が完了したら、皮膜処理に入ります。</td>
                                </tr>
                            </tbody></table>
                            <div><img src="./guide/guid_files/arrow_down.gif" alt="" width="126" height="20"></div>
                            <table class="flowTbl step5">
                                <tbody><tr>
                                    <th>STEP<em>5</em><span>養生・梱包・発送</span></th>
                                    <td>曲げ加工、皮膜処理済みの製品と付属品を養生し梱包します。養生テープを張り、端部及びコーナー部はダンボールにて保護します。その後配送会社にて発送します。</td>
                                </tr>
                            </tbody></table>
                            <div><img src="./guide/guid_files/arrow_down.gif" alt="" width="126" height="20"></div>
                            <table class="flowTbl step6">
                                <tbody><tr>
                                    <th>STEP<em>6</em><span>発送完了のお知らせ</span></th>
                                    <td>発送完了後、メールにて発送完了をお知らせいたします。</td>
                                </tr>
                            </tbody></table>
                            <div><img src="./guide/guid_files/arrow_down.gif" alt="" width="126" height="20"></div>
                            <table class="flowTbl step7">
                                <tbody><tr>
                                    <th>STEP<em>7</em><span>商品到着</span><span class="txtRed">納品完了</span></th>
                                    <td>お客様が指定されたお届け先に商品が届きましたら、納品完了です。</td>
                                </tr>
                            </tbody></table>
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
