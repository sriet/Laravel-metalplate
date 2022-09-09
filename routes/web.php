<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\CutController;
use App\Http\Controllers\Admin\EstimateController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/usercheck', [HomeController::class, 'userCheck'])->name('usercheck');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/movie', [MovieController::class, 'index'])->name('movie');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/guides', [HomeController::class, 'guides'])->name('guides');
Route::get('/flow', [HomeController::class, 'flow'])->name('flow');
Route::get('/case', [HomeController::class, 'case'])->name('case');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/mypage', [HomeController::class, 'mypage'])->name('mypage');
Route::get('/pip', [HomeController::class, 'pip'])->name('pip');
Route::get('/itazai', [HomeController::class, 'itazai'])->name('itazai');
Route::get('/mizukiri', [HomeController::class, 'mizukiri'])->name('mizukiri');
Route::get('/alumiboard', [HomeController::class, 'alumiboard'])->name('alumiboard');
Route::get('/member', [HomeController::class, 'member'])->name('member');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/cut', [HomeController::class, 'cut'])->name('cut');
Route::get('/getcolor', [HomeController::class, 'getcolor'])->name('getcolor');
Route::get('/getthick', [HomeController::class, 'getthick'])->name('getthick');
Route::get('/order_list', [HomeController::class, 'orderList'])->name('orderList');

Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/estimate', [HomeController::class, 'estimate'])->name('estimate');
Route::post('/estimate', [HomeController::class, 'estimate'])->name('estimate');
Route::post('/deleteestimate', [HomeController::class, 'deleteEstimate'])->name('deleteEstimate');

Route::get('/content/{id}/{slug}', [HomeController::class, 'content'])->name('content');
Route::get('/menucontent/{id}/{slug}', [HomeController::class, 'menucontent'])->name('menucontent');

Route::post('/getcontent', [HomeController::class, 'getcontent'])->name('getcontent');

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::middleware('admin')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

        #Menu
        Route::get('menu', [MenuController::class, 'index'])->name('admin_menu');
        Route::get('menu/add', [MenuController::class, 'add'])->name('admin_menu_add');
        Route::post('menu/create', [MenuController::class, 'create'])->name('admin_menu_create');
        Route::get('menu/edit/{id}', [MenuController::class, 'edit'])->name('admin_menu_edit');
        Route::post('menu/update/{id}', [MenuController::class, 'update'])->name('admin_menu_update');
        Route::get('menu/delete/{id}', [MenuController::class, 'delete'])->name('admin_menu_delete');
        Route::get('menu/show', [MenuController::class, 'show'])->name('admin_menu_show');

        #Content
        Route::prefix('content')->group(function () {
            Route::get('/', [ContentController::class, 'index'])->name('admin_content');
            Route::get('add', [ContentController::class, 'add'])->name('admin_content_add');
            Route::post('store', [ContentController::class, 'store'])->name('admin_content_store');
            Route::get('edit/{id}', [ContentController::class, 'edit'])->name('admin_content_edit');
            Route::post('update/{id}', [ContentController::class, 'update'])->name('admin_content_update');
            Route::get('delete/{id}', [ContentController::class, 'delete'])->name('admin_content_delete');
            Route::get('show', [ContentController::class, 'show'])->name('admin_content_show');
        });

        #Image
        Route::prefix('image')->group(function () {
            Route::get('add/{content_id}', [ImageController::class, 'add'])->name('admin_image_add');
            Route::post('store/{content_id}', [ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{content_id}', [ImageController::class, 'delete'])->name('admin_image_delete');
            Route::get('show', [ImageController::class, 'show'])->name('admin_image_show');
        });

        #Setting
        Route::get('setting', [SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [SettingController::class, 'update'])->name('admin_setting_update');

        #Message
        Route::prefix('message')->group(function () {
            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MessageController::class, 'delete'])->name('admin_message_delete');
            Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
        });

        #Comment
        Route::prefix('comment')->group(function () {
            Route::get('/', [CommentController::class, 'index'])->name('admin_comment');
            Route::post('update/{id}', [CommentController::class, 'update'])->name('admin_comment_update');
            Route::get('delete/{id}', [CommentController::class, 'delete'])->name('admin_comment_delete');
            Route::get('show/{id}', [CommentController::class, 'show'])->name('admin_comment_show');
        });

        #Faq
        Route::prefix('faq')->group(function () {
            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('add', [FaqController::class, 'add'])->name('admin_faq_add');
            Route::post('store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [FaqController::class, 'delete'])->name('admin_faq_delete');
            Route::get('show', [FaqController::class, 'show'])->name('admin_faq_show');
        });
        #cut
        Route::prefix('cut')->group(function () {
            Route::get('/', [CutController::class, 'index'])->name('admin_cut');
            Route::get('get_material', [CutController::class, 'get_material'])->name('admin_cut_get_material');
            Route::get('material', [CutController::class, 'material'])->name('admin_cut_material');
            Route::delete('material', [CutController::class, 'material'])->name('admin_cut_material');
            Route::post('material', [CutController::class, 'material'])->name('admin_cut_material');
            Route::put('material', [CutController::class, 'material'])->name('admin_cut_material');

            Route::get('get_color', [CutController::class, 'get_color'])->name('admin_cut_get_color');
            Route::get('color', [CutController::class, 'color'])->name('admin_cut_color');
            Route::delete('color', [CutController::class, 'color'])->name('admin_cut_color');
            Route::post('color', [CutController::class, 'color'])->name('admin_cut_color');
            Route::put('color', [CutController::class, 'color'])->name('admin_cut_color');
        });

        #estimate
        Route::prefix('estimate')->group(function () {
            Route::get('/', [EstimateController::class, 'index'])->name('admin_estimate');
            Route::post('/', [EstimateController::class, 'add_estimate'])->name('admin_add_estimate');
        });

        #User
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_user');
            Route::get('add', [\App\Http\Controllers\Admin\UserController::class, 'add'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'delete'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });

    });

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('user_profile');

    #Comment
    Route::get('comment', [UserController::class, 'comment'])->name('user_comment');
    Route::get('delete/{id}', [UserController::class, 'comment_delete'])->name('user_comment_delete');

    #Content
    Route::prefix('content')->group(function () {
        Route::get('/', [\App\Http\Controllers\ContentController::class, 'index'])->name('user_content');
        Route::get('add', [\App\Http\Controllers\ContentController::class, 'add'])->name('user_content_add');
        Route::post('store', [\App\Http\Controllers\ContentController::class, 'store'])->name('user_content_store');
        Route::get('edit/{id}', [\App\Http\Controllers\ContentController::class, 'edit'])->name('user_content_edit');
        Route::post('update/{id}', [\App\Http\Controllers\ContentController::class, 'update'])->name('user_content_update');
        Route::get('delete/{id}', [\App\Http\Controllers\ContentController::class, 'delete'])->name('user_content_delete');
        Route::get('show', [\App\Http\Controllers\ContentController::class, 'show'])->name('user_content_show');
    });

    #Image
    Route::prefix('image')->group(function () {
        Route::get('add/{content_id}', [\App\Http\Controllers\ImageController::class, 'add'])->name('user_image_add');
        Route::post('store/{content_id}', [\App\Http\Controllers\ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}/{content_id}', [\App\Http\Controllers\ImageController::class, 'delete'])->name('user_image_delete');
        Route::get('show', [\App\Http\Controllers\ImageController::class, 'show'])->name('user_image_show');
    });

});

//Route::get('/admin', [HomeController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');