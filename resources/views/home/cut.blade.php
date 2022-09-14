@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('css')
<style>
#owl-demo .item,
#owl-demo-1 .item {
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

.customNavigation {
    text-align: center;
}

.customNavigation a {
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

#calcTable tr td div.sizeDIV {
    border: 1px solid #aaa;
}

table#calcTable tr td.sizeTD {
    padding: 0px;
}
</style>
@endsection
@section('javascript')
<!-- Scripts -->
<script>
$(document).ready(function() {

    var unit_price = 0;
    var quantity = 1;
    var weight = 0;
    var product = @json($product);
    var editData = @json($editData);
    console.log(editData.product)
    var key = editData.product ? <?= $key ?> : null;

    //Edit data from Estimate page one item
    if (editData.product) {
        $(`#select_material_id option[value='${editData.material_id}']`).attr('selected', 'selected');
        $(`#select_color_id option[value='${editData.color_id}']`).attr('selected', 'selected');
        $(`#select_thick option[value='${editData.thickness}']`).attr('selected', 'selected');
        $(`input[name=surface][value="${editData.surface}"]`).attr('checked', 'checked');
        if (editData.radius) {
            $('#angleRCheckbox').prop('checked', true)
            $('#radius').val(editData.radius)
        }
        let lengths = editData.length.split('/');
        $('#size_a').val(lengths[0]);
        $('#size_b').val(lengths[1]);
        $('#size_c').val(lengths[2]);
        $('#size_d').val(lengths[3]);
        $('#size_e').val(lengths[4]);
        $('#size_len').val(lengths[5]);
        $('#size_f').val(lengths[6]);
        $('#size_g').val(lengths[7]);
        $('#size_h').val(lengths[8]);
        $('#size_i').val(lengths[9]);
        $('#size_j').val(lengths[10]);
        $(`#count_number option[value='${editData.quantity}']`).attr('selected', 'selected');
        $('#calcValue').text(editData.amount);
        $(`span[name='gross_weight']`).text(editData.gross_weight);
        weight = editData.gross_weight;
        quantity = editData.quantity;
        unit_price = editData.unit_price;

    }

    //Select material item
    $('#select_material_id').on('change', function() {
        var material_id = $(this).val();
        var url = "{{url('getcolor')}}";
        if (material_id) {
            $.ajax({
                type: 'GET',
                url: url,
                data: 'material_id=' + material_id,
                success: function(html) {
                    $('#select_color_id').html(html);
                }
            });
        } else {
            $('#select_color_id').html('<option value="">Select 材料</option>');
        }
        $('span[name="gross_weight"]').text(weight);
    });

    //Select color item
    $('#select_color_id').on('change', function() {
        var color_id = $(this).val();
        var url = "{{url('getthick')}}";
        if (color_id) {
            $.ajax({
                type: 'GET',
                url: url,
                data: 'id=' + color_id,
                dataType: 'json',
                success: function(response) {
                    $('#select_thick').html(response.html);
                    if (response.surface == 0) {
                        $('#inlineCheckbox1').prop('disabled', true);
                        $('#inlineCheckbox2').prop('disabled', true);
                    } else if (response.surface == 1) {
                        $('#inlineCheckbox1').prop('disabled', false);
                        $('#inlineCheckbox2').prop('disabled', true);
                    } else {
                        $('#inlineCheckbox1').prop('disabled', false);
                        $('#inlineCheckbox2').prop('disabled', false);
                    }

                }
            });
        } else {
            $('#select_thick').html('<option value="">Select 材料</option>');
        }
        $('span[name="gross_weight"]').text(weight);
    });

    //Select quantity of product
    $('#count_number').change(() => {
        quantity = Number($('#count_number').val())
        $('#calcValue').text(quantity * unit_price);
        weight = Number($("#select_material_id option:selected").data('gravity')) * quantity
        $('span[name="gross_weight"]').text(weight);
    })

    //Calculate the price when change the size of product
    $(".calcCondition").on('change', function() {
        var valA = $("#size_a").val() * 1;
        var valB = $("#size_b").val() * 1;
        var thick = $("#select_thick").val() * 1;
        var gravity = $("#select_material_id option:selected").data('gravity');
        var price_weight = $("#select_thick option:selected").data('weight');

        unit_price = Math.ceil(valA * valB * thick * gravity * price_weight / 1000000);
        console.log(valA, valB, thick, gravity, price_weight, unit_price);
        $("#calcValue").text(unit_price * quantity);
        weight = Number(gravity) * quantity
        console.log(weight)
        $('span[name="gross_weight"]').text(weight);
    });

    //Send all data to estimate order page
    $('#goto_estimate').on('click', () => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log('dd')
        let data = {}
        data['product'] = product;
        data['material_id'] = $('#select_material_id').val()
        data['color_id'] = $('#select_color_id').val()
        data['thickness'] = $('#select_thick').val()
        data['length'] = $('#size_a').val() + '/' + $('#size_b').val() + '/' + $('#size_c').val() +
            '/' + $('#size_d').val() + '/' + $('#size_e').val() + '/' + $('#size_len').val() + '/' + $(
                '#size_f').val() + '/' + $('#size_g').val() + '/' + $('#size_h').val() + '/' + $(
                '#size_i').val() + '/' + $('#size_j').val();
        data['unit_price'] = unit_price;
        data['weight'] = $("#select_material_id option:selected").data('gravity');
        data['surface'] = $('.form-check input:radio:checked').val();
        data['radius'] = $('#angleRCheckbox:checked').is(':checked') ? $('#radius').val() : '';
        data['quantity'] = quantity;
        data['gross_weight'] = Number($("#select_material_id option:selected").data('gravity')) *
            quantity
        data['amount'] = unit_price * quantity;
        if (key) {
            data['key'] = key
        }
        console.log(data)
        let url = "{{url('estimate')}}";
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                data
            },
            dataType: 'json',
            success: function(response) {
                console.log(response)
                if (response.status)
                    window.location.href = '/estimate'
            }
        });
    })

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
                        <h3>定型曲げ見積作成</h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <!-- <form action="{{ route('estimate') }}" method="get" enctype="multipart/form-data"> -->

                            <section class="signup-step-container">
                                <div class="container">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <div class="wizard">
                                                <div class="wizard-inner">
                                                    <div class="connecting-line"></div>
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="disabled">
                                                            <a data-toggle="tab" aria-controls="step1" role="tab"
                                                                aria-expanded="true"><span class="round-tab">1
                                                                </span><i>金属板を選択</i></a>
                                                        </li>
                                                        <li role="presentation" class="active">
                                                            <a href="#step2" data-toggle="tab" aria-controls="step2"
                                                                role="tab" aria-expanded="false"><span
                                                                    class="round-tab">2</span> <i>寸法・長さ・
                                                                    数量の入力</i></a>
                                                        </li>
                                                        <li role="presentation" class="disabled">
                                                            <a href="" data-toggle="tab" aria-controls="step3"
                                                                role="tab"><span class="round-tab">3</span>
                                                                <i>カートを確認</i></a>
                                                        </li>
                                                        <li role="presentation" class="disabled">
                                                            <a href="" data-toggle="tab" aria-controls="step4"
                                                                role="tab"><span class="round-tab">4</span>
                                                                <i>ご注文手続きへ</i></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="tab-content" id="main_form">
                                                    <div class="tab-pane>" role="tabpanel" id="step1">

                                                    </div>
                                                    <div class="tab-pane active" role="tabpanel" id="step2">
                                                        <div class="card">
                                                            <div class="card-header bg-secondary text-white">
                                                                <h4 class="product-name">{{$product['produt_name']}}
                                                                </h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <img width="100%"
                                                                    src="{{asset('assets/images/' . $details_image)}}" />
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 d-flex justify-content-between">
                                                            <div class="w-75">
                                                                <table class="table table-bordered" id="calcTable">
                                                                    <tbody>
                                                                        <tr class="thead-light">
                                                                            <th class="col-3">材料</th>
                                                                            <td class="col-9" colspan="6">
                                                                                <select
                                                                                    class="form-control calcCondition"
                                                                                    id="select_material_id"
                                                                                    name="material_id" value="3">
                                                                                    @foreach($materials as
                                                                                    $material)
                                                                                    <option data-gravity="
                                                                                    {{$material->gravity}}"
                                                                                        value="{{$material->id}}">
                                                                                        {{$material->material}}
                                                                                    </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="thead-light">
                                                                            <th class="col-3">色・仕上</th>
                                                                            <td class="col-9" colspan="6">
                                                                                <select
                                                                                    class="form-control calcCondition"
                                                                                    id="select_color_id"
                                                                                    name="color_id">
                                                                                    @foreach($materials[0]->colors
                                                                                    as $color)
                                                                                    <option value="{{$color->id}}">
                                                                                        {{$color->color}}
                                                                                    </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="thead-light">
                                                                            <th class="col-3">板厚</th>
                                                                            <td class="col-9" colspan="6">
                                                                                @php
                                                                                $thicks =
                                                                                explode("/",$materials[0]->colors[0]->thick);
                                                                                $weights =
                                                                                explode("/",$materials[0]->colors[0]->price_weight);
                                                                                @endphp
                                                                                <select
                                                                                    class="form-control calcCondition"
                                                                                    id="select_thick" name="thickness">
                                                                                    @foreach($thicks as $thick)
                                                                                    <option
                                                                                        data-weight="{{$weights[$loop->index]}}"
                                                                                        value="{{$thick}}">
                                                                                        T={{$thick}}mm</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="thead-light">
                                                                            <th class="col-3">仕上げ面</th>
                                                                            <td class="col-9" colspan="6">
                                                                                @php
                                                                                $finished_surface =
                                                                                explode("/",$materials[0]->colors[0]->finished_surface);
                                                                                @endphp
                                                                                <div
                                                                                    class="form-check form-check-inline">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        id="inlineCheckbox1"
                                                                                        name="surface" value="片面">
                                                                                    <label class="form-check-label"
                                                                                        for="inlineCheckbox1">片面</label>
                                                                                </div>
                                                                                <div
                                                                                    class="form-check form-check-inline">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        id="inlineCheckbox2"
                                                                                        name="surface" value="両面">
                                                                                    <label class="form-check-label"
                                                                                        for="inlineCheckbox2">両面</label>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="thead-light">
                                                                            <th class="col-3">角R</th>
                                                                            <td class="col-9" colspan="6">
                                                                                <div
                                                                                    class="form-row align-items-center">
                                                                                    <div
                                                                                        class="col-sm-5 form-check form-check-inline">
                                                                                        <input type="checkbox"
                                                                                            id="angleRCheckbox" />
                                                                                        <label class="form-check-label"
                                                                                            for="angleRCheckbox">角Rを希望する</label>
                                                                                    </div>
                                                                                    <div class="col-sm-5 my-1">
                                                                                        <label class="sr-only"
                                                                                            for="radius">Name</label>
                                                                                        <input type="text"
                                                                                            class="form-control form-control-sm"
                                                                                            id="radius" />
                                                                                    </div>
                                                                                    <div class="col-auto my-1">
                                                                                        mm
                                                                                    </div>
                                                                                </div>
                                                                                <span class="small">
                                                                                    ※角Rのご指示は3mm以上でお願いします。<br />
                                                                                    ※角Rとは"角の丸み"のことです。商品の角に微小の丸みを付けます。
                                                                                </span>

                                                                            </td>
                                                                        </tr>
                                                                        <tr class="thead-light">
                                                                            <th class="col-3" rowspan="4">寸法
                                                                            </th>
                                                                            <td>
                                                                                <div class="sizeDIV text-center">
                                                                                    A
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="sizeDIV text-center">
                                                                                    B
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="sizeDIV text-center">
                                                                                    C
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="sizeDIV text-center">
                                                                                    D
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="sizeDIV text-center">
                                                                                    E
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-center">長さ</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="sizeTD"><input type="number"
                                                                                    class="form-control form-control-sm calcCondition"
                                                                                    id="size_a" min="200" max="1000"
                                                                                    placeholder="mm" /></td>
                                                                            <td class="sizeTD"><input type="number"
                                                                                    class="form-control form-control-sm calcCondition"
                                                                                    id="size_b" min="200" max="1000"
                                                                                    placeholder="mm" /></td>
                                                                            <td class="sizeTD"><input type="number"
                                                                                    class="form-control form-control-sm calcCondition"
                                                                                    id="size_c" disabled
                                                                                    placeholder="mm" /></td>
                                                                            <td class="sizeTD"><input type="number"
                                                                                    class="form-control form-control-sm calcCondition"
                                                                                    id="size_d" disabled
                                                                                    placeholder="mm" /></td>
                                                                            <td class="sizeTD"><input type="number"
                                                                                    class="form-control form-control-sm calcCondition"
                                                                                    id="size_e" disabled
                                                                                    placeholder="mm" /></td>
                                                                            <td class="sizeTD"><input type="number"
                                                                                    class="form-control form-control-sm calcCondition"
                                                                                    id="size_len" disabled
                                                                                    placeholder="mm" /></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="sizeDIV text-center">
                                                                                    F
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="sizeDIV text-center">
                                                                                    G
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="sizeDIV text-center">
                                                                                    H
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="sizeDIV text-center">
                                                                                    I
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="sizeDIV text-center">
                                                                                    J
                                                                                </div>
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="sizeTD"><input type="number"
                                                                                    class="form-control form-control-sm calcCondition"
                                                                                    id="size_f" disabled
                                                                                    placeholder="mm" /></td>
                                                                            <td class="sizeTD"><input type="number"
                                                                                    class="form-control form-control-sm calcCondition"
                                                                                    id="size_g" disabled
                                                                                    placeholder="mm" /></td>
                                                                            <td class="sizeTD"><input type="number"
                                                                                    class="form-control form-control-sm calcCondition"
                                                                                    id="size_h" disabled
                                                                                    placeholder="mm" /></td>
                                                                            <td class="sizeTD"><input type="number"
                                                                                    class="form-control form-control-sm calcCondition"
                                                                                    id="size_i" disabled
                                                                                    placeholder="mm" /></td>
                                                                            <td class="sizeTD"><input type="number"
                                                                                    class="form-control form-control-sm calcCondition"
                                                                                    id="size_j" disabled
                                                                                    placeholder="mm" /></td>
                                                                        </tr>
                                                                        <tr class="thead-light">
                                                                            <th class="col-3">単価</th>
                                                                            <td class="col-9" colspan="6">
                                                                                <span
                                                                                    class="text-danger">寸法を入力すると金額が表示されます。</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="thead-light">
                                                                            <th class="col-3">重量 / 個</th>
                                                                            <td class="col-9" colspan="6">
                                                                                <span
                                                                                    class="text-danger">寸法を入力すると重量が表示されます。</span><br />
                                                                                <span
                                                                                    class="text-danger small">※総重量が20kgを超える場合は、分割でご注文をお願いします</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="thead-light">
                                                                            <th class="col-3">数量</th>
                                                                            <td class="col-9" colspan="6">
                                                                                <div
                                                                                    class="form-row align-items-center">
                                                                                    <div
                                                                                        class="col-sm-3 form-check form-check-inline">
                                                                                        <select id="count_number"
                                                                                            name="quantity"
                                                                                            class="form-control form-control-sm">
                                                                                            @foreach(range(1,
                                                                                            20) as
                                                                                            $y)
                                                                                            <option value={{$y}}>
                                                                                                {{$y}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        <label class="form-check-label"
                                                                                            for="angleRCheckbox">
                                                                                            個</label>

                                                                                    </div>
                                                                                    <span
                                                                                        class="col-sm-12 small">※21個以上は電話・メール・FAXでお問い合わせください。</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table style="border: 3px solid #dee2e6 !important;"
                                                                    class="table table-bordered">
                                                                    <tr>
                                                                        <td class="col-6">総重量</th>
                                                                        <td class="col-6 text-right">
                                                                            <span
                                                                                name="gross_weight"></span><span>kg</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-6">製品金額（税別）</th>
                                                                        <td class="col-6 text-right">
                                                                            <h5><span id="calcValue"></span>円
                                                                            </h5>
                                                                        </td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                            <div class="card ml-2 w-25 border-0">
                                                                <div class="pb-3">
                                                                    <a href="" id="btnIntroduce">
                                                                        <img width="100%"
                                                                            src="{{ asset('assets/images/introduce.png')}}">
                                                                    </a>
                                                                </div>
                                                                <div class="pb-3">
                                                                    <div class="card">
                                                                        <div class="card-header">製作限度</div>
                                                                        <div class="card-body">
                                                                            <ul class="list-unstyled">
                                                                                <li>200 < A < 1000</li>
                                                                                <li>200 < B < 1000</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pb-3">
                                                                    <div class="card ">
                                                                        <div class="card-body">
                                                                            <p>
                                                                                ※制作限度を超えるサイズの製品をご希望される場合にはこちらよりお問い合わせください。
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="step3">
                                                        <h4 class="text-center">Step 3</h4>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="step4">
                                                        <h4 class="text-center">Step 4</h4>

                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="container">
                                <div
                                    class="bendEstimateBtn mB20 d-flex d-inline-flex w-100 justify-content-around border form-control">
                                    <div class="fL mR20"><a href="javascript:void(0)" onclick="window.print();"><img
                                                src="https://www.itamage.com/themes/itamage/bend/img/btn_print.gif"
                                                alt="印刷する" width="120" height="52"></a></div>
                                    <div class="fL mR20" type="submit"><input type="image"
                                            src="https://www.itamage.com/themes/itamage/bend/img/btn_estimatelist.gif"
                                            alt="見積リストに追加する" name="estimate" id="goto_estimate" class="inputimage">
                                    </div>
                                    <div class="fL"><input type="image"
                                            src="https://www.itamage.com/themes/itamage/bend/img/btn_option.gif"
                                            alt="続けて付属品を選ぶ" name="acc" onclick="return submit_bend_estimate_acc();"
                                            class="inputimage"></div>
                                </div>
                            </section>
                            <!-- </form> -->
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