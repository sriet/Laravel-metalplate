@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('css')
@endsection

@section('javascript')
<script>
var materials = <?= $materials; ?>;
var colors = <?= $colors; ?>;
var orderData = @json($orderData);


$(document).ready(function() {
    var html = ``;
    var count = 0
    for (const key in orderData) {
        if (orderData.hasOwnProperty.call(orderData, key)) {
            const element = orderData[key];
            count++
            const materialInd = materials.findIndex(item => item.id === Number(element.material_id))
            const colorInd = colors.findIndex(item => item.id === Number(element.color_id))
            console.log(materialInd, element.material_id)
            html += `<div class="bendEstimateItem">
                                    <h4>板曲げ</h4>
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
                                                    <td><select name="item_0">
                                                            <option value="1" selected="selected">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                        </select> 個</td>
                                                    <td>
                                                        <form method="post" action="">
                                                            <button class="inputimage estimate-delete"
                                                                value="${count}"
                                                                onclick="deleteEstimate(${count})"
                                                                name="delete_item" type="submit">
                                                                <img src="https://www.itamage.com/themes/itamage/bend/img/btn_del.gif"
                                                                    alt="" width="40" height="25">
                                                            </button>
                                                        </form>
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

                                    </div>
                                </div>`
        }
    }

    $('.estimate-list').append(html);
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
                        <h3>オーダーリスト</h3>
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
                                        <li role="presentation" class="disabled">
                                            <a href="" data-toggle="tab" aria-controls="step3" role="tab"><span
                                                    class="round-tab">3</span>
                                                <i>カートを確認</i></a>
                                        </li>
                                        <li role="presentation" class="disabled active">
                                            <a href="" data-toggle="tab" aria-controls="step4" role="tab"><span
                                                    class="round-tab">4</span>
                                                <i>ご注文手続きへ</i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="estimate-list">

                                </div>
                                <table class="bendEstimateListGokeiTbl float-right w-50">
                                    <tbody>
                                        <tr>
                                            <td class="border">
                                                <dl id="postage">
                                                    <dt>製品合計（税別）</dt>
                                                    <dd>4000円</dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border">
                                                <dl id="tax">
                                                    <dt>代引手数料（税別）</dt>
                                                    <dd>400円</dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border">
                                                <dl id="tax">
                                                    <dt>運賃・梱包費（税別）</dt>
                                                    <dd>400円</dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border">
                                                <dl id="tax">
                                                    <dt>消費税</dt>
                                                    <dd>400円</dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border">
                                                <dl id="tax">
                                                    <dt>総合計</dt>
                                                    <dd>400円</dd>
                                                </dl>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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