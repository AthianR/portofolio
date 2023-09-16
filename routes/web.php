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
    return view('home');
});

Route::get('/organisasi', function(){
    return view('profile.organisasi');
});

Route::get('/sertifikat', function(){
    return view('profile.sertifikat');
});

Route::get('/project', function(){
    return view('profile.project');
});

Route::get('/about', function(){
    return view('about');
});
