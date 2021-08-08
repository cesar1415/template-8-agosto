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

Route::get('index', function () {
    return view('layouts.admin.index');
});

Route::get('acercade', function(){
    return view('layouts.admin.acercade');
});

Route::get('contacto', function(){
    return view('layouts.admin.contacto');
});
