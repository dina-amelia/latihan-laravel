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

Route::get('halo' , function (){
    //me-return string
    return "Halo, selamat datang di tutorial Laravel ";
});

Route::get('blog' , function (){
    //me-return view
    return view('blog');
});
