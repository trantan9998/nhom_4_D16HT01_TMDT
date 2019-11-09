<?php

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

use App\Http\Controllers\theloaiController;
use Illuminate\Support\Facades\Route;
use App\theloai;
use App\loaitin;
use function foo\func;

Route::get('/', function () {
    return view('welcome');
});

Route::get('check-body', 'testController@check');

//dinh danh route
Route::get('/about/gg', function(){
    echo "xin chao";
})->name('myroute');
//truyen tham so
Route::get('hoten/{ten}',function($ten){
    echo "ten cua ban".$ten;
});
//goi tu controller
Route::get('Contro','MyController@xinchao');
//route group
Route::group(['prefix' => 'MyGroup'],function(){
    Route::get('user1',function(){
        echo "ok";
    });
    Route::get('user2',function (){
        echo "ok1";
    });
});

Route::get('admin/dangnhap','userController@getDangnhap');
Route::post('admin/dangnhap','userController@postDangnhap');
Route::get('admin/dangki','userController@getDangki');
Route::post('admin/dangki','userController@postDangki');
Route::get('admin/logout','userController@getDangxuat')->name('admin.logout');
Route::get('admin/profile/{id}','userController@getProfile');

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){
    Route::group(['prefix'=>'theloai'],function(){
        Route::get('list','theloaiController@getList');

        Route::get('them','theloaiController@getThem');
        Route::post('them','theloaiController@postThem');

        Route::get('sua/{id}','theloaiController@getSua');
        Route::post('sua/{id}','theloaiController@postSua');

        Route::get('xoa/{id}','theloaiController@getXoa');
    });
    Route::group(['prefix'=>'loaitin'],function (){
        Route::get('list','loaitinController@getList');

        Route::get('them','loaitinController@getThem');
        Route::post('them','loaitinController@postThem');

        Route::get('sua/{id}','loaitinController@getSua');
        Route::post('sua/{id}','loaitinController@postSua');

        Route::get('xoa/{id}','loaitinController@getXoa');

    });
    Route::group(['prefix'=>'tintuc'],function (){
        Route::get('list','tintucController@getList');

        Route::get('them','tintucController@getThem');
        Route::post('them','tintucController@postThem');

        Route::get('sua/{id}','tintucController@getSua');
        Route::post('sua/{id}','tintucController@postSua');

        Route::get('xoa/{id}','tintucController@getXoa');
    });
    Route::group(['prefix'=>'slide'],function (){
        Route::get('list','SlideController@getList');

        Route::get('them','SlideController@getThem');
        Route::post('them','SlideController@postThem');

        Route::get('sua/{id}','SlideController@getSua');
        Route::post('sua/{id}','SlideController@postSua');

        Route::get('xoa/{id}','SlideController@getXoa');
    });
    Route::group(['prefix'=>'user'],function (){
        Route::get('list','userController@getList');

        Route::get('them','userController@getThem');
        Route::post('them','userController@postThem');

        Route::get('sua/{id}','userController@getSua');
        Route::post('sua/{id}','userController@postSua');

        Route::get('xoa/{id}','userController@getXoa');
    });
    Route::group(['prefix'=>'tbl_new'],function (){
        Route::get('list','tbl_newController@getList');

        Route::get('them','tbl_newController@getThem');
        Route::post('them','tbl_newController@postThem');

        Route::get('sua/{id}','tbl_newController@getSua');
        Route::post('sua/{id}','tbl_newController@postSua');

        Route::get('xoa/{id}','tbl_newController@getXoa');
    });

    Route::group(['prefix'=>'ajax'],function (){
        Route::get('loaitin/{idTheLoai}','AjaxController@getAjax');
    });
});
Route::group(['prefix'=>'layouts'],function (){
    Route::group(['prefix'=>'layout'],function (){
    });
});

Route::get('trangchu','PagesController@trangchu');
Route::get('loaisanpham/{id}','PagesController@loaisanpham');
Route::get('chitietsanpham/{id}','PagesController@chitietsanpham');

Route::get('theloaisanpham/{id}','PagesController@theloaisanpham');

Route::get('tintuc','PagesController@tbl_new');

Route::get('giohang/{id}','PagesController@giohang');


Route::get('lienhe','PagesController@lienhe');

Route::get('chitiettintuc/{id}','PagesController@chitiettintuc');
Route::post('chitiettintuc/{id}','PagesController@postchitiettintuc');




