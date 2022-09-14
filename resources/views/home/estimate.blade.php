@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('css')
<style>
.estimate-edit:focus {
    outline: none;
}

.estimate-edit:hover {
    cursor: pointer;
}
</style>
@endsection

@section('javascript')
<script>
var materials = <?= $materials; ?>;
var colors = <?= $colors; ?>;
var estimate = @json($estimate);
var user = @json($user);

//Stripe api key
var stripe = Stripe(
    'pk_test_51Lg5KXHttMGhiRVpBcJf9zESHELiLWfty1vOI28vNpAcODHszakmiJGWAvUYX5yBne9U9VZF8dw8xHTd3OaNBZct00hsTPAQl3'
);
var headerParams = {
    'Authorization': 'bearer sk_test_51Lg5KXHttMGhiRVpCz6TKTdxHlUM4CeIcdGyGRDM3iDGvhppuqUlplyNyHAiEU51Ih5oxfDDATlcVMoxTuGIT6xG00s585N5nV'
};

var unit_amount = 4400;
var price = {}

var customer = ''
var total_price = 0;

//Got to cut page to edit 
const editEstimate = (key) => {
    console.log(estimate[key])
    var uri =
        `/cut?id=${estimate[key].product.id}&key=${key}&data=${encodeURIComponent(JSON.stringify(estimate[key]))}`;
    window.location.href = uri;
}

//Delete estimate
const deleteEstimate = (key) => {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/deleteestimate',
        data: {
            count: key
        },
        success: (response) => {
            console.log(response)
            drawList(response.estimates);

        },
        err: (err) => {
            console.log(err)
        }
    })
}


//Stripe-Pay
$('.estimate-pay').click(() => {
    console.log(estimate)
    if (estimate.length === 0)
        return;
    alert('本当にお支払いを開始しますか？')

    if (user.email) {
        // get customer
        let data = {
            email: user.email
        }
        $.ajax({
            type: "GET",
            headers: headerParams,
            url: "https://api.stripe.com/v1/customers",
            data: data,
            success: function(response) {
                console.log(response);

                if (response.data.length == 0) {
                    $.ajax({
                        type: "POST",
                        headers: headerParams,
                        url: "https://api.stripe.com/v1/customers",
                        data: data,
                        success: function(response) {
                            console.log("update Customer>>>>>>>>0",
                                response);
                            customer = response;
                            stripeResponseHandler();
                        }
                    });
                } else {

                    $.ajax({
                        type: "POST",
                        headers: headerParams,
                        url: "https://api.stripe.com/v1/customers/" +
                            response.data[0].id,
                        data: data,
                        success: function(response) {
                            console.log("update customer>>>>>>>>1",
                                response);
                            customer = response;
                            stripeResponseHandler();
                        }
                    });

                }

            }
        });
    } else {
        window.location.href = '/login'
    }
})

const stripeResponseHandler = () => {
    var data = {
        "payment_method_types[]": "card",
        line_items: [{
            price_data: {
                currency: "JPY",
                unit_amount: Math.ceil(total_price * 1.1),
                product_data: {
                    name: "test product",
                },
            },
            quantity: 1,
        }, ],
        "customer": customer.id,

        mode: 'payment',
        allow_promotion_codes: false,
        billing_address_collection: "required",

        success_url: 'http://localhost:8000/order_list?success=true',
        cancel_url: 'http://localhost:8000/estimate',
    }
    $.ajax({
        type: "POST",
        headers: headerParams,
        url: "https://api.stripe.com/v1/checkout/sessions",
        data: data,
        success: function(session) {
            console.log("create session>>>>>>>>>", session);
            return stripe.redirectToCheckout({
                sessionId: session.id,
            });
        },
        error: (err) => {
            console.log(err)
        }
    })

}

const drawList = (estimate) => {
    $('.estimate-list').html('');
    var html = ``;
    var count = 0;
    for (const key in estimate) {
        if (estimate.hasOwnProperty.call(estimate, key)) {
            const element = estimate[key];
            count++
            const materialInd = materials.findIndex(item => item.id === Number(element.material_id))
            const colorInd = colors.findIndex(item => item.id === Number(element.color_id))
            console.log(materialInd, element.material_id)
            html += `<div class="bendEstimateItem">
                                    <h4>${element.product.produt_name}</h4>
                                    <div class="bendEstimateIn">
                                        <table class="bendEstimateListTbl">
                                            <tbody>
                                                <tr>
                                                    <th class="no">No.</th>
                                                    <th class="code">品名</th>
                                                    <th>材料・色</th>
                                                    <th>板厚</th>
                                                    <th class="nagasa">長さ</th>
                                                    <th class="tanka">単価</th>
                                                    <th class="price">重量</th>
                                                    <th class="num">数量</th>
                                                    <th class="">&nbsp;</th>
                                                </tr>
                                                <tr>
                                                    <td>${count}</td>
                                                    <td>金属板</td>
                                                    <td>${materials[materialInd].material} ${colors[colorInd].color}</td>
                                                    <td>T=${element.thickness}mm</td>
                                                    <td>-</td>
                                                    <td>${element.unit_price}円</td>
                                                    <td>${element.weight}kg</td>
                                                    <td>${element.quantity} 個</td>
                                                    <td>
                                                        <button class="inputimage estimate-delete"
                                                            value="${count}"
                                                            onclick="deleteEstimate(${key})"
                                                            name="delete_item">
                                                            <img src="https://www.itamage.com/themes/itamage/bend/img/btn_del.gif"
                                                                alt="" width="40" height="25">
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="bendEstimateTotalTbl">
                                            <tbody>
                                                <tr>
                                                    <th>総重量</th>
                                                    <td>${element.gross_weight}kg</td>
                                                    <th>金額(税別)</th>
                                                    <td>${element.amount}円</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button class="txtAR mB5 border-0 estimate-edit border-none float-right" onclick="editEstimate(${key})" name="${count}" ><img
                                                    src="https://www.itamage.com/themes/itamage/bend/img/btn_edit_bend.gif"
                                                    alt="寸法を編集" width="120" height="32" class="inputimage"></button>

                                        <form action="attachment.html" method="post">
                                            <div class="txtAR">
                                                <input type="image"
                                                    src="https://www.itamage.com/themes/itamage/bend/img/btn_add_acc.gif"
                                                    alt="付属品追加" class="inputimage">
                                                <input type="hidden" name="item_ren" value="0">
                                            </div>
                                        </form>
                                    </div>
                                </div>`
            total_price += Number(element.amount)
        }
    }
    $('#total').text(total_price);
    let shipping_price = 1000;
    $('#shipping_price').text(shipping_price);
    $('#tax').text(Math.ceil((total_price + shipping_price) * 0.1));
    $('#grand').text(Math.ceil(total_price * 1.1));

    $('.estimate-list').append(html);
}

$(document).ready(function() {

    drawList(estimate);
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
                    <div class="card-header bg-ruam text-white">
                        <h3>カートを確認</h3>
                    </div>
                    <div class="card-body">
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
                        </div>
                        <div id="" class="signup-step-container">

                            <div class=" wizard ">
                                <div class=" wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="disabled">
                                            <a data-toggle="tab" aria-controls="step1" role="tab"
                                                aria-expanded="true"><span class="round-tab">1
                                                </span><i>金属板を選択</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                                aria-expanded="false"><span class="round-tab">2</span> <i>寸法・長さ・
                                                    数量の入力</i></a>
                                        </li>
                                        <li role="presentation" class="active">
                                            <a href="" data-toggle="tab" aria-controls="step3" role="tab"><span
                                                    class="round-tab">3</span>
                                                <i>カートを確認</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="" data-toggle="tab" aria-controls="step4" role="tab"><span
                                                    class="round-tab">4</span>
                                                <i>ご注文手続きへ</i></a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="comSTtl mB10">カート</h3>

                                <div class="pT15 mB30">
                                    カートには以下の商品が入っています。

                                    製品合計が4,000円未満の場合、最低料金を4,000円とさせていただきます。

                                    ※各商品は20個までのご注文となります。21個以上ご注文されたい場合は別途ご相談ください。
                                </div>
                                <div class="estimate-list">

                                </div>

                                <div class="bendEstimateListRecal d-flex float-right align-items-center">
                                    数量を変更した場合は必ず押してください→ <a href="/estimate"><input type="image"
                                            src="https://www.itamage.com/themes/itamage/bend/img/btn_recal.gif"
                                            class="inputimage"></a>
                                </div>
                                <table class="bendEstimateListGokeiTbl">
                                    <tbody>
                                        <tr>
                                            <th rowspan="4">
                                                <span>【発送予定】</span><br>14:00までの決済・振込確認を含む<br>4営業日後に発送<br>支払い方法を代引きにした場合、1営業日加算されます。
                                            </th>
                                            <td class="border">
                                                <dl>
                                                    <dt>製品合計（税別）</dt>
                                                    <dd><span id="total"></span><span>円</span></dd>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border">
                                                <dl>
                                                    <dt>運賃・梱包費（税別）</dt>
                                                    <dd><span id="shipping_price"></span><span>円</span></dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border">
                                                <dl>
                                                    <dt>消費税</dt>
                                                    <dd><span id="tax"></span><span>円</span></dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <dl id="total">
                                                    <dt>総合計</dt>
                                                    <dd><span id="grand"></span><span>円</span></dd>
                                                </dl>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="bendEstimateBtn clearfix">
                                    <div class="fL mR20"><a
                                            href="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER']: '' ?>"><img
                                                src="https://www.itamage.com/themes/itamage/bend/img/btn_back_bend.gif"
                                                alt="他の定型曲げを選ぶ" width="180" height="52"></a></div>
                                    <div class="fL mR20">
                                        <form action="attachment.html" method="post"><input type="image"
                                                src="https://www.itamage.com/themes/itamage/bend/img/btn_option2.gif"
                                                alt="付属品を追加する"><input type="hidden" name="item_ren" value="null"></form>
                                    </div>
                                    <div class="fR estimate-pay">
                                        <input type="image"
                                            src="https://www.itamage.com/themes/itamage/bend/img/btn_order.gif"
                                            alt="注文手続きに進む" name="estimate" class="inputimage">
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