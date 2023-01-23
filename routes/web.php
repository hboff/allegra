<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrteController;

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
//Route::get('/schimmelpilz', [OrteController::class, 'schimmelpilz'], function () {
//});
//
//Route::get('/', [OrteController::class, 'index'], function () {
//});
//
//Route::get('/gewerbeimmobilien', [OrteController::class, 'gewerbeimmobilien'], function () {
//});
//
//Route::get('/grundstuecke-und-rechte', [OrteController::class, 'grundstuecke'], function () {
//});
//
//Route::get('/landwirtschaftliche-immobilien', [OrteController::class, 'landwirtschaftliche'], function () {
//});
//
//Route::get('/sonderimmobilien', [OrteController::class, 'sonderimmobilien'], function () {
//});
//
//Route::get('/wohnimmobilien', [OrteController::class, 'wohnimmobilien'], function () {
//});
//Route::get('/verkehrswertverfahren', [OrteController::class, 'verkehrswertverfahren'], function () {
//});
//Route::get('/sachwertverfahren', [OrteController::class, 'sachwertverfahren'], function () {
//});
//
//Route::get('/ertragswertverfahren', [OrteController::class, 'ertragswertverfahren'], function () {
//});
//
//Route::get('/ueber-uns', [OrteController::class, 'ueberuns'], function () {
//});
//
//


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
Route::get('/verkehrswertverfahren',function () {
    return view('show/verkehrswertverfahren');
});
Route::get('/sachwertverfahren', function () {
    return view('show/sachwertverfahren');
});

Route::get('/ertragswertverfahren', function () {
    return view('show/ertragswertverfahren');
});

Route::get('/ueber-uns', function () {
    return view('show/ueber-uns');
});