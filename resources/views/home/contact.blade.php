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
                <li>お問い合わせ</li>
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
                        <h2 class="comTtl">お問い合わせ</h2>
                        <div class="mainIn">    
                            
                                <form action="" method="post" enctype="multipart/form-data">
                                    <p class="mB20">お問い合わせの内容によっては数日間お時間をいただく場合もございます。また、土日祝日・年末年始ほか、当社休業日にいただいたお問い合わせについては、翌営業日以降の回答となります。あらかじめご了承ください。<br>このページはグローバルサインにより認証されています。<br>SSL対応ページからの情報送信は暗号化により保護されます。※SSLについては<a href="http://jp.globalsign.com" target="_blank">こちら</a>をご覧下さい。</p>
                                    <script>
$(function(){
    var zairyo = $('#zairyo').val();
    if(zairyo != '') {
        chg_select_init('', '', '');
    }
});

function chg_select_init(zairyo, iro, itaatsu){
    $.ajax({
        type: "POST",
        url: "/vl-admin/ajax/chg_bend_select_contact.php",
        cache: false,
        data: {
            "zairyo": zairyo,
            "iro"   : iro,
            "itaatsu": itaatsu,
        },
        success: function(data){
            var dt = data.split(",");
            $('#iro').html(dt[0]);
            $('#itaatsu').html(dt[1]);
        }
    });
}

function chg_select(){
    var zairyo = $('#zairyo').val();

    $.ajax({
        type: "POST",
        url: "/vl-admin/ajax/chg_bend_select_contact.php",
        cache: false,
        data: {
            "zairyo": zairyo
        },
        success: function(data){
            var dt = data.split(",");
            $('#iro').html(dt[0]);
            $('#itaatsu').html(dt[1]);

            $('#item_zaishitu').val($('#zairyo option:selected').text());
            $('#item_shiage').val($('#iro option:selected').text());
            $('#item_itaatsu').val($('#itaatsu option:selected').text());
        }
    });
}

function chg_select_color(){
    var zairyo = $('#zairyo').val();
    var iro    = $('#iro').val();

    $.ajax({
        type: "POST",
        url: "/vl-admin/ajax/chg_bend_select_contact.php",
        cache: false,
        data: {
            "zairyo": zairyo,
            "iro"   : iro
        },
        success: function(data){
            var dt = data.split(",");
            $('#iro').html(dt[0]);
            $('#itaatsu').html(dt[1]);

            $('#item_zaishitu').val($('#zairyo option:selected').text());
            $('#item_shiage').val($('#iro option:selected').text());
            $('#item_itaatsu').val($('#itaatsu option:selected').text());
        }
    });
}

function chg_select_itaatus() {
    $('#item_itaatsu').val($('#itaatsu option:selected').text());
}
</script>
<table class="contact">
<tbody><tr>
    <th>会社名</th>
    <td>
        <input type="text" name="company_name" value="" class="inpsize1">
    </td>
</tr>
<tr>
    <th>役職名</th>
    <td>
        <input type="text" name="position" value="" class="inpsize2">
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
<tr>
    <th>郵便番号 <span class="need">[必須]</span></th>
    <td>
        〒<input type="text" name="user_zip" class="inpsize3" size="8" maxlength="8" style="ime-mode: disabled;" value=""> <span class="notes"> 半角数字（例：010-0000）</span> <a href="javascript:void(0)" onclick="AjaxZip3.zip2addr('user_zip','','user_pref','user_address1'); return false;"><img src="./guide/guid_files/btn_address.gif" alt="住所表示" width="57" height="20"></a>
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
            <input type="text" name="user_address1" value="" class="inpsize1">
            <br><span class="notes">市区町村以下</span>
            <input type="hidden" name="field[]" value="user_address1">
            <input type="hidden" name="user_address1:validator[]" value="required">
            
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" name="user_address2" value="" class="inpsize1">
            <br><span class="notes">ビル・マンション・アパート</span>
            <input type="hidden" name="field[]" value="user_address2">
        </td>
    </tr>
    <tr>
        <th>電話番号 </th>
        <td>
            <input type="text" name="tel" value="" class="inpsize5"> <span class="notes">半角数字（携帯電話でも可）（例：0776-00-0000）</span>
            <input type="hidden" name="field[]" value="tel">
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
            <input type="text" name="email" value="" class="inpsize4"> <span class="notes">半角英数字</span>
            <br><span class="notes">※携帯のメールアドレスは使用できません</span>
            <input type="hidden" name="field[]" value="email">
            <input type="hidden" name="email:validator[]" value="required">
            <input type="hidden" name="email:validator[]" value="email">
            <input type="hidden" name="email:validator[]" value="mobile">
            
            
            
        </td>
    </tr>
    <tr>
        <th>ファイル</th>
        <td>
            
            <input type="file" name="contact_file">
            <input type="hidden" name="field[]" value="contact_file">
        </td>
    </tr>
    <tr>
        <th>製品に関する場合</th>
        <td>
            <p class="mB5">
                材料　　　：
                <select id="zairyo" name="zairyo" onchange="chg_select();"><option value="">==選択してください==</option><option value="1">アルミ</option><option value="2">ステンレス (304)</option><option value="3">ステンレス (430)</option><option value="4">鉄</option><option value="5">アルミ（パンチング）</option><option value="6">真鍮</option><option value="7">アルミ複合板</option><option value="8">ポリカーボネート板</option></select>
            </p>
            <p class="mB5">
                色・仕上げ：
                <select id="iro" name="iro" onchange="chg_select_color();"></select>
            </p>
            <p class="mB5">
                板厚　　　：
                <select id="itaatsu" name="itaatsu" onchange="chg_select_itaatus();"></select>
            </p>
            <p>数量　　　：<input type="text" name="item_suryo" value=""></p>
            <br><span class="notes">※上記に該当しない場合はお問い合わせ内容にご記入ください。</span>
            <input type="hidden" id="item_zaishitu" name="item_zaishitu" value="">
            <input type="hidden" id="item_shiage" name="item_shiage" value="">
            <input type="hidden" id="item_itaatsu" name="item_itaatsu" value="">
            <input type="hidden" name="field[]" value="zairyo">
            <input type="hidden" name="field[]" value="iro">
            <input type="hidden" name="field[]" value="itaatsu">
            <input type="hidden" name="field[]" value="item_zaishitu">
            <input type="hidden" name="field[]" value="item_shiage">
            <input type="hidden" name="field[]" value="item_itaatsu">
            <input type="hidden" name="field[]" value="item_suryo">
        </td>
    </tr>
    <tr>
        <th>お客様のご予算</th>
        <td>
            <input type="text" name="budget" value="" class="inpsize4">
            <input type="hidden" name="field[]" value="budget">
        </td>
    </tr>
    <tr>
        <th>お問合せ内容 <span class="need">[必須]</span></th>
        <td>
            <div class="mB10">
            <ul>
                <li><input id="contact_type1" type="checkbox" name="type[]" value="製品について"><label for="contact_type1">製品について</label></li>
                <li><input id="contact_type2" type="checkbox" name="type[]" value="お取引について"><label for="contact_type2">お取引について</label></li>
                <li><input id="contact_type3" type="checkbox" name="type[]" value="ホームページについて"><label for="contact_type3">ホームページについて</label></li>
                <li><input id="contact_type4" type="checkbox" name="type[]" value="その他"><label for="contact_type4">その他</label></li>
            </ul>
            <input type="hidden" name="field[]" value="type">
            <input type="hidden" name="type:validator[]" value="requiredArray">
            
            </div>
            <p>詳細をご入力ください</p>
            <textarea name="detail" rows="14" cols="55"></textarea>
            <input type="hidden" name="field[]" value="detail">
            <input type="hidden" name="detail:validator[]" value="required">
            
        </td>
    </tr>
</tbody></table>

                                    <p class="btnForm"><input type="image" src="./guide/guid_files/btn_check.gif" alt="入力内容を確認する"></p>
                                </form>
                                
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
