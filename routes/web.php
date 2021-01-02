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
Route::get('/exhibitors', [\App\Http\Controllers\ExhibitorController::class, 'index']);


/*
Route::get('/new-exhibitor', function () {
    return view('newExhibitor');
});
*/
Route::get('/new-exhibitor', [\App\Http\Controllers\ExhibitorController::class, 'create']);


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
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);


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

