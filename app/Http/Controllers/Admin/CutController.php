<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cut');
    }

    public function color(Request $request)
    {
        switch ($request->method()) {
            case 'POST':
                if ($request->has('pk')) {
                    $id = $request->input('pk');
                    $color = Color::find($id);
                    $color->{$request->input('name')} = $request->input('value');
                    $color->save();
                }
                break;
            case 'PUT':
                $color = new Color();
                $color->material_id = $request->input('material_id');
                $color->color = $request->input('color');
                $color->finished_surface = $request->input('finished_surface');
                $color->design = $request->input('design');
                $color->designR = $request->input('designR');
                $color->save();
                return json_encode(['success' => 1]);
                break;
            case 'DELETE':
                if ($request->has('ids')) {
                    $ids = $request->input('ids');
                    foreach ($ids as $id) {
                        $color = Color::find($id);
                        $color->delete();
                    }
                }
                return json_encode(['success' => 1]);
                break;
            case 'GET':
                $data = DB::table('colors')
                    ->select(DB::raw('colors.*,materials.material'))
                    ->leftJoin('materials', 'materials.id', '=', 'colors.material_id')
                    ->get();
                $rows = array();
                foreach ($data as $row) {
                    $row->image_design = "<img src=''/>";
                    $row->image_design_r = "<img src=''/>";
                    $rows[] = $row;
                }
                return json_encode(["total" => count($data), "rows" => $rows]);
                break;
            default:
                $data = DB::table('colors')
                    ->leftJoin('materials', 'materials.id', '=', 'colors.material_id')
                    ->get();
                return json_encode(["total" => count($data), "rows" => $data]);
                break;
        }
    }
    public function material(Request $request)
    {
        switch ($request->method()) {
            case 'POST':
                if ($request->has('pk')) {
                    $id = $request->input('pk');
                    $material = Material::find($id);
                    if ($request->input('name') == 'material') {
                        $material->material = $request->input('value');
                    }

                    if ($request->input('name') == 'gravity') {
                        $material->gravity = $request->input('value');
                    }

                    $material->save();
                }
                break;
            case 'PUT':
                $material = new Material();
                $material->bend_type = $request->input('bend_type');
                $material->material = $request->input('material');
                $material->gravity = $request->input('gravity');
                $material->save();
                return json_encode(['success' => 1]);
                break;
            case 'DELETE':
                if ($request->has('ids')) {
                    $ids = $request->input('ids');
                    foreach ($ids as $id) {
                        $material = Material::find($id);
                        $material->delete();
                    }
                }
                return json_encode(['success' => 1]);
                break;
            case 'GET':
                $data = Material::orderBy('id', 'ASC')->get();
                return json_encode(["total" => count($data), "rows" => $data]);
                break;
            default:
                $data = Material::orderBy('id', 'ASC')->get();
                return json_encode(["total" => count($data), "rows" => $data]);
                break;
        }

    }

    public function get_material(Request $request)
    {
        $data = Material::orderBy('id', 'ASC')->get();
        $meterial = array();
        foreach ($data as $row) {
            $meterial[] = array("value" => $row['id'], "text" => $row['material']);
        }
        return json_encode($meterial);
    }

}
