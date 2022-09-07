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
                <li><a href="https://www.itamage.com/">HOME</a></li>
                <li>板曲げ.comとは</li>
            </ul>
            <div class="homeBtnList">
              <div class="fL"><a href="https://www.itamage.com/kojin/"><img src="https://www.itamage.com/themes/itamage/common_img/btn_kojin.gif" alt="個人のお客様HOME" width="180" height="30"></a></div>
              <div class="fR"><a href="https://www.itamage.com/houjin/"><img src="https://www.itamage.com/themes/itamage/common_img/btn_houjin.gif" alt="法人のお客様HOME" width="180" height="30"></a></div>
            </div>
            </div>
                <div class="col-lg-3 col-md-5">
                    @include('home._leftside')
                </div>
            <div class="col-lg-9 col-md-7">
                <div class="card mt-3">
                    <div id="sideInfo" style="display: block;">
    <div class="head">
        <p class="close"><img src="https://www.itamage.com/themes/itamage/common_img/icon-close.png" alt="閉じる"></p>
    </div>
    <div class="cont">
        <p class="mB10"><a href="https://www.itamage.com/mizukiri/"><img src="https://www.itamage.com/themes/itamage/common_img/ban_side_mizukiri.gif" alt="金属オーダー鏡始めました"></a></p>
        <p><a href="https://www.itamage.com/bend/bend_draft.html?id=14"><img src="https://www.itamage.com/themes/itamage/common_img/ban_side_punch.gif" alt="パンチング始めました"></a></p>
    </div>
</div>

                    <div id="main" class="info">
                        <h2 class="comTtl">ログイン</h2>
                        <div id="login" class="mainIn">
                            <p class="pT20 mB10">初回のご注文完了と同時に「会員登録」が完了します。<br>「会員登録はこちら」ボタンをクリックして、お客様情報入力後、そのまま先にお進みください。 </p>
                            <p>次回、ログインする際は「ご登録のメールアドレスもしくは会員ＩＤ」と「パスワード」が必要です。<br>同じメールアドレスを使用して会員登録は行えません。</p>
                            <ul class="memberLogin clearfix">
                                <li class="liMember" style="min-height: 212.333px;">
                                    <h3>会員の方</h3>
                                    <!-- S_FORM_MEMBER_LOGIN -->
                                    <form action="" method="post">
                                        <table>
                                            <tbody><tr>
                                                <th>メールアドレス<br>またはID</th>
                                                <td><input type="text" class="pass-field" value="" name="usr_mail"></td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td><input type="password" class="pass-field" value="" name="usr_pass"></td>
                                            </tr>
                                        </tbody></table>
                                        <p class="txtRed loginErr"></p>
                                        <p class="loginBtn"><input type="image" src="https://www.itamage.com/themes/itamage/mypage/img/btn_login.gif" alt="ログインする" class="inputimage"></p>
                                        <input type="hidden" name="login" value="1">
                                    </form>
                                    <!-- E_FORM_MEMBER_LOGIN -->
                                    <p class="txtAC mB5"><a href="https://www.itamage.com/member/password.html">パスワードを忘れた方はこちら</a></p>
                                </li>
                                <li class="liFirst" style="min-height: 212.333px;">
                                    <h3>初めての方</h3>
                                    <p class="txtAC"><a href="../member/"><img src="https://www.itamage.com/themes/itamage/mypage/img/btn_entry.gif" alt="会員登録はこちらから" width="230" height="40"></a></p>
                                    <p>初回のご注文と同時に会員登録が完了します。<br>会員情報は個人情報保護法に基づき厳守します。</p>
                                    <p class="txtAC"><a href="../guide/member.html">会員登録方法</a></p>
                                </li>
                            </ul>
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
