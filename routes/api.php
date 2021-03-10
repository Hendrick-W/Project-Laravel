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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Router Produk
Route::get('/produk', 'ProductController@index');
Route::post('/produk', 'ProductController@simpan');
Route::put('/produk/{id}', 'ProductController@update');
Route::delete('/produk/{id}', 'ProductController@hapus');

//Router Pesanan
Route::get('/pesanan', 'PesananController@index');
Route::post('/pesanan', 'PesananController@simpan');
Route::put('/pesanan/{id}', 'PesanantController@update');
Route::delete('/pesanan/{id}', 'PesananController@hapus');

//Router Quiz
Route::get('/quiz', 'QuizController@index');
Route::post('/quiz', 'QuizController@simpan');
Route::put('/quiz/{id}', 'QuizController@update');
Route::delete('/quiz/{id}', 'QuizController@hapus');
