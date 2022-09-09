<div class="pt-3 pb-3">
    <a href="{{ route('estimate') }}" id="btnCart">
        <img width="100%" src="{{ asset('assets/images/cart_button.png')}}">
    </a>
</div>
<div class="border bg-yellow-thin">
    <div class="p-2 bg-secondary text-white text-center">
        アカウント情報
    </div>
    <div class="text-center bg-white p-2 border-bottom">
        <span>[お客様名]：　ゲスト　様</span>
    </div>
    <div class="row justify-content-center ">
        <div class="col text-center p-2 border-right"><a href="mypage">ログイン</a></div>
        <div class="col text-center p-2"><a href="member">新規会員登録</a></div>
    </div>
</div>
<div class="mt-3 metal-list-box">
    <div class="metal-list-box-header row justify-content-between pl-2 pt-2">
        <div class="col-md-7 text-white">金属加工種類から 見積り作成</div>
        <div class="col-md-auto"><img class="logo" width="85px" src="{{ asset('assets')}}/images/website_logo.png"
                alt="logo" /></div>
    </div>
    <div class="metal-list-box-body">
        <div class="row justify-content-center">
            <div class="col-5 pb-1">
                <a href="/cut?id=1">
                    <img src="{{ asset('assets/images/side_0-1.gif')}}" alt="0-01">
                </a>
            </div>
            <div class="col-5 pb-1">
                <a href="/cut?id=2">
                    <img src="{{ asset('assets/images/side_1-1.gif')}}" alt="1-01"></a>
            </div>
            <div class="col-5 pb-1">
                <a href="/cut?id=3">
                    <img src="{{ asset('assets/images/side_1-2.gif')}}" alt="1-02">
                </a>
            </div>
            <div class="col-5 pb-1">
                <a href="/cut?id=4">
                    <img src="{{ asset('assets/images/side_2-1.gif')}}" alt="2-01">
                </a>
            </div>
            <div class="col-5 pb-1">
                <a href="/cut?id=5">
                    <img src="{{ asset('assets/images/side_2-2.gif')}}" alt="2-02">
                </a>
            </div>
            <div class="col-5 pb-1">
                <a href="/cut?id=6">
                    <img src="{{ asset('assets/images/side_2-3.gif')}}" alt="2-03">
                </a>
            </div>
            <div class="col-5 pb-1">
                <a href="/cut?id=7">
                    <img src="{{ asset('assets/images/side_3-1.gif')}}" alt="3-01">
                </a>
            </div>
            <div class="col-5 pb-1">
                <a href="/cut?id=8">
                    <img src="{{ asset('assets/images/side_4-1.gif')}}" alt="4-01">
                </a>
            </div>
            <div class="col-5 pb-1">
                <a href="/cut?id=9">
                    <img src="{{ asset('assets/images/side_4-2.gif')}}" alt="4-02">
                </a>
            </div>
            <div class="col-5 pb-1">
                <a href="/cut?id=10">
                    <img src="{{ asset('assets/images/side_4-3.gif')}}" alt="4-03">
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5 pb-1">
                <a href="/cut?id=11">
                    <img src="{{ asset('assets/images/side_bend_ita.gif')}}" alt="金属板" width="105" height="60" />
                </a>
            </div>
            <div class="col-5 pb-1">
                <a href="/cut?id=12">
                    <img src="{{ asset('assets/images/side_bend_pan.gif')}}" alt="パンチング" width="105" height="60" />
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9">
                <a class="btn btn-sm btn-warning btn-block m-3">付属品追加</a>
            </div>

        </div>
    </div>
</div>
<div class="mt-1">
    <a href="{{ route('mizukiri') }}">
        <img width="100%" src="{{ asset('assets/images/fax_button.png')}}">
    </a>
</div>
<div class="mt-1">
    <a href="{{ route('alumiboard') }}">
        <img width="100%" src="{{ asset('assets/images/left_2.png')}}">
    </a>
</div>
<div class="mt-1">
    <a href="{{ route('itazai') }}">
        <img width="100%" src="{{ asset('assets/images/left_3.png')}}">
    </a>
</div>
<div class="mt-1">
    <a href="{{ route('pip') }}">
        <img width="100%" src="{{ asset('assets/images/left_4.png')}}">
    </a>
</div>
<div class="mt-1">
    <a href="{{ route('movie') }}">
        <img width="100%" src="{{ asset('assets/images/left_5.png')}}">
    </a>
</div>
<div class="mt-3">
    <a href="{{ route('faq') }}">
        <img width="100%" src="{{ asset('assets/images/left_6.png')}}">
    </a>
</div>
<div class="mt-1">
    <a href="{{ route('faq') }}">
        <img width="100%" src="{{ asset('assets/images/left_7.png')}}">
    </a>
</div>
<div class="mt-1">
    <a href="{{ route('faq') }}">
        <img width="100%" src="{{ asset('assets/images/left_8.png')}}">
    </a>
</div>
<div class="mt-3">
    <a href="">
        <img width="100%" src="{{ asset('assets/images/left_9.png')}}">
    </a>
</div>
<div class="card border-success mt-3">
    <div class="card-header bg-success text-center text-white">
        <h5>ご利用ガイド</h5>
    </div>
    <div class="card-body user-guide-box">
        <ul class="list-group list-unstyled">
            <li><a href="{{url('guide/read.html')}}">ご利用になる前に</a></li>
            <li><a href="{{url('guide/process.html')}}">お見積り/ご注文の手順</a></li>
            <li><a href="{{url('guide/drawing.html')}}">製図システムの使い方</a></li>
            <li><a href="{{url('guide/color.html')}}">色・仕上げについて</a></li>
            <li><a href="{{url('guide/member.html')}}">会員登録・会員ページ</a></li>
            <li><a href="{{url('guide/payment.html')}}">お支払い方法</a></li>
            <li><a href="{{url('guide/postage.html')}}">送料について</a></li>
            <li><a href="{{url('guide/discount.html')}}">大口割引き・クーポン割引き</a></li>
            <li><a href="{{url('guide/warranty.html')}}">保証規定</a></li>
        </ul>
    </div>
</div>