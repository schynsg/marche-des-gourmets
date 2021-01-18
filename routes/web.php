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


/*
Route::get('/', function () {
    return view('index');
});
*/
Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);


/*
Route::get('/about', function () {
    return view('about');
});
*/
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);


/*
Route::get('/exhibitors', function () {
    return view('exhibitors');
});
*/
Route::get('/exhibitors', [\App\Http\Livewire\Exhibitors::class, 'render']);


/*
Route::get('/new-exhibitor', function () {
    return view('newExhibitor');
});
*/
Route::get('/new-exhibitor', [\App\Http\Controllers\ApplicationController::class, 'create']);


/*
Route::get('/infos', function () {
    return view('infos');
});
*/
Route::get('/infos', [\App\Http\Controllers\InfoController::class, 'index']);

/*
Route::get('/contact', function () {
    return view('contact');
});
*/
Route::get('/contact', [\App\Http\Controllers\MessageController::class, 'create']);


/*
Route::get('/pictures', function () {
    return view('pictures');
});
*/
Route::get('/pictures', [\App\Http\Controllers\PictureController::class, 'index']);

/*
Route::get('/ticketing', function () {
    return view('ticketing');
});
*/
Route::get('/ticketing', [\App\Http\Controllers\TicketController::class, 'index']);


Route::post('/newApplication', [\App\Http\Controllers\ApplicationController::class, 'store']);

Route::post('/newMessage', [\App\Http\Controllers\MessageController::class, 'store']);


Route::get('/payment', [\App\Http\Controllers\CheckoutController::class, 'index']);
Route::post('/payment', [\App\Http\Controllers\CheckoutController::class, 'store']);

//test
