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
    return view('frontview.home');
});

Route::get('home', function () {
    return view('frontview.home');
});

Route::get('about', function () {
    return view('frontview.about');
});

Route::get('vegetables', function () {
    return view('frontview.vegetables');
});

Route::get('custumers', function () {
    return view('frontview.custumers');
});

Route::get('contact', function () {
    return view('frontview.contact');
});

Route::get('login', function () {
    return view('login');
});
