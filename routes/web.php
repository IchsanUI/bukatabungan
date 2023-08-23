<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

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

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/', [LandingPageController::class, 'index']);
Route::get('/info', [LandingPageController::class, 'info']);
Route::get('/detail-saving-1', [LandingPageController::class, 'detail_1']);
Route::get('/detail-saving-2', [LandingPageController::class, 'detail_2']);
Route::get('/detail-saving-3', [LandingPageController::class, 'detail_3']);
Route::get('/detail-saving-4', [LandingPageController::class, 'detail_4']);
Route::get('/uker-choose', [LandingPageController::class, 'uker_choose']);
Route::get('/get-kantor-options', [LandingPageController::class, 'getKantorOptions'])->name('get.kantor.options');;
Route::get('/get-uker-data/{id}', [LandingPageController::class, 'getUkerData']);;


// Route::controller(\App\Http\Controllers\UserController::class)-> group(function(){
//     Route::get('/login','login')->middleware([\App\Http\Middleware\OnlyGuestMiddleware::class]);
// });
