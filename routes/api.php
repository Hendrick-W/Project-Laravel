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
Route::put('/produk', 'ProductController@update');
Route::delete('/produk/{id}/{tester}', 'ProductController@hapus');
