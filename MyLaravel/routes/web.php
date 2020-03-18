<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Khoahoc',function () {
    return "Đầu tiên là tạo được cái route này rồi huhu";
});
Route::get('Anh/Laravel',function () {
   echo "<h1>tiên sư mày - không được quên</h1>";
});

//truyền tham số
Route::get('Ten/{ten}',function ($ten) {
   echo "tên tôi là: " . $ten;
});
//->http://localhost:8000/Ten/Chu_Ngoc_Anh

Route::get('la/{ngay}',function ($ngay) {
   echo "nhà tôi" .$ngay;
})->where(['ngay'=>'[a-zA-Z]+']);
//->where(['ngay'=>'[0-9]+']);//chỉ cho phép theo số
//tìm hiểu thêm regular

//định danh
Route::get('Route1',['as'=>'myroute',function() {
    echo "hê lô";
}]);

Route::get("Route2",function () {
    echo "helu";
})->name('myroute2');
Route::get('Goiten',function () {
   return redirect()->route('myroute2');
});

//tạo group
Route::group(['prefix'=>'mygroup'],function () {
   Route::get('user1',function () {
       echo "thằng 1";
       });
    Route::get('user2',function () {
        echo "thằng 2";
    });
     Route::get('user3',function () {
         echo "thằng 3";
     });
});

//phần gọi controller

Route::get('goiController','Mycontroller@xinchao');

Route::get('thamso/{ten}','MyController@meoi');


//làm việc với uRL

Route::get('MyRequest','MyController@GetURL');

//gửi nhận dữ liệu với request
Route::get('getForm',function () {
   return view('postForm');//trả lại cái view postForm
});
//cái post này nhận dữ liệu từ form lên

Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);
