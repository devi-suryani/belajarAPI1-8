<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthApiController@login');
    Route::post('logout', 'App\Http\Controllers\AuthApiController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthApiController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthApiController@me');

});

//soal1
//Tampilkan artikel dengan id=1 users_id=1
Route::get('soal1','App\Http\Controller\BabSatuController@a1');

//soal2
//Tampilkan artikel dengan id=1 id=1
Route::get('soal2','App\Http\Controller\BabsatuController@a2');

//soal3
//Tampilkan artikel dengan id=1 users_id=1
Route::get('soal3','App\Http\Controller\BabsatuController@a3');


//soal4
//Tampilkan artikel dengan id=1 users_id=1
Route::get('soal4','App\Http\Controller\BabsatuController@a4');


//soal5
//Tampilkan artikel dengan id=1 users_id=1
Route::get('soal5','App\Http\Controller\BabduaController@a5');

//soal6
//Tampilkan artikel dengan id=1 users_id=1
Route::get('soal6','App\Http\Controller\BabduaController@a6');




Route::apiresource('artikel',App\Http\Controllers\ArtikelAPIController::class);
Route::apiresource('kategori_artikel',App\Http\Controllers\KategoriArtikelAPIController::class);
Route::apiresource('berita',App\Http\Controllers\BeritaAPIController::class);
Route::apiresource('kategori_berita',App\Http\Controllers\KategoriBeritaAPIController::class);
Route::apiresource('galeri',App\Http\Controllers\GaleriAPIController::class);
Route::apiresource('kategori_galeri',App\Http\Controllers\KategoriGaleriAPIController::class);
Route::apiresource('pengumuman',App\Http\Controllers\PengumumanAPIController::class);
Route::apiresource('kategori_pengumuman',App\Http\Controllers\KategoriPengumumanAPIController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
