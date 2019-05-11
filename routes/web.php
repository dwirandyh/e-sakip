<?php

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

Route::get('/', 'HomeController@index');

Route::get('/login', 'PetugasSatkerController@showLoginForm')->name('login');
Route::post('/login', 'PetugasSatkerController@login');
Route::post('/logout', 'PetugasSatkerController@logout');

Route::post('/evaluator/login', 'Evaluator\EvaluatorController@login');
Route::post('/evaluator/logout', 'Evaluator\EvaluatorController@logout');

Route::get('/administrator/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/administrator/login', 'Auth\LoginController@login');
Route::post('/administrator/logout', 'Auth\LoginController@logout');



Route::middleware('auth:web')->group(function(){
    Route::get('/administrator', 'Administrator\DashboardController@index');
    \App\Helper::generateCRUDRoute('/administrator/satuan-kerja/petugas', 'Administrator\SatuanKerja\PetugasController');
    \App\Helper::generateCRUDRoute('/administrator/satuan-kerja', 'Administrator\SatuanKerja\SatuanKerjaController');
    \App\Helper::generateCRUDRoute('/administrator/evaluator', 'Administrator\EvaluatorController');
});

Route::middleware('auth:evaluator')->group(function(){
    Route::get('/evaluator', 'Evaluator\DashboardController@index');

    \App\Helper::generateCRUDRoute('/evaluator/penilaian', 'Evaluator\PenilaianController');
    Route::get('/evaluator/penilaian/evaluasi/{id}', 'Evaluator\PenilaianController@evaluasiForm');
    Route::post('/evaluator/penilaian/evaluasi/{id}/store', 'Evaluator\PenilaianController@submitEvaluasi');
});


Route::middleware('auth:petugas')->group(function(){

    Route::get('/home', 'HomeController@home');

    \App\Helper::generateCRUDRoute('/penilaian', 'PenilaianController');
    Route::get('/penilaian/submit/{id}', 'PenilaianController@submitForm');
    Route::post('/penilaian/submit/{id}/store', 'PenilaianController@submit');

    Route::get('/penilaian/raport-sementara/{id}', 'PenilaianController@temporaryReport');
    Route::get('/penilaian/raport-sementara/{id}/cetak', 'PenilaianController@temporaryReportPdf');

    Route::get('/penilaian/revisi/{id}', 'PenilaianController@revisiForm');
    Route::post('/penilaian/revisi/{id}/submit', 'PenilaianController@submitRevisi');
});

