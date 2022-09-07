@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

<!--footer starts from here-->

<!-- Contact Us -->
<div class="touch-line">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card footer-user-flow-box">
                    <div class="card-header bg-dark text-white">ご利用ガイド</div>
                    <div class="card-body">
                            <p class="text-secondary">当サイトは、金属加工をインターネットで製図しながら見積り・注文できるオンライン板曲げオーダーサイトです。</p>
                            <table class="table table-bordered">
                                <tbody><tr>
                                    <td><a class="text-dark" href="{{url('guide/read.html')}}">ご利用になる前に</a></td>
                                    <td><a class="text-dark" href="{{url('guide/process.html')}}">お見積り/ご注文の手順</a></td>
                                </tr>
                                <tr>
                                    <td><a class="text-dark" href="{{url('guide/drawing.html')}}">製図システムの使い方</a></td>
                                    <td><a class="text-dark" href="{{url('guide/color.html')}}">色・仕上げについて</a></td>
                                </tr>
                                <tr>
                                    <td><a class="text-dark" href="{{url('guide/member.html')}}">会員登録・会員ページ</a></td>
                                    <td><a class="text-dark" href="{{url('guide/payment.html')}}">お支払い方法</a></td>
                                </tr>
                                <tr>
                                    <td><a class="text-dark" href="{{url('guide/postage.html')}}">送料について</a></td>
                                    <td><a class="text-dark" href="{{url('guide/discount.html')}}">大口割引き・クーポン割引き</a></td>
                                </tr>
                                <tr>
                                    <td><a class="text-dark" href="{{url('guide/warranty.html')}}">保証規定</a></td>
                                    <td class="none">&nbsp;</td>
                                </tr>
                            </tbody></table>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">発送日のご案内</div>
                    <div class="card-body">
                        <table class="table table-bordered small">
                            <tbody>
                                <tr class="thead-light">
                                    <th>アルミ生地材</th>
                                    <td>3日後</td>
                                    <th>アルミ処理板 シルバー色</th>
                                    <td>3日後</td>
                                </tr>
                                <tr class="thead-light">
                                    <th>アルミ処理板 ステンカラー色</th>
                                    <td>3日後</td>
                                    <th>アルミ電解 シルバー色</th>
                                    <td>8日後</td>
                                </tr>
                                <tr class="thead-light">
                                    <th>アルミ電解 ステンカラー色</th>
                                    <td>9日後</td>
                                    <th>アルミ焼付け 塗装色</th>
                                    <td>8日後</td>
                                </tr>
                                <tr class="thead-light">
                                    <th>ステンレス(HLヘアライン)</th>
                                    <td>6日後</td>
                                    <th>ステンレス(2B)</th>
                                    <td>6日後</td>
                                </tr>
                                <tr class="thead-light">
                                    <th>ステンレス鏡面仕上げ<br>＃400</th>
                                    <td>7日後</td>
                                    <th>ステンレス鏡面仕上げ<br>＃600・＃800</th>
                                    <td>15日後</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="small text-dark">
                            ※注文日の14：00までは当日注文とします。14：00以降は翌日注文日とさせていただきます。
                            <br>※溶接は上記記載の日数より1日追加となります。
                            <br>※曲げ加工は上記記載の日数より1日追加となります。
                            <br>※代金引換は上記記載の日数より1日追加となります。
                            <br>※土・日・祝日は除きます。
                        </p>
                    </div>
                </div>
            </div>
            <!--div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">営業カレンダー</div>
                    <div class="card-body"></div>
                </div>
            </div-->
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container bottom_border">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6 col">
                <img width="100%" src="{{ asset('assets/images/footer_left_logo.png')}}">
            </div>
            <div class="col-lg-7 col-md-6 col-sm-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2"></h5>
                <!--headin5_amrc-->
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col">
                        <ul class="footer_ul_amrc">
                            <li><a href="{{ route('home') }}"><i class="fas fa-long-arrow-alt-right"></i>金属加工.comとは</a></li>
                            <li><a href="{{ route('aboutus') }}"><i class="fas fa-long-arrow-alt-right"></i>ご利用ガイド</a></li>
                            <li><a href="{{ route('references') }}"><i class="fas fa-long-arrow-alt-right"></i>ご利用の流れ </a></li>
                            <li><a href="{{ route('contact') }}"><i class="fas fa-long-arrow-alt-right"></i>事例紹介</a></li>
                            <li><a href="{{ route('faq') }}"><i class="fas fa-long-arrow-alt-right"></i>お問い合わせ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col">
                        <ul class="footer_ul_amrc">
                            <li><a href="{{ route('home') }}"><i class="fas fa-long-arrow-alt-right"></i>金属加工.comとは</a></li>
                            <li><a href="{{ route('aboutus') }}"><i class="fas fa-long-arrow-alt-right"></i>ご利用ガイド</a></li>
                            <li><a href="{{ route('references') }}"><i class="fas fa-long-arrow-alt-right"></i>ご利用の流れ </a></li>
                            <li><a href="{{ route('contact') }}"><i class="fas fa-long-arrow-alt-right"></i>事例紹介</a></li>
                            <li><a href="{{ route('faq') }}"><i class="fas fa-long-arrow-alt-right"></i>お問い合わせ</a></li>
                        </ul>
                    </div>
                </div>

                <!--footer_ul_amrc ends here-->
            </div>
        </div>
    </div>
    <div class="container">
        <p class="copyright text-center">Copyright@ {{ $setting->company }} All Rights Reserved.</p>
    </div>
</footer>
