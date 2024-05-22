<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DataKreditController;
use App\Http\Controllers\DataQRISController;
use App\Http\Controllers\PengajuanQRISController;


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

Route::get('/workspace', function () {
    return view('welcome');
});
Route::get('/', [LandingPageController::class, 'index']);

Route::get('/info', [LandingPageController::class, 'info']);

Route::get('/kredit', [LandingPageController::class, 'kredit']);
Route::get('/kredit/detail-kredit-umum', [LandingPageController::class, 'detail_kredit_1'])->name('detail-kredit-1');
Route::get('/kredit/1', [LandingPageController::class, 'form_kredit_1'])->name('form-kredit-1');
Route::get('/error/maintenance/', [LandingPageController::class, 'maintenance'])->name('maintenance');
Route::get('/digital-saving', [LandingPageController::class, 'digital_saving']);
Route::get('/detail-saving-1', [LandingPageController::class, 'detail_1']);
Route::get('/detail-saving-2', [LandingPageController::class, 'detail_2']);
Route::get('/detail-saving-3', [LandingPageController::class, 'detail_3']);
Route::get('/detail-saving-4', [LandingPageController::class, 'detail_4']);
Route::get('/uker-choose', [LandingPageController::class, 'uker_choose']);
Route::get('/info-ktp', [LandingPageController::class, 'info_ktp']);
Route::get('/get-kantor-options', [LandingPageController::class, 'getKantorOptions'])->name('get.kantor.options');
Route::get('/get-categoryMerchant-options', [LandingPageController::class, 'getCategoryMerchOptions'])->name('get.categoryMerchant.options');
Route::get('/get-dataJaminan-options', [LandingPageController::class, 'getdataJaminanOptions'])->name('get.dataJaminan.API');
Route::get('/get-uker-data/{id}', [LandingPageController::class, 'getUkerData']);

Route::post('/proses', [DataKreditController::class, 'saveData'])->name('post.dataKredit.API');
Route::get('/endForm', [DataKreditController::class, 'successSend'])->name('success.dataKredit.API');

Route::post('/prosesQRIS', [DataQRISController::class, 'saveData'])->name('post.dataQRIS.API');


Route::get('/reload-captcha', [DataKreditController::class, 'reloadCaptcha'])->name('get.reloadCaptcha');
Route::get('/get-job-suggestions', [DataKreditController::class, 'getJobSuggestions'])->name('get.job.API');

Route::get('/check-pengajuan-qris', [PengajuanQRISController::class, 'checkPengajuanQRIS']);


// Route::controller(\App\Http\Controllers\UserController::class)-> group(function(){
//     Route::get('/login','login')->middleware([\App\Http\Middleware\OnlyGuestMiddleware::class]);
// });

// QRIS Route
Route::get('/landing', [LandingPageController::class, 'landingQris'])->name('landing.qris');
Route::get('/landing/createqris', [DataQRISController::class, 'createQris'])->name('create.qris');
