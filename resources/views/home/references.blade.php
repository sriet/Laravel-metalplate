@extends('layouts.home')

@section('title', 'References')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> References </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active"> References </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row">
                <!-- Post Content Column -->
               
                <div id="content">
            <div class="contentMain">
                <div class="clearfix">
                    <div id="main">
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
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection
