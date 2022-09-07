<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Comment;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Material;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Estimate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;


class EstimateController extends Controller
{

    public static function add_estimate()
    {
        $estimateData = $request->input['data'];
        $myfile = time() . str_random();
        Storage::disk('local')->put($myfile, $postdata);

        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $data = [
            'menu' => $menu,
            'setting' => $setting,
            'slider' => $slider,
        ];
        return view('home.estimate', $data);
    }

  
}