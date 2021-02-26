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
    // return view('welcomer');
    return 'Hendrick';
});
Route::get('/test', 'TestController@index');
// Route::get('/testaja', 'TestController@testAja');

//Router Produk
Route::get('/produk', 'ProductController@index');
Route::post('/produk', 'ProductController@simpan');
Route::put('/produk', 'ProductController@update');
Route::delete('/produk', 'ProductController@hapus');

//Router User
Route::get('/user', 'UserController@index');
Route::post('/user', 'UserController@simpan');
Route::put('/user', 'UserController@update');
Route::delete('/user', 'UserController@hapus');

//Router Catalog
Route::get('/catalog', 'CatalogController@index');
Route::post('/catalog', 'CatalogController@simpan');
Route::put('/catalog', 'CatalogController@update');
Route::delete('/catalog', 'CatalogController@hapus');

Route::resource('photos', PhotoController::class);
// Route::resource('photos', 'PhotoController')->only([
//     'index', 'show'
// ]);
// Route::resource('photos', 'PhotoController')->except([
//     'create', 'store', 'update', 'destroy'
// ]);


