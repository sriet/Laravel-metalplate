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
                        <div id="sideInfo" style="display: block;">
    <div class="head">
        <p class="close"><img src="./guide/guid_files/icon-close.png" alt="閉じる"></p>
    </div>
    <div class="cont">
        <p class="mB10"><a href=".//mizukiri/"><img src="./guide/guid_files/ban_side_mizukiri.gif" alt="金属オーダー鏡始めました"></a></p>
        <p><a href=".//bend/bend_draft.html?id=14"><img src="./guide/guid_files/ban_side_punch.gif" alt="パンチング始めました"></a></p>
    </div>
</div>
                        <div class="card-header bg-ruam text-white"><h3>定型曲げ見積作成</h3></div>
                        <div class="card-body">
                            <div class="container">
                                <section class="signup-step-container">
                                    <div class="container">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-12">
                                                <div class="wizard">
                                                    <div class="wizard-inner">
                                                        <div class="connecting-line"></div>
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active">
                                                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span><i>金属板を選択</i></a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>寸法・長さ・ 数量の入力</i></a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>カートを確認</i></a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>ご注文手続きへ</i></a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <form role="form" action="" class="login-box">
                                                        <div class="tab-content" id="main_form">
                                                            <div class="tab-pane active" role="tabpanel" id="step1">
                                                                <div class="card">
                                                                    <div class="card-header bg-secondary text-white"><h4>曲げの数から選ぶ</h4></div>
                                                                    <div class="card-body">
                                                                        <ul class="d-flex justify-content-start list-unstyled">
                                                                            <li><img src="{{ asset('assets/images/ttl_bend_list0.gif')}}" alt="箱曲げ" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></li>
                                                                            <li class="ml-1"><a href="#"><img src="{{ asset('assets/images/bend_list0_1.gif')}}" alt="箱曲げ(0-1)" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></a></li>
                                                                        </ul>
                                                                        <ul class="d-flex justify-content-start list-unstyled">
                                                                            <li><img src="{{ asset('assets/images/ttl_bend_list1.gif')}}" alt="1角曲げ" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></li>
                                                                            <li class="ml-1"><a href="#"><img src="{{ asset('assets/images/bend_list1_1.gif')}}" alt="1角曲げ(1-1)" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></a></li>
                                                                            <li class="ml-1"><a href="#"><img src="{{ asset('assets/images/bend_list1_2.gif')}}" alt="1角曲げ(1-2)" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></a></li>
                                                                        </ul>
                                                                        <ul class="d-flex justify-content-start list-unstyled">
                                                                            <li><img src="{{ asset('assets/images/ttl_bend_list2.gif')}}" alt="2角曲げ" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></li>
                                                                            <li class="ml-1"><a href="#"><img src="{{ asset('assets/images/bend_list2_1.gif')}}" alt="2角曲げ(2-1)" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></a></li>
                                                                            <li class="ml-1"><a href="#"><img src="{{ asset('assets/images/bend_list2_2.gif')}}" alt="2角曲げ(2-2)" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></a></li>
                                                                            <li class="ml-1"><a href="#"><img src="{{ asset('assets/images/bend_list2_3.gif')}}" alt="2角曲げ(2-3)" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></a></li>
                                                                        </ul>
                                                                        <ul class="d-flex justify-content-start list-unstyled">
                                                                            <li><img src="{{ asset('assets/images/ttl_bend_list3.gif')}}" alt="3角曲げ" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></li>
                                                                            <li class="ml-1"><a href="#"><img src="{{ asset('assets/images/bend_list3_1.gif')}}" alt="2角曲げ(3-1)" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></a></li>
                                                                        </ul>
                                                                        <ul class="d-flex justify-content-start list-unstyled">
                                                                            <li><img src="{{ asset('assets/images/ttl_bend_list4.gif')}}" alt="4角曲げ" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></li>
                                                                            <li class="ml-1"><a href="#"><img src="{{ asset('assets/images/bend_list4_1.gif')}}" alt="4角曲げ(4-1)" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></a></li>
                                                                            <li class="ml-1"><a href="#"><img src="{{ asset('assets/images/bend_list4_2.gif')}}" alt="4角曲げ(4-2)" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></a></li>
                                                                            <li class="ml-1"><a href="#"><img src="{{ asset('assets/images/bend_list4_3.gif')}}" alt="4角曲げ(4-3)" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></a></li>
                                                                        </ul>
                                                                        <ul class="d-flex justify-content-start list-unstyled">
                                                                            <li><img src="{{ asset('assets/images/ttl_bend_list_ita.gif')}}" alt="4角曲げ" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></li>
                                                                            <li class="ml-1 next-step">
                                                                                <a href="{{route('cut')}}">
                                                                                    <img src="{{ asset('assets/images/bend_list_ita_1.gif')}}" alt="金属板" width="125" height="120" data-xblocker="passed" style="visibility: visible;">
                                                                                </a>
                                                                            </li>
                                                                            <li class="ml-1"><a href="#"><img src="{{ asset('assets/images/bend_list_ita_2.gif')}}" alt="パンチング" width="125" height="120" data-xblocker="passed" style="visibility: visible;"></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" role="tabpanel" id="step2">

                                                            </div>
                                                            <div class="tab-pane" role="tabpanel" id="step3">
                                                                <h4 class="text-center">Step 3</h4>
                                                            </div>
                                                            <div class="tab-pane" role="tabpanel" id="step4">
                                                                <h4 class="text-center">Step 4</h4>

                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

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
