@extends('layouts.admin')

@section('title', '切り出し')

@section('content')
    <!-- MAIN service-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                材料
                            </div>
                            <div class="card-body">
                                <table id="material_table"
                                    data-pagination="true"
                                    data-page-size="6"
                                    data-id-field="id"
                                    data-toggle="table"
                                    data-buttons="material_buttons"
                                    data-url="{{ route('admin_cut_material') }}"
                                    data-editable-emptytext="Default empty text."
                                    data-editable-url="{{ route('admin_cut_material') }}">
                                    <thead>
                                      <tr>
                                        <th data-field="state" data-checkbox="true">id</th>
                                        <th data-field="id">id</th>
                                        <th data-field="material" data-editable="true">材料</th>
                                        <th data-field="gravity" data-editable="true" data-editable-type="number">比重</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                色・仕上
                            </div>
                            <div class="card-body">
                                <table id="color_table"
                                    data-group-by="true"
                                    data-group-by-field="material"
                                    data-id-field="id"
                                    data-toggle="table"
                                    data-buttons="color_buttons"
                                    data-url="{{ route('admin_cut_color') }}"
                                    data-editable-emptytext="-"
                                    data-editable-url="{{ route('admin_cut_color') }}">
                                    <thead>
                                      <tr>
                                        <th data-field="state" data-checkbox="true">id</th>
                                        <th data-field="id">id</th>
                                        <th data-field="material_id" data-editable="true" data-editable-source="{{ route('admin_cut_get_material') }}" data-editable-type="select">材料</th>
                                        <th data-field="color" data-editable="true">色</th>
                                        <th data-field="finished_surface" data-editable="true">仕上</th>
                                        <th data-field="thick" data-editable="true">板厚</th>
                                        <th data-field="price_weight" data-editable="true">重さ単価</th>
                                        <th data-field="design" data-editable="true" data-editable-type="image">design</th>
                                        <th data-field="designR" data-editable="true" data-editable-type="image">designR</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© 2022 moon.rider.dev</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN service-->
    <!-- END PAGE CONTAINER-->
@endsection
@section('javascript')
<!-- Scripts -->

<script src="{{ asset('assets')}}/admin/js/cut.js"></script>
@endsection
