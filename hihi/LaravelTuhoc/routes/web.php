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

//bắt đầu tự học
Route::get('hello-world',function () {
   return view('hello-world');
});

//tham số bắt buộc nằm trong dấu {}
Route::get('hello-world/{year}/{yourname?}',function ($year,$yourname=null) {
    $hello_string = '';
    if($yourname==null) {
        $hello_string='Hello world, '. $year;

    }
    else {
        $hello_string = 'Hello world, ' . $year . '. My name is ' . $yourname;

    }
    return view('hello-world')->with('hello_str',$hello_string);
});

//tham số tùy chọn{}/{..?}

Route::get('/dashboard',function () {

})->middleware('checkage');

//gán route cho RoleMiddleware
Route::get('/role', [
   'middleware' => 'role:superadmin',
   'uses' => 'MainController@checkRole',
]);

Route::get('/',function () {

})->middleware('web');
Route::group(['middleware' => ['web']],  function () {

});
