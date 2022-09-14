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
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    
    public static function menuList()
    {
        return Menu::where('parent_id', '=', 0)->with('children')->where('status', '=', 'True')->get();
    }

    public static function getSetting()
    {
        return $setting = Setting::first();
    }

    public function index()
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.index', $data);
    }
    public function cut(Request $request)
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $materials = Material::all();
        $products = Product::all();

        $id = $request->query('id') ? $request->query('id') - 1 : 0;
    
            $editData = $request->query('data') ? $request->query('data') : new \stdClass();
            $key = $request->query('key') ? $request->query('key') : 0;
        
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            // 'title' => $products[$id],
            'details_image' => $id == 11 ? 'cut_details_'.($id + 1).'.png' : 'cut_details_'.($id + 1).'.gif',
            'materials' => $materials,
            'editData' => $editData,
            'product' => $products[$id],
            'key' => $key
        ];
        return view('home.cut', $data);
    }
    public function getcolor(Request $request)
    {
        if ($request->ajax()) {
            $material_id = $request->input("material_id");
            $colors = Color::where('material_id', $material_id)->get();
            $colorHTML = "";
            foreach ($colors as $color) {
                $colorHTML .= "<option value='" . $color->id . "'>" . $color->color . "</option>";
            }
            return $colorHTML;
        }
    }
    public function getthick(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->input("id");
            $color = Color::find($id);
            if ($color->finished_surface == "") {
                $surface = 0;
            } elseif (!strpos($color->finished_surface, '/')) {
                $surface = 1;
            } else {
                $surface = 2;
            }

            $thicks = explode("/", $color->thick);
            $price_weight = explode("/", $color->price_weight);
            $html = "";
            foreach ($thicks as $index => $thick) {
                $html .= "<option data-weight='" . $price_weight[$index] . "' value='" . $thick . "'>T=" . $thick . "mm</option>";
            }
            return json_encode(['html' => $html, 'surface' => $surface]);
        }
    }
    public function content($id, $slug)
    {
        $content = Content::where('status', '=', 'True')->find($id);
        $imagelist = Image::where('content_id', $id)->get();
        $comment = Comment::where('content_id', $id)->where('status', '=', 'True')->get();

        return view('home.content_detail', ['content' => $content, 'imagelist' => $imagelist, 'comment' => $comment]);
    }

    public function menucontent($id, $slug)
    {
        $menucontent = Content::where('menu_id', $id)->where('status', '=', 'True')->get();
        $menu = Menu::where('status', '=', 'True')->find($id);

        return view('home.menu_content', ['menucontent' => $menucontent, 'menu' => $menu]);
    }

    public function getcontent(Request $request)
    {
        if ($request->input('search') != null) {
            $content = Content::where('title', $request->input('search'))->first();
            return redirect()->route('content', ['id' => $content->id, 'slug' => $content->slug]);
        } else {
            return back();
        }
    }

    public function faq()
    {
        $setting = Setting::first();
        $faqlist = Faq::all()->where('status', '=', 'True')->sortBy('position');
        return view('home.faq', ['setting' => $setting, 'faqlist' => $faqlist]);
    }
    public function aboutus()
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.aboutus', $data);
    }

    public function guides()
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.guide', $data);
    }

    //Estimate price
    public function estimate(Request $request)
    {
        $requestData = $request->input('data');
        if(isset($requestData['key'])){
            $estimate = $request->session()->get('estimate');
            $estimate[$requestData['key']] = $requestData;
        }else{
            if ($request->session()->exists('estimate')) {
                $estimate = $request->session()->get('estimate');
            }else{
                $request->session()->put('estimate', array());
                $estimate = Array();
            }
            array_push($estimate, $requestData);
            $estimate = array_filter($estimate, static function($var){return $var !== null;});
        }
        // $request->session()->forget('estimate');
        // $estimate = $request->session()->get('estimate');

            $request->session()->put('estimate', $estimate);
            $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
            $setting = Setting::first();
            $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
            $materials = Material::all();
            $colors = Color::all();
            $user = Auth::user() ? Auth::user() : new \stdClass();
            
            $data = [
                'menu' => $menu,
                'setting' => $setting,
                'slider' => $slider,
                'estimate' => $estimate,
                'materials'=> $materials,
                'colors' => $colors,
                'user' => $user
            ];
            if($request->ajax()) {
                return json_encode(['status' => true]);
            }else {
                return view('home.estimate', $data);
            }
    }

    //Delete Estimate for order
    public function deleteEstimate(Request $request){
        $id = $request->input('count');
        $estimates = $request->session()->get('estimate');
        unset($estimates[$id]); 
        
        $request->session()->put('estimate', $estimates);
        if($request->ajax()){
            return json_encode(['estimates' => $estimates, 'id'=> $id]);
        }
        
    }

    //Check if user loing valid
    public function userCheck(Request $request){
        if ($request->session()->exists('user')) {
            $user = $request->session()->get('user');
        }else{
            $user = null;
        }
        if($request->ajax()){
            return json_encode(['user'=>$user]);
        }
    }

    //got to order list
    public function orderList(Request $request){
        function random_strings($length_of_string)
        {
            // String of all alphanumeric character
            $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            // Shuffle the $str_result and returns substring
            // of specified length
            return substr(str_shuffle($str_result),
                            0, $length_of_string);
        }
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $materials = Material::all();
        $colors = Color::all();
        $success = $request->query('success');
        if ($request->session()->exists('estimate') && $success) {
            $orderData = array_filter($request->session()->get('estimate'));
            $order_id = random_strings(10);
            $user = Auth::user();
    
            //save the orderdata into order table
            foreach ($orderData as $key => $item) {
                $order = new Order;
                $order->user_id = $user['id'];
                $order->product_id = isset($item['product']) ? $item['product']['id'] : null;
                $order->material_id = isset($item['material_id']) ? $item['material_id'] : null;
                $order->color_id = isset($item['color_id']) ? $item['color_id'] : null;
                $order->thickness = isset($item['thickness']) ? $item['thickness'] : null;
                $order->length = isset($item['length']) ? $item['length'] : null;
                $order->unit_price = isset($item['unit_price']) ? $item['unit_price'] : null;
                $order->length = isset($item['length']) ? $item['length'] : null;
                $order->radius = isset($item['radius']) ? $item['radius'] : null;
                $order->surface = isset($item['surface']) ? $item['surface'] : null;
                $order->quantity = isset($item['quantity']) ? $item['quantity'] : null;
                $order->gross_weight = isset($item['gross_weight']) ? $item['gross_weight'] : null;
                $order->amount = isset($item['amount']) ? $item['amount'] : null;
                $order->orderid =  $order_id;
                $order->save();
            };
        }else {
            $latestOrder = Order::where('user_id', '=', $user['id'])->latest('created_at')->first();
            // echo var_dump($latestOrder['orderid']);
            $orderData = Order::where('orderid', '=', $latestOrder['orderid'])->get();
        }
        $data = [
            'menu' => $menu,
            'setting' => $setting,
            'slider' => $slider,
            'materials'=> $materials,
            'orderData' => $orderData,
            'colors' => $colors
        ];
        $request->session()->forget('estimate');
        return view('home.order', $data);
    }

    public function flow()
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.flow', $data);
    }

    public function mypage()
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.mypage', $data);
    }

    public function member()
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.member', $data);
    }

    function case () {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.case', $data);
    }

    public function contact()
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.contact', $data);
    }

    public function pip()
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.pip', $data);
    }

    public function itazai()
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.itazai', $data);
    }

    public function mizukiri()
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.mizukiri', $data);
    }

    public function alumiboard()
    {
        $menu = Menu::where('parent_id', '=', 0)->where('slug', '=', 'home')->where('status', '=', 'True')->first();
        $setting = Setting::first();
        $slider = Content::where('type', '=', 'Slider')->where('menu_id', '=', $menu->id)->where('status', '=', 'True')->get();
        $announcement = Content::where('type', '=', 'Announcement')->where('status', '=', 'True')->get();
        $news = Content::where('type', '=', 'News')->where('status', '=', 'True')->get();
        $materials = Material::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'announcement' => $announcement,
            'news' => $news,
            'materials' => $materials,
        ];
        return view('home.alumiboard', $data);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
    }

    public function sendmessage(Request $request)
    {

        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->phone = $request->input('phone');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();

        return redirect()->route('contact')->with('success', 'Your message sent, Thank you.');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {

        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $setting = Setting::first();
        return redirect('/');
    }
}