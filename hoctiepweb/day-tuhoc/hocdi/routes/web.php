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

Route::get('dogs/{id}', function ($id) {
    return 'Dog' . $id;
});
Route::get('dogs/{id}/{name}',function ($id,$name) {
    return 'Dog' . $id . ' name is: ' . $name;});

Route::get('/',function () {
   return redirect('dogs');
});

Route::get('dogs',function () {
   return 'Rất nhiều chó';
});

Route::get('about',function () {
    $number_of_dog=9000;
    return view('about',compact('number_of_dog'));
});

