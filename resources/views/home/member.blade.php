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
                <li><a href="./">HOME</a></li>
                <li>板曲げ.comとは</li>
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

                   <div id="main" class="info">
                        <h2 class="comTtl">新規会員登録</h2>
                        <div id="member_regist" class="mainIn">
                        
                            <form action="" method="post">
                                <p class="pT20 mB10">当サービスをご利用いただくには会員登録が必要です。<br>以下の必要事項をご入力の上、承諾事項をご一読いただき、同意される方のみお申し込みください。</p>
                                <h3 class="comSTtl mB20">お客様情報の入力</h3>
                                <table>
    <tbody><tr>
        <th>個人／法人 <span class="need">[必須]</span></th>
        <td>
            <input type="radio" name="kbn" id="kojin" value="個人のお客様" onclick="return chg_kbn('個人のお客様');"><label for="kojin">個人のお客様</label>
            <input type="radio" name="kbn" id="houjin" value="法人のお客様" onclick="return chg_kbn('法人のお客様');"><label for="houjin">法人のお客様</label>
            <input type="hidden" name="field[]" value="kbn">
            <input type="hidden" name="kbn:validator[]" value="required">
            
        </td>
    </tr>
    <tr>
        <th>氏名 <span class="need">[必須]</span></th>
        <td>
            <input type="text" name="name" value="" class="inpsize2">
            <input type="hidden" name="field[]" value="name">
            <input type="hidden" name="name:validator[]" value="required">
            <input type="hidden" name="name:validator[]" value="max_120">
            <input type="hidden" name="name:c" value="K">
            
            
        </td>
    </tr>
    <tr>
        <th>氏名（フリガナ）<span class="need">[必須]</span></th>
        <td>
            <input type="text" name="kana" value="" class="inpsize2"> <span class="notes">全角カタカナ</span>
            <input type="hidden" name="field[]" value="kana">
            <input type="hidden" name="kana:validator[]" value="required">
            <input type="hidden" name="kana:validator[]" value="kana">
            <input type="hidden" name="kana:validator[]" value="max_120">
            <input type="hidden" name="kana:c" value="KC">
            
            
            
        </td>
    </tr>
    <tr class="compTr" style="display: none;">
        <th>会社名</th>
        <td>
            <input type="text" name="company_name" value="" class="inpsize2">
            <input type="hidden" name="field[]" value="company_name">
            <input type="hidden" name="company_name:validator[]" value="max_120">
            <input type="hidden" name="company_name:c" value="K">
            
        </td>
    </tr>
    <tr class="compTr" style="display: none;">
        <th>会社名（フリガナ）</th>
        <td>
            <input type="text" name="company_kana" value="" class="inpsize2"> <span class="notes">全角カタカナ</span>
            <input type="hidden" name="field[]" value="company_kana">
            <input type="hidden" name="company_kana:validator[]" value="max_120">
            <input type="hidden" name="company_kana:validator[]" value="kana">
            <input type="hidden" name="company_kana:c" value="KC">
            
            
        </td>
    </tr>
    <tr class="compTr" style="display: none;">
        <th>業種</th>
        <td>
            <select name="gyoshu" id="">
                <option value="">業種を選んでください。</option>
                <option value="1">ハウスメーカー</option><option value="2">マンションメーカー</option><option value="4">工務店</option><option value="5">設計事務所</option><option value="6">販売工事店</option><option value="7">ゼネコン/サブコン</option><option value="8">リフォーム</option><option value="9">デベロッパー</option><option value="10">建材</option><option value="11">太陽電池/太陽光発電システム</option><option value="12">その他新エネルギーシステム</option><option value="13">照明</option><option value="14">設備</option><option value="15">食品</option><option value="16">製造</option><option value="17">自動車</option><option value="18">鋼材/鉄鋼業</option><option value="19">印刷/広告</option><option value="20">造園</option><option value="21">IT</option><option value="22">医療/福祉</option><option value="23">量販店</option><option value="24">レジャー/イベント</option><option value="25">学校/研究所</option><option value="26">官公庁/自治体</option><option value="3">その他(自由記入)</option>
            </select>
            <span class="notes">その他：</span>
            <input type="text" name="gyoshu_sonota" value="" class="inpsize5">
            <input type="hidden" name="field[]" value="gyoshu">
            <input type="hidden" name="field[]" value="gyoshu_sonota">
            <input type="hidden" name="gyoshu_sonota:validator[]" value="max_120">
            
        </td>
    </tr>
    <tr class="compTr" style="display: none;">
        <th>部署名</th>
        <td>
            <input type="text" name="busho" value="" class="inpsize2">
            <input type="hidden" name="field[]" value="busho">
            <input type="hidden" name="busho:validator[]" value="max_120">
            
        </td>
    </tr>
    <tr class="compTr" style="display: none;">
        <th>御社HP</th>
        <td>
            <input type="text" name="url" value="" class="inpsize4"> <span class="notes">半角英数字</span>
            <input type="hidden" name="field[]" value="url">
            <input type="hidden" name="url:validator[]" value="url">
            
        </td>
    </tr>
    <tr>
        <th>郵便番号 <span class="need">[必須]</span></th>
        <td>
            〒<input type="text" name="user_zip" class="inpsize3" size="8" maxlength="8" style="ime-mode: disabled;" value="" onchange="AjaxZip3.zip2addr('user_zip','','user_pref','user_address1');"> <span class="notes"> 半角数字（例：010-0000）</span> <a href="javascript:void(0)" onclick="AjaxZip3.zip2addr('user_zip','','user_pref','user_address1'); return false;"><img src="./guide/guid_files/btn_address.gif" alt="住所表示" width="57" height="20"></a>
            <input type="hidden" name="field[]" value="user_zip">
            <input type="hidden" name="user_zip:validator[]" value="required">
            <input type="hidden" name="user_zip:validator[]" value="zip">
            
            
        </td>
    </tr>
    <tr>
        <th>都道府県 <span class="need">[必須]</span></th>
        <td>
            <select name="user_pref">
                <option value="">選択してください</option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
            </select>
            <input type="hidden" name="field[]" value="user_pref">
            <input type="hidden" name="user_pref:validator[]" value="required">
            
        </td>
    </tr>
    <tr>
        <th rowspan="2">住所 <span class="need">[必須]</span></th>
        <td>
            <input type="text" name="user_address1" value="" class="inpsize4">
            <br><span class="notes">市区町村以下</span>
            <input type="hidden" name="field[]" value="user_address1">
            <input type="hidden" name="user_address1:validator[]" value="required">
            <input type="hidden" name="user_address1:validator[]" value="max_120">
            
            
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" name="user_address2" value="" class="inpsize4">
            <br><span class="notes">ビル・マンション・アパート</span>
            <input type="hidden" name="field[]" value="user_address2">
            <input type="hidden" name="user_address2:validator[]" value="max_120">
            
        </td>
    </tr>
    <tr>
        <th>電話番号 <span class="need">[必須]</span></th>
        <td>
            <input type="text" name="tel" value="" class="inpsize5"> <span class="notes">半角数字（携帯電話でも可）（例：0776-00-0000）</span>
            <input type="hidden" name="field[]" value="tel">
            <input type="hidden" name="tel:validator[]" value="required">
            <input type="hidden" name="tel:validator[]" value="tel">
            
            
        </td>
    </tr>
    <tr>
        <th>FAX番号</th>
        <td>
            <input type="text" name="fax" value="" class="inpsize5"> <span class="notes">半角数字（例：0776-00-0000）</span>
            <input type="hidden" name="field[]" value="fax">
            <input type="hidden" name="fax:validator[]" value="tel">
            
        </td>
    </tr>
    <tr>
        <th>メールアドレス <span class="need">[必須]</span></th>
        <td>
            <p class="mB5"><input type="text" name="email" value="" class="inpsize4"> <span class="notes">半角英数字</span></p>
            <p><input type="text" name="email2" value="" class="inpsize4">
            <br><span class="notes">※確認のため再入力して下さい</span>
            <br><span class="notes">※携帯のメールアドレスは使用できません</span>
            </p>
            <input type="hidden" name="field[]" value="email">
            <input type="hidden" name="email:validator[]" value="required">
            <input type="hidden" name="email:validator[]" value="email">
            <input type="hidden" name="email:validator[]" value="mobile">
            <input type="hidden" name="email:validator[]" value="memberAlready">
            
            
            
            
            <input type="hidden" name="field[]" value="email2">
            <input type="hidden" name="email2:validator[]" value="required">
            <input type="hidden" name="email2:validator[]" value="email">
            <input type="hidden" name="email2:validator[]" value="equal_email">
            
            
            
        </td>
    </tr>
    <tr>
        <th>パスワード <span class="need">[必須]</span></th>
        <td>
            <p class="mB5"><input type="password" name="pass" value="" class="inpsize2"> <span class="notes">半角英数字4文字以上12文字以内</span></p>
            <p><input type="password" name="pass2" value="" class="inpsize2"> <span class="notes">※確認のため再入力して下さい</span></p>
            <input type="hidden" name="field[]" value="pass">
            <input type="hidden" name="pass:validator[]" value="required">
            <input type="hidden" name="pass:validator[]" value="password">
            <input type="hidden" name="pass:validator[]" value="max_12">
            <input type="hidden" name="pass:validator[]" value="min_4">
            
            
            
            
            <input type="hidden" name="field[]" value="pass2">
            <input type="hidden" name="pass2:validator[]" value="required">
            <input type="hidden" name="pass2:validator[]" value="password">
            <input type="hidden" name="pass2:validator[]" value="max_12">
            <input type="hidden" name="pass2:validator[]" value="min_4">
            <input type="hidden" name="pass2:validator[]" value="equal_pass">
            
            
            
            
            
        </td>
    </tr>
</tbody></table>

<h3 class="comSTtl mB20">板曲げ.comご利用にあたっての承諾事項</h3>
    <div class="terms">
        <p>板曲げ.comのご利用にあたっては、本承諾事項をご確認ください。ご確認の上、内容にご承諾いただけたお客様のみ会員登録にお進みください。会員登録いただいたお客様は、本承諾事項の内容を承諾されているものとみなします。</p>
        <dl>
            <dt>本サービスの概要</dt>
            <dd>井上商事株式会社（以下、当社）は板曲げ.comを通じてインターネット販売及び関連サービスをご提供いたします。</dd>
            <dt>お取引条件等の確認</dt>
            <dd>板曲げ.comをご利用されるお客さまは、板曲げ.comに掲載している最新の「システムご利用ガイド」、「特定商取引に関する法律に基づく表記」に記載されているお取引条件をご確認ください。板曲げ.comをご利用されたお客さまは、お取引条件についてご承諾されているものとみなします。</dd>
            <dt>書面の交付等</dt>
            <dd>お客様への書面の交付や提示については、配付または、板曲げ.comに掲載または、電子メールに記載またはファイルを添付する方法にて行います。板曲げ.comをご利用されたお客様は、当該、交付や提示の方法についてご承諾されているものとみなします。</dd>
            <dt>個人情報の利用目的</dt>
            <dd>当社では取扱商品やサービスの充実に努めてまいります。お客様のお役に立つ商品やサービスをご提供するため、お客さまの個人情報の利用目的は次の通りとします。<br>
            <br>
            <ol type="a">
                <li>当社もしくは当社取扱商品に関するお問合せ、ご意見、ご要望にお応えするため。</li>
                <li>当社取扱商品に関するアフターサービス、その他の必要によりお客様へのご連絡や訪問を実施するため。</li>
                <li>当社取扱商品及び当社が提供するサービス等の改善、向上のためにアンケート等を実施するため。</li>
                <li>当社取扱商品の広告宣伝、販売促進活動のため。</li>
                <li>当社とお客さまの各種契約を履行するため。</li>
            </ol>
            </dd>
            <dt>法令に基づく書面交付</dt>
            <dd>法令に基づく書面交付については、サイトにおける掲載、マイページやその他電子メールによる連絡や提示をもってこれに代えるものとします。</dd>
            <dt>IDならびにパスワードの管理責任</dt>
            <dd>IDを登録する場合、そのIDならびにパスワードはお客さまの責任において管理していただきます。IDならびにパスワードを利用して行われる行為の責任は、当該IDを保有しているお客さまの責任とみなします。当社はIDならびにパスワードの漏えい、不正使用などから生じた損害については保証いたしかねますのでご注意ください。</dd>
            <dt>サービスの中止</dt>
            <dd>当社は天災、地変、戦争その他非常事態が発生、または発生する恐れがある場合、システムの保守を定期的に、もしくは緊急に行う場合、設備の障害その他やむを得ない事由が生じた場合は本サイトのサービスの全部または一部を中止できるものとします。サービスを中止する場合は、緊急の場合を除いて当社が適当と判断する方法で事前に通知、または公表いたします。</dd>
            <dt>ルール等の変更</dt>
            <dd>板曲げ.comの運営ルールや取引条件等は事前に書面で通知することなく変更される場合があります。あらかじめご了承ください。</dd>
            <dt>会員登録の抹消</dt>
            <dd>会員が以下に該当した場合、会員の資格を抹消させて頂くことがあります。<br>
            <br>
            <ol type="a">
                <li>会員登録の内容に偽りや記入漏れがある場合</li>
                <li>故意に本サイトの営業を妨害した場合</li>
                <li>会員規約に違反があった場合</li>
                <li>その他、当社が会員として不適当だと判断した場合</li>
            </ol>
            </dd><dt>IDとパスワード</dt>
            <dd>
            <ol type="a">
                <li>当社はお客様が、初めて当社の会員となった際にIDを発行いたします。</li>
                <li>IDは、お1人につき原則的に1つのみ発行します。</li>
                <li>本サイトで登録の手続きが終了すると、お客様のメールアドレス宛てに会員登録の仮受付メールを送信します。 　そちらから会員登録の本登録を行って下さい。</li>
                <li>お客様番号、パスワードの管理は会員の責任で行っていただくものとします。</li>
                <li>会員はお客様番号やパスワードを第三者に使用させたり、譲渡することはできません。</li>
                <li>お客様番号、パスワードの紛失や第三者の使用があった場合には、速やかにお客様受付窓口（0776-27-8384）までご連絡ください。</li>
                <li>当社は、お客様番号、パスワードの紛失や第三者の使用による損害について一切の責任を負いません。</li>
            </ol>
            </dd>
            <dt>会員規約の変更</dt>
            <dd>当社は本サイトの会員規約を会員に通知することなく変更できるものとします。変更は本サイトに提示された時点から有効となります。</dd>
            <dt>退会</dt>
            <dd>退会を希望されるお客様は、下記の様にお手続きをお願い致します。当社のメールアドレスにて受信をした時点で退会となります。<br>
            退会後は板曲げ.comの会員登録も削除されます。<br>
            退会メールの送信方法　：お名前・お電話番号・メールアドレスを本文にご記入になりお送りください。件名は「退会希望」とご記入ください。<br>
            <br>
            退会メールご連絡先　：　<a href="mailto:itamage@inoue-s.co.jp">itamage@inoue-s.co.jp</a></dd>
            <dt>その他の規約</dt>
            <dd>本規約は当社の会員が本サイトでサービスを利用する際に、当社と会員に適用されます。本規約で定めていないものについては、別途定める「特定商取引に関する法律に基づく表記」をご覧下さい。</dd>
        </dl>
    </div>
                                <p class="btnForm"><input type="image" src="./guide/guid_files/btn_check.gif" alt="入力内容を確認する" class="inputimage"></p>
                            </form>
                            
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
