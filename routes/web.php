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
Route::get('/gewerbeimmobilien', function () {
    return view('show/gewerbeimmobilien');
});
Route::get('/grundstuecke-und-rechte', function () {
    return view('show/grundstuecke-und-rechte');
});
Route::get('/landwirtschaftliche-immobilien', function () {
    return view('show/landwirtschaftliche-immobilien');
});
Route::get('/sonderimmobilien', function () {
    return view('show/sonderimmobilien');
});
Route::get('/wohnimmobilien', function () {
    return view('show/wohnimmobilien');
});