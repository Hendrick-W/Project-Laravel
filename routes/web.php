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

// Route::get('/', function () {
//     return view('app');
// })->name('home');
//App Router

//Home
Route::get('/', 'HomeController@index')->name('home');

//Product
Route::get('/product', 'ProductController@index')->name('product');
Route::post('/product/add', 'ProductController@create')->name('product.add');

//Promo
Route::get('/promo', 'PromoController@index')->name('promo');

//Contact
Route::get('/contact', 'ContactController@index')->name('contact');
// Route::get('/testaja', 'TestController@testAja');

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


