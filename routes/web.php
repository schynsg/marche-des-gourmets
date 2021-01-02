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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/exhibitors', function () {
    return view('exhibitors');
});
Route::get('/new-exhibitor', function () {
    return view('newExhibitor');
});
Route::get('/infos', function () {
    return view('infos');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/pictures', function () {
    return view('pictures');
});
Route::get('/ticketing', function () {
    return view('ticketing');
});
