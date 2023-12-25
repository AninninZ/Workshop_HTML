<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/my-route', function(){
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "laravel";
    return view('myfolder.mypage', $data);
});

Route::post("/my-route", function(Request $req){
    $data['myinput'] = $req-> input('myinput');
    return view('myroute', $data);
});


Route::get('/multification', function(){
    return view('multi.multi_input');
});

Route::post("/multification", function(Request $req){
    $data['number'] = $req -> input('number');
    return view('multi.multi_result', $data);
});
