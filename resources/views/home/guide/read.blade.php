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
                <div class="col-lg-3 col-md-5">
                    @include('home._leftside')
                </div>
                <div class="col-lg-9 col-md-7">
                   
                    <div class="card mt-3">
                        <h2 class="comTtl">ご利用ガイド</h2>
                        <div class="mainIn">
                            <div class="guideList">
                                <ul class="clearfix mB20">
                                    <li>
                                        <a href="{{url('guide/read.html')}}">ご利用になる前に<span>ご利用になる前に、板曲げ製図・お見積・ご注文会員サービス・割引サービスなどについてご確認ください。</span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('guide/process.html')}}">お見積り/ご注文の手順<span>板曲げのお見積からご注文までの流れをご確認いただけます。会員様のみのサービスもございますのでご注意ください。</span></a>
                                    </li>
                                </ul>
                                <ul class="clearfix mB20">
                                    <li>
                                        <a href="{{url('guide/drawing.html')}}">製図システムの使い方<span>定型から見積を作成する際の製図画面のご説明しています。寸法などを入力して「見積リスト」を作成することができます。</span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('guide/color.html')}}">色・仕上げについて<span>アルミのカラーバリエーションとステンレスの仕上げバリエーションの種類。アルミとステンレスの用途・特徴をご確認ください。</span></a>
                                    </li>
                                </ul>
                                <ul class="clearfix mB20">
                                    <li>
                                        <a href="{{url('guide/member.html')}}">会員登録・会員ページ<span>会員登録と会員ページについてご説明しています。初めてのお客様は、会員登録についてご確認ください。</span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('guide/payment.html')}}">お支払い方法<span>お支払い方法は、銀行振込・代金引換・クレジットカード決済・コンビニ決済からお選びいただけます。</span></a>
                                    </li>
                                </ul>
                                <ul class="clearfix mB20">
                                    <li>
                                        <a href="{{url('guide/postage.html')}}">送料について<span>定型曲げの送料は、製品の重量によって算出しております。</span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('guide/discount.html')}}">数量割引き・クーポン割引き<span>注文数によって割引率が変わる「数量割引」。会員限定、キャンペーンなどのクーポン割引きを行っています。</span></a>
                                    </li>
                                </ul>
                                <ul class="clearfix">
                                    <li>
                                        <a href="{{url('guide/warranty.html')}}">保証規定<span>当社が日本国内において販売する商品の保証は、全てこの保証規定に基づきます。</span></a>
                                    </li>
                                </ul>
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
